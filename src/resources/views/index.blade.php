@extends('layouts.app')

@section('content')
<form action="/contacts/confirm" method="post">
    @csrf
    <div class="form_name">
        <p>氏名</p>
        <input type="text" name="name">
    </div>
    <div class="form_email">
        <p>メールアドレス</p>
        <input type="email" name="email">
    </div>
    <div class="form_button">
        <button type="submit">送信する</button>
    </div>
</form>
@endsection