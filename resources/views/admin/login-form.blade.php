<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel 10 multi authentication by WebJourney</title>    
    
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('admin\style.css') }}" >  
</head>

<body>
    <section class="ftco-section">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Admin Login Form</h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="login-wrap p-4 p-md-5">

                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-user-o"></span>
                        </div>

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        @if(Session::has('error-message'))
                        <p class="alert alert-info">{{ Session::get('error-message') }}</p>
                        @endif

                        <form action="{{ route('login.functionality') }}" method="post" class="login-form">
                        @csrf
                        <div class="form-group">
                            {{-- <label class="form-label">Email address</label> --}}
                            <input type="email" class="form-control rounded-left" name="email" placeholder="Enter Email">
                        </div>
                        <div class="form-group d-flex">
                            {{-- <label class="form-label">Password</label> --}}
                            <input type="password" class="form-control rounded-left" name="password" placeholder="Enter Password">
                        </div>
                        {{-- <input type="submit" class="btn btn-primary" value="Admin Login"> --}}
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary rounded submit p-3 px-5">Log In to Admin Panel</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    {{-- Added from the template --}}
    <script type="text/javascript" src="{{ asset('js/admin/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/admin/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/admin/popper.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/admin/jquery.min.js') }}"></script>

</body>

</html>