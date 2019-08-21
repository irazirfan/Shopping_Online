@include('../partials/header')
@include('../partials/navbar')
@include('../partials/employee_navbar')

<div class="col-md-8">
    <table border="1" id="example" class="table table-striped table-bordered table-condensed table-responsive">

    <thead>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Quantity</td>
        <td>Price</td>
        <td>Action</td>
    </tr>
    </thead>

        <tbody>
        @foreach($productList as $value)
            <tr>
                <td>{{$value['id']}}</td>
                <td>{{$value['name']}}</td>
                <td>{{$value['quantity']}}</td>
                <td>{{$value['price']}}</td>
                <td>
                    <a href="/ProductDetails/{{$value['id']}}">Details</a> |
                    <a href="/cart/{{$value['id']}}">Add to Cart</a>
                </td>
            </tr>
        @endforeach
        </tbody>

        </table>
</div>

</body>
</html>
