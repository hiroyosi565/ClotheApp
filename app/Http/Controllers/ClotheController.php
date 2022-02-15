<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClotheRequest;

use App\Clothe;

use App\Category;

class ClotheController extends Controller
{
    public function index(Clothe $clothe)
    {
    return view('/clothes/index')->with(['clothes' => $clothe->getPaginateByLimit()]);
    }
    
    public function show(Clothe $clothe)
    {
        return view('clothes/show')->with(['clothe' => $clothe]);
    }
    
    public function create(Category $category)
    {
        return view('clothes/create')->with(['categories' => $category->get()]);;
    }
    
    public function store(ClotheRequest $request, Clothe $clothe)
    {
        $input = $request['clothe'];
        $input += ['user_id' => $request->user()->id];
        $clothe->fill($input)->save();
        return redirect('/clothes/' . $clothe->id);
    }
    
    public function edit(Clothe $clothe, Category $category)
    {
        return view('clothes/edit')->with(['clothe' => $clothe, 'categories' => $category->get()]);
    }
    
    public function delete(Clothe $clothe)
    {
        $clothe->delete();
        return redirect('/');
    }
    
    public function update(ClotheRequest $request, Clothe $clothe)
    {
        $input_clothe = $request['clothe'];
        $input_clothe += ['user_id' => $request->user()->id];
        $clothe->fill($input_clothe)->save();
        return redirect('/clothes/' . $clothe->id);
    }
}
