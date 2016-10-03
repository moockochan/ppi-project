@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            PEMANTAUAN ISK: Edit
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($pemantauanIsk, ['route' => ['pemantauanIsks.update', $pemantauanIsk->id], 'method' => 'patch']) !!}
                      {!! csrf_field() !!}
                      @foreach($data as $dt)
                        @include('pemantauanIsks.fields')
                      @endforeach
                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
