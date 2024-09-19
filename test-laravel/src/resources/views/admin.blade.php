@extends('layouts.default')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection
@section('js')
    <script src="{{ asset('/js/admin.js') }}"></script>

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
            <select class="search-form__item-select" name="gender">
            <option value="">性別</option>
            <option value="">全て</option>
            <option value="1">男性</option>
            <option value="2">女性</option>
            <option value="3">その他</option>
            </select>
            <select class="search-form__item-select" name="category_id">
            <option value="">お問合せの種類</option>
            @foreach ($categories as $category)
            <option value="{{ $category['id'] }}">{{ $category['content'] }}</option>
            @endforeach
            </select>
            <input class="search-form__item-input" type="date" name="updated_at" value="{{ old('updated_at') }}">
        </div>
        <div class="search-form__button">
            <button class="search-form__button-submit" type="submit">検索</button>
            <a class="search-form__button-reset" href="/admin">リセット</a>
        </div>
    </form>
    <div class="pagination">
        {{ $contacts->links() }}
    </div>
    <div class="category-table">
        <table class="category-table__inner">
        <tr class="category-table__row">
            <th class="category-table__header">名</th>
            <th class="category-table__header">姓</th>
            <th class="category-table__header">性別</th>
            <th class="category-table__header">メールアドレス</th>
            <th class="category-table__header">お問合せの種類</th>
            <th class="category-table__header"></th>
        </tr>
        @foreach ($contacts as $contact)
        <tr class="category-table__row">
            <td class="category-table__item">{{ $contact['first_name'] }}</td>
            <td class="category-table__item">{{ $contact['last_name'] }}</td>
            <td class="category-table__item">
                <?php
                    if ($contact['gender'] == '1') {
                    echo '男性';
                    } else if ($contact['gender'] == '2') {
                    echo '女性';
                    } else if ($contact['gender'] == '3') {
                    echo 'その他';
                    }
                    ?></td>
            <td class="category-table__item">{{ $contact['email'] }}</td>
            <td class="category-table__item">
                <?php
                    if ($contact['category_id'] == '1') {
                    echo '商品のお届けについて';
                    } else if ($contact['category_id'] == '2') {
                    echo '商品の交換について';
                    } else if ($contact['category_id'] == '3') {
                    echo '商品トラブル';
                    } else if ($contact['category_id'] == '4') {
                    echo 'ショップへのお問い合わせ';
                    } else if ($contact['category_id'] == '5') {
                    echo 'その他';
                    }
                    ?></td>
                    <td>
            <!-- <form class="detail-form">
                <div class="detail-form__item">
                </div>
                <div class="detail-form__button">
                <button class="detail-form__button-submit" type="submit">詳細</button>
            </form> -->
                <button class="form__button js-modal-open">詳細</button>
                </div>
            <!-- モーダル本体 -->
            <div class="modal js-modal">
            <div class="modal-container">
                <!-- モーダルを閉じるボタン -->
                <div class="modal-close js-modal-close">×</div>
                <!-- モーダル内部のコンテンツ -->
                <div class="modal-content">
                    <div class="detail_group">
                        <div class="detail_label">
                            <span>お名前</span>
                        </div>
                        <div class="detail_content">{{ $contact['first_name'] }}</div>
                        <div class="detail_content">{{ $contact['last_name'] }}</div>
                    </div>
                    <div class="detail_group">
                        <div class="detail_label">
                            <span>性別</span>
                        </div>
                        <div class="detail_content">{{ $contact['gender'] }}</div>
                    </div>
                    <div class="detail_group">
                        <div class="detail_label">
                            <span>メールアドレス</span>
                        </div>
                        <div class="detail_content">{{ $contact['email'] }}</div>
                    </div>
                    <div class="detail_group">
                        <div class="detail_label">
                            <span>電話番号</span>
                        </div>
                        <div class="detail_content">{{ $contact['tell'] }}</div>
                    </div>
                    <div class="detail_group">
                        <div class="detail_label">
                            <span>住所</span>
                        </div>
                        <div class="detail_content">{{ $contact['address'] }}</div>
                    </div>
                    <div class="detail_group">
                        <div class="detail_label">
                            <span>建物名</span>
                        </div>
                        <div class="detail_content">{{ $contact['building'] }}</div>
                    </div>
                    <div class="detail_group">
                        <div class="detail_label">
                            <span>お問合せの種類</span>
                        </div>
                        <div class="detail_content">{{ $contact['category_id'] }}</div>
                    </div>
                    <div class="detail_group">
                        <div class="detail_label">
                            <span>お問合せ内容</span>
                        </div>
                        <div class="detail_content">{{ $contact['detail'] }}</div>
                    </div>
                </div>
            </div>
            </div>
            </td>
        </tr>
        @endforeach
        </table>
    </div>
</div>
@endsection