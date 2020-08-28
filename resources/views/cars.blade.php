<html>
    <head>
        <title>Cars</title>
    </head>
    <body>
        @foreach ($cars as $car)
            <div>
                <h1>{{$car->title}}</h1>
                <p>{{$car->producer}}</p>
                <p>{{$car->number_of_doors}}</p>
            </div>
        @endforeach
    </body>
</html>