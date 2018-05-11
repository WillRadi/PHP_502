<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Model\Post;

class PostController extends Controller
{
    public function index()
    {
    	$posts = Post::all();
    	if (!$posts) {
    		return response()->json(null, 204);
    	}
    	return response()->json([$posts], 200);
    }

    public function store(Request $request)
    {
    	$data = $request->json()->all();
    	$validator = Validator::make($data, [
    			'title'			=> 'required|string|max:255',
    			'user_id'		=> 'required|integer|exists:users,id'
    		]);
    	if ($validator->fails()) {
    		return response()->json($validator->errors(), 204);
    	}

    	$post = new Post();
    	$post->fill($data);
    	$post->save();

    	return response()->json($post, 200);
    }

    public function update(Request $request, $post)
    {
    	$post = Post::find($post);
    	$data = $request->json()->all();
    	$validator = Validator::make($data, [
    			'title'			=> 'required|string|max:255',
    			'user_id'		=> 'required|integer|exists:users,id'
    		]);
    	if ($validator->fails()) {
    		return response()->json($validator->errors(), 204);
    	}

    	$post->update($data);
    	return response()->json($post, 200);
    }

    public function show($post)
    {
    	$post = Post::find($post);
    	if(!$post) {
    		return response()->json(null, 204);
    	}
    	return response()->json([$post], 200);
    }

    public function destroy($post)
    {
    	$post = Post::find($post);
    	if (!$post) {
    		return response()->json(null, 204);
    	}

    	$post->delete();
    	return response()->json(null, 200);
    }
}
