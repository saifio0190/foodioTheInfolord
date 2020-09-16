@extends('layouts.main')

@section('content')

            <!-- MAIN CONTENT-->
    
                    <div class="container-fluid">

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
        {{ session()->get('success') }} &nbsp&nbsp <a href="{{URL('/catNtable')}}"> <button>Goto Table & cusines</button></a> 
    </div>

 @endif
           
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">add Table</div>
                                    <div class="card-body">
                                        
                                        
                                        <form action="{{URL::to('/addtables') }}" method="post" novalidate="novalidate">
                                            <div class="form-group">
                                                  {{ csrf_field() }}
                                                <label for="cc-payment" class="control-label mb-1">Table name</label>
                                                <input id="cc-pament" name="name" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">added</label>
                                                <input id="cc-name" name="added" type="text" class="form-control cc-name valid" data-val="true" value=" {{ Session::get('adminusers') }}" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                           
                                         
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    
                                                    <span id="payment-button-amount">Add</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                              <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">add cusine category</div>
                                    <div class="card-body">
                                        
                                        
                                        <form action="{{URL::to('/addcategory') }}" method="post" novalidate="novalidate">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Name</label>
                                                <input id="cc-pament" name="name" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                            </div>
                                              {{ csrf_field() }}
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">added</label>
                                                <input id="cc-name" name="added" type="text" class="form-control cc-name valid" data-val="true" value=" {{ Session::get('adminusers') }}" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                           
                                         
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    
                                                    <span id="payment-button-amount">Add</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                     
                
                </div>
            </div>

     @endsection('content')