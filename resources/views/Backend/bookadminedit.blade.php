@extends('Backend.app')
@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-lg-8 col-xlg-9 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            @foreach($bookedit as $key)
                            <form class="form-horizontal form-material" action="{{route('bookadmineditpost',['id'=>$key->id])}}" method="post">
                                @csrf
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Book Slug</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" name="book_slug" value="{{$key->book_slug}}"
                                               class="form-control p-0 border-0"> </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Book Comment</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="book_comment" rows="3">{{$key->book_comment}}</textarea>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Book Name</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" name="book_name" value="{{$key->book_name}}"
                                               class="form-control p-0 border-0"> </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Book Writer</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" name="book_writer" value="{{$key->book_writer}}"
                                               class="form-control p-0 border-0"> </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="example-email" class="col-md-12 p-0">Book Number</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" name="book_number" value="{{$key->book_number}}"
                                               class="form-control p-0 border-0"
                                               id="example-email">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Book Dimensions</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" name="book_dimensions" value="{{$key->book_dimensions}}"
                                               class="form-control p-0 border-0">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Book Publisher</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" name="book_publisher" value="{{$key->book_publisher}}"
                                               class="form-control p-0 border-0">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Book Paste</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" name="book_paste" value="{{$key->book_paste}}"
                                               class="form-control p-0 border-0">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Book Dimensions</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" name="book_dimensions" value="{{$key->book_dimensions}}"
                                               class="form-control p-0 border-0">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Book Print</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" name="book_print" value="{{$key->book_print}}"
                                               class="form-control p-0 border-0">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Book Dimensions</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" name="book_dimensions" value="{{$key->book_dimensions}}"
                                               class="form-control p-0 border-0">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Book İmage</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" name="book_image" value="{{$key->book_image}}"
                                               class="form-control p-0 border-0">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Book Language</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" name="book_language" value="{{$key->book_language}}"
                                               class="form-control p-0 border-0">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Book Price</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" name="book_price" value="{{$key->book_price}}"
                                               class="form-control p-0 border-0">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Book İmage</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" name="book_image" value="{{$key->book_image}}"
                                               class="form-control p-0 border-0">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Book Stock</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" name="book_stock" value="{{$key->book_stock}}"
                                               class="form-control p-0 border-0">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Book Emoji</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" name="book_emoji" value="{{$key->book_emoji}}"
                                               class="form-control p-0 border-0">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Book Flip Book</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" name="book_flipbook" value="{{$key->book_flipbook}}"
                                               class="form-control p-0 border-0">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <div class="col-sm-12">
                                        <div align="right"><button type="submit" class="btn btn-dark">Update</button></div>
                                    </div>
                                </div>
                            </form>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
