<body class="w-screen h-screen bg-gray-200">
    <head class="header">
        @yield('header')
    </head>
    <div class="content w-10/12 min-[200px]:text-xs min-[200px]:p-4 sm:text-xs md:text-base lg:text-lg bg-white rounded-2xl border-2 border-sky-600 m-auto mt-5 pl-16">
        @yield('content')
    </div>
    <footer class="footer m-auto">
        @yield('footer')
    </footer>
</body>
<script src="https://cdn.tailwindcss.com"></script>
</html>