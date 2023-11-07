@extends('admin.admin_dashboard')
@section('admin') 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content">
			 
				<div class="container">
					<div class="main-body">
						<div class="row">

<div class="card">
    <div class="card-body">
       
        <div class="tab-content py-3">
            <div class="tab-pane fade active show" id="primaryhome" role="tabpanel">
              
                <div class="col-xl-12 mx-auto">
						
                    <div class="card">
                        <div class="card-body p-4">
                            <h5 class="mb-4">Edit Project Type</h5>

    <form class="row g-3" action="{{ route('update.project.type',$editType->id) }}" method="post" enctype="multipart/form-data">
        @csrf

       

     <!--==========    <div class="col-md-4">
                    <label for="input7" class="form-label">Project Type </label>
                    <select name="" id="input7" class="form-select">
                        <option selected="">Select Status...</option>
                        <option value="Active">  </option>
                       
                       
                    </select>
                </div>  ==============-->

                <div class="col-md-4">
            <label for="input1" class="form-label">Project Type </label>
            <input type="text" name="name" class="form-control" id="input1" value="{{ $editType->name }}" > 
            
        </div>


        <div class="col-md-12">
            <div class="d-md-flex d-grid align-items-center gap-3">
                <button type="submit" class="btn btn-primary px-4">Save Changes</button> 
            </div>
        </div>
    </form>
                        </div>
                    </div>
 
                </div>
             </div>
         
       </div>
    </div>
</div>
	</div>
		</div>
		</div>
        </div>

 
        




@endsection