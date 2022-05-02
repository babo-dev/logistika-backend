<?php

namespace App\Models;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable implements JWTSubject
{
  use Notifiable;
  use HasFactory;

  protected $guard = 'users';

  protected $guarded = [];
  /* protected $fillable = [ */
  /*    'name', */
  /*    'email', */
  /*    'password', */
  /*    'phone', */
  /*    'country', */
  /* ]; */

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

  public function own_requests()
  {
    return $this->morphMany(CustomRequest::class, 'requestable');
    // return $this->hasMany("App\Models\CustomRequest");
  }

  public function images()
  {
    return $this->hasMany("App\Models\Image", "owner_id", "id");
  }
  public function country()
  {
    return $this->belongsTo("App\Models\Country");
  }
}
