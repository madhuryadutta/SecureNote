 {{-- resources/views/layouts/app.blade.php --}}
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Secure Notes</title>
     <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.7/quill.min.js"></script>

 <body
     class="bg-gradient-to-r from-blue-100 via-purple-100 to-pink-100 text-gray-900 min-h-screen flex items-center justify-center">
     <div class="container mx-auto py-8">
         @yield('content')
     </div>
 </body>


 </html>
