@extends('layouts.app')

@section('template_title')
    {{ $doctor->name ?? 'Show Doctor' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Doctor</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('doctors.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Pk Doctor:</strong>
                            {{ $doctor->pk_doctor }}
                        </div>
                        <div class="form-group">
                            <strong>Fk Medical Center:</strong>
                            {{ $doctor->fk_medical_center }}
                        </div>
                        <div class="form-group">
                            <strong>First Name:</strong>
                            {{ $doctor->first_name }}
                        </div>
                        <div class="form-group">
                            <strong>Last Name:</strong>
                            {{ $doctor->last_name }}
                        </div>
                        <div class="form-group">
                            <strong>Code:</strong>
                            {{ $doctor->code }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
