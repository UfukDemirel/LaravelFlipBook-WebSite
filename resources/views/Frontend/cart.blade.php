@extends('Frontend.app')
@section('content')
    <section class="ftco-section">
        @if(session('message'))
            <div>{{session('message')}}</div>
        @endif
            <div class="container">
            <div class="row">
                <div class="table-wrap">
                    <table class="table">
                        <thead class="thead-primary">
                        <tr>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th></th>
                            <th>total</th>
                            <th>Transactıons</th>
                        </tr>
                        </thead>
                        @foreach($book as $key)
                            <tbody>
                            <tr class="alert" role="alert">
                                <td>
                                    <label class="checkbox-wrap checkbox-primary">
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                                <td>
                                    <div class="img" style="background-image: url({{$key->book_image}});"></div>
                                </td>
                                <td>
                                    <div class="email">
                                        <a href="{{route('book.slug',['slug'=>$key->book_slug])}}">{{$key->book_name}}</a>
                                    </div>
                                </td>
                                <td>{{$key->book_price}}</td>
                                <td class="quantity">
                                    <form action="{{route('post')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$key->id}}">
                                        <input type="number" name="quantity" class="quantity form-control input-number" value="{{$key->quantity}}" min="1" max="{{$key->book_stock}}">
                                <td><input type="submit" class="btn btn-light" value="⤷"></td>
                                </td>
                                <td>{{$key->book_price*$key->quantity}}</td>
                                </form>
                                <td>
                                    <a href="{{route('delete',['id'=>$key->id])}}">
                                        <button class="btn btn-danger">X</button>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                            @php $top = $top+$key->book_price*$key->quantity @endphp
                        @endforeach
                    </table>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
                    <div class="cart-total mb-3">
                        <h3>Cart Totals</h3>
                        <hr>
                        <p class="d-flex total-price">
                            <span>Total</span>
                            {{$top}} $
                        </p>
                    </div>
                    <form action="{{route('cartdetails')}}" method="post">
                        @csrf
                        <input type="hidden" name="toplam" value="{{$top}}">
                        <button type="submit" class="btn btn-primary py-3 px-4">Proceed to Checkout</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
