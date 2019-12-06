<style>
        .verde{border-block-start: #429055 5px solid;}
        .marg{margin-left: 8.3%;    }
    </style>
<!-- Name Field -->
<div class="container fondoP showP borde verde">
    <br>
<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    <p>{!! $products->name !!}</p>
</div>
<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', 'Precio:') !!}
    <p>{!! $products->price !!}</p>
</div>
<!-- Stock Field -->
<div class="form-group">
    {!! Form::label('stock', 'Stock:') !!}
    <p>{!! $products->stock !!}</p>
</div>
<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Descripción:') !!}
    <p>{!! $products->description !!}</p>
</div>
<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Creado:') !!}
    <p>{!! $products->created_at !!}</p>
</div>
<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Actualizado:') !!}
    <p>{!! $products->updated_at !!}</p>
</div>
<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Imagen:') !!}
    <img src="{!! $products->image !!}" class="img-responsive" width="420" height="125"></td>
</div>
<div class="mov2">
<a href="{!! route('products.index') !!}" class="btn btn-default">Regresar</a>
</div>
<br>
</div>
