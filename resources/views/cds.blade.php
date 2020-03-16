<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <title>Php Dischi</title>
</head>

<body>
    <div class="container">
        <header>
            <img src="http://pluspng.com/img-png/spotify-logo-png-open-2000.png" alt="">
        </header>
        <main>
            <div class="cd-container">
                @foreach ($covers as $cover)
                    <img src="{{$cover}}" alt="">
                @endforeach
                @foreach ($titles as $title)
                    <h3>{{$title}}</h3>
                @endforeach
                @foreach ($artists as $artist)
                    <small>{{$artist}}</small>
                @endforeach
            </div>
        </main>
    </div>
</body>

</html>