<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Edit  </title>
</head>
<body>

<form action="/blog/{{$article->id}}" method="POST">
    @csrf
    @method("PUT")
    <input type="text" name= "title" placeholder="Title" value="{{$article->title}}"> <br>
    <textarea  name="content"> {{ $article->content }}  </textarea> <br>
    <input type="submit" name="submit" value="submit">
</form>
    
</body>
</html>