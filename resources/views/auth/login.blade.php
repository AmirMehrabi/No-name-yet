@extends('layouts.master')

@section('content')
  <section class="login">
    <div class="container">
      <div class="row justify-content-center  align-items-center">
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
              <div class="col-md-6 align-self-center">
                <div class="card-content">
                  <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                      {{ csrf_field() }}
                  <h1 class="h4 py-3 text-center">ثبت نام</h1>

                  <form class="mx-5  text-right">
                    <fieldset class="form-group">
                      <input type="email" class="form-control rtl" name="email" value="{{ old('email') }}" id="" placeholder="آدرس ایمیل">
                      @if ($errors->has('email'))
                          <span class="help-block">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                    </fieldset>

                    <fieldset class="form-group">
                      <input type="password" class="form-control rtl" id="password" name="password" placeholder="کلمه عبور" required>
                      @if ($errors->has('password'))
                          <span class="help-block">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif
                    </fieldset>

                    <div class="row justify-content-center">
                      <div class="col col-5 mt-4">
                        <button type="submit" class="btn btn-block btn-success">ورود</button>
                        <a href="{{url('login/google/redirect')}}" class="btn btn-block btn-outline-warning"><i class="fab fa-google"></i> ورود با گوگل </a>
                        <button type="submit" class="btn btn-block btn-default text-primary">ثبت نام</button>
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
