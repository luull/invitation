<?php
namespace App\Http\Controllers\manager;

use App\Http\Controllers\Controller;
use App\Models\Invitations;
use Illuminate\Http\Request; 
use App\Models\Guests;
class ScanningController extends Controller
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
        return view('pages.manager.scanning');
    }
    public function scanning(Request $req)
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
        // dd($req->getLink);
        $update = Guests::where('link', $req->getLink)->update([
            'status' => '1'
        ]);
        if($update){
            return redirect()->back()->with(['message' => 'Guests Successfully Attended', 'color' => 'alert-success']);
        }else{
            return redirect()->back()->with(['message' => 'Guests Failed to Attend', 'color' => 'alert-danger']);

        }

    }
    
  
}
?>