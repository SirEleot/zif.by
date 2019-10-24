@extends('layouts.app')

@section('content')
  {{-- <link rel="stylesheet" href="{{ asset('css/breaking.css') }}"> --}}
  @include('breaking.header', $sity_arr)
  @include('breaking.about', $sity_arr)
  {{-- @include('breaking.services') --}}
  @include('breaking.posts', $sity_arr)
  @include('breaking.contacts', $sity_arr)

@endsection