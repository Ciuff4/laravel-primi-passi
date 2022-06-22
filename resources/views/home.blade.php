<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>Home</title>
</head>
<body>
    <div class="container d-flex align-items-center flex-column">
        <p>Hello World</p>
        <nav class="w-100">
            <ul class="d-flex justify-content-evenly">
                @foreach ($nav as $nav_item)
                <li> {{$nav_item}}</li>
                @endforeach
            </ul>
        </nav>
    </div>
</body>
</html>