@extends('admin.admin_layouts')

@section('admin_content')

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">

<div class="sl-pagebody">
    <div class="sl-page-title">
    <h5>Modifier le Blog</h5>
    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
    <h6 class="card-body-title">Mise à jour du Blog</h6>

    <div class="table-wrapper">
    
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ url('update/blog/category/'.$blogcatedit->id) }}" method="POST">
        @csrf
        <div class="modal-body pd-20">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nom de la catégorie en Anglais</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$blogcatedit->category_name_en}}" name="category_name_en">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nom de la catégorie en Francais</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$blogcatedit->category_name_fr}}" name="category_name_fr">
            </div>

        </div><!-- modal-body -->
        <div class="modal-footer">
            <button type="submit" class="btn btn-info pd-x-20">Actualiser</button>
        </div>
    </form>

    </div><!-- table-wrapper -->
    </div><!-- card -->


</div><!-- sl-mainpanel -->


@endsection