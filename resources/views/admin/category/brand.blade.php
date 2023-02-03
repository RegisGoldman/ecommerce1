@extends('admin.admin_layouts')

@section('admin_content')

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">

<div class="sl-pagebody">
    <div class="sl-page-title">
    <h5>Tableau des marques</h5>
    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
    <h6 class="card-body-title">Liste des marques
        <a href="#" class="btn btn-sm btn-warning float-right" data-toggle="modal" data-target="#modaldemo3"> Ajouter une Marque</a>
    </h6>

    <div class="table-wrapper">
        <table id="datatable1" class="table display responsive nowrap">
        <thead>
            <tr>
            <th class="wd-15p">ID</th>
            <th class="wd-15p">Nom de la marque</th>
            <th class="wd-15p">Logo de la marque</th>
            <th class="wd-20p">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($brand as $key=>$row)
            
            <tr>
            <td>{{ $key +1 }}</td>
            <td>{{ $row->brand_name	 }}</td>
            <td> <img src=" {{ URL::to($row->brand_logo) }} " height="70px;" width="80px;"> </td>
            <td>
                <a href=" {{ URL::to('edit/brand/'.$row->id) }} " class="btn btn-lg btn-info" title="Modifier"><i class="fa fa-edit"></i></a>
                <a href=" {{ URL::to('delete/brand/'.$row->id) }} " class="btn btn-lg btn-danger" id="delete" title="Supprimer"><i class="fa fa-trash"></i></a>
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
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Ajouter une Marque</h6>
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

        <form action="{{ route('store.brand') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body pd-20">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nom de la Marque</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nike , Adidas" name="brand_name">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Logo de la Marque</label>
                    <input type="file" class="form-control" aria-describedby="emailHelp" placeholder="Nike , Adidas" name="brand_logo">
                </div>

            </div><!-- modal-body -->
            <div class="modal-footer">
                <button type="submit" class="btn btn-info pd-x-20">Sauvegarder</button>
                <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Fermer</button>
            </div>
        </form>
            </div>
        </div><!-- modal-dialog -->
        </div><!-- modal -->

@endsection