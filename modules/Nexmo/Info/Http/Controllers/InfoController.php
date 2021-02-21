<?php

namespace Nexmo\Info\Http\Controllers;

use App\Http\Controllers\Controller;
use Nexmo\Common\Session\SessionFlash;
use Nexmo\Info\Http\Requests\infoCreateRequest;
use Nexmo\Info\repositories\InfoRepo;

class InfoController extends Controller
{
    public $repo;

    public function __construct(InfoRepo $infoRepo)
    {
        $this->repo = $infoRepo;
    }

    public function index()
    {
        $info = $this->repo->infoIndex();
        return view('Info::info.index', compact('info'));
    }


    public function create()
    {
        return view('Info::info.create');
    }


    public function store(infoCreateRequest $request)
    {
        $this->repo->infoCreate($request);
        SessionFlash::store();
        return redirect(route('info.create'));

    }


    public function edit($id)
    {
        $info = $this->repo->infoEdit($id);
        return view('Info::info.edit', compact('info'));
    }

    public function update(infoCreateRequest $request, $id)
    {
        $this->repo->infoUpdate($request, $id);
        SessionFlash::update();
        return redirect(route('info.index'));
    }

    public function destroy($id)
    {
        $this->repo->infoDelete($id);
        SessionFlash::delete();
        return redirect(route('info.index'));

    }
}
