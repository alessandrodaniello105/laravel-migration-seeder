<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Laravel Migration Seeder</title>

    <!-- Styles -->
    @vite('resources/js/app.js')
</head>
<body>
    <div class="container my-3">

        <table class="table">

            <thead>
              <tr>
                <th scope="col">Stazione di Partenza</th>
                <th scope="col">Orario di Partenza</th>
                <th scope="col">Stazione di Arrivo</th>
                <th scope="col">Orario di Arrivo</th>
                <th scope="col">Giorno di Partenza</th>
                {{-- <td scope="col">Azioni</td> --}}
              </tr>
            </thead>

            <tbody>

                @foreach ($trains as $train)
                <tr>
                    <td>{{$train->departure_station}}</td>
                    <td>{{$train->departure_time}}</td>
                    <td>{{$train->arrival_station}}</td>
                    <td>{{$train->arrival_time}}</td>
                    <td>{{$train->departure_date}}</td>
                    {{-- <td>Azioni</td> --}}
                </tr>
                @endforeach

            </tbody>
          </table>

    </div>
</body>
</html>
