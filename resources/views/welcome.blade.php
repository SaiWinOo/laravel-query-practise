<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Query Builder</title>
</head>
<body>
<div>
    <h1>I am welcome</h1>
    @foreach($dates as $date=>$posts)
            <h3>{{ $date  }}</h3>
            <ul>
                @foreach($posts as $post)
                    <li>
                        {{ $post->title  }} -  {{ $post->likes_count  }}
                    </li>
                @endforeach
            </ul>
    @endforeach

</div>
</body>
</html>
