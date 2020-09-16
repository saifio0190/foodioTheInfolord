

var grabedItems = "grabedItems", item = "item";


function addStorageItemdetails(id,item){
  localStorage.setItem(id,item);

}
function getStorageItemdetails(id){
  return localStorage.getItem(id);

}
function getGrabbedItem(){
 return localStorage.getItem('giList');
}
function addGrabbedItem(giElements){
  localStorage.setItem('giList',giElements);
}
// function removeGrabbedItem(giElements){
//   localStorage.removeItem(giElements);
// }






function onloadStatus(){

for (var i = 0; i < localStorage.length; i++) {
  var key = localStorage.key(i);
  var keyValue= localStorage.getItem(key);
  if (key ==='cartquantity') {
  $('#cartquantity').val(keyValue); 
  $('#cartquantitytext').html(keyValue);
  if (keyValue >= 1) {
  $('#navbarcartquantity').show();
    }
  }
  if(key.search('tityVal') > 0){
    $('#'+key).val(keyValue);
  }
   if(key.search('temAm') > 0){
    $('#'+key).html(keyValue);
  }
  if(key.search('ddenAm') > 0){
    $('#'+key).val(keyValue);
  }

  if(key.search('onche') > 0){
    
     if(keyValue.search('ue') > 0) {
     $('#'+key).prop("checked",true); 
     var regex = /[+-]?\d+(?:\.\d+)?/g;
     var match;
     match = regex.exec(key);
     var idhere=match[0];
     // console.log(match[0]);
      $('#grabuttontextGrab'+idhere).hide();
      $('#grabuttontextCancel'+idhere).show();
      $('#grabuttontextCancel'+idhere).css( "opacity", .6);    
  }
  }
  }

}  

 function itemquantityIncrement(id,item){

var quantity = $('#quantityValue'+id).val();

if (quantity>=1) {
$('#quantityValue'+id).val(parseInt($('#quantityValue'+id).val()) + 1 );
var quantity= $('#quantityValue'+id).val();
var amount= $('#itemHiddenAmountFixed'+id).val();
amount=amount*quantity;
$('#itemAmount'+id).html(amount);
$('#itemHiddenAmount'+id).val(amount);
// console.log(amount);
 }else {
  alert('quantity can not be less than one');
} 

var itemSto= getStorageItemdetails(id);

if (itemSto) {
   itemSto = JSON.parse(item);
    itemSto.quantity=quantity;
    itemSto = JSON.stringify(itemSto);
    // console.log("item item"+item);
    // window.stop();

}else {
  
    itemSto = JSON.parse(item);
    itemSto.quantity= quantity;
    itemSto = JSON.stringify(itemSto);
}

addStorageItemdetails(id,itemSto);
handelingLocalstorageOnAmtQty(id); 

}
  
 function itemquantityDecrement(id,item){


var quantity= $('#quantityValue'+id).val();
console.log(item);
if (quantity>= 2) {
$('#quantityValue'+id).val(parseInt($('#quantityValue'+id).val()) - 1 );
var quantity= $('#quantityValue'+id).val();
var amount= $('#itemHiddenAmountFixed'+id).val();
amount=amount*quantity;
$('#itemAmount'+id).html(amount);
$('#itemHiddenAmount'+id).val(amount);

console.log(quantity);
console.log(amount);

}else {

 jAlert('Quantity can not be less than one', 'FAILED', );
}  
var itemSto= getStorageItemdetails(id);
console.log("item"+item);

if (itemSto) {
   itemSto = JSON.parse(item);
    itemSto.quantity=quantity;
    itemSto = JSON.stringify(itemSto);

}else {

    itemSto = JSON.parse(item);
    itemSto.quantity= quantity;
    itemSto = JSON.stringify(itemSto);
}


console.log(typeof(itemSto));
addStorageItemdetails(id,itemSto);
handelingLocalstorageOnAmtQty(id); 
}

function ongrabcartquantity(id,name,item){


var itemGrabbed;
var itemSto;
var quantityVal= $('#quantityValue'+id).val();

if($('#grabuttoncheck'+id).prop("checked") == true){

    itemGrabbed  =getGrabbedItem();
    itemGrabbed= itemGrabbed.split(",");

itemGrabbed = itemGrabbed.filter(item => item !== id)
    // itemGrabbed.pop(id);
    console.log(itemGrabbed);
    addGrabbedItem(itemGrabbed);
    console.log(itemGrabbed);

$('#cartquantity').val(parseInt($('#cartquantity').val()) - 1 ); 
var quantity= $('#cartquantity').val();
if (quantity <= 0) {
$('#navbarcartquantity').hide();
}
$('#cartquantitytext').html(quantity);
$('#grabuttoncheck'+id).prop("checked",false);
$('#grabuttontextGrab'+id).show();
$('#grabuttontextCancel'+id).hide();   
var checked1='false';   
// itemSto= getStorageItemdetails(id);

// if (itemSto){
//    itemSto = JSON.parse(item);
//     itemSto.quantity=itemSto.quantity;
//     itemSto = JSON.stringify(itemSto);

// }else {
  
//     itemSto = JSON.parse(item);
//     itemSto.quantity= 1;
//     itemSto = JSON.stringify(itemSto);
// }

   

// addStorageItemdetails(id,itemSto);  
 }
else{
 
$('#grabuttoncheck'+id).prop("checked",true);   // check the checkboc

 itemGrabbed =getGrabbedItem();

if (itemGrabbed) {
  itemGrabbed= itemGrabbed.split(",");
} else {
   itemGrabbed= [];
}

itemGrabbed.push(id);
addGrabbedItem(itemGrabbed);
console.log(itemGrabbed);

// var itemSto = JSON.parse(item);
 itemSto= getStorageItemdetails(id);


if (itemSto) {
   itemSto = JSON.parse(item);
    itemSto.quantity=quantityVal;
    itemSto = JSON.stringify(itemSto);

}else {
  
    itemSto = JSON.parse(item);
    itemSto.quantity= quantityVal;
    itemSto = JSON.stringify(itemSto);
}

   

addStorageItemdetails(id,itemSto);
   
    var checked1='true';
    $('#cartquantity').val(parseInt($('#cartquantity').val()) + 1 );
    var quantity = $('#cartquantity').val();

if (quantity >= 1) {
$('#navbarcartquantity').show();
}
$('#cartquantitytext').html(quantity);
console.log('#grabuttontextGrab'+id);
$('#grabuttontextGrab'+id).hide();
$('#grabuttontextCancel'+id).show();
$('#grabuttontextCancel'+id).css( "opacity", .6);
          
     }
   
     handelingLocalstorageOnButchkBox(id,checked1);
}

function handelingLocalstorageOnAmtQty(id){

var quantity= $('#quantityValue'+id).val();
var amount= $('#itemHiddenAmount'+id).val();
var fixedamount= $('#itemHiddenAmountFixed'+id).val(); 
amount=fixedamount*quantity; 
// localStorage.clear();
var lsitemHiddenAmount='itemHiddenAmount'+id; 
var lsitemAmount='itemAmount'+id;
var lsquantityValue='quantityValue'+id;
localStorage.setItem(lsitemAmount,amount);
localStorage.setItem(lsquantityValue,quantity);
localStorage.setItem(lsitemHiddenAmount,amount);

}
 function handelingLocalstorageOnButchkBox(id,checked1){

var Cartquantity= $('#cartquantity').val();
var lsgrabuttoncheck='grabuttoncheck'+id; 
var lscartquantity='cartquantity';
localStorage.setItem(lsgrabuttoncheck,checked1);
localStorage.setItem(lscartquantity,Cartquantity);
 
 }

function cartElementcreation(itemsArray){
 // debugger
  var count=$('#cartquantity').val();  
  var thisID , totalPay, priceI;
 var totalPay1 =0;
 var orderJason =[];
 var orderJasonVal={};
 var orderJasonId, orderJasonIdval= 0;

   $("#cartModal input").each(function(){
      this.remove() ;
  });
// console.log('bhai chala lgta hai');
itemsArray.forEach((item,i)=>{

 // 

$('<input>', {
  
    id: 'fooa'+i,
    name: 'fooa',
    value: item.name
}).insertBefore('.itemidincartItemname'); 
$("#fooa"+i).prop('disabled', true);

$('<input>', {
  
    id: 'foo'+i,
    name: 'foo',
    value: item.quantity
}).insertBefore('.itemQuantityincart');



$('<input>', {
  
    id: 'food'+i,
    name: 'food'+i,
    type: 'hidden',
    value: item.id
}).insertBefore('.itemidincartUpdate1');

 $("#foo"+i).prop("disabled", true);
  priceI = $('#itemHiddenAmount'+item.id).val();
  if (priceI) {
    // console.log('typeof'+typeof(priceI));
 totalPay = parseInt(priceI, 10);
 totalPay1 += totalPay;
}

  $('<input>', {
  
    id: 'foosa'+i,
    name: 'foossa'+i,
    class: 'foossa'+i
    
}).insertBefore('.itemidincartUpdate2'); 
  $('#foosa'+i).width(50);

  $('<input>', {
  
    id: 'foosas'+i,
    name: 'foossas'+i,
    class: 'foossas'+i,
    value: priceI
}).insertBefore('.itemidincartUpdate'); 
  $("#foosas"+i).attr('disabled', 'disabled');
    $("#foosas"+i).width(42);

     var itag ='itag'+i;
     var itag1 ='itag1'+i;

     itag = $('<i/>',{
     class:'zmdi zmdi-edit' 
    
});
     
 // console.log("item Id"+item.id);
 var thisID1 = 'javascript:modalEdit('+item.id+')';
                 link = $('<a />',{
    class:'item' , 
    title:'Edit Order item',
    html:itag,
    href:thisID1
    
});


tempArray=[]
orderJasonId=item.id;
orderJasonIdval=parseInt(item.quantity);
tempArray.push(orderJasonId);
tempArray.push(orderJasonIdval);

orderJasonVal['orderItem'+i]=tempArray;


  var spanTag ='spanTag'+i;
  var spanTag1 ='spanTag1'+i;
    spanTag = $('<span />',{
    class:'item' , 
    title:'Edit',
    html:link 
});
//     spanTag1 = $('<span />',{
//     class:'item' , 
//     title:'Delete',
//     html:itag1 
// });
   var divTag ='divTag'+i;
   // var divTag1 ='divTag1'+i;

    divTag = $('<div />',{
    class:'table-data-feature' , 
    id:'itemUpdate'+i,
    html:spanTag
});
//     divTag1 = $('<div />',{
//     class:'table-data-feature' , 
//     id:'itemUpdate'+i,
//     html:spanTag1 
// });
  // divTag.append(spanTag1);
   
divTag.insertBefore('.foossa'+i);
// divTag1.insertBefore('.foossa'+i);


});

// console.log('totalPay ::'+ totalPay1);
$('#totalPay').html(totalPay1);
// console.log(orderJason);
orderJasonVal=JSON.stringify(orderJasonVal);
localStorage.setItem('finalOrder',orderJasonVal);
console.log(orderJasonVal);


}

function opencartMoadal(){
var itemGrabbed =getGrabbedItem();
    itemGrabbed= itemGrabbed.split(",");
    var itemsArray= []; 
    var data, data1, data2;
     // console.log('this reset1ss');
     
    for (var i = 0; i <= itemGrabbed.length; i++) {
      // console.log(typeof(itemGrabbed[i]));
      // console.log(typeof(parseInt(itemGrabbed[i])));
      data= getStorageItemdetails(parseInt(itemGrabbed[i]));
      if (data) {
      itemsArray.push(JSON.parse(data));

      
      }
    }
    cartElementcreation(itemsArray);
$('#myModal').modal();

 

}

function cancelOrder(id){

  console.log('hhssh');


}

function resetCart(){
  // var reset1= confirm('All the Items added to cart  will be erased', 'CLEAR', );
  var resetCart= false;
  var reset1= jConfirm('All the Items added to cart  will be erased', 'CLEAR CART',function(r) {

          reset(r);
      }); 

  function reset (resetCart){
    if (resetCart) {
      console.log(reset1);
    

  localStorage.clear();
  location.reload();
  }
  }
  
} function closeresetCart(){
  localStorage.clear();
  location.reload();
}

function modalEdit(id){
  console.log('yaha to aya mera bhai'+id);
 $("#modalmy").click();

 setTimeout(function(){
  window.location.href = "#itemAmount"+id;
  $('#itemAmount'+id).focus();
   }, 2000);



}

 function orderNow(){



  var tableId = $('#selectTableId').val();
if (tableId == 'emptyTab') {
    jAlert("Please select the Table");
    return false;
}


$('#modalOrder').hide();
$('#spinnerButton').show();

     tableId=parseInt(tableId);
      var finalOrder=localStorage.getItem('finalOrder');
      finalOrder= JSON.parse(finalOrder);
     

      var data1={'_token': $('meta[name="token"]').attr('content'), 'finalOrder':finalOrder , 'tableId':tableId };

 setTimeout(function(){
        $.ajax({
               type:'POST',
               url:'addOrder',
               data:  data1,
               success:function(data) {
                  console.log("dss"+data);
                  if(data.status == 1){
                    // $("#updateResult2").css( "color","green");
                    $("#login-formModal").html('You have successfully ordered, your order ID ');
                    $('#modalmy').hide();
                    $('#resetCart').hide();
                    $('#modalmyOk').show();
                    $('#orderIdText').html(data.orderId);
                  }else{
                    $('#orderIdText').html(data.msg);
                  }
                  
                   
               }
            });
      
   }, 4000);


    }

    function searchCategoryFun(){
      var searchCat= $('#searchCategory').val();

      console.log('inx<');
      console.log(searchCat);
       setTimeout(function(){

       window.location.href = "#quantityValue42";
         // if(searchCat.search('incour') > 0){

   
  // }
 }, 2000);

    }