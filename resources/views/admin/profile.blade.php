@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
          <strong>Name</strong>
        </div>
        <div class="col-md-8">
          {{$user->name}}
        </div>
        <div class="col-md-4">
          <strong>Email</strong>
        </div>
        <div class="col-md-8">
          {{$user->email}}
        </div>

        <div class="col-md-4">
          <strong>api token</strong>
        </div>
        <div class="col-md-8">
          @if ($user->api_token)
            <p>{{$user->api_toke}}</p>
          @else
            <a href="{{route('admin.generate-token')}}">Genera</a>
          @endif
        </div>
    </div>
</div>
@endsection
