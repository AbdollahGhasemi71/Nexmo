<?php

namespace Nexmo\Front\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Nexmo\Admin\Models\Seo;
use Nexmo\Common\Session\SessionFlash;
use Nexmo\Contact\Models\Contact;
use Nexmo\Front\repositories\FrontRepo;
use Nexmo\Post\Models\Post;
use Nexmo\Product\Models\Product;
use Nexmo\Slider\Models\Slider;

class HomeController extends Controller
{
    public $repo;

    public function __construct(FrontRepo $frontRepo)
    {
        $this->repo = $frontRepo;

    }

    public function index()
    {
        $seo = $this->repo->frontBySeo();
        $slider = $this->repo->all();
        $about = $this->repo->aboutOrderBy();
        $product = $this->repo->productPaginate();
        $team = $this->repo->teamall();
        $post = $this->repo->postall();
        $info = $this->repo->orderInfo();
        $social = $this->repo->orderSocial();
        $link = $this->repo->allLink();
        return view('Front::front.index', compact('seo', 'slider', 'about',
            'product', 'team', 'post', 'info', 'social', 'link'));
    }

    public function product($id)
    {
        $info = $this->repo->orderInfo();
        $resentProduct = Product::orderBy('id', 'desc')->take(5)->skip(0)->get();
        $singleProduct = Product::findOrFail($id);
        $social = $this->repo->orderSocial();
        $link = $this->repo->allLink();
        return view('Front::front.product', compact('resentProduct', 'singleProduct', 'info', 'social', 'link'));
    }

    public function post($id)
    {
        $info = $this->repo->orderInfo();
        $resentProduct = Post::orderBy('id', 'desc')->take(5)->skip(0)->get();
        $singleProduct = Post::findOrFail($id);
        $social = $this->repo->orderSocial();
        $link = $this->repo->allLink();
        return view('Front::front.post', compact('resentProduct', 'singleProduct', 'info', 'social', 'link'));
    }


    public function contact(Request $request)
    {
        $this->repo->contactCreate($request);
    }


}
