@extends('layouts.main')
@section('content')

<?php   
$order_id='1';
  $expandFlag='';
 ?>




 <div class="modal fade" id="myModal" data-backdrop="static" data-keyboard="false" role="dialog">
    <div class="modal-dialog ">
    
      <!-- Modal content-->
      <div class="modal-content" >
        <div class="modal-header"  >
          
          <h6 class="modal-title" id="updateResult1" style="text-align: center;"> Delete Order 
          </h6>   


          <button type="button" class="close" id="modalmy" data-dismiss="modal">&times;</button>    

        </div>  
      
        <div class="modal-body">
                  <div class="login-content">
                        
                          <div class="login-form">
                            <form action="#" method="post">
                              {{csrf_field()}}
                                <div class="form-group">
                                    
                                     <span>Action will delete Order &nbsp&nbsp</span><span id="deleOrder"></span> <span>&nbsp &nbsp Please enter your admin password and proceed. </span> 
                                     <p>&nbsp</p>
                                    <input class="au-input au-input--full" type="hidden" name="id"  id="id" >
                                    <input class="au-input au-input--full" type="email" name="email"  id="userEmail" value="{{ Session::get('adminusers') }}" >
                                    <input class="au-input au-input--full" type="password" name="password" id="userPassword" placeholder="Enter password" >
                                    <!-- <input class="au-input au-input--full" type="file" name="img" id="img" >  -->

                                    <!-- <select class="form-control" name="isSpecial" id="isSpecial">
                                    <option value="1">Yes</option>
                                     <option value="0"selected hidden>Special Item ?</option>
                                    <option value="0" >No</option> -->
   
                                     </select>
                                    <span id="updateResult2"> </span>
                                      <!-- </script> -->
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" onclick="deleteOrder();" type="button" >Proceed to Delete</button>
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
 <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        

                      

                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                               

                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">T1</option>
                                                <option value="">T2</option>
                                                <option value="">T3</option>
                                                <option value="">T4</option>
                                                <option value="">T5</option>
                                                <option value="">T6</option>

                                            </select>
                                            <div class="dropDownSelect2"></div>  
                                        </div>
                                        
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-search"></i>Search</button>
                                        <!-- <button class="au-btn-filter">
                                            <i class="zmdi zmdi-filter-list"></i>filters</button> -->
                                    </div>
                                    <div class="table-data__tool-right">
                                        <div class="rs-select2--light rs-select2--sm">
                                            <select class="js-select2" name="time">
                                                <option selected="selected">Today</option>
                                                <option value="">3 Days</option>
                                                <option value="">1 Week</option>
                                                  <option value="">1 Month</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>

                                        </div>
                                        
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                            <!-- <select class="js-select2" name="type">
                                                <option selected="selected">Export</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select> -->
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="row m-t-1">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                 <h6 class="title-5 m-b-15">{{ $orders->render()}}</h6>
                                <div class="table-responsive m-b-30">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                
                                                <th width="15%">Email</th>
                                                
                                                <th width="5%">TABLE</th>
                                                <th width="5%">ITEM</th>
                                                

                                                <th width="10%">AMOUNT</th>
                                                 <th width="30%;">DATE</th>
                                                
                                               
                                                <th style="font-size: 30; font-weight: bolder;">...</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                              
                                            @foreach($orders as $key => $order)
                                            <!-- {{gettype($order)}} -->
                                            <?php  

                                              $orderClassName = 'orderDetailCLass_'.$order->order_id;


                                              // echo  "1  :  ".   strtotime($order->created_at);
                                              // echo "<br>";
                                              // echo  "2 : ".time();
                                              // echo "<br>";

                                              
                                            
                                             
                                             if($order->order_id !== $order_id || $key == 0) { 
                                                // exit();
                                              ?>

                                            <tr id="tableOrderData{{$order->id }}" style="font-weight: bold;">
                                                
                                                <td class="text-center">{{$order->email }}</td>
                                                
                                                <td class="text-center">{{$order->tableId }}</td>
                                                
                                                <td class="text-center">{{$order->items }}</td>
                                                <td class="text-center">{{$order->amount }}</td>
                                                <td class="text-center">{{$order->created_at }}</td>
                                               <!--         <td class="text-center">{{substr($order->created_at ,5,5) }}</td>
                                                <td>{{substr($order->created_at ,-8) }}</td> -->
                                            
                                            
                                                 
                                                <td>
                                                    <div class="table-data-feature">
                                                        <button class="item" 
                                                        onclick="makeOrderPay('{{$order->id}}','{{$order->order_id}}')" 
                                                        data-placement="top" title="Send to Done">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </button>
                                                       <!--  <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button> -->
                                                        <button class="item"   data-toggle="modal" data-target="#myModal"
                                                        onclick="ediModalform('{{$order->id}}','{{$order->order_id}}') "data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>

                                                        <button class="item" id="zoomIn{{$orderClassName}}" onclick="showExpanded('{{$orderClassName}}','{{$order->order_id}}')" data-toggle="tooltip" data-placement="top" title="expand">
                                                            <i class="zmdi zmdi-zoom-in"></i>
                                                        </button>
                                                        <button class="item" id="zoomOut{{$orderClassName}}" onclick="showDeduce('{{$orderClassName}}','{{$order->order_id}}')" data-toggle="tooltip" data-placement="top" title="expand" style="display: none;">
                                                            <i class="zmdi zmdi-zoom-out"></i>
                                                        </button>
                                                    </div>
                                                </td>

                                                

                                          


                                            </tr>

                                            <tr id="hiddenTr1Expandit{{$key}}" class="<?php echo $orderClassName;?>" style="display: none; line-height: 15px;  ">
                                              <td class="text-center">{{'Order Id'}}</td>
                                              <td class="text-center">{{'Quantity'}}</td>
                                              <td class="text-center">{{'Table'}}</td>
                                              <td class="text-center">{{'Deliver By'}}</td>
                                              <td class="text-center">{{'Delivery'}}</td>
                                              <td class="text-center">{{'Name'}}</td>
                                            </tr>

                                              <tr id="hiddenTr1Expandit{{$key}}" class="<?php echo $orderClassName;?>" style="display: none; line-height: 15px;">
                                              <td class="text-center">{{$order->order_id}}</td>
                                              <td class="text-center">{{$order->qty}}</td>
                                              <td class="text-center">{{$order->tableId}}</td>
                                              <td class="text-center">{{$order->deliverBy}}</td>
                                              <td class="text-center">{{$order->deliveryStatus}}</td>
                                              <td class="text-center">{{$order->name}}</td>
                                              </tr>

                                            <?php  
                                           
                                          } else{ ?>
                                              <tr id="hiddenTr2Expandit{{$key}}" class="<?php echo $orderClassName;?>" style="display:none; ; line-height: 15px; background-color: rgba(255,255,245,0.5);">
                                              <td class="text-center">{{$order->order_id}}</td>
                                              <td class="text-center">{{$order->qty}}</td>
                                              <td class="text-center">{{$order->tableId}}</td>
                                              <td class="text-center">{{$order->deliverBy}}</td>
                                              <td class="text-center">{{$order->deliveryStatus}}</td>
                                              <td class="text-center">{{$order->name}}</td>
                                                 </tr>

                                           <?php

                                            } 
                                             $order_id=$order->order_id; 
                                            ?>
                                         
                                           

                                            @endforeach
                                           
                                             
                                         
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                       
                    </div>
                </div>


                @endsection
                
<script type="text/javascript">

   
 var data1={'email':'raja@gmail.com','password':'raja12','userType':'admin'};
              
              $.ajax({
               type:'POST',
               url:'http://localhost:8091/loginAdmin',
               data:  data1,
               success:function(data) {
                
                data = JSON.parse(data);                 
                   if (data) {

                       console.log('data',data);
                       if (data.status == 1) {

                        console.log('calling token');
                         getapiToken(data);

                       jAlert(data.msg,'SUCCESS');
                       
                     }
                      if (data.status ==0) {
                      jAlert(data.msg,'FAILED');
                      return false;
                      }
                    } else {
                        jAlert(data,'FAILED');
                        return false;
                      }
                   
               }
            });

           
</script>
