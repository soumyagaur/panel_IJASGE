@extends('layouts.layout')
@section('title','Desboard')
@section('content')
<main class="main-content mt-6 position-relative max-height-vh-100  border-radius-lg ">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

 <nav class="navbar justify-content-between"style="width: 99%;background-color: #eb1187;
      color: aliceblue;">
      <a class="navbar-brand">ADD EDITOR</a>
   </nav>
   <div class="container bg-light" style="width: 99%;">
      <div class="container-fluid py-4 mt-3">
         <form method="POST" action="store" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
               <div class="form-group col-md-4">
                  <label for="inputname">Name</label>
                  <input type="name" class="form-control" name="editor_name" id="inputname" placeholder="Name">
                  @if($errors->has('editor_name'))
                  <span class="text-danger">{{ $errors->first('editor_name') }}
                  </span>                  
                  @endif
               </div>
               <div class="form-group col-md-4">
                  <label for="inputemail">Email</label>
                  <input type="email" class="form-control" name="email" id="inputemail" placeholder="Enter Email">
                  @if($errors->has('email'))
                  <span class="text-danger">{{ $errors->first('email') }}
                  </span>                  
                  @endif
                </div>
               <div class="form-group col-md-4">
                  <label for="inputdegree">Degree</label>
                  <input type="text" class="form-control" name="degree" id="inputdegree" placeholder="Degree">
                  @if($errors->has('degree'))
                  <span class="text-danger">{{ $errors->first('degree') }}
                  </span>                  
                  @endif
                </div>
            </div>
            <div class="form-row">
               <div class="form-group col-md-4">
                  <label for="inputpost">Post</label>
                  <input type="text" class="form-control" name="post" id="inputpost" placeholder="Enter Your Post">
                   @if($errors->has('post'))
                  <span class="text-danger">{{ $errors->first('post') }}
                  </span>                  
                  @endif              
                </div>
               <div class="form-group col-md-5">
                  <label for="inputAffiliation">Affiliation</label>
                  <input type="text" class="form-control" name="affiliation" id="inputAffiliation" placeholder="Enter Affiliation">
                  @if($errors->has('affiliation'))
                  <span class="text-danger">{{ $errors->first('affiliation') }}
                  </span>                  
                  @endif
               </div>
               <div class="form-group col-md-3">
                  <label for="inputContact">Contact</label>
                  <input type="tel" class="form-control" name="contact" id="inputContact" placeholder="Contact" >
                  @if($errors->has('contact'))
                  <span class="text-danger">{{ $errors->first('contact') }}
                  </span>                  
                  @endif
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col-md-12">
                  <label for="inpulink">Profile Link</label>
                  <textarea type="text" class="form-control" name="profile_link" id="inpulink" placeholder="Enter Profile Link" ></textarea>
                  @if($errors->has('profile_link'))
                  <span class="text-danger">{{ $errors->first('profile_link') }}
                  </span>                  
                  @endif
               </div>
               {{-- <div class="form-group col-md-6">
                  <label for="inputdoc">Document</label>
                  <input type="file" class="form-control" name="doc" id="inputdoc" >
                  @if($errors->has('doc'))
                  <span class="text-danger">{{ $errors->first('doc') }}
                  </span>                  
                  @endif
               </div> --}}
            </div>
            <div class="form-row">
               <div class="form-group col-md-6">
                  <label for="inputimg">Upload Image</label>
                  <input type="file" class="form-control" name="image_name" id="inputimg" >
                  @if($errors->has('image_name'))
                  <span class="text-danger">{{ $errors->first('image_name') }}
                  </span>                  
                  @endif
               </div>
               <div class="form-group col-md-6">
                  <label for="inputCategory">Category</label>
                  <select class="form-control" name="category" id="inputCategory">
                     <option>Select Category</option>
                     <option>Associate-Editors</option>
                     <option>Editor-in-Chief</option>
                  </select>
               </div>
            </div>
            <button class="btn btn-primary" type="submit">Submit form</button>  
         </form>
      </div>
   </div>

   @if (Session::has('message'))
   <script>
      swal("Message","{{ Session::get('message') }}",'success',{
         button::true,
         button::"Ok",
      });
   </script>    
@endif

   @endsection
</main>