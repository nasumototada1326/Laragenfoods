@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">店舗詳細</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                
                    <div class="d-flex flex-column bd-highlight mb-3">
                    <div class="p-2 bd-highlight">{{ $contact->shop_name }}</div>
                    <div class="p-2 bd-highlight">{{ $contact->address }}</div>
                    <div class="p-2 bd-highlight">{{ $contact->category }}</div>
                    <div class="p-2 bd-highlight">{{ $contact->shop_url }}</div>
                    <div class="p-2 bd-highlight">{{ $contact->contact }}</div>
                    </div>
                    <div class="d-flex justify-content-start">
                    <form method="GET" action="{{route('contact.edit', ['id' => $contact->id ])}}">
                    @csrf
                    <input class="btn btn-info" type="submit" value="編集する"><br>
                    </form>
                    <form method="POST" action="{{route('contact.destroy', ['id' => $contact->id ])}}" id="delete_{{ $contact->id }}">
                    @csrf                    
                    <a href="#" class="btn btn-danger" data-id="{{ $contact->id }}" onclick="deletePost(this);">削除する</a>
                    </form>
                    </form>
                    </div>
                    <br>
                    <iframe src="https://maps.google.co.jp/maps?output=embed&q={{ $contact->address }}"></iframe>

                </div>
            </div>
        </div>
    </div>
</div>

<script>

    function deletePost(e) {
        'use strict';
        if (confirm('本当に削除していいですか？')) {
            document.getElementById('delete_' + e.dataset.id).submit();

        }
    }
</script>

@endsection
