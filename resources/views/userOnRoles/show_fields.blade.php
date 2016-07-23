<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $userOnRole->id !!}</p>
</div>

<!-- Users Field -->
<div class="form-group">
    {!! Form::label('users', 'Users:') !!}
    <p>{!! $userOnRole->users !!}</p>
</div>

<!-- Roles Field -->
<div class="form-group">
    {!! Form::label('roles', 'Roles:') !!}
    <p>{!! $userOnRole->roles !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $userOnRole->deleted_at !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $userOnRole->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $userOnRole->updated_at !!}</p>
</div>

