@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            PemantauanVentilator
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($pemantauanVentilator, ['route' => ['pemantauanVentilators.update', $pemantauanVentilator->id], 'method' => 'patch']) !!}
                      @foreach($data as $dt)
                        @include('pemantauanVentilators.fields')
                      @endforeach
                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
