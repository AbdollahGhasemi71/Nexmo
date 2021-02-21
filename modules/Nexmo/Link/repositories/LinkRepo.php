<?php


namespace Nexmo\Link\repositories;


use Nexmo\Common\Session\SessionFlash;
use Nexmo\Link\Models\Link;

class LinkRepo
{

    public function infoIndex()
    {

        return Link::paginate(5);
    }

    public function infoStore($vlaue)
    {
        Link::create([
            'name' => $vlaue->name,
            'link' => $vlaue->link
        ]);

    }

    public function infoEdit($id)
    {
        return Link::findOrFail($id);
    }

    public function infoUpdate($value, $id)
    {
        $link = Link::findOrFail($id);
        $link->update([
            'name' => $value->name,
            'link' => $value->link
        ]);
    }

    public function infoDestroy($id)
    {
        $link = Link::findOrFail($id);
        $link->delete();
    }


}
