<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>

<body>

    <div class="content">
        @section('content')
            <h1>Contact</h1>


            @if($email)
                <p>{{$email}}</p>
            @else
                <p>No email address given</p>
            @endif

    </div>

</body>

</html>
