@extends('admin.admin_layouts')

@section('admin_content')

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">

<div class="sl-pagebody">
    <div class="sl-page-title">
    <h5>Tableau des Administrateurs</h5>
    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
    <h6 class="card-body-title">Liste des Administrateurs
        <a href="{{ route('create.admin') }}" class="btn btn-sm btn-danger float-right"> <i class="fa fa-user-plus fa-lg"></i> Créez un Admin </a>
    </h6>

    <div class="table-wrapper">
        <table id="datatable1" class="table display responsive nowrap">
        <thead>
            <tr>
            <th class="wd-15p">Nom</th>
            <th class="wd-15p">Phone</th>
            <th class="wd-15p">Accès</th>
            <th class="wd-20p">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $row)
            
            <tr>
            <td>{{ $row->name }}</td>
            <td>{{ $row->phone }}</td>
            <td>
                @if ($row->category == 1)
                <span class="badge btn-danger">Catégorie</span>
                @else
                @endif

                @if ($row->coupon == 1)
                <span class="badge btn-primary">Coupons</span>
                @else
                @endif

                @if ($row->product == 1)
                <span class="badge btn-secondary">Produits</span>
                @else
                @endif

                @if ($row->order == 1)
                <span class="badge btn-success">Commandes</span>
                @else
                @endif

                @if ($row->blog == 1)
                <span class="badge btn-warning">Blog</span>
                @else
                @endif

                @if ($row->subscriber == 1)
                <span class="badge btn-info">Abonnés</span>
                @else
                @endif

                @if ($row->report == 1)
                <span class="badge btn-dark">Rapports</span>
                @else
                @endif

                @if ($row->role == 1)
                <span class="badge btn-dark">Utilisateur</span>
                @else
                @endif

                @if ($row->return == 1)
                <span class="badge btn-danger">Commandes retournées</span>
                @else
                @endif

                @if ($row->contact == 1)
                <span class="badge btn-primary">Message du Contact</span>
                @else
                @endif

                @if ($row->comment == 1)
                <span class="badge btn-secondary">Avis sur les Produits</span>
                @else
                @endif

                @if ($row->setting == 1)
                <span class="badge btn-success">Paramètres du site</span>
                @else
                @endif

                @if ($row->stock == 1)
                <span class="badge btn-success">Stock de produits</span>
                @else
                @endif
                
            </td>
            <td>
                <a href=" {{ URL::to('edit/admin/'.$row->id) }} " class="btn btn-sm btn-info" title="Modifier"><i class="fa fa-pencil-square-o fa-2x"></i></a>
                <a href=" {{ URL::to('delete/admin/'.$row->id) }} " class="btn btn-sm btn-danger" id="delete" title="Supprimer"><i class="fa fa-trash-o fa-2x"></i></a>
            </td>
            </tr>

            @endforeach
        </tbody>
        </table>
    </div><!-- table-wrapper -->
    </div><!-- card -->


</div><!-- sl-mainpanel -->


@endsection