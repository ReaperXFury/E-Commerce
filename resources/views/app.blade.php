<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @viteReactRefresh
        @vite(['resources/css/app.css', 'resources/js/app.jsx'])

        <x-inertia::head />
    </head>
    <body class="font-sans antialiased bg-slate-950 text-slate-100">
        <x-inertia::app />
    </body>
</html>