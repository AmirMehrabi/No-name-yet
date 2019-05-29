@extends('layouts.master')

@section('title', 'پروفایل کاربری')


@section('header-assets')

@endsection

@section('content')
@include('partial.main-nav')

<div class="container mt-5">

    <div class="row">
        <div class="col-9">
            @if (count($currently_reading))

            <h1 class="h5">از کتاب‌هایی که شما مطالعه می‌کنید:</h1>

            @foreach ($currently_reading as $current_book)
            <div class="card text-dark bg-light border-0 rounded-lg mb-2">

                <div class="card-body p-1">
                    <div class="d-flex ">
                        <div class="p-2  w-15">
                            <img src="{{URL::asset('images/books/1.jpg')}}" class="w-100 rounded-lg" alt="">
                        </div>
                        <div class="d-flex flex-column flex-fill  justify-content-between  ">
                            <div class="p-2 ">
                                <div class="d-flex  ">
                                    <div class="p-2 flex-fill ">
                                        <p>ملت عشق</p>
                                    </div>
                                    <div class="p-2 flex-fill ">تاریخ شروع: ۱۲ مرداد ۱۳۹۷</div>
                                </div>
                            </div>
                            <div class="p-2 ">
                                <p class="text-left text-muted mb-0">۸۰۳ صفحه</p>
                                <div class="progress bg-white">

                                    <div class="progress-bar bg-success" role="progressbar" style="width: 75%"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="d-flex ">
                                <div class="p-2 flex-fill ">
                                    <p>۵۹ نقد دارد</p>
                                </div>
                                <div class="p-2 ">به روز رسانی مطالعه</div>

                                <div class="p-2 ">به روز رسانی مطالعه</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach

            <hr>
            @endif


            <!-- End of Book progress bar -->

            <!-- Start of Best books of the week -->
            <div class="d-flex flex-row  mb-3">
                <div class="p-2 ">
                    <h1 class="h5">کتاب‌های برتر هفته</h1>
                </div>
                <div class="p-2 ">
                    <a href="#" class=""> دیدن همه</a>
                </div>
            </div>

            <div class="d-flex ">
                <div class="p-2 flex-fill w-20">
                    <img src="{{URL::asset('images/books/1.jpg')}}" class="book-of-week-thumbnail rounded-lg" alt="">
                    <p class="text-kioosk font-weight-bold mb-0">زندگان</p>
                    <p class="">الیف شافاک</p>
                </div>
                <div class="p-2 flex-fill w-20">
                    <img src="images/books/2.jpg" class="book-of-week-thumbnail rounded-lg" alt="">
                    <p class="text-kioosk font-weight-bold mb-0">خاطراتی که نگه می‌داریم</p>
                    <p class="">الیف شافاک</p>
                </div>
                <div class="p-2 flex-fill w-20">
                    <img src="images/books/3.jpg" class="book-of-week-thumbnail rounded-lg" alt="">
                    <p class="text-kioosk font-weight-bold mb-0">حاصل عمر</p>
                    <p class="">الیف شافاک</p>
                </div>
                <div class="p-2 flex-fill w-20">
                    <img src="images/books/4.jpg" class="book-of-week-thumbnail rounded-lg" alt="">
                    <p class="text-kioosk font-weight-bold mb-0">بی‌شعورهای گردن‌کلفت</p>
                    <p class="">الیف شافاک</p>
                </div>
                <div class="p-2 flex-fill w-20">
                    <img src="images/books/5.jpg" class="book-of-week-thumbnail rounded-lg" alt="">
                    <p class="text-kioosk font-weight-bold mb-0">جان شیفته</p>
                    <p class="">الیف شافاک</p>
                </div>
            </div>

            <hr>

            <!-- End of section of Books of the week -->


            {{-- Start of section for random books --}}
            <div class="d-flex flex-row  mb-3">
                <div class="p-2 ">
                    <h1 class="h5">کتاب‌های اتفاقی</h1>
                </div>
                <div class="p-2 ">
                    <a href="#" class=""> دیدن همه</a>
                </div>
            </div>

            <div class="d-flex ">
                @foreach ($random_books as $random_book)
                <div class="p-2 flex-fill w-20 text-right">
                    @if ($random_book->image_src)
                    <img src="{{URL::asset($random_book->image_src)}}" class="book-of-week-thumbnail rounded-lg" alt="">
                    @else
                    <img src="https://firstfreerockford.org/wp-content/uploads/2018/08/placeholder-book-cover-default.png"
                        class="book-of-week-thumbnail rounded-lg" alt="">
                    @endif
                    <a href="{{route('book.show', $random_book->id)}}">{{$random_book->title}}</a>
                    <p class="">{{$random_book->author}}</p>
                </div>
                @endforeach

            </div>

            <hr>

            {{-- End of section for random books --}}

            <!-- Start of section for timeline -->
            <div class="d-flex flex-row  mb-3">
                <div class="p-2 ">
                    <h1 class="h5">آخرین اتفاقات</h1>
                </div>
                <div class="p-2 ">
                    <a href="#" class=""> دیدن همه</a>
                </div>
            </div>



            <!-- Bookshelf Timeline -->
            <div class="card text-dark border-1 rounded-lg mb-3">
                <div class="card-body p-1">
                    <div class="d-flex ">
                        <div class="p-2 w-10">
                            <img src="images/avatar.jpg" class="w-100 rounded-circle" alt="">
                        </div>
                        <div class="d-flex flex-column flex-fill  justify-content-between  ">
                            <div class="p-2 ">
                                <div class="d-flex  ">
                                    <div class="p-2 flex-fill text-right">
                                        <h2 class="h6"><b>محمد قمارباز</b> <b>ملت عشق</b> را به قفسه‌ی درحال
                                            مطالعه‌ی خود اضافه کرد</h2>
                                        <a href="#">دیدن این قفسه (۴۸ کتاب)</a>
                                    </div>
                                    <div class="p-2 flex-fill text-muted">سه دقیقه پیش</div>

                                </div>
                            </div>
                            <div class="p-2 ">
                                <p class="text-right text-muted mb-0">
                                    <div class="d-flex ">
                                        <div class="p-2  w-15">
                                            <img src="{{URL::asset('images/books/1.jpg')}}" class="w-100 rounded-lg"
                                                alt="">
                                        </div>
                                        <div class="d-flex flex-column flex-fill  justify-content-between  ">
                                            <div class="p-2 ">
                                                <div class="d-flex">
                                                    <div class="">
                                                        <p class="text-kioosk mb-0">ملت عشق</p>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="p-2 ">
                                                <p class=" mb-0">فئودور داستایوفسکی</p>

                                            </div>
                                            <div class="d-flex ">
                                                <div class="p-2 ">
                                                    <a href="" class="btn btn-kioosk rounded-lg">افزودن به قفسه</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </p>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <!-- End ofBookshelf timeline -->


            <!-- Review Card for timeline -->
            <div class="card text-dark border-1 rounded-lg mb-3">

                <div class="card-body p-1">
                    <div class="d-flex">
                        <div class="p-2 w-10">
                            <img src="images/avatar.jpg" class="w-100 rounded-circle" alt="">
                        </div>
                        <div class="d-flex flex-column flex-fill  justify-content-between w-90 ">
                            <div class="p-2 ">
                                <div class="d-flex  ">
                                    <div class="p-2 flex-fill text-right">
                                        <h2 class="h6"><b>سروناز</b> به <b>ملت عشق</b> یک نقد اضافه کرد:</h2>
                                        <a href="#">دیدن این نقد</a>
                                    </div>
                                    <div class="p-2 flex-fill text-muted">سه دقیقه پیش</div>

                                </div>
                            </div>
                            <div class="p-2 ">
                                <p class="text-right text-muted mb-0">
                                    ملت عشق رمانی است که تنها در ترکیه بیش از ۵۰۰ بار به چاپ رسیده و موفق شده است
                                    عنوان پرفروش‌ترین کتاب تاریخ ترکیه را به دست آورد. این رمان در ایران هم با
                                    استقبال خوبی روبه‌رو شده و تنها یک ترجمه از آن تا به حال بیشتر از ۵۰ بار تجدید
                                    چاپ شده است. ترجمه‌های مختلفی از این رمان ارائه شده است که یکی از ترجمه‌های خوب
                                    آن، ترجمه ارسلان فصیحی از نشر ققنوس است. در این مطلب نیز نقد کتاب ملت عشق را
                                    مطالعه خواهید کرد.
                                </p>
                            </div>
                            <div class="d-flex ">
                                <div class="p-2 ">۴۴ لایک</div>

                                <div class="p-2 ">۱۲ نظر</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- End of review card for timeline -->


            <!-- Rating to timeline -->

            <div class="card text-dark border-1 rounded-lg mb-3">
                <div class="card-body p-1">
                    <div class="d-flex ">
                        <div class="p-2 w-10">
                            <img src="images/avatar.jpg" class="w-100 rounded-circle" alt="">
                        </div>
                        <div class="d-flex flex-column flex-fill  justify-content-between  ">
                            <div class="p-2 ">
                                <div class="d-flex  ">
                                    <div class="p-2 flex-fill text-right">
                                        <h2 class="h6"><b>سزاریوس</b> به <b>خاطرات یک مغ</b> امتیاز داد</h2>
                                        <select id="rating-bar">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>


                                    </div>
                                    <div class="p-2 flex-fill text-muted">سه دقیقه پیش</div>

                                </div>
                            </div>
                            <div class="p-2 ">
                                <p class="text-right text-muted mb-0">
                                    <div class="d-flex ">
                                        <div class="p-2  w-15">
                                            <img src="{{URL::asset('images/books/1.jpg')}}" class="w-100 rounded-lg"
                                                alt="">
                                        </div>
                                        <div class="d-flex flex-column flex-fill  justify-content-between  ">
                                            <div class="p-2 ">
                                                <div class="d-flex">
                                                    <div class="">
                                                        <p class="text-kioosk mb-0">ملت عشق</p>
                                                    </div>
                                                    <div class="pr-2 font-weight-bold">۳۴ نقد</div>

                                                </div>
                                            </div>
                                            <div class="p-2 ">
                                                <p class=" mb-0">فئودور داستایوفسکی</p>

                                            </div>
                                            <div class="d-flex ">
                                                <div class="p-2 ">
                                                    <a href="" class="btn btn-kioosk rounded-lg">افزودن به قفسه</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </p>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <hr>


            <!-- End of section for timeline -->



            <!-- Start of section for best authors -->
            <div class="d-flex flex-row  mb-3">
                <div class="p-2 ">
                    <h1 class="h5">نویسنده‌های برتر</h1>
                </div>
                <div class="p-2 ">
                    <a href="#" class=""> دیدن همه</a>
                </div>
            </div>

            <div class="d-flex bd-highlight">



                <div class="p-2 flex-fill bd-highlight w-25">
                    <div class="writer-card rounded-lg mb-1">
                        <canvas class="header-bg" width="250" height="70" id="header-blur"></canvas>
                        <div class="avatar">
                            <img src="images/avatar.jpg" alt="" />
                        </div>
                        <div class="content">
                            <p class=" text-center">امیرمسعود مهرابیان <br>
                                ۵۰ کتاب</p>
                            <p class="text-kioosk pr-2 mb-0">قصه‌های مجید</p>
                            <p class="text-kioosk pr-2 mb-0 pb-2">قمارباز</p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-kioosk btn-block rounded-lg btn-sm">دیدن پروفایل</a>
                </div>
                <div class="p-2 flex-fill bd-highlight w-25">
                    <div class="writer-card rounded-lg mb-1">
                        <canvas class="header-bg" width="250" height="70" id="header-blur"></canvas>
                        <div class="avatar">
                            <img src="images/avatar.jpg" alt="" />
                        </div>
                        <div class="content">
                            <p class=" text-center">امیرمسعود مهرابیان <br>
                                ۵۰ کتاب</p>
                            <p class="text-kioosk pr-2 mb-0">قصه‌های مجید</p>
                            <p class="text-kioosk pr-2 mb-0 pb-2">ملت عشق</p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-kioosk btn-block rounded-lg btn-sm">دیدن پروفایل</a>
                </div>
                <div class="p-2 flex-fill bd-highlight w-25">
                    <div class="writer-card rounded-lg mb-1">
                        <canvas class="header-bg" width="250" height="70" id="header-blur"></canvas>
                        <div class="avatar">
                            <img src="images/avatar.jpg" alt="" />
                        </div>
                        <div class="content">
                            <p class=" text-center">امیرمسعود مهرابیان <br>
                                ۵۰ کتاب</p>
                            <p class="text-kioosk pr-2 mb-0">قصه‌های مجید</p>
                            <p class="text-kioosk pr-2 mb-0 pb-2">کلونل</p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-kioosk btn-block rounded-lg btn-sm">دیدن پروفایل</a>
                </div>
                <div class="p-2 flex-fill bd-highlight w-25">
                    <div class="writer-card rounded-lg mb-1">
                        <canvas class="header-bg" width="250" height="70" id="header-blur"></canvas>
                        <div class="avatar">
                            <img src="images/avatar.jpg" alt="" />
                        </div>
                        <div class="content">
                            <p class=" text-center">امیرمسعود مهرابیان <br>
                                ۵۰ کتاب</p>
                            <p class="text-kioosk pr-2 mb-0">قصه‌های مجید</p>
                            <p class="text-kioosk pr-2 mb-0 pb-2">راهنمای سفر کهکشانی</p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-kioosk btn-block rounded-lg btn-sm">دیدن پروفایل</a>
                </div>
            </div>






        </div>
        <div class="col-3">

            <!-- Sidebar -->

            <div class="sidebar-item">
                @if (count($coreaders))
                <div class="mb-4 text-center">

                    <div class="d-flex justify-content-center bd-highlight mb-3 text-center">
                        <div class="p-2">
                            <img src="images/avatar.jpg" class="rounded-circle w-75" alt="">
                        </div>
                        <div class="p-2">
                            <img src="images/avatar.jpg" class="rounded-circle w-75" alt="">
                        </div>
                        <div class="p-2">
                            <img src="images/avatar.jpg" class="rounded-circle w-75" alt="">
                        </div>
                    </div>
                    <p class="text-center">{{count($coreaders)}} نفر در حال مطالعه‌ی این کتاب هستند</p>
                    <a href="#" class="btn btn-outline-kioosk rounded-lg btn-sm">دیدن تمام هم‌خوان‌ها</a>
                </div>
                @endif

                <div class="mb-4">
                    <div class="d-flex flex-row bd-highlight mt-3 mb-2 border-bottom">
                        <div class=" flex-fill">
                            <h3 class="h6 text-muted mb-0"><i class="fa fa-check"></i> آخرین خوانده‌شده ها </h3>
                        </div>
                        <div class=" flex-fill"><a href="#">دیدن همه</a></div>
                    </div>
                    <div class="d-flex ">
                        <div class="p-2 flex-fill w-20">
                            <img src="{{URL::asset('images/books/1.jpg')}}" class="book-of-week-thumbnail rounded-lg"
                                alt="">
                        </div>
                        <div class="p-2 flex-fill w-20">
                            <img src="images/books/2.jpg" class="book-of-week-thumbnail rounded-lg" alt="">
                        </div>
                        <div class="p-2 flex-fill w-20">
                            <img src="images/books/3.jpg" class="book-of-week-thumbnail rounded-lg" alt="">
                        </div>

                    </div>
                </div>

                <div class="mb-4">
                    <div class="d-flex flex-row bd-highlight mt-3 mb-2 border-bottom">
                        <div class=" flex-fill">
                            <h3 class="h6 text-muted mb-0"><i class="fa fa-book"></i> در حال خواندن‌ها </h3>
                        </div>
                        <div class=" flex-fill"><a href="#">دیدن همه</a></div>
                    </div>
                    <div class="d-flex ">
                        <div class="p-2 flex-fill w-20">
                            <img src="images/books/4.jpg" class="book-of-week-thumbnail rounded-lg" alt="">
                        </div>
                        <div class="p-2 flex-fill w-20">
                            <img src="images/books/5.jpg" class="book-of-week-thumbnail rounded-lg" alt="">
                        </div>
                        <div class="p-2 flex-fill w-20">
                            <img src="images/books/6.jpg" class="book-of-week-thumbnail rounded-lg" alt="">
                        </div>

                    </div>
                </div>

                <div class="mb-4 make-me-sticky">
                    <div class="d-flex flex-row bd-highlight mt-3 mb-2 border-bottom">
                        <div class=" flex-fill">
                            <h3 class="h6 text-muted mb-0"><i class="fa fa-star"></i> آخرین نشان شده‌ها </h3>
                        </div>
                        <div class=" flex-fill"><a href="#">دیدن همه</a></div>
                    </div>
                    <div class="d-flex ">
                        <div class="p-2 flex-fill w-20">
                            <img src="images/books/7.jpg" class="book-of-week-thumbnail rounded-lg" alt="">
                        </div>
                        <div class="p-2 flex-fill w-20">
                            <img src="images/books/8.jpg" class="book-of-week-thumbnail rounded-lg" alt="">
                        </div>
                        <div class="p-2 flex-fill w-20">
                            <img src="images/books/9.jpg" class="book-of-week-thumbnail rounded-lg" alt="">
                        </div>

                    </div>
                    <div class="d-flex flex-row bd-highlight mt-3 mb-2 border-bottom">
                        <div class=" flex-fill">
                            <h3 class="h6 text-muted mb-0"><i class="fa fa-user-o"></i> شاید بشناسید </h3>
                        </div>
                        <div class=" flex-fill"><a href="#">دیدن همه</a></div>
                    </div>

                    <div class="d-flex align-items-center">
                        <div class="w-25">
                            <img src="{{URL::asset('images/books/1.jpg')}}" class="w-100 rounded-lg p-1" alt="">
                        </div>
                        <div class="d-flex flex-column flex-fill justify-content-between  ">
                            <div class="">
                                <div class="d-flex">
                                    <div class="">
                                        <p class=" mb-2 font-weight-bold">امیرمسعود مهرابیان</p>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <p class=" mb-0 text-muted">فئودور داستایوفسکی</p>
                            </div>
                        </div>
                        <div class="w-30">
                            <a href="#" class="btn btn-sm btn-outline-kioosk"> دنبال کردن</a>
                        </div>

                    </div>

                    <div class="d-flex align-items-center">
                        <div class="w-25">
                            <img src="{{URL::asset('images/books/1.jpg')}}" class="w-100 rounded-lg p-1" alt="">
                        </div>
                        <div class="d-flex flex-column flex-fill justify-content-between  ">
                            <div class="">
                                <div class="d-flex">
                                    <div class="">
                                        <p class=" mb-2 font-weight-bold">امیرمسعود مهرابیان</p>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <p class=" mb-0 text-muted">فئودور داستایوفسکی</p>
                            </div>
                        </div>
                        <div class="w-30">
                            <a href="#" class="btn btn-sm btn-outline-kioosk"> دنبال کردن</a>
                        </div>

                    </div>
                </div>
                <!-- <div class="">


                </div> -->
            </div>


        </div>
    </div>
</div>
@endsection


@section('footer-assets')

@endsection