@extends('Frontend.app')
@section('content')
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 ftco-animate">
                <form action="{{route('order_end')}}" method="post" class="billing-form">
                    @csrf
                    <h3 class="mb-4 billing-heading">People Details</h3>
                    <div class="row align-items-end">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="firstname">Firt Name</label>
                                <input type="text" class="form-control" name="name" value="{{\Illuminate\Support\Facades\Auth::user()->name}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lastname">Last Name</label>
                                <input type="text" class="form-control" name="surname" value="{{\Illuminate\Support\Facades\Auth::user()->surname}}">
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="country">Country</label>
                                <input type="text" class="form-control" name="country" required value="{{\Illuminate\Support\Facades\Auth::user()->country}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="towncity">City</label>
                                <input type="text" class="form-control" name="city" required value="{{\Illuminate\Support\Facades\Auth::user()->city}}">
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="streetaddress">Street Address</label>
                                <input class="form-control" type="text" name="address" required value="{{\Illuminate\Support\Facades\Auth::user()->address}}">
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" name="phone" value="{{\Illuminate\Support\Facades\Auth::user()->phone}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="emailaddress">Email Address</label>
                                <input type="email" class="form-control" name="email" value="{{\Illuminate\Support\Facades\Auth::user()->email}}">
                            </div>
                        </div>
                    </div>

                <h4 class="mb-3">Payment</h4>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="cc-number">Credit card number</label>
                        <input type="text" class="form-control" placeholder="____ ____ ____ ____" >
                        <div class="invalid-feedback">
                            Credit card number is required
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="cc-expiration">Expiration</label>
                        <input type="text" class="form-control" placeholder="00/00" >
                        <div class="invalid-feedback">
                            Expiration date required
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="cc-cvv">CVV</label>
                        <input type="text" class="form-control" placeholder="***" >
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        TOTAL: {{$toplam}} $
                    </div>
                </div>
               <input type="submit" class="btn btn-primary py-3 px-4" value="Place an order">
                </form>
            </div>
            </div>
        </div>
            </div>
        </div>
    </div>
</section>
@endsection
