<?php


namespace Nexmo\about\repositories;


use Nexmo\about\Models\About;

class AboutRepo
{
    public function aboutStore($value)
    {
        $file = $value->file('image');
        if (!empty($file)) {
            $image = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/about/', $image);
        }
        About::create([
            'title' => $value->title,
            'image' => $image,
            'description' => $value->description,
            'alt' => $value->alt
        ]);
    }

    public function aboutEdit($id)
    {
        return About::findOrFail($id);
    }

    public function aboutUpdate($value, $id)
    {
        $file = $value->file('image');
        $about = About::findOrFail($id);
        if (!empty($file)) {
            if (file_exists('images/about/' . $about->image)) {
                unlink('images/about/' . $about->image);
            }
            $image = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/about/', $image);
        } else {
            $image = $about->image;
        }
        $about->update([
            'image' => $image,
            'title' => $value->title,
            'alt' => $value->alt,
            'description' => $value->description
        ]);
    }

    public function aboutDestroy($id)
    {
        $about = About::findOrFail($id);
        $aboutimage = $about->image;
        self::fileExite($aboutimage);
        About::destroy($id);
    }

    public static function fileExite($aboutimage)
    {
        if (file_exists('images/about/' . $aboutimage)) {
            unlink('images/about/' . $aboutimage);
        }
    }
}
