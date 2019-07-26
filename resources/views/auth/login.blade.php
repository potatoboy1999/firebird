<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="{{{ asset('img/favicon.png') }}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Firebird</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Firebird</h1>
      </div>
      <div class="login-box">
        <form class="login-form" method="POST" action="{{ url('admin/login') }}">
          {{ csrf_field() }}
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>INICIAR SESION</h3>
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label class="control-label">MAIL</label>
            <input class="form-control" type="text" name="email" value="{{ old('email') }}" placeholder="Email" autofocus>
            @if ($errors->has('email'))
            <span class="help-block">
              <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label class="control-label">PASSWORD</label>
            <input class="form-control" type="password" placeholder="Password" name="password">
            @if ($errors->has('password'))
            <span class="help-block">
              <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
          </div>
          @if(session('times_admin')>=3)
          <div class="form-group">
            <img src="{{ url('admin/captcha') }}" alt="" id="captcha">
              <input type="text" name="captcha" class="form-control" style="width:calc(100% - 4px - (115px + 44px));display:inline-block;" placeholder="Captcha" required>
              <a href="#" onclick="$('#captcha').attr('src','{{ url('admin/captcha') }}'+'?'+Math.round(Math.random()*10000));" class="form-control" style="width:40px;background:#ccc;color:#fff;display:inline-block;">&#10227;</a>
          </div>
          @endif
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <label>
                   <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> <span class="label-text">Recordarme</span>
                </label>
              </div>
              <!--<p class="semibold-text mb-2"><a href="{{ url('admin/password/reset') }}">¿Olvido clave ?</a></p>-->
            </div>
          </div>
          <div class="form-group btn-container">
            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>INICIAR</button>
          </div>
        </form>
      </div>
    </section>
  </body>
  <!-- Essential javascripts for application to work-->
  <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
  <!-- The javascript plugin to display page loading on top-->
  <script src="{{ asset('js/plugins/pace.min.js') }}"></script>
</html>
