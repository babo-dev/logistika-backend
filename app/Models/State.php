<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
  use HasFactory;

  protected $fillable = ['title', 'country_id'];
  public function country()
  {
    return $this->belongsTo("App\Models\Country");
  }

  public function requests_source()
  {
    return $this->hasMany("App\Models\CustomRequest", "source");
  }

  public function requests_destination()
  {
    return $this->hasMany("App\Models\CustomRequest", "destination");
  }
}
