<?php

namespace App\Models;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;

class Company extends Authenticatable implements JWTSubject
{
  use Notifiable, HasFactory, HasTranslations;

  protected $guard = 'companies';

  protected $guarded = [];

  public $translatable = ["description"];

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
    return $this->belongsToMany(CustomRequest::class, 'company_requests', 'company_id', 'request_id');
  }

  public function own_requests()
  {
    return $this->morphMany(CustomRequest::class, 'requestable');
  }
  // public function requests()
  // {
  //   return $this->hasManyThrough(CustomRequest::class, CompanyRequest::class, 'request_id', 'id', 'id', 'company_id');
  // }
}
