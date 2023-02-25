<?php
namespace App\Http\Controllers\manager;

use App\Http\Controllers\Controller;
use App\Models\Invitations;
use App\Models\Guests;
use Illuminate\Http\Request; 
use File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Jorenvh\Share\ShareFacade;

class indexController extends Controller
{
    public function index(Request $req)
    {
        if(session('dataUser') == null){
            $req->session()->flush('dataUser');
            $req->session()->flush('themes');
            return redirect('/login');
        }
        if(session('themes') == null){
            $req->session()->flush('dataUser');
            $req->session()->flush('themes');
            return redirect('/login');
        }
        $check = Invitations::where('id_users', session('dataUser')->id)->first();
        return view('pages.manager.index', compact('check'));
    }
    
    public function initInvitation(Request $req)
    {
        if(session('dataUser') == null){
            $req->session()->flush('dataUser');
            $req->session()->flush('themes');
            return redirect('/login');
        }
        if(session('themes') == null){
            $req->session()->flush('dataUser');
            $req->session()->flush('themes');
            return redirect('/login');
        }
        $hsl = Invitations::create([
            'id_users' => session('dataUser')->id,
        ]);
        return redirect()->back()->with(['message' => 'Please Complete the Data below', 'color' => 'alert-success']);
    }
    public function createInvitation(Request $req)
    {
        if(session('dataUser') == null){
            $req->session()->flush('dataUser');
            $req->session()->flush('themes');
            return redirect('/login');
        }
        if(session('themes') == null){
            $req->session()->flush('dataUser');
            $req->session()->flush('themes');
            return redirect('/login');
        }
        $validate = Validator::make($req->all(),[
            'bg_header' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);
        if ($validate->fails()) {
            return redirect()->back()->with(['message' => 'The Image does not meet the Requirements', 'color' => 'alert-warning']);
        }else{
            $getLengthMale= \Str::length($req->username_male);
            $getLengthFemale= \Str::length($req->username_female);
            if($getLengthMale > 16){
                return redirect()->back()->with(['message' => 'The Username male must be less than 15 characters', 'color' => 'alert-warning']);
            }else if($getLengthFemale > 16){
                return redirect()->back()->with(['message' => 'The Username female must be less than 15 characters', 'color' => 'alert-warning']);
            }
            $image = '';
            if($req->hasFile('bg_header')){
                $imageName=time().session('dataUser')->id.'.'.$req->bg_header->extension();
                $folderName=\Str::slug(session('dataUser')->name);
                $path = public_path('users-assets/'.$folderName);
                if(!File::isDirectory($path)){
                    File::makeDirectory($path, $mode = 0777, true, true);
                }
                $req->bg_header->move(public_path('users-assets/'.$folderName), $imageName);
                $image = "users-assets/".$folderName."/$imageName";
            }else {
                $image = $req->default;
            }
            $hsl = Invitations::where('id_users', session('dataUser')->id)->update([
                'name_male' => $req->name_male,
                'username_male' => $req->username_male,
                'name_female' => $req->name_female,
                'username_female' => $req->username_female,
                'father_male' => $req->father_male,
                'mother_male' => $req->mother_male,
                'father_female' => $req->father_female,
                'mother_female' => $req->mother_female,
                'akad_date' => $req->akad_date,
                'akad_time' => $req->akad_time,
                'resepsi_date' => $req->resepsi_date,
                'resepsi_time' => $req->resepsi_time,
                'bg_header' => $image,
                'header_message' => $req->header_message,
                'backsound' => $req->backsound,
                'place' => $req->place,
                'address' => $req->address,
                'link_address' => $req->link_address,
                'footer_message' => $req->footer_message,
            ]);
            if($hsl){
                // $update = Invitations::where('id_users', session('dataUser')->id)->first();
                // session(['themes' => $update]);
                return redirect()->back()->with(['message' => 'Invitation Data Succefully to save', 'color' => 'alert-success']);
            }else{
                return redirect()->back()->with(['message' => 'Invitation Data Unsuccess to save', 'color' => 'alert-danger']);

            }
        }
    }
    public function send(Request $req)
    {
        if(session('dataUser') == null){
            $req->session()->flush('dataUser');
            $req->session()->flush('themes');
            return redirect('/login');
        }
        if(session('themes') == null){
            $req->session()->flush('dataUser');
            $req->session()->flush('themes');
            return redirect('/login');
        }
        $slugin = \Str::slug($req->name);
        $link = "http://127.0.0.1:8000/".$req->id_invitation."/invitation/".$slugin;
        $hsl = Guests::create([
            'id_invitation' => $req->id_invitation,
            'name' => $req->name,
            'link' => $link
        ]);
        // $share = ShareFacade::page($link)->whatsapp();
        if($hsl){
            session(['send' => $hsl]);
            return  redirect('sendpage')->with(['message' => 'Invitation Successfully to send', 'color' => 'alert-success']);
        }else{
            return redirect()->back()->with(['message' => 'Invitation Unsuccess to send', 'color' => 'alert-danger']);

        }
    }
    public function sendpage()
    {
        if(session('dataUser') == null){
            $req->session()->flush('dataUser');
            $req->session()->flush('themes');
            return redirect('/login');
        }
        if(session('themes') == null){
            $req->session()->flush('dataUser');
            $req->session()->flush('themes');
            return redirect('/login');
        }

        $data = Guests::where('id', session('send')->id)->first();
        $inv = Invitations::where('id_users', session('send')->id)->first();
        $share = ShareFacade::page($data->link)
        ->whatsapp()
        ->facebook()
        ->twitter()
        ->telegram()->getRawLinks();
        return view('pages.manager.sendpage', compact('data', 'inv','share'));
    }
}
?>