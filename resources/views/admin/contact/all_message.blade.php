<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
@extends('admin.admin_layouts')

@section('admin_content')

<div class="sl-mainpanel">
    

    <div class="sl-pagebody">
        <div class="sl-page-title">
        <h5>Messages</h5>
        
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Liste des Messages</h6>
        

        <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
            <thead>
                <tr>
                <th class="wd-20p">Action</th>
                <th class="wd-15p">Name</th>
                <th class="wd-15p">Email</th>
                <th class="wd-15p">Phone</th>
                <th class="wd-20p">Message</th>
                
                </tr>
            </thead>
            <tbody>
                @foreach($message as $row)
                <tr>
                    <td>
                        <a href="{{ URL::to('admin/view/message/'.$row->id) }} " class="btn btn-sm btn-outline-warning" title="Voir"><i class="fas fa-eye fa-lg"></i>  Voir</a>
                        <a href="{{ URL::to('admin/delete/message/'.$row->id) }} " class="btn btn-sm btn-outline-danger" id="dlte" title="Supprimer"><i class="fas fa-trash fa-lg"></i>  Supprimer</a>
                        
                    </td>
                <td>{{ $row->name }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->phone }}</td>
                <td>{{ $row->message }}</td>               
                </tr>
                @endforeach
                
            </tbody>
            </table>
        </div><!-- table-wrapper -->
        </div><!-- card -->

        


    </div><!-- sl-mainpanel -->



@endsection