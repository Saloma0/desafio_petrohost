@extends('candidato.layouts.master')


@section('content')


			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Todas as oportunidades		
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#"> Todas as oportunidades</a></p>
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
                            @foreach ($vagas as $item)      
                                <div class="single-post d-flex flex-row">
                                    <div class="thumb">
                                        <img width="80" src="{{$item->photo == null ? 'https://i.stack.imgur.com/cdCSj.jpg' : $item->photo }}" style="margin-right: 10px;" alt="">
                                    </div>
                                
                                        <div class="details">
                                            <div class="title d-flex flex-row justify-content-between">
                                                <div class="titles">
                                                    <a href="single.html"><h4>{{$item->name}}</h4></a>
                                                    <h6>{{$item->company_name}}</h6>					
                                                </div>
                                                <ul class="btns" style="margin-left:15px;">
                                                    <li><a href="{{route('single.vaga',$item->slug)}}" >Ver descrição</a></li>
                                                </ul>
                                            </div>
                                            <p>
                                                {{$item->short_description}}
                                            </p>
                                            <h5>Tipo:{{$item->type}}</h5>
                                            <p class="address"><span class="lnr lnr-map"></span> {{$item->local}}</p>
                                        </div>
                                </div>
                            @endforeach

                            {{ $vagas->links() }}
						</div>
						<div class="col-lg-4 sidebar">
							<div class="single-slidebar">
								<h4>Categorias</h4>
								<ul class="cat-list">
                                    @foreach ($categories as $item)
									    <li><a class="justify-content-between d-flex" href="{{$item->id}}"><p>{{$item->name}}</p></a></li>
                                    @endforeach
								</ul>
							</div>
						</div>
					</div>
				</div>	
			</section>
			<!-- End post Area -->		
		
@endsection