@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">店舗情報編集</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    店舗情報編集
                    <form method="POST" action="{{ route('contact.update', ['id' => $contact->id]) }}">
                    @csrf
                    店名:
                    <input type="text" name="shop_name" value="{{ $contact->shop_name }}">
                    <br>
                    住所:
                    <input type="text" name="address" value="{{ $contact->address }}">
                    <br>
                    ジャンル:
                    <input type="text" name="category" value="{{ $contact->category }}">
                    <br>
                    サイト:
                    <input type="url" name="shop_url" value="{{ $contact->shop_url }}">
                    <br>
                    お問い合わせ内容:
                    <textarea name="contact">{{ $contact->contact }}</textarea>
                    <br>

                    <input class="btn btn-info" type="submit" value="更新する">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
