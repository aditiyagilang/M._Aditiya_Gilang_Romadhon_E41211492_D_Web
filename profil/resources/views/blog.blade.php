
@extends('layout.main') 

@section('container')
@foreach($post as $posts)
<article class="mb-5">
    <h2> 
        <a href="/blog/{{ $posts["slug"] }}">{{ $posts["judul"] }}</a></h2>
    <h5>By: {{ $posts["author"] }}</h5>
    <p> {{ $posts["body"] }}</p>
</article>
@endforeach
@endsection
