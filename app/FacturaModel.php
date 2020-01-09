<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FacturaModel extends Model
{
    protected $table = 'control_facturas' ;

    public function cliente(): BelongsTo
    {
        return $this->belongsTo(ClienteModel::class);
    }

    public function vendedor(): BelongsTo
    {
        return $this->belongsTo(VendedorModel::class);
    }
}
