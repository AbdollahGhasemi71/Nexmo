<?php
namespace Nexmo\Common\Session;

class SessionFlash
{


    public static function store()
    {
        session()->flash('create', 'thanks successfylly create data !!!');
    }

    public static function delete()
    {
        session()->flash('delete', 'thanks successfylly info data deleted');
    }

    public static function update()
    {
        session()->flash('update', 'thanks successfully updated data ');
    }

}
