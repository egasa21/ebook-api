<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{
    public function index(){
        return Author::all();
    }

    public function create(request $request){
        $author = new Author;
        $author -> name = $request-> name;
        $author -> date_of_birth = $request-> date_of_birth;
        $author -> gender = $request-> gender;
        $author -> email = $request-> email;
        $author -> hp = $request-> hp;
        $author -> save();

        return "data berhasil masuk";
    }

    public function update(request $request, $id){
        $name = $request-> name;
        $date_of_birth = $request-> date_of_birth;
        $gender = $request-> gender;
        $email = $request-> email;
        $hp = $request-> hp;

        $author = Author::find($id);
        $author -> name = $request-> name;
        $author -> date_of_birth = $request-> date_of_birth;
        $author -> gender = $request-> gender;
        $author -> email = $request-> email;
        $author -> hp = $request-> hp;

        return "data berhasil di update";
    }

    public function delete($id){
        $author = Author::find($id);
        $author->delete();

        return "Data berhasil di hapus";
    }
}
