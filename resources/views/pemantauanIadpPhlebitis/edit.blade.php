@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            PemantauanIadpPhlebitis
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($pemantauanIadpPhlebitis, ['route' => ['pemantauanIadpPhlebitis.update', $pemantauanIadpPhlebitis->id], 'method' => 'patch']) !!}
                      @foreach($data as $dt)
                        @include('pemantauanIadpPhlebitis.fields')
                      @endforeach
                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
