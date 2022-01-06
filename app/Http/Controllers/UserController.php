<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Arr;
use DB;
use Hash;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /*** Display a listing of the resource.**
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = User::orderBy('id', 'DESC')->paginate(5);
        return view('user.show_users', compact('data'))->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /*** Show the form for creating a new resource.**
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name', 'name')->all();
        return view('user.add_users', compact('roles'));
    }

    /*** Store a newly created resource in storage.**
     * @param \Illuminate\Http\Request $request *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles_name' => 'required',
            'rate' => 'required'
        ]);

        $input = $request->all();




        $user = User::create([
            'name'=> $request->name,
            'email' => $request->email,
            'password' =>  $input['password'] = Hash::make($input['password']),
            'roles_name' => $request->roles_name,
            'rate' => $request->rate,
            'status' => $request->status,
        ]);
        $user->assignRole($request->input('roles_name'));
        return redirect()->route('users.index')
            ->with('add','User added successful');
    }

    /*** Display the specified resource.** @param int $id * @return \Illuminate\Http\Response */
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show', compact('user'));
    }

    /*** Show the form for editing the specified resource.** @param int $id * @return \Illuminate\Http\Response */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name', 'name')->all();
        $userRole = $user->roles->pluck('name', 'name')->all();
        return view('user.edit', compact('user', 'roles', 'userRole'));
    }

    /*** Update the specified resource in storage.** @param \Illuminate\Http\Request $request * @param  int  $id* @return \Illuminate\Http\Response */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'roles' => 'required',
            'rate' => 'required',
        ]);
        $input = $request->all();
        if(!empty($input['password'])){
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));
        }
        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();
        $user->assignRole($request->input('roles'));
        return redirect()->route('users.index')
            ->with('success','Update done successful');
    }

    /*** Remove the specified resource from storage.** @param int $id * @return \Illuminate\Http\Response */
    public function destroy(Request $request)
    {
        $id = $request->user_id;
        User::find($id)->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully');
    }
}
