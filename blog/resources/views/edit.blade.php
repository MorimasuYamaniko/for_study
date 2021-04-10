<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Edit</title>
        <!-- Fonts -->
        <link href="https:/fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    
    <body>
        <h1>投稿を編集</h1>
        <form action='/posts/{{ $post->id }}' method="POST">
            @csrf
            @method('PUT')
            <div class="content__title">
                <h2>タイトル</h2>
                <input type='text' name='post[title]' value="{{ $post->title }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="body">
                <h2>本文</h2>
                <textarea type='text' name='post[body]'>{{ $post->body }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <input type="submit" value="update"/>
        </form>
        <div class="back">[<a href="/posts/{{ $post->id }}">もどる</a>]</div>
    </body>
</html>
