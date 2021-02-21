<?php


namespace Nexmo\Slider\repositories;

use Nexmo\Slider\Models\Slider;
use Nexmo\Slider\Service\SliderService;


class SliderRepo
{

    public function sliderIndex()
    {
        return Slider::paginate(4);
    }


    public function sliderStore($value)
    {
        $file = $value->file('image');
        $image = '';
        if (!empty($file)) {
            $image = time() . "." . $file->getClientOriginalExtension();
            $file->move('images/slider', $image);
        }
        Slider::create([
            'image' => $image,
            'alt' => $value->alt,
            'caption' => $value->caption,
            'title' => $value->title
        ]);
    }

    public function sliderEdit($id)
    {
        return Slider::FindOrFail($id);
    }

    public function sliderUpdate($value,$id)
    {
        $file = $value->file('image');
        $slider = Slider::FindOrFail($id);
        $image = '';
        if (!empty($file)) {
            if (file_exists('images/slider/' . $slider->image)) {
                unlink('images/slider/' . $slider->image);
            }
            $image = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/slider', $image);
        } else {
            $image = $slider->image;
        }
        $slider->update([
            'image' => $image,
            'title' => $value->title,
            'caption' => $value->caption,
            'alt' => $value->alt
        ]);
    }

    public function sliderDestroy($id)
    {
        $slider = Slider::FindOrFail($id);
        $imageSlider = $slider->image;
        if (file_exists('images/slider/' . $imageSlider)) {
            unlink('images/slider/' . $imageSlider);
        }
        Slider::destroy($id);
    }

}
