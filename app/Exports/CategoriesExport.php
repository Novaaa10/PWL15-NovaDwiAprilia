<?php

namespace App\Exports;

use App\Models\Category;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class CategoriesExport implements FromArray, WithHeadings, ShouldAutoSize
{
    public function array(): array
    {
        $data = [];
        $no = 1;

        foreach(Category::all() as $category){
            $data[] = [
                'no' => $no++,
                'category' => $category->category,
            ];
        }

        return $data;
    }

    public function headings(): array
    {
        return [
            'No',
            'Kategori'
        ];
    }
}