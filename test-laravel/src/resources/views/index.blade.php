@extends('layouts.default')
<style>
  th {
    background-color: #289ADC;
    color: white;
    padding: 5px 40px;
  }
  tr:nth-child(odd) td{
    background-color: #FFFFFF;
  }
  td {
    padding: 25px 40px;
    background-color: #EEEEEE;
    text-align: center;
  }
  button {
    padding: 10px 20px;
    background-color: #289ADC;
    border: none;
    color: white;
  }
</style>
@section('title', 'FashonablyLate')

@section('content')
<form action="/" method="post">
  <table>
  @csrf
    <tr>
      <th>苗字</th>
      <td><input type="text" name="first_name"></td>
    </tr>
    <tr>
      <th>名前</th>
      <td><input type="text" name="last_name"></td>
    </tr>
    <tr>
      <th>性別</th>
      <td><input type="text" name="gender"></td>
    </tr>
    <tr>
      <th>メールアドレス</th>
      <td><input type="text" name="email"></td>
    </tr>
    <tr>
      <th>電話番号</th>
      <td><input type="text" name="tell"></td>
    </tr>
    <tr>
      <th>住所</th>
      <td><input type="text" name="address"></td>
    </tr>
    <tr>
      <th>建物名</th>
      <td><input type="text" name="building"></td>
    </tr>
    <tr>
      <th>お問合せの種類</th>
      <td><input type="text" name="category_id"></td>
    </tr>
    <tr>
      <th>お問合せ内容</th>
      <td><input type="text" name="detail"></td>
    </tr>
    <tr>
      <th></th>
      <td><button>確認画面</button></td>
    </tr>
  </table>
</form>
@endsection