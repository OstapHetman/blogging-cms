<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Category;
use App\Post;
use App\Tag;

class FrontEndController extends Controller
{
    public function index()
    {
        return view('index')
            ->with('title', Setting::first()->site_name)
            ->with('categories', Category::take(4)->get())
            ->with('first_post', Post::orderBy('created_at', 'desc')->first())
            ->with('second_post', Post::orderBy('created_at', 'desc')->skip(1)->take(1)->get()->first())
            ->with('third_post', Post::orderBy('created_at', 'desc')->skip(2)->take(1)->get()->first())
            ->with('wordpress', Category::find(4))
            ->with('settings', Setting::first())
            ->with('angular', Category::find(5));
    }

    public function singlePost($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $next_id = Post::where('id', '>', $post->id)->min('id');
        $prev_id = Post::where('id', '<', $post->id)->max('id');

        return view('single')
            ->with('post', $post)
            ->with('title', $post->title)
            ->with('next', Post::find($next_id))
            ->with('tags', Tag::all())
            ->with('previous', Post::find($prev_id))
            ->with('categories', Category::take(4)->get())
            ->with('settings', Setting::first());
    }

    public function category($id)
    {
        $cat = Category::find($id);

        return view('category')
            ->with('category', $cat)
            ->with('title', $cat->name)
            ->with('categories', Category::take(4)->get())
            ->with('settings', Setting::first());
    }

    
    public function tag($id)
    {
        $tag = Tag::find($id);

        return view('tag')
            ->with('tag', $tag)
            ->with('title', $tag->tag)
            ->with('categories', Category::take(4)->get())
            ->with('settings', Setting::first());
    }
}
