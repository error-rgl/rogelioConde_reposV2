@extends('layouts.app')

@section('template_title')
    {{ $order->name ?? 'Show Order' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Order</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('orders.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Pk Order:</strong>
                            {{ $order->pk_order }}
                        </div>
                        <div class="form-group">
                            <strong>Fk Doctor:</strong>
                            {{ $order->doctor->first_name }}
                        </div>
                        <div class="form-group">
                            <strong>Fk Patient:</strong>
                            {{ $order->patient->first_name }}
                        </div>
                        <div class="form-group">
                            <strong>Fk User:</strong>
                            {{ $order->fk_user }}
                        </div>
                        <div class="form-group">
                            <strong>Code:</strong>
                            {{ $order->code }}
                        </div>
                        <div class="form-group">
                            <strong>Is Active:</strong>
                            {{ $order->is_active }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
