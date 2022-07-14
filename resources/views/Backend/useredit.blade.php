@extends('Backend.app')
@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-lg-8 col-xlg-9 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            @foreach($useredit as $key)
                            <form class="form-horizontal form-material" action="{{route('usereditpost',['id'=>$key->id])}}" method="post">
                                @csrf
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Name</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" name="name" value="{{$key->name}}"
                                               class="form-control p-0 border-0"> </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Surname</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" name="surname" value="{{$key->surname}}"
                                               class="form-control p-0 border-0"> </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="example-email" class="col-md-12 p-0">E-Mail</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="email" name="email" value="{{$key->email}}"
                                               class="form-control p-0 border-0"
                                               id="example-email">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Phone No</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" name="phone" value="{{$key->phone}}"
                                               class="form-control p-0 border-0">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-sm-12">Active</label>
                                    <div class="col-sm-12 border-bottom">
                                        <select class="form-select shadow-none p-0 border-0 form-control-line" name="is_active">
                                            <option readonly="" @if($key->is_active==0) {{'selected'}} @endif value="0">Pasif</option>
                                            <option readonly="" @if($key->is_active==1) {{'selected'}} @endif value="1">Aktif</option>
                                        </select>
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

