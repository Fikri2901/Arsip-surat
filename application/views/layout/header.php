<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Arsip surat</title>

        <!-- Bootstrap Core CSS -->
        <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="<?= base_url(); ?>assets/css/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="<?= base_url(); ?>assets/css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?= base_url(); ?>assets/css/startmin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="<?= base_url(); ?>assets/css/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?= base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style type="text/css">
            .frame {
                position: relative;
                width: 100%;
                height: 0;
                padding-bottom: 56.25%;
            }
            .surat {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }
        </style>
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?= base_url(); ?>">Arsip Surat</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <!-- <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                </span>
                                </div> -->
                                <h4><b>Menu</b></h4>
                            </li>
                            <li>
                                <a href="<?= base_url();?>"><i class="fa fa-star fa-fw"></i> Arsip Surat</a>
                            </li>
                            <li>
                                <a href="<?= base_url(); ?>Surat_c/about"><i class="fa fa-info-circle fa-fw"></i> About</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </nav>