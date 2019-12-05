<br> <br> <br> <br>
<div>
<div class="table-responsive tabla">

    <table class="table" id="products-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Imagen</th>
                <th>Stock</th>
                <th>Descripcion</th>
                <th colspan="3"></th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $products)
            <tr>
                <td width="80">{!! $products->name !!}</td>
                <td width="60">{!! $products->price !!}</td>
                <td width="95"><img src="{!! $products->image !!}" class="img-responsive" width="100" height="35"></td>
                <td width="60">{!! $products->stock !!}</td>
                <td width="80">{!! $products->description !!}</td>
                <td width="40">
                    {!! Form::open(['route' => ['products.destroy', $products->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('products.show', [$products->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('products.edit', [$products->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Estas seguro?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <h1 class="pull-right">
        <a class="btn btn-primary pull-right add" style="margin-top:-10px; margin-bottom:5px; margin-right:10px;" href="{!! route('products.create') !!}">Agregar</a>
     </h1>
</div>
</div>
