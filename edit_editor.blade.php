@extends('layouts.layout')
@section('title','Desboard')
@section('content')
<main class="main-content mt-6 position-relative max-height-vh-100  border-radius-lg ">
   <nav class="navbar justify-content-between"style="width: 99%;background-color: #eb1187;
      color: aliceblue;">
      <a class="navbar-brand">EDIT EDITOR</a>
   </nav>
      @if($message = Session::get('Success'))
   <div class="alert alert-success alert-block">
      <strong>{{ $message }}</strong>
   </div>
   @endif
   
   <div class="container bg-light" style="width: 99%;">
      <div class="container-fluid py-4 mt-3">
         <form method="POST" action="update_editor" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-row">
               <div class="form-group col-md-4">
                  <label for="inputname">Name</label>
                  <input type="name" class="form-control" name="editor_name" id="inputname" placeholder="Name" value="{{ old('editor_name',$editorial_new1->editor_name) }}">
                  @if($errors->has('editor_name'))
                  <span class="text-danger">{{ $errors->first('editor_name') }}
                  </span>                  
                  @endif
               </div>
               <div class="form-group col-md-4">
                  <label for="inputemail">Email</label>
                  <input type="email" class="form-control" name="email" id="inputemail" placeholder="Enter Email" value="{{ old('email',$editorial_new1->email) }}">
                  @if($errors->has('email'))
                  <span class="text-danger">{{ $errors->first('email') }}
                  </span>                  
                  @endif
                </div>
               <div class="form-group col-md-4">
                  <label for="inputdegree">Degree</label>
                  <input type="text" class="form-control" name="degree" id="inputdegree" placeholder="Degree" value="{{ old('degree',$editorial_new1->degree) }}">
                  @if($errors->has('degree'))
                  <span class="text-danger">{{ $errors->first('degree') }}
                  </span>                  
                  @endif
                </div>
            </div>
            <div class="form-row">
               <div class="form-group col-md-4">
                  <label for="inputpost">Post</label>
                  <input type="text" class="form-control" name="post" id="inputpost" placeholder="Enter Your Post" value="{{ old('post',$editorial_new1->post) }}">
                   @if($errors->has('post'))
                  <span class="text-danger">{{ $errors->first('post') }}
                  </span>                  
                  @endif              
                </div>
               <div class="form-group col-md-5">
                  <label for="inputAffiliation">Affiliation</label>
                  <input type="text" class="form-control" name="affiliation" id="inputAffiliation" placeholder="Enter Affiliation" value="{{ old('affiliation',$editorial_new1->affiliation) }}">
                  @if($errors->has('affiliation'))
                  <span class="text-danger">{{ $errors->first('affiliation') }}
                  </span>                  
                  @endif
               </div>
               <div class="form-group col-md-3">
                  <label for="inputContact">Contact</label>
                  <input type="tel" class="form-control" name="contact" id="inputContact" placeholder="Contact" value="{{ old('contact',$editorial_new1->contact) }}">
                  @if($errors->has('contact'))
                  <span class="text-danger">{{ $errors->first('contact') }}
                  </span>                  
                  @endif
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col-md-12">
                  <label for="inpulink">Profile Link</label>
                  <input class="form-control" name="profile_link" id="inpulink"  value="{{ old('profile_link',$editorial_new1->profile_link) }}">
                  @if($errors->has('profile_link'))
                  <span class="text-danger">{{ $errors->first('profile_link') }}
                  </span>                  
                  @endif
               </div>
               {{-- <div class="form-group col-md-6">
                  <label for="inputdoc">Document</label>
                  <input type="file" class="form-control" name="doc" id="inputdoc" value="{{ old('doc',$editorial_new1->doc) }}">
                  @if($errors->has('doc'))
                  <span class="text-danger">{{ $errors->first('doc') }}
                  </span>                  
                  @endif
               </div> --}}
            </div>
            <div class="form-row">
               <div class="form-group col-md-6">
                  <label for="inputimg">Upload Image</label>
                  <input type="file" class="form-control" name="image_name" id="inputimg" value="{{ old('image_name',$editorial_new1->image_name) }}">
                  @if($errors->has('image_name'))
                  <span class="text-danger">{{ $errors->first('image_name') }}
                  </span>                  
                  @endif
               </div>
               <div class="form-group col-md-6">
                  <label for="inputCategory">Category</label>
                  <select class="form-control" name="category" id="inputCategory" value="{{ old('category',$editorial_new1->category) }}">
                     <option>Select Category</option>
                     <option>Associate-Editors</option>
                     <option>Editor-in-Chief</option>
                  </select>
               </div>
            </div>
            <button class="btn btn-primary" type="submit">Update form</button>  
         </form>
      </div>
   </div>
   @endsection
</main>