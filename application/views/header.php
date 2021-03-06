<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Portabilis">
    <meta name="author" content="Diego Santos">
    <title>PORTABILIS</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('css/sb-admin.css')?>" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <!--link href="<?php echo base_url('css/plugins/morris.css')?>" rel="stylesheet"-->
    <!-- Custom Fonts -->
    <link href="<?php echo base_url('font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery -->
    <script src="<?php echo base_url() ?>js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url() ?>js/plugins/morris/raphael.min.js"></script>
    <!--script src="<?php echo base_url() ?>js/plugins/morris/morris.min.js"></script-->
    <!--script src="<?php echo base_url() ?>js/plugins/morris/morris-data.js"></script-->
    <script src="<?php echo base_url() ?>js/jquery.mask.js"></script>

     <script src="<?php echo base_url() ?>js/scripts.js"></script>
</head>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url() ?>">Portabilis</a>
            </div>
            <!-- Top Menu -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Adminstrador <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?php echo base_url('index.php/Login/logout') ?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="<?php echo base_url('index.php/Alunos/listarAlunos')?>"><i class="fa fa-fw fa-user"></i> Alunos</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/Cursos/listarCursos') ?>"><i class="fa fa-fw fa-file"></i> Cursos</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-table"></i> Matriculas <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="<?php echo base_url('index.php/Matriculas/addMatricula') ?>">Realizar Matricula</a>
                            </li>
                            <li>
                                <a  href="<?php echo base_url('index.php/Matriculas/listarMatriculas') ?>">Listar Matriculas</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <!--li>
                        <a href="blank-page.html"><i class="fa fa-fw fa-user"></i> Usuários</a>
                    </li-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>