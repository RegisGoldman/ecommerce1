@extends('admin.admin_layouts')

@section('admin_content')

<div class="sl-mainpanel">
    

    <div class="sl-pagebody">
        <div class="sl-page-title">
        <h5>Mise à jour de la sous-catégorie</h5>
        
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Changer le nom de la Sous-catégorie

        </h6>
        

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
    <form method="post" action="{{ url('update/subcategory/'.$subcat->id) }}">
        @csrf
        <div class="modal-body pd-20"> 
        <div class="form-group">
        <label for="exampleInputEmail1">Nom de la sous-catégorie</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $subcat->subcategory_name }}" name="subcategory_name">
        
        </div>

<div class="form-group">
        <label for="exampleInputEmail1"> Nom de la catégorie</label>

        <select class="form-select form-select-lg mb-3" name="category_id">
        
        @foreach($category as $row)
        <option value="{{ $row->id }}"
    <?php if ($row->id == $subcat->category_id ) {
    echo "selected"; } ?> >{{ $row->category_name }}  </option> 
        @endforeach

        </select>
        
        
        </div>


        
            </div><!-- modal-body -->
            <div class="modal-footer">
                <button type="submit" class="btn btn-info pd-x-20"> Actualiser </button>
                
            </div>
                </form>


        </div><!-- table-wrapper -->
        </div><!-- card -->

        


    </div><!-- sl-mainpanel -->





@endsection