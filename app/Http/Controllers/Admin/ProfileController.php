<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Visiting;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'mobile' => ['required'],
        ])->validate();
        if ($request->email != auth()->user()->email) {
            Validator::make($request->all(), [
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            ])->validate();
        }else {
            Validator::make($request->all(), [
                'email' => ['required', 'string', 'email', 'max:255'],
            ])->validate();
        }
        if ($request->password != null || $request->password != '') {
            Validator::make($request->all(), [
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ])->validate();

            User::where('id',auth()->user()->id)->update([
                'password' => Hash::make($request->password),
            ]);
        }
        User::where('id',auth()->user()->id)->update([
            'name'=>$request->name,
            'mobile'=>$request->mobile,
            'email'=>$request->email,
        ]);
        return redirect()->back()->with('success','Profile Updated.');
    }

    public function getCustomerFromContact(Request $request)
    {
        $user=Visiting::where('reference_no',$request->mobile)->first();
        return response()->json(['user'=>$user]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
