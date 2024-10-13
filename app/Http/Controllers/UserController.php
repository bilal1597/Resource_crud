<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collection = User::all();
        return view('/users', compact('collection'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add_user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required | email | unique:users,email',
            'password' => 'required | min:5',
            'password_confirm' => 'same:password',
            'age' => 'required | max:150',
            'city' => 'required'
        ]);
        $user = User::create($data);
        if ($user) {
            return redirect('/users')->with('User Succesfully added');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        return view('edit_user', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'age' => 'required | max:150',
            'city' => 'required'
        ]);
        $user = User::where('id', $request->id)->update($data);
        if ($user) {
            return redirect()->with('User is Successfully Updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        // $deleteUser = User::findOrfail($id);
        $user->delete();
        return redirect()->back()->with('User Successfully  Deleted');
    }
}
