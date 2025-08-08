@extends('layouts.main')

@section('content')
<section class="section-padding">
    <article class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-3xl font-bold text-gray-800">{{ $post->title }}</h1>
        <p class="text-sm text-gray-500 mt-2">Dipublikasikan pada: {{ $post->created_at->format('d M Y') }}</p>
        @if ($post->image)
        <img src="{{ asset('assets/images/posts/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-auto mt-6 rounded-lg">
        @endif
        <div class="prose mt-6 text-gray-700">
            {!! nl2br(e($post->content)) !!}
        </div>
        <a href="{{ route('berita.index') }}" class="text-green-600 mt-8 inline-block font-semibold">Kembali ke Berita</a>
    </article>
</section>
@endsection