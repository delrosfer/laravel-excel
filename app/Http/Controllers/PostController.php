<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Exports\PostsExport;
use Maatwebsite\Excel\Facades\Excel;

class PostController extends Controller
{
    public function index()
    {
    	$posts = Post::all();
    	return view('posts', compact('posts'));
    }

    public function exportExcel()
    {
    	return Excel::download(new PostsExport, 'laravelexcel.xlsx');
    }
}
