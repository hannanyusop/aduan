<?php
$links = [
    'Utama' => '',
    'Pengurusan Staff' => '',
    'Tambah Staff' => route('admin.auth.user.create')
];
?>
@extends('backend.layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-6 offset-3">
            <div class="card">
                <div class="card-body">

                    <h6 class="mb-3 text-danger">*Perhatian : Sila masukan semua detail staff.</h6>

                    {{ html()->form('POST', route('admin.auth.user.store'))->class('form-horizontal')->open() }}
                        <div class="form-group row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label">Nama</label>
                            <div class="row ml-1">
                                <div class="col-md-6">
                                    {{ html()->text('first_name')
                                       ->class('form-control')
                                       ->placeholder('Nama awal')
                                       ->attribute('maxlength', 191)
                                       ->required()
                                       ->autofocus() }}
                                </div>
                                <div class="col-md-6">
                                    {{ html()->text('last_name')
                                        ->class('form-control')
                                        ->placeholder('Nama akhir')
                                        ->attribute('maxlength', 191)
                                        ->required() }}
                                </div>
                            </div>
                            @error('first_name')<p class="text-danger">*{{ $message }}</p>@enderror
                            @error('last_name')<p class="text-danger">*{{ $message }}</p>@enderror
                        </div>
                        <div class="form-group row mb-3">
                            <label for="inputPassword5" class="col-3 col-form-label">E-mel</label>
                            <div class="col-9">
                                {{ html()->email('email')
                                    ->class('form-control')
                                    ->placeholder('E-mel')
                                    ->attribute('maxlength', 191)
                                    ->required() }}
                            </div>
                            @error('email')<p class="text-danger">*{{ $message }}</p>@enderror
                        </div>
                        <div class="form-group row mb-3">
                            <label for="inputPassword5" class="col-3 col-form-label">Katalaluan</label>
                            <div class="col-9">
                                {{ html()->password('password')
                                    ->class('form-control')
                                    ->placeholder('Katalaluan')
                                    ->required() }}
                            </div>
                            @error('password')<p class="text-danger">*{{ $message }}</p>@enderror
                        </div>
                        <div class="form-group row mb-3">
                            <label for="inputPassword5" class="col-3 col-form-label">Sahkan Katalaluan</label>
                            <div class="col-9">
                                {{ html()->password('password_confirmation')
                                    ->class('form-control')
                                    ->placeholder('Sahkan Katalaluan')
                                    ->required() }}
                            </div>
                            @error('password_confirmation')<p class="text-danger">*{{ $message }}</p>@enderror
                        </div>

                        <div class="form-group row mb-3">
                            <label for="inputPassword5" class="col-3 col-form-label">Peranan</label>
                            <div class="col-9">
                                {{ html()->select('roles[]', $roles)->class('form-control') }}
                            </div>
                            @error('role')<p class="text-danger">*{{ $message }}</p>@enderror
                        </div>

                        <div class="form-group mb-0 justify-content-end row">
                            <div class="col-9">
                                <button type="submit" class="btn btn-info waves-effect waves-light">Hantar</button>
                            </div>
                        </div>
                    {{ html()->form()->close() }}

                </div>  <!-- end card-body -->
            </div>
        </div>
    </div>
@endsection
