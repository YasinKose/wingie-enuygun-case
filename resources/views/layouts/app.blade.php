<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield("title", "Enuygun.com")</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased">
<div
    class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-12 lg:px-12">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            <svg class="navbar-logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                 width="162" height="24" viewBox="0 0 162 24">
                <defs>
                    <path id="a"
                          d="M53.822.36v12.727c.01 1.551.148 3.184 2.441 3.184 2.294 0 2.433-1.633 2.441-3.184V.36h8.02v13.208c0 3.14-.958 5.544-2.847 7.149C62.092 22.232 59.53 23 56.263 23c-3.267 0-5.828-.768-7.613-2.284-1.889-1.605-2.847-4.01-2.847-7.149V.36h8.02zm69.684 0v12.727c.01 1.551.148 3.184 2.441 3.184 2.294 0 2.433-1.633 2.441-3.184L128.39.36h8.02v13.208c0 3.14-.959 5.544-2.848 7.149-1.785 1.516-4.346 2.284-7.614 2.284-3.267 0-5.828-.768-7.613-2.284-1.889-1.605-2.846-4.01-2.846-7.149V.36h8.018zM101.256 0c3.56 0 8.249 1.574 10.44 4.585L104.67 8.09c-.68-.963-1.804-1.512-3.108-1.512-3.141 0-4.784 2.717-4.784 5.4 0 2.415 1.56 4.981 4.449 4.981 1.411 0 3.118-.654 3.53-2.09l.058-.2h-3.825V9.648h12.55v.046c-.057 3.521-.107 6.562-2.724 9.341-2.317 2.483-5.914 3.965-9.62 3.965-3.461 0-6.603-1.064-8.848-2.995-2.388-2.055-3.65-4.945-3.65-8.355C88.697 4.68 93.744 0 101.257 0zM16.783.36v5.86H8.08v2.47h6.616v5.56H8.08v2.53h8.702v5.86H0V.36h16.782zM75.81.34l3.463 5.903h.429L83.01.34h8.09l-7.728 12.655v9.626h-7.836v-9.627L67.659.34h8.15zm-48.166 0l7.277 11.696V.34h7.654v22.28H34.85l-7.302-11.693-.006 11.694h-7.654V.34h7.755zm119.426 0l7.277 11.696V.34H162v22.28h-7.724l-7.302-11.672-.005 11.673h-7.655V.34h7.755z"></path>
                </defs>
                <use fill="#2DC44D" fill-rule="evenodd" transform="translate(0 .5)" xlink:href="#a"></use>
            </svg>
        </div>

        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow rounded-lg">
            <div class="flex">
                <div class="w-full p-6">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
