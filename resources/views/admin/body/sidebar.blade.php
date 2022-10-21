@php
  $prefix = Request::route()->getPrefix();
  $route = Route::current()->getName();   
@endphp



<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="index.html">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="{{ asset('backend/images/logo-dark.png') }}" alt="">
						  <h3><b>SRS</b> Admin</h3>
					 </div>
				</a>
			</div>
        </div>
       
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
		<li>
          <a href="index.html">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li>  
        
        {{-- Manage User --}}
        <li class="treeview {{ ($prefix == '/users')?'active':'' }}">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Manage User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('user.index') }}"><i class="ti-more"></i>View User</a></li>
            <li><a href="{{ route('user.add') }}"><i class="ti-more"></i>Add User</a></li>
          </ul>
        </li> 
        
        
        {{-- User Profile --}}
        <li class="treeview {{ ($prefix == '/profile')?'active':'' }}">
          <a href="#">
            <i data-feather="mail"></i> <span>Manage Profile</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('profile.index') }}"><i class="ti-more"></i>Your Profile</a></li>
            <li><a href="mailbox_compose.html"><i class="ti-more"></i>Change Password</a></li>
            
          </ul>
        </li>
        
        {{-- Setup --}}
        <li class="treeview {{ ($prefix == '/setup')?'active':'' }}">
          <a href="#">
            <i data-feather="mail"></i> <span>User Profile</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('address.index') }}"><i class="ti-more"></i>Address</a></li>
            <li><a href="{{ route('university.index') }}"><i class="ti-more"></i>University</a></li>
            <li><a href="{{ route('faculty.index') }}"><i class="ti-more"></i>Faculty</a></li>
            <li><a href="{{ route('department.index') }}"><i class="ti-more"></i>Department</a></li>
            {{-- <li><a href="{{ route('major.index') }}"><i class="ti-more"></i>Major</a></li> --}}
            
          </ul>
        </li>
		
      	  
		 
        <li class="header nav-small-cap">User Interface</li>
		  
        <li class="treeview">
          <a href="#">
            <i data-feather="grid"></i>
            <span>Components</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="components_alerts.html"><i class="ti-more"></i>Alerts</a></li>
            <li><a href="components_badges.html"><i class="ti-more"></i>Badge</a></li>
    
          </ul>
        </li>
		
		
		  
		<li>
          <a href="auth_login.html">
            <i data-feather="lock"></i>
			<span>Log Out</span>
          </a>
        </li> 
        
      </ul>
    </section>
	
	<div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
		<!-- item-->
		<a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
	</div>
  </aside>
