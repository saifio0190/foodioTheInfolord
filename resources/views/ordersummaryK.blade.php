@extends('layouts.main1')
@section('content')

<?php   
$order_id='1';
  $expandFlag='';
 ?>
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
                                            </select>
                                             --><div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="row m-t-30">
                          <h6 class="title-5 m-b-15">{{ $orders->render()}}</h6>
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-30">
                                    <table class="table table-hover table-data3">
                                        <thead>
                                            <tr>
                                                 <th width="15%">Email</th>
                                                
                                                <th width="5%">TABLE</th>
                                                <th width="5%">ITEM</th>
                                                

                                                <th width="10%">AMOUNT</th>
                                                 <th width="20%;">DATE</th>
                                                
                                               
                                                <th style="font-size: 30; font-weight: bolder;">...</th>
                                              
                                            </tr>
                                        </thead>
                                        <tbody>
                                         @foreach($orders as $key => $order)
                                            <!-- {{gettype($order)}} -->
                                            <?php  

                                              $orderClassName = 'orderDetailCLass_'.$order->order_id;
                                            
                                             
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
                                                       
                                                      
                                                         <button class="item" id="zoomIn{{$orderClassName}}" onclick="showExpanded('{{$orderClassName}}','{{$order->order_id}}')" data-toggle="tooltip" data-placement="top" title="expand">
                                                            <i class="zmdi zmdi-zoom-in"></i>
                                                        </button>
                                                        <button class="item" id="zoomOut{{$orderClassName}}" onclick="showDeduce('{{$orderClassName}}','{{$order->order_id}}')" data-toggle="tooltip" data-placement="top" title="expand" style="display: none;">
                                                            <i class="zmdi zmdi-zoom-out"></i>
                                                        </button>
                                                    </div>
                                                </td>

                                                

                                          


                                            </tr>

                                            <tr id="hiddenTr1Expandit{{$key}}" class="<?php echo $orderClassName;?>" style="display: none; line-height: 16px;  ">
                                              <td class="text-center">{{'Order Id'}}</td>
                                              <td class="text-center">{{'Quantity'}}</td>
                                              <td class="text-center">{{'Table'}}</td>
                                              <td class="text-center">{{'Delivered '}}</td>
                                              <td class="text-center">{{'Recieved '}}</td>
                                              <td class="text-center">{{'Name'}}</td>
                                            </tr>

                                              <tr id="hiddenTr1Expandit{{$key}}" class="<?php echo $orderClassName;?>" style="display: none; line-height: 16px;">
                                              <td class="text-center">{{$order->order_id}}</td>
                                              <td class="text-center">{{$order->qty}}</td>
                                              <td class="text-center">{{$order->tableId}}</td>
                                              <td class="text-center">{{$order->deliverBy}}</td>
                                              <td class="text-center">{{$order->paymentRecived}}</td>
                                              <td class="text-center">{{$order->name}}</td>
                                              </tr>

                                            <?php  
                                           
                                          } else{ ?>
                                              <tr id="hiddenTr2Expandit{{$key}}" class="<?php echo $orderClassName;?>" style="display:none; ; line-height: 16px;">
                                              <td class="text-center">{{$order->order_id}}</td>
                                              <td class="text-center">{{$order->qty}}</td>
                                              <td class="text-center">{{$order->tableId}}</td>
                                              <td class="text-center">{{$order->deliverBy}}</td>
                                              <td class="text-center">{{$order->paymentRecived}}</td>
                                              <td class="text-center">{{$order->name}}</td>
                                                 </tr>

                                           <?php

                                            } 
                                             $order_id=$order->order_id; 
                                            ?>
                                         
                                            @endforeach
                                         
                                           
                                        </tbody>

                                    </table>
                                    <p>  {{ $orders->render()}}</p>
                                    <!-- <h4 class="title-5 m-b-35"></h4> -->
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                       
                    </div>
                </div>

                @endsection