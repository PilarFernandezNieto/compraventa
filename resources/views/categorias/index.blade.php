@extends('layouts.app')
@section('title', 'Panel de control')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Listado de Categorías</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Mantenimiento </a></li>
                                <li class="breadcrumb-item active">Categoría</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="my-4 row justify-content-end">
                <a href="{{ route('categorias.create') }}" class="col-2 btn-new">Nueva Categoría</a>

            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-body">
                            <table id="tablaCategorias"
                                   class="table table-bordered dt-responsive nowrap table-striped align-middle"
                                   style="width:100%">
                                <thead>
                                <tr>
                                    <th scope="col" style="width: 10px;">
                                        <div class="form-check">
                                            <input class="form-check-input fs-15" type="checkbox" id="checkAll"
                                                   value="option">
                                        </div>
                                    </th>
                                    <th data-ordering="false">ID</th>
                                    <th data-ordering="false">Categoria</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categorias as $categoria)
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll"
                                                       value="option1">
                                            </div>
                                        </th>
                                        <td>{{$categoria->id}}</td>
                                        <td>{{$categoria->name}}</td>
                                        <td class="d-flex justify-content-between">
                                            <a class="edit-item-btn"><i
                                                    class="ri-pencil-fill align-bottom me-2"></i> Editar</a>

                                            <a class="remove-item-btn">
                                                <i class="ri-delete-bin-fill align-bottom me-2 "></i> Borrar
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

        </div>
        <!-- container-fluid -->
    </div>

@endsection


