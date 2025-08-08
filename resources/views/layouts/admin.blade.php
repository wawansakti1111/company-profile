<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Amallan.id</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">

    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="text-xl font-bold text-gray-800">
                <a href="{{ route('admin.dashboard') }}">Amallan Admin</a>
            </div>
            <div class="space-x-4">
                <a href="{{ route('admin.dashboard') }}" class="text-gray-600 hover:text-gray-800">Dashboard</a>
                <a href="{{ route('admin.posts.index') }}" class="text-gray-600 hover:text-gray-800">Kelola Berita</a>
            </div>
        </div>
    </nav>

    <div class="container mx-auto px-6 py-8">
        @yield('content')
    </div>

</body>
</html>