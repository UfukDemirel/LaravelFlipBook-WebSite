@extends('Backend.app')
@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3"></div><div class="col-lg-7 col-xlg-9 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="form-horizontal form-material" method="post" action="{{route('bookinsertpost')}}" >
                                @csrf
                                <div class="form-group mb-4">
                                    <label class="col-sm-12">Category Name</label>
                                    <div class="col-sm-12 border-bottom">
                                        <select class="form-select shadow-none p-0 border-0 form-control-line" name="category_id">
                                            <option value="1">Aksiyon</option>
                                            <option value="2">Bilim Kurgu</option>
                                            <option value="3">Macera</option>
                                            <option value="4">Gizem</option>
                                            <option value="5">Fantastik</option>
                                            <option value="6">Psikoloji</option>
                                            <option value="7">Roman</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Book Slug</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" name="book_slug" value="{{old('book_slug')}}"
                                               class="form-control p-0 border-0"> </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Book Comment</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" name="book_comment" value="{{old('book_comment')}}"
                                               class="form-control p-0 border-0"> </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Book Name</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" name="book_name" value="{{old('book_name')}}"
                                               class="form-control p-0 border-0"> </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Book Writer</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" name="book_writer" value="{{old('book_writer')}}"
                                               class="form-control p-0 border-0"> </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="example-email" class="col-md-12 p-0">Book Number</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" name="book_number" value="{{old('book_number')}}"
                                               class="form-control p-0 border-0"
                                               id="example-email">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Book Dimensions</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" name="book_dimensions" value="{{old('book_dimensions')}}"
                                               class="form-control p-0 border-0">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Book Publisher</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" name="book_publisher" value="{{old('book_publisher')}}"
                                               class="form-control p-0 border-0">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Book Paste</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" name="book_paste" value="{{old('book_paste')}}"
                                               class="form-control p-0 border-0">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Book Print</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" name="book_print" value="{{old('book_print')}}"
                                               class="form-control p-0 border-0">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Book İmage</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" name="book_image" value="{{old('book_image')}}"
                                               class="form-control p-0 border-0">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Book Language</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" name="book_language" value="{{old('book_language')}}"
                                               class="form-control p-0 border-0">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Book Price</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" name="book_price" value="{{old('book_price')}}"
                                               class="form-control p-0 border-0">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Book Stock</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" name="book_stock" value="{{old('book_stock')}}"
                                               class="form-control p-0 border-0">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Book Emoji</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" name="book_emoji" value="{{old('book_emoji')}}"
                                               class="form-control p-0 border-0">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <div class="col-sm-12">
                                        <div align="right"><button type="submit" class="btn btn-dark">Save</button></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
