<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Covid-19') }}
        </h2>
    </x-slot>

    <div class="py-12">
        
                <div class="container">
                <div class="row">

                <div class="col-md-12">
                <div class="card">

                <div class="card-header">Privat Bank</div>

                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Currency</th>
                    <th scope="col">Today</th>
                    <th scope="col">Buy</th>
                    <th scope="col">Sale</th>
                    </tr>
                </thead>
                <tbody> 
                     
                @foreach($currencies as $cur)
                    <tr>
                    <th scope="row">{{ $cur->ccy }}</th>
                    <td> {{ $today }} </td>
                    <td> {{ $cur->buy }} </td>
                    <td> {{ $cur->sale }} </td>
                    </tr>
                @endforeach
                    
                </tbody>
                </table>
                
            </div>
            </div>
            </div>

            </div>
        </div>
    </div>
</x-app-layout>