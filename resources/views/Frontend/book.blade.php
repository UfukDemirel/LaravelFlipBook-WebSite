@extends('Frontend.app')
@section('content')

    <div class="best-features">
        <div class="container">
            <div class="row">
                @foreach($bookslug as $key)
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>{{$key->book_name}}</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-content">
                        <h4>Bu Kitabın Konusu Nedir?</h4>
                        <p>{{$key->book_comment}}</p>
                        <ul class="featured-list">
                            <li><a><b>Yazarı:</b></a> {{$key->book_writer}}</li>
                            <li><a><b>Sayfa Sayısı:</b></a> {{$key->book_number}}</a></li>
                            <li><a><b>Boyutları:</b></a> {{$key->book_dimensions}}</a></li>
                            <li><a><b>Çevirmen:</b></a> {{$key->book_publisher}}</a></li>
                            <li><a><b>Kapak Türü:</b></a> {{$key->book_paste}}</a></li>
                            <li><a><b>Yayım Tarihi:</b></a> {{$key->book_print}}</a></li>
                            <li><a><b>Dil:</b></a> {{$key->book_language}}</a></li>
                        </ul>
                </div>
                    <form action="{{route('addpost',['id'=>$key->id])}}" method="post">
                        @csrf
                        <div class="row mt-4">
                            <div class="input-group col-md-6 d-flex mb-3">
                                <input type="number" name="quantity" class="quantity form-control input-number" value="1" min="1" max="{{$key->book_stock}}">
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-12">
                                <p style="color: #000;">{{$key->book_stock}} amount of items in stock</p>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-dark" value="Buy Now">
                        <input type="hidden" name="book_id" value="{{$key->id}}">

                    </form>
            </div>
                <div class="col-md-6">
                    <div class="right-image">
                        <img src="{{$key->book_image}}" height="600" alt="">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
