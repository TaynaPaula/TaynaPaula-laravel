<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        //carregar a view
        return view ('users.index');
    }

    public function create()
    {
        //carregar a view
        return view ('users.create');
    }

    public function store(UserRequest $request)
    {
        //validar o formulário
        $request->validated();
    }
    

    public function sobre()
    {
        //carregar a view
        return view ('users.sobre');
    }
}




