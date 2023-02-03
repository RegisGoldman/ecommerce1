@extends('layouts.app')

@section('content')

@include('layouts.menubar')

@php
	$setting = DB::table('settings')->first();
	$charge = $setting->shipping_charge;
	$vat = $setting->vat;
@endphp

<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/contact_styles.css') }} ">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/contact_responsive.css') }}">

        <div id="login">
        <div class="contact_form">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7" style="border: 1px solid black; padding: 20px; border-radius: 25px; ">
                        <div class="contact_form_container">
                            <div class="text-center contact_form_title">Cart Product</div> <br>
    
                            <div class="cart_items">
                                <ul class="cart_list">
                                    @foreach ($cart as $row)
                                        
                                    <li class="cart_item clearfix">
                                        <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">

                                            <div class="cart_item_name cart_info_col">
                                                <div class="cart_item_title"> <b>Product Image</b></div>
                                                <div class="cart_item_text"><img src="{{ asset($row->options->image) }}" alt="" style="width:70px;" ></div>
                                            </div>

                                            <div class="cart_item_name cart_info_col">
                                                <div class="cart_item_title"><b>Name</b></div>
                                                <div class="cart_item_text">{{ $row->name }}</div>
                                            </div>
                                            @if ($row->options->color == NULL)
                                                
                                            @else
                                            <div class="cart_item_color cart_info_col">
                                                <div class="cart_item_title"><b>Color</b></div>
                                                <div class="cart_item_text">{{ $row->options->color }}</div>
                                            </div>
                                            @endif
    
                                            @if ($row->options->size == NULL)
                                                
                                            @else
                                            <div class="cart_item_color cart_info_col">
                                                <div class="cart_item_title"><b>Size</b></div>
                                                <div class="cart_item_text">{{ $row->options->size }}</div>
                                            </div>
                                            @endif
                                            
                                            <div class="cart_item_quantity cart_info_col">
                                                <div class="cart_item_title"><b>Quantity</b></div><br>
                                                <div class="cart_item_text">{{ $row->qty}}</div>
                                            </div>
                                            <div class="cart_item_price cart_info_col">
                                                <div class="cart_item_title"><b>Price</b></div>
                                                <div class="cart_item_text">${{ $row->price }}</div>
                                            </div>
                                            <div class="cart_item_total cart_info_col">
                                                <div class="cart_item_title"><b>Total</b></div>
                                                <div class="cart_item_text">${{ $row->price*$row->qty }}</div>
                                            </div>
                                            
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>

                            <ul class="list-group col-lg-8 float-right">
                                @if (Session::has('coupon'))
                                <li class="list-group-item">Subtotal: <span class="float-right"> ${{ Session::get('coupon')['balance'] }} </span> </li>
                                <li class="list-group-item">Coupon : {{ Session::get('coupon')['name'] }} 
                                    <a href=" {{ route('coupon.remove') }} " class="btn btn-sm btn-danger"><i class="fa fa-minus-circle" aria-hidden="true"></i></a> 
                                    <span class="float-right">${{ Session::get('coupon')['discount'] }}</span> </li>
                                @else
                                <li class="list-group-item">Subtotal: <span class="float-right"> ${{ Cart::Subtotal() }} </span> </li>
                                @endif
                                <li class="list-group-item">Shipping: <span class="float-right">${{ $charge }}</span> </li>
                                <li class="list-group-item">Tax: <span class="float-right">${{$vat}}</span> </li>
                                @if (Session::has('coupon'))
                                <li class="list-group-item">Total: <span class="float-right">${{ Session::get('coupon')['balance'] + $charge + $vat }}</span> </li>
                                @else
                                <li class="list-group-item">Total : <span class="float-right">${{ Cart::Subtotal() + $charge + $vat }}</span> </li>
                                @endif
                                
                            </ul>
                            
                            
                        </div>
                    </div>


                    <div class="col-lg-5" style="border: 1px solid grey; padding: 20px; border-radius: 25px;">
                        <div class="contact_form_container">
                            <div class="contact_form_title text-center">Shipping Address</div>
            
                            <form action=" {{ route('payment.process') }} " id="contact_form" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-label">Nom & Prénoms</label>
                                    <input type="text" class="form-control font-weight-light font-italic" name="name" aria-describedby="emailHelp" placeholder="Ex: Kouame David" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-label">Phone</label>
                                    <input type="text" class="form-control font-weight-light font-italic" name="phone" aria-describedby="emailHelp" placeholder="Ex: +225 010101010101" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <input type="email" class="form-control font-weight-light font-italic" name="email" aria-describedby="emailHelp" placeholder="Ex: kdavid@example.com" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-label">Address</label>
                                    <input type="text" class="form-control font-weight-light font-italic" name="address" aria-describedby="emailHelp" placeholder="Veuillez entrer votre adresse" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-label">City</label>
                                    <input type="text" class="form-control font-weight-light font-italic" name="city" aria-describedby="emailHelp" placeholder="Ex: Abidjan,Bouake" required>
                                </div>

                                <div class="contact_form_title text-center">
                                    Payment by
                                </div>

                                <div class="form-group">
                                    <ul class="logos_list text-center">
                                        <li> <input type="radio" name="payment" value="stripe"> <img src=" {{ asset('public/frontend/images/logos_1.png') }} " alt=""> </li>

                                        <li> <input type="radio" name="payment" value="stripe"> <img src=" {{ asset('public/frontend/images/logos_2.png') }} " alt=""> </li>

                                        <li> <input type="radio" name="payment" value="cod"> <img src=" {{ asset('public/frontend/images/pall.png') }} " style="height: 47px; width:120px;" alt=""> </li>

                                    </ul>
                                </div>
            
                            
            
                                <div class="contact_form_button">
                                    <button type="submit" class="btn btn-info">Pay Now!</button>
                                </div>
                            </form>
            
                        </div>
                    </div>
            
                    </div>

                </div>
            </div>
            <div class="panel"></div>
        </div>
    </div>


@endsection
