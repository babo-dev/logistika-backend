<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technique extends Model
{
  use HasFactory;

  // protected $guarded = [];

  protected $fillable = [
      "technique_type_id",
      "state_id",
      "title",
      "price", 
      "description",
      "owner"
  ];

  public function company()
  {
    return $this->belongsTo("App\Models\Company");
  }

  public function state()
  {
    return $this->belongsTo("App\Models\State");
  }

  public function technique_type()
  {
    return $this->belongsTo("App\Models\TechniqueType");
  }

  public function images()
  {
    return $this->hasMany("App\Models\Image", "owner_id", "id");
  }
}
