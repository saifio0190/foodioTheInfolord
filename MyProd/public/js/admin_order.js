

     function ediModalform(id,name){
        console.log(id);     
        $('#deleOrder').html(id);
        console.log(name);

    $("#id").val(id);  

   
    }

 

     function deleteOrder(){
      // alert('hhd');
      var id=document.getElementById('id').value;
      var email=document.getElementById('userEmail').value;
      var password=document.getElementById('userPassword').value; 
      // var isSpecial=document.getElementById('isSpecial').value;

        if ( (id) && (password) && (email) ) {

         if (!id.match(/^\d+/) || id.length <1 ){
          alert('ID must be numeric');
          return false;
        } else if(password.length <2){
              // alert('Please enter complete name');
               jAlert('Please enter complete name', 'FAILED', );
              return false;

        }

      var data1={'_token': $('meta[name="token"]').attr('content'), 'id':id, 'email':email, 'password':password};

        $.ajax({
               type:'POST',
               url:'deleOrder',
               data:  data1,
               success:function(data) {
                  console.log(data['msg']);
                     $("#updateResult2").css( "color","green");
                   $("#updateResult2").html(data['msg']);
                   setTimeout(function(){
                    $("#modalmy").click();
                     $('#tableOrderData'+id).hide(); 
                     }, 2000);
                   
               }
            });
      } else {
        jAlert('Please fill the fields properly', 'FAILED', );
        return false;
      }
    }
      setInterval(function(){ 
   var data1={'_token': $('meta[name="token"]').attr('content')};
        $.ajax({
               type:'POST',
               url:'pendingOrders',
               data:  data1,
               success:function(data) {
                  
                   $('#pendingOrders').html(data);
                   $('#pendingOrders1').html(data);
                     
                   
               }
            });
  }, 15000);


     function makeOrderPay(id,name){
      var confirmDelete = false;
      jConfirm('Payemnet for order :  '+id+'?', 'Confirmation', function(r) {
          makeOrderPayDone(id,name,r);
      });
    }
    function makeOrderPayDone(id,name, confirmDelete){
      if(confirmDelete){
        console.log('jjs');
        console.log(id);
        var data1={'_token': $('meta[name="token"]').attr('content'), 'id':id};
        $.ajax({
               type:'POST',
               url:'makeOrderPayDone',
               data:  data1,
               success:function(data) {
                  console.log(data['msg']);
                   
                      // $("#statistic__item"+id).css( "opacity", .1);
                       $('#tableOrderData'+id).hide(); 
                   
               }
            });
      } else {
        console.log('not selected');
        return false;
      }
    }

    function showExpanded(id, order_id){
      
// alert('dc'+id);
      $('.'+id).slideToggle('slow');

      $('#zoomOut'+id).show();
      $('#zoomIn'+id).hide();


    }


  function showDeduce(id, order_id){
      
// alert('dc'+id);
      $('.'+id).slideToggle();

      $('#zoomOut'+id).hide();
      $('#zoomIn'+id).show();


    }
     function makeOrderPayk(id,name){
      var confirmDelete = false;
      jConfirm('Delivery for order :  '+id+'?', 'Confirmation', function(r) {
          makeOrderPayDonek(id,name,r);
      });
    }
    function makeOrderPayDonek(id,name, confirmDelete){
      if(confirmDelete){
        console.log('jjs');
        console.log(id);
        var data1={'_token': $('meta[name="token"]').attr('content'), 'id':id};
        $.ajax({
               type:'POST',
               url:'makeOrderPayDonek',
               data:  data1,
               success:function(data) {
                  console.log(data['msg']);
                   
                      // $("#statistic__item"+id).css( "opacity", .1);
                       $('#tableOrderData'+id).hide(); 
                   
               }
            });
      } else {
        console.log('not selected');
        return false;
      }
    }