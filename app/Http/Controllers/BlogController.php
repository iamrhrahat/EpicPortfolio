<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon; // Add this imp
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class BlogController extends Controller
{

    public function showLatestPosts()
    {
        // Latest posts (plural)
        $latestPosts = Blog::where('active', '=', 1)
            ->whereDate('published_at', '<=', Carbon::now())
            ->orderBy('published_at', 'desc')
            ->limit(3)
            ->get();

        return view('welcome', compact('latestPosts'));
    }
    public function show (Blog $post, Request $request)
    {
        if (!$post->active || $post->published_at > now()) {
            throw new NotFoundHttpException();
        }
        $next = Blog::query()
        ->where('active', true)
        ->whereDate('published_at', '<=', Carbon::now())
        ->whereDate('published_at', '<', $post->published_at)
        ->orderBy('published_at', 'desc')
        ->limit(1)
        ->first();

        $prev = Blog::query()
        ->where('active', true)
        ->whereDate('published_at', '<=', Carbon::now())
        ->whereDate('published_at', '>', $post->published_at)
        ->orderBy('published_at', 'asc')
        ->limit(1)
        ->first();



        return view('blog.post', compact('post', 'prev', 'next'));
    }


}
