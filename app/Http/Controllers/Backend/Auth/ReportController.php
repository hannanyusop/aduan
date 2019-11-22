<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use App\Models\Auth\Report;
use Illuminate\Http\Request;


class ReportController extends Controller
{

    public function index(Request $request)
    {
        if($request->has('name')){


            if($request->status != ""){

                $reports = Report::where('name', 'like', "%$request->name%")
                    ->orWhere('email', 'like', "%$request->email%")
                    ->where("status", $request->status)
                    ->paginate(20);;
            }else{
                $reports = Report::where('name', 'like', "%$request->name%")
                    ->orWhere('email', 'like', "%$request->email%")
                    ->paginate(20);
            }

        }else{
            $reports = Report::paginate(20);
        }

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
