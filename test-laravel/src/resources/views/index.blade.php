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
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--flex form__input--text">
              <input type="text" name="first_name" placeholder="例：山田" />
              <input type="text" name="last_name" placeholder="例：太郎" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
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
                    <input type="radio" name="gender" id="male"/>
                    <label for="male">男性</label>
                </div>
                <div class="form__input--radio--content">
                    <input type="radio" name="gender" id="female"/>
                    <label for="female">女性</label>
                </div>
                <div class="form__input--radio--content">
                    <input type="radio" name="gender"/>
                    <label for="huey">その他</label>
                </div>
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
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
              <input type="email" name="email" placeholder="test@example.com" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
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
              <input type="tel" name="tel" placeholder="090" />
              <input type="tel" name="tel" placeholder="1234" />
              <input type="tel" name="tel" placeholder="5678" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
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
              <input type="text" name="address" placeholder="例：東京都渋谷区千駄ヶ谷1-2-3" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物名</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="building" placeholder="例：千駄ヶ谷マンション101" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
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
                    <select name="form__input--text ">
                        <option>選択してください</option>
                        <option>b</option>
                        <option>c</option>
                    </select>
                </div>
                <div class="form__error">
                <!--バリデーション機能を実装したら記述します。-->
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
                    <textarea name="content" placeholder="お問合せ内容をご記載ください"></textarea>
                </div>
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">確認画面</button>
        </div>
</div>
@endsection