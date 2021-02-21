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
        <form action="{{ route('posts.store') }}" method="post">
            @csrf
            <div class="form-group">
              <label for="title"></label>
              <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="form-group">
              <label for="body"></label>
              <input type="text" name="body" id="body" class="form-control" rows="3">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
 
    </body>
</html>
