<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/psmart/logo.png" type="image/png">
    <title>Signup</title>
    <link href="{{ URL::asset('/css/signup.css') }}" rel="stylesheet" />
</head>
<body>
    <form action="{{ url('register-user') }}" method="post" style="border:1px solid #ccc; align-content:center">
        @if(Session::has('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
        @endif
        @if(Session::has('fail'))
        <div class="alert alert-danger">{{Session::get('fail')}}</div>
        @endif
        @csrf
        <div class="container">
          <h1>Sign Up</h1>
          <p>Please fill in this form to create an account.</p>
          <hr>
          <label for="name"><b>Full Name</b></label>
          <input type="text" placeholder="Enter Fullname" name="full_name" required>
          <span class="text-danger">@error('full_name') {{$message}} @enderror</span>

          <label for="name"><b>Gender</b></label>
          <input type="text" placeholder="Enter Gender" name="gender" required>
          <span class="text-danger">@error('gender') {{$message}} @enderror</span>

          <label for="name"><b>Address</b></label>
          <input type="text" placeholder="Enter Address" name="address" required>
          <span class="text-danger">@error('address') {{$message}} @enderror</span>

          <label for="phone"><b>Contact</b></label>
          <br>
          <input type="tel" placeholder="Enter Contact" name="contact" pattern="[0-9]{4}[0-9]{3}[0-9]{3}" required>
          <span class="text-danger">@error('contact') {{$message}} @enderror</span>

          <label for="name"><b>District</b></label>
          <input type="text" placeholder="Enter District" name="district" required>
          <span class="text-danger">@error('district') {{$message}} @enderror</span>

          <br>
          <br>

          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" required>
          <span class="text-danger">@error('email') {{$message}} @enderror</span>

          <label for="password"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" required>
          <span class="text-danger">@error('password') {{$message}} @enderror</span>

          <label for="psw-repeat"><b>Repeat Password</b></label>
          <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
          <span class="text-danger">@error('password') {{$message}} @enderror</span>

          <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
          </label>
          <br>
          <a href="login">Already Registered ? Login Here</a>

          <div class="clearfix">
            <button type="button" class="cancelbtn">Cancel</button>
            <button type="submit" class="signupbtn">Sign Up</button>
          </div>

        </div>
      </form>
</body>
</html>
