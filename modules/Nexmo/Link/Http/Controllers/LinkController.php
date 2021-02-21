<?php

namespace Nexmo\Link\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Nexmo\Common\Session\SessionFlash;
use Nexmo\Link\Http\Requests\linkCreateRequest;
use Nexmo\Link\Models\Link;
use Nexmo\Link\repositories\LinkRepo;

class LinkController extends Controller
{
    public $repo;

    public function __construct(LinkRepo $linkRepo)
    {
        $this->repo = $linkRepo;
    }

    public function index()
    {
        $link = $this->repo->infoIndex();
        return view('Link::link.index', compact('link'));
    }


    public function create()
    {
        return view('Link::link.create');
    }


    public function store(linkCreateRequest $request)
    {
        $this->repo->infoStore($request);
        SessionFlash::store();
        return back();
    }


    public function edit($id)
    {
        $link = $this->repo->infoEdit($id);
        return view('Link::link.edit', compact('link'));
    }


    public function update(Request $request, $id)
    {
        $this->repo->infoUpdate($request, $id);
        SessionFlash::update();
        return redirect(route('link.index'));
    }


    public function destroy($id)
    {
        $this->repo->infoDestroy($id);
        SessionFlash::delete();
        return redirect(route('link.index'));
    }
}
