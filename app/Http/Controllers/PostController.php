<?php

namespace App\Http\Controllers;

use App\Events\PostPublished;
use App\Interfaces\PostRepositoryInterface;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct(public PostRepositoryInterface $postRepository) {

    }

    public function index()
    {
        $result = $this->postRepository->getAll();
        return $result;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        $data = $request->all();
        // dd($this->postRepository);
        $result = $this->postRepository->create($data);
        if($result) PostPublished::dispatch($result);
        
        return $result;
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }

    public function showForm() {
        return view('register_form');
    }
}
