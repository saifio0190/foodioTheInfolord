@extends('layouts.homeview')
@section('content') 


<script>

function searchItems(){  

  // {{$_SERVER['HTTP_HOST']}}

  category=$('#searchCategory').val();
  
  // location.href = '/foodiO/searchItems'+category;
  document.searchItemForm.submit();
  console.log(category);
}


function cancelOrder(id){

    
      var confirmDelete = false;
      jConfirm('do you want to Cancel  :  '+id+'?', 'Confirmation', function(r) {
          cancelOrderDone(id,r);
      });
    }
    function cancelOrderDone(id, confirmDelete){
      if(confirmDelete){
        console.log('jjs');
        console.log(id);
        var data1={'_token': $('meta[name="token"]').attr('content'), 'id':id};
        $.ajax({
               type:'POST',
               url:'cancelOrderDone',
               data:  data1,
               success:function(data) {
                  console.log(data['msg']);
                   
                      // $("#statistic__item"+id).css( "opacity", .1);
                       $('#tableOrderData'+id).hide(); 
                       location.reload();
                   
               }
            });
      } else {
        console.log('not selected');
        return false;
      }
    }


</script>


  <div class="modal fade" id="myModal" data-backdrop="static" data-keyboard="false" role="dialog" style="overflow-y: auto;">
    <div class="modal-dialog modal-m">
    
      <!-- Modal content-->
      <div class="modal-content" >
        <div class="modal-header"  >
          
          <h6 class="modal-title" id="updateResult1" style="margin-left: 40%"> Place order 
          </h6>   

          <!-- <button type="button" class="close" id="modalmy" data-dismiss="modal">&times;</button>     -->

        </div>  
      
      
      </div>
      
    </div>
  </div>

<section class="saction4">
  <div class="container" id="offer">
   
@foreach($orders as $key => $order)

@php
if($order->deliveryStatus ==0){
@endphp
    <div class="col-lg-4 col-md-4 col-sm-4  itemDisplay{{$order->id}}">
      <div class="slider clearfix os-animation" data-os-animation="fadeInDown
        " data-os-animation-delay="1s">
        
        @php
        if($order->deliveryStatus==0){
        @endphp
          <div class="img">Delivery : <span style="color: lightgrey">pending</span>

            @php
            } else{
            @endphp
          <div class="img">Delivery : <span style="color: lightgrey">done</span>
            @php
          }
          @endphp
          
          Payment :  <span style="color: lightgrey">pending</span> <br>
          Date :  <span style="color: lightgrey">{{$order->created_at}}</span>
         </div>
        <div class="title">
          <h3> &nbsp&nbsp&nbsp{{$order->order_id }}</h3>
          <p id="itemRate">&nbsp&nbsp&nbspINR  <span class="itemAmount" id="itemAmount{{$order->id}}">{{$order->amount }}</span><span>.00 </span>
            &nbsp 

                      
                       
                 <span> <br> <br> &nbsp&nbsp</span> 
                 @php
                 if($order->isCancel==1){
                 @endphp

        <button style="background-color: transparent; padding-top: -20px;" id="orderItem{{$order->id}}" 
          onclick="cancelOrder('{{$order->id}}')" disabled="">
        <span  class="grabutton" id="grabuttontextGrab{{$order->id}}"  style="background-color: lightgreen"> Cancelled  <i class="zmdi zmdi-check" style=""></i> &nbsp   </span>
         </button>  
                 @php
               }else{
               @endphp
                <button style="background-color: transparent; padding-top: -20px;" id="orderItem{{$order->id}}" 
          onclick="cancelOrder('{{$order->id}}')">
        <span  class="grabutton" id="grabuttontextGrab{{$order->id}}"  style=""> cancel  <i class="zmdi zmdi-undo" style=""></i> &nbsp   </span>
         </button>  

             @php 
           }
            @endphp
        

        
    
  <span  style=" display:none; ;">
  <input type="checkbox" name="grabuttoncheck" id="grabuttoncheck{{$order->id}}"  
   style="font-size: 20px; position: absolute;
  height: 20px;
  width: 20px;
  background-color: #eee;" 
   >
  <span class="checkmark"></span>
  </span>
        </div>
      </div>
    </div>
    @php
    }else {
    @endphp

 <div class="col-lg-4 col-md-4 col-sm-4  itemDisplay{{$order->id}}">
      <div class="slider clearfix os-animation" data-os-animation="fadeInDown
        " data-os-animation-delay="1s">


         
        @php
        if($order->deliveryStatus==0){
        @endphp
          <div class="img">Delivery : <span style="color: lightgrey">pending</span>

            @php
            } else{
            @endphp
          <div class="img">Delivery : <span style="color: lightgrey">done</span>
            @php
          }
          @endphp
           @php
        if($order->paymentStatus==0){
        @endphp

          Payment :  <span style="color: lightgrey">pending</span>
           @php
            } else{
            @endphp
            Payment :  <span style="color: lightgrey">done</span>
             @php
          }
          @endphp
          <br>
          Date :  <span style="color: lightgrey">{{$order->created_at}}</span>

         </div>
        <div class="title">
          <h3> &nbsp&nbsp&nbsp{{$order->order_id }}</h3>
          <p id="itemRate">&nbsp&nbsp&nbspINR  <span class="itemAmount" id="itemAmount{{$order->id}}">{{$order->amount }}</span><span>.00 </span>
            &nbsp 

                      
                       
                 <span> <br> <br> &nbsp&nbsp</span> 
        <button style="background-color: transparent; padding-top: -20px;" id="orderItem{{$order->id}}" 
          onclick="ongrabcartquantity('{{$order->id}}','{{$order->id}}')" disabled="">
        <span  class="grabutton" id="grabuttontextGrab{{$order->id}}"  style="font-size: 20px color:darkgrey; background-color: lightgreen"> success  <i class="zmdi zmdi-check" style=""></i> &nbsp   </span>

        

         </button>        
 
        </div>
      </div>
    </div>
     @php
    }
    @endphp

    @endforeach
       

  </div>
</section>





<footer class="saction8">
  <div class="container" id="contact">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="site">
          <h3>About Us</h3>
        </div>
        <div class="sitelink">
          <ul>
            <li> <span>&#10152;</span>><a href="https://www.facebook.com/saifio1994">Know us</a></a></li>
            <li><span>&#10152;</span><a href="https://www.linkedin.com/in/itzsaifio/">Contact Us</a></li>
            
          </ul>
        </div>
      </div>
      
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="follow">
          <h3>Follow Us On...</h3>
        </div>
        <div class="social">
          <ul>
            <li> <i class="fa fa-facebook-square"></i><a href="https://www.facebook.com/saifio1994">Facebook</a></li>
            <li><i class="fa fa-linkedin-square"></i><a href="https://www.linkedin.com/in/itzsaifio/">Linkedin</a></li>
            
          </ul>
        </div>
      </div>
 
    </div>
  </div>
</footer>
<footer class="saction9">
  <div class="container" id="lastsection">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="email">&copy; All right reserved 2019  /  foodiO </div>
        <!-- <p class="freetemplates">Free Template by <a href="http://freetemplates.pro/">FreeTemplates.pro</a></p> -->
      </div>
    </div>
  </div>
</footer>


@endsection

