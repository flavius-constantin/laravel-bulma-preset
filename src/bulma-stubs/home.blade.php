@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="columns is-marginless is-centered">
      <div class="column is-9">

        <section class="hero is-warning is-bold">
          <div class="hero-body">
            <h1 class="title">Dashboard</h1>
              <h2 class="subtitle"><i class="fa fa-code"></i> with <i class="fa fa-heart"></i> by teamCookie/pcp</h2>

              <div class="box">
                @if (session('status'))
                  <div class="has-text-success">
                      <article class="message is-success">
                        <div class="message-body">
                          {{ session('status') }}
                        </div>
                      </article>
                  </div><br>
                @endif

                You are logged in!
              </div>
          </div>
        </section>

      </div>
    </div>
  </div>
@endsection
