@include('../partials/header')
@include('../partials/navbar')
@include('../partials/admin_navbar')

<div class="container">
    <div class="jumbotron">
        <h2>Edit Employee</h2>
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
                <td>Contact</td>
                <td><input type="text" name="contact" value="{{$std['contact']}}"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" value="{{$std['username']}}"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" value="{{$std['password']}}"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="save" class="btn btn-primary" value="Save"></td>
            </tr>
        </table>
    </div>
</form>
@foreach ($errors->all() as $error)
    {{ $error }} <br>
    @endforeach
</body>
</html>
