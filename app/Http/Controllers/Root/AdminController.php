<?php

namespace App\Http\Controllers\Root;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Campaign;

use Session;

class AdminController extends Controller
{
    //AUTHENTICATE LOGIN
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function ad_index()
    {
        // $campaigns = Campaign::orderBy('created_at','desc')->paginate(3);

        // ALL USER in DB
        $campaign_auth_ad = Campaign::orderBy('created_at','desc')->get();

        return view('admin.show', [
            // Pass the Tables to View
            'campaign_auth_ad' => $campaign_auth_ad
        ]); 
    }

    public function ad_delete($id)
    {
        $campaign_auth_ad = Campaign::find($id);
        $campaign_auth_ad->delete();
        return redirect()->back();
    }

    public function ad_show($id)
    {
        $campaign_auth_ad = Campaign::find($id);
        return view('admin.edit', ['campaign_auth_ad'=>$campaign_auth_ad]);
    }

    public function ad_update(Request $req)
    {
        Session::flash('flash_message', 'User Campagin Updated!');
	    Session::flash('flash_type', 'alert-info');
        
        // return $req->input();
        $campaign_auth_ad = Campaign::find($req->id);
        $campaign_auth_ad->recieved=$req->recieved;
        $campaign_auth_ad->sent=$req->sent;
        $campaign_auth_ad->total=$req->total;
        $campaign_auth_ad->status=$req->status;
        $campaign_auth_ad->progress=$req->progress;
        $campaign_auth_ad->progress2=$req->progress2;
        $campaign_auth_ad->actions=$req->actions;
        $campaign_auth_ad->actionsclass=$req->actionsclass;
        $campaign_auth_ad->save();
        return redirect()->back();
    }

}
