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
                            <h5 class="mb-4">Update Project Details</h5>

    <form class="row g-3" action="" method="post" enctype="multipart/form-data">
        @csrf

       

        <div class="col-md-6">
            <label for="input3" class="form-label">Main Image </label>
            <input type="file" name="image" class="form-control" id="image"  >

            <img id="showImage" src="" alt="Admin" class="bg-primary" width="70" height="50"> 
        </div>




        <div class="col-md-6">
            <label for="input4" class="form-label">Gallery Image </label>
            <input type="file" name="multi_img[]" class="form-control" multiple id="multiImg" accept="image/jpeg, image/jpg, image/gif, image/png" >

           

            <img src="" alt="Admin" class="bg-primary" width="60"> 

              <a href=""><i class="lni lni-close"></i> </a>  

         


            <div class="row" id="preview_img"></div>
        </div>

     <!--==========    <div class="col-md-4">
                    <label for="input7" class="form-label">Project Type </label>
                    <select name="" id="input7" class="form-select">
                        <option selected="">Select Status...</option>
                        <option value="Active">  </option>
                       
                       
                    </select>
                </div>  ==============-->

                <div class="col-md-4">
            <label for="input1" class="form-label">Project Type </label>
            <input type="text" name="roomtype_id" class="form-control" id="input1" value="{{ $editData->project_type }}" > 
            
        </div>

        
        <div class="col-md-4">
            <label for="input2" class="form-label">Client Name</label>
            <input type="text" name="client" class="form-control" id="input2"  value="{{ $editData->client }}">
        </div>

        <div class="col-md-4">
            <label for="input2" class="form-label">Creative Director </label>
            <input type="text" name="creative_director" class="form-control" id="input2" value="{{ $editData->creative_director }}">
        </div>

        <div class="col-md-4">
            <label for="input2" class="form-label">Youtube Link </label>
            <input type="text" name="link_url" class="form-control" id="input2" value="{{ $editData->link_url }}">
        </div>
        

        <div class="col-md-12">
            <label for="input11" class="form-label">Title </label>
            <textarea name="title" class="form-control" id="input11" placeholder="Address ..." rows="3">{{ $editData->title }}</textarea>
        </div>

  
        <div class="col-md-12">
            <label for="input11" class="form-label">Short Description </label>
            <textarea name="short_desc" class="form-control" id="input11" placeholder="Address ..." rows="3">{{ $editData->short_desc }}</textarea>
        </div>

        <div class="col-md-12">
            <label for="input11" class="form-label"> Description </label>
            <textarea name="main_desc" class="form-control" id="myeditorinstance" >{{ $editData->main_desc }}</textarea>
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

 
        <script type="text/javascript">

        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });

        </script>   
        
        
        <!--------===Show MultiImage ========------->
<script>
    $(document).ready(function(){
     $('#multiImg').on('change', function(){ //on file input change
        if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
        {
            var data = $(this)[0].files; //this file data
             
            $.each(data, function(index, file){ //loop though each file
                if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                    var fRead = new FileReader(); //new filereader
                    fRead.onload = (function(file){ //trigger function on successful read
                    return function(e) {
                        var img = $('<img/>').addClass('thumb').attr('src', e.target.result) .width(100)
                    .height(80); //create image element 
                        $('#preview_img').append(img); //append image to output element
                    };
                    })(file);
                    fRead.readAsDataURL(file); //URL representing the file's data.
                }
            });
             
        }else{
            alert("Your browser doesn't support File API!"); //if File API is absent
        }
     });
    });
 </script>


<!--========== Start of add Basic Plan Facilities ==============-->
<div style="visibility: hidden">
    <div class="whole_extra_item_add" id="whole_extra_item_add">
       <div class="basic_facility_section_remove" id="basic_facility_section_remove">
          <div class="container mt-2">
             <div class="row">
                <div class="form-group col-md-6">
                   <label for="basic_facility_name">Room Facilities</label>
                   <select name="facility_name[]" id="basic_facility_name" class="form-control">
                         <option value="">Select Facility</option>
  <option value="Complimentary Breakfast">Complimentary Breakfast</option>
  <option value="32/42 inch LED TV" > 32/42 inch LED TV</option>
  <option value="Smoke alarms" >Smoke alarms</option>
  <option value="Minibar"> Minibar</option>
  <option value="Work Desk" >Work Desk</option>
  <option value="Free Wi-Fi">Free Wi-Fi</option>
  <option value="Safety box" >Safety box</option>
  <option value="Rain Shower" >Rain Shower</option>
  <option value="Slippers" >Slippers</option>
  <option value="Hair dryer" >Hair dryer</option>
  <option value="Wake-up service" >Wake-up service</option>
  <option value="Laundry & Dry Cleaning" >Laundry & Dry Cleaning</option>
  <option value="Electronic door lock" >Electronic door lock</option> 
                   </select>
                </div>
                <div class="form-group col-md-6" style="padding-top: 20px">
                   <span class="btn btn-success addeventmore"><i class="lni lni-circle-plus"></i></span>
                   <span class="btn btn-danger removeeventmore"><i class="lni lni-circle-minus"></i></span>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 
 <script type="text/javascript">
    $(document).ready(function(){
       var counter = 0;
       $(document).on("click",".addeventmore",function(){
             var whole_extra_item_add = $("#whole_extra_item_add").html();
             $(this).closest(".add_item").append(whole_extra_item_add);
             counter++;
       });
       $(document).on("click",".removeeventmore",function(event){
             $(this).closest("#basic_facility_section_remove").remove();
             counter -= 1
       });
    });
 </script>
 <!--========== End of Basic Plan Facilities ==============-->

  <!--========== Start Room Number Add ==============-->
    <script>
        $('#roomnoHide').hide();
        $('#roomview').show();

        function addRoomNo(){
            $('#roomnoHide').show();
            $('#roomview').hide();
            $('#addRoomNo').hide();
        }

    </script>

   <!--========== End Room Number Add ==============-->


@endsection