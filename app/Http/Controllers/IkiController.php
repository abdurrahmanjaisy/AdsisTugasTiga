<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IkiController extends Controller
{
    public function categories(){
        $categories = DB::table('categories')->get();
        return view('category')->with('categories',$categories);
    }


    public function categoriesStore(Request $request){
        DB::table('categories')->insert([
            'name' => $request->name
        ]);
        return redirect('/');
    }

    public function articles(){
        $articles = DB::table('articles')->get();
        return view('articles')->with('articles',$articles);
    }
}
