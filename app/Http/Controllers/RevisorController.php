<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function index(){
        $ad_to_check = Ad::where('is_accepted', null)->first();
        return view('revisor.index', compact('ad_to_check'));
    }   


    public function accept(Ad $ad){
        $ad->setAccepted(true);
        return redirect()->back()->with('success', "Hai accettato l'articolo $ad->title");
    }
    public function reject(Ad $ad){
        $ad->setAccepted(false);
        return redirect()->back()->with('error', "Hai rifiutato l'articolo $ad->title");
    }



}