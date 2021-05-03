@extends('layouts.auth')
@section('content')
<div id="wrap">
        
    <form method = "post" action="{{url('create-product')}}" enctype="multipart/form-data">
    @csrf
    <div class="mainSignUp">
        <h1>Create Product</h1>
        

        <label  for="email"><b>Name</b></label>
        <input type="text" placeholder="Enter Name Product" name="name"  required>

        <label  for="email"><b>Price</b></label>
        <input  type="text" placeholder="Price Product" name="price"  required>

        <label for="psw"><b>Mens Or Womens</b></label>
        <input type="text" placeholder="Mens Or Womens" name="sex"  required>
        <input type="file"  name="avatar"  required>

        <div class="clearfix">
        
        <button type="submit" class="signupbtn">Create Product</button>
        </div>
    </div>
    </form>
    @if(session('success'))
        <div class ="alert alert-danger alert-dismissible">
            
            
            {{session('success')}}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
@endsection