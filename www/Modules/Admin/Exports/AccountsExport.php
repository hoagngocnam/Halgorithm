<?php

namespace Modules\Admin\Exports;

use App\Models\Account;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class AccountsExport implements FromView, ShouldAutoSize, WithStyles
{
    public function view(): View
    {
        return view('admin::exports.accounts', [
            'accounts' => Account::all()
        ]);
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('B2')->getFont()->setBold(true);
        return [
            // Style the first row as bold text.
            1 => [
                'font' => ['bold' => true],
                'fillType' => Fill::FILL_GRADIENT_LINEAR,
                'startColor' => ['argb' => Color::COLOR_RED],
            ],

            // Styling a specific cell by coordinate.
            'B2' => ['font' => ['italic' => true]],

            // Styling an entire column.
            'C' => ['font' => ['size' => 16]],
        ];
    }
}
