<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $quotes = Quote::all(); 
        return view('/quote.index', compact('quotes')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('quote.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'quote_stage' => 'required|string|max:255',
            'team' => 'required|string|max:255',
            'carrier' => 'nullable|string|max:255',
            'deal_name' => 'nullable|string|max:255',
            'valid_until' => 'nullable|date',
            'contact_name' => 'nullable|string|max:255',
            'account_name' => 'nullable|string|max:255',
            'billing_street' => 'nullable|string|max:255',
            'billing_city' => 'nullable|string|max:255',
            'billing_state' => 'nullable|string|max:255',
            'billing_code' => 'nullable|string|max:255',
            'billing_country' => 'nullable|string|max:255',
            'shipping_street' => 'nullable|string|max:255',
            'shipping_city' => 'nullable|string|max:255',
            'shipping_state' => 'nullable|string|max:255',
            'shipping_code' => 'nullable|string|max:255',
            'shipping_country' => 'nullable|string|max:255',
        ]);
    
        Quote::create($request->all());
    
        return redirect()->route('quotes.index')->with('success', 'Quote created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Quote $quote)
    {
        //return view('quote.show', compact('quote'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quote $quote)
    {
       // return view('quote.edit', compact('quote'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Quote $quote)
    {
        Schema::table('quotes', function (Blueprint $table) {
            $table->string('subject')->nullable();
            $table->string('quote_stage')->nullable();
            $table->string('team')->nullable();
            $table->string('carrier')->nullable();
            $table->string('deal_name')->nullable();
            $table->date('valid_until')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('account_name')->nullable();
            $table->string('billing_street')->nullable();
            $table->string('billing_city')->nullable();
            $table->string('billing_state')->nullable();
            $table->string('billing_code')->nullable();
            $table->string('billing_country')->nullable();
            $table->string('shipping_street')->nullable();
            $table->string('shipping_city')->nullable();
            $table->string('shipping_state')->nullable();
            $table->string('shipping_code')->nullable();
            $table->string('shipping_country')->nullable();
        });
    

        $quote->update($request->all());
        return redirect()->route('quote.index')->with('success', 'Quote updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quote $quote)
    {
        $quote->delete();
        return redirect()->route('quote.index')->with('success', 'Quote deleted successfully.');
    
    }
}
