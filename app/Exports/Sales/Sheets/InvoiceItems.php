<?php

namespace App\Exports\Sales\Sheets;

use App\Abstracts\Export;
use App\Models\Sale\InvoiceItem as Model;

class InvoiceItems extends Export
{
    public function collection()
    {
        $model = Model::with(['invoice', 'item'])->usingSearchString(request('search'));

        if (!empty($this->ids)) {
            $model->whereIn('invoice_id', (array) $this->ids);
        }

        return $model->get();
    }

    public function map($model): array
    {
        $model->invoice_number = $model->invoice->invoice_number;
        $model->item_name = $model->item->name;

        return parent::map($model);
    }

    public function fields(): array
    {
        return [
            'invoice_number',
            'item_name',
            'quantity',
            'price',
            'total',
            'tax',
        ];
    }
}
