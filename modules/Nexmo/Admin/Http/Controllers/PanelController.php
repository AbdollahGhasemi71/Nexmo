<?php

namespace Nexmo\Admin\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Nexmo\Admin\Http\Requests\SeoCreateRequest;
use Nexmo\Admin\repositories\PanelRepo;
use Nexmo\Common\Session\SessionFlash;
class PanelController extends Controller
{
    public $repo;

    public function __construct(PanelRepo $panelRepo)
    {
        $this->repo=$panelRepo;
        $this->middleware(['auth', 'verified']);
    }


    public function index()
    {
        return view('Admin::admin.panel.index');

    }

    public function create()
    {
        return view('Admin::admin.panel.create');
    }

    public function store(SeoCreateRequest $request)
    {
        SessionFlash::store();
        $this->repo->store($request);

        return redirect(route('panel.create'));

    }

    public function edit($id)
    {
        $seo = $this->repo->edit($id);
        return view('Admin::admin.panel.edit', compact('seo'));
    }

    public function update(SeoCreateRequest $request, $id)
    {
        SessionFlash::update();
       $this->repo->update($request,$id);

        return redirect(route('panel.allData'));
    }

    public function destroy($id)
    {
        SessionFlash::delete();
       $this->repo->delete($id);

        return redirect(route('panel.allData'));
    }

    public function allData()
    {
        $seo = $this->repo->allData();
        return view('Admin::admin.panel.data', compact('seo'));
    }




}
