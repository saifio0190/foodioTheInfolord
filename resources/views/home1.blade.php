@extends('layouts.homeview')
@section('content') 

<script type="text/javascript">
  
 function itemquantityIncrement(){


  var quantity= $('#quantityValue').val();
  if (quantity>=1) {

$('#quantityValue').val(parseInt($('#quantityValue').val()) + 1 );
// amount=amount*quantity;
var quantity= $('#quantityValue').val();
 
// var amount= $('#itemHiddenAmount').val();itemHiddenAmountFixed
var amount= $('#itemHiddenAmountFixed').val();
amount=amount*quantity;
$("#itemAmount").html(amount);
$('#itemHiddenAmount').val(amount);
console.log(amount);
}else {

  alert('quantity can not be less than 1');
}  


  

        // $('.count').prop('disabled', true);
        // $(document).on('click','.plus',function(){
        // $('.count').val(parseInt($('.count').val()) + 1 );
        // });
        //   $(document).on('click','.minus',function(){
        //   $('.count').val(parseInt($('.count').val()) - 1 );
        //     if ($('.count').val() == 0) {
        //     $('.count').val(1);
        //   }
        //     });
}
  
 function itemquantityDecrement(){

  var quantity= $('#quantityValue').val();
  console.log(quantity);
  if (quantity>= 2) {

$('#quantityValue').val(parseInt($('#quantityValue').val()) - 1 );
var quantity= $('#quantityValue').val();
 
// var amount= $('#itemHiddenAmount').val();
var amount= $('#itemHiddenAmountFixed').val();
amount=amount*quantity;
$("#itemAmount").html(amount);
$('#itemHiddenAmount').val(amount);

console.log(quantity);
console.log(amount);
}else {

  alert('quantity can not be less than 1');
}  
}
</script>

<section class="backgraound">
  <div class="container" >
    <div class="row">
    
    </div>
    
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="textbox os-animation" data-os-animation="zoomIn" data-os-animation-delay="0.5s">
        <h3>Category</h3>
        <!-- <input type="text" placeholder="Swagath Grand" /> -->
        <select class="" name="isSpecial" id="sel1">
    <option value="1">Yes</option>
    <option value="0" selected>No</option>
   
  </select>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6">
      <div class="textbox1 os-animation" data-os-animation="zoomIn" data-os-animation-delay="0.5s">
        <h3>Cuisine Name</h3>
        <input type="text" placeholder="Chicken Biriyani" />
        <span class="search"><a href="#"><i class="fa fa-search"></i></a></span> </div>
    </div>
  </div>
</section>
 <div class="modal fade" id="myModal" data-backdrop="static" data-keyboard="false" role="dialog">
    <div class="modal-dialog modal-sm">
    
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
     <div class="col-lg-4 col-md-4 col-sm-4 col-">
      <div class="slider clearfix os-animation" data-os-animation="fadeInDown
" data-os-animation-delay="0.20s">
        <div class="img clearfix"> <img src="public/images/002.png" alt=""/> </div>
        <div class="title clearfix">
          <h3>Olister Combo<br/>
            pack lorem</h3>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
          <a href="#">GRAB IT &#10152;</a> </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-">
      <div class="slider clearfix os-animation" data-os-animation="fadeInDown
" data-os-animation-delay="0.20s">
        <div class="img clearfix"> <img src="public/images/002.png" alt=""/> </div>
        <div class="title clearfix">
          <h3>Olister Combo<br/>
            pack lorem</h3>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
          <a href="#">GRAB IT &#10152;</a> </div>
      </div>
    </div>
     <div class="col-lg-4 col-md-4 col-sm-4  col-">
      <div class="slider clearfix os-animation" data-os-animation="fadeInDown
" data-os-animation-delay="0.20s">
        <div class="img clearfix"> <img src="public/images/002.png" alt=""/> </div>
        <div class="title clearfix">
          <h3>Olister Combo<br/>
            pack lorem</h3>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
          <a href="#">GRAB IT &#10152;</a> </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="slider clearfix os-animation" data-os-animation="fadeInDown
" data-os-animation-delay="0.50s">
        <div class="img"> <img src="public/images/003.png" alt=""/> </div>
        <div class="title">
          <h3>Olister Combo<br/>
            pack lorem</h3>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
          <a href="#">GRAB IT &#10152;</a> </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="slider clearfix os-animation" data-os-animation="fadeInDown
" data-os-animation-delay="1s">
        <div class="img"> <img src="public/images/oo1.png" title="checken kabab" alt=""/> </div>
        <div class="title">
          <h3>Chicken kabab</h3>
          <p id="itemRate">INR <span class="itemAmount" id="itemAmount">300</span><span>.00 </span>
            <input type="hidden" name="itemHiddenAmount" id="itemHiddenAmount" value="300">
            <input type="hidden" name="itemHiddenAmountFixed" id="itemHiddenAmountFixed" value="300"></p>

                     &nbsp  <button class="quantityIncrement" id="quantityIncrement" style="background-color: #e24425; color: white " onclick="itemquantityDecrement()"> <span class="glyphicon glyphicon-minus-sign"> &nbsp - &nbsp</span> 
                     </button> 
                        <input type="number" class="quantityValue" id="quantityValue" disabled="true" name="" value="1" style="width: 30px;" >
                       <button class="quantityDecrement"  style="background-color: #e24425; color: white " onclick="itemquantityIncrement()"> <span class="glyphicon glyphicon-plus-sign" > &nbsp+ &nbsp</span> </button> 
                       
                 <span> <br>   <br> </span> 
          <a href="#" data-toggle="modal" data-target="#myModal"  >GRAB IT &#10152;</a> 
  
  <input type="checkbox"  style="font-size: 26px; position: absolute;

  height: 25px;
  width: 25px;
  background-color: #eee;">
  <span class="checkmark"></span>


          

                                                  
        </div>
      </div>
    </div>
 <!--      <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="slider clearfix os-animation" data-os-animation="fadeInDown
" data-os-animation-delay="1s">
        <div class="img"> <img src="public/images/oo1.png" alt=""/> </div>
        <div class="qty mt-5">
                     <button class="minus bg-dark"> -&nbsp</button>
                        <input type="number"   name="" value="1" style="width: 30px;" >
                        <button class="plus bg-dark"> &nbsp+</button>
                         <button class="item"  data-toggle="modal" data-target="#myModal" >

                                                            m,fm,
                                                        </button>
                                                      <button data-toggle="popover" title="Popover Header" data-content="Some content inside the popovercdadcadnmcnmadcae jmnadc adcaa">Toggle popover
                                                      </button>
                    </div>
      </div>
    </div> -->
  </div>
</section>
<section class="saction5">
  <div class="container" id="resturant">
        <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-">
      <div class="slider clearfix os-animation" data-os-animation="fadeInDown
" data-os-animation-delay="0.20s">
        <div class="img clearfix"> <img src="public/images/002.png" alt=""/> </div>
        <div class="title clearfix">
          <h3>Olister Combo<br/>
            pack lorem</h3>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
          <a href="#">GRAB IT &#10152;</a> </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-">
      <div class="slider clearfix os-animation" data-os-animation="fadeInDown
" data-os-animation-delay="0.20s">
        <div class="img clearfix"> <img src="public/images/002.png" alt=""/> </div>
        <div class="title clearfix">
          <h3>Olister Combo<br/>
            pack lorem</h3>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
          <a href="#">GRAB IT &#10152;</a> </div>
      </div>
    </div>
     <div class="col-lg-4 col-md-4 col-sm-4  col-">
      <div class="slider clearfix os-animation" data-os-animation="fadeInDown
" data-os-animation-delay="0.20s">
        <div class="img clearfix"> <img src="public/images/002.png" alt=""/> </div>
        <div class="title clearfix">
          <h3>Olister Combo<br/>
            pack lorem</h3>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
          <a href="#">GRAB IT &#10152;</a> </div>
      </div>
    </div>
       
        </div>
    
  </div>
</section>

<footer class="saction8">
  <div class="container" id="contact">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="site">
          <h3>Site Link</h3>
        </div>
        <div class="sitelink">
          <ul>
            <li> <span>&#10152;</span><a href="#">About Us</a></li>
            <li><span>&#10152;</span><a href="#">Contact Us</a></li>
            
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="site">
          <h3>Site Link</h3>
        </div>
        <div class="sitelink">
          <ul>
            <li> <span>&#10152;</span><a href="#">About Us</a></li>
            <li><span>&#10152;</span><a href="#">Contact Us</a></li>
           
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="follow">
          <h3>Follow Us On...</h3>
        </div>
        <div class="social">
          <ul>
            <li> <i class="fa fa-facebook-square"></i><a href="#">Facebook</a></li>
            <li><i class="fa fa-linkedin-square"></i><a href="#">Linkedin</a></li>
            
          </ul>
        </div>
      </div>
 
    </div>
  </div>
</footer>
<footer class="saction9">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="email">&copy; All right reserved 2014  /  FoodFinder </div>
        <p class="freetemplates">Free Template by <a href="http://freetemplates.pro/">FreeTemplates.pro</a></p>
      </div>
    </div>
  </div>
</footer>


@endsection

