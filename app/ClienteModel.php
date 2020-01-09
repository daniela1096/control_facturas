<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClienteModel extends Model
{
    protected $table = 'control_clientes' ;

    public function facturas(): HasMany
    {
        return $this->hasMany(FacturaModel::class);
    }
}
