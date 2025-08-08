@extends('layouts.main')

@section('content')
<section class="section-padding">
    <h2 class="section-heading">Berita Terbaru</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-10">
        @foreach ($posts as $post)
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            @if ($post->image)
            <img src="{{ asset('assets/images/posts/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-48 object-cover">
            @endif
            <div class="p-6">
                <h3 class="text-xl font-bold text-gray-800">{{ $post->title }}</h3>
                <p class="text-gray-600 text-sm mt-2">{{ Str::limit(strip_tags($post->content), 100) }}</p>
                <a href="{{ route('berita.show', $post->slug) }}" class="text-green-600 mt-4 inline-block font-semibold">Baca Selengkapnya</a>
            </div>
        </div>
        @endforeach
    </div>
    <div class="mt-8">
        {{ $posts->links() }}
    </div>
</section>
@endsection