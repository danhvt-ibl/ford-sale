<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\AuthTraits\OwnsRecord;

class PostsController extends Controller
{
    use OwnsRecord;
    public function __construct() {
        $this->middleware(['auth', 'admin'], ['except' => ['index', 'show']] );
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::where('post_type', 'post')->paginate(10);
        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'post_title'        => 'required',
            'post_slug'         => 'required|alpha_dash|max:200|unique:posts,post_slug',
            'post_content'      => 'required',
        ]);

        $post = new Post;
        $post->post_type        = $request->post_type;
        $post->post_title       = $request->post_title;
        $post->post_slug        = str_slug($request->post_slug, "-"); 
        $post->post_content     = $request->post_content;
        $post->save();
        alert()->success('Chúc mừng!', 'Bạn vừa đăng một bài thành công');
        return Redirect::route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail( $id );
        return view('posts.show', [ 'post' => $post ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail( $id );
        return view('posts.edit', [ 'post' => $post ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'post_title'        => 'required',
            'post_slug'         => 'required|alpha_dash|max:200|unique:posts,post_slug,'.$id,
            'post_content'      => 'required',
        ]);

        // You might prefer to use this one instead https://laravel.com/docs/5.4/queries#updates
        // You choose
        $post = Post::findOrFail($id);

        $post->post_type        = $request->input('post_type');
        $post->post_title       = $request->input('post_title');
        $post->post_slug        = str_slug($request->input('post_slug'), "-"); 
        $post->post_content     = $request->input('post_content');

        $post->save();
        alert()->success('Chúc mừng!', 'Bạn vừa cập nhật một bài viết');

        return Redirect::route('posts.show', ['post' => $post, 'slug' => $post->post_slug]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Retrieve records and throw an exception if a model is not found
        $post = Post::findOrFail( $id );
        $post->delete();
        alert()->overlay('Chú ý!', 'Bạn đã xóa 1 bài viết', 'error');
        return Redirect::route('posts.index');
    }
}
