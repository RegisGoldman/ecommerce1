@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/tracking.css') }}">

<div class="contact_form">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <div class="contact_form_title"> <h4> Order Status & Details </h4> </div> <br>
                <h6>Order ID: {{$track->stripe_order_id}}</h6>
                <article class="card">
                    <div class="card-body row">
                        <div class="col"> <strong>Estimated Delivery time:</strong> <br>29 nov 2021 </div>
                        <div class="col"> <strong>Shipping By:</strong> <br> Kaebor Corp | <i class="fa fa-phone"></i> +2250707070707 </div>
                        <div class="col"> <strong>Status:</strong>
                            <br> @if ($track->status == 0)
                                Order Confirmed
                                @elseif($track->status == 1)
                                Picked by courier
                                @elseif($track->status == 2)
                                On the way
                                @elseif($track->status == 3)
                                Order Delivered
                            @else
                            Order Canceled
                            @endif
                            </div>
                        <div class="col"> <strong>Tracking #:</strong> <br> {{$track->status_code}} </div>
                    </div>
                </article>
                <div class="track">

                    @if ($track->status == 0)
                    <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Order confirmed</span> </div>
                    @elseif($track->status == 1)
                    <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Order confirmed</span> </div>
                    <div class="step active"> <span class="icon"> <i class="fa fa-user"></i> </span> <span class="text"> Picked by courier</span> </div>
                    @elseif($track->status == 2)
                    <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Order confirmed</span> </div>
                    <div class="step active"> <span class="icon"> <i class="fa fa-user"></i> </span> <span class="text"> Picked by courier</span> </div>
                    <div class="step passive"> <span class="icon"> <i class="fa fa-truck"></i> </span> <span class="text"> On the way </span> </div>
                    @elseif($track->status == 3)
                    <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Order confirmed</span> </div>
                    <div class="step active"> <span class="icon"> <i class="fa fa-user"></i> </span> <span class="text"> Picked by courier</span> </div>
                    <div class="step passive"> <span class="icon"> <i class="fa fa-truck"></i> </span> <span class="text"> On the way </span> </div>
                    <div class="step passive"> <span class="icon"> <i class="fa fa-archive"></i> </span> <span class="text">Order Delivered</span> </div>
                    @else
                    <div class="step cancel"> <span class="icon"> <i class="fa fa-trash fa-lg"></i> </span> <span class="text">Order Canceled</span> </div>
                    @endif
                </div>
            </div>


        </div>
    </div>
</div>

@endsection