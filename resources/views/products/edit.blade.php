@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Productos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($products, ['route' => ['products.update', $products->id], 'method' => 'patch', 'files' => true, 'enctype' => 'multipart/form-data']) !!}

                        @include('products.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
