@extends('admin.body.admin_master')
@section('admin')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
      
      <!-- Main content -->
      <section class="content">
        <div class="row">
            
          <div class="col-12">

           <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Department List</h3>
                <a href="{{ route('department.add') }}" class="btn btn-rounded btn-success mb-5" style="float: right">+ Add Department</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">No</th>
                              {{-- <th>University</th> --}}
                              <th>Faculty</th>
                              <th>Name</th>
                              <th>Country</th>
                              <th>State</th>
                              <th>City</th>
                              <th width="25%">Action</th>
                              
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($departments as $key => $department)     
                        <tr>
                          <td>{{ ++$key }}</td>
                          {{-- <th>{{ $department->faculty->university_id }}</th> --}}
                          <th>{{ $department->faculty_id }}</th>
                          <td>{{ $department->name }}</td>
                          <td>{{ $department->address->country->name }}</td>
                          <td>{{ $department->address->state->name }}</td>
                          <td>{{ $department->address->city->name }}</td>
                          
                          <td>
                              <a href="{{ route('department.edit', $department->id) }}" class="btn btn-rounded btn-info mb-5">Edit</a>
                              <a href="{{ route('department.delete', $department->id) }}" class="btn btn-rounded btn-danger mb-5" id="delete">Delete</a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->

            
            <!-- /.box -->          
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    
    </div>
</div>
<!-- /.content-wrapper -->

    

@endsection