<li class="{{ Request::is('products*') ? 'active' : '' }}">
    <a href="{!! route('products.index') !!}"><i class="fa fa-edit"></i><span>Products</span></a>
</li>

<li class="{{ Request::is('listProducts*') ? 'active' : '' }}">
    <a href="{{ route('listProducts.index') }}"><i class="fa fa-edit"></i><span>List Products</span></a>
</li>

