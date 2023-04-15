<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserFormRequest;

class AdminUserController extends Controller
{
    public function viewUser()
    {
        $users = User::Paginate(5);
        return view('pages.admin.user.view', compact('users'));
    }

    public function addUser()
    {
        return view('pages.admin.user.add-user');
    }

    public function storeUser(UserFormRequest $request)
    {
        $user = array(
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        );

        User::create($user);
        return redirect('dashboard/user/view')->with('success', 'User added successfully');
    }

    public function deleteUser($id)
    {
        $user = User::where('id', $id)->delete();
        return back()->with('success', 'User Deleted successfully');
    }
}
