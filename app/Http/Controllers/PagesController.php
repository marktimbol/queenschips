<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

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
}