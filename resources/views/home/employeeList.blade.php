@include('../partials/header')
@include('../partials/navbar')
@include('../partials/admin_navbar');



<table border="1" class="table table-striped">
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Contact</td>
            <td>Username</td>
            <td>Password</td>
            <td>User Type</td>
            <td>Created At</td>
            <td>Updated At</td>
			<td>Action</td>
		</tr>
		@foreach($std as $value)
		<tr>
			<td>{{$value['id']}}</td>
			<td>{{$value['name']}}</td>
			<td>{{$value['contact']}}</td>
            <td>{{$value['username']}}</td>
            <td>{{$value['password']}}</td>
            <td>{{$value['user_type']}}</td>
            <td>{{$value['created_at']}}</td>
            <td>{{$value['updated_at']}}</td>
			<td>
				<a href="/edit/{{$value['id']}}">Edit</a> |
				<a href="/delete/{{$value['id']}}">Delete</a> |
				<a href="/details/{{$value['id']}}">Details</a>
			</td>
		</tr>
		@endforeach

</table>

</body>
</html>
