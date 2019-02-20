@extends('layouts.master')

@section('title', 'پروفایل کاربری')


@section('header-assets')

@endsection

@section('content')
@include('partial.main-nav')

<div class="container">
  <ais-index app-id="{{ config('scout.algolia.id') }}" api-key="{{ config('scout.algolia.secret') }}" index-name="books">
    <ais-search-box></ais-search-box>
    <ais-results>
      <template slot-scope="{ result }">
        <p>
          <ais-highlight :result="result" attribute-name="title"></ais-highlight>
        </p>
      </template>
    </ais-results>
  </ais-index>
</div>
@endsection


@section('footer-assets')

@endsection