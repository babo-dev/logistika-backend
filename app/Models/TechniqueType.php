<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechniqueType extends Model
{
  use HasFactory;

  protected $fillable = ['title'];

  public function techniques()
  {
    return $this->hasMany("App\Models\Technique", "technique_type_id", "id");
  }
}
