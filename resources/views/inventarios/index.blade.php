@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Inventarios</h1>
                    <a class="btn btn-primary" href="{{ route('imprimirInventario') }}">Export to PDF</a>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('inventarios.create') }}">
                        Agregar inventario
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            @include('inventarios.table')
        </div>
    </div>

@endsection
