<?php

namespace App\Http\Controllers;

use App\Models\ActionLog;

class ActionLogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $actionLogs = ActionLog::orderBy('action_time', 'desc')->paginate(20);
        return view('action_logs.index', compact('actionLogs'));
    }
}