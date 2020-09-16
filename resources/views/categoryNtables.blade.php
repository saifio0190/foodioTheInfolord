@extends('layouts.main')
@section('content')

 <div class="section__content section__content--p30" style="    margin-top: 35px;">
                    <div class="container-fluid">
                        
 

   <div class="row">
       <div class="col-lg-8 text-center" >
         <h4>  Restaurant Tables </h4>
         <p>&nbsp</p>
       </div>
        <div class="col-lg-4 text-center">
         <h4>   Cusine Categories </h4>
         <p>&nbsp</p>
       </div>
  </div>
                    
                         <div class="row">

                            <div class="col-lg-8">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                               
                                                <th>name</th>
                                                <th class="text-center">Added</th>
                                               
                                                <!-- <th class="text-right">Time</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                               @foreach($tables as $table)
                                                    <tr>
                                                        <td>{{$table->id }}</td>
                                                        <td class="text-right">{{$table->name }}</td>
                                                         <td class="text-right">{{$table->added }}</td>
                                                         <!-- <td class="text-right">{{$table->created_at }}</td> -->
                                                    </tr>
                                                          @endforeach
                                                    
                                        </tbody>
                                                 
                                    </table>
                                     <h4 class="title-5 m-b-35">{{ $tables->render()}}</h4>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="au-card au-card--bg-blue au-card-top-countries m-b-30">
                                    <div class="au-card-inner">
                                        <div class="table-responsive">
                                            <table class="table table-top-countries">
                                                <tbody>
                                                     @foreach($categories as $categorys)
                                                    <tr>
                                                        <td class="text-left">{{$categorys->id }}</td>
                                                        <td class="text-center">{{$categorys->name }}</td>
                                                    </tr>
                                                          @endforeach
                                                    
                                                </tbody>
                                                
                                            </table>
                                             <h4 class="title-5 m-b-35">{{ $categories->render()}}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @endsection