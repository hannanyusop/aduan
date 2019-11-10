<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use App\Models\Auth\Report;
use Illuminate\Http\Request;


class ReportController extends Controller
{

    public function index()
    {
        $reports = Report::get();

        return view('backend.auth.report.index',compact('reports'));
    }

    public function view($id){

        $report = Report::findOrFail($id);

        return view('backend.auth.report.view',compact('report'));
    }

    public function update(Request $request, $id){


        $report = Report::findOrFail($id);

        $report->response = $request->response;
        $report->status = ($request->has('done'))? 2 : 1;
        $report->user_id = auth()->user()->id;


        if($report->save()){
            return redirect()->route('admin.auth.report.index')->withFlashSuccess('Berjaya!');
        }

        return redirect()->route('admin.auth.report.view', $report->id)->withFlashDanger('Gagal!');


    }

}
