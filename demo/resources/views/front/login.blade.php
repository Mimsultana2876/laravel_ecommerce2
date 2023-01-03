@extends('front.layout.layout');
@section('content')
<div class="span9">
    <!-- <ul class="breadcrumb">
        <li><a href="" > Home</a><span class="divider"></span></li>
        <li class="active">Login</li>
    </ul> -->
    <h3>Login</h3>
    <div class="well">
         @if ($errors->any())
        <div class= "alert alert-danger">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </div>
        @endif
        <form class="form-horizontal" method="post" action="{{route('loginCheck')}}">
            @csrf
            <div class="control-group">
                <label class="control-label" for="input_email"> Email</label>
                <div class="controls">
                    <input type="text" id="input_email"  name="email" placeholder="Email">

                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="input_password"> Password</label>
                <div class="controls">
                    <input type="password" id="input_password"  name="password" placeholder="Password">

                </div>
            </div>

            <div class="control-group">
                
                <div class="controls">
                    <input type="submit" value="login">

                </div>
            </div>


        </form>
    </div>

    <h3>Registration</h3>
    <div class="well">
        <form class="form-horizontal" action="{{route('user_store')}}" method="post">
            @csrf
        <div class="control-group">
                <label class="control-label" for="input_first_name"> First Name</label>
                <div class="controls">
                    <input type="text" id="input_first_name" name="first_name" placeholder="First Name" require>

                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="input_Last_name"> Last Name</label>
                <div class="controls">
                    <input type="text" id="input_Last_name" name="last_name"  placeholder="Last Name" require>

                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="input_email"> Email</label>
                <div class="controls">
                    <input type="text" id="input_email" name="email" placeholder="Email"require>

                </div>
            </div>


            <div class="control-group">
                <label class="control-label" for="input_password"> Password</label>
                <div class="controls">
                    <input type="password" id="input_password" name="password" placeholder="Password">

                </div>
            </div>

            <div class="control-group">
                
                <div class="controls">
                    <input type="submit" value="login">

                </div>
            </div>


        </form>
    </div>
</div>


@endsection