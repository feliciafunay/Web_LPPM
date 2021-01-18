<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Change Data Admin</title>
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('css/themify-icons.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/fontawesome/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/owl-carousel/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/animate-css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('font-awesome.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
@if(isset(Auth::user()->email))
   <section class="area-padding-bottom area-padding-top">
        <div class="container mx-auto" style="width:50%;">
            <h2 class="mb-5" style="text-align:center">Update Profile</h2>            
@else
    <script>window.location="/admin";</script>
@endif 

            @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            @foreach($admin as $adm)
            <form method="post" action="{{url( '/admin/update' )}}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Masukkan Nama" name="name" value="{{ old('name') ? old('name') : $adm->name  }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email" name="email" value="{{ old('email') ? old('email') : $adm->email  }}">
                </div>
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Masukkan Password" name="password">
                </div>
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
            @endforeach
        </div>
    </section>
    
    <script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/popper.js')}}"></script>
    <script src="{{asset('vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('js/waypoints.min.js')}}"></script>
    <script src="{{asset('js/mail-script.js')}}"></script>
    <script src="{{asset('js/contact.js')}}"></script>
    <script src="{{asset('js/jquery.form.js')}}"></script>
    <script src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/theme.js')}}"></script>
</body>
</html>