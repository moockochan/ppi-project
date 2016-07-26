@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            PemantauanIloRi
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($pemantauanIloRi, ['route' => ['pemantauanIloRis.update', $pemantauanIloRi->id], 'method' => 'patch']) !!}
                        
                        @include('pemantauanIloRis.fields')
<?php print $pemantauanIloRi->id; ?>
                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
