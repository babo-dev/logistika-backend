<?php

namespace App\Models;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Authenticatable implements JWTSubject
{
  use Notifiable, HasFactory;

  protected $guard = 'companies';

  protected $guarded = [];

  /**
   * Get the identifier that will be stored in the subject claim of the JWT.
   *
   * @return mixed
   */
  public function getJWTIdentifier()
  {
    return $this->getKey();
  }

  /**
   * Return a key value array, containing any custom claims to be added to the JWT.
   *
   * @return array
   */
  public function getJWTCustomClaims()
  {
    return [];
  }

  public function routes()
  {
    return $this->hasMany("App\Models\CustomRoute");
  }

  public function request_answers()
  {
    return $this->hasMany("App\Models\RequestAnswers");
  }

  public function techniques()
  {
    return $this->hasMany("App\Models\Technique");
  }

  public function images()
  {
    return $this->hasMany("App\Models\Image", "owner_id", "id");
  }

  public function country()
  {
    return $this->belongsTo("App\Models\Country");
  }

  public function requests()
  {
    return $this->hasMany("App\Models\CustomRequest");
  }
}
