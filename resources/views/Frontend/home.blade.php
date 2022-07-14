@extends('Frontend.app')
@section('content')
    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>En Son Ürünler</h2>
                    </div>
                </div>

                @foreach($book as $key)
                <div class="col-md-4">
                    <div class="product-item">
                        <img src="{{$key->book_image}}" height="400" alt="">
                        <div class="down-content">
                            <a href="{{route('book.slug', ['slug' => $key->book_slug])}}"><h4>{{$key->book_name}}</h4></a>
                            <h6>${{$key->book_price}}</h6>
                            <p>{{$key->book_writer}}</p>
                            <a href="{{route('book.slug', ['slug' => $key->book_slug])}}"><span>Detaylar İçin → </span></a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
