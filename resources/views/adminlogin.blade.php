<!doctype html>
<html lang="{{ app()->getLocale() }}">
<h1>hsshhhh</h1>


<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <meta name="token" content="{{csrf_token()}}">

    <!-- Title Page-->
    <title>Login</title>

    <!-- Fontfaces CSS-->
     <!-- <link href="public/css/font-face.css" rel="stylesheet" media="all"> -->
    <link href="public/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="public/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="public/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="public/css/jquery.alerts.css" rel="stylesheet" type="text/css" media="screen" />

    <!-- Bootstrap CSS-->
    <link href="public/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
       <!-- Jquery JS-->
    <script src="public/vendor/jquery-3.2.1.min.js"></script>
    <script src="public/js/jquery.alerts.js" type="text/javascript"></script>
    <!-- Bootstrap JS-->
    <script src="public/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="public/vendor/bootstrap-4.1/bootstrap.min.js"></script>

    <!-- Vendor CSS-->
    <link href="public/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="public/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="public/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="public/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="public/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="public/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="public/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">


    <!-- Main CSS-->
    <link href="public/css/theme.css?v=2" rel="stylesheet" media="all">
    <script type="text/javascript">


         $(function () {
         $("#adminLogin").click(function (){
            console.log('res');

            var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;
            var email = $("#email").val();
            var name = $("#name").val();
            var password = $("#password").val();
            var userType = $("#userType").val();

            

            if (email == '' || password == ''){
            jAlert('Please enter a valid credentials', 'FAILED', );
            return false;
             }
             if (userType =='defults') {
                jAlert('Please select login type','FAILED');
                return false;
             }
              var data1={'_token': $('meta[name="token"]').attr('content'),'email':email,'password':password,'userType':userType};
                 $.ajax({

               type:'POST',
               url:'loginAdmin',
               data:  data1,
               success:function(data) {
                
                 
                  // var otpPIN= parseInt(data);
                  
                   if (data) {
                            if(data.search('vali') > 0){
                                jAlert(data,'FAILED');
                                return false;
                            }
                     // localStorage.setItem('otpPIN',otpPIN);
                         if(data.search('min') > 0){
                                jAlert(data,'SUCCESS');
                                 window.location = 'orders';
                                return true;
                            } else {
                                 jAlert(data,'SUCCESS');
                                 window.location = 'ordersk';
                                 return true;
                            }
                       
                      } else {
                        jAlert(data,'FAILED');
                        return false;
                      }
                   
               }
            });
            });
         });


       
    </script>

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="modal fade" id="myModal" data-backdrop="static" data-keyboard="false" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" >
        <div class="modal-header"  >
          
          <h6 class="modal-title" style="text-align: center;"> Change Password</h6>   
          <button type="button" class="close" data-dismiss="modal">&times;</button>    

        </div>  
        <div class="modal-body">
          <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="public/images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label>Email Address s</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">submit</button>
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
  <?php  exit(); ?>
  

                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="public/images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" id="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" id="password" name="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <!-- <label>Confirm Password</label> -->
                                    <select class="au-input au-input--full" id="userType" name="userType">
                                        <option value="admin">admin</option>
                                        <option value="chef">chef</option>
                                        <option value="defults" selected hidden> Please login type </option>
                                    
                                    </select>
                                </div>
                                <div class="login-checkbox">
                                   <!--  <label>
                                        <input type="checkbox" name="remember">I agreeTerms and Condition
                                    </label> -->
                                    <label>
                                        <a href="#"  data-toggle="modal" data-target="#myModal">Forgotten Password?</a>
                                    </label>
                                     <!--  <button type="button" s style="background-color: transparent; color: black; border: none;" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Forgotten Password?</button> -->
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" id="adminLogin" type="button">sign in</button>
                               <!--  <div class="social-login-content">
                                    <div class="social-button">
                                        <button class="au-btn au-btn--block au-btn--blue m-b-20">sign in with facebook</button>
                                        <button class="au-btn au-btn--block au-btn--blue2">sign in with twitter</button>
                                    </div>
                                </div> -->
                            </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="{{url('/adminregister')}}">Sign Up Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <!-- <script src="public/vendor/jquery-3.2.1.min.js"></script> -->
    <!-- Bootstrap JS-->
    <script src="public/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="public/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="public/vendor/slick/slick.min.js">
    </script>
    <script src="public/vendor/wow/wow.min.js"></script>
    <script src="public/vendor/animsition/animsition.min.js"></script>
    <script src="public/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="public/vendor/counter-up/jquery.waypoints.min.js"></script>
    <!-- <script src="vendor/counter-up/jquery.counterup.min.js"> -->
    </script>
    <script src="public/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="public/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="public/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="public/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="public/js/main.js"></script>

</body>

</html>
<!-- end document-->