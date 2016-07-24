<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $userOnRole->id !!}</p>
</div>

<!-- By User Field -->
<div class="form-group">
    {!! Form::label('by_user', 'By User:') !!}
    <p>{!! $userOnRole->by_user !!}</p>
</div>

<!-- By Role Field -->
<div class="form-group">
    {!! Form::label('by_role', 'By Role:') !!}
    <p>{!! $userOnRole->by_role !!}</p>
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

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $userOnRole->deleted_at !!}</p>
</div>

