<?php

namespace Nexmo\Post\Http\Controllers;


use App\Http\Controllers\Controller;
use Nexmo\Common\Session\SessionFlash;
use Nexmo\Post\Http\Requests\PostCreateRequest;
use Nexmo\Post\Http\Requests\PostUpdateRequest;
use Nexmo\Post\Models\Post;
use Nexmo\Post\repositories\PostRepo;


class PostController extends Controller
{
    public $repo;

    public function __construct(PostRepo $postRepo)
    {
        $this->repo = $postRepo;
    }

    public function index()
    {
        $post = $this->repo->postIndex();
        return view('Post::post.index', compact('post'));
    }

    public function create()
    {
        return view('Post::post.create');
    }


    public function store(PostCreateRequest $request)
    {
        $this->repo->infoStore($request);
        SessionFlash::store();
        return redirect(route('post.create'));
    }

    public function edit($id)
    {
        $post =$this->repo->postEdit($id) ;
        return view('Post::post.edit', compact('post'));
    }


    public function update(PostUpdateRequest $request, $id)
    {
        $this->repo->postUpdate($request,$id);
        SessionFlash::update();
        return redirect(route('post.index'));
    }


    public function destroy($id)
    {
        $this->repo->postDestroy($id);
        SessionFlash::delete();
        return redirect(route('team.index'));
    }
}
