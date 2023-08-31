<?php

namespace App\Http\Controllers;

use view;
use App\Models\User;
use Inertia\Inertia;
use SicoHelpers\Helpers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller
{
    public function Accueil(){
        return view('Pages.Accueil');
    }

    public function ShowLoginForm(){
        return view('Pages.LoginPage');
    }

    public function SaveLoginForm(Request $req){
        $user=User::where('email',$req->identifiant)->first();
        if(!$user || !Hash::check($req->password,$user->password)){
            Session::flash('FormErrors', ['h']);
            return redirect()->back();
        }
      Auth::login($user);
      return redirect()->route('Transfert');
    }

    public function Transfert(){
        return Inertia::render('Transfert',['toto'=>'sico']);
    }
    public function Send(){
        return Inertia::render('Sender');
    }
}
