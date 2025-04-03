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
            <a href="/categories/{{$post->category->id}}">{{$post->category->name}}</a>
            <p> {{$post -> body}}</p>

            <!-- 以下を追記 -->
            <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                @csrf
                @method('DELETE')
                <button type="button" onclick="deletePost({{ $post->id }})">delete</button>
            </form>

            @endforeach
        </div>
        <div>
            {{$posts->links()}}
        </div>


        <script>
            function deletePost(id) {
                'use strict'

                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </body>
    <div class="back">[<a href="/">back</a>]</div>

    </html>