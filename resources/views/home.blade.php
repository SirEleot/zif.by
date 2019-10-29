@extends('layouts.app',['phones'=>Config::get('common.phones')])

@section('content')
   {{-- <link rel="stylesheet" href="{{ asset('css/home.css') }}"> --}}
   @include('home.header')
   @include('home.about')
   @include('home.services')
   @include('home.posts',['posts'=>$posts])
   @include('home.contacts')
   
@endsection