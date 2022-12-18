<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function index(){
        
        $pengajuan = DB::table('pengajuan')->paginate(5);

        return view('pengajuan/index', ['pengajuan' => $pengajuan]);
    }
}
