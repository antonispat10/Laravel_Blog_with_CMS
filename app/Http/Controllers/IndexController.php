<?php

namespace App\Http\Controllers;

use App\Post;
use Carbon\Carbon;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{

    public function index()
    {



        $postz = Post::all();


        $posts = Post::paginate(12);

        $categories = Category::All();

//        $s = Post::where('created_at', '>=', \Carbon\Carbon::now()->subMonth())->groupBy(DB::raw('Date(created_at)'))
//        ->orderBy('created_at', 'DESC')->get();


        $month = DB::table('posts')

            ->whereMonth('created_at', '01')

            ->get();




        return view('welcome', compact('posts','postz','categories','month'));
    }


}
