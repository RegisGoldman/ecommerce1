<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
@extends('admin.admin_layouts')

@section('admin_content')

<div class="sl-mainpanel">
    
<div class="sl-pagebody">

    <div class="card pd-20 pd-sm-40">

        <h6 class="card-body-title">Détails des commandes</h6>

        <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"><strong>Détails</strong>  des commandes</div>

                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th> Name: </th>
                            <th> {{$order->name}} </th>
                        </tr>

                        <tr>
                            <th> Phone: </th>
                            <th> {{$order->phone}} </th>
                        </tr>

                        <tr>
                            <th> Payment Type: </th>
                            <th> {{$order->payment_type}} </th>
                        </tr>

                        <tr>
                            <th> Payment Id: </th>
                            <th> {{$order->payment_id}} </th>
                        </tr>

                        <tr>
                            <th> Date: </th>
                            <th> {{$order->date}} </th>
                        </tr>

                        <tr>
                            <th> Total: </th>
                            <th> {{$order->total}} $ </th>
                        </tr>

                    </table>
                </div>

                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header"><strong>Détails</strong> de la livraison</div>
            
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th> Name: </th>
                                <th> {{$shipping->ship_name}} </th>
                            </tr>
    
                            <tr>
                                <th> Phone: </th>
                                <th> {{$shipping->ship_phone}} </th>
                            </tr>
    
                            <tr>
                                <th> Email: </th>
                                <th> {{$shipping->ship_email}} </th>
                            </tr>
    
                            <tr>
                                <th> Address: </th>
                                <th> {{$shipping->ship_address}} </th>
                            </tr>
    
                            <tr>
                                <th> City: </th>
                                <th> {{$shipping->ship_city}} </th>
                            </tr>
    
                            <tr>
                                <th> Status: </th>
                                <th> 
                                    @if ($order->status == 0)
                                    <span class="badge badge-warning">Pending</span>
                                    @elseif($order->status == 1)
                                    <span class="badge badge-info">Accepted</span>
                                    @elseif($order->status == 2)
                                    <span class="badge badge-warning">Progress</span>
                                    @elseif($order->status == 3)
                                    <span class="badge badge-success">Delivered</span>
                                    @else
                                    <span class="badge badge-danger">Canceled</span>
                                    @endif
                                </th>
                            </tr>
    
                        </table>
                    </div>

                    </div>
                </div>

        </div>


        <div class="row">
            <div class="card pd-20 pd-sm-40 col-lg-12">
                <h6 class="card-body-title">Détails du produit </h6>
                
    
                <div class="table-wrapper">
                <table  class="table display responsive nowrap">
                    <thead>
                    <tr>
                        <th class="wd-15p">Code du produit</th>
                        <th class="wd-15p">Nom du produit</th>
                        <th class="wd-15p">Image</th>
                        <th class="wd-15p">Color</th>
                        <th class="wd-15p">Size</th>
                        <th class="wd-15p">Quantité</th>
                        <th class="wd-15p">Unit Price</th>
                        <th class="wd-20p">Total</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($details as $row)
                    <tr>
                        <td>{{ $row->product_id }}</td>
                        <td>{{ $row->product_name }}</td>
    
                    <td> <img src="{{ URL::to($row->image_one) }}" height="50px;" width="50px;"> </td>
                        <td>{{ $row->color }}</td>
                        <td>{{ $row->size }}</td>
                        <td>{{ $row->quantity }}</td>
                        <td>{{ $row->singleprice }}$</td>
                        <td>{{ $row->totalprice }}$</td>
                    </tr>
                    @endforeach
                        
                    </tbody>
                </table>
                </div><!-- table-wrapper -->
            </div><!-- card -->
        
        </div>

        @if ($order->status == 0)
        <div class="text-center">
            <a href="{{ url('admin/payment/accept/'.$order->id) }}" class="btn btn-lg btn-outline-info">Accept Payment</a>
            <a href="{{ url('admin/payment/cancel/'.$order->id) }}" class="btn btn-lg btn-outline-danger">Cancel Order</a>
        </div>

        @elseif($order->status == 1)
        <div class="text-center ">
        <a href="{{ url('admin/delivery/process/'.$order->id) }}" class="btn btn-lg btn-outline-danger">Process Delivery</a>
        </div>
        @elseif($order->status == 2)
        <div class="text-center ">
            <a href="{{ url('admin/delivery/done/'.$order->id) }}" class="btn btn-lg btn-outline-success">Delivery done</a>
            </div>
            @elseif($order->status == 4)
            <strong class="text-danger text-center">This orders are not valid</strong>
        @else
        <strong class="text-success text-center">Product successfuly delivered</strong>

        @endif
            
    </div>
</div>
</div>
@endsection