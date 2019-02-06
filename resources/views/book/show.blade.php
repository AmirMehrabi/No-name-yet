@extends('layouts.master')



@include('partial.main-nav')

@section('header-assets')
<link rel="stylesheet" href="https://uicdn.toast.com/tui-editor/latest/tui-editor.css">
</link>
<link rel="stylesheet" href="https://uicdn.toast.com/tui-editor/latest/tui-editor-contents.css">
</link>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.39.2/codemirror.css">
</link>
@endsection

@section('content')
<div class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-md-4">
      <h2 class="h5 font-weight-bold rtl text-right">از همین نویسنده</h2>
      <div class="row justify-content-center">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <img alt="" class="rounded mx-auto w-100 similar-book-img" src="https://images.gr-assets.com/books/1546031886m/38447.jpg">
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <img alt="" class="rounded mx-auto w-100 similar-book-img" src="https://images.gr-assets.com/books/1546091617m/15823480.jpg">
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <img alt="" class="rounded mx-auto w-100 similar-book-img" src="https://images.gr-assets.com/books/1327869409m/7624.jpg">
        </div>
      </div>
      <hr>

      <br>
      <h2 class="h5 font-weight-bold rtl text-right">ژانر</h2>
      <h5 class="text-right">
        <span class="badge badge-secondary text-white bg-daneh p-2 my-1">علمی</span>
        <span class="badge badge-secondary text-white bg-daneh p-2 my-1">تخیلی</span>
        <span class="badge badge-secondary text-white bg-daneh p-2 my-1">داستان عاشقانه</span>
        <span class="badge badge-secondary text-white bg-daneh p-2 my-1">رمان کلاسیک</span>
      </h5>
      <hr>

      <h2 class="h5 font-weight-bold rtl text-right mt-4">به اشتراک گذاری</h2>


    </div>
    <div class="col-md-8">
      <div class="row">

        <div class="col-md-9">
          <div class="book-description text-justify">
            <div class="d-flex bd-highlight mb-3">
              <div class="mr-auto p-2 bd-highlight">
                <h3 class="text-muted h6 pt-3">
                  <i class="far fa-star"></i>
                  <i class="far fa-star"></i>
                  <i class="far fa-star"></i>
                  <i class="fas fa-star  text-warning"></i>
                  <i class="fas fa-star  text-warning"></i>
                  - ۵۸۲ رای
                </h3>
              </div>
              <div class="p-2 bd-highlight">
                <h1 class="h2 font-weight-bold text-right color-daneh">{{$book->title}}</h1>

              </div>
            </div>
            <div class="book-meta-data mb-3 mt-3">
              <div class="row no-gutter text-center text-dark">
                <div class="col-md-4">
                  <p class="my-1 py-1"><span class="fas fa-list-ul"></span> {{$book->category}}</p>
                </div>
                <div class="col-md-4">
                  <p class="my-1 py-1"><span class="fas fa-book"></span> {{$book->publisher}}</p>
                </div>




                <div class="col-md-4">
                  @if ($book->author == "نویسنده ای مشخص نشده است")
                  <p class="my-1 py-1"><span class="fas fa-pen-nib"></span> نامشخص </p>
                  @else
                  <p class="my-1 py-1"><span class="fas fa-pen-nib"></span> {{$book->author}} </p>
                  @endif
                </div>
              </div>


            </div>

            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود
              ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد</p>
            <p class="text-left">
              <a class="btn btn-default-outline text-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                اطلاعات بیشتر
              </a>
            </p>
            <div class="collapse" id="collapseExample">
              <div class="card card-body text-right rtl">
                بقیه اطلاعات کتاب در این قسمت به کاربر نشان داده می‌شود.
              </div>
            </div>
          </div>


        </div>
        <div class="col-md-3">
          @if ($book->image_src)
          <img src="{{URL::asset($book->image_src)}}" class="w-100 img-responsive rounded" alt="">
          @else
          <img src="https://firstfreerockford.org/wp-content/uploads/2018/08/placeholder-book-cover-default.png" class="w-100 img-responsive rounded" alt="">
          @endif
          <div class="dropdown">
            <button class="btn btn-success btn-block mt-1 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              افزودن به لیست
            </button>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            @if (Auth::user())
              <button class="btn btn-light border-0 btn-block mt-1  trigger">
                نقد این کتاب
              </button>
            @endif



            <div class="dropdown-menu text-right" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">خوانده شده</a>
              <a class="dropdown-item" href="#">در حال خواندن</a>
              <a class="dropdown-item" href="#">می‌خواهم بخوانم</a>
              <a class="dropdown-item" href="#">ناتمام</a>
            </div>
          </div>
        </div>
      </div>

      @if (count($book->reviews))
        <div class="row">
          <div class="col-md-12">
            <hr>
            <div class="d-inline p-2 float-right rtl">
              <h2 class="d-inline h5 font-weight-bold rtl text-daneh">نقدهای این کتاب:</h2>
            </div>
            <div class="d-inline p-2 float-left rtl">
              <div class="btn-group dropdown">
                <h2 class="d-inline h5 font-weight-bold rtl text-dark d-flex align-items-center mb-0 pl-3">بر اساس:</h2>
                <button type="button" class="btn btn-light dropdown-toggle rounded" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  جدیدترین
                </button>
                <div class="dropdown-menu dropdown-menu-right text-right w-50">
                  <button class="dropdown-item" type="button">پر بازدیدترین</button>
                  <button class="dropdown-item" type="button">قدیمی ترین</button>
                  <button class="dropdown-item" type="button">اول دوستان</button>
                </div>
              </div>
            </div>

            <div class="clearfix">
            </div>





            @foreach ($book->reviews as $review)
            <div class="review text-right my-2 w-100 mb-3 border-bottom pb-2">
              <div class="card-body">
                <div class="d-flex flex-row align-items-center">
                  <div class="mr-auto py-2 bd-highlight">
                    @if ($review->created_at->diffInDays() > 7)
                    <p class="text-muted rtl m-0">{{ \Morilog\Jalali\CalendarUtils::convertNumbers(\Morilog\Jalali\Jalalian::fromCarbon($review->created_at)->format('%d %B %Y'))}}</p>
                    @else
                    <p class="text-muted rtl m-0">{{ \Morilog\Jalali\CalendarUtils::convertNumbers($review->created_at->diffForHumans()) }}</p>
                    @endif
                  </div>
                  <div class=" p-2 bd-highlight">
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                  </div>
                  <div class="py-2 bd-highlight order-2">
                    <img src="{{$review->owner->avatar}}" class="review-profile-pic img-rounded img-fluid rounded-circle" />
                  </div>

                  <div class="p-2 bd-highlight order-1">
                    <p class="mb-0">
                      <a class="text-muted" href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>{{$review->owner->name}}</strong> </a>
                    </p>
                  </div>

                </div>


                <div class="review-description text-justify">
                  <p>{{$review->body}}</p>
                </div>

                <div class="d-flex flex-row bd-highlight">
                  <div class=" bd-highlight mr-3">
                    <a class="   text-muted" data-toggle="collapse" href="#collapseComments-{{$review->id}}" role="button" aria-expanded="false" aria-controls="collapseComments-{{$review->id}}"> ۱۲ <i class="fa fa-reply"></i></a>

                  </div>
                  <div class=" bd-highlight">
                    <a class="  text-muted" href=""> ۴۴ <i class="fa fa-heart"></i></a>

                  </div>
                </div>

                <div class="collapse" id="collapseComments-{{$review->id}}">
                  <div class="card card-body text-right rtl text-dark">
                    بقیه اطلاعات کتاب در این قسمت به کاربر نشان داده می‌شود.
                  </div>
                </div>

              </div>
            </div>
            @endforeach



            <div class="review text-right my-2 w-100 mb-3 border-bottom pb-2">
              <div class="card-body">
                <div class="d-flex flex-row align-items-center">
                  <div class="mr-auto p-2 bd-highlight">
                    <p class="text-muted rtl">۱۴ بهمن ۱۳۹۷</p>
                  </div>
                  <div class=" p-2 bd-highlight">
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                  </div>
                  <div class="p-2 bd-highlight order-2">
                    <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="review-profile-pic img-rounded img-fluid" />
                  </div>

                  <div class="p-2 bd-highlight order-1">
                    <p class="mb-0">
                      <a class="text-muted" href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>امیرمسعود مهرابیان</strong> </a>
                    </p>
                  </div>

                </div>


                <div class="review-description text-justify">
                  <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف
                    بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان
                    فارسی ایجاد کرد</p>
                </div>

                <div class="d-flex flex-row bd-highlight">
                  <div class=" bd-highlight mr-3">
                    <a class="   text-muted" data-toggle="collapse" href="#collapseComments" role="button" aria-expanded="false" aria-controls="collapseComments"> ۱۲ <i class="fa fa-reply"></i></a>

                  </div>
                  <div class=" bd-highlight">
                    <a class="  text-muted" href=""> ۴۴ <i class="fa fa-heart"></i></a>

                  </div>
                </div>

                <div class="collapse" id="collapseComments">
                  <div class="card card-body text-right rtl text-dark">
                    بقیه اطلاعات کتاب در این قسمت به کاربر نشان داده می‌شود.
                  </div>
                </div>

              </div>
            </div>

            <button type="button" class="btn btn-light btn-block border-0">نقدهای بیشتر</button>

          </div>
        </div>
      @endif
    </div>

  </div>
</div>

<div class="bg-white border-bottom-0 rounded-top slider p-3 slider close">
  <button title="Close" class="btn btn-sm exit" type="button"><i class=" fas fa-times"></i></button>
  <hr>
  {!! Form::open(['route' => 'review.store', 'method' => 'post']) !!}

  <fieldset class="form-group text-right">
    <label for="exampleTextarea">نقد خود را بنویسید</label>
    <textarea name="body" class="form-control" id="exampleTextarea" rows="5"></textarea>
    {!! Form::hidden('book_id', $book->id) !!}
  </fieldset>

  <button type="submit" class="btn btn-primary">ثبت نقد</button>
  {!! Form::close() !!}
</div>


@endsection

@section('footer-assets')
<script src="http://uicdn.toast.com/tui-editor/latest/tui-editor-Editor-all.js"></script>
























<script type="text/javascript">
  $('.trigger, .exit').click(function() {
    $('.slider').toggleClass('close');
  });
</script>
@endsection
