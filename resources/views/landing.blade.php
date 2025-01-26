{{-- @extends('layouts.app')
@section('content')
    <div class="text-center">
        <h1 class="text-4xl font-bold text-blue-600 mb-4">Welcome to Secure Notes</h1>
        <p class="text-lg text-gray-700 mb-6">Create and share secure, password-protected notes with ease.</p>
        <a href="{{ route('notes.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold shadow-lg">Get Started</a>
    </div>
@endsection --}}

@extends('layouts.app')
@section('content')
<div class="relative bg-gradient-to-r from-blue-400 via-purple-500 to-pink-400 min-h-[60vh] flex flex-col items-center justify-center">
    <div class="text-center text-white max-w-2xl">
        <h1 class="text-5xl font-bold leading-tight mb-4">Welcome to Secure Notes</h1>
        <p class="text-lg font-medium mb-6">
            Create and share secure, password-protected notes with just a few clicks. Your privacy, our priority.
        </p>
        <a href="{{ route('notes.create') }}" 
           class="inline-block px-8 py-4 bg-white text-blue-500 font-semibold rounded-full shadow-lg hover:bg-blue-100">
           Get Started
        </a>
    </div>
</div>
<div class="py-12 bg-gray-100">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-8 text-gray-800">Why Choose Secure Notes?</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="text-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11V9m0 6h.01M5.45 8.69a7.999 7.999 0 0111.1 0m-11.1 6.62a8 8 0 0111.1 0m-11.1-6.62a7.978 7.978 0 001.58-1.47m10.95 6.89a7.978 7.978 0 01-1.58 1.47" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg mb-2">Top-Notch Security</h3>
                <p class="text-gray-600">Your notes are encrypted and protected with a password.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="text-purple-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16s1.5-2 4-2 4 2 4 2m8-2s1.5-2 4-2 4 2 4 2m-20-2s1.5 2 4 2 4-2 4-2m8 2s1.5-2 4-2 4 2 4 2m-12-2a6 6 0 016 6m0 0a6 6 0 01-6 6" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg mb-2">Easy to Share</h3>
                <p class="text-gray-600">Generate secure links to share your notes with anyone.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="text-pink-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6M9 12a3 3 0 11-3-3M9 12a3 3 0 103 3M21 12a3 3 0 11-3-3m3 3a3 3 0 01-3 3" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg mb-2">Customizable Timing</h3>
                <p class="text-gray-600">Set when your notes become available for extra control.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="text-green-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.24 20.24A12.54 12.54 0 0012 15.25M9.75 3v2.25M16.5 3v2.25m3.5 0A12.47 12.47 0 0124 12.76M0 12.76a12.47 12.47 0 0112.25 9.49m1.75-7.49h0" />
                    </svg>
                </div>
                <h3 class="font-bold text-lg mb-2">Responsive Design</h3>
                <p class="text-gray-600">Access your notes seamlessly across all devices.</p>
            </div>
        </div>
    </div>
</div>
@endsection
