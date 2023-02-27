<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;

class OrdersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */

    protected $data;

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */

    public function collection()
    {
        //
    }

     /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings() :array
    {
        return [
            'Order Id',
            'Order Date',
            'Tota',
        ];
    }
}
