<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
        
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="TTI - Your solution in construction and transformation">
        <meta name="author" content="Tochigi-ken Technologies International Inc.">

        <!-- Favicon -->
        <link rel="shortcut icon" href="<?=base_url('assets/img/tti-icon.png')?>" type="image/x-icon">
        <link rel="icon" href="<?=base_url('assets/img/tti-icon.png')?>" type="image/x-icon">

        <title>Tochigi-ken Technologies International Inc. -  <?=$page?></title>

        <!-- font family -->
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,700" rel="stylesheet">

        <!-- font awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
        
        <!-- light slider -->
        <link type="text/css" rel="stylesheet" href="<?=base_url('assets/css/lightslider.min.css')?>" />          
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/aos.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/animate.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/hover.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/owl.carousel.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/navik.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/stylesheet.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/lightslider.custom.css')?>">

    </head>

    <body>
        
        <div class="navik-header header-opacity header-shadow viewport-lg sticky">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="navik-header-container">
                          
                            <div class="logo" data-mobile-logo="<?=base_url('assets/img/tti-nobg-2.png')?>" data-sticky-logo="<?=base_url('assets/img/tti-nobg-2.png')?>">
                                <img src="<?=base_url('assets/img/tti-nobg-2.png')?>" alt="logo"/>
                            </div>

                            <div class="burger-menu">
                                <div class="line-menu line-half first-line"></div>
                                <div class="line-menu"></div>
                                <div class="line-menu line-half last-line"></div>
                            </div>

                            <nav class="navik-menu menu-caret submenu-top-border submenu-scale">
                                <ul>
                                    <li class="">
                                      <a class="" href="<?=base_url()?>">Home</a>
                                    </li>
                                    <li class="<?=($page == 'About Us') ? 'active' : ''?>">
                                        <a class="" href="<?=base_url('company-overview')?>">About Us</a>
                                        <ul>
                                            <li><a class="" href="<?=base_url('company-overview')?>">Company Overview</a></li>
                                            <li><a class="" href="<?=base_url('mission-vision')?>">Mission & Vision</a></li>
                                            <li><a class="" href="<?=base_url('quality-policy')?>">Quality Policy & Objectives</a></li>
                                        </ul>
                                    </li>
                                    
                                    <li class="<?=($page == 'Products') ? 'active' : ''?>">
                                        <a class="" href="#">Products</a>
                                        <ul>
                                                     
                                            <?php
                                                foreach($products as $k=>$v){
                                                    if(isset($v['sub'])){
                                                        echo '<li><a class="" href="#">'.$v['name'].'</a><ul>';
                                                        foreach($v['sub'] as $k1 => $v1){
                                                            echo '<li><a class="" href="'.base_url('products/'.$k.'/'.$k1).'">'.$v1['name'].'</a></li>';
                                                        }
                                                        echo '</ul>';
                                                    }else{
                                                        echo '<li><a class="" href="'.base_url('products/'.$k).'">'.$v['name'].'</a>';
                                                    }
                                                    echo '</li>';
                                                }
                                            ?>
                                            
                                        </ul>
                                    </li>

                                        
                                    <li class="<?=($page == 'Projects') ? 'active' : ''?>">
                                        <a class="" href="#">Projects</a>
                                        <ul>
                                            <?php 
                                                foreach($projects as $p){
                                                    echo '<li><a class="" href="'.base_url('projects/'.$p['cat_slug']).'">'.$p['cat_name'].'</a></li>';
                                                    echo '<ul><li>test</li></ul>';
                                                }
                                            ?>
                                        </ul>
                                    </li>
                                    
                                    <li class="">
                                        <a class="" href="news.php">News</a>
                                    </li>
                                    
                                    <li class="<?=($page == 'Careers') ? 'active' : ''?>">
                                        <a class="" href="<?=base_url('careers')?>">Careers</a>
                                    </li>
                                    
                                    <li class="">
                                        <a class="" href="<?=base_url('contact-us')?>">Contact Us</a>
                                    </li>
                                    
                                </ul>
                            </nav>

                        </div>
                    </div>
                </div>
            </div>
        </div>