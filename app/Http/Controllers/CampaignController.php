<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;

class CampaignController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
         $campaigns = Campaign::get();

        return view('campaign', [
            'campaigns' => $campaigns
        ]);
    }
    
    public function store(Request $req)
    {

        // return Campaign::all();
        // dd('ok');
        // return $req->input();

        $this->validate($req, [
            'campaignname' => 'required|max:50',
            'campaignfile' => 'sometimes|file|max:9999',
            'campaignbody' => 'required|min:2',
            'campaigncsv' => 'sometimes|file|max:1999',
            'campaigndate' => 'required',
            'campaigntime' => 'required'
        ]);

        

        $req->user()->campaigns()->create([
            'campaignname' => $req->campaignname,
            'campaignbody' => $req->campaignbody,
            // 'campaignfile' => $req->campaignfile,
            'campaignnumbers' => $req->campaignnumbers,
            // 'campaigncsv' => $req->campaigncsv->file('campaigncsv')->store('public'),
            'campaigndate' => $req->campaigndate,
            'campaigntime' => $req->campaigntime,
        ]);


        // if (request()->hasFile( key: 'campaigncsv')) {
        //     $campaigncsv = request()->file(key: 'campaigncsv')->getClientOriginalName();
        //     request()->file(key: 'campaigncsv')->storeAs( path: 'campaigncsv', name: $campaigns->id . '/' . $campaigncsv, options: '');
        //     $campaigns->update(['campaigncsv' => $campaigncsv]);
        // }

        return redirect()->route('report');


        // return back();
        // Post::create([
        //     'user_id' => auth()->id(),
        //     'campaignname' => $req->campaignname,
        //     'campaignbody' => $req->campaignbody,
        //     'campaignnumbers' => $req->campaignnumbers,
        //     'campaigncsv' => $req->campaigncsv,
        //     'campaigndate' => $req->campaigndate,
        //     'campaigntime' => $req->campaigntime
        // ]);

        // dd('ok');
        // return $req->input();

        // return redirect()->route('payment');
    }
}
