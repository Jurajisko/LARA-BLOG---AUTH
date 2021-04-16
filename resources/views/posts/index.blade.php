@extends('master')
@section('title', isset($title) ? $title : 'All the posts')

@section('content')

    <section class="box post-list">
        <h1 class="box-heading text-muted">
           {{ isset($title) ? $title : "This is a blog, fool" }} 
        </h1>
        <p>
            @forelse ( $posts as $post )

                <article id="post-{{ $post->id }}" class="post">
                    <header class="post-header">
                        <h2>
                            <a href="{{ url('post', $post->id) }}">{{ $post->title }}</a>
                            <time>
                                <small>/ {{ $post->created_at }}</small>
                            </time>
                        </h2>
                        @include('partials.tags')
                    </header>
                    <div class="post-content">
                        <p>
                            {{-- Str::limit( $post->text, 300) --}}
                            {!! $post->teaser !!}
                        </p>
                    </div>
                    <footer class="post-footer">
                        <a href="{{ url('post', $post->id) }}" class="read-more">read more</a>
                    </footer>
                </article>                
            @empty
                <p> we got nothing man.</p>
            @endforelse
        </p>
    </section>
    
@endsection