@include('../partials/header')
@include('../partials/navbar')
@include('../partials/employee_navbar')

<div class="container">
    <div class="jumbotron">
        <h2>Product Details</h2>
    </div>
</div>

	<div class="col-md-8" style="padding-left: 30%">
        <table class="table table-responsive table-bordered">
            <tr>
                <td>ID :</td>
                <td>{{$std['id']}}</td>
            </tr>
            <tr>
                <td>Name :</td>
                <td>{{$std['name']}}</td>
            </tr>
            <tr>
                <td>Quantity :</td>
                <td>{{$std['quantity']}}</td>
            </tr>
            <tr>
                <td>Price :</td>
                <td>{{$std['price']}}</td>
            </tr>

        </table>
    </div>

</body>
</html>
