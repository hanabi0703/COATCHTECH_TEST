@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('title','FashonablyLate')

@section('content')
<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>Contact</h2>
    </div>
    <form action="/contacts/confirm" method="post" class="form">
        @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--flex form__input--text">
              <input type="text" name="first_name" placeholder="例：山田" value="{{ old('first_name') }}" />
              <input type="text" name="last_name" placeholder="例：太郎" value="{{ old('last_name') }}" />
            </div>
            <div class="form__error">
                @error('first_name')
                    {{ $message }}
                @enderror
                @error('last_name')
                    {{ $message }}
                @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">性別</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--radio">
                <div class="form__input--radio--content">
                    <input type="radio" name="gender" id="male" value="1"/>
                    <label for="male">男性</label>
                </div>
                <div class="form__input--radio--content">
                    <input type="radio" name="gender" id="female" value="2"/>
                    <label for="female">女性</label>
                </div>
                <div class="form__input--radio--content">
                    <input type="radio" name="gender" value="3"/>
                    <label for="other">その他</label>
                </div>
            </div>
            <div class="form__error">
                @error('gender')
                    {{ $message }}
                @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}" />
            </div>
            <div class="form__error">
            @error('email')
                {{ $message }}
            @enderror
        </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title ">
            <span class="form__label--item">電話番号</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text form__input--flex">
              <input type="tel" name="tell1" placeholder="090" value="{{ old('tell1') }}" />
              <input type="tel" name="tell2" placeholder="1234" value="{{ old('tell2') }}" />
              <input type="tel" name="tell3" placeholder="5678" value="{{ old('tell3') }}" />
            </div>
            <div class="form__error">
            @if ($errors->first('tell1') == '1' || $errors->first('tell2') == '1' || $errors->first('tell3') == '1' )
            <span>電話番号を入力してください</span>
            @endif
            @if ($errors->first('tell1') == '2' || $errors->first('tell2') == '2' || $errors->first('tell3') == '2' )
            <span>電話番号は5桁までの数字で入力してください</span>
            @endif
        </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">住所</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="address" placeholder="例：東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
            </div>
            <div class="form__error">
            @error('address')
                {{ $message }}
            @enderror
        </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物名</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="building" placeholder="例：千駄ヶ谷マンション101" value="{{ old('building') }}" />
            </div>
            <div class="form__error">
        </div>
          </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
            <span class="form__label--item">お問合せの種類</span>
            <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text form__input--arrow">
                    <select class="form__input--text" name="category_id" value="{{ old('category_id') }}" >
                        <option value="">選択してください</option>
                        <option value="1">商品のお届けについて</option>
                        <option value="2">商品の交換について</option>
                        <option value="3">商品トラブル</option>
                        <option value="4">ショップへのお問い合わせ</option>
                        <option value="5">その他</option>
                    </select>
                </div>
                <div class="form__error">
                @error('category_id')
                    {{ $message }}
                @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
            <span class="form__label--item">お問い合わせ内容</span>
            <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--textarea">
                    <textarea name="detail" placeholder="お問合せ内容をご記載ください" value="{{ old('detail') }}" ></textarea>
                </div>
            </div>
        </div>
        <div class="form__error">
            @error('detail')
                {{ $message }}
            @enderror
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">確認画面</button>
        </div>
    </form>
</div>
@endsection