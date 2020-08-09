<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class ArticlesController extends Controller
{
    //
    public function index(){
        //Show  mga articles
        $articles = Article::all();  // Display all Records
        $articles = Article::paginate(5);  // Paginate records
        // return $articles;
        return view("blog")->with("articles", $articles);
    }
    public function store(Request $request) {
        //process ng adding
        // process ng adding
        // echo $request->input("title");
        // 1st way
        // $article =  new Article;
        // $article->title = $request->input("title");
        // $article->content = $request->input("content");
        // $article->save();
        // 2nd way
        Article::create( ["title" => $request->title, "content" => $request->content] );

        echo "Successfully Added!";
    }
    public function create(){
       //show ng add form
       return view("addform");
    }
    public function show($id) {
        $article = Article::find($id);
        return view("show")->with("article",$article);
    }
    public function edit($id) {
         $article = Article::find($id);
         return view("edit")->with("article",$article);
    }
    public function update(Request $request, $id) {
        $article = Article::find($id);
        $article->title = $request->title;
        $article->content = $request->content;
        $article->save();

        echo "Successfully Updated!";
    }
    public function destroy($id){
        //Delete Record
        //1st Way
        // Article::destroy($id);

        //2nd way
        $article = Article::find($id);
        $article->delete();
        echo "Successfully Deleted!";
    }
}
