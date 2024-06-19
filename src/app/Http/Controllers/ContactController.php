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
            "tell",
            "tell1",
            "tell2",
            "tell3",
            "address",
            "building",
            "category_id",
            "detail",
        ]);
        return view("confirm", compact("contact"));
    }


    public function thanks(Request $request)
    {
        if ($request->input('back') == 'back') {
            return redirect('/')->withInput();
        }
        
        $contact = $request->only([
            "first_name",
            "last_name",
            "gender",
            "email",
            "tell",
            "address",
            "building",
            "category_id",
            "detail",
        ]);
        Contact::create($contact);
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
