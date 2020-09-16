function showDescription(idL){
        document.getElementById("description"+idL).style.display = "block";
        // document.getElementById("itemDesc"+idL).style.opacity = 0.2;
         $("#itemDesc"+idL).css( "opacity", .1);
        
    }  

    function removeDiscription(idH){
      document.getElementById("description"+idH).style.display = "none";
      $("#itemDesc"+idH).css( "opacity", 1);
        
    } 

    function ediModalform(id,name,price){
    $("#id").val(id);  
    $("#name").val(name);
    $("#price").val(price);
    }

    function updateModalform(id,name,price){
      var id=document.getElementById('id').value;
      var name=document.getElementById('name').value;
      var price=document.getElementById('price').value; 
      var isSpecial=document.getElementById('isSpecial').value;

        if ( (id) && (name) && (price) ) {

         if (!price.match(/^\d+/) || price.length <1 ){
          alert('price must be numeric');
          return false;
        } else if(name.length <2){
              // alert('Please enter complete name');
               jAlert('Please enter complete name', 'FAILED', );
              return false;

        }

      var data1={'_token': $('meta[name="token"]').attr('content'), 'id':id, 'name':name, 'price':price , 'isSpecial':isSpecial };

        $.ajax({
               type:'POST',
               url:'updateItem',
               data:  data1,
               success:function(data) {
                  console.log(data['msg']);
                     $("#updateResult2").css( "color","green");
                   $("#updateResult2").html(data['msg']);
                   setInterval(function(){
                    $("#modalmy").click();
                    location.reload();
                     }, 2000);
                   
               }
            });
      } else {
        jAlert('Please fill the fields properly', 'FAILED', );
        return false;
      }
    }
    
     function deleteItem(id,name){
      var confirmDelete = false;
      jConfirm('Are you sure you wnat to delete '+name+'?', 'Confirmation', function(r) {
          deleteItemsLis(id,name,r);
      });
    }
    function deleteItemsLis(id,name, confirmDelete){
      if(confirmDelete){
        var data1={'_token': $('meta[name="token"]').attr('content'), 'id':id};
        $.ajax({
               type:'POST',
               url:'deleteItem',
               data:  data1,
               success:function(data) {
                  console.log(data['msg']);
                   
                      $("#statistic__item"+id).css( "opacity", .1);
                   
               }
            });
      } else {
        console.log('not selected');
        return false;
      }
    }