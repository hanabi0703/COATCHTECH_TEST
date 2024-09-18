@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/top.css') }}">
@endsection

@section('button')
<form class="form" action="/logout" method="post">
    @csrf
    <button class="header-nav__button">logout</button>
</form>
@endsection

@section('content')
<div class="attendance__alert"></div>

<div class="attendance__content">
  <div class="attendance__panel">
    TOPページ
  </div>
</div>
@endsection