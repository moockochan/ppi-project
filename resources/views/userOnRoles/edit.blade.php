@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            UserOnRole
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($userOnRole, ['route' => ['userOnRoles.update', $userOnRole->id], 'method' => 'patch']) !!}

                        @include('userOnRoles.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
