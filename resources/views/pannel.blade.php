@extends('layouts.master')
@section ('content')
@include('admin.header')
<a href="{{route('pannel-articles')}}">articles</a>
<a href="{{route('pannel-categories')}}">categories</a>
<a href="{{route('pannel-menu')}}">menu</a>
@endsection