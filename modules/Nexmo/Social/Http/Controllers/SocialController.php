<?php

namespace Nexmo\Social\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Nexmo\Common\Session\SessionFlash;
use Nexmo\Social\Http\Requests\SocialCreateRequest;
use Nexmo\Social\Models\Socail;
use Nexmo\Social\repositories\SocialRepo;

class SocialController extends Controller
{
    public $repo;

    public function __construct(SocialRepo $socialRepo)
    {
        $this->repo = $socialRepo;

    }

    public function index()
    {
        $social = $this->repo->socialIndex();
        return view('Social::social.index', compact('social'));
    }


    public function create()
    {
        return view('Social::social.create');
    }


    public function store(SocialCreateRequest $request)
    {
        $this->repo->socialStore($request);
        SessionFlash::store();
        return back();
    }


    public function edit($id)
    {
        $social = $this->repo->socialEdit($id);
        return view('Social::social.edit', compact('social'));
    }

    public function update(SocialCreateRequest $request, $id)
    {
        $this->repo->socialUpdate($request, $id);
        SessionFlash::update();
        return redirect(route('social.index'));
    }

    public function destroy($id)
    {
      $this->repo->socialDestroy($id);
        SessionFlash::delete();
        return redirect(route('social.index'));
    }
}
