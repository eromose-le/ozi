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
            'campaignfile' => 'nullable|file|max:9999',
            'campaignbody' => 'required|min:2',
            'campaigncsv' => 'nullable|file|max:1999',
            // 'campaigndate' => 'required',
            // 'campaigntime' => 'required',
            'age1' => 'nullable',
            'age2' => 'nullable',
            'age3' => 'nullable',
            'crypto' => 'nullable',
            'fasion' => 'nullable',
            'inspirational' => 'nullable',
            'beauty' => 'nullable',
            'technology' => 'nullable'
            
        ]);

        // $file = $request->file('campaignfile');
        // $fileName = $file->getClientOriginalName();
        // $newName = Auth::user()->name . $fileName;
        // $request->file('campaignfile')->move("image/", $newName);
        // $campaigns->campaignfile = Str::slug($request->get('name')). $fileName;
        // $campaigns->save();
        // Auth::user()->name

        $req->user()->campaigns()->create([
            'campaignname' => $req->campaignname,
            'campaignbody' => $req->campaignbody,
            'campaignfile' => $req->campaignfile->store('user'),
            'campaignnumbers' => $req->campaignnumbers,
            'campaigncsv' => $req->campaigncsv,
            'campaigndate' => $req->campaigndate,
            'campaigntime' => $req->campaigntime,
            'age1' => $req->age1,
            'age2' => $req->age2,
            'age3' => $req->age3,
            'crypto' => $req->crypto,
            'fasion' => $req->fasion,
            'inspirational' => $req->inspirational,
            'beauty' => $req->beauty,
            'technology' => $req->technology,
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


