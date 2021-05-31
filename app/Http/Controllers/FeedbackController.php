<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFeedbackRequest;
use App\Models\Feedback;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $feedbacks = Feedback::all();
        return view('list', compact('feedbacks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('feedback');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreFeedbackRequest $request
     * @return JsonResponse
     */
    public function store(StoreFeedbackRequest $request)
    {
        $feedback = new Feedback;
        $feedback->name = $request->name;
        $feedback->theme = $request->theme;
        $feedback->text = $request->text;
        $feedback->save();

        return response()->json(null, 200);
    }
}
