<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VendedorModel extends Model
{
  protected $table = 'vendedores' ;

  public function facturas(): HasMany
  {
      return $this->hasMany(FacturaModel::class);
  }
}
