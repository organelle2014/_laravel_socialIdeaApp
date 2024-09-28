<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;
class IdeaController extends Controller
{
    public function store(){

        /*$idea = new Idea([
            'content'=> request()->get('idea',''),
        ]);
        $idea->save();*/

        request()->validate([
            'idea'=>'required|min:5|max:300'
        ]);

        $idea = Idea::create([
            'content'=>request()->get('idea',''),
        ]);
        return redirect()->route('dashboard')->with('success', 'Idea created Successfully!');  
    }
}
