<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomRequest extends Model
{
  use HasFactory;

  /* protected $guard = []; */
  /**
   * The model's default values for attributes.
   *
   * @var array
   */
  protected $attributes = [
    // 'company' => '0',
    'status' => '0',
  ];

  protected $fillable = [
    'title',
    'date1',
    'date2',
    'weight_min',
    'weight_max',
    'cubm_min',
    'cubm_max',
    'budget_min',
    'budget_max',
    'cargo_type',
    'car_body',
    'note',
    'source',
    'destination',
    'status',
    'type',
    'barcode'
  ];

  protected $table = "requests";

  public function requestable()
  {
    return $this->morphTo();
  }

  // public function companies()
  // {
  //   return $this->hasManyThrough(Company::class, CompanyRequest::class, 'company_id', 'id', 'id', 'request_id');
  // }
  public function companies()
  {
    return $this->belongsToMany("App\Models\Company", "company_requests", 'request_id', 'company_id');
  }

  public function views()
  {
    return $this->belongsToMany("App\Models\Company", "request_views", 'request_id', 'company_id');
  }

  public function offers()
  {
    return $this->hasMany("App\Models\RequestAnswers", "request_id");
  }

  public function timelines()
  {
    return $this->hasMany("App\Models\Timeline", "request_id")->orderBy('status');
  }
}
