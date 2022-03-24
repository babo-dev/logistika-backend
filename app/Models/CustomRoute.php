<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomRoute extends Model
{
  use HasFactory;

  protected $table = "routes";

  protected $fillable = [
    'date1',
    'date2',
    'car_body',
    'note',
    'source',
    'destination',
    'company_id',
  ];


  public function company()
  {
    return $this->belongsTo("App\Models\Company");
  }
}
