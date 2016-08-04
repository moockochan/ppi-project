@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            PemantauanHap
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($pemantauanHap, ['route' => ['pemantauanHaps.update', $pemantauanHap->id], 'method' => 'patch']) !!}
                      @foreach($data as $dt)
                        @include('pemantauanHaps.fields')
                      @endforeach
                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
