@extends("layout.default")
@section("title", "login")
@section("content")
    <main class="mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                @if (session()->has("succes"))
                            <div class="alert alert-success">
                                {{session()->get("success")}}
                            </div>
                        
                        @endif
                        @if (session()->has("error"))
                             <div class="alert alert-success">
                                {{session()->get("error")}}
                            </div>
                        
                        @endif
                    <div class="card">
                        <h3 class="card-header text-center">Login</h3>
                        <div div class="card-body">
                            <form method="POST" action="{{route("login.post")}}">
                                @csrf
                                <div class="form-group mb-3">
                                   <input type="text" placeholder="Email"
                                        id="Email" class="form-control" name="email"
                                        required authofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">
                                            {{ $errors->first('email') }}
                                        </span>
                                    @endif                                    
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Password"
                                            id="password" class="form-control"
                                            name="password" required>
                                        @if ($errors->has('password'))
                                            <span class="text-danger" >
                                                {{ $errors->first('password') }}
                                            </span>
                                        
                                        @endif
                                </div>
                                <div class="d-grid mx-auto">
                                    <button type="submit"
                                        class="btn btn-dark btn-block">Log in</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection