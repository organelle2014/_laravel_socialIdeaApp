<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        /*$idea = new Idea();
        $idea->content="test";
        $idea->likes = 0;
        $idea->save();*/

        return view('dashboard', [
            'ideas'=> Idea::orderBy('created_at','DESC')->get()
        ]);
    }
}
