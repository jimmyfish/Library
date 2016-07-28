<?php

namespace App\Http\Controllers;

use App\Transaksi;
use Illuminate\Http\Request;

use App\Http\Requests;

class TransaksiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function input(Request $request)
    {

        $trans = Transaksi::all();
        var_dump($trans);
//        if ($request->isMethod('post')) {
//
//            return redirect()->action('LibraryController@index');
//        }
//
//        return view('library.transaksi');
    }
}
