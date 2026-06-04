<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Exports\CategoriesExport;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;
class CategoryController extends Controller
{
  public function index()
{
    $categories = Category::all();

    return view('categories.index', compact('categories'));
}

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'category' => 'required|max:255',
        ]);

        Category::create($data);

        return redirect()->route('categories.index');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $data = $request->validate([
            'category' => 'required|max:255',
        ]);

        $category->update($data);

        return redirect()->route('categories.index');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('categories.index');
    }
    public function export()
{
    return Excel::download(
        new CategoriesExport,
        'data_kategori.xlsx'
    );
}

public function print()
{
    $categories = Category::all();

    $pdf = Pdf::loadView(
        'categories.print',
        compact('categories')
    );

    return $pdf->stream('kategori.pdf');
}
}