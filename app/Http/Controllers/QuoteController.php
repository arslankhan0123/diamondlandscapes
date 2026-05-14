<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    /**
     * Store a newly created quote request in storage (Frontend).
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'service_id' => 'required|string',
            'property_type' => 'required|string',
            'message' => 'required|string',
        ]);

        try {
            Quote::create($request->all());
            return response()->json([
                'status' => 'success',
                'message' => 'Your quote request has been sent successfully!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong. Please try again later.'
            ], 500);
        }
    }

    /**
     * Display a listing of the quote requests (Backend).
     */
    public function index()
    {
        $quotes = Quote::with('service')->latest()->get();
        return view('admin.quotes.index', compact('quotes'));
    }

    /**
     * Display the specified quote request (Backend).
     */
    public function show($id)
    {
        $quote = Quote::with('service')->findOrFail($id);
        return view('admin.quotes.show', compact('quote'));
    }

    /**
     * Remove the specified quote request from storage (Backend).
     */
    public function destroy($id)
    {
        $quote = Quote::findOrFail($id);
        $quote->delete();

        return redirect()->route('admin.quotes.index')->with('success', 'Quote request deleted successfully.');
    }
}
