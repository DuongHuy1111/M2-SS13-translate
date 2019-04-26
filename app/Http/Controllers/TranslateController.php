<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TranslateController extends Controller
{
    public function showForm(){
        return view('showForm');
    }

    public function translate(Request $request){
        $vietnamese = ['cau long', 'bong da', 'bong ban'];
        $english = ['badminton', 'football', 'table tennis'];
        $keyword = $request->keyword;

        foreach ($vietnamese as $key => $value){
            if ($keyword == $value){
                $translate = $english[$key];
                return view('displayTranslate', compact('translate'));
            }
        }
        $translate = "Not Found";
        return view('displayTranslate', compact('translate'));
    }
}
