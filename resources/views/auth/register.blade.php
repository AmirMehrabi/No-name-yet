@extends('layouts.master')

@section('content')

  <section class="login">

    <div class="container">
      <div class="row justify-content-center">
        <div class="col col-md-12 text-center">
          <div class="card raibow-botton-border m-5">
            <div class="row">
              <div class="col-md-6 p-2">
                <div class="login-background h-100 ml-3 rtl p-5">
                  <h1 class="h5 font-weight-bold mt-5 text-right">کمی بیشتر در مورد [دانه]:</h1>
                  <p class="text-justify px-2">
فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.
                  </p>
                  <p class="text-justify px-2">
فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.
                  </p>


                </div>

              </div>
              <div class="col-md-6 ">
                <div class="card-content">
                  <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                      {{ csrf_field() }}
                  <h1 class="h4 py-3 text-center">ثبت نام</h1>

                  <form class="mx-5  text-right">
                    <fieldset class="form-group">
                      <input type="text" class="form-control rtl" name="name" value="{{ old('name') }}" id="name" placeholder="نام" required autofocus>
                      @if ($errors->has('name'))
                          <span class="help-block">
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                      @endif
                    </fieldset>
                    <fieldset class="form-group">
                      <input type="text" class="form-control rtl" id="" placeholder="نام کاربری">
                    </fieldset>
                    <fieldset class="form-group">
                      <input type="email" class="form-control rtl" name="email" value="{{ old('email') }}" id="email" placeholder="آدرس ایمیل">
                      @if ($errors->has('email'))
                          <span class="help-block">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                    </fieldset>
                    <fieldset class="form-group">
                      <input type="password" name="password" id="password" class="form-control rtl" placeholder="کلمه عبور" required>
                      @if ($errors->has('password'))
                          <span class="help-block">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif
                    </fieldset>
                    <fieldset class="form-group">
                      <input type="password" class="form-control rtl" id="password-confirm" name="password_confirmation" required placeholder="تکرار کلمه عبور">
                    </fieldset>
                    <fieldset class="form-group rtl">
                      <label class="w-100 r-0">
                        <input type="radio" class="mt-2" name="optionsRadios" id="" value="option2">
                        با ثبت نام در وب‌سایت [دانه]، با تمام قوانین و مقررات وب‌سایت اعلام موافقت می‌کنم
                      </label>
                    </fieldset>

                    <div class="row justify-content-center">
                      <div class="col col-5 mt-4">
                        <button type="submit" class="btn btn-block btn-success">ثبت نام</button>
                        <button type="submit" class="btn btn-block btn-default text-primary">ورود</button>
                      </div>
                    </div>
                  </form>
                </div>


              </div>
            </div>


          </div>
        </div>
      </div>
    </div>



  </section>

@endsection
