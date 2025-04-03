<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>

<body>
    <h1>{{$post->title}}</h1>
    <div>
        <a href="/posts/{{$post->id}}/edit">edit</a>
        <h3>
            本文
        </h3>
        <p> {{$post -> body}}</p>

    </div>
    <a href="/categories/{{$post->category->id}}">{{$post->category->name}}</a>

    <div>
        <a href="/">戻る</a>
    </div>
</body>