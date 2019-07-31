@include('../partials/header')
@include('../partials/navbar')
@include('../partials/admin_navbar')

<div class="container">
    <div class="jumbotron">
        <h2>Employee Details</h2>
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
                <td>Contact :</td>
                <td>{{$std['contact']}}</td>
            </tr>
            <tr>
                <td>Username :</td>
                <td>{{$std['username']}}</td>
            </tr>
            <tr>
                <td>Password :</td>
                <td>{{$std['password']}}</td>
            </tr>
            <tr>
                <td>user_type :</td>
                <td>
                    {{$std['user_type']}}
                </td>
            </tr>
        </table>
    </div>

</body>
</html>
