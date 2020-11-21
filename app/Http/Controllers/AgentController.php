<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function index()
    {
        $title = 'Danışmanlarımız';
        $agents = Agent::with('agency')->paginate(20);
        return view('agents_list', compact('agents', 'title'));
    }

    public function show(Request $request)
    {
        $title = 'Danışman Bilgileri';
        $agent = Agent::where('USER_ID', $request->id)->with(Agent::relationships())->firstOrFail();
        $products = $agent->products()->paginate(10);
        return view('agents_profile', compact('agent', 'products', 'title'));
    }

}
