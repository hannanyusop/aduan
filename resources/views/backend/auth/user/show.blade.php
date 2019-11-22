<?php
$links = [
    'Utama' => '',
    'Pengurusan Staff' => '',
    'Senarai' => route('admin.auth.user.index'),
    $user->last_name => ''
];
?>
@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-4 offset-4">
            <div class="card-box">
                <div class="media mb-3">
                    <img class="d-flex mr-3 rounded-circle avatar-lg" src="{{ $user->picture }}" alt="Generic placeholder image">
                    <div class="media-body">
                        <h4 class="mt-0 mb-1">{{ $user->full_name }}</h4>
                        <p class="text-muted">{{ $user->email  }}</p>
                        <p class="text-muted"><i class="mdi mdi-office-building"></i>MAIWP LABUAN</p>

                        <a href="javascript: void(0);" class="btn- btn-xs btn-info">Hantar E-mel</a>
                        <a href="javascript: void(0);" class="btn- btn-xs btn-secondary">Hubungi</a>
                        <a href="{{ route('admin.auth.user.edit', $user->id) }}" class="btn- btn-xs btn-secondary">Kemaskini</a>
                    </div>
                </div>

                <h5 class="mb-3 mt-4 text-uppercase bg-light p-2"><i class="mdi mdi-account-circle mr-1"></i> Personal Information</h5>
                <div class="">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Kali Terakhir Dikemaskini :</h4>
                    <p class="mb-3"> {{ (!is_null($user->last_login_at))? $user->updated_at->diffForHumans() : "" }}</p>

                    <h4 class="font-13 text-muted text-uppercase mb-1">Kali Terakhir Log Masuk Sistem :</h4>
                    <p class="mb-0"> {{ (!is_null($user->last_login_at))? $user->last_login_at->diffForHumans() : "" }}<br>
                        <span class="text-success font-weight-bold">IP Address :{{ $user->last_login_ip }}</span>
                    </p>

                </div>

            </div> <!-- end card-box-->
        </div>
    </div>

@endsection
