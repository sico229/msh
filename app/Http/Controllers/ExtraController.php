<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtraController extends Controller
{
    public function LangageChanger(Request $req){
        return response()->json(['status' => 200,'langue'=>$req->langue])
        ->withCookie('langue', $req->langue, 300*12*30);
    }
}
