<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>PAGE NOT FOUND</title>


      {!! Html::style('css/common/bootstrap.min.css') !!} 
      {!! Html::style('css/common/font-awesome.min.css') !!}

      {!! Html::style('css/admin/fonts.googleapis.com.css') !!}
      <!-- ace styles -->
      {!! Html::style('css/admin/ace.min.css') !!}

      {!! Html::style('css/admin/ace-skins.min.css') !!}
  </head>
  <body class="no-skin">
     
     <div class="main-container ace-save-state" id="main-container">

        <div class="main-content">
       	   
           <div class="main-content-inner">
              @yield('content')
           </div>

        </div>
      
      </div>

  </body>
</html>