@extends('admin.admin_layouts')

@section('admin_content')

<div class="sl-mainpanel">
    

    <div class="sl-pagebody">
        <div class="sl-page-title">
        <h5>Search Report</h5>
        
        </div><!-- sl-page-title -->

        <div class="row">
            <div class="col-lg-4">

                <div class="card pd-20 pd-sm-40">
                    <div class="table-wrapper">
                    
                <form method="post" action="{{ route('search.by.date') }}" enctype="multipart/form-data" >
                    @csrf
                    <div class="modal-body pd-20"> 
                    <div class="form-group">
                    <label for="exampleInputEmail1">Search by Date</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="date">
                    
                    </div>

                        </div><!-- modal-body -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info pd-x-20">Cherchez</button>
                            
                        </div>
                            </form>


                    </div><!-- table-wrapper -->
                    </div><!-- card -->
            </div>

            <div class="col-lg-4">
                <div class="card pd-20 pd-sm-40">
                    <div class="table-wrapper">
                    
                <form method="post" action="{{ route('search.by.month') }}" enctype="multipart/form-data" >
                    @csrf
                    <div class="modal-body pd-20"> 
                    <div class="form-group">
                    <label for="exampleInputEmail1">Search by Month</label>
                    <select name="month" id="" class="form-select">
                        <option value="January">Janvier</option>
                        <option value="February">Février</option>
                        <option value="March">Mars</option>
                        <option value="April">Avril</option>
                        <option value="May">Mai</option>
                        <option value="June">Juin</option>
                        <option value="July">Juillet</option>
                        <option value="August">Août</option>
                        <option value="September">Septembre</option>
                        <option value="October">Octobre</option>
                        <option value="November">Novembre</option>
                        <option value="December">Décembre</option>
                    </select>
                    
                    </div>

                        </div><!-- modal-body -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info pd-x-20">Cherchez</button>
                            
                        </div>
                            </form>


                    </div><!-- table-wrapper -->
                    </div><!-- card -->
            </div>

            <div class="col-lg-4">
                <div class="card pd-20 pd-sm-40">
                    <div class="table-wrapper">
                    
                <form method="post" action="{{ route('search.by.year') }}" enctype="multipart/form-data" >
                    @csrf
                    <div class="modal-body pd-20"> 
                    <div class="form-group">
                    <label for="exampleInputEmail1">Search by Year</label>
                    <select name="year" id="" class="form-select">
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                        <option value="2030">2030</option>
                    </select>
                    
                    </div>

                        </div><!-- modal-body -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info pd-x-20">Cherchez</button>
                            
                        </div>
                            </form>


                    </div><!-- table-wrapper -->
                    </div><!-- card -->
            </div>

        </div>

    </div><!-- sl-mainpanel -->





@endsection