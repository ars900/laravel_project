<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Admin\Category\GroupRequest;
use App\Models\Group;
use App\Models\User;
use App\Models\Groupmemeber;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class GroupController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('group');
    }

    public function makegroup(GroupRequest $request){

        $add = Group::create(['user_id'=>Auth::user()->id,'name'=>$request->name]);


        $group = Group::all()
                ->where('user_id','=', Auth::user()->id);

        $users = User::all();

        return view('groupspage', ['group'=>$group, 'users'=>$users]);
    }


    public function gogroup(GroupRequest $request){

        $group =Group::where('name','=', $request->name);

        return view('groupspage')->with('group_list', $group);
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'groupid' => ['required|exists'],
            'userid' => ['required|exists'],
        ]);
    }
    public function  add_user(Request $request){


        $sel_user_id = User::find($request->userid);
        $sel_group_id = Group::find($request->groupid);

        if($sel_user_id ||  $sel_group_id ){


            $add_user = Groupmemeber::create([
                'groupid'=>$request->groupid,
                'userid'=>$request->userid
            ]);



            $select_user = Groupmemeber::find(28);
            dd( $select_user);


            $select_group = Group::all();

            return response()->json([
                'added'=>$add_user,
                'users'=>$select_user,
                'group'=>$select_group
            ]);

        }else{
            var_dump($request->userid);
            var_dump($request->groupid);
            var_dump('your id was false');
        }



//       $add_user = Groupmemeber::create([
//           'groupid'=>$request->groupid,
//           'userid'=>$request->userid
//       ]);
//        $all_member = User::select('users.*')
//            ->join('group', 'group.user_id', '=', $request->userid)
//            ->join('groupmember', 'groupmember.groupid', '=', $request->groupid)
//            ->get()
//            ->toArray();
//        dd($all_member);
//
//       $select_user = User::all();
//
//       $select_group = Group::all();
//
//        return response()->json([
//            'added'=>$add_user,
//            'users'=>$select_user,
//            'group'=>$select_group
//        ]);


    }
}
