<?php

// ProductExport.php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProductExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Product::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Buy Price',
            'Sell Price',
            'Stock',
            'Category ID',
            'Created At',
            'Updated At',
        ];
    }
}
