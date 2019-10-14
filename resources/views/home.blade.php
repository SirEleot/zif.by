@extends('layouts.app')

@section('content')
   {{-- <link rel="stylesheet" href="{{ asset('css/home.css') }}"> --}}
   @include('home.header')
   @include('home.about')
   @include('home.services')
   @include('home.posts')
   @include('home.contacts')
   
@endsection