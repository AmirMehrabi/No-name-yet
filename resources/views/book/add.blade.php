@extends('layouts.master')

@include('layouts.navbar')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-7">
        <div class="panel panel-default text-right">
            <div class="card" style="">
              <div class="card-body">
                <h5 class="card-title">افزودن کتاب</h5>
                <h6 class="card-subtitle mb-2 text-muted">از این قسمت کتاب خود را به سیستم اضافه کنید</h6>
                  {!! Form::open(['route' => 'book.store', 'method' => 'POST']) !!}
                  {{ Form::token() }}
                  <fieldset class="form-group">
                    <label for=""></label>
                    <input type="text" name="name" class="form-control rtl" id="" placeholder="نام کتاب">

                  </fieldset>

                  <fieldset class="form-group">
                    <label for=""></label>
                    <input name="author" type="text" class="form-control rtl" id="" placeholder="نویسنده">

                  </fieldset>


                  <fieldset class="form-group">
                    <input name="translator" type="text" class="form-control rtl" id="" placeholder="مترجم">

                  </fieldset>



                  <fieldset class="form-group">
                    <input name="isbn" type="text" class="form-control rtl" id="" placeholder="شابک">
                  </fieldset>


                  <fieldset class="form-group">
                    <input name="publisher" type="text" class="form-control rtl" id="" placeholder="ناشر">
                  </fieldset>

                  <fieldset class="form-group">
                    <input name="number_of_pages" type="text" class="form-control rtl" id="" placeholder="تعداد صفحات">
                  </fieldset>

                  <fieldset class="form-group">
                    <input name="publication_year" type="text" class="form-control rtl" id="" placeholder="سال نشر">
                  </fieldset>

                  <fieldset class="form-group">
                    <label for="">توضیحات</label>
                    <textarea name="description" class="form-control rtl" rows="5" id="comment"></textarea>
                  </fieldset>

                  {!! Form::submit('ثبت کتاب', ['class' => 'btn btn-success btn-block']) !!}
                  {!! Form::close() !!}
                  </div>

              </div>
            </div>
      </div>
    </div>
</div>
@endsection
