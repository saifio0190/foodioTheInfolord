<?php
    
        
    
?>


@extends('layouts.common')
@section('content') 
<link rel="stylesheet" href="https://dev.myuniverse.in/mutual-funds/public/css/esctoach_css/achmandate.css?v=1"> 
<script src="https://www.tecprocesssolution.com/proto/p2m/client/lib/jquery.min.js" type="text/javascript"></script>

<div class="ach_container martp30min">
<?php 	

$bankPrefill = base64_decode($bankPrefill);
$bankPrefill = json_decode($bankPrefill);		
// print_r($bankPrefill);
 ?>
            <h1 class="heading1">Bank Account Details</h1>
            <span class="red_line"></span>
            <div class="modal_container bank_form_container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="ach_form_field">
                            <label>Account Type</label>
                            <input type="text" name="accountType" id="accountType" class="ach_text_field" value="{{ $bankPrefill->FieldValue }}" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ach_form_field">
                            <label>Bank Name</label>
                            <input type="text" name="BankName" id="BankName" class="ach_text_field" value="{{ $bankPrefill->BankName }}" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="ach_form_field">
                            <label>11 Digit IFSC Code</label>
                            <input type="text" name="IFSCCode" id="IFSCCode" class="ach_text_field" value="{{ $bankPrefill->IFSCCode }}" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ach_form_field">
                            <label>MICR Code</label>
                            <input type="text" name="MICRCode" id="MICRCode" class="ach_text_field" value="{{ $bankPrefill->MICRCode }}" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="ach_form_field">
                            <label>Bank A/c Number</label>
                            <input type="text" name="BankAccNumber" id="BankAccNumber" class="ach_text_field" value="{{ $bankPrefill->BankAccNo }}" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ach_form_field">
                            <label>Bank A/c Holder Name</label>
                            <input type="text" name="BankAccHolderName" id="BankAccHolderName" class="ach_text_field" value="{{ $bankPrefill->BankAccHolderName }}"  />
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-12">
                        <div class="ach_form_field width100">
                            <label>Bank Address</label>
                            <input type="text" name="BankAddress" id="BankAddress" class="ach_text_field" value="{{ $bankPrefill->BankAccAddress }}" />

                        </div>
                    </div>
                   <!-- <button class="submit_button martpbtm30" onclick="javascript:calto();"> </button> -->
                   <button  class="submit_button martpbtm30" id="btnSubmit">Next </button>
                <script type="text/javascript" src="https://www.tecprocesssolution.com/proto/P2M/server/lib/checkout.js"></script>
                </div>
            </div>
            
        </div>

@stop
@section('pagejs') 


<script type="text/javascript">

      var configJson1 = {
            'tarCall': false,
            'features': {
                'showPGResponseMsg': true,
                'enableNewWindowFlow': true,    //for hybrid applications please disable this by passing false
                'enableExpressPay':true,
                'siDetailsAtMerchantEnd':true,
                'enableSI':true
            },
            'consumerData': {
                'deviceId': 'WEBMD5',   //possible values 'WEBSH1', 'WEBSH2' and 'WEBMD5'
                'token': '34f765947835fe54eee59b1a5101d46b',
                'returnUrl': 'https://dev.myuniverse.in/mutual-funds/online-mandate-registration/eMandateResponse',
                'responseHandler': handleResponse,
                'paymentMode': 'netBanking',
                'merchantLogoUrl': 'https://www.paynimo.com/CompanyDocs/company-logo-md.png',  //provided merchant logo will be displayed
                'merchantId': 'T499411',
                'currency': 'INR',
                'consumerId': 'ABMMU09010',  //Your unique consumer identifier to register a eMandate/eNACH
                'consumerMobileNo': '9762390190',
                'consumerEmailId': 'Saifiomd@gmail.com',
                'txnId': '1573124390',   //Unique merchant transaction ID
                'items': [{
                    'itemId': 'test',
                    'amount': 1,
                    'comAmt': '0'
                }],
                'customStyle': {
                    'PRIMARY_COLOR_CODE': '#3977b7',   //merchant primary color code
                    'SECONDARY_COLOR_CODE': '#FFFFFF',   //provide merchant's suitable color code
                    'BUTTON_COLOR_CODE_1': '#1969bb',   //merchant's button background color code
                    'BUTTON_COLOR_CODE_2': '#FFFFFF'   //provide merchant's suitable color code for button text
                },
                'accountNo': '50100248585057',    //Pass this if accountNo is captured at merchant side for eMandate/eNACH
                'accountHolderName': 'Mohammad Saif',  //Pass this if accountHolderName is captured at merchant side for ICICI eMandate & eNACH registration this is mandatory field, if not passed from merchant Customer need to enter in Checkout UI.
                //'ifscCode': 'ICIC0000001',        //Pass this if ifscCode is captured at merchant side.
                'accountType': 'Saving',  //Required for eNACH registration this is mandatory field
                'debitStartDate': '07-11-2019',
                'debitEndDate': '01-03-2047',
                'maxAmount': 1,
                'amountType': 'M',
                'frequency': 'ADHO' //  Available options DAIL, WEEK, MNTH, QURT, MIAN, YEAR, BIMN and ADHO
            }
        };

 console.log(typeof(configJson1));
    console.log('configJson -'+configJson1);

$('#BankAddress').val(('{{ $bankPrefill->BankAccAddress }}').replace(/[^\x00-\x7F]/g, "")); // for encode issue
$(document).ready(function() {
    function handleResponse(res) {
        if (typeof res != 'undefined' && typeof res.paymentMethod != 'undefined' && typeof res.paymentMethod.paymentTransaction != 'undefined' && typeof res.paymentMethod.paymentTransaction.statusCode != 'undefined' && res.paymentMethod.paymentTransaction.statusCode == '0300') {
            // success block
        } else if (typeof res != 'undefined' && typeof res.paymentMethod != 'undefined' && typeof res.paymentMethod.paymentTransaction != 'undefined' && typeof res.paymentMethod.paymentTransaction.statusCode != 'undefined' && res.paymentMethod.paymentTransaction.statusCode == '0398') {
            // initiated block
        } else {
            // error block
        }
    };

    $(document).off('click', '#btnSubmit').on('click', '#btnSubmit', function(e) {
        e.preventDefault();

        var configJson = {
            'tarCall': false,
            'features': {
                'showPGResponseMsg': true,
                'enableNewWindowFlow': true,    //for hybrid applications please disable this by passing false
                'enableExpressPay':true,
                'siDetailsAtMerchantEnd':true,
                'enableSI':true
            },
            'consumerData': {
                'deviceId': 'WEBMD5',   //possible values 'WEBSH1', 'WEBSH2' and 'WEBMD5'
                'token': '34f765947835fe54eee59b1a5101d46b',
                'returnUrl': 'https://dev.myuniverse.in/mutual-funds/online-mandate-registration/eMandateResponse',
                'responseHandler': handleResponse,
                'paymentMode': 'netBanking',
                'merchantLogoUrl': 'https://www.paynimo.com/CompanyDocs/company-logo-md.png',  //provided merchant logo will be displayed
                'merchantId': 'T499411',
                'currency': 'INR',
                'consumerId': 'ABMMU09010',  //Your unique consumer identifier to register a eMandate/eNACH
                'consumerMobileNo': '9762390190',
                'consumerEmailId': 'Saifiomd@gmail.com',
                'txnId': '1573124390',   //Unique merchant transaction ID
                'items': [{
                    'itemId': 'test',
                    'amount': 1,
                    'comAmt': '0'
                }],
                'customStyle': {
                    'PRIMARY_COLOR_CODE': '#3977b7',   //merchant primary color code
                    'SECONDARY_COLOR_CODE': '#FFFFFF',   //provide merchant's suitable color code
                    'BUTTON_COLOR_CODE_1': '#1969bb',   //merchant's button background color code
                    'BUTTON_COLOR_CODE_2': '#FFFFFF'   //provide merchant's suitable color code for button text
                },
                'accountNo': '50100248585057',    //Pass this if accountNo is captured at merchant side for eMandate/eNACH
                'accountHolderName': 'Mohammad Saif',  //Pass this if accountHolderName is captured at merchant side for ICICI eMandate & eNACH registration this is mandatory field, if not passed from merchant Customer need to enter in Checkout UI.
                //'ifscCode': 'ICIC0000001',        //Pass this if ifscCode is captured at merchant side.
                'accountType': 'Saving',  //Required for eNACH registration this is mandatory field
                'debitStartDate': '07-11-2019',
                'debitEndDate': '01-03-2047',
                'maxAmount': 1,
                'amountType': 'M',
                'frequency': 'ADHO' //  Available options DAIL, WEEK, MNTH, QURT, MIAN, YEAR, BIMN and ADHO
            }
        };

        $.pnCheckout(configJson);
        if(configJson.features.enableNewWindowFlow){
            pnCheckoutShared.openNewWindow();
        }
    });
   
});

	




</script>
@stop