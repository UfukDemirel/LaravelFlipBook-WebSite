@extends('Backend.app')
@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-lg-8 col-xlg-9 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="form-horizontal form-material" action="{{route('profilepost')}}" method="post">
                                @csrf
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Name</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" name="name" value="{{Auth::user()->name}}"
                                               class="form-control p-0 border-0"> </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Surname</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" name="surname" value="{{Auth::user()->surname}}"
                                               class="form-control p-0 border-0"> </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="example-email" class="col-md-12 p-0">E-Mail</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="email" name="email" value="{{Auth::user()->email}}"
                                               class="form-control p-0 border-0"
                                               id="example-email">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Phone No</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" name="phone" value="{{Auth::user()->phone}}"
                                               class="form-control p-0 border-0">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <div class="col-sm-12">
                                        <div align="right"><button type="submit" class="btn btn-dark">Update</button></div>
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
