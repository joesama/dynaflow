<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Flow Management</title>
<link rel="stylesheet" href="{{ URL::to('../workbench/javan/dynaflow/public/assets/css/style.css')}}" />
<script type="text/javascript" src="{{ URL::to('../workbench/javan/dynaflow/public/assets/js/jquery-1.10.2.js')}}"></script>
<script type="text/javascript" src="{{ URL::to('../workbench/javan/dynaflow/public/assets/js/jquery-ui-1.10.4.custom.min.js')}}"></script>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="header">
           <h1>Dyna Flow</h1>
        </div><!-- header -->
        <h1 class="main_title">@section('judul') 
                    @show</h1>
        <table width="100%">
            <tr><td width="20%" valign="top">
                <div class="list-group">
                  <a href="{{ URL::to('sysflow?modul=1')}}" class="list-group-item <?php if(isset($_GET['modul'])){ if($_GET['modul'] == 1){ ?>active <?php } } ?>">Flow</a>
                  <a href="{{ URL::to('sysflowstep?modul=2')}}" class="list-group-item <?php if(isset($_GET['modul'])){ if($_GET['modul'] == 2){ ?>active <?php } } ?>">Step</a>
                </div>
            </td><td width="5%">
            </td><td width="75%">
                
                     @yield('content')
                <!-- content -->
        </td></tr>
        </table>
                
        <div class="footer">
            Javan  Flow Management
        </div><!-- footer -->
    </div><!-- container -->
</body>
</html>
