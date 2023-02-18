<?php
namespace App\Http\Controllers\manager;

use App\Http\Controllers\Controller;
use App\Models\Invitations;
use Illuminate\Http\Request; 
use File;
use Illuminate\Support\Facades\Validator;
class indexController extends Controller
{
    public function index()
    {
        if(session('dataUser') == null){
            return redirect('/login');
        }
        if(session('themes') == null){
            return redirect('/login');
        }
        $check = Invitations::where('id_users', session('dataUser')->id)->first();
        return view('pages.manager.index', compact('check'));
    }
    
    public function initInvitation(Request $req)
    {
        $hsl = Invitations::create([
            'id_users' => session('dataUser')->id,
        ]);
        return redirect()->back()->with(['message' => 'Please Complete the Data below', 'color' => 'alert-success']);
    }
    public function createInvitation(Request $req)
    {
        $validate = Validator::make($req->all(),[
            'bg_header' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);
        if ($validate->fails()) {
            return redirect()->back()->with(['message' => 'The Image does not meet the Requirements', 'color' => 'alert-warning']);

        }else{
            $image = '';
            if($req->hasFile('bg_header')){
                $imageName=time().session('dataUser')->id.'.'.$req->bg_header->extension();
                $path = public_path('users-assets/'.session('dataUser')->name);
                if(!File::isDirectory($path)){
                    return File::makeDirectory($path, $mode = 0777, true, true);
                }
                $req->bg_header->move(public_path('users-assets/'.session('dataUser')->name), $imageName);
                $image = "users-assets/".session('dataUser')->name."/$imageName";
            }else {
                $image = $req->default;
            }
            $hsl = Invitations::where('id_users', session('dataUser')->id)->update([
                'name_male' => $req->name_male,
                'username_male' => $req->username_male,
                'name_female' => $req->name_female,
                'username_female' => $req->username_female,
                'wedding_date' => $req->wedding_date,
                'wedding_time' => $req->wedding_time,
                'quotes' => $req->quotes,
                'bg_header' => $image,
            ]);
            if($hsl){
                return redirect()->back()->with(['message' => 'Invitation Data Succefully to save', 'color' => 'alert-success']);
            }else{
                return redirect()->back()->with(['message' => 'Invitation Data Unsuccess to save', 'color' => 'alert-danger']);

            }
        }
    }
}
?>