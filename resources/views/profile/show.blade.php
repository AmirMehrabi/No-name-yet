@extends('layouts.master')

@section('title', 'پروفایل کاربری')


@section('header-assets')

@endsection

@section('content')
@include('partial.main-nav')

<section id="profile-header" class="p-5 bg-primary rtl">
        <div class="container">
                <div class="d-flex flex-row mb-3">
                        <div class="p-2 w-15">
                                <img src="images/profiles/amirmehrabi.jpg" class="profile-avatar rounded-circle w-100"
                                        alt="">
                        </div>
                        <div class="m-1 p-1 text-right align-self-center">
                                <p class="d-inline-block p-1 m-1 text-dark bg-white rounded">{{$user->name}}</p> <br>
                                <p class="d-inline-block p-1 m-1 text-dark bg-white rounded">amirmehrabian</p>
                        </div>
                </div>
        </div>

</section>
<div class="container">
    <div class="row">
        <div class="col-12">
            <ul class="nav nav-pills mb-3 rtl mt-2 border-bottom pr-0 pb-2" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link nav-link-profile   active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">مطالعه
                                                کرده</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-profile" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">برای
                                                مطالعه</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-profile" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">در حال
                                                مطالعه</a>
                </li>
                <li class="nav-item mr-auto">
                    <a class=" btn btn-dark bg-daneh border-0" href="#">دنبال کردن</a>
                </li>
            </ul>

        </div>
    </div>

    <div class="row">

        <div class="col-8">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    {{-- مطالعه کرده --}}

                    <div class="d-flex flex-row mb-3">

                        @foreach ($read as $read_book)
                        <div class="p-1 m-1  w-25">
                                @if ($read_book->image_src)
                                 <img src="{{ URL::asset($read_book->image_src) }}" class="book-thumbnail" alt="">
                                @else
                                 <img src="{{ URL::asset('images/placeholder-book-cover-default') }}" class="book-thumbnail" alt="">
                                @endif                              
                                <div class="d-flex">
                                <div class="flex-fill color-daneh text-right">{{$read_book->title}}</div>
                                <div class=" color-daneh text-left">۶۶٪</div>
                            </div>
                            <p class="text-right">{{$read_book->writer}}</p>
                        </div>
                        @endforeach

                    </div>

                    {{-- مطالعه کرده --}}
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                    <div class="d-flex flex-row mb-3">
                        @foreach ($reading as $reading_book)
                        <div class="p-1 m-1  w-25">
                                @if ($reading_book->image_src)
                                 <img src="{{ URL::asset($reading_book->image_src) }}" class="book-thumbnail" alt="">
                                @else
                                 <img src="{{ URL::asset('images/placeholder-book-cover-default') }}" class="book-thumbnail" alt="">
                                @endif                            <div class="d-flex flex-row-reverse">
                                <div class="flex-fill color-daneh text-right">{{$reading_book->title}}</div>
                                {{-- <div class=" color-daneh text-left">۶۶٪</div> --}}
                            </div>
                            <p class="text-right">{{$reading_book->writer}}</p>
                        </div>
                        @endforeach

                    </div>

                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="d-flex flex-row mb-3">
                        @foreach ($want_to_read as $want_to_read_book)
                        <div class="p-1 m-1  w-25">
                                @if ($want_to_read_book->image_src)
                                 <img src="{{ URL::asset($want_to_read_book->image_src) }}" class="book-thumbnail" alt="">

                                @else
                                 <img src="{{ URL::asset('images/placeholder-book-cover-default') }}" class="book-thumbnail" alt="">
                                @endif
                            <div class="d-flex flex-row-reverse">
                                <div class="flex-fill color-daneh text-right">{{$want_to_read_book->title}}</div>
                                {{-- <div class=" color-daneh text-left">۶۶٪</div> --}}
                            </div>
                            <p class="text-right">{{$want_to_read_book->writer}}</p>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            {{-- Side bar --}}

            <div class="d-flex flex-row mb-3 rtl border-bottom">
                <div class="p-2 flex-fill text-right"><i class="far fa-user"></i> ۲۷ دنبال کننده </div>
                <div class="p-2 flex-fill text-left"><i class="far fa-user"></i> ۴ کتاب
                </div>
            </div>

            <div class="p-2 border-bottom text-right mb-5">
                <p>هیس، از امشب من چگوارا هستم!</p>

                <p>تاریخ عضویت: ۱۳ مرداد ۱۳۹۶</p>
            </div>

            <div class="d-flex flex-row mb-3 rtl border-bottom text-muted">
                <div class="p-2 flex-fill text-right"><i class="fas fa-star"></i> ۳۲۰ امتیاز داده شده
                </div>
                <div class="p-2 flex-fill text-left"><a href="#" class="text-muted">دیدن همه</a>
                </div>
            </div>

            <div class="d-flex flex-row mb-3">
                <div class="p-1 m-1 flex-fill ">
                    <img src="{{ URL::asset('images/books/-1549109766book.jpg') }}" class="book-sidebar-thumbnail" alt="">

                </div>
                <div class="p-1 m-1 flex-fill ">
                    <img src="{{ URL::asset('images/books/-1549109737book.jpg') }}" class="book-sidebar-thumbnail" alt="">

                </div>
                <div class="p-1 m-1 flex-fill ">
                    <img src="{{ URL::asset('images/books/-1549110209book.jpg') }}" class="book-sidebar-thumbnail" alt="">

                </div>

            </div>

            {{-- نقد نوشته شده --}}
            <div class="d-flex flex-row  mb-3 rtl border-bottom text-muted">
                <div class="p-2 flex-fill text-right"><i class="fas fa-comments"></i> ۴۱ نقد نوشته شده
                </div>
                <div class="p-2 flex-fill text-left"><a href="#" class="text-muted">دیدن همه</a>
                </div>
            </div>

            <div class="d-flex flex-row mb-3 rtl  align-items-center profile-sidebar-review">
                <div class=" d-flex p-2 bd-highlight w-25  flex-column">
                    <img src="{{ URL::asset('images/books/-1549110209book.jpg') }}" class=" book-sidebar-review-thumbnail  " alt="">
                </div>
                <div class="d-flex flex-fill w-75  flex-column bd-highlight mb-3 text-right">
                    <div class=" flex-grow-1 bd-highlight">
                        <p class="font-weight-bold m-0">بره ناقلا</p>
                    </div>
                    <div class=" bd-highlight">توضیحاتی خلاصه و مختصر در مورد کتاب مذکور در این قسمت قرار خواهد گرفت که به معرفی کتاب کمک خواهد کرد.</div>
                </div>
            </div>

            <div class="d-flex flex-row mb-3 rtl  align-items-center">
                <div class=" d-flex p-2 bd-highlight w-25 flex-column">
                    <img src="{{ URL::asset('images/books/-1549110209book.jpg') }}" class=" book-sidebar-review-thumbnail w-100" alt="">
                </div>
                <div class="d-flex flex-fill w-75  flex-column bd-highlight mb-3 text-right">
                    <div class=" flex-grow-1 bd-highlight">
                        <p class="font-weight-bold m-0">بره ناقلا</p>
                    </div>
                    <div class=" bd-highlight">توضیحاتی خلاصه و مختصر در مورد کتاب مذکور در این قسمت قرار خواهد گرفت که به معرفی کتاب کمک خواهد کرد.</div>
                </div>
            </div>
            {{-- نقد نوشته شده --}} {{-- Side bar --}}

        </div>

    </div>
</div>

@endsection


@section('footer-assets')

@endsection