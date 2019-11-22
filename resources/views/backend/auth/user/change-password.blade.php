<?php
$links = [
    'Utama' => '',
    'Pengurusan Staff' => '',
    'Senarai' => route('admin.auth.user.index'),
    $user->full_name => '',
    'Tukar Katalaluan' => ''
];
?>
@extends('backend.layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-6 offset-3">
            <div class="card">
                <div class="card-body">

                    {{ html()->form('PATCH', route('admin.auth.user.change-password.post', $user))->class('form-horizontal')->open() }}
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

                    <div class="form-group mb-0 justify-content-end row">
                        <div class="col-9">
                            <button type="submit" class="btn btn-warning waves-effect waves-light">Tukar Katalaluan</button>
                        </div>
                    </div>
                    {{ html()->form()->close() }}

                </div>  <!-- end card-body -->
            </div>
        </div>
    </div>
@endsection
