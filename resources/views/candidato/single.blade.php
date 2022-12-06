@extends('candidato.layouts.master')


@section('content')

		<!-- start banner Area -->
        <section class="banner-area relative" id="home">	
            <div class="overlay overlay-bg"></div>
            <div class="container">
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="about-content col-lg-12">
                        <h1 class="text-white">
                            Detalhes da Vaga				
                        </h1>	
                        <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#">  Detalhes da Vaga	</a></p>
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
                        <div class="single-post d-flex flex-row">
                            <div class="thumb" style="margin-right: 10px;">
                                <img width="80" src="{{$vaga->photo == null ? 'https://i.stack.imgur.com/cdCSj.jpg' : asset($vaga->photo) }}" alt="">
                            </div>
                            <div class="details">
                                <div class="title d-flex flex-row justify-content-between">
                                    <div class="titles">
                                        <a href="#"><h4>{{$vaga->name}}</h4></a>
                                        <h6>{{$vaga->company_name}}</h6>					
                                    </div>
                                    <ul class="btns" style="margin-left: 10px;">
                                        <li><a href="{{route('candidatura',$vaga->slug)}}">Aplicar para vaga</a></li>
                                    </ul>
                                </div>
                                <p>
                                    {{$vaga->short_description}}
                                </p>
                                <h5>Tipo:{{$vaga->type}}</h5>
                                <p class="address"><span class="lnr lnr-map"></span>{{$vaga->local}}</p>
                            </div>
                        </div>	
                        <div class="single-post job-details">
                            <h4 class="single-title">Requisitos para a vaga</h4>
                            {!!$vaga->long_description!!}
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

                        <div class="single-slidebar">
                            <h4>Categorias</h4>
                            <ul class="cat-list">
                                @foreach ($categories as $item)    
                                  <li><a class="justify-content-between d-flex" href="category.html"><p>{{$item->name}}</p></a></li>
                                @endforeach
                            </ul>
                        </div>

                     						

                    </div>
                </div>
            </div>	
        </section>
        <!-- End post Area -->
@endsection