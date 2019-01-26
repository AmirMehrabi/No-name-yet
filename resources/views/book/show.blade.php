@extends('layouts.master')

@include('layouts.navbar')

@section('content')
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-4">
        <h2 class="h4 rtl text-right">کتاب‌های مشابه:</h2>
        <hr>
        <div class="row">
          <div class="col-4">
            <img alt="" class="rounded mx-auto d-block similar-book-img" src="https://images.gr-assets.com/books/1546031886m/38447.jpg">
          </div>
          <div class="col-4">
            <img alt="" class="rounded mx-auto d-block similar-book-img" src="https://images.gr-assets.com/books/1546091617m/15823480.jpg">
          </div>
          <div class="col-4">
            <img alt="" class="rounded mx-auto d-block similar-book-img" src="https://images.gr-assets.com/books/1327869409m/7624.jpg">
          </div>
        </div>

        <br><br><br>
        <h2 class="h4 rtl text-right">ژانر:</h2>
        <hr>
        <ul class="list-group text-right">
          <li class="list-group-item">علمی - تخیلی</li>
          <li class="list-group-item">فانتزی</li>
          <li class="list-group-item">کلاسیک</li>
        </ul>
      </div>
      <div class="col-md-8">
        <div class="row">

          <div class="col-md-9">
            <div class="book-description text-justify">
              <h1 class="h2 font-weight-bold text-right">اسم کتاب اینجا قرار می‌گیرد</h1>
              <h2 class="h4 text-right font-weight-bold">ژول ورن</h2>
              <h3 class="h6 text-right">
                <span class=""><i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i></span>
                <a href="#" class="badge badge-secondary">نمایش نقدها</a>
                <span class="badge badge-secondary rtl">۵۱۲ بار رتبه داده شده</span>
              </h3>
              <hr>
              <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد</p>
            </div>
            <hr>


          </div>
          <div class="col-md-3">
            <img src="https://firstfreerockford.org/wp-content/uploads/2018/08/placeholder-book-cover-default.png" class="w-100 img-responsive" alt="">
            <div class="dropdown">
              <button class="btn btn-success btn-block mt-1 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                افزودن به لیست
              </button>
              <div class="dropdown-menu text-right" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">خوانده شده</a>
                <a class="dropdown-item" href="#">در حال خواندن</a>
                <a class="dropdown-item" href="#">می‌خواهم بخوانم</a>
                <a class="dropdown-item" href="#">ناتمام</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h2 class="h5 font-weight-bold rtl text-right">نقدهای این کتاب:</h2>
            @foreach ($book->reviews as $review)
            <div class="card text-right my-2">


                    <div class="card-body">
                        <div class="row my-2">
                            <div class="col-md-2">
                                <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"/>
                                <p class="text-secondary text-center">{{$review->created_at->diffForHumans()}}</p>
                            </div>
                            <div class="col-md-10">
                                <p>
                                    <a class="" href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>{{$review->owner->name}}</strong></a>
                                    <span class="float-left"><i class="text-warning fa fa-star"></i></span>
                                      <span class="float-left"><i class="text-warning fa fa-star"></i></span>
                                    <span class="float-left"><i class="text-warning fa fa-star"></i></span>
                                    <span class="float-left"><i class="text-warning fa fa-star"></i></span>
                                    <span class="float-left"><i class="text-warning fa fa-star"></i></span>

                               </p>
                               <div class="clearfix"></div>
                               <p>
                                 {{$review->body}}
                               </p>
                                <p>
                                    <a class="float-right btn btn-outline-primary ml-2"> <i class="fa fa-reply"></i> کامنت</a>
                                    <a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> لایک</a>
                               </p>
                            </div>
                        </div>
                    </div>
            	</div>
            @endforeach
          </div>
        </div>
      </div>

    </div>
  </div>
@endsection
