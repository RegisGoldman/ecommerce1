<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
@extends('admin.admin_layouts')

@section('admin_content')

<div class="sl-mainpanel">
    
<div class="sl-pagebody">

    <div class="card pd-20 pd-sm-40">

        <h6 class="card-body-title">Détails du Message</h6>

        <div class="row">
            @foreach ($contact as $row)
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th> Name: </th>
                            <th> {{$row->name}} </th>
                        </tr>
                    </table>
                </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">         
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th> Email: </th>
                                <th> {{$row->email}} </th>
                            </tr>   
                        </table>
                    </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <table class="table">
                                <tr>
                                    <th> Phone: </th>
                                    <th> {{$row->phone}} </th>
                                </tr>   
                            </table>
                        </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <table class="table">
                                    <tr>
                                        <th> Message: </th>
                                        <th> {{$row->message}} </th>
                                    </tr>   
                                </table>
                            </div>
                            </div>
                        </div>
                            
                        @endforeach
        </div>

        
        </div>

            
    </div>
</div>
</div>
@endsection