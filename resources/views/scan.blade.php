@extends('layouts.master')

@section('title', 'پروفایل کاربری')


@section('header-assets')

@endsection

@section('content')
@include('partial.main-nav')



<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div>
                <ais-index
                app-id="latency"
                api-key="3d9875e51fbd20c7754e65422f7ce5e1"
                index-name="bestbuy"
                inline-template
              >
                <div>                <ais-search-box></ais-search-box>
                    <ais-results>
                      <template slot-scope="{ result }">
                        <h2>
                          <ais-highlight :result="result" attribute-name="name"></ais-highlight>
                        </h2>
                      </template>
                    </ais-results></div>
              </ais-index>
            </div>
        </div>
    </div>
</div>

@endsection


@section('footer-assets')

@endsection