<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AspirationController extends Controller
{
    public function index()
    {
        $aspirations = Http::get(
            "http://127.0.0.1:8000/api/aspiration"
        )->json("data");

        return view('admin/dashboard', [
            "aspirations" => $aspirations
        ]);
    }

    public function detail($id) {
        $aspiration = Http::get(
            "http://127.0.0.1:8000/api/aspiration/detail/{$id}"
        )->json("data");

        return view('admin/detail', [
            "aspiration" => $aspiration
        ]);
    }

    public function add() {
        return view('user/add');
    }

    public function store(Request $request) {
        $payload = $request->all();

        $path = $request->file('image')->getPathName();
        $fileName = $request->file('image')->getClientOriginalName();

        $response = Http::asMultipart()->attach(
            'image', 
            file_get_contents($path), 
            $fileName
        )->post(
            'http://127.0.0.1:8000/api/aspiration/add',
            $payload
        )->json();

        return redirect('admin/dashboard');
    }
}
