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
            <h6 class="card-body-title">Détails du produit  </h6><br>
            
            <div class="form-layout">
            <div class="row mg-b-25">
                <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label font-italic text-primary">Nom du produit: <span class="tx-danger">*</span></label><br>
                    <strong>{{ $product->product_name }}</strong>
                </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label font-italic text-primary">Code du produit: <span class="tx-danger">*</span></label><br>
                    <strong>{{ $product->product_code }}</strong>
                </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label font-italic text-primary">Quantité: <span class="tx-danger">*</span></label><br>
                    <strong>{{ $product->product_quantity }}</strong>
                    
                </div>
                </div><!-- col-4 -->
                
                <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                    <label class="form-control-label font-italic text-primary">Catégorie: <span class="tx-danger">*</span></label><br>
                    <strong>{{ $product->category_name }}</strong>
        
                </div>
                </div><!-- col-4 -->


                <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                    <label class="form-control-label font-italic text-primary">Sous-catégorie: <span class="tx-danger">*</span></label><br>
                    <strong>{{ $product->subcategory_name }}</strong>
        
                </div>
                </div><!-- col-4 -->



                <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
            <label class="form-control-label font-italic text-primary">Marque: <span class="tx-danger">*</span></label>
                <br>
                    <strong>{{ $product->brand_name }}</strong>
                </div>
                </div><!-- col-4 -->


    <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label font-italic text-primary">Taille du produit: <span class="tx-danger">*</span></label>
                    <br>
                    <strong>{{ $product->product_size }}</strong>
                </div>
                </div><!-- col-4 -->

    <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label font-italic text-primary">Couleur du produit: <span class="tx-danger">*</span></label>
                    <br>
                    <strong>{{ $product->product_color }}</strong>

                </div>
                </div><!-- col-4 -->

                <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label font-italic text-primary">Prix de vente: <span class="tx-danger">*</span></label>
                    <br>
                    <strong>{{ $product->selling_price }}</strong>
                    
                </div>
                </div><!-- col-4 -->


                <div class="col-lg-12">
                <div class="form-group">
                    <label class="form-control-label font-italic text-primary">Info sur le produit: <span class="tx-danger">*</span></label>
                    <br>
                    <p>   {!! $product->product_details !!} </p>

                </div>
                </div><!-- col-4 -->

                <div class="col-lg-12">
                <div class="form-group">
                    <label class="form-control-label font-italic text-primary">Lien vidéo: <span class="tx-danger">*</span></label>
                    <br>
                    <strong>{{ $product->video_link }}</strong>
                    
                </div>
                </div><!-- col-4 -->



    <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label font-italic text-primary">Image 1 ( Vignette principale): <span class="tx-danger">*</span></label><br>
                    <label class="custom-file">
            
            <img src="{{ URL::to($product->image_one) }}" style="height: 80px; width: 80px;">
            </label>

                </div>
                </div><!-- col-4 -->


                <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label font-italic text-primary">Image 2: <span class="tx-danger">*</span></label><br>
                    <label class="custom-file">
            <img src="{{ URL::to($product->image_two) }}" style="height: 80px; width: 80px;">
            </label>

                </div>
                </div><!-- col-4 -->




    <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label font-italic text-primary">Image 3: <span class="tx-danger">*</span></label><br>
                    <label class="custom-file">
            <img src="{{ URL::to($product->image_three) }}" style="height: 80px; width: 80px;">

            </label>

                </div>
                </div><!-- col-4 --> 

            </div><!-- row -->

    <hr>
    <br><br>

            <div class="row">

        <div class="col-lg-4">
        <label class="">
            @if($product->main_slider == 1)
            <span class="badge badge-success">Active</span>

            @else
        <span class="badge badge-danger">Inactive</span>
            @endif 

            <span>Slider principal</span>
        </label>

        </div> <!-- col-4 --> 

            <div class="col-lg-4">
        <label class="">
            @if($product->hot_deal == 1)
            <span class="badge badge-success">Active</span>

            @else
        <span class="badge badge-danger">Inactive</span>
            @endif 
            
            <span>Hot Deal</span>
        </label>

        </div> <!-- col-4 --> 



            <div class="col-lg-4">
        <label class="">
            @if($product->best_rated == 1)
            <span class="badge badge-success">Active</span>

            @else
        <span class="badge badge-danger">Inactive</span>
            @endif 
            
            <span>Les mieux notés</span>
        </label>

        </div> <!-- col-4 --> 


            <div class="col-lg-4">
        <label class="">
            @if($product->trend == 1)
            <span class="badge badge-success">Active</span>

            @else
        <span class="badge badge-danger">Inactive</span>
            @endif 
        
            <span>Produit tendance </span>
        </label>

        </div> <!-- col-4 --> 

    <div class="col-lg-4">
        <label class="">
            @if($product->mid_slider == 1)
            <span class="badge badge-success">Active</span>

            @else
        <span class="badge badge-danger">Inactive</span>
            @endif 
            
            <span>Slider centrale</span>
        </label>

        </div> <!-- col-4 --> 

    <div class="col-lg-4">
        <label class="">
            @if($product->hot_new == 1)
            <span class="badge badge-success">Active</span>

            @else
        <span class="badge badge-danger">Inactive</span>
            @endif 
            
            <span>Nouveauté </span>
        </label>

        </div> <!-- col-4 --> 


            </div><!-- end row --> 



            
            </div><!-- form-layout -->
        </div><!-- card -->

        
        </div><!-- row -->


    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->






    @endsection
