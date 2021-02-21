<?php


namespace Nexmo\Product\repositories;


use Nexmo\Product\Models\Product;

class ProdictRepo
{

    public function productIndex()
    {
        return Product::paginate(4);
    }

    public function productStore($value)
    {
        $file = $value->file('image');
        if (!empty($file)) {
            $image = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/product/', $image);
        }
        Product::create([
            'title' => $value->title,
            'alt' => $value->alt,
            'image' => $image,
            'body' => $value->body,
            'description' => $value->description,
            'keywords' => $value->keywords,
            'webTitle' => $value->webTitle
        ]);
    }

    public function productEdit($id)
    {
        return Product::findOrFail($id);
    }
    public function productUpdate($value,$id)
    {
        $product = Product::findOrFail($id);
        $imageProduct = $product->image;
        $file = $request->file('image');
        if (!empty($file)) {
            if (file_exists('images/product/' . $imageProduct)) {
                unlink('images/product/' . $imageProduct);
            }
            $image = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/product/', $image);

        } else {
            $image = $product->image;
        }
        $product->update([
            'title' => $request->title,
            'body' => $request->body,
            'alt' => $request->alt,
            'image' => $image,
            'description' => $request->description,
            'keywords' => $request->keywords,
            'webTitle' => $request->webTitle
        ]);
    }


    public function productDestroy($id)
    {
        $product = Product::findOrFail($id);
        $imageProduct = $product->image;
        if (file_exists('images/product/' . $imageProduct)) {
            unlink('images/product/' . $imageProduct);
        }
        Product::destroy($id);
    }

}
