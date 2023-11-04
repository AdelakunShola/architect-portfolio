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

    <form class="row g-3" action="{{ route('update.project',$editData->id) }}" method="post" enctype="multipart/form-data">
        @csrf

       

        <div class="col-md-6">
            <label for="input3" class="form-label">Main Image </label>
            <input type="file" name="image" class="form-control" id="image"  >

            <img id="showImage" src="{{ (!empty($editData->image)) ? url('upload/projectdetail/'.$editData->image) : url('upload/no_image.jpg') }} "
                 alt="" class="bg-primary" width="70" height="50"> 
        </div>




        <div class="col-md-6">
            <label for="input4" class="form-label">Gallery Image </label>
            <input type="file" name="multi_img[]" class="form-control" 
            multiple id="multiImg" accept="image/jpeg, image/jpg, image/gif, 
            image/png" >


            @foreach ($multiimg as $item)

            <img src="{{ (!empty($item->multi_image)) ? url('upload/projectdetail/multi/'.$item->multi_image) : url('upload/no_image.jpg') }}" alt="Admin" class="bg-primary" width="60"> 

              <a href="{{ route('multi.image.delete',$item->id) }}"><i class="lni lni-close"></i> </a>  

            @endforeach

           
              
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
            <input type="text" name="project_type" class="form-control" id="input1" value="{{ $editData->project_type }}" > 
            
        </div>

        
        <div class="col-md-4">
            <label for="input2" class="form-label">Client Name</label>
            <input type="text" name="client" class="form-control" id="input6"  value="{{ $editData->client }}">
        </div>

        <div class="col-md-4">
            <label for="input2" class="form-label">Creative Director </label>
            <input type="text" name="creative_director" class="form-control" id="input2" value="{{ $editData->creative_director }}">
        </div>

        <div class="col-md-4">
            <label for="input2" class="form-label">Youtube Link </label>
            <input type="text" name="link_url" class="form-control" id="input5" value="{{ $editData->link_url }}">
        </div>
        

        <div class="col-md-12">
            <label for="input11" class="form-label">Title </label>
            <textarea name="title" class="form-control" id="input11" placeholder="Title ..." rows="3">{{ $editData->title }}</textarea>
        </div>

  
        <div class="col-md-12">
            <label for="input11" class="form-label">Short Description </label>
            <textarea name="short_desc" class="form-control" id="input4" placeholder="Short Description ..." rows="3">{{ $editData->short_desc }}</textarea>
        </div>

        <div class="col-md-12">
            <label for="input11" class="form-label"> Description </label>
            <textarea name="main_desc" class="form-control" id="myeditorinstance" >{!! $editData->main_desc !!}</textarea>
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



@endsection