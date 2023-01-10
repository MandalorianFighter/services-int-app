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

                <div class="card-header">Ukraine</div>

                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Today</th>
                    <th scope="col">Confirmed Cases</th>
                    <th scope="col">Recovered Cases</th>
                    <th scope="col">Deaths</th>
                    </tr>
                </thead>
                <tbody> 
                    <tr> 
                    <td> {{ $today }} </td>
                    <td style="background-color: blue; color: white;"> {{ $confirmedCovidCases->Cases }} </td>
                    <td style="background-color: green; color: white;"> {{ $recoveredCovidCases->Cases }} </td>
                    <td style="background-color: black; color: white;"> {{ $deadCovidCases->Cases }} </td>
                    </tr>
                </tbody>
                </table>
                
            </div>
            </div>
            </div>

            </div>
        </div>
    </div>
</x-app-layout>