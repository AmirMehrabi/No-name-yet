@extends('layouts.master')

@include('layouts.navbar')

@section('content')
<div class="container">
    <div class="row content-justify-center">
        <div class="col-md-8 ">
            <div class="panel panel-default text-right">
                <div class="panel-heading">داشبورد</div>
                <div class="card" style="width: 18rem;">
                  <div class="card-body">
                    <h5 class="card-title">داشبورد</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
