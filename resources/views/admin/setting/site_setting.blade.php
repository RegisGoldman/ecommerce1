@extends('admin.admin_layouts')

@section('admin_content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
<nav class="breadcrumb sl-breadcrumb">
<a class="breadcrumb-item" href="{{url('admin/home')}}">Kaebor Boutique</a>
<span class="breadcrumb-item active">Website Setting</span>
</nav>

<div class="sl-pagebody">
<div class="card pd-20 pd-sm-40">
    <h6 class="card-body-title"> Site Setting</h6>
    <p class="mg-b-20 mg-sm-b-30">Formulaire d'ajout de nouveau Admin</p>

    <form action="{{ route('update.sitesetting') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <input type="hidden" name="id" value="{{ $setting->id }}">

    <div class="form-layout">
        <div class="row mg-b-25">
        <div class="col-lg-4">
            <div class="form-group">
            <label class="form-control-label">Phone One: <span class="tx-danger">*</span></label>
            <input class="form-control" type="text" name="phone_one" required value="{{ $setting->phone_one }}">
            </div>
        </div><!-- col-4 -->

        <div class="col-lg-4">
            <div class="form-group">
            <label class="form-control-label">Phone Two: <span class="tx-danger">*</span></label>
            <input class="form-control" type="text" name="phone_two" required value="{{ $setting->phone_two }}">
            </div>
        </div><!-- col-4 -->

        <div class="col-lg-4">
            <div class="form-group">
            <label class="form-control-label">E-mail: <span class="tx-danger">*</span></label>
            <input class="form-control" type="email" name="email" required value="{{ $setting->email }}">
            </div>
        </div><!-- col-4 -->

        <div class="col-lg-4">
            <div class="form-group">
            <label class="form-control-label">Company Name: <span class="tx-danger">*</span></label>
            <input class="form-control" type="text" name="company_name" required value="{{ $setting->company_name }}">
            </div>
        </div><!-- col-4 -->

        <div class="col-lg-4">
            <div class="form-group">
            <label class="form-control-label">Company Address: <span class="tx-danger">*</span></label>
            <input class="form-control" type="text" name="company_address" required value="{{ $setting->company_address }}">
            </div>
        </div><!-- col-4 -->

        <div class="col-lg-4">
            <div class="form-group">
            <label class="form-control-label">Facebook: <span class="tx-danger">*</span></label>
            <input class="form-control" type="text" name="facebook" required value="{{ $setting->facebook }}">
            </div>
        </div><!-- col-4 -->

        <div class="col-lg-4">
            <div class="form-group">
            <label class="form-control-label">Linkedin: <span class="tx-danger">*</span></label>
            <input class="form-control" type="text" name="linkedin" required value="{{ $setting->linkedin }}">
            </div>
        </div><!-- col-4 -->

        <div class="col-lg-4">
            <div class="form-group">
            <label class="form-control-label">Twitter: <span class="tx-danger">*</span></label>
            <input class="form-control" type="text" name="twitter" required value="{{ $setting->twitter }}">
            </div>
        </div><!-- col-4 -->

        <div class="col-lg-4">
            <div class="form-group">
            <label class="form-control-label">Instagram: <span class="tx-danger">*</span></label>
            <input class="form-control" type="text" name="instagram" required value="{{ $setting->instagram }}">
            </div>
        </div><!-- col-4 -->

        <div class="col-lg-4">
            <div class="form-group">
            <label class="form-control-label">Youtube: <span class="tx-danger">*</span></label>
            <input class="form-control" type="text" name="youtube" required value="{{ $setting->youtube }}">
            </div>
        </div><!-- col-4 -->

        </div><!-- row -->

        <hr>
        <br><br>

        
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
