@extends('layouts.app')

@section('ktmspice-admin-content')


    <div class="page-header">
        <h3 class="page-title">
            Menu Item List
        </h3>
        <nav aria-label="breadcrumb">
            <a href="{{url('ktm-admin/menu/addnew')}}" class="btn btn-primary btn-sm">Add New Menu Item</a>
        </nav>
    </div>


    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="row">

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="table-responsive">
                        <table id="menuItems-table" class="table table-hover">
                            <thead>
                            <tr>
                                    <th></th>
                                <th>Item Id</th>
                                <th>Category</th>
                                <th>Item Name</th>
                                <th>Spice</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                            <tfoot>
                                    <tr>
                                            <th></th>
                                        <th>Item Id</th>
                                        <th>Category</th>
                                        <th>Item Name</th>
                                        <th>Spice</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <script>
            $(function() {
              $('#menuItems-table').DataTable({
              processing: true,
              serverSide: true,
              fixedHeader: true,
              dom: 'Bfrtip',
              buttons: [
                  'copy', 'csv', 'excel', 'pdf', 'print'
              ],
              ajax: '{{ url('ktm-admin/menus/getAjaxMenuItem') }}',
              columns: [
                { data: 'Image' , name: 'Image'},
                { data: 'item_id' , name: 'item_id'},
                { data: 'category' , name: 'category'},
                
                { data: 'item_name' , name: 'item_name'},
                { data: 'spice' , name: 'spice'},
                { data: 'item_status' , name: 'item_status'},
                { data: 'action' , name: 'action'},
          
                    ]
    
           });
        });
        </script>
    


@stop()
