<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Online Shop Management</title>

    @include('../partials/header')
    @include('../partials/navbar')
    @if(session('logged')->user_type !== "employee")
        @include('../partials/admin_navbar')
    @else
        @include('../partials/employee_navbar')
    @endif

    <div class="container">

        <div class="jumbotron">
            <div class="title m-b-md">
                Welcome to Online Shop Management
            </div>
        </div>
    </div>
    </body>
</html>
