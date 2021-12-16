<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax())
                {
                        return datatables()->of(user::all())
                                ->addColumn('name', function($data){
                                    return $data->name;
                                })
                                ->addColumn('mobile', function($data){
                                    return $data->mobile;
                                })
                                ->addColumn('actions', function($data){
                                    if ($data->id == 1) {
                                        return '<button type="button" class="btn btn-danger btn-sm" disabled>Delete</button>';
                                    }else{
                                        return '<a href="'.route('admin.user.show',$data->id).'" class="btn btn-danger btn-sm">Delete</a>';
                                    }
                                })
                                ->rawColumns(['name','mobile','actions'])
                                ->make(true);
                }
        return view('admin.user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            // 'email' => ['string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'mobile' => ['required'],
        ]);

        $user=User::create([
            'name' => $request->name,
            'mobile'=>$request->mobile,
            // 'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->assignRole('user');
        return redirect()->back()->with('success','User Created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $user->delete();
        return redirect()->back()->with('success','User Deleted.');

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
