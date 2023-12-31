@extends('admin.admin_dashboard')
@section('admin')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Edit Service</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Edit Service</li>
							</ol>
						</nav>
					</div>
					
				</div>
				<!--end breadcrumb-->
				<div class="container">
					<div class="main-body">
						<div class="row">
							
							<div class="col-lg-8">
								<div class="card">
                                    <form action="{{ route('service.update',['id' => $service->id]) }}" method="post" enctype="multipart/form-data" >
                                        @csrf

                                        <input type="hidden" name="id" value="{{ $service->id }}"

									<div class="card-body">
										<div class="row mb-3">
											<div class="col-sm-3">
												<h6 class="mb-0">Title</h6>
											</div>
											<div class="col-sm-9 text-secondary">
												<input type="text" name="title" class="form-control" value="{{($service->title)}}" />
											</div>
										</div>
                                        
										
                                        <div class="row mb-3">
											<div class="col-md-12">
												<h6 class="mb-0"Description>Text</h6>
											</div>
											<div class="form-group col-sm-9 text-secondary">
                                            <textarea name="desc" class="form-control" id="input11" placeholder="Address ..." rows="3">{{($service->desc)}}</textarea>
											</div>
										</div>
										
										





										<div class="row">
											<div class="col-sm-3"></div>
											<div class="col-sm-9 text-secondary">
												<input type="submit" class="btn btn-primary px-4" value="Save Changes" />
											</div>
										</div>
									</div>
                                    </form>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>



@endsection