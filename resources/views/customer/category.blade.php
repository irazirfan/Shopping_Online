@include('../partials/header')
@include('../partials/navbar')
@include('../partials/employee_navbar')

<h3>By Preference</h3>
<br>
<a href="/maleProduct">Men</a> |
<a href="/femaleProduct">Women</a>
<br>
<h3>By Category</h3>
<br>
@foreach($categoryList as $values)
<a href="/byCategory/{{$values->category}}">{{$values->category}}</a> &nbsp; |
@endforeach

</body>
