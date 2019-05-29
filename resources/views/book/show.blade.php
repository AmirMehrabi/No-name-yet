@extends('layouts.master')





@section('header-assets')

@endsection

@section('content')

@include('partial.main-nav')

<book-template inline-template>
  <div>

      <div class="container">
          <div class="row justify-content-center mt-5">

            <div class="col-md-8">
              <div class="row">
        
                  <div class="col-md-3 col-sm-5 col-xs-7">
                      @if ($book->image_src)
                      <img src="{{URL::asset($book->image_src)}}" class="w-100 img-responsive rounded" alt="">
                      @else
                      <img src="https://firstfreerockford.org/wp-content/uploads/2018/08/placeholder-book-cover-default.png" class="w-100 img-responsive rounded" alt="">
                      @endif
                      <div class="dropdown">

                          @if ($book->shelf)
                          <button class="btn btn-success btn-block mt-1 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              @if ($book->shelf->shelf == 1)
                                  خوانده شده
                              @elseif($book->shelf->shelf == 2)
                            برای خواندن
                              @elseif($book->shelf->shelf == 3)
                            می‌خواهم بخوانم
                              @elseif($book->shelf->shelf == 4)
                                  ناتمام
                          @endif
                            </button>
                                
                            @else
                            <button class="btn btn-success btn-block mt-1 dropdown-toggle" type="button" id="dropdownMenuButton">
                                افزودن به لیست
                              </button>
                              <div class="dropdown">
                                  <button class="btn btn-success btn-block mt-1 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      افزودن به لیست
                                  </button>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      {!! Form::open(['route' => ['shelf.addBook', $book->id, auth()->user()->id] ]) !!}
                                      {!! Form::hidden('user_id', auth()->user()->id) !!}
                                      {!! Form::hidden('book_id', $book->id) !!}
                                      {!! Form::hidden('shelf', 1) !!}
              
              
                                      {!! Form::submit('خوانده شده', ['class' => 'dropdown-item']) !!}
                                    {!! Form::close() !!}
              
                                    {{-- For reading --}}
                                    {!! Form::open(['route' => ['shelf.addBook', $book->id, auth()->user()->id] ]) !!}
                                      {!! Form::hidden('user_id', auth()->user()->id) !!}
                                      {!! Form::hidden('book_id', $book->id) !!}
                                      {!! Form::hidden('shelf', 2) !!}
              
              
                                      {!! Form::submit('برای خواندن', ['class' => 'dropdown-item']) !!}
                                    {!! Form::close() !!}
              
              
                                    {{-- Reading --}}
                                    {!! Form::open(['route' => ['shelf.addBook', $book->id, auth()->user()->id] ]) !!}
                                    {!! Form::hidden('user_id', auth()->user()->id) !!}
                                    {!! Form::hidden('book_id', $book->id) !!}
                                    {!! Form::hidden('shelf', 3) !!}
              
              
                                    {!! Form::submit('می‌خواهم بخوانم', ['class' => 'dropdown-item']) !!}
                                  {!! Form::close() !!}
              
              
                                  {{-- Unfinished --}}
                                  {!! Form::open(['route' => ['shelf.addBook', $book->id, auth()->user()->id] ]) !!}
                                  {!! Form::hidden('user_id', auth()->user()->id) !!}
                                  {!! Form::hidden('book_id', $book->id) !!}
                                  {!! Form::hidden('shelf', 4) !!}
              
              
                                  {!! Form::submit('خوانده شده', ['class' => 'dropdown-item']) !!}
                                {!! Form::close() !!}
                                  </div>
                                </div>
                            @endif

                      
                        @if (Auth::user() && $book->shelf )
                        <button class="btn btn-light border-0 btn-block mt-1  trigger">
                            نقد این کتاب
                          </button>



            

            
                        <div class="dropdown-menu text-right" aria-labelledby="dropdownMenuButton">
                          {{-- Read --}}
                          {!! Form::open(['route' => ['shelf.addBook', $book->id, auth()->user()->id] ]) !!}
                            {!! Form::hidden('user_id', auth()->user()->id) !!}
                            {!! Form::hidden('book_id', $book->id) !!}
                            {!! Form::hidden('shelf', 1) !!}
    
    
                            {!! Form::submit('خوانده شده', ['class' => 'dropdown-item']) !!}
                          {!! Form::close() !!}
    
                          {{-- For reading --}}
                          {!! Form::open(['route' => ['shelf.addBook', $book->id, auth()->user()->id] ]) !!}
                            {!! Form::hidden('user_id', auth()->user()->id) !!}
                            {!! Form::hidden('book_id', $book->id) !!}
                            {!! Form::hidden('shelf', 2) !!}
    
    
                            {!! Form::submit('برای خواندن', ['class' => 'dropdown-item']) !!}
                          {!! Form::close() !!}
    
    
                          {{-- Reading --}}
                          {!! Form::open(['route' => ['shelf.addBook', $book->id, auth()->user()->id] ]) !!}
                          {!! Form::hidden('user_id', auth()->user()->id) !!}
                          {!! Form::hidden('book_id', $book->id) !!}
                          {!! Form::hidden('shelf', 3) !!}
    
    
                          {!! Form::submit('می‌خواهم بخوانم', ['class' => 'dropdown-item']) !!}
                        {!! Form::close() !!}
    
    
                        {{-- Unfinished --}}
                        {!! Form::open(['route' => ['shelf.addBook', $book->id, auth()->user()->id] ]) !!}
                        {!! Form::hidden('user_id', auth()->user()->id) !!}
                        {!! Form::hidden('book_id', $book->id) !!}
                        {!! Form::hidden('shelf', 4) !!}
    
    
                        {!! Form::submit('خوانده شده', ['class' => 'dropdown-item']) !!}
                      {!! Form::close() !!}
                          {{-- <a class="dropdown-item" href="#">در حال خواندن</a>
                          <a class="dropdown-item" href="#">می‌خواهم بخوانم</a>
                          <a class="dropdown-item" href="#">ناتمام</a> --}}
                        </div>
                        @endif
                      </div>
                    </div>
              
                <div class="col-md-9">
                  <div class="book-description text-justify">
                    <div class="d-flex bd-highlight mb-3">
                        <div class="p-2 bd-highlight">
                            <h1 class="h2 font-weight-bold text-right color-daneh">{{$book->title}}</h1>
            
                          </div>
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
                    <div class="book-description text-right">
                      @if ($book->description)
                        {{$book->description}}
                        @else
                        <p>هنوز توضیحاتی در مورد این کتاب وارد نشده است.</p>
                      @endif
                      
                    </div>
                    
                    <div class="collapse" id="collapseExample">
                      <div class=" card-body text-right rtl">
                        بقیه اطلاعات کتاب در این قسمت به کاربر نشان داده می‌شود.
                      </div>
                    </div>
                    <p class="text-left">
                      <a class="btn btn-default-outline text-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        اطلاعات بیشتر
                      </a>
                    </p>
  
                  </div>
        
        
                </div>

              </div>
        
              @if (count($book->reviews))
                <div class="row">
                  <div class="col-md-12">
                    <hr>
                    <div class="d-inline py-2 float-right rtl">
                      <h2 class="d-inline h5 font-weight-bold rtl text-daneh">نقدهای این کتاب:</h2>
                    </div>
                    <div class="d-inline py-2 float-left rtl">
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
        
        
        
        
                   <reviews :bookid="{{$book->id}}"></reviews> 
                    <br><br>
                  </div>
                </div>
              @endif
            </div>

            <div class="col-md-4">
                <h2 class="h5 font-weight-bold rtl text-right">از همین نویسنده</h2>
                <div class="row justify-content-center">
                  <div class="col-md-4 col-sm-7 col-xs-12">
                    <img alt="" class="rounded mx-auto w-100 similar-book-img mb-1" src="https://images.gr-assets.com/books/1546031886m/38447.jpg">
                  </div>
                  <div class="col-md-4 col-sm-7 col-xs-12">
                    <img alt="" class="rounded mx-auto w-100 similar-book-img mb-1" src="https://images.gr-assets.com/books/1546091617m/15823480.jpg">
                  </div>
                  <div class="col-md-4 col-sm-7 col-xs-12">
                    <img alt="" class="rounded mx-auto w-100 similar-book-img mb-1" src="https://images.gr-assets.com/books/1327869409m/7624.jpg">
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
        
        
  </div>
</book-template>
@endsection

@section('footer-assets')





<script type="text/javascript">
  $('.trigger, .exit').click(function() {
    $('.slider').toggleClass('close');
  });
</script>
@endsection
