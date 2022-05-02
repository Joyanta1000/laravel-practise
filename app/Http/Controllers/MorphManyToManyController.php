<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Video;
use Illuminate\Http\Request;

class MorphManyToManyController extends Controller
{

    public function index()
    {
        
    }

    public function create()
    {
        $post = Post::create([
        'name' => '2st post',
        ])->tags()->saveMany([
        new Tag(['name' => 'X']),
        new Tag(['name' => 'Y']),
        ]);

        $Video = Video::create([
        'title' => '2st post',
        'url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
        ])->tags()->saveMany([
        new Tag(['name' => 'A']),
        new Tag(['name' => 'B']),
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
