<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  /**
   * Create a new AuthController instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware(['auth:admins', 'jwt.auth'])->except(['show', 'index']);
  }
  public function index()
  {
    $users = User::paginate(20);

    $users = UserResource::collection($users)->response()->getData(True);

    return response()->json([
      'success' => 'true',
      'data' => $users,
      'message' => null
    ]);
  }
  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $user = User::where('id', $id);
    if ($user->exists()) {
      return response()->json([
        'success' => 'true',
        // 'data' => $user->get(),
        'data' => new UserResource($user->first()),
        'message' => null,
      ]);
    } else {
      return response()->json([
        'success' => 'false',
        'data' => $user,
        'message' => "Not found"
      ]);
    }
  }
  /**
   * update a User.
   *
   * @return \Illuminate\Http\JsonResponse
   */
  public function update($id, Request $request)
  {
    $user = User::find($id);
    $user->name = $request->name ? $request->name : $user->name;
    $user->email = $request->email ? $request->email : $user->email;
    // $user->password = Hash::make($request->password);
    $user->phone = $request->phone ? $request->phone : $user->phone;
    $user->country_id = $request->country_id ? $request->country_id : $user->country_id;
    $user->address = $request->address ? $request->address : $user->address;

    $user->passport_no = $request->passport_no ? $request->passport_no : $user->passport_no;
    if ($request->has('avatar')) {
      if (file_exists(storage_path() . "/app/public/images/" . $user->avatar)) {
        if ($user->avatar) unlink(storage_path() . "/app/public/images/" . $user->avatar);
      }
      $file = $request->file('avatar');
      $filename = date('YmdHi') . $file->getClientOriginalName();
      $file->storeAs('public/images/', $filename);
      $user->avatar = $filename;
    }
    $user->save();
    /* $table->string('avatar')->nullabe()->default("######"); */

    return response()->json([
      'success' => 'true',
      'data' => new UserResource($user),
      'message' => 'User is updated',
    ], 201);
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $user = User::where('id', $id);
    if ($user->exists()) {
      if ($user->avatar) unlink(storage_path() . "/app/public/images/" . $user->avatar);
      $user->delete();
      return response()->json([
        'success' => 'true',
        'data' => [],
        'message' => "Successfully deleted",
      ]);
    } else {
      return response()->json([
        'success' => 'false',
        'data' => [],
        'message' => "Not found"
      ]);
    }
  }
}
