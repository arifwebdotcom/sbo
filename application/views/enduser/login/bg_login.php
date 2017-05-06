<?php

echo "

<body class='hold-transition login-page'>
    <div class='login-box'>
      <div class='login-logo'>
        <a href='core/index2.html'><b>SPK SAW</a>
      </div><!-- /.login-logo -->
      <div class='login-box-body'>       
        <form action='index.html' method='post'>
          <div class='form-group has-feedback'>
            <input type='text' class='form-control' name='username' id='username' placeholder='Username'>
            <span class='glyphicon glyphicon-envelope form-control-feedback'></span>
          </div>
          <div class='form-group has-feedback'>
            <input type='password' class='form-control' name='password' id='password' placeholder='Password' onkeyup=javascript:loginn(event)>
            <span class='glyphicon glyphicon-lock form-control-feedback'></span>
          </div>
          <div class='row'>
            <div class='col-xs-8'>
              
            </div><!-- /.col -->
            <div class='col-xs-12'>
              <button type='button' class='btn btn-primary btn-block btn-flat' onclick=javascript:login()>Login</button>
            </div><!-- /.col -->
          </div>
          
        </form>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

   ";

    ?>