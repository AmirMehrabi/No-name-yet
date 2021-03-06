@extends('layouts.master')

@section('title', 'پروفایل کاربری')


@section('header-assets')

@endsection

@section('content')
@include('partial.main-nav')


<div class="container mt-5">

        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-9">


                <div class="d-flex flex-row  mb-3">
                    <div class="card w-100">
                      <div class="card-body">
                        <h4 class="card-title">درباره‌ی احمد شاملو</h4>
                        <p class="card-text">احمد شاملو (۲۱ آذر ۱۳۰۴–۲ مرداد ۱۳۷۹) متخلص به الف. بامداد یا الف. صبح، شاعر، نویسنده، روزنامه‌نگار، پژوهشگر، مترجم، فرهنگ‌نویس و از دبیران کانون نویسندگان ایران پیش و پس از انقلاب ۱۳۵۷ بود.[۳][۴] شاملو تحصیلات کلاسیک نامرتبی داشت؛ زیرا پدرش افسر ارتش بود و پیوسته از این شهر به آن شهر اعزام می‌شد و از همین روی، خانواده اش هرگز نتوانستند برای مدتی طولانی جایی ماندگار شوند. زندانی شدنش در سال ۱۳۲۲ به سبب فعالیت‌های سیاسی، پایانِ همان تحصیلات نامرتب را رقم می‌زند.</p>
                        <p class="card-text">شهرت اصلی شاملو به خاطر نوآوری در شعر معاصر فارسی و سرودن گونه‌ای شعر است که با نام شعر سپید یا شعر شاملویی که هم‌اکنون یکی از مهم‌ترین قالب‌های شعری مورد استفاده ایران به‌شمار می‌رود و تقلیدی است از شعر سپید فرانسوی[۵] یا شعر منثور شناخته می‌شود. شاملو که هر شاعر آرمانگرا را در نهایت امر یک آنارشیست تام و تمام می‌انگاشت،[۶] در سال ۱۳۲۵ با نیما یوشیج ملاقات کرد و تحت تأثیر او به شعر نیمایی روی آورد؛ اما نخستین بار در شعر «تا شکوفهٔ سرخ یک پیراهن» که در سال ۱۳۲۹ با نام «شعر سفید غفران» منتشر شد وزن را رها کرد و به صورت پیشرو سبک نویی را در شعر معاصر فارسی شکل داد.[۷] شاملو علاوه بر شعر، فعالیت‌هایی مطبوعاتی، پژوهشی و ترجمه‌هایی شناخته‌شده دارد. مجموعهٔ کتاب کوچه او بزرگ‌ترین اثر پژوهشی در باب فرهنگ عامه مردم ایران می‌باشد.[۸] آثار وی به زبان‌های: سوئدی، انگلیسی، ژاپنی، فرانسوی، اسپانیایی، آلمانی، روسی، ارمنی، هلندی، رومانیایی، فنلاندی، کردی و ترکی∗ ترجمه شده‌اند. شاملو از سال ۱۳۳۱ به مدت دو سال، مشاور فرهنگی سفارت مجارستان بود.</p>
                    </div>
                    </div>
                </div>
                

                <div class="d-flex flex-row  mb-3">
                    <div class="p-2 ">
                        <h1 class="h5">کتاب‌های منتشر شده از این نویسنده</h1>
                    </div>
                    <div class="p-2 flex-fill">
                        <div class="dropdown open">
                            <button class="btn btn-light dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                        جدیدترین
                                    </button>
                            <div class="dropdown-menu" aria-labelledby="triggerId">
                                <button class="dropdown-item" href="#">Action</button>
                                <button class="dropdown-item disabled" href="#">Disabled action</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex ">
                    <div class="p-2 flex-fill w-25">
                        <img src="images/books/1.jpg" class="writers-thumbnail rounded-lg" alt="">
                        <p class="text-kioosk font-weight-bold mb-0">زندگان</p>
                        <p class="">الیف شافاک</p>
                    </div>
                    <div class="p-2 flex-fill w-25">
                        <img src="images/books/2.jpg" class="writers-thumbnail rounded-lg" alt="">
                        <p class="text-kioosk font-weight-bold mb-0">خاطراتی که نگه می‌داریم</p>
                        <p class="">الیف شافاک</p>
                    </div>
                    <div class="p-2 flex-fill w-25">
                        <img src="images/books/3.jpg" class="writers-thumbnail rounded-lg" alt="">
                        <p class="text-kioosk font-weight-bold mb-0">حاصل عمر</p>
                        <p class="">الیف شافاک</p>
                    </div>
                    <div class="p-2 flex-fill w-25">
                        <img src="images/books/4.jpg" class="writers-thumbnail rounded-lg" alt="">
                        <p class="text-kioosk font-weight-bold mb-0">بی‌شعورهای گردن‌کلفت</p>
                        <p class="">الیف شافاک</p>
                    </div>
                </div>
                <div class="d-flex ">
                        <div class="p-2 flex-fill w-25">
                            <img src="images/books/1.jpg" class="writers-thumbnail rounded-lg" alt="">
                            <p class="text-kioosk font-weight-bold mb-0">زندگان</p>
                            <p class="">الیف شافاک</p>
                        </div>
                        <div class="p-2 flex-fill w-25">
                            <img src="images/books/2.jpg" class="writers-thumbnail rounded-lg" alt="">
                            <p class="text-kioosk font-weight-bold mb-0">خاطراتی که نگه می‌داریم</p>
                            <p class="">الیف شافاک</p>
                        </div>
                        <div class="p-2 flex-fill w-25">
                            <img src="images/books/3.jpg" class="writers-thumbnail rounded-lg" alt="">
                            <p class="text-kioosk font-weight-bold mb-0">حاصل عمر</p>
                            <p class="">الیف شافاک</p>
                        </div>
                        <div class="p-2 flex-fill w-25">
                            <img src="images/books/4.jpg" class="writers-thumbnail rounded-lg" alt="">
                            <p class="text-kioosk font-weight-bold mb-0">بی‌شعورهای گردن‌کلفت</p>
                            <p class="">الیف شافاک</p>
                        </div>
                    </div>
                <hr>


                <!-- End of section for timeline -->

            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">

                <!-- Sidebar -->

                <div class="sidebar-item m-1 m-sm-0">
                    <div class="card text-dark bg-light border-0 rounded-lg">

                        <div class="card-body p-3 text-center">
                            <img src="images/books/1.jpg" class="w-25 rounded-circle writer-thumbnail" alt="">
                            <p class="h6 m-1">احمد شاملو</p>
                            <p class="text-muted">کرمان، ایران</p>

                            <a href="#" class="btn btn-kioosk btn-block">دنبال کردن</a>

                            <div class="d-flex  ">
                                <div class="pt-2 w-50 ">
                                    <p class="mb-0 text-right"><i class="fa fa-user-o" aria-hidden="true"></i>
                                        ۲۷ دنبال کننده</p>
                                </div>
                                <div class="pt-2 w-50 ">
                                    <p class="mb-0 text-left"><i class="fa fa-book" aria-hidden="true"></i>
                                        ۳ کتاب</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4 mt-1">

                            <a href="#" class="text-muted my-1">www.shamloo.com <i class="fa fa-globe fa-2x" aria-hidden="true"></i></a><br>
                            <a href="#" class="text-muted my-1">034-3690 <i class="fa fa-phone fa-2x" aria-hidden="true"></i></a> <br>



                        <hr>
                        <a href="#" class="btn btn-outline-kioosk">عاشقانه</a>
                        <a href="#" class="btn btn-outline-kioosk">داستان عاشقانه</a>
                        <a href="#" class="btn btn-outline-kioosk">علمی</a>
                    </div>




                    <div class="mb-4 make-me-sticky">

                        <div class="d-flex flex-row bd-highlight mt-3 mb-2 border-bottom">
                            <div class=" flex-fill">
                                <h3 class="h6 text-muted mb-0"><i class="fa fa-user-o"></i> شاید بشناسید </h3>
                            </div>
                            <div class=" flex-fill"><a href="#">دیدن همه</a></div>
                        </div>

                        <div class="d-flex align-items-center">
                            <div class="w-25">
                                <img src="images/books/1.jpg" class="w-100 rounded-lg p-1" alt="">
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
                                <img src="images/books/1.jpg" class="w-100 rounded-lg p-1" alt="">
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