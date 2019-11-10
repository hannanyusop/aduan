<?php
 $links = [
     'Utama' => '',
     'Aduan' => '',
     'Senarai Aduan' => route('admin.auth.report.index'),
     'Lihat Aduan' => route('admin.auth.report.view', $report->id),
     'Aduan #'.$report->id => route('admin.auth.report.view', $report->id)

 ];
?>
<link href="{{ asset('theme/default/libs/summernote/summernote-bs4.css') }}" rel="stylesheet" />
@extends('backend.layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <div class="mt-4">
                        <h5 class="font-18">TAJUK : {{ $report->subject }}</h5>

                        <hr>

                        <div class="media mb-4 mt-1">
                            <div class="media-body">
                                <span class="float-right">{{ $report->created_at }}</span>
                                <h6 class="m-0 font-14">{{ $report->email }}</h6>
                                <small class="text-muted">No. Tel: {{ $report->phone }}</small>
                            </div>
                        </div>

                        <p>
                            {!! $report->message !!}
                        </p>
                        <hr>

                        <h3>Tindakan</h3>
                        <div class="media mb-4 mt-1">
                            <div class="media-body">
                                <span class="float-right">{{ $report->updated_at }}</span>
                                <h6 class="m-0 text-muted">Kali terakhir dikemaskini oleh: {{ (!is_null($report->user_id))? $report->action_by->last_name : 'Tiada' }}</h6>
                            </div>
                        </div>

                        {{ html()->form('POST', route('admin.auth.report.update', $report->id))->class('')->open() }}

                        <div class="form-group mb-3">
                            <div class="custom-control custom-checkbox">
                                {{ html()->checkbox('done', true, 1)->class('custom-control-input') }}
                                <label class="custom-control-label" for="checkbox-signin">Tanda sebagai selesai</label>
                            </div>
                        </div>

                        <div class="media">
                            <img class="d-flex mr-3 rounded-circle avatar-sm" src="{{ $logged_in_user->picture }}" alt="placeholder image">
                            <div class="media-body">
                                <div class="mb-2">
                                    <textarea name="response" class="summernote">{{ $report->response }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-primary btn-rounded width-sm">Kemaskini</button>
                        </div>

                    {{ html()->form()->close() }}
                </div>
            </div>
        </div>

    </div>
@endsection
@push('after-script')
    <script src="{{ asset('theme/default/libs/summernote/summernote-bs4.min.js') }}"></script>
    <script>
        jQuery(document).ready(function(){
            $('.summernote').summernote({
                height: 230,                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: false                 // set focus to editable area after initializing summernote
            });
        });
    </script>
@endpush

