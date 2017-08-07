@extends('layouts.master')

@section('bodyClass') bg-info dker @endsection

@section('content')
<section id="content" class="m-t-lg wrapper-md animated fadeInUp">
    <div class="container aside-xl">
        <a class="navbar-brand block" href="{{ url('/') }}"><span class="h1 font-bold">{{ config('app.name') }}</span></a>
        <section class="m-b-lg">
            <header class="wrapper text-center">
                <strong>Sign in to get in touch</strong>
            </header>
            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" name="email" value="{{ old('email') }}" required autofocus placeholder="Email" class="form-control rounded input-lg text-center no-border">
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" placeholder="Password" class="form-control rounded input-lg text-center no-border"  name="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <button type="submit" class="btn btn-lg btn-warning lt b-white b-2x btn-block btn-rounded"><i class="icon-arrow-right pull-right"></i><span class="m-r-n-lg">Sign in</span></button>
                <div class="text-center m-t m-b"><a href="{{ route('password.request') }}"><small>Forgot password?</small></a></div>
                <div class="line line-dashed"></div>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a href="{{ route('register') }}" class="btn btn-lg btn-info btn-block rounded">Create an account</a>
            </form>
        </section>
    </div>
</section>
<!-- footer -->
<footer id="footer">
    <div class="text-center padder">
        <p>
            <small>Web app framework base on Bootstrap<br>&copy; 2014</small>
        </p>
    </div>
</footer>
@endsection
