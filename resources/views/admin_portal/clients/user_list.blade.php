@include('admin_portal.layoutes.header')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
</head>

<body>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="header-icon">
                <i class="pe-7s-box1"></i>
            </div>
            <div class="header-title">
                <form action="#" method="get" class="sidebar-form search-box pull-right hidden-md hidden-lg hidden-sm">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" class="btn"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </form>
                <h1>User</h1>
                <small>User list</small>
                <ol class="breadcrumb hidden-xs">
                    <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="btn-group">
                                <a class="btn btn-success" href="{{ route('clients.create') }}"> <i class="fa fa-plus"></i> Add User
                                </a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="panel-header">
                                    <div class="col-sm-4 col-xs-12">

                                    </div>
                                    <!-- <div class="col-sm-4 col-xs-12">
                                    <div class="dataTables_length">
                                        <a class="btn btn-default buttons-copy btn-sm" tabindex="0">
                                            <span>Copy</span></a>
                                        <a class="btn btn-default buttons-csv buttons-html5 btn-sm" tabindex="0"><span>CSV</span></a>
                                        <a class="btn btn-default buttons-excel buttons-html5 btn-sm" tabindex="0"><span>Excel</span></a>
                                        <a class="btn btn-default buttons-pdf buttons-html5 btn-sm" tabindex="0"><span>PDF</span></a>
                                        <a class="btn btn-default buttons-print btn-sm" tabindex="0"><span>Print</span></a>

                                    </div>
                                </div> -->

                                </div>

                            </div>
                            <div class="table-responsive">
                                <table id="table" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Serial No</th>
                                            <th>Picture</th>
                                            <th>Name</th>
                                            <th>Department</th>
                                            <th>Email</th>
                                            <th>Mobile No</th>
                                            <th>Price </th>
                                            <th>Update</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>

                                            <td>
                                                <label></label>
                                            </td>
                                            <td><img src="" class="img-circle" alt="User Image" height="50" width="50"></td>
                                            <td></td>

                                            <td></td>
                                            <td></td>
                                            <td></td>

                                            <td>$43</td>
                                            <td>

                                                <form action="" method="Post">
                                                    <a type="submit" href="" class="btn btn-info btn-xs" data-toggle="modal" data-target="#ordine"><i class="fa fa-pencil"></i>
                                                    </a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-xs" data-placement="right" title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></button>

                                                </form>
                                            </td>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                          

                        </div>
                    </div>

                </div>

            </div>
        </section> <!-- /.content -->
        <div id="ordine" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content ">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">×</button>
                        <h4 class="modal-title">Update table</h4>
                    </div>
                    <div class="modal-body">
                        <div class="panel panel-bd lobidrag">
                            <div class="panel-heading">
                                <div class="btn-group">
                                    <a class="btn btn-primary" href="{{ route('users.index') }}"> <i class="fa fa-list"></i> User List
                                    </a>
                                </div>
                            </div>

                            <div class="panel-body">
                                <form action="" method="POST" enctype="multipart/form-data" class="col-sm-12">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name="first_name" class="form-control" placeholder="Enter First Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" name="last_name" class="form-control" placeholder="Enter last Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                                    </div>



                                    <div class="form-group">
                                        <label>Address</label>
                                        <input class="form-control" name="address" required></input>
                                    </div>

                                    <div class="form-group">
                                        <label>Mobile</label>
                                        <input type="number" name="mobile" class="form-control" placeholder="Enter Mobile" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Picture upload</label>
                                        <input type="file" name="image">
                                        <input type="hidden" name="image">
                                    </div>



                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <input name="dob" class="datepicker form-control hasDatepicker" type="text" placeholder="Date of Birth">
                                    </div>
                                    <div class="form-group">
                                        <label>Blood group</label>
                                        <select name="blood_group" class="form-control">
                                            <option>A+</option>
                                            <option>AB+</option>
                                            <option>O+</option>
                                            <option>AB-</option>
                                            <option>B+</option>
                                            <option>A-</option>
                                            <option>B-</option>
                                            <option>O-</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Sex</label><br>
                                        <label class="radio-inline">
                                            <input type="radio" name="gender" value="1" checked="checked">Male</label>
                                        <label class="radio-inline"><input type="radio" name="sex" value="0">Female</label>

                                    </div>
                                    <!-- <div class="form-check">
                                        <label>Status</label><br>
                                        <label class="radio-inline">
                                            <input type="radio" name="status" value="1" checked="checked">Active</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="status" value="0">Inctive
                                        </label>
                                    </div> -->

                                    <div class="reset button">
                                        <a href="#" class="btn btn-primary">Reset</a>
                                        <!-- <a href="#" class="btn btn-success">Save</a> -->
                                        <button type="submit" class="btn btn-primary ml-3">Submit</button>
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>

    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>


<script type="text/javascript">
 $(function() {
               $('#table').DataTable({
               processing: true,
               serverSide: true,
        ajax: "{{ route('users.index') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'first_name', name: 'first_name'},
            {data: 'last_name', name: 'last_name'},
            {data: 'email', name: 'email'},
            {data: 'password', name: 'password'},
            {data: 'mobile', name: 'mobile'},
            {data: 'address', name: 'address'},
            {data: 'dob', name: 'dob'},
            {data: 'image', name: 'image'},
            {data: 'gender', name: 'gender'},
            {
                data: 'action', 
                name: 'action', 
                orderable: true, 
                searchable: true
            },
        ]
    });
    
  });
</script>
</body>

</html>





@include('admin_portal.layoutes.footer')