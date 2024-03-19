@extends('layouts.master')

@section('title')
    Home
@endsection

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>

    <body>
        <div>
            <h1>hello {{ $nom }}</h1>
            <h3>Cours : </h3>
            <table border="10px" width="100%">
                <tr>
                    <th>Cours : </th>
                </tr>
                @foreach ($language as $languag)
                    <tr>
                        <td>{{ $languag }}</td>
                    </tr>
                @endforeach

            </table>
        </div>
    </body>

    </html>
@endsection
