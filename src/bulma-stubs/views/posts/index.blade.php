@extends('layouts.app')

@section('content')
  <section class="hero is-warning is-bold">
    <div class="hero-body">
      <div class="container">
        <h1 class="title">#posts.index</h1>
        <h2 class="subtitle">.. list All Posts</h2>
      </div>
    </div>
  </section>

  <div class="container m-t-20">
    <div class="block">

    @foreach($posts as $p)
      <article class="media">
        <div class="media-left">
          <figure class="image is-64x64">
            <img src="{{asset('img/robo.jpg')}}" alt="Image">
          </figure>
        </div>
        <div class="media-content">
          <div class="content">
            <p>
              <strong>{{$p->title}}</strong> <small>@johnsmith</small> <small>31m</small>
              <br>
              {{$p->body}}
            </p>
          </div>
        </div>
      </article>
      <hr>
    @endforeach

    {{$posts->links()}}

    </div>
  </div>
@endsection
