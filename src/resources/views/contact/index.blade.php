@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">店舗一覧</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <form method="GET" action="{{ route('contact.create') }}">
                    <button type="submit" class="btn btn-primary">
                        新規登録
                    </button>
                    </form>

                    <form method="GET" action="{{ route('contact.index') }}" class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" name="search" type="search" placeholder="検索" aria-label="Search">
                        <button class="btn btn-outline-success my-sm-0" type="submit">検索する</button>
                    
                    <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">店名</th>
                            <th scope="col">ジャンル</th>
                            <th scope="col">登録日時</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contacts as $contact)
                        <tr>
                            <th>{{$contact->id}}</th>
                            <td>{{$contact->shop_name }}</td>
                            <td>{{$contact->category}}</td>
                            <td>{{$contact->created_at}}</td>
                            <td><a href="{{ route('contact.show', ['id' => $contact->id]) }}">詳細を見る</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                    {{ $contacts->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
