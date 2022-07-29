@include('admin_portal.layoutes.header')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
                <h1>Role</h1>
                <small>Role list</small>
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
                                <a class="btn btn-success" href="{{ route('roles.create') }}"> <i class="fa fa-plus"></i> Add Role
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
                                <div class="mt-2">
                                    @include('admin_portal.layoutes.partials.messages')
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table id="table" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Serial No</th>

                                            <th>Name</th>

                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($roles as $key => $role)
                                        <tr>
                                            <td>{{ $role->id }}</td>
                                            <td>{{ $role->name }}</td>
                                            <td>
                                                <a class="btn btn-info btn-sm" href="{{ route('roles.show', $role->id) }}">Show</a>
                                            </td>
                                            <td>
                                                <a class="btn btn-primary btn-sm" href="{{ route('roles.edit', $role->id) }}">Edit</a>
                                            </td>
                                            <td>
                                                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                                {!! Form::close() !!}
                                            </td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="d-flex">
                                    {!! $roles->links() !!}
                                </div>

                            </div>


                        </div>
                    </div>

                </div>

            </div>
        </section> <!-- /.content -->

    </div>
</body>

</body>

</html>


@include('admin_portal.layoutes.footer')