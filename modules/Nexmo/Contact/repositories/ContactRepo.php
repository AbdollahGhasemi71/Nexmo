<?php


namespace Nexmo\Contact\repositories;


use Nexmo\Contact\Models\Contact;

class ContactRepo
{
    public function contactDelete($id)
    {
        return Contact::destroy($id);
    }
    public function ontactIndex()
    {
        return Contact::paginate(4);
    }

}
