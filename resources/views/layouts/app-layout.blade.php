<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>

<body class="h-full bg-gray-100">
<x-nav></x-nav>
<main class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    {{ $slot }}
</main>

<x-footer></x-footer>

</body>
</html>
