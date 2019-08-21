@include('../partials/header')
@include('../partials/navbar')
@if($user->user_type=='admin')
    @include('../partials/admin_navbar')
@elseif($user->user_type=='customer')
    @include('../partials/employee_navbar')
@endif


<h1>Edit Profile</h1>

<form method="post">
    @csrf
    <table>
        <tr>
            <td>Id: </td>
            <td>{{$user->id}}</td>
        </tr>
        <tr>
            <td>Username: </td>
            <td>{{$user->username}}</td>
        </tr>
        <tr>
            <td>Password: </td>
            <td><input type="password" name="password" value="{{$user->password}}"> </td>
        </tr>
        <tr>
            <td>Name: </td>
            <td><input type="text" name="name" value="{{$user->name}}"></td>
        </tr>
        <tr>
            <td>Contact: </td>
            <td><input type="text" name="contact" value="{{$user->contact}}"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Submit"> </td>
        </tr>
    </table>
</form>
</body>
