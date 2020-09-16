
<?php


// echo base_path();
// exit();
 ?>

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<html>
<head>
  <title> upload speciality</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  {{ $users->render()}}
<form name="upload"  id="upload" method="post" enctype="multipart/form-data" action="{{URL::to('/store') }}">
	  {{ csrf_field() }}

<input type="file" name="valueImg" id="image" placeholder="imageupload" value="">
<input type="text" name="category" id="category" placeholder="category" value="">
<input type="text" name="itemId" id="itemId" value="">
<input type="text" name="name" id="name" placeholder="name"  value="">
<br>  
<input type="hidden"  name="_token" value="{{ csrf_token()}}">  
<br>  
<button type="submit" name="submit"> insert </button>
<!-- Session::forget('success'); -->
@if (session()->has('success1'))
<div class="alert alert-success">
        {{ session()->get('success') }}
    </div>

    @endif

     <table border = 1>
         <tr>
            <td>ID</td>
            <td>Name</td>
         </tr>
         @foreach ($users as $user)

         {{-- $pathTo = "../storage/app/SpecialItems/" --}}
         <tr>
            <td>{{ $user->id }}</td>
           <td> <img src="{{('storage/app/SpecialItems/'.$user->valueImg)}}" style="width: 20%"></img></td>
         </tr>
         @endforeach
      </table>

  
</form>
</body>
</html>