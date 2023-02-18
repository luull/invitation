<?php
namespace App\Http\Controllers\frontpage;

use App\Http\Controllers\Controller;

class indexController extends Controller
{
    public function index()
    {
        return view('pages.frontpage.index');
    }
    public function pricelist()
    {
        return view('pages.frontpage.pricelist');
    }
}
?>