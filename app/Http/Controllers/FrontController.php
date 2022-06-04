<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function booking()
    {
        return view('front.booking');
    }
    public function aboutUs()
    {
        return view('front.about-us');
    }
    public function safety()
    {
        return view('front.safety');
    }
    public function faq()
    {
        return view('front.faq');
    }
    public function contactUs()
    {
        return view('front.contact');
    }
    public function franchise()
    {
        return view('front.franchise');
    }
    public function booking2()
    {
        $product = Product::get();
        return view('front.booking-1',compact('product'));
    }
    public function Step1store(Request $request)
    {
        $this->validate($request,[
            'name'=> 'required|max:191',
            'email'=>'required|email|max:191',
            'phone_number'=>'required|max:10|min:10',
        ]);

            $input = $request->all();
            Customer::create($input);
            return view('front.booking-1');
    }
}
