@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">店舗新規登録</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form method="POST" action="{{route('contact.store')}}">
                    @csrf
                    店名:
                    <input type="text" name="shop_name">
                    <br>
                    住所:
                    <input type="text" name="address">
                    <br>
                    ジャンル:
                    <input type="text" name="category">
                    <br>
                    サイト:
                    <input type="url" name="shop_url">
                    <br>
                    レビュー:
                    <textarea name="contact"></textarea>
                    <br>

                    <input type="checkbox" name="caution" value="1">注意事項に同意する
                    <br>

                    <input class="btn btn-info" type="submit" value="登録する">
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
