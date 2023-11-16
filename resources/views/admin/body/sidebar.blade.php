<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="{{asset('backend/assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Arc</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
				</div>
			 </div>
			<!--navigation-->
			<ul class="metismenu" id="menu">

            <li>
					<a href="widgets.html">
						<div class="parent-icon"><i class='bx bx-home-alt'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>


				
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-category"></i>
						</div>
						<div class="menu-title">Manage Teams</div>
					</a>
					<ul>
						<li> <a href="{{ route('all.team') }}"><i class='bx bx-radio-circle'></i>All Team</a>
						</li>
						<li> <a href="{{ route('add.team') }}"><i class='bx bx-radio-circle'></i>Add Team</a>
						</li>
						
					</ul>
				</li>


				<li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">Manage Home Page</div>
            </a>
            <ul>
            
                <li> <a href="{{ route('home.page') }}"><i class='bx bx-radio-circle'></i>Home Page</a>
                </li>
				<li> <a href="{{ route('home.multi.image') }}"><i class='bx bx-radio-circle'></i>Home Multi Image</a>
                </li>
               
               
                 
            </ul>
        </li>



				<li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">Manage About Us</div>
            </a>
            <ul>
            
                <li> <a href="{{ route('about.page') }}"><i class='bx bx-radio-circle'></i>About Us</a>
                </li>
				<li> <a href="{{ route('about.multi.image') }}"><i class='bx bx-radio-circle'></i>About Multi Image</a>
                </li>
               
               
                 
            </ul>
        </li>


		<li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">Manage Project Type</div>
            </a>
            <ul>
            
                <li> <a href="{{ route('project.type.list') }}"><i class='bx bx-radio-circle'></i>Project Type List</a>
                </li>
				
               
               
                 
            </ul>
        </li>


		<li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">Manage Project Details</div>
            </a>
            <ul>
            
                <li> <a href="{{ route('project.list') }}"><i class='bx bx-radio-circle'></i>All Project</a>
				<li> <a href="{{ route('project.list') }}"><i class='bx bx-radio-circle'></i>All Project</a>
                </li>
				
               
               
                 
            </ul>
        </li>




		<li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">Client</div>
            </a>
            <ul>
            
                <li> <a href="{{ route('client.list') }}"><i class='bx bx-radio-circle'></i>All Client</a>
                </li>

				<li> <a href="{{ route('add.client') }}"><i class='bx bx-radio-circle'></i>Add Client</a>
                </li>
				
               
               
                 
            </ul>
        </li>



		<li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">Testimonial</div>
            </a>
            <ul>
            
                <li> <a href="{{ route('testimonial.list') }}"><i class='bx bx-radio-circle'></i>All Testimonial</a>
                </li>

				<li> <a href="{{ route('add.testimonial') }}"><i class='bx bx-radio-circle'></i>Add Testimonial</a>
                </li>
				
               
               
                 
            </ul>
        </li>


				<li class="menu-label">UI Elements</li>
				
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-cart'></i>
						</div>
						<div class="menu-title">eCommerce</div>
					</a>
					<ul>
						<li> <a href="ecommerce-products.html"><i class='bx bx-radio-circle'></i>Products</a>
						</li>
						<li> <a href="ecommerce-products-details.html"><i class='bx bx-radio-circle'></i>Product Details</a>
						</li>
						
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
						</div>
						<div class="menu-title">Components</div>
					</a>
					<ul>
						<li> <a href="component-alerts.html"><i class='bx bx-radio-circle'></i>Alerts</a>
						</li>
						<li> <a href="component-accordions.html"><i class='bx bx-radio-circle'></i>Accordions</a>
						</li>
						
					</ul>
				</li>
				
			
			
				
				
				
				
				
				
				
				
				
				<li class="menu-label">Others</li>
			
			
				<li>
					<a href="https://themeforest.net/user/codervent" target="_blank">
						<div class="parent-icon"><i class="bx bx-support"></i>
						</div>
						<div class="menu-title">Support</div>
					</a>
				</li>
			</ul>
			<!--end navigation-->
		</div>