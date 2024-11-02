<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Answer;
class QuestionController extends Controller
{
    public function index(){
        $question= Question::OrderBy('created_at','desc')->get();
        return view('welcome',compact('question'));
    }
    public function create(Request $request){
        Question::create([
            'title' => $request->title,
            'text' => $request->text,
            
        ]);

        return redirect('/');
    }
    
    

}