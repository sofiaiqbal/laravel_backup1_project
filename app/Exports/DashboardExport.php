<?php
namespace App\Exports;
use Illuminate\Support\Facades\Response;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\Models\FormUser;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\FromCollection;

class DashboardExport implements FromCollection, WithHeadings, WithStyles
{
    use Exportable;
    public function collection(): Collection
    {
        return FormUser::select('firstname', 'lastname','phonenumber','email','zipcode')->get(); 
       // $form_users = FormUser::all();
        //return $form_users;
    }
    public function headings(): array
    {
        return [
            'First Name',
            'Last Name',
            'Email',
            'Phone Number',
            'Zip Code'
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            'A1:B1' => [
                'font' => [
                    'bold' => true,
                ],
                'alignment' => [
                    'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                ],
            ],
        ];
    }
}
