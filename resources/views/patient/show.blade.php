@extends('layouts.app')

@section('template_title')
    {{ $patient->name ?? 'Show Patient' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Patient</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('patients.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Pk Patient:</strong>
                            {{ $patient->pk_patient }}
                        </div>
                        <div class="form-group">
                            <strong>First Name:</strong>
                            {{ $patient->first_name }}
                        </div>
                        <div class="form-group">
                            <strong>Last Name:</strong>
                            {{ $patient->last_name }}
                        </div>
                        <div class="form-group">
                            <strong>Birth Date:</strong>
                            {{ $patient->birth_date }}
                        </div>
                        <div class="form-group">
                            <strong>Phone Number:</strong>
                            {{ $patient->phone_number }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $patient->email }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
