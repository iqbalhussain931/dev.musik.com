@extends('layouts.master')

@section('bodyClass') bg-info dker @endsection

@section('content')

<section id="content" class="m-t-lg wrapper-md animated fadeInDown">
    <div class="container aside-xl">
        <a class="navbar-brand block" href="index.html"><span class="h1 font-bold">Musik</span></a>
        <section class="m-b-lg">
            <header class="wrapper text-center">
                <strong>Sign up to find interesting thing</strong>
            </header>
            <form  method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input placeholder="Name" class="form-control rounded input-lg text-center no-border" name="name" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" placeholder="Email" class="form-control rounded input-lg text-center no-border" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" placeholder="Password" class="form-control rounded input-lg text-center no-border" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password" class="form-control rounded input-lg text-center no-border" name="password_confirmation" placeholder="Confirm Password" required>
                </div>
                <div class="checkbox i-checks m-b">
                    <label class="m-l">
                        <input type="checkbox" checked=""><i></i> Agree the <a href="#">terms and policy</a>
                    </label>
                </div>
                <button type="submit" class="btn btn-lg btn-warning lt b-white b-2x btn-block btn-rounded"><i class="icon-arrow-right pull-right"></i><span class="m-r-n-lg">Sign up</span></button>
                <div class="line line-dashed"></div>
                <p class="text-muted text-center"><small>Already have an account?</small></p>
                <a href="{{ route('login') }}" class="btn btn-lg btn-info btn-block btn-rounded">Sign in</a>
            </form>
        </section>
    </div>
</section>
<!-- footer -->
<footer id="footer">
    <div class="text-center padder clearfix">
        <p>
            <small>Web app framework base on Bootstrap<br>&copy; 2014</small>
        </p>
    </div>
</footer>


@endsection
