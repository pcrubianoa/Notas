@extends('layouts.backend')

@section('pageTitle', 'Permisos')
@section('pageSubtitle', 'Configuración Permisos')

@section('content')

<a href="" class="btn btn-primary" data-toggle="modal" data-target="#modaldemo1">Nuevo Permiso</a>

<div class="mt-2">
    <table id="datatable1" class="display responsive nowrap">
    <thead>
    <tr>
        <th class="wd-5p">Id</th>
        <th class="wd-15p">Nombre</th>
        <th class="wd-5p">Acciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach($permissions as $key => $permission)
        <tr>
            <td>{{ $permission->id ?? '' }}</td>
            <td>{{ $permission->name ?? '' }}</td>
            <td>

                <button class="p-0 m-0" href="{{ route('admin.permissions.edit', $permission->id) }}"
                   data-hover="tooltip"
                   data-placement="top"
                   data-target="#modal-edit-permissions{{ $permission->id }}"
                   data-toggle="modal"
                   id="modal-edit"
                   title="Edit"
                    style="display: inline-block;"><i class="typcn typcn-edit fa-lg"></i>
                </button>

                <!-- Modal Edit -->
                <div class="modal" id="modal-edit-permissions{{ $permission->id}}">

                    <div class="modal-dialog" role="document">
                        <div class="modal-content modal-content-demo">
                            <div class="modal-header">
                                <h6 class="modal-title">Editar Permiso</h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row row-sm">
                                    <div class="col-lg">
                                        <form action="{{ route("admin.permissions.update", [$permission->id]) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                                <label for="">Nombre</label>
                                                <input class="form-control" placeholder="Nombre del permiso" type="text" id="name" name="name" value="{{ old('name', isset($permission) ? $permission->name : '') }}" autocapitalize="none" required>

                                                @if($errors->has('name'))
                                                    <em class="invalid-feedback">
                                                        {{ $errors->first('name') }}
                                                    </em>
                                                @endif
                                            </div>
                                            <div class="text-right">
                                                <button type="submit" class="btn btn-primary">Guardar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Edit -->

                <form class="m-0 p-0" id="delete-form" action="{{ route('admin.permissions.destroy', $permission->id) }}" method="POST" onsubmit="return confirm('¿Estas seguro de eliminar este registro?');" style="display: inline-block;">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}

                    <button class="p-0 m-0" type="submit">
                        <i class="typcn typcn-delete-outline fa-lg"></i>
                    </button>
                </form>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>

<div id="modaldemo1" class="modal" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Nuevo Permiso</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row row-sm">
                    <div class="col-lg">
                        <form action="{{ route("admin.permissions.store") }}" method="POST">
                            @csrf
                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                <label for="">Nombre</label>
                                <input class="form-control" placeholder="Nombre del permiso" type="text" id="name" name="name" autocapitalize="none" required>

                                @if($errors->has('name'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('name') }}
                                    </em>
                                @endif
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </form>
                    </div><!-- col -->
                </div>
            </div>
        </div>
    </div><!-- modal-dialog -->
</div>
@endsection
@section('javascript')
@parent
<script>
    $(document).ready(function(){
        'use strict';

        $('#datatable1').DataTable({
            responsive: false,
            dom: 'lBfrtip',
            buttons: [
                'print', 'pdf'
            ],
            language: {
                searchPlaceholder: 'Buscar...',
                sSearch: '',
                lengthMenu: '_MENU_ items/página',
                buttons: {
                    print: 'Imprimir'
                }
            },

            scrollY:        "300px",
            scrollX:        true,
            scrollCollapse: true,
            paging:         false,
            fixedColumns:   {
                heightMatch: 'none'
            }

        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

    });
</script>
@endsection
