<?php


namespace Nexmo\Admin\repositories;


use Nexmo\Admin\Models\Seo;

class PanelRepo
{
    public function store($value)
    {
        return Seo::create([
            'title' => $value->title,
            'description' => $value->description,
            'keywords' => $value->keywords,
            'author' => $value->author
        ]);
    }

    public function edit($id)
    {
        return Seo::findOrFail($id);
    }

    public function update($value, $id)
    {
        return Seo::findOrFail($id)->update([
            'title' => $value->title,
            'keywords' => $value->keywords,
            'description' => $value->description,
            'author' => $value->author
        ]);
    }

    public function delete($id)
    {
        return  Seo::destroy($id);
    }
    public function allData()
    {
        return Seo::all();
    }
}
