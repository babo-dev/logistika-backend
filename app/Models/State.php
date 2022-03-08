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

  public function routes_source()
  {
    return $this->hasMany("App\Models\CustomRoute", "source", "id");
  }

  public function routes_destination()
  {
    return $this->hasMany("App\Models\CustomRoute", "destination", "id");
  }
}
