@extends('layouts.app')

@section('meta')
    <script>
        const publicKey = "secure_note_id_{{ $id }}";
        const publicKeyString = publicKey.toString(); 
    </script>
    <script src="https://hitanalytics.netlify.app/analytics.js"></script>
@endsection

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-lg max-w-lg mx-auto">
        <h2 class="text-2xl font-bold mb-4 text-center text-green-700">Your Secure Note</h2>
        <div class="p-4 bg-gray-100 rounded-lg">{!! $content !!}</div>
    </div>
@endsection
