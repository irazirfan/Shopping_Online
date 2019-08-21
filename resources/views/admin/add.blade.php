@include('../partials/header')
@include('../partials/navbar')
@include('../partials/employee_navbar');

<div class="container">
    <div class="jumbotron">
        <h2>Add Product!</h2>
    </div>
</div>

<div class="row centered-form">
    <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Add Product Here</h3>
            </div>
            <div class="panel-body">
                <form method="post">
                    @csrf
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-8">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control input-sm"
                                       placeholder="Name">
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-8">
                            <div class="form-group">
                                <input type="number" name="quantity" class="form-control input-sm"
                                       placeholder="Quantity">
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-8">
                            <div class="form-group">
                                <input id="username" type="text" name="price" class="form-control input-sm"
                                       placeholder="Price">
                                <span id="username_exist" style="color: red">

                                       </span>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-8">
                            <input id="submit" class="btn btn-info btn btn-block" type="submit" value="Save">
                        </div>


                    </div>
            </div>
            </form>

            @foreach ($errors->all() as $error)
                {{ $error }} <br>
            @endforeach

        </div>
    </div>

</div>
</div>
