@extends('admin.layouts.master')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">Candidaturas Recebidas</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <div>  
                            <button class="btn btn-light">{{$total_candidaturas}}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Lista de candidatos
                @if (Session::has('message'))
                    <p class="alert alert-info">{{session('message')}}</p>
                @endif
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Nome do candidato</th>
                            <th>E-mail</th>
                            <th>Telefone</th>
                            <th>Vaga</th>
                            <th>Empresa</th>
                            <th>Currículo</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($candidaturas as $item)  
                            <tr>
                                <td>{{$item->user->name}}</td>
                                <td>{{$item->user->email}}</td>
                                <td>{{$item->user->telefone}}</td>
                                <td>{{$item->vaga->name}}</td>
                                <td>{{$item->vaga->company_name}}</td>
                                <td>
                                    <form action="{{route('admin.download')}}" method="post">
                                        @csrf
                                        <input type="hidden" value="{{$item->curriculo}}" name="path">
                                        <input type="hidden" value="{{$item->id}}" name="id_candidatura">
                                        <button type="submit" class="btn btn-secondary">Download<i style="margin-left: 5px;" class="fas fa-download"></i></button>
                                    </form> 
                                </td>
                            </tr>
                        @endforeach
                                            
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection