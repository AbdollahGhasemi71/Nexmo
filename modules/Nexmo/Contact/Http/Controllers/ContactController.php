<?php

namespace Nexmo\Contact\Http\Controllers;


use App\Http\Controllers\Controller;
use Nexmo\Common\Session\SessionFlash;
use Nexmo\Contact\repositories\ContactRepo;

class ContactController extends Controller
{
    public $repo;

    public function __construct(ContactRepo $contactRepo)
    {
        $this->repo = $contactRepo;
    }

    public function index()
    {
        $contact = $this->repo->ontactIndex();
        return view('Contact::contact.index', compact('contact'));
    }

    public function destroy($id)
    {
        $this->repo->contactDelete($id);
        SessionFlash::store();
        return back();
    }
}
