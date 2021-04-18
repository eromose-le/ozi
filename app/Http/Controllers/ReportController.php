<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        // Fetch Campaign Table into Different Variables && GET only 1 Query from DB
        $campaign_single = Campaign::take(1)->latest()->get();

        
        // $campaigns = Campaign::orderBy('updated_at','desc')->paginate(2);
        // Collect Current UserSession LOG from DB
        $campaigns = Campaign::where('user_id', auth()->user()->id)->orderBy('created_at','desc')->paginate(2);

        return view('report', [
            // Pass the Tables to View
            'campaigns' => $campaigns,
            'campaign_single' => $campaign_single,
        ]);
    }

    public function show($id)
    {
        $campaign_auth = Campaign::find($id);
        return view('admin.edit', ['campaign_auth'=>$campaign_auth]);
    }
}
