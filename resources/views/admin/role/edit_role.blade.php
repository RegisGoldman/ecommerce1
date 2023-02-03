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

    <form action="{{ route('update.admin') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <input type="hidden" name="id" value="{{ $user->id }}">

    <div class="form-layout">
        <div class="row mg-b-25">
        <div class="col-lg-6">
            <div class="form-group">
            <label class="form-control-label">Nom: <span class="tx-danger">*</span></label>
            <input class="form-control" type="text" name="name" placeholder="Nom & Prénoms" required value="{{ $user->name }}">
            </div>
        </div><!-- col-4 -->
        <div class="col-lg-6">
            <div class="form-group">
            <label class="form-control-label">E-mail: <span class="tx-danger">*</span></label>
            <input class="form-control" type="email" name="email" placeholder="Adresse électronique" required value="{{ $user->email }}">
            </div>
        </div><!-- col-4 -->
        <div class="col-lg-6">
            <div class="form-group">
            <label class="form-control-label">Téléphone: <span class="tx-danger">*</span></label>
            <input class="form-control" type="text" name="phone"  placeholder="Numéro de téléphone" required value="{{ $user->phone }}"> 
            </div>
        </div><!-- col-4 -->

        </div><!-- row -->

        <hr>
        <br><br>

        <div class="row">
            <div class="col-lg-4">
                <label class="ckbox">
                    <input type="checkbox" name="category" value="1" <?php if ($user->category == 1) {
                        echo "checked";
                    } ?>>
                    <span>Catégorie</span>
                </label>
            </div><!-- col-4 -->

            <div class="col-lg-4">
                <label class="ckbox">
                    <input type="checkbox" name="coupon" value="1" <?php if ($user->coupon == 1) {
                        echo "checked";
                    } ?>>
                    <span>Coupons</span>
                </label>
            </div><!-- col-4 -->

            <div class="col-lg-4">
                <label class="ckbox">
                    <input type="checkbox" name="product" value="1" <?php if ($user->product == 1) {
                        echo "checked";
                    } ?>>
                    <span>Produits</span>
                </label>
            </div><!-- col-4 -->

            <div class="col-lg-4">
                <label class="ckbox">
                    <input type="checkbox" name="order" value="1" <?php if ($user->order == 1) {
                        echo "checked";
                    } ?>>
                    <span>Commandes</span>
                </label>
            </div><!-- col-4 -->

            <div class="col-lg-4">
                <label class="ckbox">
                    <input type="checkbox" name="blog" value="1" <?php if ($user->blog == 1) {
                        echo "checked";
                    } ?>>
                    <span>Blog</span>
                </label>
            </div><!-- col-4 -->

            <div class="col-lg-4">
                <label class="ckbox">
                    <input type="checkbox" name="subscriber" value="1" <?php if ($user->subscriber == 1) {
                        echo "checked";
                    } ?>>
                    <span>Abonnés</span>
                </label>
            </div><!-- col-4 -->

            <div class="col-lg-4">
                <label class="ckbox">
                    <input type="checkbox" name="report" value="1" <?php if ($user->report == 1) {
                        echo "checked";
                    } ?>>
                    <span>Rapports</span>
                </label>
            </div><!-- col-4 -->

            <div class="col-lg-4">
                <label class="ckbox">
                    <input type="checkbox" name="role" value="1" <?php if ($user->role == 1) {
                        echo "checked";
                    } ?>>
                    <span>Utilisateur</span>
                </label>
            </div><!-- col-4 -->

            <div class="col-lg-4">
                <label class="ckbox">
                    <input type="checkbox" name="return" value="1" <?php if ($user->return == 1) {
                        echo "checked";
                    } ?>>
                    <span>Commandes retournées</span>
                </label>
            </div><!-- col-4 -->

            <div class="col-lg-4">
                <label class="ckbox">
                    <input type="checkbox" name="contact" value="1" <?php if ($user->contact == 1) {
                        echo "checked";
                    } ?>>
                    <span>Message du Contact</span>
                </label>
            </div><!-- col-4 -->

            <div class="col-lg-4">
                <label class="ckbox">
                    <input type="checkbox" name="comment" value="1" <?php if ($user->comment == 1) {
                        echo "checked";
                    } ?>>
                    <span>Avis sur les Produits</span>
                </label>
            </div><!-- col-4 -->

            <div class="col-lg-4">
                <label class="ckbox">
                    <input type="checkbox" name="setting" value="1" <?php if ($user->setting == 1) {
                        echo "checked";
                    } ?>>
                    <span>Paramètres du site</span>
                </label>
            </div><!-- col-4 -->

            <div class="col-lg-4">
                <label class="ckbox">
                    <input type="checkbox" name="stock" value="1" <?php if ($user->stock == 1) {
                        echo "checked";
                    } ?>>
                    <span>Stock de produits</span>
                </label>
            </div><!-- col-4 -->

        </div><!-- row -->

        <br><br>

        <div class="form-layout-footer">
        <button type="submit" class="btn btn-outline-info mg-r-5"><i class="fa fa-floppy-o fa-lg" aria-hidden="true"></i>&nbsp; Actualiser</button>
        </div><!-- form-layout-footer -->
    </div><!-- form-layout -->
    </div><!-- card -->

</form>
</div><!-- row -->
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

@endsection
