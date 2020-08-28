<html>
    <head>
        <title>Cars</title>
    </head>
    <body>
        <h1>Cars:</h1>
        @foreach ($cars as $car)
            <div>
                <a href="cars/{{$car->id}}">{{$car->title}}</a>
            </div>
        @endforeach
    </body>
</html>