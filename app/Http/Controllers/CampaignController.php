<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
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
            'campaignbody' => 'required|min:2',
            // 'campaignfile' => 'file',
            // 'campaigncsv' => 'file',
            'campaigndate' => 'required',
            'campaigntime' => 'required'
        ]);

        // dd($req->all());
        $uploaded_csv = null;
        $uploaded_file =null;
        if($req->hasFile('campaignfile')){
            $file = $req->file('campaignfile');
            $file_name = Str::random(10).time().Str::random(5);
            $file_ext = $file->getClientOriginalExtension();
            $filedestinationPath = 'uploads/documents/files';
            $file_to_upload = $file_name.'.'.$file_ext;
            $uploaded_file = $filedestinationPath .'/' . $file_to_upload;
            // $file->move($filedestinationPath, $file_to_upload);
            $file->storeAs($filedestinationPath, $file_to_upload, 'public');
        }
        
        if($req->hasFile('campaigncsv') ){
            $file = $req->file('campaignfile');
            
            $file_name = Str::random(10).time().Str::random(5);
            $file_ext = $file->getClientOriginalExtension();
            $csvDestinationPath = 'uploads/documents/csv';
            $csv_to_upload = $file_name.'.'.$file_ext;
            $uploaded_csv = $csvDestinationPath .'/'.$csv_to_upload;
            // $file->move($csvDestinationPath,$csv_to_upload);
            $file->storeAs($filedestinationPath, $file_to_upload, 'public');
            
        }

        $req->user()->campaigns()->create([
            'campaignname' => $req->campaignname,
            'campaignbody' => $req->campaignbody,
            'campaignnumbers' => $req->campaignnumbers,
            'campaignfile' => $uploaded_file,
            'campaigncsv' => $uploaded_csv,
            'campaigndate' => $req->campaigndate,
            'campaigntime' => $req->campaigntime,
            'age1' => $req->age1,
            'age2' => $req->age2,
            'age3' => $req->age3,
            'crypto' => $req->crypto,
            'fasion' => $req->fasion,
            'inspirational' => $req->inspirational,
            'beauty' => $req->beauty,
            'technology' => $req->technology
        ]);

        return redirect()->route('report');
    }
}


