@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            PemantauanDecubitus
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($pemantauanDecubitus, ['route' => ['pemantauanDecubituses.update', $pemantauanDecubitus->id], 'method' => 'patch']) !!}
                      @foreach($data as $dt)
                        @include('pemantauanDecubituses.fields')
                      @endforeach
                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
