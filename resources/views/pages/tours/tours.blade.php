@extends('layout')

@section('content')
    @isset($arr_tours)
        @include('pages.tours.content_tours')
    @else

        <!-- Background image -->
        <div
            class="bg-image"
            style="
    background-image: url('/img/not_found.png');
    height: 700px;
    width: 700px;
    display: block;
    margin: 100px auto;
  "
        ></div>
        <!-- Background image -->
    @endisset

@endsection()
