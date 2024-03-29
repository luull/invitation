<?php
namespace App\Http\Controllers\templates;
use Illuminate\Http\Request; 
use App\Http\Controllers\Controller;
use App\Models\Templates;
use App\Models\Invitations;
use App\Models\Guests;
use App\Models\Users;
use Carbon\Carbon;

class IndexTemplatesController extends Controller
{
    public function index(Request $req)
    {
        // dd($req->id);
        $getInvitation = Invitations::where('id_users', $req->id)->first();
        $getTheme = Templates::where('themes', $req->theme)->first();
        $akad_date = Carbon::parse($getInvitation->akad_date)->locale('id');
        $akad_date->settings(['formatFunction' => 'translatedFormat']);
        $akad_time = Carbon::parse($getInvitation->akad_time)->locale('id');
        $akad_time->settings(['formatFunction' => 'translatedFormat']);
        $resepsi_date = Carbon::parse($getInvitation->resepsi_date)->locale('id');
        $resepsi_date->settings(['formatFunction' => 'translatedFormat']);
        $resepsi_time = Carbon::parse($getInvitation->resepsi_time)->locale('id');
        $resepsi_time->settings(['formatFunction' => 'translatedFormat']);
        return view('templates/'.$getTheme->themes.'/index', compact('getInvitation','getTheme','akad_date','resepsi_date','akad_time','resepsi_time'));
    }
    public function share(Request $req)
    {
        // dd($req->id);
        $url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $getGuest = Guests::where('link', $url)->first();
        $getInvitation = Invitations::where('id', $req->id)->first();
        $getUser = Users::where('id', $getInvitation->id_users)->first();
        $getTheme = Templates::where('id', $getUser->id_templates)->first();
        $akad_date = Carbon::parse($getInvitation->akad_date)->locale('id');
        $akad_date->settings(['formatFunction' => 'translatedFormat']);
        $akad_time = Carbon::parse($getInvitation->akad_time)->locale('id');
        $akad_time->settings(['formatFunction' => 'translatedFormat']);
        $resepsi_date = Carbon::parse($getInvitation->resepsi_date)->locale('id');
        $resepsi_date->settings(['formatFunction' => 'translatedFormat']);
        $resepsi_time = Carbon::parse($getInvitation->resepsi_time)->locale('id');
        $resepsi_time->settings(['formatFunction' => 'translatedFormat']);
        return view('templates/'.$getTheme->themes.'/index', compact('getInvitation','getTheme','akad_date','resepsi_date','akad_time','resepsi_time','getGuest'));
    }
}
?>