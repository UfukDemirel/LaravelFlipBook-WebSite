@extends('Frontend.app')
@section('content')
    <div class="send-message">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Bizimle İletişime Geçin</h2>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="contact-form">
                        <form action="{{route('contactpost')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="name" value="{{old('name')}}" type="text" class="form-control" placeholder="Name" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="surname" value="{{old('surname')}}" type="text" class="form-control" placeholder="Surname" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="email" value="{{old('email')}}" type="text" class="form-control" placeholder="E-Mail Address" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="subject" value="{{old('subject')}}" type="text" class="form-control" placeholder="Subject" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" class="form-control" placeholder="Your Message" required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" class="filled-button">Send Message</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
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
