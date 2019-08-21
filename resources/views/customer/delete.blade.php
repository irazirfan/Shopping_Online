@include('../partials/header')
@include('../partials/navbar')
@include('../partials/employee_navbar')

<div class="container">
    <div class="jumbotron">
        <h2>Delete From  Cart!</h2>
    </div>
</div>

<form method="post">
    @csrf
    <div class="col-md-8" style="padding-left: 30%">
        <table class="table table-bordered table-responsive">
            <tr>
                <td>Username :</td>
                <td>{{$std['username']}}</td>
            </tr>
            <tr>
                <td>Category :</td>
                <td>{{$std['category']}}</td>
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
