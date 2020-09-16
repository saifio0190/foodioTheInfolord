
@extends('layouts.main')

<?php 
 
 // session_start();
 $email='admin@foodio.co';
 $name='admin';

 ?>


 <script>
     
     function isActivemake(id,name){

         

    // console.log(id);
     jConfirm('Do you want to make item '+name+ ' Active'+'?', 'Confirmation', function(r) {
          makeItemActive(id,name,r);
      });

    // var data1={'_token': $('meta[name="token"]').attr('content'), 'id':id};
    //     $.ajax({
    //            type:'POST',
    //            url:'makeItemActive',
    //            data:  data1,
    //            success:function(data) {
    //               console.log(data['msg']);
                   
    //                   // $("#statistic__item"+id).css( "opacity", .1);
    //                    $('#activeItemCheck'+id).hide(); 
    //                    $('#activeItemCheckhide'+id).show(); 
                   
    //            }
    //         });


   




     }


function makeItemActive(id,name, confirmDelete){


  console.log(id);
  console.log(name);
  
      if(confirmDelete){
        console.log(name+"name");
        console.log(id);
        var data1={'_token': $('meta[name="token"]').attr('content'), 'id':id};
        $.ajax({
               type:'POST',
               url:'makeItemActive',
               data:  data1,
               success:function(data) {
                  console.log(data['msg']);
                   
                      // $("#statistic__item"+id).css( "opacity", .1);
                       $('#activeItemCheck'+id).hide(); 
                       $('#activeItemCheckhide'+id).show(); 
                   
               }
            });
      } else {
        console.log('not selected');
        return false;
      }
    }

      function isinActivemake(id,name){

 
  // console.log(id);
  // console.log(name);
  // var data1={'_token': $('meta[name="token"]').attr('content'), 'id':id};
  //       $.ajax({
  //              type:'POST',
  //              url:'makeIteminActive',
  //              data:  data1,
  //              success:function(data) {
  //                 console.log(data['msg']);
                   
  //                     // $("#statistic__item"+id).css( "opacity", .1);
  //                      $('#activeItemCheck'+id).hide(); 
  //                      $('#activeItemCheckhide'+id).show(); 
                   
  //              }
  //           });

    jConfirm('Do you want to make item '+name+ ' InActive'+'?', 'Confirmation', function(r) {
          makeIteminActive(id,name,r);
      });





     }

     function makeIteminActive(id,name, confirmDelete){
      if(confirmDelete){
        console.log(name+"name");
        console.log(id);
        var data1={'_token': $('meta[name="token"]').attr('content'), 'id':id};
        $.ajax({
               type:'POST',
               url:'makeIteminActive',
               data:  data1,
               success:function(data) {
                  console.log(data['msg']);
                   
                      // $("#statistic__item"+id).css( "opacity", .1);
                       $('#activeItemCheck'+id).hide(); 
                       $('#activeItemCheckhide'+id).show(); 
                   
               }
            });
      } else {
        console.log('not selected');
        return false;
      }
    }
 </script>

@section('content')




                               <div class="card" style="margin-top: 96px;">
                                <div  class=" text-center" style="background-color: lightgrey; font-weight: bold;"> MANAGE ITEMS  </div>
                                    <div class="card-header" style="position: inherit;"> 

                                      <div class="row">
                                     <div  class="col col-m-5"> <h4 class="title-16 m-b-2">{{ $items->render()}}</h4>  </div>
                                     <div  class="col col-m-4"> &nbsp  </div>
                                    <div class="col col-m-3">  
                                  <form action="/foodiO/searchItems" method="post" name="searchItemForm" id="cartform">
                                  {{csrf_field()}}

                                  <select class="" name="searchCategory" id="searchCategory" onchange="searchItems();">

                                  <option  value="defaultwala" selected hidden>Search Category</option>


                                  </select>
                                  </form> 
                                </div>
                                </div> 
                                </div>
                                    <div class="card-body">

   
                                        
                                     
                                         
                                         <!-- <hr> -->
                                       <div class="table-responsive table-responsive-data2" style="overflow-y: auto;">
                                    <table class="table table-data2">
                                        <thead style="border: 1px red">
                                            <tr>
                                                <th>
                                                    Active Status
                                                </th>
                                                <th>name</th>
                                                <th>price</th>
                                                <th>Special</th>
                                                
                                                <th>Category</th>
                                                <th>Last Modify</th>
                                              
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach($items as $key=> $item)
                                            <tr class="tr-shadow">

                                                @php
                                                if($item->isActive==1){
                                                @endphp
                                                <td>
                                                   
                                                    <button  id="activeItemCheck{{$item->id}}" onclick="isinActivemake('{{$item->id}}',
                                                    '{{$item->name}}')" >
                                                     <span  class="grabutton" id="grabuttontextCancel{{$item->id}}" style=" font-size: 27px;" >  <i class="zmdi zmdi-dot-circle" style=""></i> &nbsp   </span>
                                                      </button>
                                                       
                                                      <button   id="activeItemCheckhide{{$item->id}}" onclick="isActivemake('{{$item->id}}','{{$item->name}}')" style="display: none">
                                                     <span  class="grabutton" id="grabuttontextCancel{{$item->id}}" style=" font-size: 27px;" >  <i class="zmdi zmdi-circle-o" style=""></i> &nbsp   </span>
                                                      </button> 
                                                </td>
                                                  @php
                                                } else {
                                                @endphp
                                                  <td>
                                                <button  id="activeItemCheck{{$item->id}}"  onclick="isActivemake('{{$item->id}}','{{$item->name}}')">
                                                 <span  class="grabutton" id="grabuttontextCancel{{$item->id}}" style=" font-size: 27px;" >  <i class="zmdi zmdi-circle-o" style=""></i> &nbsp   </span>
                                                </button> 


                                              <button  id="activeItemCheckhide{{$item->id}}" onclick="isinActivemake('{{$item->id}}','{{$item->name}}')" style="display: none">
                                                 <span  class="grabutton" id="grabuttontextCancel{{$item->id}}" style=" font-size: 27px;" >  <i class="zmdi zmdi-dot-circle" style=""></i> &nbsp   </span>
                                                  </button> 
                                                </td>
                                                  @php
                                                } 
                                                @endphp
                                                
                                                <td>
                                                   {{ $item->name }}
                                                </td>
                                                <td>
                                                      {{ $item->price }}
                                                </td>
                                                 
                                                 @php
                                                 if($item->isSpecial==0){
                                                  @endphp
                                                    <td>{{ 'No' }}</td>
                                                  @php }else{ 
                                                  @endphp
                                                  <td>{{ 'Yes' }}</td>

                                                   @php

                                                 }
                                                   @endphp
                                                 
                                              
                                                
                                                
                                                
                                                <td>
                                                    <span class="status--process">{{ $item->category }}</span>
                                                
                                                </td>
                                                <td><span class="block-email">{{$item->created_at }}</span></td>
                                             

                                                </tr>
                                                @endforeach

                                                
                                       
                                        </tbody>
                                    </table>
                                </div>
                                    </div>
                                </div>

                                 </section>
                @endsection('content')
