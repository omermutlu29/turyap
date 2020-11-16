<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function index()
    {
        $agents= Agent::with('agency')->get();
        return view('agents_list',compact('agents'));
    }

    public function show(Request $request)
    {
        $agent= Agent::where('USER_ID', $request->id)->with(Agent::relationships())->firstOrFail();
        return view('agents_profile',compact('agent'));
    }

    public function products(Request $request)
    {
        return Agent::where('USER_ID', $request->id)->with(Agent::relationships())->firstOrFail();

    }
}
