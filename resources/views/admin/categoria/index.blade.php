@extends('admin.layouts.master')

@section('content')

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Categorias</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Categorias</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <p>Adicionar Categoria</p>
                {{-- Input errors --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </div>
                @endif

                {{-- Insertion to DB error --}}
                @if (Session::has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Categoria adicionada com <strong>Sucesso</strong>! 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>  
                @elseif(Session::has('fail'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Upppps</strong> Erro ao adicionar categoria
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form action="{{route('store.category')}}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Nome da categoria">
                    </div>
                    <button class="btn btn-primary" type="submit">Adicionar</button>
                </form>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                TODAS CATEGORIAS
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Criado por</th>
                            <th>Acções</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->user->name}}</td>
                                <td>
                                    <button class="btn btn-success">Editar <i class="fas fa-edit"></i></button>
                                    <button class="btn btn-danger">Eliminar <i class="fas fa-trash"></i></button>
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