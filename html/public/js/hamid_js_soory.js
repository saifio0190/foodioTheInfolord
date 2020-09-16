

var grabedItems = "grabedItems", item = "item";


function addStorageItemdetails(id,item){
  localStorage.setItem(id,item);

}
function addStorageItemdetails(id,item){
  localStorage.removeItem(id);

}
function saveIems(id,item){
 localStorage.setItem(id,item);
}


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

// function Storage(name){
//   this.name = name || "storage";
// }

// Storage.prototype.setItem = function(value) {
//   let name = this.name;
//   localStorage.setItem(name , JSON.stringify(value) );
// };

// Storage.prototype.getItem = function(){
//   let name = this.name;
//   let value = localStorage.getItem(name);
//   console.log(value);
//   return value ? JSON.parse(value) : null;
// }

// Storage.prototype.deleteItem = function(){
//   let name = this.name;
//   localStorage.removeItem(name);
// } 

// function getGrabItemStorageObj(){
//   return new Storage("grabedItems");
// }

// function getItemStorageObj(id){
//   if( id == undefined || id == null)
//     return null;
//   return new Storage("item"+id);
// }

 function itemquantityIncrement(id,item){
// let strorageObj = getItemStorageObj(id);
//  let storageitem = strorageObj.getItem();
 
//  if(storageitem){
//   item.quantity = storageitem.quantity +1;
//   strorageObj.setItem(item);
//  }
var quantity = $('#quantityValue'+id).val();

if (quantity>=1) {
$('#quantityValue'+id).val(parseInt($('#quantityValue'+id).val()) + 1 );
var quantity= $('#quantityValue'+id).val();
var amount= $('#itemHiddenAmountFixed'+id).val();
amount=amount*quantity;
$('#itemAmount'+id).html(amount);
$('#itemHiddenAmount'+id).val(amount);
console.log(amount);
 }else {
  alert('quantity can not be less than one');
} 
handelingLocalstorageOnAmtQty(id); 

}
  
 function itemquantityDecrement(id){
 //  let strorageObj = getItemStorageObj(id);
 // let storageitem = strorageObj.getItem();
 
 // if(storageitem){
 //  item.quantity = storageitem.quantity -1;
 //  strorageObj.setItem(item);
 //  console.log('')
 // }

var quantity= $('#quantityValue'+id).val();
console.log(quantity);
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
handelingLocalstorageOnAmtQty(id); 
}

function ongrabcartquantity(id,name,item){

//    let storageObj = getGrabItemStorageObj();
//   let itemStorageObj = getItemStorageObj(item.id);
// console.log('item re:'+item);
// console.log(typeof(item));
console.log(JSON.parse(item));
var item = JSON.parse(item);

// console.log(typeof(item));
// console.log(item.price);
if($('#grabuttoncheck'+id).prop("checked") == true){
//   let ids = storageObj.getItem();
  
//   itemStorageObj.deleteItem();

//   var grabedItems= storageObj.getItem() || [];
//   grabedItems.pop(id);
//   storageObj.setItem(grabedItems);

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
 }
else{
  // let storeItem = itemStorageObj.getItem();
  // if(storeItem){
  //   item.quantity = storeItem.quantity +1
  // }else{
  //   let quantity = 1;
  //   if(parseInt($('#quantityValue'+id).val()) > 1){
  //     quantity = parseInt($('#quantityValue'+id).val());
  //   }
  //   item.quantity = quantity;
  // }

  // itemStorageObj.setItem(item)
  // var grabedItems= storageObj.getItem() || [];
  // grabedItems.push(id);
  // storageObj.setItem(grabedItems);
$('#grabuttoncheck'+id).prop("checked",true);   // check the checkboc
console.log('id =',id);
var checked1='true';
$('#cartquantity').val(parseInt($('#cartquantity').val()) + 1 );
var quantity = $('#cartquantity').val();
console.log('quantity =',quantity);
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

itemsArray.forEach((item,i)=>{
// 
 var div='<div class="row ">';

$('<input>', {
  
    id: 'fooa'+i,
    name: 'fooa',
    value: item.name
}).insertBefore('.itemidincartItemname'); 

$('<input>', {
  
    id: 'foo'+i,
    name: 'foo',
    value: item.quantity
}).insertBefore('.itemQuantityincart');

 // $("#foo"+i).attr("disabled", true);
  $('<input>', {
  
    id: 'foosa'+i,
    name: 'foossa'+i,
    class: 'foossa'+i,
    attr:'disabled'
}).insertBefore('.itemidincartUpdate'); 


     var itag ='itag'+i;
     var itag1 ='itag1'+i;

     itag = $('<i/>',{
     class:'zmdi zmdi-edit' 
    
});
      itag1 = $('<i/>',{
     class:'zmdi zmdi-delete' 
    
});
  var spanTag ='spanTag'+i;
  var spanTag1 ='spanTag1'+i;
    spanTag = $('<span />',{
    class:'item' , 
    title:'Edit',
    html:itag 
});
    spanTag1 = $('<span />',{
    class:'item' , 
    title:'Delete',
    html:itag1 
});
   var divTag ='divTag'+i;
   var divTag1 ='divTag1'+i;

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
  divTag.append(spanTag1);
   
divTag.insertBefore('.foossa'+i);
// divTag1.insertBefore('.foossa'+i);


})


}

function opencartMoadal(){

  // $('#')
// let storageObj = getGrabItemStorageObj();
// let itemIds = storageObj.getItem();
// let itemsArray = [];
// if(Array.isArray(itemIds))
//   itemIds.forEach(id=>{
//     let storageObj = getItemStorageObj(id);
//     let data = storageObj.getItem()
//     if(data)
//       itemsArray.push(data);
//   });
// cartElementcreation(itemsArray);
$('#myModal').modal();

 

}

function resetCart(){
  var reset1= confirm('All the Items added to cart  will be erased', 'CLEAR', );

  if (reset1){

  localStorage.clear();
  location.reload();
  }
  // windo();
}