<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Admin login</title>    
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
        <meta http-equiv="X-UA-Compatible" content="IE=edge" >
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" >    
         
        {!! Html::style('css/common/font-awesome.min.css') !!}
        {!! Html::style('css/admin/login.css') !!}
    </head>
    <body>
        <div class="dev-page dev-page-login dev-page-login-v2"> 
             
            @yield('content') 
        </div>
        {!! Html::script('js/admin/jquery.min.js') !!} 
        <script>
            $('.error-message').delay(3000).fadeOut(500);
            $('.success-message').delay(3000).fadeOut(500);
        </script>
    </body>
</html>
