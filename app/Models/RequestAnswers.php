<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestAnswers extends Model
{
  use HasFactory;

  /**
   * The model's default values for attributes.
   *
   * @var array
   */
  protected $attributes = [
    'status' => '0',
    'note' => ''
  ];

  protected $fillable = [
    'company_id',
    'request_id',
    'price',
    'note',
    'status',
    'status_note',
  ];

  public function request()
  {
    return $this->belongsTo("App\Models\CustomRequest");
  }

  public function company()
  {
    return $this->belongsTo("App\Models\Company");
  }
}
