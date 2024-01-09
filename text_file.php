@extends('layouts.layout')

@section('title','Desboard')

@section('content')


<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
<div class="container-fluid py-4">

<div class="row">
        <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            @foreach($archive1 as $cd)
            <div class="card-header p-3 pt-2">
              <!-- <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10"></i>
              </div> -->
              <div class="text pt-1">
                <!-- <h4 class="mb-0">{{ $cd->id}}</h4> -->
                <p class="text-sm mb-0 text-capitalize"><b>Name:</b> => {{ $cd->author }}</p>
                <p class="text-sm mb-0 text-capitalize"><b>Title:</b> => {{ $cd->title }}</p>
                <p class="text-sm mb-0 text-capitalize"><b>Page:</b> => {{ $cd->pageno }}</p>
                <p class="text-sm mb-0 text-capitalize"><b>Country:</b> => {{ $cd->country }}</p>
                <p class="text-sm mb-0 text-capitalize"><b>Subject:</b> => {{ $cd->sub }}</p>
                <p class="text-sm mb-0 text-capitalize"><b>File:</b> => {{ $cd->file }}</p>
                <!--  <p class="text-sm mb-0 text-capitalize">Tittle => {{ $cd->title }}</p>
                <p class="text-sm mb-0 text-capitalize">Tittle => {{ $cd->title }}</p>
                <p class="text-sm mb-0 text-capitalize">Tittle => {{ $cd->title }}</p>
                <p class="text-sm mb-0 text-capitalize">Tittle => {{ $cd->title }}</p>
                <p class="text-sm mb-0 text-capitalize">Tittle => {{ $cd->title }}</p> -->

              </div>

            </div>
            
            <hr class="dark horizontal my-0">

            </br>
</br>
</br>

            @endforeach
          </div>
        </div>
</div>



</div>
</main>



@endsection