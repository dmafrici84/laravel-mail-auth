@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">TELEVISION:</div>

                <div class="card-body">
                  <h3>
                    {{ $television -> name}}
                  </h3>
                  <ul>
                      <li>
                        MODEL: {{ $television -> model}}<br>
                        BRAND: {{ $television -> brand}}<br>
                        PRICE: {{ $television -> price}}<br>
                        @auth
                        DESCRIPTION:<br>
                         {{ $television -> description}}<br>
                      </li>
                  </ul>
                    <br><br>
                    <a class="btn btn-primary" href="{{route('television.create')}}">
                      CREATE
                    </a>
                    <a class="btn btn-secondary" href="{{route('television.edit', $television -> id)}}">
                      UPDATE
                    </a>
                    <a class="btn btn-danger" href="{{route('television.delete', $television -> id)}}">
                      DELETE
                    </a>
                    @else
                      <br><br>
                      <p>

                        For more information and to make changes you need to  <a href="{{url('/register')}}">register</a> or <a href="{{url('/login')}}">login</a>
                      </p>
                  @endauth

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
