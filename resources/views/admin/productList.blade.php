@include('../partials/header')
@include('../partials/navbar')
@include('../partials/admin_navbar')

<div class="col-md-8">
    <table border="1" id="example" class="table table-striped table-bordered table-condensed table-responsive">

    <thead>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Quantity</td>
        <td>Price</td>
        <td>Created At</td>
        <td>Updated At</td>
        <td>Action</td>
    </tr>
    </thead>

        <tbody>
        @foreach($std as $value)
            <tr>
                <td>{{$value['id']}}</td>
                <td>{{$value['name']}}</td>
                <td>{{$value['quantity']}}</td>
                <td>{{$value['price']}}</td>
                <td>{{$value['created_at']}}</td>
                <td>{{$value['updated_at']}}</td>
                <td>
                    <a href="/editProduct/{{$value['id']}}">Edit</a> |
                    <a href="/deleteProduct/{{$value['id']}}">Delete</a> |
                    <a href="/productDetails/{{$value['id']}}">Details</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>





<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
<script type="text/javascript">
    $(document).ready( function () {
        $('#example').DataTable( {

            dom: 'Bfrtip',
            buttons: [
                'copy', 'excel', 'pdf', 'print'
            ]
        } );
    } );
</script>
