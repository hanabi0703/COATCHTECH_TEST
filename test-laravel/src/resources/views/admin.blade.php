@extends('layouts.default')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('title', 'FashionablyLate')

@section('content')
<div class="confirm__content">
    <div class="confirm__heading">
        <h2>Admin</h2>
    </div>
    <form class="form" action="/admin/search" method="get">
    @csrf
        <div class="search-form__item">
            <input class="search-form__item-input" type="text" name="keyword" value="{{ old('keyword') }}">
            <select class="search-form__item-select" name="category_id">
            @foreach ($categories as $category)
            <option value="{{ $category['id'] }}">{{ $category['content'] }}</option>
            @endforeach
            </select>
        </div>
        <div class="search-form__button">
            <button class="search-form__button-submit" type="submit">検索</button>
        </div>
    </form>
    <div class="category-table">
        <table class="category-table__inner">
        <tr class="category-table__row">
            <th class="category-table__header">category</th>
        </tr>
        @foreach ($contacts as $contact)
        <tr class="category-table__row">
            <td class="category-table__item">
            <form class="update-form">
                <div class="update-form__item">
                    <input class="update-form__item-input" type="text" value="{{ $contact['first_name'] }}">

                </div>
                <div class="update-form__button">
                <button class="update-form__button-submit" type="submit">詳細</button>
                </div>
            </form>
            </td>
        </tr>
        @endforeach
        </table>
    </div>
</div>
@endsection