@extends('layouts.admin')

@section('content')
<h1 class="text-3xl font-bold text-gray-800">Dashboard Admin</h1>
<p class="mt-2 text-gray-600">Selamat datang di panel admin Amallan.id.</p>
<div class="mt-6">
    <a href="{{ route('admin.posts.index') }}" class="inline-block px-6 py-3 bg-green-600 text-white font-semibold rounded-lg shadow hover:bg-green-700 transition">
        Kelola Berita
    </a>
</div>
@endsection