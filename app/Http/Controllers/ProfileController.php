<?php

namespace App\Http\Controllers;

use DB;
use App\Http\AuthTraits\OwnsRecord;
use Illuminate\Http\Request;
use App\Profile;
use App\User;
use App\Http\Requests;
use Redirect;

use Illuminate\Support\Facades\Auth;

use App\Exceptions\UnauthorizedException;

class ProfileController extends Controller
{
    use OwnsRecord;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin',['only'=> 'index']);
    }
    
    public function index()
    {
        $profiles = Profile::paginate(10);
        return view('profile.index', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function showProfileToUser()
    {
        $profile = Profile::where('user_id', Auth::id())->first();
        if( ! $profile){
            return Redirect::route('profile.create');
        }
        $user = User::where('id', $profile->user_id)->first();
        if ($this->userNotOwnerOf($profile)){
            throw new UnauthorizedException;
        }
        return view('profile.show', compact('profile', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
