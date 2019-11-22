<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Auth\Report;

/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $reports = Report::where("status", 1)->limit(15);


        $data = [
            'pending' => Report::where("status", 1)->count(),
            'solved' => Report::where("status", 2)->count(),
            'total' => Report::count()
        ];

        return view('backend.dashboard',compact('reports', 'data'));
    }
}
