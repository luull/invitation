<?php
namespace App\Http\Controllers\templates;
use Illuminate\Http\Request; 
use App\Http\Controllers\Controller;
use App\Models\Templates;
use App\Models\Invitations;

class indexController extends Controller
{
    public function index(Request $req)
    {
        if(session('dataUser') == null){
            return redirect('/login');
        }
        if(session('themes') == null){
            return redirect('/login');
        }
        $getInvitation = Invitations::where('id_users', session('dataUser')->id)->first();
        $getTheme = Templates::where('themes', $req->theme)->first();
        return view('templates/'.$getTheme->themes.'/index', compact('getInvitation'));
    }
}
?>