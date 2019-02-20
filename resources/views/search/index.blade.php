@extends('layouts.master')

@section('title', 'جست و جو')


@section('header-assets')

@endsection

@section('content')
@include('partial.main-nav')



<div class="container">
        <div class="row">
                <div class="col-12">
                    
                        <ul class="nav nav-pills mb-3 rtl mt-2 border-bottom pr-0 pb-2" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                        <a class="nav-link nav-link-profile   active" id="pills-home-tab" data-toggle="pill"
                                                href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">همه</a>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link nav-link-profile" id="pills-profile-tab" data-toggle="pill"
                                                href="#pills-profile" role="tab" aria-controls="pills-profile"
                                                aria-selected="false">کتاب‌ها</a>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link nav-link-profile" id="pills-contact-tab" data-toggle="pill"
                                                href="#pills-contact" role="tab" aria-controls="pills-contact"
                                                aria-selected="false">افراد</a>
                                </li>
                                <li class="nav-item mr-auto">
                                        <a class=" btn btn-dark bg-daneh border-0" href="#">دنبال کردن</a>
                                </li>
                        </ul>

                </div>
        </div>

        <div class="row">
                




                <div class="col-12">
                        <h1 class="h3 text-right my-2">[مورد جست‌وجو شده] در دسته‌ی کتاب</h1>
                        <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                        {{-- مطالعه کرده --}}

                                        <div class="d-flex flex-row mb-3">
                                                <div class="p-1 m-1 flex-fill ">
                                                        <img src="{{ URL::asset('images/books/-1549109766book.jpg') }}"
                                                                class="book-thumbnail" alt="">
                                                        <div class="d-flex flex-row-reverse">
                                                                <div class="flex-fill color-daneh text-right">نان
                                                                        و سیاست</div>
                                                                <div class=" color-daneh text-left">۶۶٪</div>
                                                        </div>
                                                        <p class="text-right">فئودور داستایوفسکی</p>
                                                </div>
                                                <div class="p-1 m-1 flex-fill ">
                                                    <img src="{{ URL::asset('images/books/-1549109766book.jpg') }}"
                                                            class="book-thumbnail" alt="">
                                                    <div class="d-flex flex-row-reverse">
                                                            <div class="flex-fill color-daneh text-right">نان
                                                                    و سیاست</div>
                                                            <div class=" color-daneh text-left">۶۶٪</div>
                                                    </div>
                                                    <p class="text-right">فئودور داستایوفسکی</p>
                                            </div>
                                                <div class="p-1 m-1 flex-fill ">
                                                        <img src="{{ URL::asset('images/books/-1549109737book.jpg') }}"
                                                                class="book-thumbnail" alt="">
                                                        <div class="d-flex flex-row-reverse">
                                                                <div class="flex-fill color-daneh text-right">حاصل
                                                                        عمر</div>
                                                                <div class=" color-daneh text-left">۶۶٪</div>
                                                        </div>
                                                        <p class="text-right">آلبرت انیشتین</p>
                                                </div>
                                                <div class="p-1 m-1 flex-fill ">
                                                        <img src="{{ URL::asset('images/books/-1549110209book.jpg') }}"
                                                                class="book-thumbnail" alt="">
                                                        <div class="d-flex flex-row-reverse">
                                                                <div class="flex-fill color-daneh text-right">قمار
                                                                        باز</div>
                                                                <div class=" color-daneh text-left">۶۶٪</div>
                                                        </div>
                                                        <p class="text-right">فئودور داستایوفسکی</p>
                                                </div>
                                                <div class="p-1 m-1 flex-fill ">
                                                        <img src="{{ URL::asset('images/books/-1549109757book.jpg') }}"
                                                                class="book-thumbnail" alt="">
                                                        <div class="d-flex flex-row-reverse">
                                                                <div class="flex-fill color-daneh text-right">جان
                                                                        شیفته</div>
                                                                <div class=" color-daneh text-left">۶۶٪</div>
                                                        </div>
                                                        <p class="text-right">رومن رولان</p>
                                                </div>

                                        </div>


                                        {{-- مطالعه کرده --}}
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
                        </div>
                </div>
        </div>
</div>

@endsection


@section('footer-assets')

@endsection