<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\StoresubscribersRequest;
use App\Models\Message;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use NunoMaduro\Collision\Adapters\Phpunit\Subscribers\Subscriber;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.index', get_defined_vars());
    }
    public function about()
    {
        return view('front.about', get_defined_vars());
    }
    public function service()
    {
        return view('front.service', get_defined_vars());
    }
    public function contact()
    {
        return view('front.contact', get_defined_vars());
    }

    public function contactStore(StoreMessageRequest $request)
    {
        $data = $request->validated();
        Message::create($data);
        return back()->with('success', 'Message Sent Successfully');
    }
}