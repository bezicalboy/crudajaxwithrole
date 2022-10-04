@extends('layouts.master')
@push('css')
<link href="{{ asset('')}}vendor/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet" />
<link href="{{ asset('')}}vendor/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet" />
@endpush
@section('content')
<div class="main-content">
    <div class="title">
        Konfigurasi

    </div>
    <div class="content-wrapper">
        <div class="row same-height">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Permissions</h4>
                    </div>
                    <div class="card-body">
                        Anda login sebagai <strong>{{ Auth::user()->name }}</strong>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalAction" tabindex="-1" aria-labelledby="largeModalLabel"
aria-hidden="true">
    <div class="modal-dialog modal-lg">
        {{-- js --}}
    </div>
@endsection
