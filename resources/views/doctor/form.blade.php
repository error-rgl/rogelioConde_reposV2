<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <!-- {{ Form::label('pk_doctor') }} -->
            {{ Form::hidden('pk_doctor', $doctor->pk_doctor, ['class' => 'form-control' . ($errors->has('pk_doctor') ? ' is-invalid' : ''), 'placeholder' => 'Pk Doctor']) }}
            {!! $errors->first('pk_doctor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fk_medical_center') }}
            {{ Form::text('fk_medical_center', $doctor->fk_medical_center, ['class' => 'form-control' . ($errors->has('fk_medical_center') ? ' is-invalid' : ''), 'placeholder' => 'Fk Medical Center']) }}
            {!! $errors->first('fk_medical_center', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('first_name') }}
            {{ Form::text('first_name', $doctor->first_name, ['class' => 'form-control' . ($errors->has('first_name') ? ' is-invalid' : ''), 'placeholder' => 'First Name']) }}
            {!! $errors->first('first_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('last_name') }}
            {{ Form::text('last_name', $doctor->last_name, ['class' => 'form-control' . ($errors->has('last_name') ? ' is-invalid' : ''), 'placeholder' => 'Last Name']) }}
            {!! $errors->first('last_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('code') }}
            {{ Form::text('code', $doctor->code, ['class' => 'form-control' . ($errors->has('code') ? ' is-invalid' : ''), 'placeholder' => 'Code']) }}
            {!! $errors->first('code', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>