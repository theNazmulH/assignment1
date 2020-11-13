<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .tweets{
            background: #ddd;
            padding: 25px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
<p>All tweets</p>

@foreach($tweets as $tweet)
<div class="tweets">
    {{ $tweet -> body}}
</div>

@endforeach
</body>
</html>
