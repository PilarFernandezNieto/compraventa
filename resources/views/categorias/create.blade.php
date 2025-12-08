@extends('layouts.app')

@section('title', 'Panel de control')



@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Nueva Categoría</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                <li class="breadcrumb-item active">Starter</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-6">
                                    <form action="{{ route('categorias.store') }}" method="POST" novalidate class="my-5">
                                        @csrf

                                        <!-- Campo Nombre -->
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Nombre</label>
                                            <input type="text"
                                                   class="form-control @error('name') is-invalid @enderror"
                                                   id="name"
                                                   name="name"
                                                   value="{{ old('name') }}"
                                                   placeholder="Nombre de la categoría"
                                                   required>
                                            @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Campo Descripción -->
                                        <div class="mb-3">
                                            <label for="description" class="form-label">Descripción</label>
                                            <textarea class="form-control @error('description') is-invalid @enderror"
                                                      id="description"
                                                      name="description"
                                                      rows="3"
                                                      placeholder="Descripción opcional">{{ old('description') }}</textarea>
                                            @error('description')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="text-end">
                                            <button type="submit" class="btn btn-primary">Crear Categoría</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->
            </div><!-- end row -->

        </div>
        <!-- container-fluid -->
    </div>

@endsection



<!--end row-->
