<?php
 $links = [
     'Utama' => ''
 ];
?>
@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card-box bg-pattern">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-md bg-blue rounded">
                            <i class="fe-layers avatar-title font-22 text-white"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-right">
                            <h3 class="text-dark my-1"><span data-plugin="counterup">{{ $data['pending'] }}</span></h3>
                            <p class="text-muted mb-0 text-truncate">Belum Selesai</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-box bg-pattern">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-md bg-success rounded">
                            <i class="fe-award avatar-title font-22 text-white"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-right">
                            <h3 class="text-dark my-1"><span data-plugin="counterup">{{ $data['solved'] }}</span></h3>
                            <p class="text-muted mb-0 text-truncate">Selesai</p>
                        </div>
                    </div>
                </div>
            </div> <!-- end card-box-->
        </div> <!-- end col -->
        <div class="col-md-4">
            <div class="card-box bg-pattern">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-md bg-danger rounded">
                            <i class="fe-delete avatar-title font-22 text-white"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-right">
                            <h3 class="text-dark my-1"><span data-plugin="counterup">{{ $data['total'] }}</span></h3>
                            <p class="text-muted mb-0 text-truncate">Jumlah Aduan</p>
                        </div>
                    </div>
                </div>
            </div> <!-- end card-box-->
        </div> <!-- end col -->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-widgets">
                        <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                        <a data-toggle="collapse" href="#cardCollpase3" role="button" aria-expanded="false" aria-controls="cardCollpase3"><i class="mdi mdi-minus"></i></a>
                    </div>
                    <h4 class="header-title mb-0">Senarai Aduan Terkini</h4>

                    <div id="cardCollpase3" class="collapse pt-3 show">
                        <div class="table-responsive">
                            <table class="table table-centered table-hover mb-0">
                                <thead>
                                <tr>
                                    <th>E-mel</th>
                                    <th>No. Tel</th>
                                    <th>Tajuk</th>
                                    <th>Status</th>
                                    <th>Tarikh Aduan</th>
                                    <th style="width: 82px;"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($reports as $report)
                                    <tr>
                                        <td class="table-user">
                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">{{ $report->email }}</a>
                                        </td>
                                        <td>{{ $report->phone }}</td>
                                        <td>{{ $report->subject }}</td>
                                        <td>{!! ($report->status == 1)? '<b class="text-danger">Belum</b>' : '<b class="text-success">Selesai</b>' !!}</td>
                                        <td>{{ $report->created_at }}</td>
                                        <td>
                                            <a href="{{ route('admin.auth.report.view', $report->id) }}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
