@extends('Backend.app')
@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="white-box">
                        <div class="d-md-flex mb-3">
                            <h3 class="box-title mb-0">Üye Kullanıcılar</h3>
                        </div>
                        <div class="table-responsive">
                            <table class="table no-wrap">
                                <thead>
                                <tr>
                                    <th class="border-top-0">İD</th>
                                    <th class="border-top-0">Name</th>
                                    <th class="border-top-0">Surname</th>
                                    <th class="border-top-0">E-Mail</th>
                                    <th class="border-top-0">Date</th>
                                    <th class="border-top-0">Active</th>
                                    <th class="border-top-0">Transactions</th>
                                </tr>
                                </thead>
                                @foreach($user as $key)
                                <tbody>
                                <tr>
                                    <td>{{$key->id}}</td>
                                    <td class="txt-oflo">{{$key->name}}</td>
                                    <td>{{$key->surname}}</td>
                                    <td class="txt-oflo">{{$key->email}}</td>
                                    <td><span class="text-success">{{$key->date}}</span></td>
                                    <td>
                                        @if($key->is_active == '0')
                                            <label class="badge rounded bg-danger">Pasif</label>
                                        @endif
                                        @if($key->is_active == '1')
                                            <label class="badge bg-success rounded">Aktif</label>
                                        @endif
                                    </td>
                                    <td><a href="{{route('useredit',['id'=>$key->id])}}"><button type="submit" class="btn btn-dark">Edit</button></a>
                                        <a href="{{route('destroy',['id' => $key->id])}}"><button type="submit" class="btn btn-danger">Delete</button></a></td>
                                </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
