<?php

namespace Nexmo\Slider\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Nexmo\Common\Session\SessionFlash;
use Nexmo\Slider\Http\Requests\CreateSliderRequest;
use Nexmo\Slider\Http\Requests\UpdateSliderRequest;
use Nexmo\Slider\Models\Slider;
use Nexmo\Slider\repositories\SliderRepo;
use Nexmo\Slider\Service\SliderService;

class SliderController extends Controller
{
    public $repo;


    public function __construct(SliderRepo $sliderRepo)
    {
        $this->repo = $sliderRepo;
    }


    public function index()
    {
        $slider = $this->repo->sliderIndex();
        return view('Slider::slider.index', compact('slider'));
    }

    public function create()
    {
        return view('Slider::slider.create');

    }


    public function store(CreateSliderRequest $request)
    {
        $this->repo->sliderStore($request);
        SessionFlash::store();
        return back();
    }

    public function edit($id)
    {
        $slider = $this->repo->sliderEdit($id);
        return view('Slider::slider.edit', compact('slider'));
    }


    public function update(UpdateSliderRequest $request, $id)
    {
        $this->repo->sliderUpdate($request,$id);
        SessionFlash::update();
        return redirect(route('slider.index'));

    }


    public function destroy($id)
    {
       $this->repo->sliderDestroy($id);
        SessionFlash::delete();
        return redirect(route('slider.index'));
    }
}
