@extends('layouts.app')

@section('content')
<div class="container">
  <div class="columns is-marginless is-centered">
    <div class="column is-7">

      <section class="hero is-warning is-bold">
        <div class="hero-body">
          <h1 class="title">Login</h1>
          <h2 class="subtitle">.. if you already have an Account</h2>

          <div class="box">
            <form class="login-form" method="POST" action="{{ route('login') }}">
              {{ csrf_field() }}

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

              <!-- Password -->
              <div class="field is-horizontal">
                <div class="field-label is-normal">
                  <label for="password" class="label">Pasword</label>
                </div>
                <div class="field-body">
                  <div class="field">
                    <div class="control">
                      <input class="input {{ $errors->has('password') ? ' is-danger' : '' }}" type="password" id="password" name="password">
                      @if ($errors->has('password'))
                          <p class="help is-danger">{{ $errors->first('password') }}</p>
                      @endif
                    </div>
                  </div>
                </div>
              </div><!-- end of .field[Password]-->

              <!-- Remember Me -->
              <div class="field is-horizontal">
                <div class="field-label is-normal">
                  <label for="remember" class="label"></label>
                </div>
                <div class="field-body">
                  <div class="field">
                    <div class="control">
                      <label class="checkbox">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                      </label>
                    </div>
                  </div>
                </div>
              </div><!-- end of .field[Remember Me]-->

              <button type="submit" class="button is-warning is-fullwidth">Login</button>

            </form>
          </div><!-- end of.box -->
          <div class="control has-text-centered">
            <a href="{{ route('password.request') }}">Forgot Your Password?</a>
          </div>
        </div>
      </section>

    </div>
  </div>
</div>
@endsection
