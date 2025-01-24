@extends('layout')

@section('content')
<div class="container px-20 py-10">
    <h1 class="text-2xl font-bold mb-4">Create Quote</h1>
    <form action="{{ route('quotes.store') }}" method="POST">
        @csrf
        <label class="block mb-2">Subject:</label>
        <input type="text" name="subject" class="border border-gray-300 rounded px-4 py-2 w-full mb-4" />

        <label class="block mb-2">Quote Stage:</label>
        <input type="text" name="quote_stage" class="border border-gray-300 rounded px-4 py-2 w-full mb-4" />

        <label class="block mb-2">Team:</label>
        <input type="text" name="team" class="border border-gray-300 rounded px-4 py-2 w-full mb-4" />

        <label class="block mb-2">Carrier:</label>
        <input type="text" name="carrier" class="border border-gray-300 rounded px-4 py-2 w-full mb-4" />

        <label class="block mb-2">Deal Name:</label>
        <input type="text" name="deal_name" class="border border-gray-300 rounded px-4 py-2 w-full mb-4" />

        <label class="block mb-2">Valid Until:</label>
        <input type="date" name="valid_until" class="border border-gray-300 rounded px-4 py-2 w-full mb-4" />

        <label class="block mb-2">Contact Name:</label>
        <input type="text" name="contact_name" class="border border-gray-300 rounded px-4 py-2 w-full mb-4" />

        <label class="block mb-2">Account Name:</label>
        <input type="text" name="account_name" class="border border-gray-300 rounded px-4 py-2 w-full mb-4" />

        <label class="block mb-2">Billing Street:</label>
        <input type="text" name="billing_street" class="border border-gray-300 rounded px-4 py-2 w-full mb-4" />

        <label class="block mb-2">Billing City:</label>
        <input type="text" name="billing_city" class="border border-gray-300 rounded px-4 py-2 w-full mb-4" />

        <label class="block mb-2">Billing State:</label>
        <input type="text" name="billing_state" class="border border-gray-300 rounded px-4 py-2 w-full mb-4" />

        <label class="block mb-2">Billing Code:</label>
        <input type="text" name="billing_code" class="border border-gray-300 rounded px-4 py-2 w-full mb-4" />

        <label class="block mb-2">Billing Country:</label>
        <input type="text" name="billing_country" class="border border-gray-300 rounded px-4 py-2 w-full mb-4" />

        <label class="block mb-2">Shipping Street:</label>
        <input type="text" name="shipping_street" class="border border-gray-300 rounded px-4 py-2 w-full mb-4" />

        <label class="block mb-2">Shipping City:</label>
        <input type="text" name="shipping_city" class="border border-gray-300 rounded px-4 py-2 w-full mb-4" />

        <label class="block mb-2">Shipping State:</label>
        <input type="text" name="shipping_state" class="border border-gray-300 rounded px-4 py-2 w-full mb-4" />

        <label class="block mb-2">Shipping Code:</label>
        <input type="text" name="shipping_code" class="border border-gray-300 rounded px-4 py-2 w-full mb-4" />
               
        <label class="block mb-2">Shipping Country:</label>
        <input type="text" name="shipping_country" class="border border-gray-300 rounded px-4 py-2 w-full mb-4" />

        <button type="submit" class="bg-red-900 text-black px-4 py-2 rounded">Save</button>
    </form>
</div>
@endsection
