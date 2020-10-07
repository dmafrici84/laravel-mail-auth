@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">TELEVISIONS:</div>

                <div class="card-body">
                  <ul>
                    @foreach ($televisions as $television)
                      <li>
                        <a href="{{route('television.show', $television -> id)}}">
                          {{ $television -> name}}
                        </a>
                      </li>
                    @endforeach
                  </ul>
                  @auth
                    <br><br>
                    <a class="btn btn-primary" href="{{route('television.create')}}">
                      CREATE
                    </a>
                  @else
                    <br><br>
                    <p>

                      For more information and to make changes you need to  <a href="{{url('/register')}}">register</a> or <a href="{{url('/login')}}">login</a>
                    </p>
                  @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
