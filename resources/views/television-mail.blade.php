@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$user -> name}}: {{$action}}</div>

                <div class="card-body">
                  <h3>
                    {{ $television -> name}}
                  </h3>
                  <ul>
                      <li>
                        MODEL: {{ $television -> model}}<br>
                        BRAND: {{ $television -> brand}}<br>
                        PRICE: {{ $television -> price}}<br>
                        DESCRIPTION:<br>
                         {{ $television -> description}}
                      </li>
                  </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
