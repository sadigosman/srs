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
                <h3 class="box-title">Adresses List</h3>
                <a href="{{ route('address.add') }}" class="btn btn-rounded btn-success mb-5" style="float: right">+ Add Address</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">No</th>
                              <th>Country</th>
                              <th>State</th>
                              <th>City</th>
                              <th>Quarter</th>
                              <th>Street</th>
                              <th width="25%">Action</th>
                              
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($addresses as $key => $address)     
                        <tr>
                          <td>{{ ++$key }}</td>
                          <td>{{ $address->country->name }}</td>
                          <td>{{ $address->state->name }}</td>
                          <td>{{ $address->city->name }}</td>
                          <td>{{ $address->quarter }}</td>
                          <td>{{ $address->street }}</td>
                            <td>
                                <a href="{{ route('address.edit', $address->id) }}" class="btn btn-rounded btn-info mb-5">Edit</a>
                                <a href="{{ route('address.delete', $address->id) }}" class="btn btn-rounded btn-danger mb-5" id="delete">Delete</a>
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