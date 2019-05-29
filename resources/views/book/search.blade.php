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
                    <a class="nav-link nav-link-profile   active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                        role="tab" aria-controls="pills-home" aria-selected="true">همه</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-profile" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                        role="tab" aria-controls="pills-profile" aria-selected="false">کتاب‌ها</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-profile" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                        role="tab" aria-controls="pills-contact" aria-selected="false">افراد</a>
                </li>
                <li class="nav-item mr-auto">
                    <a class=" btn btn-dark bg-daneh border-0" href="#">دنبال کردن</a>
                </li>
            </ul>

        </div>
    </div>

    <div class="row">
        <div class="tab-content w-100" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">



            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <ais-index app-id="{{ config('scout.algolia.id') }}" api-key="{{ config('scout.algolia.secret') }}" index-name="books"
                class="">
    
                <div class="col-12">
                    <div class="row  nogap mb-3">
                        <h1 class="h3 text-right my-2"> در دسته‌ی کتاب</h1>
                        <div class="search-box form-group w-100">
                          <label for=""></label>
                          <ais-search-box >
                              <ais-input placeholder="دنبال چه کتابی می‌گردید؟"  :autofocus="true" class="form-control"></ais-input>
                          </ais-search-box>
                          {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                        </div>
                    <ais-results class="row">
                        <template slot-scope="{ result }">
    
                            <div class="  col-lg-2 col-md-3 col-sm-4 col-xs-6 col-6  form-group d-inline-block ">
                                <div class="m-1 p-1 book-search-result rounded">
                                        <img v-bind:src="'/book/public/'+ result.image_src" class="w-100  img-responsive rounded search-book-img" v-if="result.image_src" />
    
                                        {{-- <img v-bind:src="'/no-name-yet/public/' + result.image_src" class="w-100  img-responsive rounded search-book-img" v-if="result.image_src" /> --}}
                                        <img src="https://firstfreerockford.org/wp-content/uploads/2018/08/placeholder-book-cover-default.png" class="w-100  img-responsive rounded search-book-img" v-else />
    
    
                                        <div class="d-flex">
                                            <div class="flex-fill color-daneh text-right">
                                                <a :href="result.id">
                                                        <ais-highlight :result="result" attribute-name="title"></ais-highlight>
                                                </a>
                                                
                                            </div>
                                        </div>
                                        <p class="text-right mb-0" v-text="result.author"></p>
                                </div>
    
                            </div>
                        </template>
                    </ais-results>
    
                </div>
    
                </div>
            </ais-index>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <ais-index app-id="{{ config('scout.algolia.id') }}" api-key="{{ config('scout.algolia.secret') }}" index-name="users"
                class="">
    
                <div class="col-12">
                    <div class="row  nogap mb-3">
                        <h1 class="h3 text-right my-2"> در افراد</h1>
                        <div class="search-box form-group w-100">
                          <label for=""></label>
                          <ais-search-box >
                              <ais-input placeholder="دنبال چه شخصی می‌گردید؟"  :autofocus="true" class="form-control"></ais-input>
                          </ais-search-box>
                          {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                        </div>
                    <ais-results class="w-100 rtl">
                        <template slot-scope="{ result }">
    
                            <div class="  col-md-2 col-sm-3 col-xs-4  form-group d-inline-block text-center">
                                <div class="m-1 p-1 rounded-circle pb-0 mb-0">
                                        <img v-bind:src="result.avatar" class="rounded-circle avatar-image-search" v-if="result.avatar" />
    
                                        {{-- <img v-bind:src="'/no-name-yet/public/' + result.image_src" class="w-100  img-responsive rounded search-book-img" v-if="result.image_src" /> --}}
                                        <img src="https://firstfreerockford.org/wp-content/uploads/2018/08/placeholder-book-cover-default.png" class="rounded-circle avatar-image-search" v-else />
    
    
                                        <a :href="'/user/' + result.id" class=" text-dark text-center font-weight-bold">
                                            <ais-highlight :result="result" attribute-name="name"></ais-highlight>
                                            <p class="text-muted text-center font-weight-normal">۱۳ دنبال کننده</p>
                                    </a>
                                </div>
    
                            </div>
                        </template>
                    </ais-results>
    
                </div>
    
                </div>
            </ais-index>
            </div>
        </div>

    </div>
</div>

@endsection


@section('footer-assets')

@endsection