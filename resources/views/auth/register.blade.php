@extends('layout.master')

@section('content')


<title>Register Page</title>
<body style="background-color: rgb(216, 244, 244)">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container" style="height:600px">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                <div class="card-body">
                                    <form action="{{ route('register') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" name="firstname" id="firstname" type="text" placeholder="Enter your first name" />
                                                    <label for="inputFirstName">First name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input class="form-control" name="lastname" id="lastname" type="text" placeholder="Enter your last name" />
                                                    <label for="inputLastName">Last name</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="email" id="email" type="email" placeholder="name@example.com" />
                                            <label for="inputEmail">Email address</label>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" name="password" id="password" type="password" placeholder="Create a password" />
                                                    <label for="inputPassword">Password</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" name="password_confirmation" id="password_confirmation" type="password" placeholder="Confirm password" />
                                                    <label for="inputPasswordConfirm">Confirm Password</label>
                                                </div>
                                            </div>
                                            <!-- <input type="text" id="verification_number" name="verification_number" style="width: 60%; margin: auto; padding: 10px; margin-top: 10px;" placeholder="Verification Number" required> -->
                                        </div>
                                        <div class="mt-4 mb-0">
                                        <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Register </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="login">Have an account? Go to login</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
       
        </div>
    </div>
   
</body>

@endsection