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
                                <a class="btn btn-primary" href="{{ route('doctors.index') }}"> <i class="fa fa-list"></i> Doctor List
                                </a>
                            </div>
                        </div>
                        <!-- @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li></li>
                @endforeach
            </ul>
        </div>
    @endif -->
<div class="panel-body">
    <form action="{{ route('doctors.update',$doctor->id) }}" method="POST" enctype="multipart/form-data" class="col-sm-12">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>First Name</label>
            <input type="text" name="first_name" value="{{ $doctor->first_name }}" class="form-control" placeholder="Enter First Name" required>
        </div>
        <div class="form-group">
            <label>Last Name</label>
            <input type="text" name="last_name" value="{{ $doctor->last_name }}" class="form-control" placeholder="Enter last Name" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" value="{{ $doctor->email }}" class="form-control" placeholder="Enter Email" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" value="{{ $doctor->password }}" class="form-control" placeholder="Enter password" required>
        </div>
        <div class="form-group">
            <label>Designation</label>
            <input type="text" name="designation" value="{{ $doctor->designation }}" class="form-control" placeholder="Enter Designation" required>
        </div>

        <div class="form-group">
            <label>Department</label>
            <select class="form-control" name="department" value="{{ $doctor->department }}" size="1">
                <option selected class="test">Neurology</option>
                <option>Gynaecology</option>
                <option>Microbiology</option>
                <option>Pharmacy</option>
                <option>Neonatal</option>
            </select>
        </div>

        <div class="form-group">
            <label>Address</label>
            <input class="form-control" name="address" value="{{ $doctor->address }}" required></input>
        </div>

        <div class="form-group">
            <label>Mobile</label>
            <input type="number" name="mobile" value="{{ $doctor->mobile }}" class="form-control" placeholder="Enter Mobile" required>
        </div>

        <div class="form-group">
            <label>Picture upload</label>
            <input type="file" name="image" value="{{ $doctor->image }}">
            <input type="hidden" name="image">
        </div>

        <div class="form-group">
            <label>Short Biography</label>
            <input name="biography" value="{{ $doctor->biography }}" class="form-control" rows="6" placeholder="Enter text ..."></input>
        </div>
        <div class="form-group">
            <label>Specialist</label>
            <input type="text" name="specialist" value="{{ $doctor->specialist }}" class="form-control" placeholder="Specialist" required>
        </div>
        <div class="form-group">
            <label>Date of Birth</label>
            <input name="dob" value="{{ $doctor->dob }}" class="datepicker form-control hasDatepicker" type="text" placeholder="Date of Birth">
        </div>
        <div class="form-group">
            <label>Blood group</label>
            <select name="blood_group" value="{{ $doctor->blood_group }}" class="form-control">
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
                <input type="radio" name="gender" value="{{ $doctor->gender }}" value="1" checked="checked">Male</label>
            <label class="radio-inline"><input type="radio" name="sex" value="0">Female</label>

        </div>
        <div class="form-check">
            <label>Status</label><br>
            <label class="radio-inline">
                <input type="radio" name="status" value="{{ $doctor->status }}" value="1" checked="checked">Active</label>
            <label class="radio-inline">
                <input type="radio" name="status" value="0">Inctive
            </label>
        </div>

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

</div> <!-- /.content-wrapper -->