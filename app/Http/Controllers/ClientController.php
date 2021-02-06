<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function index(){
        $contents=Content::whereStatus('accepted')->whereType(1)->take(3)->get();
        return view('front.index', compact('contents')); //
    }

    public function tausiyah(){
        $contents=Content::whereStatus('accepted')->whereType(3)->get();
        return view('front.content',compact('contents'));
    }
    public function blog(){
        $contents=Content::whereStatus('accepted')->whereType(1)->orderBy('id', 'desc')->get();
        return view('front.content',compact('contents'));
    }
    public function event(){
        $contents=Content::whereStatus('accepted')->whereType(2)->get();
        return view('front.event',compact('contents'));
    }
    public function about(){

    }
    public function detail($slug){
        $content = Content::whereSlug($slug)->whereStatus('accepted')->firstOrFail();
        $blogs = Content::whereStatus('accepted')->orderBy('id', 'desc')->whereType(1)->take(3)->get();
        $tags = Tag::all();
        return view('front.detail',compact('content','tags', 'blogs'));
    }

    public function comment(Request $request,$id){
        $data=$request->all();
    }

    public function postSearch(Request $request){
//        dd($request);
        return redirect(route('search', $request->search));
    }
    public function search($query){
//        dd($query);
        $contents = Content::where('title', 'like', '%' . $query . '%')
            ->orWhere('contents', 'like', '%' . $query . '%')
            ->orWhere('created_at', 'like', '%' . $query . '%')->get();
//        dd($content);
        return view('front.content',compact('contents'));
    }


}
