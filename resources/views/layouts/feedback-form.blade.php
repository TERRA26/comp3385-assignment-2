@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl mb-4">Feedback Form</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{ url('/feedback/send') }}" class="max-w-lg">
        @csrf
        <div class="mb-4">
            <label for="fullname" class="block mb-2">Full Name (Required)</label>
            <input type="text" name="fullname" id="fullname" required
                   class="w-full p-2 border rounded" value="{{ old('fullname') }}">
        </div>

        <div class="mb-4">
            <label for="email" class="block mb-2">Email (Required)</label>
            <input type="email" name="email" id="email" required
                   class="w-full p-2 border rounded" value="{{ old('email') }}">
        </div>

        <div class="mb-4">
            <label for="comment" class="block mb-2">Comments (Required)</label>
            <textarea name="comment" id="comment" required
                      class="w-full p-2 border rounded h-32">{{ old('comment') }}</textarea>
            <p class="text-sm text-gray-600 mt-1">Let us know what you think of our website.</p>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
            Submit
        </button>
    </form>
</div>
@endsection
