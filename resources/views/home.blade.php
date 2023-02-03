@extends('layouts.app')
@section('content')

@php
    $order = DB::table('orders')->where('user_id',Auth::id())->orderBy('id','DESC')->limit(10)->get();
@endphp

    <div class="contact_form">
        <div class="container"> 
        <div class="row">
            <div class="col-8 card">
                <table class="table table-response">
                    <thead>
                        <tr>
                            <th scope="col">Payment Type </th>
                            <th scope="col">Payment Id </th>
                            <th scope="col">Amount </th>
                            <th scope="col">Date </th>
                            <th scope="col">Status</th>
                            <th scope="col">Status Code </th>
                            <th scope="col">Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order as $row)
                            
                        <tr>
                            <td scope="col">{{ $row->payment_type }} </td>
                            <td scope="col">{{ $row->payment_id }} </td>
                            <td scope="col">{{ $row->total }} $</td>
                            <td scope="col">{{ $row->date }} </td>
                            <td scope="col">
                                @if ($row->status == 0)
                                <span class="badge badge-warning">Pending</span>
                                @elseif($row->status == 1)
                                <span class="badge badge-info">Accepted</span>
                                @elseif($row->status == 2)
                                <span class="badge badge-warning">Progress</span>
                                @elseif($row->status == 3)
                                <span class="badge badge-success">Delivered</span>
                                @else
                                <span class="badge badge-danger">Canceled</span>
                                @endif 
                            </td>
                            <td scope="col">{{ $row->status_code }} </td>
                            <td scope="col">
                                <a href="" class="btn btn-sm btn-info">View</a>
                            </td>

                        </tr>

                        @endforeach
                    
                    </tbody>
                </table>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="{{ asset('public/frontend/images/_W2A9244.jpg') }}" class="card-img-top"" alt="" style="height: 90px; width: 90px; margin-left: 34%;">
                    <div class="card-body">
                        <h5 class = "card-title text-center"> {{ Auth::user()->name }} </h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"> <a href="{{ route('password.change') }}">Modifiez votre mot de passe</a> </li>
                        <li class="list-group-item">Modifiez le profil</li>
                        <li class="list-group-item"> <a href="{{ route('success.orderlist') }}">Retournez la commande</a></li>
                    </ul>

                    <div class="card-body">
                        <a href="{{ route('user.logout') }}" class="btn btn-danger btn-sm btn-block">Se déconnecter</a>
                    </div>

                </div>
            </div>
            </div>
        </div>
    </div>
@endsection