<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Invitations;
use Illuminate\Http\Request; 
class indexController extends Controller
{
    public function index(Request $req)
    {
        // if(session('dataUser') == null){
        //     $req->session()->flush('dataUser');
        //     $req->session()->flush('themes');
        //     return redirect('/login');
        // }
        // if(session('themes') == null){
        //     $req->session()->flush('dataUser');
        //     $req->session()->flush('themes');
        //     return redirect('/login');
        // }
        // $check = Invitations::where('id_users', session('dataUser')->id)->first();
        return view('pages.admin.index');
    }
    public function scanning(Request $req)
    {
        dd($req->getLink);
    }
    
  
}
?>