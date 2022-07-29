@include('admin_portal.layoutes.header')

<!-- @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)   it is count error and display on screen 
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif -->
<!-- @if(session('status'))
<div class="alert alert-success mb-1 mt-1">
    {{ session('status') }}
</div>
@endif -->




<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
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
            <h1>Users</h1>
            <small>Users list</small>
            <ol class="breadcrumb hidden-xs">
                <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- Form controls -->
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="btn-group">
                            <a class="btn btn-primary" href="{{ route('clients.index') }}"> <i class="fa fa-list"></i> Users List </a>
                        </div>
                    </div>
                    <!-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif -->
                    <div class="panel-body">
                        <form action="{{ route('clients.store') }}" method="POST" class="col-sm-12" enctype="multipart/form-data">
                            @csrf

                            <div class="col-sm-6 form-group">
                                <label>First Name</label>
                                <input type="text" value="{{ old('first_name') }}" class="form-control" name="first_name" id="first_name" placeholder="Enter firstname" required>

                                @if ($errors->has('first_name'))
                                <span class="text-danger text-left">{{ $errors->first('first_name') }}</span>
                                @endif
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Last Name</label>
                                <input type="text" value="{{ old('first_name') }}" class="form-control" name="last_name" placeholder="Enter Lastname" required>

                                @if ($errors->has('last_name'))
                                <span class="text-danger text-left">{{ $errors->first('last_name') }}</span>
                                @endif
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Email</label>
                                <input type="email" value="{{ old('email') }}" class="form-control" name="email" id="email" placeholder="Enter Email" required>

                                @if ($errors->has('email'))
                                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" value="{{ old('password') }}" name="password" placeholder="Enter password" required>

                                @if ($errors->has('password'))
                                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                                @endif
                            </div>




                            <div class="col-sm-6 form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" value="{{ old('address') }}" name="address" placeholder="Address" required>

                                @if ($errors->has('address'))
                                <span class="text-danger text-left">{{ $errors->first('address') }}</span>
                                @endif
                            </div>

                            <div class="col-sm-6 form-group">
                                <label>Mobile</label>
                                <input type="number" class="form-control" value="{{ old('mobile') }}" name="mobile" placeholder="Enter Mobile" required>

                                @if ($errors->has('mobile'))
                                <span class="text-danger text-left">{{ $errors->first('mobile') }}</span>
                                @endif
                            </div>

                            <div class="col-sm-6 form-group">
                                <label>Picture upload</label>
                                <input type="file" value="{{ old('image') }}" name="image">

                                @if ($errors->has('image'))
                                <span class="text-danger text-left">{{ $errors->first('image') }}</span>
                                @endif
                            </div>

                            <div class="col-sm-6 form-group">
                                <label>Date of Birth</label>
                                <input name="dob" value="{{ old('dob') }}" class="datepicker form-control hasDatepicker" type="text" placeholder="Date of Birth" id="dob">

                                @if ($errors->has('dob'))
                                <span class="text-danger text-left">{{ $errors->first('dob') }}</span>
                                @endif
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Blood group</label>
                                <select class="form-control" value="{{ old('blood_group') }}" name="blood_group">
                                    <option>A+</option>
                                    <option>AB+</option>
                                    <option>O+</option>
                                    <option>AB-</option>
                                    <option>B+</option>
                                    <option>A-</option>
                                    <option>B-</option>
                                    <option>O-</option>
                                </select>

                                @if ($errors->has('blood_group'))
                                <span class="text-danger text-left">{{ $errors->first('blood_group') }}</span>
                                @endif
                            </div>

                            <div class="col-sm-6 form-group">
                                <label>Gender</label><br>
                                <label class="radio-inline">
                                    <input type="radio" value="{{ old('gender') }}" name="gender" value="1" checked="checked">Male</label>
                                <label class="radio-inline"><input type="radio" name="gender" value="0">Female</label>

                                @if ($errors->has('gender'))
                                <span class="text-danger text-left">{{ $errors->first('gender') }}</span>
                                @endif
                            </div>


                            <div class="col-sm-12 reset-button">
                                <a href="#" class="btn btn-warning">Reset</a>
                                <!-- <a href="#" type="submit" class="btn btn-success">Save</a> -->
                                <button type="submit" class="btn btn-primary ml-3">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section> <!-- /.content -->
</div> <!-- /.content-wrapper -->

@include('admin_portal.layoutes.footer')