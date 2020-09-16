
@extends('layouts.main')

<?php 
 
 // session_start();
 $email='admin@foodio.co';
 $name='admin';

 ?>

@section('content')




                               <div class="card">
                                    <div class="card-header">Add menu Item</div>
                                    <div class="card-body">

                                                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
  @foreach ($errors->all() as $error)
   <li>{{ $error }}</li>
  @endforeach
        </ul>
    </div>
  @endif
 @if (session()->has('success'))
<div class="alert alert-success">
        {{ session()->get('success') }} &nbsp&nbsp <a href="{{URL('/items')}}"> <button>Goto Items</button></a> 
    </div>

 @endif
                                        
                                        <hr>
                                        <form name="addItem" id="addItem" enctype="multipart/form-data" action="{{URL::to('/addItemBack') }}" method="post" novalidate="novalidate">

<!-- 
<form name="upload"  id="upload" method="post" enctype="multipart/form-data" action="{{URL::to('/store') }}"> -->
      {{ csrf_field() }}


                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Item Name</label>
                                                <input id="cc-pament" name="name" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Category</label>
                                               <!--  <input id="cc-name" name="category" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span> -->
                                                 <select class="form-control" name="category" id="sel1">

                                                  @foreach($categories as $key=> $categorys)
                                                 
                                                      
                                                           <option value="{{$categorys->id}}">{{$categorys->name}}</option>
                                                       
                                                

                                                          @endforeach
                                                            </select>
                                                      
                                                     
                                                   
                                                      
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Added By</label>
                                                <input id="cc-number" name="added" type="text" class="form-control cc-number identified visa" value=" {{ Session::get('adminusers') }} " data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true">   <span class="caret"></span></span>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Image</label>
                                                        <input id="cc-exp" name="img" type="file" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid extension file." placeholder="MM / YY"
                                                            autocomplete="cc-exp">
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <label for="x_card_code" class="control-label mb-1">Price</label>
                                                    <div class="input-group">
                                                        <input id="x_card_code" name="price" type="tel" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off">

                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <label for="x_card_code" class="control-label mb-1">Special Item ?</label>
                                                   <select class="form-control" name="isSpecial" id="sel1">
    <option value="1">Yes</option>
    <option value="0" selected>No</option>
   
  </select>
                                                </div>
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <!-- <i class="fa fa-lock fa-lg"></i>&nbsp; -->
                                                    <span id="payment-button-amount">Add </span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                 </section>
                @endsection('content')
