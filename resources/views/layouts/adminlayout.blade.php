<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Medical">
        <meta name="keywords" content="Medical">
        <meta name="author" content="stacks">
        <link rel="shortcut icon" href="">
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <!-- Title -->
        <title>Construction</title>
        <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="{{url('/')}}/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{url('/')}}/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- <link href="{{url('/')}}/assets/plugins/icomoon/style.css" rel="stylesheet">
    <link href="{{url('/')}}/assets/plugins/uniform/css/default.css" rel="stylesheet" />
    <link href="{{url('/')}}/assets/plugins/switchery/switchery.min.css" rel="stylesheet" /> -->
     <link href="{{url('/')}}/assets/plugins/summernote-master/summernote.css" rel="stylesheet" type="text/css" /> 
    <!-- <link href="{{url('/')}}/assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css" /> -->
    <!-- <link href="{{url('/')}}/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet"
        type="text/css" /> -->
    <link href="{{url('/')}}/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" type="text/css" />
    <!-- <link href="{{url('/')}}/assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet"
        type="text/css" /> -->
        <link href="{{url('/')}}/assets/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme Styles -->
    <link href="{{url('/')}}/assets/css/space.css" rel="stylesheet">
    <link href="{{url('/')}}/assets/css/custom.css" rel="stylesheet">
   
    </head>
    <body class="page-sidebar-fixed">
    <div class="overlay-close"></div>
        <!-- Page Container -->
        <div class="page-container">
            <div class="page-sidebar">
            <a class="logo-box" href="">
                <span><img style="width:100%" src="../../assets/images/logo.svg" alt=""></span>
                <!-- <i class="icon-radio_button_unchecked" id="fixed-sidebar-toggle-button"></i> -->
                <i class="icon-close" id="sidebar-toggle-button-close"></i>
            </a>
            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;"><div class="page-sidebar-inner" style="overflow: hidden; width: auto; height: 100%;">
                <div class="page-sidebar-menu">
                <ul class="accordion-menu">
                     
                        <li  @if(request()->segment(1) == 'vehicles') class="active-page" @endif>
                            <a href="{{ url('/vehicles') }}">
                            <i>
                                
                            </i><span>Vehicle Manage</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/logout')}}">
                            <i>
                                <img class="default-show" src="{{url('/')}}/assets/images/logout1.svg" alt="" >
                                <!--<img class="default-hide" src="{{url('/')}}/assets/images/logout1.svg" alt="" >-->
                            </i><span> Log Out</span>
                            </a>
                        </li>    
                </ul>
               
            </div>
             
            </div><div class="slimScrollBar" style="background: rgb(204, 204, 204); width: 6px; position: absolute; top: 0px; opacity: 0.2; display: none; border-radius: 0px; z-index: 99; right: 0px; height: 106.257px;"></div><div class="slimScrollRail" style="width: 6px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 0px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 0px;"></div></div>
        </div>

            <!-- /Page Sidebar -->
            
            <!-- Page Content -->
            <div class="page-content">
                <div class="page-header">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <div class="logo-sm">
                                <a href="javascript:void(0)" id="nav-icon">
                                   <span></span>
                                   <span></span>
                                   <span></span>
                                    </a>
                                <a class="logo-box" href="{{ url('/home') }}"><span><img style="width:100%" src="" alt=""></span></a>
                            </div>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a href="javascript:void(0)" id="collapsed-sidebar-toggle-button"><i class="fa fa-bars"></i></a></li>
                            </ul>
                            
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
                <!-- /Page Header -->
                @yield('content')
            </div><!-- /Page Content -->
        </div><!-- /Page Container -->
        
        
        <!-- Javascripts -->
    
    <script src="{{url('/')}}/assets/js/jquery-3.5.1.min.js"></script>
    <script src="{{url('/')}}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
 
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  
    <!-- <script src="{{url('/')}}/assets/js/space.min.js"></script> -->
  
   
   
     <!-- <script src="{{url('/')}}/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>  -->
     <!-- <script src="{{url('/')}}/assets/plugins/uniform/js/jquery.uniform.standalone.js"></script>
    <script src="{{url('/')}}/assets/plugins/switchery/switchery.min.js"></script>  -->
    <!-- <script src="{{url('/')}}/assets/plugins/summernote-master/summernote.min.js"></script> -->
    <!-- <script src="{{url('/')}}/assets/plugins/d3/d3.min.js"></script>
    <script src="{{url('/')}}/assets/plugins/nvd3/nv.d3.min.js"></script> 
    <script src="{{url('/')}}/assets/plugins/flot/jquery.flot.min.js"></script>
    <script src="{{url('/')}}/assets/plugins/flot/jquery.flot.time.min.js"></script>
    <script src="{{url('/')}}/assets/plugins/flot/jquery.flot.symbol.min.js"></script>
    <script src="{{url('/')}}/assets/plugins/flot/jquery.flot.resize.min.js"></script>
    <script src="{{url('/')}}/assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="{{url('/')}}/assets/plugins/flot/jquery.flot.pie.min.js"></script> 
     <script src="{{url('/')}}/assets/plugins/chartjs/chart.min.js"></script>  -->

     <!-- <script src="{{url('/')}}/assets/js/pages/form-elements.js"></script>  -->
    <!-- <script src="{{url('/')}}/assets/js/pages/dashboard.js"></script> -->
    <!-- <script src="{{url('/')}}/assets/js/jquery.datatables.min.js"></script> -->
    <!-- <script src="{{url('/')}}/assets/js/bootstrap-datepicker.js"></script> -->
    <!-- <script src="{{url('/')}}/assets/js/table-data.js"></script> -->
    <!-- <script src="{{url('/')}}/assets/js/validate.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
   <!-- Javascripts -->
   <!-- <script src="{{url('/')}}/assets/select2/dist/js/select2.min.js"></script> -->

   <script>
$('.delete-confirm').click(function(event) {
  
      var name = $(this).data("name");
      var id = $(this).data("id");
      event.preventDefault();
      swal({
          title: `Are you sure you want to delete ${name}?`,
    
          icon: "warning",
          buttons: true,
          dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
            $.ajax({
            url: 'destroy', 
            method: "get",  
            data:{id:id},  
            success:function(data){
               location.reload();
                
                // console.log(data);
           }  

       });  
        }
      });
  });
</script>
    </body>
</html>