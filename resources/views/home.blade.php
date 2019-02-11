@extends('layouts.master')

@section('title', 'صفحه‌ی نخست')

<style media="screen">
  body {
    background: linear-gradient(to right, rgba(229,229,229,1) 0%,rgba(229,229,229,1) 50%,rgba(255,255,255,1) 50%,rgba(255,255,255,1) 100%),
    url('../img/bg.png');
    height: 100%; /* You must set a specified height */
    background-position: center; /* Center the image */
    background-repeat: no-repeat; /* Do not repeat the image */
    background-size: cover; /* Resize the background image to cover the entire container */

  }
</style>



@section('content')
@include('partial.navbar')
  <div class="container">
    <div class="row justify-content-center align-items-center h-75">
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-10">
            <ul class="nav nav-tabs mb-2 border-0 rtl pr-0 mx-3" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link rounded border-0 active" id="profile-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">ثبت نام</a>
              </li>
              <li class="nav-item">
                <a class="nav-link rounded border-0" id="home-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">ورود</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade" id="login" role="tabpanel" aria-labelledby="login-tab">
                <form class="text-right mx-3">

                  <fieldset class="form-group">
                    <input type="email" class="form-control border-0 rtl" name="email" value="{{ old('email') }}" id="" placeholder=" ایمیل">
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                  </fieldset>

                  <fieldset class="form-group">
                    <input type="password" class="form-control border-0 rtl" id="password-login" name="password" placeholder="کلمه عبور" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                  </fieldset>



                  <div class="row justify-content-center">
                    <div class="col col-6">
                      <button type="submit" class="btn btn-block rounded-pill btn-success">ورود</button>
                    </div>
                    <div class="col col-6">
                      <a href="{{url('login/google/redirect')}}" class="btn btn-block rounded-pill btn-outline-light bg-white text-dark"><i class="fab fa-google"></i> ورود با گوگل </a>
                    </div>
                  </div>
                </form>
              </div>
              <div class="tab-pane fade show active" id="register" role="tabpanel" aria-labelledby="register-tab">
                <form class="text-right mx-3">
                  <fieldset class="form-group">
                    <input type="email" class="form-control border-0 rtl" name="email" value="{{ old('email') }}" id="" placeholder="نام کاربری">
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                  </fieldset>
                  <fieldset class="form-group">
                    <input type="email" class="form-control border-0 rtl" name="email" value="{{ old('email') }}" id="" placeholder=" ایمیل">
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                  </fieldset>

                  <fieldset class="form-group">
                    <input type="password" class="form-control border-0 rtl" id="password" name="password" placeholder="کلمه عبور" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                  </fieldset>



                  <div class="row justify-content-center">
                    <div class="col col-6">
                      <button type="submit" class="btn btn-block rounded-pill btn-success">ثبت نام</button>
                    </div>
                    <div class="col col-6">
                      <a href="{{url('login/google/redirect')}}" class="btn btn-block rounded-pill btn-outline-light bg-white text-dark"> ثبت نام با گوگل  <i class="fab fa-google"></i></a>
                    </div>
                  </div>
                </form>
              </div>
            </div>



          </div>
        </div>
      </div>
      <div class="col-md-6 rtl text-right">
        <div class="row justify-content-center align-items-center">
          <div class="col col-10">
            <h1 class="font-weight-bold text-daneh">دانه برای کتاب خونا!</h1>
            <h3>سرویس دانه یک بستر آنلاین برای آن‌هایی است که به مطالعهٔ نقد و اشتراک کتاب علاقه دارند.</h3>
          </div>
        </div>

      </div>
    </div>
  </div>
@endsection


@section('footer')
<section class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-12 justify-content-center text-right pb-5">
        <i class="fab fa-telegram-plane fa-2x mx-2"></i> <i class="fab fa-instagram fa-2x mx-2"></i> <i class="fab fa-twitter fa-2x mx-2"></i> <i class="fab fa-linkedin fa-2x ml-2 mr-5"></i>
      </div>
    </div>
  </div>
</section>

@endsection
