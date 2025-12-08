@extends('layouts.app')

@section('content')
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
                                    <input class="form-check-input fs-15" type="checkbox" id="checkAll" value="option">
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
@endsection


