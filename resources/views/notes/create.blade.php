@extends('layouts.app')
@section('content')
    <form action="{{ route('notes.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-lg max-w-3xl mx-auto">
        @csrf
        <h2 class="text-2xl font-bold mb-4 text-center text-blue-700">Create a Secure Note</h2>
        <div class="grid grid-cols-3 gap-4 mb-4">
            <div class="col-span-1">
                <input type="password" name="password"
                    class="w-full p-4 border border-gray-300 rounded-lg mb-4 focus:ring-2 focus:ring-blue-500"
                    placeholder="Password" required>
                <input type="text" name="password_hint"
                    class="w-full p-4 border border-gray-300 rounded-lg mb-4 focus:ring-2 focus:ring-blue-500"
                    placeholder="Password hint (optional)">
                <input type="number" name="available_after"
                    class="w-full p-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500"
                    placeholder="Available after (minutes)">
            </div>
            <div class="col-span-2">
                <div id="editor" class="bg-white border border-gray-300 rounded-lg h-64"></div>
                <input type="hidden" name="content" id="content">
            </div>
        </div>
        <button type="submit"
            class="w-full bg-blue-500 hover:bg-blue-600 text-white px-4 py-3 rounded-lg font-semibold">Create Note</button>
    </form>
    <script>
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

        document.querySelector('form').onsubmit = function() {
            document.querySelector('#content').value = quill.root.innerHTML;
        };
    </script>
@endsection
