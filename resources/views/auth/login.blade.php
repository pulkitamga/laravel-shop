@extends('master')
@section('content')
<body>
   <section class="vh-100" style="background:#eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-8">
              <div class="card text-black" style="border-radius:25px">
                <div class="card-body p-md-5">
                    <div class="row">
                        <div class="col-md-6">
                         <img src="{{asset('images\signup-image.jpg')}}"/>   
                         <div class="d-flex justify-content-center align-items-center">
                            <a href="/admin/register"class="text-black my-4 text-deco">Create An Account</a>
                         </div>
                        </div>
                        <div class="col-md-6 my-3">
                        <p class="text-center h1 fw-bold mb-5 mt-4 mx-1 mx-md-4">Sign Up</p>
                            <form class="my-4" action="{{route('login-user')}}" method="POST">
                                @if(Session::has('success'))
                                <div class="alert alert-success">{{Session::get('success')}}</div>
                                @endif
                                @if(Session::has('fail'))
                                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                                @endif
                                @csrf
                                <div class="d-flex flex-row align-items-center my-3">
                                    <i class="fa-solid fa-user-tie fa-beat fa-lg fa-fw me-3"></i>
                                    <div class="form-outline flex-fill mb-0">
                                        <input type="email" name="email" value="" class="form-control" placeholder="Your Email"/>
                                        <span class="text-danger">@error('email'){{$message}}@enderror</span>
                                    </div>
                                </div>
                                <div class="d-flex  flex-row align-items-center my-3 ">
                                <i class="fa-solid fa-key me-3 fa-lg fa-fw fa-beat"></i>
                                    <div class="form-outline mb-0 flex-fill">
                                        <input type="password" name="password" value="" class="form-control" placeholder="Your Password"/>
                                        <span class="text-danger">@error('password'){{$message}}@enderror</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center mx-4 my-4">
                                    <button class="btn btn-primary my-1">Sign Up</button>
                                </div>
                            </form>

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
