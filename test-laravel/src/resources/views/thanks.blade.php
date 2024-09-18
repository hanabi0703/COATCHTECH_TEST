@extends('layouts.default')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

</style>
@section('title', 'FashonablyLate')

@section('content')
<div class="thanks__content">
    <div class="thanks__heading">
    <h2>お問い合わせありがとうございました</h2>
    </div>
    <a href="{{url('/')}}">HOME</a>
</div>
@endsection