<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        $data = Post::with('comments')->get();
        return response()->json(['data' => $data], 200);
    }
}
