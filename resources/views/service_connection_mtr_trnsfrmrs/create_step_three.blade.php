<?php

use App\Models\IDGenerator;

?>

@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h4>Register New Service Connection Application</h4>
                </div>
            </div>
        </div>
    </section>

    <div class="row">
        <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sm-12">
            <div class="content px-3">


                @include('adminlte-templates::common.errors')

                <div class="card">

                    <div class="card-header">
                        <span class="card-title">Step <strong>3</strong> of 4 - <strong>Meter, Transformer, and Other Equipments</strong></span>
                    </div>

                    {!! Form::open(['route' => 'serviceConnectionMtrTrnsfrmrs.store']) !!}

                    <div class="card-body">

                        <div class="row">
                            <!-- HIDDEN INPUTS -->
                            <input type="hidden" name="id" value="{{ IDGenerator::generateID() }}">

                            <input type="hidden" name="ServiceConnectionId" value="{{ $serviceConnection->id }}">

                            @include('service_connection_mtr_trnsfrmrs.fields')
                        </div>

                    </div>

                    <div class="card-footer">
                        {!! Form::submit('Proceed to Payment', ['class' => 'btn btn-primary']) !!}
                    </div>

                    {!! Form::close() !!}

                </div>
             </div>
        </div>
    </div>
@endsection
