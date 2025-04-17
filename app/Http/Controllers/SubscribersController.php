<?php

namespace App\Http\Controllers;

use App\Models\subscribers;
use App\Http\Requests\StoresubscribersRequest;
use App\Http\Requests\UpdatesubscribersRequest;

class SubscribersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subscribers = subscribers::paginate(config('pagination.count'));
        return view('admin.subscribers.index', get_defined_vars());
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(subscribers $subscribers)
    {
        $subscribers->delete();
        return to_route(('admin.subscribers.index'))->with('success', __('keywords.delete'));
    }
}