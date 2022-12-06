<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Minhas Candidaturas') }}
            </h2>

            <x-todas-vagas>{{ __('Visualizar Vagas') }}</x-todas-vagas>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
                @foreach ($candidaturas as $item)    
                <div class="card mt-4">            
                        <div class="card-body d-flex justify-content-between">
                            <div>
                                <a href="{{route('single.vaga',$item->vaga->slug)}}" style="font-weight: bolder;">{{$item->vaga->name}}</a>
                                <p class="mt-3">{{$item->vaga->short_description}}</p>
                            </div>

                            @if ($item->status == 1)
                             <button type="button" class="btn btn-secondary btn-lg" disabled>Visualizado</button>
                            @else
                            <button type="button" class="btn btn-secondary btn-lg" disabled>Aguardando avaliação</button>
                            @endif
                        </div>
                </div>
                @endforeach
                <br>
            </div>
        </div>
    </div>
</x-app-layout>
