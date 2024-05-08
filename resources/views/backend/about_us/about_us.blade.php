@extends('admin.admin_dashboard')
@section('admin') 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content">
			 
				<div class="container">
					<div class="main-body">
						<div class="row">
   
<div class="card">
    <div class="card-body">
        <ul class="nav nav-tabs nav-primary" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" data-bs-toggle="tab" href="#primaryhome" role="tab" aria-selected="true">
                    <div class="d-flex align-items-center">
                        <div class="tab-icon"><i class="bx bx-home font-18 me-1"></i>
                        </div>
                        <div class="tab-title">About Page </div>
                    </div>
                </a>
            </li>
          
            
        </ul>
        <div class="tab-content py-3">
            <div class="tab-pane fade active show" id="primaryhome" role="tabpanel">
              
                <div class="col-xl-12 mx-auto">
						
                    <div class="card">
                        <div class="card-body p-4">
                           

    <form class="row g-3" action="{{ route('update.about') }}" method="post" enctype="multipart/form-data">
        @csrf

        <input type="hidden" name="id" value="{{ $aboutpage->id }}">

       

        <div class="col-md-12">
            <label for="input11" class="form-label">Title </label>
            <textarea name="main_title" class="form-control" id="input11" placeholder="Title ..." rows="2">{{ $aboutpage->main_title }}</textarea>
        </div>
  
        <div class="col-md-12">
            <label for="input11" class="form-label">Short Description </label>
            <textarea name="short_desc" class="form-control" id="input11" placeholder="Short Description ..." rows="3">{{ $aboutpage->short_desc }}</textarea>
        </div>


        <div class="col-md-12">
            <label for="input11" class="form-label">Long Description </label>
            <textarea name="main_desc" class="form-control" id="input11" placeholder="Long Description ..." rows="5">{!! $aboutpage->main_desc !!}</textarea>
        </div>

       
        <div class="col-md-12">
            <label for="input11" class="form-label">Link Url </label>
            <textarea name="link_url" class="form-control" id="input11" placeholder="Title ..." rows="2">{{ $aboutpage->link_url }}</textarea>
        </div>  
              </div>
                           
                 </div>
                    </div>
                 </div> 
                       </div>
                             <br>
           
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


@endsection