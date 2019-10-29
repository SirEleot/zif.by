@extends('layouts.app', ['phones'=>(array($phone))])

@section('content')
  {{-- <link rel="stylesheet" href="{{ asset('css/breaking.css') }}"> --}}
  @include('breaking.header')
  @include('breaking.about')
  {{-- @include('breaking.services') --}}
  @include('breaking.posts')
  @include('breaking.contacts')

@endsection