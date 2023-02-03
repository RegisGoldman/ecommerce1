    @extends('admin.admin_layouts')

    @section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="{{url('admin/home')}}">Kaebor Boutique</a>
    <span class="breadcrumb-item active">Section produit</span>
    </nav>

    <div class="sl-pagebody">
    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">
            <a href=" {{ route('all.product')}} " class="btn btn-outline-dark btn-sm pull-right">Tous les produits</a>
            Ajouter un nouveau produit</h6>
        <p class="mg-b-20 mg-sm-b-30">Formulaire d'ajout de nouveau produit</p>

        <form action=" {{ route('store.product')}} " method="POST" enctype="multipart/form-data">
            @csrf

        <div class="form-layout">
            <div class="row mg-b-25">
            <div class="col-lg-6">
                <div class="form-group">
                <label class="form-control-label">Nom du produit: <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="product_name" placeholder="Nom du produit">
                </div>
            </div><!-- col-4 -->
            <div class="col-lg-6">
                <div class="form-group">
                <label class="form-control-label">Code du produit: <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="product_code" placeholder="Code du produit">
                </div>
            </div><!-- col-4 -->
            <div class="col-lg-6">
                <div class="form-group">
                <label class="form-control-label">Quantité: <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="product_quantity" value="" placeholder="1 , 2 , 3">
                </div>
            </div><!-- col-4 -->

            <div class="col-lg-6">
                <div class="form-group">
                <label class="form-control-label">Réduction sur le Prix: <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="discount_price" value="" placeholder="Réduction">
                </div>
            </div><!-- col-4 -->

            <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                <label class="form-control-label">Catégorie: <span class="tx-danger">*</span></label>
                <select class="form-select select2" data-placeholder="Choisissez une catégorie" name="category_id">
                    <option label="Choisissez une catégorie"></option>
                    @foreach($category as $row)
                    <option value="{{ $row->id }}">{{ $row->category_name }}</option>
                    @endforeach
                </select>
                </div>
            </div><!-- col-4 -->

            <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                <label class="form-control-label">Sous-Catégorie: <span class="tx-danger">*</span></label>
                <select class="form-control select2" data-placeholder="Choisissez une Sous-Catégorie" name="subcategory_id">
                    
                </select>
                </div>
            </div><!-- col-4 -->

            <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                <label class="form-control-label">Marque: <span class="tx-danger">*</span></label>
                <select class="form-select select2" data-placeholder="Choisissez une marque" name="brand_id">
                    <option label="Choisissez une marque"></option>
                    @foreach($brand as $br)
                    <option value="{{ $br->id }}">{{ $br->brand_name }}</option>
                    @endforeach
                </select>
                </div>
            </div><!-- col-4 -->

            <div class="col-lg-4">
                <div class="form-group">
                <label class="form-control-label">Taille du produit: <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="product_size" id="size" data-role="tagsinput">
                </div>
            </div><!-- col-4 -->

            <div class="col-lg-4">
                <div class="form-group">
                <label class="form-control-label">Couleur du produit: <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="product_color" id="color" data-role="tagsinput">
                </div>
            </div><!-- col-4 -->

            <div class="col-lg-4">
                <div class="form-group">
                <label class="form-control-label">Prix de vente: <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="selling_price" placeholder="Prix du produit">
                </div>
            </div><!-- col-4 -->

            <div class="col-lg-12">
                <div class="form-group">
                <label class="form-control-label">Détails du produit: <span class="tx-danger">*</span></label>
                <textarea class="form-control" id="summernote" name="product_details"></textarea>
                </div>
            </div><!-- col-4 -->

            <div class="col-lg-12">
                <div class="form-group">
                <label class="form-control-label">Lien vidéo: <span class="tx-danger">*</span></label>
                <input class="form-control" name="video_link" placeholder="Lien de la vidéo">
                </div>
            </div><!-- col-4 -->
            <div class="col-lg-4">
                <div class="form-group">
                <label class="form-control-label">Image 1 (Vignette principale): <span class="tx-danger">*</span></label>
                <label class="custom-file">
                    <input type="file" id="file" class="custom-file-input" name="image_one" onchange="readURL(this);" required>
                    <span class="custom-file-control"></span>
                    <img src="#" id="one">
                </label>
                </div>
            </div><!-- col-4 -->

            <div class="col-lg-4">
                <div class="form-group">
                <label class="form-control-label">Image 2 (Vignette Secondaire) : <span class="tx-danger">*</span></label>
                <label class="custom-file">
                    <input type="file" id="file" class="custom-file-input" name="image_two" onchange="readURL2(this);" required>
                    <span class="custom-file-control"></span>
                    <img src="#" id="two">
                </label>
                </div>
            </div><!-- col-4 -->

            <div class="col-lg-4">
                <div class="form-group">
                <label class="form-control-label">Image 3 (Dernière vignette) : <span class="tx-danger">*</span></label>
                <label class="custom-file">
                    <input type="file" id="file" class="custom-file-input" name="image_three" onchange="readURL3(this);" required>
                    <span class="custom-file-control"></span>
                    <img src="#" id="three">
                </label>
                </div>
            </div><!-- col-4 -->

            </div><!-- row -->

            <hr>
            <br><br>

            <div class="row">
                <div class="col-lg-4">
                    <label class="ckbox">
                        <input type="checkbox" name="main_slider" value="1">
                        <span>Slider Principal</span>
                    </label>
                </div><!-- col-4 -->

                <div class="col-lg-4">
                    <label class="ckbox">
                        <input type="checkbox" name="hot_deal" value="1">
                        <span>Hot Deal</span>
                    </label>
                </div><!-- col-4 -->

                <div class="col-lg-4">
                    <label class="ckbox">
                        <input type="checkbox" name="best_rated" value="1">
                        <span>Les mieux notés</span>
                    </label>
                </div><!-- col-4 -->

                <div class="col-lg-4">
                    <label class="ckbox">
                        <input type="checkbox" name="trend" value="1">
                        <span>Produit tendance</span>
                    </label>
                </div><!-- col-4 -->

                <div class="col-lg-4">
                    <label class="ckbox">
                        <input type="checkbox" name="mid_slider" value="1">
                        <span>Slider Centrale</span>
                    </label>
                </div><!-- col-4 -->

                <div class="col-lg-4">
                    <label class="ckbox">
                        <input type="checkbox" name="hot_new" value="1">
                        <span>Nouveauté</span>
                    </label>
                </div><!-- col-4 -->

                <div class="col-lg-4">
                    <label class="ckbox">
                        <input type="checkbox" name="buyone_getone" value="1">
                        <span>Buy one Get one</span>
                    </label>
                </div><!-- col-4 -->

            </div><!-- row -->

            <br><br>

            <div class="form-layout-footer">
            <button class="btn btn-info mg-r-5"><i class="fa fa-floppy-o fa-lg" aria-hidden="true"></i>&nbsp; Sauvegarder</button>
            <button class="btn btn-danger">Annuler</button>
            </div><!-- form-layout-footer -->
        </div><!-- form-layout -->
        </div><!-- card -->

    </form>
    </div><!-- row -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
        $('select[name="category_id"]').on('change',function(){
            var category_id = $(this).val();
            if (category_id) {
                
                $.ajax({
                url: "{{ url('/get/subcategory/') }}/"+category_id,
                type:"GET",
                dataType:"json",
                success:function(data) { 
                var d =$('select[name="subcategory_id"]').empty();
                $.each(data, function(key, value){
                
                $('select[name="subcategory_id"]').append('<option value="'+ value.id + '">' + value.subcategory_name + '</option>');

                });
                },
                });

            }else{
                alert('danger');
            }

                });
        });

    </script>

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

<script type="text/javascript">
    function readURL2(input){
        if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#two')
            .attr('src', e.target.result)
            .width(100)
            .height(100);
        };
        reader.readAsDataURL(input.files[0]);
        }
    }
    </script>

<script type="text/javascript">
    function readURL3(input){
        if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#three')
            .attr('src', e.target.result)
            .width(100)
            .height(100);
        };
        reader.readAsDataURL(input.files[0]);
        }
    }
    </script>

    @endsection
