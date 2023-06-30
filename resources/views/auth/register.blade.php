@extends('master')
@section('content')
<body>
   <section class="vh-100" style="background:#eee;">
   <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-item-center h-100">
     <div class="col-lg-8">
        <div class="card text-black" style="border-radius:25px">
         <div class="card-body p-md-5">
            <div class="row justify-content-center">
           <div class="col-md-6">
           <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign Up</p>
          
           <form class="mx-1 mx-md-4" action="{{route('register-user')}}" method="POST">
            @if(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            @if(Session::has('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif
            @csrf
            <div class="d-flex flex-row align-items-center mb-4">
                  <i class="fa-lg fa-solid fa-user-tie me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input name="name" value=""type="text" id="form3Example1c" class="form-control" placeholder="Your Name" />
                      <!-- <label class="form-label" for="form3Example1c">Your Name</label> -->
                      <span class="text-danger">@error('name'){{$message}}@enderror</span>
                    </div>
                  </div>
            <div class="d-flex flex-row align-items-center mb-3">
             <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
             <div class="form-outline flex-fill mb-0">
               <input name="email" value=""type="email" class="form-control" placeholder="Your Email"/>
               <span class="text-danger">@error('email'){{$message}}@enderror</span>
             </div>
            </div>
            <div class="d-flex flex-row align-items-center mb-3">
            <i class="fa-solid fa-key fa-lg me-3"></i>
            <div class="form-outline flex-fill m-0">
               <input name="password" value="" type="password" class="form-control" placeholder="Password"/>
               <span class="text-danger">@error('password'){{$message}}@enderror</span>
            </div>
            </div>
            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4" >
               <button class="btn btn-primary">Register</button>
            </div>
           </form>
           </div>
           <div class="col-md-6">
          <div>
          <img src="{{asset('images/signin-image.jpg')}}"/>
          </div>
            <div class="d-flex justify-content-center mx-4">
               <a href="/login" class="text-black mx-4">I am already member</a>
            </div>

           </div>
      
            </div>
         </div>  
        </div>
     </div>
    </div>
   </div>
</section>

</body>
@endsection