<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Blog </title>
    <style>
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }

        tr:nth-child(even) {
        background-color: #dddddd;
        }

        .pagination li {
            color:black;
            float:left;
            padding:8px 16px;
            transition: background-color-.3s;
            list-style-type:none;

        }
        .pagination li: hover{
            background:pink;
        }
    </style>
</head>
<body>

<table>

<tr>
 <th> Id </th>
 <th> Title </th>
 <th> Content </th>
 <th> Action </th>
</tr>
<h1> Article </h1>
<a href="/blog/create"> Add Article </a>
@foreach($articles as $article)
<tr>
 <td> {{ $article->id }} </td>
 <td> {{ $article->title }} </td>
 <td> {{ $article->content }} </td>
 <td> 
   <a href="/blog/{{$article->id}}">  View </a>  |
   <a href="/blog/{{$article->id}}/edit"> Edit </a>

   <form action="/blog/{{$article->id}}" method="POST">
   @csrf
   @method("DELETE")
     <input type="submit" name="submit" value ="Delete">
   </form>
 </td>

</tr>
@endforeach

</table>

{{ $articles->links() }}

</body>
</html>