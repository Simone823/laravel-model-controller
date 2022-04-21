<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
</head>
<body>

    {{-- Movies wrapper --}}
    <div class="movies_wrapper">

        @foreach ($movies as $element)
            {{-- Movie --}}
            <div class="movie">
                <h1 class="title">{{$element['title']}}</h1>
                <h3 class="original_title">{{$element['original_title']}}</h3>
                <p class="nationality">{{$element['nationality']}}</p>
                <p class="date">{{$element['date']}}</p>
                <p class="vote">{{$element['vote']}}</p>
            </div>
        @endforeach

    </div>
    
</body>
</html>