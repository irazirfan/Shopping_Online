@include('../partials/header')
@include('../partials/navbar')
@include('../partials/employee_navbar')


<h3>Female Products</h3>
<table border="1" class="table table-striped table-bordered table-condensed table-responsive">
    <tr>
        <td>Name</td>
        <td>Category/Preference</td>
        <td>Price</td>
        <td>Action</td>
    </tr>

    @foreach($productList as $value)
        <tr>
            <td>{{$value->name}}</td>
            <td>{{$value->category}}</td>
            <td>{{$value->price}}</td>
            <td>
                <a href="/cart/{{$value->id}}">Add to Cart</a>
            </td>
        </tr>
    @endforeach
</table>

</body>
</html>
