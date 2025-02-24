@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4 text-center">
    <div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-md">
        <svg class="w-16 h-16 text-green-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
        </svg>
        <h2 class="text-2xl font-bold text-green-600 mb-4">Success!</h2>
        <p class="text-gray-600">
            Thank you for your feedback. We will review your feedback and get back to you.
        </p>
    </div>
</div>
@endsection
