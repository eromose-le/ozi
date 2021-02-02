<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Campaign;

class ShowController extends Controller
{
    //AUTHENTICATE LOGIN
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        // Fetch Campaign Table into Different Variables 
        $campaign_single = Campaign::take(1)->latest()->get();
        $campaigns = Campaign::orderBy('created_at','desc')->paginate(3);

        $campaign_auth = Campaign::orderBy('created_at','desc')->get();

        return view('admin.show', [
            // Pass the Tables to View
            'campaigns' => $campaigns,
            'campaign_single' => $campaign_single,
            'campaign_auth' => $campaign_auth
        ]);
    }

    public function delete($id)
    {
        $campaign_auth = Campaign::find($id);
        $campaign_auth->delete();
        return redirect('report');
    }

    public function show($id)
    {
        $campaign_auth = Campaign::find($id);
        return view('admin.edit', ['campaign_auth'=>$campaign_auth]);
    }

    public function update(Request $req)
    {
        // return $req->input();
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
        return redirect('report');
    }

}
