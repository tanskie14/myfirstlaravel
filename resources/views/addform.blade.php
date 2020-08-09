<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Add Form </title>
</head>
<body>

<form action="/blog" method="POST">
    @csrf
    <input type="text" name= "title" placeholder="Title"> <br>
    <textarea  name="content"> </textarea> <br>
    <input type="submit" name="submit" value="submit">
</form>
    
</body>
</html>