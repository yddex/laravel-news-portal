<?php

namespace App\Http\Controllers\Feedback;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FeedbackController extends Controller
{
    public function index()
    {
        return view('feedback.index');
    }

    public function  store(Request $request)
    {
        $request->validate([
            'name' => ['required','string','max:255',],
            'body' => ['required','string',],
        ]);
        $data = $request->only(['name', 'body']);

        $feedback = Feedback::create($data);
        return redirect()->route('feedback.index')->with('status', 'Thank you for your feedback!');
    }
}
