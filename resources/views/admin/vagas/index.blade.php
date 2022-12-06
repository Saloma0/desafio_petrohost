@extends('admin.layouts.master')

@section('content')

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Vagas</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Vagas</li>
        </ol>
        {{-- Insertion to DB error --}}
        @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Vaga eliminada com <strong>Sucesso</strong>! 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>  
        @endif
        <div class="card mb-4">
            <div class="card-header">
                TODAS VAGAS
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome da vaga</th>
                            <th>Nome da empresa</th>
                            <th>Tipo de vaga</th>
                            <th>Breve descrição da vaga</th>
                            <th>Acções</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vagas as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->company_name}}</td>
                                <td>{{$item->type}}</td>
                                <td>{{$item->short_description}}</td>
                                <td>
                                    <a href="{{route('vaga.edit',$item->id)}}" class="btn btn-success">Editar <i class="fas fa-edit"></i></a>
                                    <a href="{{route('delete.vaga',$item->id)}}" class="btn btn-danger">Eliminar <i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div style="height: 100vh"></div>
    </div>
</main>

@endsection