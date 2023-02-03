@extends('admin.admin_layouts')

@section('admin_content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
<nav class="breadcrumb sl-breadcrumb">
<a class="breadcrumb-item" href="{{url('admin/home')}}">Kaebor Boutique</a>
<span class="breadcrumb-item active">Section Administrateur</span>
</nav>

<div class="sl-pagebody">
<div class="card pd-20 pd-sm-40">
    <h6 class="card-body-title"> Ajouter un nouveau Administrateur</h6>
    <p class="mg-b-20 mg-sm-b-30">Formulaire d'ajout de nouveau Admin</p>

    <form action="{{ route('store.admin') }}" method="POST" enctype="multipart/form-data">
        @csrf

    <div class="form-layout">
        <div class="row mg-b-25">
        <div class="col-lg-6">
            <div class="form-group">
            <label class="form-control-label">Nom: <span class="tx-danger">*</span></label>
            <input class="form-control" type="text" name="name" placeholder="Nom & Prénoms" required>
            </div>
        </div><!-- col-4 -->
        <div class="col-lg-6">
            <div class="form-group">
            <label class="form-control-label">E-mail: <span class="tx-danger">*</span></label>
            <input class="form-control" type="email" name="email" placeholder="Adresse électronique" required>
            </div>
        </div><!-- col-4 -->
        <div class="col-lg-6">
            <div class="form-group">
            <label class="form-control-label">Téléphone: <span class="tx-danger">*</span></label>
            <input class="form-control" type="text" name="phone" value="" placeholder="Numéro de téléphone" required>
            </div>
        </div><!-- col-4 -->

        <div class="col-lg-6">
            <div class="form-group">
            <label class="form-control-label">Mot de passe: <span class="tx-danger">*</span></label>
            <input class="form-control" type="password" name="password" value="" placeholder="Entrez le mot de passe" required>
            </div>
        </div><!-- col-4 -->


        </div><!-- row -->

        <hr>
        <br><br>

        <div class="row">
            <div class="col-lg-4">
                <label class="ckbox">
                    <input type="checkbox" name="category" value="1">
                    <span>Catégorie</span>
                </label>
            </div><!-- col-4 -->

            <div class="col-lg-4">
                <label class="ckbox">
                    <input type="checkbox" name="coupon" value="1">
                    <span>Coupons</span>
                </label>
            </div><!-- col-4 -->

            <div class="col-lg-4">
                <label class="ckbox">
                    <input type="checkbox" name="product" value="1">
                    <span>Produits</span>
                </label>
            </div><!-- col-4 -->

            <div class="col-lg-4">
                <label class="ckbox">
                    <input type="checkbox" name="order" value="1">
                    <span>Commandes</span>
                </label>
            </div><!-- col-4 -->

            <div class="col-lg-4">
                <label class="ckbox">
                    <input type="checkbox" name="blog" value="1">
                    <span>Blog</span>
                </label>
            </div><!-- col-4 -->

            <div class="col-lg-4">
                <label class="ckbox">
                    <input type="checkbox" name="subscriber" value="1">
                    <span>Abonnés</span>
                </label>
            </div><!-- col-4 -->

            <div class="col-lg-4">
                <label class="ckbox">
                    <input type="checkbox" name="report" value="1">
                    <span>Rapports</span>
                </label>
            </div><!-- col-4 -->

            <div class="col-lg-4">
                <label class="ckbox">
                    <input type="checkbox" name="role" value="1">
                    <span>Utilisateur</span>
                </label>
            </div><!-- col-4 -->

            <div class="col-lg-4">
                <label class="ckbox">
                    <input type="checkbox" name="return" value="1">
                    <span>Commandes retournées</span>
                </label>
            </div><!-- col-4 -->

            <div class="col-lg-4">
                <label class="ckbox">
                    <input type="checkbox" name="contact" value="1">
                    <span>Message du Contact</span>
                </label>
            </div><!-- col-4 -->

            <div class="col-lg-4">
                <label class="ckbox">
                    <input type="checkbox" name="comment" value="1">
                    <span>Avis sur les Produits</span>
                </label>
            </div><!-- col-4 -->

            <div class="col-lg-4">
                <label class="ckbox">
                    <input type="checkbox" name="setting" value="1">
                    <span>Paramètres du site</span>
                </label>
            </div><!-- col-4 -->

            <div class="col-lg-4">
                <label class="ckbox">
                    <input type="checkbox" name="stock" value="1">
                    <span>Stock de produits</span>
                </label>
            </div><!-- col-4 -->

        </div><!-- row -->

        <br><br>

        <div class="form-layout-footer">
        <button type="submit" class="btn btn-outline-info mg-r-5"><i class="fa fa-floppy-o fa-lg" aria-hidden="true"></i>&nbsp; Sauvegarder</button>
        </div><!-- form-layout-footer -->
    </div><!-- form-layout -->
    </div><!-- card -->

</form>
</div><!-- row -->
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

@endsection
