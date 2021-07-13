@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4>Users Details</h4>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-sm btn-default float-right"
                       href="{{ route('users.index') }}">
                        Back
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        <div class="row">
            <div class="col-md-3 col-lg-3">
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="#" alt="User profile picture">
                        </div>
                        <h3 class="profile-username text-center">{{ $users->name }}</h3>
                        <p class="text-muted text-center">{{ $users->email }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-9 col-lg-9">
                <div class="card">
                    <div class="card-header">
                        <span><i class="fas fa-fingerprint ico-tab"></i>Permissions Allowed</span>
                        <div class="card-tools">
                            <a href="{{ url('/users/add-user-roles/' . $users->id) }}" title="Edit Permissions" class="btn btn-sm btn-link"><i class="fas fa-key"></i></a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection