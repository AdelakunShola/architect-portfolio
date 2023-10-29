@extends('admin.admin_dashboard')
@section('admin') 

<div class="page-content"> 
	<!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
         
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">All Room List </li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="{{ route('add.room.list') }}" class="btn btn-primary px-5">Add Booking </a>
                
            </div>
        </div>
    </div>
    <!--end breadcrumb-->


    
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Project Type</th>
                            <th>Creative Director</th>
                            <th>YT-link </th>
                            <th>Image</th>
                            <th>Desc</th>
                            <th>Short_Desc </th>
                            <th>Title</th>
                            <th>Room Number</th>
                            <th>YT-link </th>
                            
                        </tr>
                    </thead>
                   
                 
                </table>
            </div>
        </div>
    </div>
     
    <hr/>
     
</div>




@endsection