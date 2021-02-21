<?php

namespace Nexmo\about\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Nexmo\about\Http\Requests\AboutcreateRequest;
use Nexmo\about\Models\About;
use Nexmo\about\repositories\AboutRepo;
use Nexmo\Common\Session\SessionFlash;

class AboutController extends Controller
{
    public $repo;

    public function __construct(AboutRepo $aboutRepo)
    {
        $this->repo = $aboutRepo;

    }

    public function index()
    {
        $about = About::all();
        return view('About::about.index', compact('about'));
    }

    public function create()
    {
        return view('About::about.create');
    }


    public function store(AboutcreateRequest $request)
    {
        $this->repo->aboutStore($request);
        SessionFlash::store();
        return redirect(route('about.create'));
    }

    public function edit($id)
    {
        $about = $this->repo->aboutEdit($id);
        return view('About::about.edit', compact('about'));

    }


    public function update(Request $request, $id)
    {
        $this->repo->aboutUpdate($request, $id);
        SessionFlash::update();
        return redirect(route('about.index'));
    }

    public function destroy($id)
    {
        $this->repo->aboutDestroy($id);
        SessionFlash::delete();
        return redirect(route('about.index'));
    }
}
