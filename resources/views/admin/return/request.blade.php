<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
@extends('admin.admin_layouts')

@section('admin_content')

<div class="sl-mainpanel">
    

    <div class="sl-pagebody">
        <div class="sl-page-title">
        <h5>Commandes retournées</h5>
        
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Liste des commandes retournées</h6>
        

        <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
            <thead>
                <tr>
                <th class="wd-15p">Paiement</th>
                <th class="wd-15p">Paiement ID</th>
                <th class="wd-15p">Partiel</th>
                <th class="wd-20p">Frais</th>
                <th class="wd-20p">Total</th>
                <th class="wd-20p">Date</th>
                <th class="wd-20p">Return</th>
                <th class="wd-20p">Action</th>
                
                </tr>
            </thead>
            <tbody>
                @foreach($order as $row)
                <tr>
                <td>{{ $row->payment_type }}</td>
                <td>{{ $row->blnc_transection }} %</td>
                <td>{{ $row->subtotal }}$</td>
                <td>{{ $row->shipping }}$</td>
                <td>{{ $row->total }}$</td>
                <td>{{ $row->date }}</td>
                <td> 
                    @if ($row->return_order == 1)
                                    <span class="badge badge-warning">Pending</span>
                                    @elseif($row->return_order == 2)
                                    <span class="badge badge-success">Success</span>
                                    @endif
                </td>
                <td>
                    <a href="{{ URL::to('admin/approve/return/'.$row->id) }} " class="btn btn-sm btn-info">Approve</a>
                    
                </td>
                
                </tr>
                @endforeach
                
            </tbody>
            </table>
        </div><!-- table-wrapper -->
        </div><!-- card -->

        


    </div><!-- sl-mainpanel -->



@endsection