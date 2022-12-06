@extends('candidato.layouts.master')


@section('content')

		<!-- start banner Area -->
        <section class="banner-area relative" id="home">	
            <div class="overlay overlay-bg"></div>
            <div class="container">
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="about-content col-lg-12">
                        <h1 class="text-white">
                            Candidatura				
                        </h1>	
                        <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#">  Candidatura	</a></p>
                    </div>											
                </div>
            </div>
        </section>
        <!-- End banner Area -->	
            
        <!-- Start post Area -->
        <section class="post-area section-gap">
            <div class="container">
                <div class="row justify-content-center d-flex">
                    <div class="col-lg-8 post-list">
                        @if (Session::has('success'))                            
                        <p class="alert alert-success">
                            Candidatura feita com sucesso!
                        </p>
                        @elseif(Session::has('fail'))
                        <p class="alert alert-danger">
                            Não foi possível processar a candidatura!
                        </p>
                        @endif

                        <div class="single-post d-flex flex-row">
                            <div class="details">
                                <form action="{{route('store.candidatura')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="vaga_id" value="{{$vaga->id}}">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nome completo</label>
                                        <input disabled type="text" class="form-control" id="exampleFormControlInput1" value="{{Auth::user()->name}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">E-mail</label>
                                        <input disabled type="email" class="form-control" id="exampleFormControlInput1" value="{{Auth::user()->email}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Currículo</label>
                                        <input type="file" required name="curriculo" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                    <button class="btn btn-primary" type="submit">Enviar Candidatura</button>
                                </form>
                            </div>
                        </div>	    														
                    </div>
                    <div class="col-lg-4 sidebar">
                    

                        <div class="single-slidebar">
                            <h4>Outras Oportunidades</h4>
                            <div class="active-relatedjob-carusel">

                                @foreach ($vagas3 as $item)
                                    <div class="single-rated">
                                        <img class="img-fluid" src="img/r1.jpg" alt="">
                                        <a href="single.html"><h4>{{$item->name}}</h4></a>
                                        <h6>{{$item->company_name}}</h6>
                                        <p>
                                            {{$item->description}}
                                        </p>
                                        <h5>Tipo:{{$item->type}}</h5>
                                        <p class="address"><span class="lnr lnr-map"></span> {{$item->local}}</p>
                                        <a href="{{route('single.vaga',$item->slug)}}" class="btns text-uppercase">Aplicar</a>
                                        
        
                                    </div>
                                @endforeach                           
																	
                            </div>
                        </div>							

                    </div>
                </div>
            </div>	
        </section>
        <!-- End post Area -->

@endsection