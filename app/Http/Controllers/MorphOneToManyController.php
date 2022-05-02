<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MorphOneToManyController extends Controller
{

    public function index()
    {
        $post = Post::with('comments')->find(5);
        $video = Video::with('comments')->find(2);

        dd($post, $video);
    }

    public function create()
    {
        $post = Post::create([
        'name' => '1st post',
        ])->comments()->saveMany([
        new Comment(['body' => 'A new comment.']),
        new Comment(['body' => 'Another comment.']),
        ]);

        $Video = Video::create([
        'title' => '1st post',
        'url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
        ])->comments()->saveMany([
        new Comment(['body' => 'A new comment 1.']),
        new Comment(['body' => 'Another comment 2.']),
        ]);
    }

    public function store(Request $request)
    {
        
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        
    }
}
