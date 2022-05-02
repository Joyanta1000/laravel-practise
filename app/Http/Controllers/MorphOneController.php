<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MorphOneController extends Controller
{

    public function index()
    {
        $data = User::with('image')->find(6);
    }

    public function create()
    {
        $user = User::create([
        'name' => 'om',
        'email' => 'om@gmail.com',
        'password' => Hash::make('12345678'),
        ])->image()->create([
        'url' => 'omar.jpg',
        'path' => 'omar.jpg',
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
