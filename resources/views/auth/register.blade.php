<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Register Page</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">


    <!-- Fallback or error message -->
        {{-- {{dd($role)}} --}}
        <p>Please select a role.</p>
        @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        
    <form action="{{ route('register.trainee') }}" method="POST" class="user" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name = "roles" id = "roles" value = "{{$role}}">

        <div class="container">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                        <div class="col-lg-7">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                </div>
                                <div class="form-group">
                                    <input name="nama" type="text" class="form-control form-control-user @error('nama') is-invalid @enderror" id="exampleInputName" placeholder="Name">
                                    @error('nama')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input name="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="exampleInputEmail" placeholder="Email Address">
                                    @error('email')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input name="kodetrainee" type="text" class="form-control form-control-user @error('kodetrainee') is-invalid @enderror" id="kodeTrainee" placeholder="Kode Trainee">
                                    @error('kodetrainee')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input name="contact" type="text" class="form-control form-control-user @error('contact') is-invalid @enderror" id="exampleInputContact" placeholder="Contact">
                                    @error('contact')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input name="alamat" type="text" class="form-control form-control-user @error('alamat') is-invalid @enderror" id="exampleInputAddress" placeholder="Alamat">
                                    @error('alamat')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input name="binusian" type="text" class="form-control form-control-user @error('binusian') is-invalid @enderror" id="exampleInputAddress" placeholder="binusian">
                                    @error('binusian')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input name="jurusan" type="text" class="form-control form-control-user @error('jurusan') is-invalid @enderror" id="exampleInputAddress" placeholder="jurusan">
                                    @error('jurusan')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input name="tanggallahir" type="date" class="form-control form-control-user @error('tanggallahir') is-invalid @enderror" id="exampleInputDOB">
                                    @error('tanggallahir')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input name="image" type="file" class="form-control-file @error('image') is-invalid @enderror" id="exampleInputFile">
                                    @error('image')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input name="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" id="exampleInputPassword" placeholder="Password">
                                        @error('password')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="confirmpassword" type="password" class="form-control form-control-user @error('confirmpassword') is-invalid @enderror" id="exampleRepeatPassword" placeholder="Repeat Password">
                                        @error('confirmpassword')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Status :</label>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="statusActive" name="status" class="custom-control-input" value="active" checked>
                                        <label class="custom-control-label" for="statusActive">Active</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="statusQuit" name="status" class="custom-control-input" value="Inactive">
                                        <label class="custom-control-label" for="statusQuit">Quit</label>
                                    </div>
                                    @error('status')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">Register Account</button>

                            </div>

                          <hr>
                          <div class="text-center">
                            <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
                          </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </form>





</body>

</html>
