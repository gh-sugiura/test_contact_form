<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view("index");
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only([
            "first_name",
            "last_name",
            "gender",
            "email",
            "tel1",
            "tel2",
            "tel3",
            "address",
            "building",
            "category",
            "content",
        ]);
        return view("confirm", compact("contact"));

        if ($request->input('back') == 'back')
        {
            return redirect('/') -> withInput();
        }
    }

    public function thanks()
    {
        return view("thanks");
    }

    public function admin()
    {
        return view("admin");
    }

    public function register()
    {
        return view("register");
    }

    public function login()
    {
        return view("login");
    }

}
