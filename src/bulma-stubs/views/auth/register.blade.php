@extends('layouts.app')

@section('content')
<div class="container">
  <div class="columns is-marginless is-centered">
    <div class="column is-7">

      <section class="hero is-warning is-bold">
        <div class="hero-body">
          <h1 class="title">Register</h1>
          <h2 class="subtitle">.. create a User Account</h2>

          <div class="box">
            <form method="POST" action="{{ route('register') }}">
              {{ csrf_field() }}

              <!-- E-Mail Address -->
              <div class="field is-horizontal">
                <div class="field-label is-normal">
                  <label for="name" class="label">Name</label>
                </div>
                <div class="field-body">
                  <div class="field">
                    <div class="control">
                      <input class="input {{ $errors->has('name') ? ' is-danger' : '' }}" placeholder="John Doe" type="text" id="name" name="name" value="{{old('name')}}" required autofocus>
                      @if ($errors->has('name'))
                          <p class="help is-danger">{{ $errors->first('name') }}</p>
                      @endif
                    </div>
                  </div>
                </div>
              </div><!-- end of .field[Name]-->

              <!-- E-Mail Address -->
              <div class="field is-horizontal">
                <div class="field-label is-normal">
                  <label for="email" class="label">E-Mail Address</label>
                </div>
                <div class="field-body">
                  <div class="field">
                    <div class="control">
                      <input class="input {{ $errors->has('email') ? ' is-danger' : '' }}" type="email" id="email" name="email" placeholder="john@doe.com" value="{{old('email')}}" required autofocus>
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

              <!-- Password Confirmation -->
              <div class="field is-horizontal">
                <div class="field-label is-normal">
                  <label for="password_confirmation" class="label">Confirm Pasword</label>
                </div>
                <div class="field-body">
                  <div class="field">
                    <div class="control">
                      <input class="input {{ $errors->has('password_confirmation') ? ' is-danger' : '' }}" type="password" id="password_confirmation" name="password_confirmation">
                      @if ($errors->has('password_confirmation'))
                          <p class="help is-danger">{{ $errors->first('password_confirmation') }}</p>
                      @endif
                    </div>
                  </div>
                </div>
              </div><!-- end of .field[Password Confirmation]-->

                    <button type="submit" class="button is-warning is-fullwidth">Submit</button>

            </form>
          </div><!-- end of.box -->
          <div class="control has-text-centered">
            <a href="{{ route('login') }}">Already have an Account?</a>
          </div>
        </div>
      </section>

    </div>
  </div>
</div>
@endsection
