<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class PagesController extends Controller
{
    public function index(){
        $title='Bienvenido a Laravel';
        //return view('pages.index', compact('title'));
        $posts= Post::orderBy('created_at','desc')->paginate(10);
        return view('pages.index')->with('posts',  $posts);
    }
    public function prueba(){
       
        return 'HOLA MUNDO';
    }
    public function about(){
        $title='Acerca de nosotros';
        return view('pages.about')->with('title',$title);
    }
    public function services(){
        $data=array(
            'title'=>'Services',
            'services'=>['Web Design','Programming', 'SE0']
        );
        return view('pages.services')->with($data);
    }
}
