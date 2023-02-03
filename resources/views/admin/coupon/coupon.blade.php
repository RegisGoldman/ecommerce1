    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    @extends('admin.admin_layouts')

    @section('admin_content')

    <div class="sl-mainpanel">
        

        <div class="sl-pagebody">
            <div class="sl-page-title">
            <h5>Liste des bons de réduction</h5>
            
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Liste des coupons
    <a href="#" class="btn btn-sm btn-warning" style="float: right;" data-toggle="modal" data-target="#modaldemo3">Ajouter un nouveau coupon</a>
            </h6>
            

            <div class="table-wrapper">
                <table id="datatable1" class="table display responsive nowrap">
                <thead>
                    <tr>
                    <th class="wd-15p">ID</th>
                    <th class="wd-15p">Code du coupon</th>
                    <th class="wd-15p">Pourcentage du coupon</th>
                    <th class="wd-20p">Action</th>
                    
                    </tr>
                </thead>
                <tbody>
                    @foreach($coupon as $key=>$row)
                    <tr>
                    <td>{{ $key +1 }}</td>
                    <td>{{ $row->coupon }}</td>
                    <td>{{ $row->discount }} %</td>
                    <td>
                        <a href="{{ URL::to('edit/coupon/'.$row->id) }} " class="btn btn-sm btn-info">Modifier</a>
                        <a href="{{ URL::to('delete/coupon/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete">Supprimer</a>
                    </td>
                    
                    </tr>
                    @endforeach
                    
                </tbody>
                </table>
            </div><!-- table-wrapper -->
            </div><!-- card -->

            

    
        </div><!-- sl-mainpanel -->



    <!-- LARGE MODAL -->
            <div id="modaldemo3" class="modal fade">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content tx-size-sm">
                <div class="modal-header pd-x-20">
                    <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Ajouter un coupon</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post" action="{{ route('store.coupon') }}">
            @csrf
            <div class="modal-body pd-20"> 
            <div class="form-group">
            <label for="exampleInputEmail1">Code du coupon </label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="KB202106" name="coupon">
            
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1">Reduction sur les coupons (%) </label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="50% , 60% , 70%" name="discount">
            
            </div>
            
                </div><!-- modal-body -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success pd-x-20">Sauvegarder</button>
                    <button type="button" class="btn btn-danger pd-x-20" data-dismiss="modal">Fermer</button>
                </div>
                    </form>
                </div>
            </div><!-- modal-dialog -->
            </div><!-- modal -->

    

    @endsection