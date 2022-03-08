<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
  use HasFactory, HasTranslations;

  public $translatable = ["title", "description"];

  public $timestamps = false;
}
