<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Video;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $a = Comment::orderBy('id', 'desc')->first()->id;

        $b = Video::orderBy('id', 'desc')->first()->id;

        dd(max($a, $b)+1);
    }
}
