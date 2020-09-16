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

</script>

<section class="backgraound">
  <div class="container" >
    <div class="row">
    <p>&nbsp</p>
    </div> 
    
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="textbox os-animation" data-os-animation="zoomIn" data-os-animation-delay="0.5s">
        <h4>&nbsp</h4>
        <!-- <input type="text" placeholder="Swagath Grand" /> -->
        <form action="/foodiO/searchItems" method="post" name="searchItemForm" id="cartform">
                              {{csrf_field()}}

    <select class="" name="searchCategory" id="searchCategory" onchange="searchItems();">

    <option  value="defaultwala" selected hidden>Search Category</option>
     @foreach($categories as $categorys)
    <option value="{{$categorys->id }}">{{$categorys->name }} {{$categorys->id }}</option>
    
     @endforeach
     
  </select>
</form>
      </div>
    </div>
   <!--  <div class="col-lg-6 col-md-6 col-sm-6">
      <div class="textbox1 os-animation" data-os-animation="zoomIn" data-os-animation-delay="0.5s">
        <h3></h3>
        <input type="text" placeholder="Chicken Biriyani" />
       
    </div>
  </div> -->
</section>
  <div class="modal fade" id="myModal" data-backdrop="static" data-keyboard="false" role="dialog" style="overflow-y: auto;">
    <div class="modal-dialog modal-m">
    
      <!-- Modal content-->
      <div class="modal-content" >
        <div class="modal-header"  >
          
          <h6 class="modal-title" id="updateResult1" style="margin-left: 40%"> Place order 
          </h6>   

          <!-- <button type="button" class="close" id="modalmy" data-dismiss="modal">&times;</button>     -->

        </div>  
      
        <div class="modal-body">
                  <div class="login-content">
                
                          <div class="login-form" id="login-formModal">
                            <form action="#" method="post" name="cartform" id="cartform">
                              {{csrf_field()}}
                                <div class="form-group">
                              
                                   <div class="cartModal" id="cartModal">


                            <div class="row ">

                            <div class="col-3 " style="line-height: 40px;"> 
                              <span class="itemidi">Name</span>

                               <span class="itemidincartItemname"></span>
                            </div> 
                            <!-- <div class="col-1 " style="line-height: 40px;"> 

                               <span class="itemidincartItemname1"></span>
                            </div>  -->
                            <div class="col-1" style="line-height: 40px;"> 
                       
                              
                              <span class="itemidincartQuantity"></span>
                              
                            </div>
                             <div class="col-1" style="line-height: 40px;"> 
                                       <span class="itemidi">Quantity</span>
                              
                              <span class="itemQuantityincart"></span>
                              
                            </div>
                            <div class="col-1" style="line-height: 40px;"> 
                              
                              <span class="itemQuantityincarts"></span>
                              
                            </div>
                            <div class="col-1" style="line-height: 40px;"> 
                              
                              <span class="itemQuantityincartss"></span>
                              
                            </div>
                               <div class="col-1" style="line-height: 40px;">
                                  <span class="itemidis">Amount</span>
                             <span class="itemidincartUpdate" ></span>
                            </div>
                             
                               <div class="col-1" style="line-height: 40px;">
                             <span class="itemidincartUpdates" ></span>
                            </div>
                            <div class="col-1" style="line-height: 40px;">

                             <span class="itemidincartUpdate1" ></span>
                            </div>
                             <div class="col-1" style="line-height: 40px;">
                                 <span class="itemidi">Modify</span>
                             <span class="itemidincartUpdate2" ></span>
                            </div>
                         
                                    
                                    
                            </div>
                            </div>

                               
                                </div>
                                
                                <br>
                                 <span>Rs:  &nbsp <span id="totalPay"></span>&nbsp &nbsp &nbsp</span>

    <select class="" name="isSpecial" id="sel1">
    <option value="1" disabled="">Online Razorpay</option>
    <option value="0" selected>Pay On counter</option>
<!--     <option value="1">Desserts</option>
    <option value="0" >Salad</option>
    <option value="0" >Chinese & Fast food</option>   -->  
    </select>
    <span>&nbsp&nbsp&nbsp</span>

                                
        <select class="" name="selectTableId" id="selectTableId">
 
    <option value="emptyTab" selected hidden=""> Your table</option>
     @foreach($tables as $table)
    <option value="{{$table->id }}">{{$table->id }}</option>
   @endforeach
 
    </select>
    <br> <br>
    <button class="au-btn au-btn--block au-btn--green " id="modalOrder"  type="button"  onclick="orderNow();" style="text-align:center;"> Order Now</button>
    <br>

   <button class="btn btn-primary" id="spinnerButton" style="display: none; margin-left: 40%" >
  <span class="spinner-border spinner-border-sm"></span>
  Loading..
</button>

                            </form>
                        </div>
                        <h4 id="orderIdText" style="text-align: center;"> </h4>
                    </div>
        </div>
      
        <div class="modal-footer" id="modalFooter" style="text-align: center;">
         
          <h6 style="text-align: center;">
            <button class="au-btn au-btn--block au-btn--blue" id="modalmyOk" data-dismiss="modal" type="button" onclick="closeresetCart();" style="display: none; margin-left: -210%"> OK</button>
             <button class="btn btn btn-danger" id="resetCart" onclick="resetCart();" s type="button">Reset cart</button>
              </h6>
          
          
           <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
          <button class="btn  btn-primary" id="modalmy" data-dismiss="modal" type="button"  style="text-align:center;"> 
            Add more
          </button>
          
    
        </div>
      </div>
      
    </div>
  </div>

<section class="saction4">
  <div class="container" id="offer">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="dotted3 os-animation" data-os-animation="bounceInLeft" data-os-animation-delay="1s"></div>
        <div class="special">
          <h2 class="os-animation" data-os-animation="bounceInDown" data-os-animation-delay="0.50s">Our Speciality </h2>
          <div class="dotted4 os-animation" data-os-animation="bounceInRight" data-os-animation-delay="1s"></div>
        </div>
      </div>
    </div>
@foreach($homeitems as $key => $item)

@php
if($item->isSpecial ==1){
@endphp
    <div class="col-lg-4 col-md-4 col-sm-4  itemDisplay{{$item->category}}">
      <div class="slider clearfix os-animation" data-os-animation="fadeInDown
        " data-os-animation-delay="1s">
        
        <div class="img"> <img src="{{asset('/storage/app/items/'.$item->img)}}" title="Cuisin" alt=""/> </div>
        <div class="title">
          <h3> &nbsp&nbsp&nbsp{{$item->name }}</h3>
          <p id="itemRate">&nbsp&nbsp&nbspINR  <span class="itemAmount" id="itemAmount{{$item->id}}">{{$item->price }}</span><span>.00 </span>
            <input type="hidden" name="itemHiddenAmount" id="itemHiddenAmount{{$item->id}}" value="{{$item->price }}">
            <input type="hidden" name="itemHiddenAmountFixed" id="itemHiddenAmountFixed{{$item->id}}" value="{{$item->price }}"></p> &nbsp &nbsp 

                      <button class="quantityIncrement{{$item->id}}" id="quantityIncrement" style="background-color: #e24425; color: white " onclick="itemquantityDecrement('{{$item->id}}',  '{{json_encode($item)}}')"> <span class="glyphicon glyphicon-minus-sign"> &nbsp - &nbsp</span> 
                      </button> 
                      <input type="number" class="quantityValue" id="quantityValue{{$item->id}}" disabled="true" name="" value="1" style="width: 34px;" >
                       <button class="quantityDecrement{{$item->id}}"  style="background-color: #e24425; color: white " onclick="itemquantityIncrement('{{$item->id}}',  '{{json_encode($item)}}')"> <span class="glyphicon glyphicon-plus-sign" > &nbsp+ &nbsp</span> 
                       </button> 
                       
                 <span> <br> <br> &nbsp&nbsp</span> 
        <button style="background-color: transparent; padding-top: -20px;" id="orderItem{{$item->id}}" 
          onclick="ongrabcartquantity('{{$item->id}}','{{$item->name}}' ,'{{json_encode($item)}}')">
        <span  class="grabutton" id="grabuttontextGrab{{$item->id}}" > Grab It <i class="zmdi zmdi-shopping-cart-plus" style=""></i> &nbsp   </span>
        <span  class="grabutton" id="grabuttontextCancel{{$item->id}}" style="display: none;" >Cancel  <i class="zmdi zmdi-undo" style=""></i> &nbsp   </span>

        

         </button>        
  <span  style=" display:none; ;">
  <input type="checkbox" name="grabuttoncheck" id="grabuttoncheck{{$item->id}}"  
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
    }
    @endphp
    @endforeach
       

  </div>
</section>




<section class="saction5" style="background-color:lightgreen;">


  <div class="container" id="resturant1">
        <div class="row">
@foreach($homeitems as $key => $item)
@php
if($item->isSpecial == 0  ){

@endphp
    <div class="col-lg-4 col-md-4 col-sm-4  itemDisplay{{$item->category}}" >
      <div class="slider clearfix os-animation" data-os-animation="fadeInDown
        " data-os-animation-delay="1s">
        
        <div class="img"> <img src="{{asset('/storage/app/items/'.$item->img)}}" title="checken kabab" alt=""/> </div>
        <div class="title">
          <h3> &nbsp&nbsp&nbsp{{$item->name }}</h3>
          <p id="itemRate">&nbsp&nbsp&nbspINR  <span class="itemAmount" id="itemAmount{{$item->id}}">{{$item->price }}</span><span>.00 </span>
            <input type="hidden" name="itemHiddenAmount" id="itemHiddenAmount{{$item->id}}" value="{{$item->price }}">
            <input type="hidden" name="itemHiddenAmountFixed" id="itemHiddenAmountFixed{{$item->id}}" value="{{$item->price }}"></p>

                     &nbsp&nbsp&nbsp  <button class="quantityIncrement{{$item->id}}" id="quantityIncrementquantityIncrement{{$item->id}}" style="background-color: #e24425; color: white " onclick="itemquantityDecrement('{{$item->id}}',  '{{json_encode($item)}}')"> <span class="glyphicon glyphicon-minus-sign"> &nbsp - &nbsp</span> 
                     </button> 
                        <input type="number" class="quantityValue" id="quantityValue{{$item->id}}" disabled="true" name="" value="1" style="width: 34px;" >
                       <button class="quantityDecrement{{$item->id}}"  style="background-color: #e24425; color: white " onclick="itemquantityIncrement('{{$item->id}}',  '{{json_encode($item)}}')"> <span class="glyphicon glyphicon-plus-sign" > &nbsp+ &nbsp</span> </button> 
                       
                 <span> <br> <br> &nbsp&nbsp</span> 
         
               <button style="background-color: transparent; padding-top: -20px;" id="orderItem{{$item->id}}"
                onclick="ongrabcartquantity('{{$item->id}}', '{{$item->name}}', '{{json_encode($item)}}')">

        <span  class="grabutton" id="grabuttontextGrab{{$item->id}}" > Grab It <i class="zmdi zmdi-shopping-cart-plus" style=""></i> &nbsp   </span>
        <span  class="grabutton" id="grabuttontextCancel{{$item->id}}" style="display: none;" >Cancel  <i class="zmdi zmdi-undo" style=""></i> &nbsp   </span>

        

         </button>        
  <span  style=" display: none;">

  <input type="checkbox" name="grabuttoncheck" id="grabuttoncheck{{$item->id}}" style="font-size: 20px; position: absolute;
  height: 20px;
  width: 20px;
  background-color: #eee;" >
  <span class="checkmark"></span>
  </span>
        </div>
      </div>
    </div>
    @php
    }
    @endphp
    @endforeach

        </div>
    
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

