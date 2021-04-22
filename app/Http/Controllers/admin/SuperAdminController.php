<?php

namespace App\Http\Controllers\Admin\SuperAdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Campaign;
use App\Models\User;

use Session;

class SuperAdminController extends Controller
{
    //AUTHENTICATE LOGIN
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        // $campaigns = Campaign::orderBy('created_at','desc')->paginate(3);

        // ALL USER in DB
        $campaign_auth = Campaign::orderBy('created_at','desc')->get();

        $user_auth = User::orderBy('created_at','desc')->get();

        return view('admin.rootshow', [
            // Pass the Tables to View
            'campaign_auth' => $campaign_auth,
            'user_auth' => $user_auth
        ]);
    }

    public function delete($id)
    {
        $campaign_auth = Campaign::find($id);
        $campaign_auth->delete();

        $user_auth = User::find($id);
        $user_auth->delete();
        return redirect()->back();
    }

    public function show($id)
    {
        $campaign_auth = Campaign::find($id);
        $user_auth = User::find($id);
        return view('admin.rootedit', ['campaign_auth'=>$campaign_auth], ['user_auth'=>$user_auth]);
    }

    public function update(Request $req)
    {
        Session::flash('flash_message', 'Changes on User Updated!');
	    Session::flash('flash_type', 'alert-info');
        
        // return $req->input();
        $user_auth = User::find($req->id);
        $user_auth->role=$req->role;
        $user_auth->save();
        
        $campaign_auth = Campaign::find($req->id);
        $campaign_auth->recieved=$req->recieved;
        $campaign_auth->sent=$req->sent;
        $campaign_auth->total=$req->total;
        $campaign_auth->status=$req->status;
        $campaign_auth->progress=$req->progress;
        $campaign_auth->progress2=$req->progress2;
        $campaign_auth->actions=$req->actions;
        $campaign_auth->actionsclass=$req->actionsclass;
        $campaign_auth->save();
        return redirect()->back();
    }

}
