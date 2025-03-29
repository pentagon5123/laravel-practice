<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>

<body>
    <h1>Blog name</h1>
    <div>
        @foreach($posts as $post)
        <h2>{{$post ->title}}</h2>
        <p> {{$post -> body}}</p>
        @endforeach
    </div>
    <div>
        {{$posts->links()}}
    </div>
</body>

</html>