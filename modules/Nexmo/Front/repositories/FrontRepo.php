<?php


namespace Nexmo\Front\repositories;


use Nexmo\about\Models\About;
use Nexmo\Admin\Models\Seo;
use Nexmo\Contact\Models\Contact;
use Nexmo\Info\Models\Info;
use Nexmo\Link\Models\Link;
use Nexmo\Post\Models\Post;
use Nexmo\Product\Models\Product;
use Nexmo\Slider\Models\Slider;
use Nexmo\Social\Models\Socail;
use Nexmo\Team\Models\Team;

class FrontRepo
{

    public function frontBySeo()
    {
        return Seo::orderBy('id', 'desc')->take(1)->skip(0)->first();
    }

    public function all()
    {
        return Slider::all();
    }

    public function aboutOrderBy()
    {
        return About::orderBy('id', 'desc')->take(1)->skip(0)->first();
    }

    public function productPaginate()
    {
        return Product::paginate(6);
    }

    public function teamall()
    {
        return Team::all();
    }

    public function postall()
    {
        return Post::all();
    }

    public function orderInfo()
    {
        return Info::orderBy('id', 'desc')->take(1)->skip(0)->first();
    }

    public function orderSocial()
    {
        return Socail::orderBy('id', 'desc')->take(1)->skip(0)->first();
    }

    public function allLink()
    {
        return Link::all();
    }

    public function contactCreate($value)
    {
        return Contact::create([
            'fullname' => $value->fullname,
            'email' => $value->email,
            'subject' => $value->subject,
            'message' => $value->message
        ]);
    }

}
