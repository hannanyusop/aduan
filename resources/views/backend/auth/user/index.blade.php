<?php
$links = [
    'Utama' => '',
    'Pengurusan Staff' => '',
    'Senarai' => route('admin.auth.user.index')
];
?>
@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <form method="get">
                        <div class="form-row align-items-center">
                            <div class="col-auto">
                                <label class="sr-only" for="name">EMAIL/NAMA PENGADU</label>
                                <input type="text" name="name" class="form-control mb-2" value="{{ (request()->has('name'))? request('name') : "" }}" id="name" placeholder="EMAIL/NAMA PENGADU">
                            </div>
                            <div class="col-auto">
                                <label class="sr-only" for="status">STATUS</label>
                                <select class="custom-select form-control mb-2" name="status">
                                    <option value="">SEMUA</option>
                                    <option value="1" {{ (request()->has('status'))? (request('status') == 1)? "SELECTED" : "" : "" }}>BELUM</option>
                                    <option value="2" {{ (request()->has('status'))? (request('status') == 2)? "SELECTED" : "" : "" }}>SELESAI</option>
                                </select>
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary waves-effect waves-light mb-2">Submit</button>
                            </div>
                        </div>
                    </form>

                </div> <!-- end card-body -->
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-widgets">
                        <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                        <a data-toggle="collapse" href="#cardCollpase3" role="button" aria-expanded="false" aria-controls="cardCollpase3"><i class="mdi mdi-minus"></i></a>
                    </div>
                    <h4 class="header-title mb-0">Senarai Staff</h4>

                    <div id="cardCollpase3" class="collapse pt-3 show">
                        <div class="table-responsive">
                            <table class="table table-centered table-hover mb-0">
                                <thead>
                                <tr>
                                    <th>Nama Penuh</th>
                                    <th>Email</th>
                                    <th>Disahkan</th>
                                    <th>Peranan</th>
                                    <th>Kali Terakhir Dikemaskini</th>
                                    <th style="width: 82px;"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->full_name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>@include('backend.auth.user.includes.confirm', ['user' => $user])</td>
                                        <td>{{ $user->roles_label }}</td>
                                        <td>{{ $user->updated_at->diffForHumans() }}</td>
                                        <td>@include('backend.auth.user.includes.actions', ['user' => $user])</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            <div class="mt-3">
                                {{ $users->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
