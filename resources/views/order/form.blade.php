<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <!-- {{ Form::label('pk_order') }} -->
            {{ Form::hidden('pk_order', $order->pk_order, ['class' => 'form-control' . ($errors->has('pk_order') ? ' is-invalid' : ''), 'placeholder' => 'Pk Order']) }}
            {!! $errors->first('pk_order', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('doctor') }}
            {{ Form::select('fk_doctor', $doctor, $order->fk_doctor, ['class' => 'form-control' . ($errors->has('fk_doctor') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione Doctor']) }}
            {!! $errors->first('fk_doctor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('paciente') }}
            {{ Form::select('fk_patient', $paciente, $order->fk_patient, ['class' => 'form-control' . ($errors->has('fk_patient') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione Paciente']) }}
            {!! $errors->first('fk_patient', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usuario') }}
            {{ Form::text('fk_user', $order->fk_user, ['class' => 'form-control' . ($errors->has('fk_user') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione Usuario']) }}
            {!! $errors->first('fk_user', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('code') }}
            {{ Form::hidden('code', $cod, $order->code, ['class' => 'form-control' . ($errors->has('code') ? ' is-invalid' : ''), 'placeholder' => 'code']) }}
            {!! $errors->first('code', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('is_active') }}
            {{ Form::text('is_active', $order->is_active, ['class' => 'form-control' . ($errors->has('is_active') ? ' is-invalid' : ''), 'placeholder' => 'Is Active']) }}
            {!! $errors->first('is_active', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>