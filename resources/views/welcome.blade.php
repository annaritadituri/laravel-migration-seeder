<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trains</title>
    @vite('resources/js/app.js')
</head>

<body>

    <h1 class="text-center my-5">Treni in partenza oggi</h1>

    @if (count($trains) == 0)
        <p class="text-center">Non ci sono treni in partenza nella data di oggi</p>
    @else
        <div class="container">
            <div class="row">

                @foreach ($trains as $train)

                    <div class="col-4">

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Codice treno: {{ $train->codice_treno }}</h5>
                                <p class="card-text">Azienda: {{ $train->azienda }}</p>
                                <p class="card-text">Partenza: {{ $train->stazione_partenza }} - {{ $train->partenza}}</p>
                                <p class="card-text">Arrivo: {{ $train->stazione_arrivo }} - {{ $train->arrivo}}</p>
                                <p class="card-text">Carrozze: {{ $train->carrozze }}</p>
                            </div>
                        </div>

                    </div>
                    
                @endforeach
                
            </div>
        </div>
    @endif
    

</body>

</html>
