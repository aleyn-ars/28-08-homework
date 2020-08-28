<ul class="list-group list-group-flush">

    @foreach($products as $product)
        <li class="list-group-item">{{$product->name}}</li>
    @endforeach
</ul>
