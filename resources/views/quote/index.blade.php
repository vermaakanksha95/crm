@extends('layout')

@section('content')
<div class="container px-20 p-4">
    <h1 class="text-2xl font-bold mb-4">Quotes</h1>
    <a href="{{ route('quotes.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Create Quote</a>

    <table class="table-auto w-full border-collapse border border-gray-300">
        <thead>
            <tr>
                <th class="border px-4 py-2">ID</th>
                <th class="border px-4 py-2">Subject</th>
                <th class="border px-4 py-2">Quote Stage</th>
                <th class="border px-4 py-2">Team</th>
                <th class="border px-4 py-2">Carrier</th>
                <th class="border px-4 py-2">Deal Name</th>
                <th class="border px-4 py-2">Valid Until</th>
                <th class="border px-4 py-2">Contact Name</th>
                <th class="border px-4 py-2">Account Name</th>
                <th class="border px-4 py-2">Billing Street</th>
                <th class="border px-4 py-2">Billing City</th>
                <th class="border px-4 py-2">Billing State</th>
                <th class="border px-4 py-2">Billing Code</th>
                <th class="border px-4 py-2">Billing Country</th>
                <th class="border px-4 py-2">Shipping Street</th>
                <th class="border px-4 py-2">Shipping City</th>
                <th class="border px-4 py-2">Shipping State</th>
                <th class="border px-4 py-2">Shipping Code</th>
                <th class="border px-4 py-2">Shipping Country</th>
                <th class="border px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($quotes as $quote)
                <tr>
                    <td class="border px-4 py-2">{{ $quote->id }}</td>
                    <td class="border px-4 py-2">{{ $quote->subject }}</td>
                    <td class="border px-4 py-2">{{ $quote->quote_stage }}</td>
                    <td class="border px-4 py-2">{{ $quote->team }}</td>
                    <td class="border px-4 py-2">{{ $quote->carrier }}</td>
                    <td class="border px-4 py-2">{{ $quote->deal_name }}</td>
                    <td class="border px-4 py-2">{{ $quote->valid_until }}</td>
                    <td class="border px-4 py-2">{{ $quote->contact_name }}</td>
                    <td class="border px-4 py-2">{{ $quote->account_name }}</td>
                    <td class="border px-4 py-2">{{ $quote->billing_street }}</td>
                    <td class="border px-4 py-2">{{ $quote->billing_city }}</td>
                    <td class="border px-4 py-2">{{ $quote->billing_state }}</td>
                    <td class="border px-4 py-2">{{ $quote->billing_code }}</td>
                    <td class="border px-4 py-2">{{ $quote->billing_country }}</td>
                    <td class="border px-4 py-2">{{ $quote->shipping_street }}</td>
                    <td class="border px-4 py-2">{{ $quote->shipping_city }}</td>
                    <td class="border px-4 py-2">{{ $quote->shipping_state }}</td>
                    <td class="border px-4 py-2">{{ $quote->shipping_code }}</td>
                    <td class="border px-4 py-2">{{ $quote->shipping_country }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('quotes.show', $quote) }}" class="text-blue-500">View</a>
                        <a href="{{ route('quotes.edit', $quote) }}" class="text-yellow-500 ml-2">Edit</a>
                        <form action="{{ route('quotes.destroy', $quote) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 ml-2">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection