<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\TechniqueResource;
use App\Models\Technique;

class TechniqueController extends Controller
{
  public function technique_accept($id)
  {
    $techniques = Technique::where('id', $id);
    if ($techniques->exists()) {
      $technique = $techniques->get()->first();
      $technique->accepted = $technique->accepted == false ? true : false;
      $technique->save();
      return response()->json([
        'success' => 'true',
        'data' => new TechniqueResource($technique),
        'message' => null,
      ]);
    } else {
      return response()->json([
        'success' => 'false',
        'data' => $techniques,
        'message' => "Not found"
      ]);
    }
  }
}
