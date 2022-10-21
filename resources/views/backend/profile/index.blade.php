@extends('admin.body.admin_master')
@section('admin')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
     

        <!-- Main content -->
        <section class="content">
            <div class="row">
            
                <div class="col-12">
                      <!-- /.box -->
                    <div class="box box-widget widget-user">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-black" style="background: url('../images/gallery/full/10.jpg') center center;">
                            <h3 class="widget-user-username">{{ $user->name }}</h3>
                            <a href="{{ route('profile.edit') }}" class="btn btn-rounded btn-success mb-5" style="float: right"> Edit Profile</a>
                            <h6 class="widget-user-desc">{{ $user->user_type }}</h6>
                            <h6 class="widget-user-desc">{{ $user->email }}</h6>

             
                        </div>
                        <div class="widget-user-image">
                            <img class="rounded-circle" src="{{ 
                                (!empty($user->image))?
                                url('uploads/user_images/'.$user->image):
                                url('uploads/no_image.jpg'); }}" alt="User Avatar">
                        </div>
                        @if ($user !=null)
                        
                        <div class="box-footer">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="description-block">
                                        <h5 class="description-header">Mobile</h5>
                                        <span class="description-text">{{ $user->mobile }}</span>
                                    </div> <!-- /.description-block -->
                                </div>   <!-- /.col -->
                                <div class="col-sm-4 br-1 bl-1">
                                    <div class="description-block">
                                        <h5 class="description-header">Address</h5>
                                        <span class="description-text">{{ $user->address }}</span>
                                    </div>  <!-- /.description-block -->
                                </div>   <!-- /.col -->
                                <div class="col-sm-4">
                                    <div class="description-block">
                                        <h5 class="description-header">Sex</h5>
                                        <span class="description-text">{{ $user->sex }}</span>
                                    </div>      <!-- /.description-block -->
                                </div>   <!-- /.col -->
                            </div>   <!-- /.row -->
                        </div> {{-- Box end --}}
                        @else
                        
                        <div class="box-footer">
                            <div class="row">
                                <h3>The Applicant did not apply yet</h3>
                            </div>   <!-- /.row -->
                        </div> {{-- Box end --}}
                        @endif
                    </div>  <!-- /.box -->
                </div>  <!-- /.Col-12 -->
             
            </div> <!-- /.row -->
        </section>   <!-- /.content -->
    
    </div>
</div>
<!-- /.content-wrapper -->

    

@endsection