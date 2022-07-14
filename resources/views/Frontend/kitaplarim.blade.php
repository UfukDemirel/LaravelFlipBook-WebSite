@extends('Frontend.app')
@section('content')
<div class="send-message">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Books</h2>
                </div>
            </div>
            <div class="col-md-8">
                <div class="contact-form">
                    @foreach($kitap as $key)
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <br>
                                <h5>{{$key->book_name}}</h5>
                                <a href="{{$key->book_flipbook}}">{{$key->book_flipbook}}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4">
                @foreach($sharing as $key)
                <ul class="accordion">
                    <li>
                        <a>{{$key->sharing_title}}</a>
                        <div class="content">
                            <p>{{$key->sharing_content}}</p>
                        </div>
                    </li>
                </ul>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
