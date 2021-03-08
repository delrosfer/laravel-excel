<?php

namespace App\Exports;

use App\Models\Post;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

//class PostsExport implements FromCollection
//{
    /**
    * @return \Illuminate\Support\Collection
    */
//    public function collection()
//    {
//        return Post::all();
//    }
//}

class PostsExport implements FromView
{
	public function view(): View
	{
		return view('post-excel', [
			'posts' => Post::all()
		]);
	}
		
	
}