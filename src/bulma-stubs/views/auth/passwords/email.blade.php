@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="columns is-marginless is-centered">
      <div class="column is-7">

        <section class="hero is-warning is-bold">
          <div class="hero-body">
            <h1 class="title">Reset Password</h1>
            <h2 class="subtitle">.. send Password Reset Link</h2>

            <div class="box">
              <form method="POST" action="{{ route('password.email') }}">
                {{ csrf_field() }}

                @if (session('status'))
                    <div class="notification">
                        {{ session('status') }}
                    </div>
                @endif

                <!-- E-Mail Address -->
                <div class="field is-horizontal">
                  <div class="field-label is-normal">
                    <label for="email" class="label">E-Mail</label>
                  </div>
                  <div class="field-body">
                    <div class="field">
                      <div class="control">
                        <input class="input {{ $errors->has('email') ? ' is-danger' : '' }}" type="email" id="email" name="email" placeholder="name@example.tld" value="{{old('email')}}" required autofocus>
                        @if ($errors->has('email'))
                            <p class="help is-danger">{{ $errors->first('email') }}</p>
                        @endif
                      </div>
                    </div>
                  </div>
                </div><!-- end of .field[E-Mail Address]-->

                <button type="submit" class="button is-warning is-fullwidth">Submit</button>

              </form>
            </div><!-- end of.box -->
          </div>
        </section>

      </div>
    </div>
  </div>

@endsection
