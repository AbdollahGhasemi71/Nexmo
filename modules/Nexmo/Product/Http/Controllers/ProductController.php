<?php

namespace Nexmo\Product\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Nexmo\Common\Session\SessionFlash;
use Nexmo\Product\Http\Requests\ProductCreateRequest;
use Nexmo\Product\Models\Product;
use Nexmo\Product\repositories\ProdictRepo;


class ProductController extends Controller
{
    public $repo;

    public function __construct(ProdictRepo $prodictRepo)
    {
        $this->repo = $prodictRepo;

    }

    public function index()
    {
        $product = $this->repo->productIndex();
        return view('Product::product.index', compact('product'));
    }


    public function create()
    {
        return view('Product::product.create');
    }


    public function store(ProductCreateRequest $request)
    {
        $this->repo->productStore($request);
        SessionFlash::store();
        return back();

    }

    public function edit($id)
    {
        $product = $this->repo->productEdit($id);
        return view('Product::product.edit', compact('product'));
    }


    public function update(Request $request, $id)
    {
        $this->repo->productUpdate($request, $id);
        SessionFlash::update();
        return redirect(route('product.index'));

    }


    public function destroy($id)
    {
        $this->repo->productDestroy($id);
        SessionFlash::delete();
        return redirect(route('product.index'));
    }
}
