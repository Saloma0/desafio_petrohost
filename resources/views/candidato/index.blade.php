@extends('candidato.layouts.master')


@section('content')
    
        <!-- start banner Area -->
        <section class="banner-area relative" id="home">	
            <div class="overlay overlay-bg"></div>
            <div class="container">
                <div class="row fullscreen d-flex align-items-center justify-content-center">
                    <div class="banner-content col-lg-12">
                        <h1 class="text-white">
                            <span>+1500</span> Vagas postadas por semana				
                        </h1>	
                        <form action="search.html" class="serach-form-area">
                            <div class="row justify-content-center form-wrap">
                                <div class="col-lg-4 form-cols">
                                    <input type="text" class="form-control" name="search" placeholder="O que você está procurando?">
                                </div>
                                <div class="col-lg-3 form-cols">
                                    <div class="default-select" id="default-selects">
                                        <select>
                                            <option value="1">Selecione a localidade</option>
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
                                </div>
                                <div class="col-lg-3 form-cols">
                                    <div class="default-select" id="default-selects2">
                                        <select>
                                            <option value="1">Todas Categorias</option>
                                            @foreach ($categories as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach

                                        </select>
                                    </div>										
                                </div>
                                <div class="col-lg-2 form-cols">
                                    <button type="button" class="btn btn-info">
                                      <span class="lnr lnr-magnifier"></span> Pesquisar
                                    </button>
                                </div>								
                            </div>
                        </form>	
                    </div>											
                </div>
            </div>
        </section>
        <!-- End banner Area -->	

        <!-- Start features Area -->
        <section class="features-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-feature">
                            <h4>Crie uma conta</h4>
                            <p>
                                Crie uma conta no nosso site para concorrer a vagas de emprego.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-feature">
                            <h4>Pesquise uma vaga</h4>
                            <p>
                                Procure pela oportunidade que você procura.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-feature">
                            <h4>Aplicar para vaga</h4>
                            <p>
                                Aplique para vaga enviando o seu melhor currículo.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-feature">
                            <h4>Notificação</h4>
                            <p>
                                Seja notificado por e-mail com o estado da sua candidatura.
                            </p>
                        </div>
                    </div>																		
                </div>
            </div>	
        </section>
        <!-- End features Area -->
        
        <!-- Start popular-post Area -->
        <section class="popular-post-area pt-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="active-popular-post-carusel">
                        @foreach ($vagas3 as $item) 
                            <div class="single-popular-post d-flex flex-row">
                                <div class="thumb">
                                    {{-- Imagem --}}
                                    <img style="width: 50px !important;" class="img-fluid" src=" {{$item->photo == null ? 'https://i.stack.imgur.com/cdCSj.jpg' : $item->photo }} " alt="">
                                    <a class="btns text-uppercase" href="{{route('single.vaga',$item->slug)}}">Aplicar</a>
                                </div>
                                <div class="details">
                                    <a href="#"><h4>{{$item->name}}</h4></a>
                                    <h6>{{$item->local}}</h6>
                                    <p>
                                        {{$item->short_description}}
                                    </p>
                                </div>
                            </div>																																							
                        @endforeach
                    </div>
                </div>
            </div>	
        </section>
        <!-- End popular-post Area -->
        
        <!-- Start feature-cat Area -->
        <section class="feature-cat-area pt-100" id="category">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-60 col-lg-10">
                        <div class="title text-center">
                            <h1 class="mb-10">Categorias de trabalho em destaque</h1>
                            <p>Quem está extremamente apaixonado por um sistema ecológico.</p>
                        </div>
                    </div>
                </div>						
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="single-fcat">
                            <a href="category.html">
                                <img src="{{asset('candidato/img/o1.png')}}" alt="">
                            </a>
                            <p>Contabilidade</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="single-fcat">
                            <a href="category.html">
                                <img src="{{asset('candidato/img/o2.png')}}" alt="">
                            </a>
                            <p>Programação</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="single-fcat">
                            <a href="category.html">
                                <img src="{{asset('candidato/img/o3.png')}}" alt="">
                            </a>
                            <p>T.I</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="single-fcat">
                            <a href="category.html">
                                <img src="{{asset('candidato/img/o4.png')}}" alt="">
                            </a>
                            <p>Mídia e Notícias</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="single-fcat">
                            <a href="category.html">
                                <img src="{{asset('candidato/img/o5.png')}}" alt="">
                            </a>
                            <p>Medicina</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="single-fcat">
                            <a href="category.html">
                                <img src="{{asset('candidato/img/o6.png')}}" alt="">
                            </a>
                            <p>Concurso Público</p>
                        </div>			
                    </div>																											
                </div>
            </div>	
        </section>
        <!-- End feature-cat Area -->
        
        <!-- Start post Area -->
        <section class="post-area section-gap">
            <div class="container">
                <div class="row justify-content-center d-flex">
                    <div class="col-lg-8 post-list">
                        <ul class="cat-list">
                            <li><a href="#">Presencial</a></li>
                            <li><a href="#">Híbrido</a></li>
                            <li><a href="#">Remoto</a></li>
                            <li><a href="#">Estágio</a></li>
                        </ul>
                        @foreach ($vagas5 as $item)
                            
                        <div class="single-post d-flex flex-row">
                            <div class="thumb">
                                {{-- imagem --}}
                                <img width="100" src="{{$item->photo == null ? 'https://i.stack.imgur.com/cdCSj.jpg' : $item->photo }}" alt="">
                            </div>
                            <div class="details">
                                <div class="title d-flex flex-row justify-content-between" style="margin: 10px;">
                                    <div class="titles">
                                        <a href="single.html"><h4>{{$item->name}}</h4></a>
                                        <h6>{{$item->company_name}}</h6>					
                                    </div>
                                    <div style="margin-left: 10px;">
                                        <ul class="btns">
                                            
                                            <li><a href="{{route('single.vaga',$item->slug)}}">Ver descrição</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <p style="margin: 10px;">
                                    {{$item->short_description}}
                                </p>
                                <h5>Tipo:{{$item->type}}</h5>
                                <p class="address"><span class="lnr lnr-map"></span> {{$item->local}}</p>
                            </div>
                        </div>

                        @endforeach

                        <a class="text-uppercase loadmore-btn mx-auto d-block" href="{{route('todas.vagas')}}">Ver mais vagas</a>

                    </div>
                    <div class="col-lg-4 sidebar">
                
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
