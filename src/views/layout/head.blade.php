<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Flow Management</title>
<!-- <link rel="stylesheet" href="{{ URL::to('../workbench/javan/dynaflow/public/assets/css/style.css')}}" /> -->
<style type="text/css">
    
* {
    margin: 0;
    padding: 0;
}
body {
    padding: 10px;
    background: #eaeaea;
    text-align: center;
    font-family: arial;
    font-size: 12px;
    color: #333333;
}
.container {
    width: 100%;
    height: auto;
    background: #ffffff;
    border: 1px solid #cccccc;
    border-radius: 10px;
    margin: auto;
    text-align: left;
}
.header {
    padding: 10px;
}
.main_title {
    background: #cccccc;
    color: #ffffff;
    padding: 10px;
    font-size: 20px;
    line-height: 20px;
}
.content {
    padding: 10px;
    min-height: 100px;
    text-align: center;
}
.footer {
    padding: 10px;
    text-align: right;
}
.footer a {
    color: #999999;
    text-decoration: none;
}
.footer a:hover {
    text-decoration: underline;
}
/* Sortable ******************/
#sortable { 
    list-style: none; 
    text-align: left; 
}
#sortable li { 
    margin: 0 0 10px 0;
    height: 75px; 
    background: #dbd9d9;
    border: 1px solid #999999;
    border-radius: 5px;
    color: #333333;
}
#sortable li span {
    background-color: #b4b3b3;
    background-image: url('../images/drag.png');
    background-repeat: no-repeat;
    background-position: center;
    width: 30px;
    height: 75px; 
    display: inline-block;
    float: left;
    cursor: move;
}
#sortable li img {
    height: 65px;
    border: 5px solid #cccccc;
    display: inline-block;
    float: left;
}
#sortable li div {
    padding: 5px;
}
#sortable li h2 {    
    font-size: 16px;
    line-height: 20px;
}
</style>
<!-- <script type="text/javascript" src="{{ URL::to('../workbench/javan/dynaflow/public/assets/js/jquery-1.10.2.js')}}"></script>
<script type="text/javascript" src="{{ URL::to('../workbench/javan/dynaflow/public/assets/js/jquery-ui-1.10.4.custom.min.js')}}"></script>
 -->
 <script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
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
                  <a href="{{ URL::to('sysapplication?modul=3')}}" class="list-group-item <?php if(isset($_GET['modul'])){ if($_GET['modul'] == 3){ ?>active <?php } } ?>">Application</a>
                  <a href="{{ URL::to('formmanager?modul=4')}}" class="list-group-item <?php if(isset($_GET['modul'])){ if($_GET['modul'] == 4){ ?>active <?php } } ?>">Form Manager</a>
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
