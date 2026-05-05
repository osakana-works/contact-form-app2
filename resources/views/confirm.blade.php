@extends('layouts.app')

@section('title', 'Contact Form Confirmation')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('content')
  <main>
    <div class="confirm__content">
      <div class="confirm__heading">
        <h2>お問い合わせ内容確認</h2>
      </div>
      <form class="form" method="POST" action="/contacts">
        @csrf
        <div class="confirm-table">
          <table class="confirm-table__inner">
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お名前</th>
              <td class="confirm-table__text">
                <input type="hidden" name="name" value="{{$contact['name']}}" />
                <p>{{$contact['name']}}</p>
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">メールアドレス</th>
              <td class="confirm-table__text">
                <input type="hidden" name="email" value="{{$contact['email']}}" />
                <p>{{$contact['email']}}</p>
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">電話番号</th>
              <td class="confirm-table__text">
                <input type="hidden" name="tel" value="{{$contact['tel']}}" />
                <p>{{$contact['tel']}}</p>
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お問い合わせ内容</th>
              <td class="confirm-table__text">
                <input type="hidden" name="content" value="{{$contact['content']}}" />
                <p>{{$contact['content']}}</p>
              </td>
            </tr>
          </table>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">送信</button>
        </div>
      </form>
    </div>
  </main>
@endsection