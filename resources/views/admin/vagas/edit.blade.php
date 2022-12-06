@extends('admin.layouts.master')

@section('content')

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Vagas</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Vagas</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <p>Actualizar Vagas</p>
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
                        Vaga actualizada com <strong>Sucesso</strong>! 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>  
                @elseif(Session::has('fail'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Upppps</strong> Erro ao actualizar vaga (Verifique o formato da imagem || .png ou .jpg)
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif


                <form action="{{route('vaga.update',$vaga->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" required name="name" value="{{$vaga->name}}">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" required name="company_name" value="{{$vaga->company_name}}">
                    </div>
                    <div class="mb-3">
                        <label for="">Logo da empresa</label>
                        <input type="file" accept="image/*" class="form-control" name="photo">
                    </div>
                    <div class="input-group mb-3">
                        <select name="type" class="form-select" aria-label="Default select example">
                            <option selected  value="{{$vaga->type}}">{{$vaga->type}}</option>
                            <option value="Presencial">Presencial</option>
                            <option value="Híbrido">Híbrido</option>
                            <option value="Remoto">Remoto</option>
                            <option value="Estágio">Estágio</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <select name="id_category" class="form-select">
                            <option selected  value="{{$vaga->categoria->id}}">{{$vaga->categoria->name}}</option>
                            @foreach ($categories as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="short_description" value="{{$vaga->short_description}}">
                    </div>
                    <div class="input-group mb-3">
                        <select name="local" class="form-select">
                            <option value="{{$vaga->local}}">{{$vaga->local}}</option>
                            <option value="Bengo">Bengo</option>
                            <option value="Benguela">Benguela</option>
                            <option value="Bié">Bié</option>
                            <option value="Cabinda">Cabinda</option>
                            <option value="Cuando-Cubango">Cuando-Cubango</option>
                            <option value="Cunene">Cunene</option>
                            <option value="Huambo">Huambo</option>
                            <option value="Huíla">Huíla</option>
                            <option value="Kwanza Sul">Kwanza Sul</option>
                            <option value="Kwanza Norte">Kwanza Norte</option>
                            <option value="Luanda">Luanda</option>
                            <option value="Lunda Norte">Lunda Norte</option>
                            <option value="Lunda Sul">Lunda Sul</option>
                            <option value="Malanje">Malanje</option>
                            <option value="Moxíco">Moxíco</option>
                            <option value="Namibe">Namibe</option>
                            <option value="Uíge">Uige</option>
                            <option value="Zaire">Zaire</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="basic-example">Descrição completa da vaga</label> <br>
                        <textarea name="long_description" id="basic-example" cols="30" rows="5">
                         {{$vaga->long_description}}
                        </textarea>
                    </div>
                    <button class="btn btn-primary" type="submit">Actualizar</button>
                </form>
            </div>
        </div>
        <div style="height: 100vh"></div>
    </div>
</main>

@endsection