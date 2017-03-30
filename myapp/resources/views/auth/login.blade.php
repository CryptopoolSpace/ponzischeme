@extends('layouts/master_auth')
@section('title', 'Registration')

@section('content')       
    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">IN+</h1>
            </div>
            <h3>Register to IN+</h3>
            <p>Create account to see it in action.</p>
            @include('partials/_alert')
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}
                <div class="form-group">
                    <div class="input-group">  
                        <input id="email" type="text" class="form-control" name="login" placeholder="Email or Phone"
                        required="required">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">  
                        <input id="password" type="password" class="form-control" name="password" placeholder="password"
                         required="required">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    </div>
                </div>
                <div class="form-group">
                    <!-- <div class="g-recaptcha" data-sitekey="6LcboBgUAAAAAKsJrg-3azvWrSJPfJGhXqM4P3AC"></div> -->
                    <span id="captcha">{!! captcha_img('flat') !!} </span>
                    <a href="javascript:void(0);" id="refresh" class="reload_captcha">
                    <i class="fa fa-refresh"></i></a>

                    <div><br />
                    <p><span class="green"><strong> ENTER CAPTCHA: </strong></span>
                    <input type="text" name="captcha" required=""></p>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
                </div>
            </form>
                
        </div>
    </div>
@stop
@section('resources')
<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
    $('.reload_captcha').click(function() {
        $.ajax({
            url: '/captcha/post/code/',
            type: 'get',
            success: function(resp) {
                $('#captcha').empty();
                $('#captcha').html(resp.data);
            },
            error(err) {
                console.log(err);
            }
        })
    });
</script>
@stop