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
                <h3 class="box-title">Faculty List</h3>
                <a href="{{ route('faculty.add') }}" class="btn btn-rounded btn-success mb-5" style="float: right">+ Add Faculty</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">No</th>
                              <th>Name</th>
                              <th>University</th>
                              <th>Country</th>
                              <th>State</th>
                              <th>City</th>
                              <th width="25%">Action</th>
                              
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($faculties as $key => $faculty)     
                        <tr>
                          <td>{{ ++$key }}</td>
                          <td>{{ $faculty->name }}</td>
                          <th>{{ $faculty->university_id }}</th>
                          <td>{{ $faculty->address->country->name }}</td>
                          <td>{{ $faculty->address->state->name }}</td>
                          <td>{{ $faculty->address->city->name }}</td>
                          
                          <td>
                              <a href="{{ route('faculty.edit', $faculty->id) }}" class="btn btn-rounded btn-info mb-5">Edit</a>
                              <a href="{{ route('faculty.delete', $faculty->id) }}" class="btn btn-rounded btn-danger mb-5" id="delete">Delete</a>
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