<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\ContactFormRequest;
use App\Jobs\SubmitContactForm;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {

    	return view('public.home');

    }

    public function concept() {

    	return view('public.concept');
    }

    public function gallery() {
    	return view('public.gallery');
    }

    public function franchising() {
    	return view('public.franchising');
    }

    public function store() {
    	return view('public.store-locator');
    }

    public function contact() {
    	return view('public.contact');
    }

    public function postContact(ContactFormRequest $request) {

        $this->dispatchFrom(SubmitContactForm::class, $request);

        flash()->overlay('Yay!', 'Thank you for contacting us. We will get back to you shortly.');

        return redirect()->route('home');
    }
}