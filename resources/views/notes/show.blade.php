@extends('layouts.app')
@section('content')
    @if (session('link'))
        <div class="bg-green-100 p-6 rounded-lg shadow-lg max-w-lg mx-auto text-center">
            <h2 class="text-xl font-semibold mb-4">Note Created Successfully!</h2>
            <textarea class="w-full p-4 border border-gray-300 rounded-lg mb-4" readonly>{{ "Hey, I have created a message for you. The hint for the password is '{$note->password_hint}'. It will be accessible after {$note->available_at}." }}</textarea>
            <a href="{{ session('link') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg">Copy
                Link</a>
        </div>
    @endif

    <form action="{{ route('notes.verify', $note->id) }}" method="POST"
        class="bg-white p-6 rounded-lg shadow-lg max-w-lg mx-auto mt-8">
        @csrf
        <h2 class="text-2xl font-bold mb-4 text-center text-blue-700">Enter Password to View Note</h2>
        <input type="password" name="password"
            class="w-full p-4 border border-gray-300 rounded-lg mb-4 focus:ring-2 focus:ring-blue-500"
            placeholder="Enter the password to view the note" required>
        <button type="submit"
            class="w-full bg-blue-500 hover:bg-blue-600 text-white px-4 py-3 rounded-lg font-semibold">View Note</button>
        @if ($errors->any())
            <div class="text-red-500 mt-2">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
@endsection
