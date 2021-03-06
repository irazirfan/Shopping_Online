@include('../partials/header')
@include('../partials/navbar')
@include('../partials/admin_navbar')

<div class="container">
    <div class="jumbotron">
        <h2>Delete Product!</h2>
    </div>
</div>

<form method="post">
	@csrf
	<div class="col-md-8" style="padding-left: 30%">
        <table class="table table-bordered table-responsive">
            <tr>
                <td>id :</td>
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

        <div style="padding-left: 25%">
            <h3>Are you sure?</h3>
            <input type="submit" name="delete" value="Confirm">
        </div>

    </div>
</form>
</body>
</html>
