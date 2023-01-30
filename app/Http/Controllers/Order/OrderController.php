<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class OrderController extends Controller
{
    public function index() :View
    {
        return view('order.index');
    }

    public function store(Request $request) :RedirectResponse
    {
        $request->validate(
            [
                'name' => ['required', 'string', 'max:128'],
                'phone' => ['required', 'regex:/^7\d{10}/'],
                'email' => ['required', 'email:rfc,dns'],
                'body' => ['required', 'string']
            ],
        );
        $data = $request->only(['name', 'phone', 'email', 'body']);
        $order = Order::create($data);

        return redirect()->route('order.index')->with('status', 'Ваш заказ успешно зарегестрирован!');

    }
}
