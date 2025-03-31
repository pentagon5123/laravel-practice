<!DOCTYPE html>
<<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>allBlog</title>
    </head>

    <body>
        <h1>Blog Name</h1>
        <a href="/posts/create">create</a>
        <div>
            @foreach($posts as $post)
            <h2>
                <a href="/posts/{{$post->id}}">
                    {{$post->title}}
                </a>
            </h2>
            <p> {{$post -> body}}</p>
            @endforeach
        </div>
        <div>
            {{$posts->links()}}
        </div>
    </body>

    </html>