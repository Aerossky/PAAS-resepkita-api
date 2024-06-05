<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Ramsey\Uuid\Uuid;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = User::all();
        return view('admin.user.user', compact('user'));
    }

    public function totalUser()
    {
        $totalUsers = User::count();
        Session::put('totalUsers', $totalUsers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.user-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:5|max:50',
        ]);

        $validatedData = $validator->validated();
        $validatedData['role_id'] = 2;
        $apiKey = Uuid::uuid4()->toString();
        $validatedData['api_key'] = $apiKey;
        User::create($validatedData);
        $this->totalUser();

        return redirect()->route('user.index')->with('status', 'Data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // $user = User::findOrFail($id);
        // return view('admin.user.user-detail', ['user' => $user]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.user-edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        if ($request->email !== $user->email) {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|unique:users,email',
                'password' => 'nullable|min:5|max:50',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
        } else {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required',
                'password' => 'nullable|min:5|max:50',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
        }

        $password = !empty($request->password) ? Hash::make($request->password) : $user->password;

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $password,
        ]);

        return redirect()->route('user.index')->with('success', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        $this->totalUser();

        return redirect()->route('user.index');
    }
}
