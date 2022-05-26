<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFormRequest;
use App\Mail\SendOrder;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function store(StoreFormRequest $request)
    {
        $order = Order::create($request->all());
        Mail::to(config('app.admin_email'))->send(new SendOrder($order));
        return back()->with(['success' => 'Форма успешно отправлена']);
    }
}
