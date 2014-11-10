<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Flow Management</title>
<link rel="stylesheet" href="{{ URL::to('../workbench/javan/dynaflow/public/assets/css/style.css')}}" />
<script type="text/javascript" src="{{ URL::to('../workbench/javan/dynaflow/public/assets/js/jquery-1.10.2.js')}}"></script>
<script type="text/javascript" src="{{ URL::to('../workbench/javan/dynaflow/public/assets/js/jquery-ui-1.10.4.custom.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::to('../workbench/javan/dynaflow/public/assets/js/script.js')}}"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
 
<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
 
<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="header">
           <h1>Oke</h1>
        </div><!-- header -->
        <h1 class="main_title">@section('judul') 
                    @show</h1>
        <table width="100%">
            <tr><td width="20%" valign="top">
                <div class="list-group">
                  <a href="{{ URL::to('sysflow')}}" class="list-group-item">Flow</a>
                  <a href="{{ URL::to('sysflowstep')}}" class="list-group-item">Step</a>
                </div>
      
            </td><td width="80%">
                
                <div class="contentner">
                     @yield('content')
                </div><!-- content -->
        </td></tr>
        </table>
                
        <div class="footer">
            Javan  Flow Management
        </div><!-- footer -->
    </div><!-- container -->
</body>
</html>
