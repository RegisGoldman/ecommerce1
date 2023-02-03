@extends('admin.admin_layouts')

@section('admin_content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
<nav class="breadcrumb sl-breadcrumb">
<a class="breadcrumb-item" href="{{url('admin/home')}}">Kaebor Boutique</a>
<span class="breadcrumb-item active">Section blog</span>
</nav>

<div class="sl-pagebody">
<div class="card pd-20 pd-sm-40">
    <h6 class="card-body-title">
        <a href=" {{ route('all.blogpost')}} " class="btn btn-outline-dark btn-sm pull-right">Tous les posts</a>
        Ajouter un nouveau post</h6>
    <p class="mg-b-20 mg-sm-b-30">Formulaire d'ajout d'un nouveau Post</p>

    <form action=" {{ route('store.post')}} " method="POST" enctype="multipart/form-data">
        @csrf

    <div class="form-layout">
        <div class="row mg-b-25">
        <div class="col-lg-4">
            <div class="form-group">
            <label class="form-control-label">Titre du poste (ENG): <span class="tx-danger">*</span></label>
            <input class="form-control" type="text" name="post_title_en" placeholder="Nom du post">
            </div>
        </div><!-- col-4 -->
        <div class="col-lg-4">
            <div class="form-group">
            <label class="form-control-label">Titre du poste (FRA): <span class="tx-danger">*</span></label>
            <input class="form-control" type="text" name="post_title_fr" placeholder="Nom du post">
            </div>
        </div><!-- col-4 -->
        <div class="col-lg-4">
            <div class="form-group mg-b-10-force">
            <label class="form-control-label">Catégorie Blog: <span class="tx-danger">*</span></label>
            <select class="form-select select2" data-placeholder="Choisissez une catégorie" name="category_id">
                <option label="Choisissez une catégorie"></option>
                @foreach($blogcategory as $row)
                <option value="{{ $row->id }}">{{ $row->category_name_en }}</option>
                @endforeach
            </select>
            </div>
        </div><!-- col-4 -->



        

        <div class="col-lg-6">
            <div class="form-group">
            <label class="form-control-label">Détails du Post (English): <span class="tx-danger">*</span></label>
            <textarea class="form-control" id="summernote" name="details_en"></textarea>
            </div>
        </div><!-- col-4 -->

        <div class="col-lg-6">
            <div class="form-group">
            <label class="form-control-label">Détails du Post (Francais): <span class="tx-danger">*</span></label>
            <textarea class="form-control" id="summernote1" name="details_fr"></textarea>
            </div>
        </div><!-- col-4 -->

        <div class="col-lg-4">
            <div class="form-group">
            <label class="form-control-label">Image du Post: <span class="tx-danger">*</span></label>
            <label class="custom-file">
                <input type="file" id="file" class="custom-file-input" name="post_image" onchange="readURL(this);" required>
                <span class="custom-file-control"></span>
                <img src="#" id="one">
            </label>
            </div>
        </div><!-- col-4 -->


        </div><!-- row -->

        <hr>

        </div><!-- row -->

        <br><br>

        <div class="form-layout-footer">
        <button class="btn btn-info mg-r-5" type="submit"><i class="fa fa-floppy-o fa-lg" aria-hidden="true"></i>&nbsp; Sauvegarder</button>
        </div><!-- form-layout-footer -->
    </div><!-- form-layout -->
    </div><!-- card -->

</form>
</div><!-- row -->
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->


<script type="text/javascript">
function readURL(input){
    if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
        $('#one')
        .attr('src', e.target.result)
        .width(100)
        .height(100);
    };
    reader.readAsDataURL(input.files[0]);
    }
}
</script>

@endsection
