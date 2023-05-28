<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>HEY</h1>
    <div class="card" style="width: 18rem;">
        <!-- <img src="..." class="card-img-top" alt="..."> -->
        <div class="card-body">
            <!-- <p class="card-text">{{$date}}</p> -->
            @foreach ($date as $row)
            <p>
            {{$row->id}}
            {{$row->title}}
            </p>
            @endforeach
        </div>
    </div>
</body>
</html>