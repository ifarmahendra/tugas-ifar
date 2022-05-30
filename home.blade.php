@extends('template_admin.home')
@php
$title = "[ADMIN] Skripsi";
@endphp
@section('content')
@section('model')


<!-- Main Content -->
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Mata Kuliah</h4>
                        </div>
                        <div class="card-body">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="fas fa-cut"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Learning Jurnal</h4>
                        </div>
                        <div class="card-body">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Jawaban Mahasiswa</h4>
                        </div>
                        <div class="card-body">
                        </div>
                    </div>
                </div>
            </div>
            
        </div>






@endsection
