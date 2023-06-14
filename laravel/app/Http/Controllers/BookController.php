<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelBook;
use App\Models\User;

class BookController extends Controller
{
    private $objUser;
    private $objBook;

    public function __construct()
    {
        $this->objUser = new User();
        $this->objBook = new ModelBook();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Para ordenar de Forma crescente 
        // $book = $this->objBook->all()->sortBy('title');

        $book = $this->objBook->all();
        return view('index', compact('book'));

        // Vardump do Laravel = dd
        // dd($this->objUser);

        // Detalhes em Original
        // dd($this->objUser->all());

        // Relacionamentos
        // dd($this->objUser->find(1)->relBooks);

        // dd($this->objUser->find(1)->relUsers);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = $this->objUser->all();
        return view('create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cad = $this->objBook->create([
            'title' => $request->title,
            'pages' => $request->pages,
            'price' => $request->price,
            'id_user' => $request->id_user
        ]);
        if ($cad) {
            return redirect('books');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $book = $this->objBook->find($id);
        return view('show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
