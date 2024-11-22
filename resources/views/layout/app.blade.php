<!DOCTYPE html>
<html>

<head>
    <title>Laravel 10 Task List App</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />

    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.tailwindcss.js"></script>
    {{-- blade-formatter-disable --}}

<script >
   $.noConflict();
jQuery(document).ready(function($) {
    $('#example').DataTable();
});
   </script>

    <style type="text/tailwindcss">
    .btn{
        @apply rounded-md px-2 py-1 text-center font-medium shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50 text-slate-700
    }
    .link{
        @apply font-medium text-gray-700 underline decoration-pink-500
    }
    label{
        @apply block uppercase text-slate-700 mb-2
    }
    input,textarea{
        @apply shadow-sm appearance-none border w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none
    }
    .error-message{
        @apply text-red-500 text-sm
    }
    </style>


    {{-- blade-formatter-enable --}}
    @yield('styles')
</head>

<body class="container mx-auto my-10 mb-10 max-w-lg">
    <h1 class="text-2xl mb-4">@yield('title')</h1>
    <div>
        @if (session()->has('success'))
        <div>{{session('success')}} </div>



        @endif
        @yield('content')
    </div>
</body>
</html>
