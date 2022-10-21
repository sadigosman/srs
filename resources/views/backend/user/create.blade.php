@extends('admin.body.admin_master')
@section('admin')
<div class="content-wrapper">
    <div class="container-full">

      <!-- Main content -->
      <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Form Validation</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Forms</li>
								<li class="breadcrumb-item active" aria-current="page">Form Validation</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>	  

		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Add User</h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form action="{{ route('user.store') }}" method="POST">
                        @csrf
					    <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>User Role <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="user_type" id="select" required="" class="form-control">
                                            <option value="" selected="" disabled="" >Select Role</option>
                                            <option value="Admin">Admin</option>
                                            <option value="User">User</option>
                                            <option value="Engineer">Engineer</option>
                                        </select>
                                    
                                    </div>		
                                </div>	
                            </div>	
                            <div class="col-md-6">		
                                <div class="form-group">
                                    <h5>User Name <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="name" class="form-control" required=""/> 
                                    </div>
                                    
                                </div>
                            </div>
                        </div>  <!-- End Row -->
                        <div class="row"> <!--  Start row -->  
                            <div class="col-md-4">		
                                <div class="form-group">
                                    <h5>Email <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="email" name="email" class="form-control" required=""/> 
                                    </div>
                                </div>
                            </div>                 
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Password Input Field <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="password" name="password" class="form-control" required="" > 
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Repeat Password Input Field <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="password" name="password2"  class="form-control" required=""> 
                                    </div>
                                </div>
                            </div>
                        
                        </div>  <!-- End Row -->
						<div class="text-xs-right">
                            <input type="submit" class="btn btn-info btn-rounded mb-5" value="submit"/>
						</div>
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
		<!-- /.content -->
	  </div>
      <!-- /.content -->
    </div>
</div>
@endsection
