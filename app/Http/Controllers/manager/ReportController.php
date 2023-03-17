<?php
namespace App\Http\Controllers\manager;

use App\Http\Controllers\Controller;
use App\Models\Invitations;
use App\Models\Guests;
use Illuminate\Http\Request; 
use Carbon\Carbon;

class ReportController extends Controller
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
        $data = Guests::all();
        return view('pages.manager.report', compact('data'));
    }
    public function delete(Request $req)
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
        $hsl = Guests::find($req->id)->delete();
        if($hsl){
            return redirect()->back()->with(['message' => 'Data Succefully to delete', 'color' => 'alert-success']);
        }else{
            return redirect()->back()->with(['message' => 'Data Unsuccess to delete', 'color' => 'alert-danger']);
        }
    }
}