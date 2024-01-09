@extends('layouts.layout')
@section('title','Desboard')
@section('content')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
   <style>
      #customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
      }
      #customers td, #customers th {
      border: 1px solid #ddd;
      padding: 8px;
      }
      #customers tr:nth-child(even){background-color: #f5e2e9;}
      #customers tr:hover {background-color: #ddd;font-family: sans-serif;}
      #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #e91e63;;
      color: white;
      text-align: center;
      }
      @media (min-width: 576px){
      .form-inline .form-control {
      display: inline-block;
      width: 279px;
      vertical-align: middle;
      }
      }
   </style>
   <div class="container bg-light">
      <div class="container-fluid py-4 mt-3">
         <nav class="navbar navbar-light bg-light justify-content-between">
            <a class="navbar-brand">ALL ARTICLES</a>
            <form class="form-inline" action="">
               <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search by Author name or Refrence" aria-label="Search" />
               <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
               <a href="{{url('/archive1')}}">
               <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Reset</button>
               </a>
            </form>
         </nav>
         </br>
         <table id="customers">
            <thead>
               <tr>
                  <th style="width: 59px;">S No</th>
                  <th scope="col" style="width: 138px;">Author</th>
                  <th scope="colspan="2>Title</th>
                  <th scope="col">PageNo</th>
                  <th scope="col">Country</th>
                  <th scope="col">Subject</th>
                  <th scope="col">More Action</th>
               </tr>
            </thead>
            <tbody style="font-size: 14px;">
               @foreach($archive1 as $cd)
               <tr style="border: 1px solid lightgray;">
                  <td style="width: 59px;"><b>{{ $cd->id}}</b></td>
                  <td style="width: 167px;height: auto;">{{ $cd->author }} </br></br>Ref No = {{ $cd->reference }}</td>
                  <td>{{ $cd->title }}</td>
                  <td>{{ $cd->pageno }}</td>
                  <td>{{ $cd->country }}</td>
                  <td>{{ $cd->sub }}</td>
                  <td>
                     <!-- Example single danger button -->
                     <div class="btn-group">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                        </button>
                        <div class="dropdown-menu">
                           <a class="dropdown-item" href="{{ $cd->id }}/edit_article">Edit Article</a>
                           <a class="dropdown-item" href="#">Download Article</a>
                           <a class="dropdown-itemm" href="#">
                           <?php
                              if ($cd['stutes']==0){
                                 echo '<p><a class="dropdown-item" href="status.php?id='.$cd['id'].'&status=0">
                                    Activate</a> </p>';
                              }else{
                                 echo '<p><a class="dropdown-item" href="Status.php?id='.$cd['id'].'&status=1">
                                    Deactivate</a> </p>';
                              } 
                                                                        
                              ?>  
                           </a> 
                           <a 
                              class="dropdown-item bg-danger text-light"
                              onclick="return confirm('Are you sure you want to delete this item?')"
                              href="{{asset('delete')}}/{{$cd->id}}">
                           Delete Article
                           </a>
                           {{-- <a class="dropdown-item bg-danger text-light" href="{{ $cd->id }}/delete">Delete Article</a> --}}
                        </div>
                     </div>
                     Stutes : 
                  </td>
               </tr>
               @endforeach
            </tbody>
         </table>
      </div>
   </div>
   @endsection
</main>