<!doctype html>
<html lang="{{ app()->getLocale() }}">


<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <meta name="token" content="{{csrf_token()}}">

    <!-- Title Page-->
    <title>Register</title>

    <!-- Fontfaces CSS-->
     <link href="public/css/font-face.css" rel="stylesheet" media="all">
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
        $("#adminLogin").click(function () {

            var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;
            var email = $("#email").val();
            var name = $("#name").val();
            var userType = $("#userType").val();
            var password = $("#password").val();
            var confirmPassword = $("#cpassword").val();

            if (name == ''){
            jAlert('Please enter a valid name', 'FAILED', );
            return false;
             }
            if (email == '' || !re.test(email)){
                jAlert('Please enter a valid email address.','FAILED');
               return false;
            }
            if (userType=='defults') {
                jAlert('Select a user type','FAILED');
                return false;
                }
            if (password != confirmPassword) {
                jAlert('Passwords do not match.','FAILED');
                return false;
            }
                
           
              var data1={'_token': $('meta[name="token"]').attr('content'),'email':email};
        $.ajax({

               type:'POST',
               url:'sendOTP',
               data:  data1,
               success:function(data) {
                
                 
                  // var otpPIN= parseInt(data);
                   if (data) {
                   if(data.search('ail') > 0){
                    jAlert(data, 'FAILED');
                    return false;
                  }
                    $('#otpGen').val(data);
                     $('#email').hide();
            $('#name').hide();
            $('#password').hide();
            $('#cpassword').hide();
            $('#adminLogin').hide();
            $('#adminLogin').hide();
            $('#userType').hide();
            $('#aggree').hide();
            $("#adminRegister").show();
            $('#otpPIN').show();
                     jAlert('Security PIN has been sent on owners number, Please use it as PIN', 'success');
                      } else {
                        jAlert('Failed to register','FAILED');
                      }
                   
               }
            });


          
        
        });
        $("#adminRegister").click(function () {
            var email = $("#email").val();
            var name = $("#name").val();
            var userType = $("#userType").val();
            var password = $("#password").val();
            var confirmPassword = $("#cpassword").val(); 
            var otpPIN = parseInt($("#otpPIN").val());
            var otpGen=parseInt(localStorage.getItem('otpPIN'));
            if (otpGen == '' || otpPIN ==''){
                jAlert('Please enter the PIN', 'FAILED', );
                return false;
            }
/*$.post(
  "addUser",
  {'_token': $('meta[name="token"]').attr('content'),'email':email, 'name':name,
         'password':password, 'userType':userType, 'otpPIN':otpPIN, 'otpGen':otpGen},
  function(data) {
     if(data.search('vali') > 0){
                jAlert(data, 'FAILED');
                return false;
               }else {
                    window.location.href = "orders";
                 }
                    
               
  }
);*/

        //     var data1={'_token': $('meta[name="token"]').attr('content'),'email':email, 'name':name,
        //  'password':password, 'userType':userType, 'otpPIN':otpPIN, 'otpGen':otpGen};
        // $.post({

        //        type:'POST',
        //        url:'addUser',
        //        data:  data1,
        //        success:function(data) {
        //         if(data.search('vali') > 0){
        //         jAlert(data, 'FAILED');
        //         return false;
        //        }else {
        //             window.location.href = "orders";
        //          }
                    
        //        }
        //     });

            return true;

        });
    });
    </script>

</head>

<body class="animsition">
    <div class="page-wrapper" style="background-color: rgba(255,255,235,0.3);">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content" style="background-color: rgba(255,255,255,1);">
                       <!--  <div class="login-logo">
                            <a href="#">
                                <img src="images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div> -->
                        <div class="login-form">
                            <!-- <form action="{{URL::to('/addcatNtable') }}" method="post"> -->
                                <form action="{{URL::to('addUser')}}" method="post">
                                 {{ csrf_field() }}
                                <div class="form-group">
                                    <!-- <label>Name</label> -->
                                    <input class="au-input au-input--full" type="name" id="name" name="name" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <!-- <label>Email Address</label> -->
                                    <input class="au-input au-input--full" type="email" id="email" name="email" placeholder="Email" >
                                </div>
                                <div class="form-group">
                                    <!-- <label>Password</label> -->
                                    <input class="au-input au-input--full" type="password" id="password" name="password" placeholder="Password" >
                                </div>
                                <div class="form-group">
                                    <!-- <label>Confirm Password</label> -->
                                    <input class="au-input au-input--full" type="password" id="cpassword" name="cpassword" placeholder="Confirm Password" >
                                     <input class="au-input au-input--full" type="tel" minlength="4" maxlength="4" style="display: none;" id="otpPIN" name="otpPIN" placeholder="Enter OTP" >
                                       <input class="au-input au-input--full" type="hidden"   id="otpGen" name="otpGen" placeholder="Enter OTP" >
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
                                    <label>
                                        <input type="checkbox" name="aggree" id="aggree"  checked>Agree the terms and policy
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" id="adminLogin" type="button">proceed</button>
                                   <button type="submit" class="au-btn au-btn--block au-btn--green m-b-20" id="adminRegister" style="display: none;">register</button>
                                   <!-- <button class="au-btn au-btn--block au-btn--green m-b-20" id="adminRegister" type="button" style="display: none;">register</button> -->
                                <!-- <div class="social-login-content">
                                    <div class="social-button">
                                        <button class="au-btn au-btn--block au-btn--blue m-b-20">register with facebook</button>
                                        <button class="au-btn au-btn--block au-btn--blue2">register with twitter</button>
                                    </div>
                                </div> -->
                            </form>
                            <div class="register-link">
                                <p>
                                    Already have account?
                                    <a href="{{url('/adminlogin')}}">Sign In</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
   
    <script src="public/vendor/jquery-3.2.1.min.js"></script>
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
    <!-- <script src="public/vendor/counter-up/jquery.waypoints.min.js"></script> -->
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