@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">NEW TELEVISION</div>

                <div class="card-body">
                  <form action="{{route('television.update', $television -> id)}}" method="post">
                      @csrf
                      @method('POST')

                      <div class="form-group">
                          <label for="name">NAME</label>
                          <br>
                          <input type="text" name="name" value="{{$television -> name}}">
                      </div><br>
                      <div class="form-group">
                          <label for="model">MODEL</label>
                          <br>
                          <input type="text" name="model" value="{{$television -> model}}">
                      </div><br>
                      <div class="form-group">
                          <label for="brand">BRAND</label>
                          <br>
                          <input type="text" name="brand" value="{{$television -> brand}}">
                      </div><br>
                      <div class="form-group">
                          <label for="price">PRICE</label>
                          <br>
                          <input type="number" name="price" value="{{$television -> price}}">
                      </div><br>
                      <div class="form-group">
                          <label for="description">DESCRIPTION</label>
                          <br>
                          <input type="text" name="description" value="{{$television -> description}}">
                      </div><br>
                      <br><br>
                      <button class="btn btn-primary" type="submit">SAVE</button>
                      <br><br>
                  </form>


                </div>
            </div>
            <div class="card-header">
              <a class="btn" href="{{route('televisions.index')}}">
                HOME
              </a>
            </div>
        </div>
    </div>
</div>
@endsection
