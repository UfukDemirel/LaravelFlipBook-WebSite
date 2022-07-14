@extends('Frontend.app')
@section('content')
<div class="send-message">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Update</h2>
                </div>
            </div>
            <div class="col-md-8">
                <div class="contact-form">
                    @foreach($user as $key)
                    <form id="contact" action="{{route('updatepost')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <fieldset>
                                    <label class="col-sm-3 col-form-label">Ad</label>
                                    <input name="name" type="text" class="form-control" value="{{$key->name}}" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <fieldset>
                                    <label class="col-sm-3 col-form-label">Soyad</label>
                                    <input name="surname" type="text" class="form-control" value="{{$key->surname}}" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <fieldset>
                                    <label class="col-sm-3 col-form-label">E-Mail</label>
                                    <input name="email" type="text" class="form-control" value="{{$key->email}}" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <label class="col-sm-3 col-form-label">Telefon</label>
                                    <input name="phone" rows="6" class="form-control" value="{{$key->phone}}" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="filled-button">Kaydet</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
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
