<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;

class BooksController extends Controller
{
    // menampilkan semuqa
    public function index(){
        return Books::all();
    }
    // menyimpan data
    public function create(request $request){
        $books = new Books;
        $books-> title = $request-> title;
        $books-> description = $request-> description;
        $books-> author = $request-> author;
        $books-> publisher = $request-> publisher;
        $books-> date__of_issue = $request-> date__of_issue;
        $books->save();

        return "Data berhasil masuk";
    }

    public function update(request $request, $id){
        $title = $request -> title;
        $description = $request-> description;
        $author = $request-> author;
        $publisher = $request-> publisher;
        $date__of_issue = $request-> date__of_issue;
      

        $books = Books::find($id);
        $books-> title = $request-> $title;
        $books-> description = $request-> $description;
        $books-> author = $request-> $author;
        $books-> publisher = $request-> $publisher;
        $books-> date__of_issue = $request-> $date__of_issue;
        $books->save();

        return "Data berhasil di update";
    }

    public function delete($id){
        $books = Books::find($id);
        $books -> delete();

        return "Data berhasil di hapus";
    }
}
