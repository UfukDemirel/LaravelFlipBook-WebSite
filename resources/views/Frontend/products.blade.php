@extends('Frontend.app')
@section('content')
    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filters">
                        <ul>
                            <li class="active" data-filter="*">All Products</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="filters-content">
                        <div class="row grid">
                            @foreach($book as $key)
                            <div class="col-lg-4 col-md-4 all des">
                                <div class="product-item">
                                    <a href="#"><img src="{{$key->book_image}}" height="400" alt=""></a>
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
            </div>
        </div>
    </div>
@endsection
