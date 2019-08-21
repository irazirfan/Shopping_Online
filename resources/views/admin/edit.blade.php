@include('../partials/header')
@include('../partials/navbar')
@include('../partials/employee_navbar')

<div class="container">
    <div class="jumbotron">
        <h2>Edit Product</h2>
    </div>
</div>

<form method="post">
	@csrf
    <div class="col-md-8" style="padding-left: 30%">
        <table class="table table-responsive">
            <tr>
                <td>ID</td>
                <td>{{$std['id']}}</td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="{{$std['name']}}"></td>
            </tr>
            <tr>
                <td>Quantity</td>
                <td><input type="number" name="quantity" value="{{$std['quantity']}}"></td>
            </tr>
            <tr>
                <td>Price</td>
                <td><input type="text" name="price" value="{{$std['price']}}"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="save" class="btn btn-primary" value="Save"></td>
            </tr>
        </table>
    </div>
</form>
<div class="col-md-6" style="padding-left: 30%">
    @foreach ($errors->all() as $error)
        {{ $error }} <br>
    @endforeach
</div>

</body>
</html>
