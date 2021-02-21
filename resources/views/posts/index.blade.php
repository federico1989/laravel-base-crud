<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel struttura</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>
        <a href="{{ route('posts.create') }}">Create new post</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>TITLE</th>
                    <th>BODY</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
            @foreach($posts as $value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->title}}</td>
                <td>{{$value->body}}</td>
                <td>
                    <a href="">View</a>
                    <a href="">Edit</a>
                    <a href="">Delete</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        
        </table>
 
    </body>
</html>