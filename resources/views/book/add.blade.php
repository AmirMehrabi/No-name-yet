@extends('layouts.master')

@include('layouts.navbar')

@section('content')
<div class="container">
    <div class="row justify-content-center">
            <div class="panel panel-default text-right">
                <div class="card" style="">
                  <div class="card-body">
                    <h5 class="card-title">افزودن کتاب</h5>
                    <h6 class="card-subtitle mb-2 text-muted">از این قسمت کتاب خود را به سیستم اضافه کنید</h6>
                    <form>
                      <fieldset class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        <small class="text-muted">We'll never share your email with anyone else.</small>
                      </fieldset>
                      <fieldset class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </fieldset>
                      <fieldset class="form-group">
                        <label for="exampleSelect1">Example select</label>
                        <select class="form-control" id="exampleSelect1">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </fieldset>
                      <fieldset class="form-group">
                        <label for="exampleSelect2">Example multiple select</label>
                        <select multiple class="form-control" id="exampleSelect2">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </fieldset>
                      <fieldset class="form-group">
                        <label for="exampleTextarea">Example textarea</label>
                        <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                      </fieldset>
                      <fieldset class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <input type="file" class="form-control-file" id="exampleInputFile">
                        <small class="text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                      </fieldset>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                          Option one is this and that&mdash;be sure to include why it's great
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                          Option two can be something else and selecting it will deselect option one
                        </label>
                      </div>
                      <div class="radio disabled">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                          Option three is disabled
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Check me out
                        </label>
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                  </div>
                </div>
            </div>
    </div>
</div>
@endsection
