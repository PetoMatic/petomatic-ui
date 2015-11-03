<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pet-o-matic: pets</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="../dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style>
  .users-list > li { width: 100%;}
  .navbar-nav > .user-menu > .dropdown-menu > li.user-header {height: 140px;}
  </style>
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="../" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>P</b>-o-m</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Pet</b>-o-matic</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="../dist/img/user-1.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Cool Tiger</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="../dist/img/user-1.jpg" class="img-circle" alt="User Image">

                <p>
                  Cool Tiger
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="../pet/crear" class="btn btn-default btn-flat">Agregar mascota</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Cerrar sesión</a>
                </div>
              </li>
            </ul>
          </li>

        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../dist/img/user-1.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Cool Tiger</p>
          <!-- Status -->
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">MENÚ PRINCIPAL</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="../"><i class="fa fa-link"></i> <span>Inicio</span></a></li>
        <li class="header">MASCOTAS</li>

      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Últimas comidas
      </h1>

    </section>

    <!-- Main content -->
    <section class="content">


      <!-- Your Page Content Here -->
      <div class="row">


            <div class="col-md-7">
              <!-- USERS LIST -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Mascota</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">





                  </ul>
                  <!-- /.users-list -->
                </div>

                <div class="box-footer text-center">
                  <a href="../pet/crear" class="uppercase">Crear mascota</a>
                </div>

                <!-- /.box-body -->
              </div>
              <!--/.box -->
            </div>
            <!-- /.col -->

            <div class="info-boxes col-md-5">
            </div>
<style>
.info-boxes2.inactive .toggle-active {
  display: none!important;
}
.info-boxes2.active .toggle-inactive {
  display: none!important;
}
</style>

            <div class="info-boxes2 col-md-5">
              <!-- Info Boxes Style 2 -->
              <!-- /.info-box -->
              <div class="info-box bg-aqua">
                <span class="info-box-icon toggle-inactive"><i class="fa fa-close"></i></span>
                <span class="info-box-icon toggle-active"><i class="fa fa-check"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">¿La mascota puede comer? </span>
                  <span class="status info-box-number toggle-inactive">Inactivo</span>
                  <span class="status info-box-number toggle-active">Activo</span>

                      <span class="progress-description">
                        <button type="button" class="btn btn-block btn-success toggle-inactive">Permitirle alimentarse</button>
                        <button type="button" class="btn btn-block btn-danger toggle-active">Prohibirle alimentarse</button>
                      </span>
                </div>
                <!-- /.info-box-content -->
              </div>
            </div>
      </div>






    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Segundamano.mx rifa y reparte
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2015 <a href="#">Pet-o-matic</a>.</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.4 -->
<script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>

<script>
  $(document).ready(function(){



    $.ajax({
      dataType: "json",
      url:'http://128.107.33.219:8080/config',
      success: function(pets){

        console.debug('pets',pets);



        pet_count = 0;

        color = {1:'red',2:'green'};

        $('.users-list, .info-boxes').empty();


        $.each(pets,function(key,pet){

            // Inserta menú lateral
            $('.sidebar-menu').append(
            '<li>'+
              '<a href="../pet?pet_id='+pet.pet_id+'">'+
                '<i class="fa fa-paw"></i> <span>'+pet.name+' ('+pet.breed+')'+'</span>'+
              '</a>'+
            '</li>'
            );

            if(pet.pet_id == <?php echo $_GET['pet_id']; ?>)
            {

              $('.info-boxes2').addClass((pet.status=="1"?'active':'inactive'));

          // Inserta infobox
            $('.info-boxes').append(
            '<div class="info-box bg-'+color[pet.dispenser_id]+'">'+
              '<span class="info-box-icon"><i class="ion ion-ios-paw-outline"></i></span>'+

              '<div class="info-box-content">'+
                '<span class="info-box-text"><b>'+pet.name+' ('+pet.breed+')'+'</b> Último consumo:</span>'+
              '<span id="id'+pet.pet_id+'" class="info-box-number"></span>'+

                '<div class="progress">'+
                  '<div class="progress-bar" style="width: '+Math.floor(Math.random()*50)*2+'%"></div>'+
                '</div>'+
                    '<span class="progress-description">'+
                      'Alimento tipo '+pet.dispenser_id+
                    '</span>'+
              '</div>'+
            '</div>'
            );

            last_meal = [];

            $.ajax({
              dataType: "json",
              url:'http://128.107.33.219:8080/stats/'+pet.pet_id+'/daily',
              success: function(JSON){

                meals = JSON.Meals;

                $.each(meals,function(key,meal) {
                  d = new Date(meal.end_date);
                                  qty = meal.quantity;

                });

                var today = new Date();
                var diff = today-d;
                diffMins = Math.round( diff / (1000*60) );

                last_meal[pet.pet_id] = diffMins;
                              $('#id'+pet.pet_id).html(qty+'grs');


                /*console.debug(JSON);
                console.debug(d.toDateString(),d.getUTCHours(),d.getUTCMinutes(),d.getUTCSeconds());
                console.debug(diffMins,'diff: ',diff, 'today', today, 'petid', pet.pet_id, 'last_meal', last_meal);

                  console.debug('LAST MEAL', last_meal, 'DIFF MINS', diffMins);
  */
                  // Inserta última comida
                  $('.users-list').append(
                  '<li><a href="../pet?pet_id='+pet.pet_id+'">'+
                    '<img src="../dist/img/pet-'+pet.pet_id+'.jpg">'+
                    '<div class="users-list-name">'+pet.name+'</div>'+
                    '<span class="users-list-date">Hace '+last_meal[pet.pet_id]+'m</span>'+
                  '</a></li>'
                  );


              }
            });





            pet_count++;

          }

        });

        $('.pet-count').html(pet_count);


        $('.info-boxes2 button').click(function(){



          if($(this).hasClass('toggle-active'))
            alert('Alimentación desactivada');
          else
            alert('Se le ha permitido alimentarse');
        });


      }
    });


  });
</script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
