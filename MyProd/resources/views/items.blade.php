@extends('layouts.main')
@section('content')
<script src="public/js/home&items.js"></script>


<style>
  
  .description{

    position: absolute;
   

  }
</style>


        <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <span class="au-breadcrumb-span">You are here:</span>
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item active">
                                                <a href="#">Home</a>
                                            </li>
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <li class="list-inline-item">Dashboard</li>
                                        </ul>
                                    </div>
                                    <button class="au-btn au-btn-icon au-btn--green"
                                     onclick="window.location='{{URL::to('/addItem') }}'">
                                        <i class="zmdi zmdi-plus"></i>add item</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->
    <div class="modal fade" id="myModal" data-backdrop="static" data-keyboard="false" role="dialog">
    <div class="modal-dialog ">
    
      <!-- Modal content-->
      <div class="modal-content" >
        <div class="modal-header"  >
          
          <h6 class="modal-title" id="updateResult1" style="text-align: center;"> Update Menu 
          </h6>   

  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
  @foreach ($errors->all() as $error)
   <li>{{ $error }}</li>
  @endforeach
        </ul>
    </div>
   @endif
          <button type="button" class="close" id="modalmy" data-dismiss="modal">&times;</button>    

        </div>  
      
        <div class="modal-body">
                  <div class="login-content">
                        
                          <div class="login-form">
                            <form action="#" method="post">
                              {{csrf_field()}}
                                <div class="form-group">
                                    
          
                                    <input class="au-input au-input--full" type="hidden" name="id"  id="id" >
                                    <input class="au-input au-input--full" type="name" name="name"  id="name" >
                                    <input class="au-input au-input--full" type="price" name="price" id="price" >
                                    <!-- <input class="au-input au-input--full" type="file" name="img" id="img" >  -->

                                    <select class="form-control" name="isSpecial" id="isSpecial">
                                    <option value="1">Yes</option>
                                     <option value="0"selected hidden>Special Item ?</option>
                                    <option value="0" >No</option>
   
                                     </select>
                                    <span id="updateResult2"> </span>
                                      <!-- </script> -->
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" onclick="updateModalform();" type="button" >update menu</button>
                            </form>
                        </div>
                    </div>
        </div>
      
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

            <!-- STATISTIC-->
            <section class="statistic">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    
                        <div class="row">

                               @foreach($items as $key => $item)

                                @php
                                if($item->isActive ==1){
                                @endphp
  
                               <div class="col-md-6 col-lg-3">
                                 <div class="statistic__item" id="statistic__item{{$item->id}}" style="    border: 2px solid darkgrey;">
                            <img  src="{{asset('/storage/app/items/'.$item->img)}}" id="itemimage{{$item->id}}" style="width:220px;" alt=""/ onmouseover="showDescription('{{$key}}')" onmouseleave="removeDiscription('{{$key}}')">
                            
                            <div class="description" id="description{{$key}}"  style="display: none; font-weight: bold;"> {{$item->name }}<br>Rs: {{$item->price}}  </div>
                              
                                        <div class="table-data-feature" id="itemDesc{{$key}}" style="">
                                           <span class="desc" style="text-align: left;  color: green">{{$item->name}} &nbsp&nbsp</span>
                                                       <!--  <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </button> -->
                                                        <button class="item"  data-toggle="modal" data-target="#myModal" data-placement="top" title="Edit" onclick="ediModalform('{{$item->id}}','{{$item->name}}','{{$item->price}}')">

                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete" onclick="deleteItem('{{$item->id}}','{{$item->name}}')">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        <!-- <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                            <span id="itemAction"></span>
                                                        </button> -->
                                                         
                                                    </div>
                                </div>
                                </div>
                                @php
                                } else{
                                @endphp


                               <div class="col-md-6 col-lg-3">
                                 <div class="statistic__item" id="statistic__item{{$item->id}}" style=" border: 1px solid lightgrey;">
                            <img  src="http://localhost:8080/foodiO/storage/app/items/{{ $item->img}}" id="itemimage{{$item->id}}" style="width:220px;" alt=""/ onmouseover="showDescription('{{$key}}')" onmouseleave="removeDiscription('{{$key}}')">
                            
                            <div class="description" id="description{{$key}}"  style="display: none; font-weight: bold;"> {{$item->name }}<br>Rs: {{$item->price}}  </div>
                              
                                        <div class="table-data-feature" id="itemDesc{{$key}}" style="">
                                           <span class="desc" style="text-align: left;">{{$item->name}} &nbsp&nbsp</span>
                                                       <!--  <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </button> -->
                                                        <button class="item"  data-toggle="modal" data-target="#myModal" data-placement="top" title="Edit" onclick="ediModalform('{{$item->id}}','{{$item->name}}','{{$item->price}}')">

                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete" onclick="deleteItem('{{$item->id}}','{{$item->name}}')">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        <!-- <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                            <span id="itemAction"></span>
                                                        </button> -->
                                                         
                                                    </div>
                                </div>
                                </div>
                                 @php
                                } 
                                @endphp
                                @endforeach
                             <!--   <div class="col-md-6 col-lg-3">
                                 <div class="statistic__item">
                                <img src="images/pizz.png" alt=""/>
                                <span class="desc">pepper Pizaa : 222</span>
                               
                            </div>
                            </div> -->
                             </div>
                </div>
            </section>
                @endsection('content')
       