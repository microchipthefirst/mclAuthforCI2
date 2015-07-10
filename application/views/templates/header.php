<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" href="../../../css/bootstrap.min.css">
        <link rel="stylesheet" href="../../../css/style.css">
    </head>
    <body>
        <div class="container">

            <nav class="navbar navbar-default" role="navigation">

                <!--Brand and toggle get grouped for better mobile display--> 
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Organisation<br/></a>
                </div>

                <!--Collect the nav links, forms, and other content for toggling--> 
                <div class="collapse navbar-collapse navbar-ex1-collapse navHeaderCollapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php echo site_url('/') ?>">Home</a></li>
                        <?php 
                        if($this->session->userdata('loggedin') && $this->session->userdata('group') == '1'){                                
                        echo "<li><a href=";
                        echo base_url('/admin/admin_view'). ">Admin</a></li>";                        
                        }
                        ?>
                        <li ><a href="<?php echo site_url('#') ?>">Example menu item</a></li>


                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo base_url('about') ?>">About</a></li>
                        <li><a href="<?php echo base_url('contactus') ?>">Contact Us</a></li>
                        <?php 
                        if($this->session->userdata('loggedin')){                                
                        echo "<li><a href=";
                        echo base_url('/admin/login/logout'). ">Logout</a></li>";                        
                        }else{
                            echo "<li><a href=";
                        echo base_url('/admin/login/login'). ">Login</a></li>";
                        }
                        ?>
                    </ul>

                </div><!--   /.navbar-collapse -->
            </nav>
            
            

