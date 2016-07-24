<?php /*
<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    {!! Form::number('id', null, ['class' => 'form-control']) !!}
</div>
*/ ?>
<!-- By User Field -->
<div class="form-group col-sm-6">
    {!! Form::label('by_user', 'Username:') !!}
    {!!Form::select('by_user[]', DB::table('users')->lists('name','email'),null,array('id'=>'by_user','class'=>'form-control select2','multiple'))!!}
</div>

<!-- By Role Field -->
<div class="form-group col-sm-6">
    {!! Form::label('by_role', 'By Role:') !!}
    {!!Form::select('by_role[]', DB::table('role')->lists('nama','nama'),null,array('id'=>'by_role','class'=>'form-control select2','multiple'))!!}
</div>
<?php /*
<!-- Created At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_at', 'Created At:') !!}
    {!! Form::date('created_at', null, ['class' => 'form-control']) !!}
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_at', 'Updated At:') !!}
    {!! Form::date('updated_at', null, ['class' => 'form-control']) !!}
</div>

<!-- Deleted At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    {!! Form::text('deleted_at', null, ['class' => 'form-control']) !!}
</div>
*/ ?>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('userOnRoles.index') !!}" class="btn btn-default">Cancel</a>
</div>
