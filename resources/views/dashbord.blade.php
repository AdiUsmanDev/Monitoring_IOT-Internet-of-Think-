
<!--
=========================================================
* Material Dashboard Dark Edition - v2.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard-dark
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="../assets/img/favicon.png">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>
    Remote IOT dengan Laravel
  </title>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport" />


<link rel="canonical" href="https://www.creative-tim.com/product/material-dashboard-dark" />

<meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 4 dashboard, bootstrap 4, css3 dashboard, bootstrap 4 admin, material dashboard bootstrap 4 dashboard, frontend, responsive bootstrap 4 dashboard, free dashboard, free admin dashboard, free bootstrap 4 admin dashboard">
<meta name="description" content="Material Dashboard Dark Edition is a Free Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">

<meta itemprop="name" content="Material Dashboard Dark Edition by Creative Tim">
<meta itemprop="description" content="Material Dashboard Dark Edition is a Free Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
<meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/95/opt_mdb_thumbnail.jpg">

<meta name="twitter:card" content="product">
<meta name="twitter:site" content="@creativetim">
<meta name="twitter:title" content="Material Dashboard Dark Edition by Creative Tim">
<meta name="twitter:description" content="Material Dashboard Dark Edition is a Free Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
<meta name="twitter:creator" content="@creativetim">
<meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/95/opt_mdb_thumbnail.jpg">

<meta property="fb:app_id" content="655968634437471">
<meta property="og:title" content="Material Dashboard Dark Edition by Creative Tim" />
<meta property="og:type" content="article" />
<meta property="og:url" content="https://demos.creative-tim.com/material-dashboard-dark/examples/dashboard.html" />
<meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/95/opt_mdb_thumbnail.jpg" />
<meta property="og:description" content="Material Dashboard Dark Edition is a Free Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design." />
<meta property="og:site_name" content="Creative Tim" />

<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

<link href="../assets/css/material-dashboard.min.css?v=2.1.0" rel="stylesheet" />

<link href="../assets/demo/demo.css" rel="stylesheet" />

<script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');
  </script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body class="dark-edition">


<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<div class="wrapper ">
<div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">

<div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
Remote IoT
</a></div>
<div class="sidebar-wrapper">
<ul class="nav">
<li class="nav-item active  ">
<a class="nav-link" href="./dashboard.html">
<i class="material-icons">dashboard</i>
<p>Dashboard</p>
</a>
</li>
<li class="nav-item ">
<a class="nav-link" href="profile">
<i class="material-icons">person</i>
<p>User Profile</p>
</a>
</li>
<li class="nav-item ">
<a class="nav-link" href="./notifications.html">
<i class="material-icons">notifications</i>
<p>Notifications</p>
</a>
</li>
</a>
</li>
<li class="nav-item ">
<a class="nav-link" href="{{Route('logout')}}">
<i class="material-icons">Logout</i>
<p>Logout</p>
</a>
</li>
</a>
</li>

</ul>
</div>
</div>
<div class="main-panel">

<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
<div class="container-fluid">
<div class="navbar-wrapper">
<a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
</div>
<button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
<span class="sr-only">Toggle navigation</span>
<span class="navbar-toggler-icon icon-bar"></span>
<span class="navbar-toggler-icon icon-bar"></span>
<span class="navbar-toggler-icon icon-bar"></span>
</button>
<div class="collapse navbar-collapse justify-content-end">
<form class="navbar-form">
<div class="input-group no-border">
<input type="text" value class="form-control" placeholder="Search...">
<button type="submit" class="btn btn-default btn-round btn-just-icon">
<i class="material-icons">search</i>
<div class="ripple-container"></div>
</button>
</div>
</form>
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" href="javascript:void(0)">
<i class="material-icons">dashboard</i>
<p class="d-lg-none d-md-block">
Stats
</p>
</a>
</li>
<li class="nav-item dropdown">
<a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="material-icons">notifications</i>
<span class="notification">5</span>
<p class="d-lg-none d-md-block">
Some Actions
</p>
</a>
<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
<a class="dropdown-item" href="javascript:void(0)">Mike John responded to your email</a>
<a class="dropdown-item" href="javascript:void(0)">You have 5 new tasks</a>
<a class="dropdown-item" href="javascript:void(0)">You're now friend with Andrew</a>
<a class="dropdown-item" href="javascript:void(0)">Another Notification</a>
<a class="dropdown-item" href="javascript:void(0)">Another One</a>
</div>
</li>
<li class="nav-item">
<a class="nav-link" href="javascript:void(0)">
<i class="material-icons">person</i>
<p class="d-lg-none d-md-block">
Account
</p>
</a>
</li>
</ul>
</div>
</div>
</nav>

<!-- content -->

<div class="content">
<div class="container-fluid">
<div class="row">
<div class="col-xl-4 col-lg-12">
<div class="card card-chart">
<div class="card-header card-header-success">
<!-- <div class="ct-chart" id="dailySalesChart"></div> -->
<!-- content herder -->
<div style="font-size: 100%;" class="dashboard-content" id="dashboard-content"></div>
</div>
<div class="card-body">
<h4 class="card-title">Suhu Ruangan</h4>
<p class="card-category">
<span class="text-success"></span> Memberikan informasi suhu</p>
</div>
<div class="card-footer">
<div class="stats">
<i class="material-icons">access_time</i> updated 4 minutes ago
</div>
</div>
</div>
</div>


<div class="col-xl-4 col-lg-12">
<div class="card card-chart">
<div class="card-header card-header-warning">
<!-- content herder --> 
<div style="font-size: 100%;" class="dashboard-content-kelembapan" id="dashboard-content-kelembapan"></div>
</div>
<div class="card-body">
<h4 class="card-title">Kelembapan</h4>
<p class="card-category">Memberikan informasi kelembapan</p>
</div>
<div class="card-footer">
<div class="stats">
<i class="material-icons">access_time</i> campaign sent 2 days ago
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-12">
<div class="card card-chart">
<div class="card-header card-header-danger">
<!-- content herder -->
<div style="font-size: 100%;" class="dashboard-api" id="dashboard-api"></div>
</div>
<div class="card-body">
<h4 class="card-title">Api Warning</h4>
<p class="card-category">Mendeteksi keberdaan api di sekitar</p>
</div>
<div class="card-footer">
<div class="stats">
<i class="material-icons">access_time</i> campaign sent 2 days ago
</div>
</div>
</div>
</div>
</div>

<!-- start konten 2 -->

<div class="row">
<div class="col-xl-4 col-lg-12">
<div class="card card-chart">
<div class="card-header card-header-success">
<!-- <div class="ct-chart" id="dailySalesChart"></div> -->
<!-- content herder -->
<div style="font-size: 100%;" class="dashboard-content-air" id="dashboard-content-air"></div>
</div>
<div class="card-body">
<h4 class="card-title">Air Warning</h4>
<p class="card-category">
<span class="text-success"><p>memberikan informasi air yang terdeteksi di sensor</p>
</div>
<div class="card-footer">
<div class="stats">
<i class="material-icons">access_time</i> updated 4 minutes ago
</div>
</div>
</div>
</div>


<div class="col-xl-4 col-lg-12">
<div class="card card-chart">
<div class="card-header card-header-warning">
<!-- content herder --> 
<div style="font-size: 100%;" class="dashboard-content-getaran" id="dashboard-content-getaran"></div>
</div>
<div class="card-body">
<h4 class="card-title">Getaran Warning</h4>
<p class="card-category">memberikan informasi getaran yang terjadi di sensor </p>
</div>
<div class="card-footer">
<div class="stats">
<i class="material-icons">access_time</i> campaign sent 2 days ago
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-12">
<div class="card card-chart">
<div class="card-header card-header-danger">
<!-- content herder -->
<div style="font-size: 100%;" class="dashboard-miring" id="dashboard-miring"></div>
</div>
<div class="card-body">
<h4 class="card-title">Kemiringan Warning </h4>
<p class="card-category">memberikan informasi kemiringan yang terjadi</p>
</div>
<div class="card-footer">
<div class="stats">
<i class="material-icons">access_time</i> campaign sent 2 days ago
</div>
</div>
</div>
</div>
</div>

<!-- akhir konten -->

<div class="row">
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
<div class="card card-stats">
<div class="card-header card-header-warning card-header-icon">
<div class="card-icon">
<i class="material-icons">volume_up</i>
</div>
<p class="card-category">Bunyikan alarm</p>


</h3>
</div>
<!--
<div class="card-footer">
<div class="stats">

</div>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
<div class="card card-stats">
<div class="card-header card-header-success card-header-icon">
<div class="card-icon">
<i class="material-icons">store</i>
</div>
<p class="card-category">Revenue</p>
<h3 class="card-title">$34,245</h3>
</div>
<div class="card-footer">
<div class="stats">
<i class="material-icons">date_range</i> Last 24 Hours
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
<div class="card card-stats">
<div class="card-header card-header-danger card-header-icon">
<div class="card-icon">
<i class="material-icons">info_outline</i>
</div>
<p class="card-category">Fixed Issues</p>
<h3 class="card-title">75</h3>
</div>
<div class="card-footer">
<div class="stats">
<i class="material-icons">local_offer</i> Tracked from Github
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
<div class="card card-stats">
<div class="card-header card-header-info card-header-icon">
<div class="card-icon">
<i class="fa fa-twitter"></i>
</div>
<p class="card-category">Followers</p>
<h3 class="card-title">+245</h3>
</div>
<div class="card-footer">
<div class="stats">
<i class="material-icons">update</i> Just Updated
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header card-header-primary">
<h4 class="card-title">Employees Stats</h4>
<p class="card-category">New employees on 15th September, 2016</p>
</div>
<div class="card-body table-responsive">
<table class="table table-hover">
<thead class="text-warning">
<th>ID</th>
<th>Name</th>
<th>Salary</th>
<th>Country</th>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Dakota Rice</td>
<td>$36,738</td>
<td>Niger</td>
</tr>
<tr>
<td>2</td>
<td>Minerva Hooper</td>
<td>$23,789</td>
<td>Curaçao</td>
</tr>
<tr>
<td>3</td>
<td>Sage Rodriguez</td>
<td>$56,142</td>
<td>Netherlands</td>
</tr>
<tr>
<td>4</td>
<td>Philip Chaney</td>
<td>$38,735</td>
<td>Korea, South</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card">
<div class="card-header card-header-tabs card-header-warning">
<div class="nav-tabs-navigation">
<div class="nav-tabs-wrapper">
<span class="nav-tabs-title">Tasks:</span>
<ul class="nav nav-tabs" data-tabs="tabs">
<li class="nav-item">
<a class="nav-link active" href="#profile" data-toggle="tab">
<i class="material-icons">bug_report</i> Bugs
<div class="ripple-container"></div>
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#messages" data-toggle="tab">
<i class="material-icons">code</i> Website
<div class="ripple-container"></div>
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#settings" data-toggle="tab">
<i class="material-icons">cloud</i> Server
<div class="ripple-container"></div>
</a>
</li>
</ul>
</div>
</div>
</div>
<div class="card-body">
<div class="tab-content">
<div class="tab-pane active" id="profile">
<table class="table">
<tbody>
<tr>
<td>
<div class="form-check">
<label class="form-check-label">
<input class="form-check-input" type="checkbox" value checked>
<span class="form-check-sign">
<span class="check"></span>
</span>
</label>
</div>
</td>
<td>Sign contract for "What are conference organizers afraid of?"</td>
<td class="td-actions text-right">
<button type="button" rel="tooltip" title="Edit Task" class="btn btn-white btn-link btn-sm">
<i class="material-icons">edit</i>
</button>
<button type="button" rel="tooltip" title="Remove" class="btn btn-white btn-link btn-sm">
<i class="material-icons">close</i>
</button>
</td>
</tr>
<tr>
<td>
<div class="form-check">
<label class="form-check-label">
<input class="form-check-input" type="checkbox" value>
<span class="form-check-sign">
<span class="check"></span>
</span>
</label>
</div>
</td>
<td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
<td class="td-actions text-right">
<button type="button" rel="tooltip" title="Edit Task" class="btn btn-white btn-link btn-sm">
<i class="material-icons">edit</i>
</button>
<button type="button" rel="tooltip" title="Remove" class="btn btn-white btn-link btn-sm">
<i class="material-icons">close</i>
</button>
</td>
</tr>
<tr>
<td>
<div class="form-check">
<label class="form-check-label">
<input class="form-check-input" type="checkbox" value>
<span class="form-check-sign">
<span class="check"></span>
</span>
</label>
</div>
</td>
<td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
</td>
<td class="td-actions text-right">
<button type="button" rel="tooltip" title="Edit Task" class="btn btn-white btn-link btn-sm">
<i class="material-icons">edit</i>
</button>
<button type="button" rel="tooltip" title="Remove" class="btn btn-white btn-link btn-sm">
<i class="material-icons">close</i>
</button>
</td>
</tr>
<tr>
<td>
<div class="form-check">
<label class="form-check-label">
<input class="form-check-input" type="checkbox" value checked>
<span class="form-check-sign">
<span class="check"></span>
</span>
</label>
</div>
</td>
<td>Create 4 Invisible User Experiences you Never Knew About</td>
<td class="td-actions text-right">
<button type="button" rel="tooltip" title="Edit Task" class="btn btn-white btn-link btn-sm">
<i class="material-icons">edit</i>
</button>
<button type="button" rel="tooltip" title="Remove" class="btn btn-white btn-link btn-sm">
<i class="material-icons">close</i>
</button>
</td>
</tr>
</tbody>
</table>
</div>
<div class="tab-pane" id="messages">
<table class="table">
<tbody>
<tr>
<td>
<div class="form-check">
<label class="form-check-label">
<input class="form-check-input" type="checkbox" value checked>
<span class="form-check-sign">
<span class="check"></span>
</span>
</label>
</div>
</td>
<td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
</td>
<td class="td-actions text-right">
<button type="button" rel="tooltip" title="Edit Task" class="btn btn-white btn-link btn-sm">
<i class="material-icons">edit</i>
</button>
<button type="button" rel="tooltip" title="Remove" class="btn btn-white btn-link btn-sm">
<i class="material-icons">close</i>
</button>
</td>
</tr>
<tr>
<td>
<div class="form-check">
<label class="form-check-label">
<input class="form-check-input" type="checkbox" value>
<span class="form-check-sign">
<span class="check"></span>
</span>
</label>
</div>
</td>
<td>Sign contract for "What are conference organizers afraid of?"</td>
<td class="td-actions text-right">
<button type="button" rel="tooltip" title="Edit Task" class="btn btn-white btn-link btn-sm">
<i class="material-icons">edit</i>
</button>
<button type="button" rel="tooltip" title="Remove" class="btn btn-white btn-link btn-sm">
<i class="material-icons">close</i>
</button>
</td>
</tr>
</tbody>
</table>
</div>
<div class="tab-pane" id="settings">
<table class="table">
<tbody>
<tr>
<td>
<div class="form-check">
<label class="form-check-label">
<input class="form-check-input" type="checkbox" value>
<span class="form-check-sign">
<span class="check"></span>
</span>
</label>
</div>
</td>
<td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
<td class="td-actions text-right">
<button type="button" rel="tooltip" title="Edit Task" class="btn btn-white btn-link btn-sm">
<i class="material-icons">edit</i>
</button>
<button type="button" rel="tooltip" title="Remove" class="btn btn-white btn-link btn-sm">
<i class="material-icons">close</i>
</button>
</td>
</tr>
<tr>
<td>
<div class="form-check">
<label class="form-check-label">
<input class="form-check-input" type="checkbox" value checked>
<span class="form-check-sign">
<span class="check"></span>
</span>
</label>
</div>
</td>
<td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
</td>
<td class="td-actions text-right">
<button type="button" rel="tooltip" title="Edit Task" class="btn btn-white btn-link btn-sm">
<i class="material-icons">edit</i>
</button>
<button type="button" rel="tooltip" title="Remove" class="btn btn-white btn-link btn-sm">
<i class="material-icons">close</i>
</button>
</td>
</tr>
<tr>
<td>
<div class="form-check">
<label class="form-check-label">
<input class="form-check-input" type="checkbox" value checked>
<span class="form-check-sign">
<span class="check"></span>
</span>
</label>
</div>
</td>
<td>Sign contract for "What are conference organizers afraid of?"</td>
<td class="td-actions text-right">
<button type="button" rel="tooltip" title="Edit Task" class="btn btn-white btn-link btn-sm">
<i class="material-icons">edit</i>
</button>
<button type="button" rel="tooltip" title="Remove" class="btn btn-white btn-link btn-sm">
<i class="material-icons">close</i>
</button>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<footer class="footer">
<div class="container-fluid">
<nav class="float-left">
<ul>
<li>
<a href="https://www.creative-tim.com">
{{Session::get('user')}}
</a>
</li>
<li>
<a href="https://creative-tim.com/presentation">
About Us
</a>
</li>
<li>
<a href="http://blog.creative-tim.com">
Blog
</a>
</li>
<li>
<a href="https://www.creative-tim.com/license">
Licenses
</a>
</li>
</ul>
</nav>
<div class="copyright float-right" id="date">
, made with <i class="material-icons">favorite</i> by
<a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
</div>
</div>
</footer>

-->
<script>
        const x = new Date().getFullYear();
        let date = document.getElementById('date');
        date.innerHTML = '&copy; ' + x + date.innerHTML;
      </script>
</div>
</div>
<div class="fixed-plugin">
<div class="dropdown show-dropdown">
<a href="#" data-toggle="dropdown">
<i class="fa fa-cog fa-2x"> </i>
</a>
<ul class="dropdown-menu">
<li class="header-title"> Sidebar Filters</li>
<li class="adjustments-line">
<a href="javascript:void(0)" class="switch-trigger active-color">
<div class="badge-colors ml-auto mr-auto">
<span class="badge filter badge-purple active" data-color="purple"></span>
<span class="badge filter badge-azure" data-color="azure"></span>
<span class="badge filter badge-green" data-color="green"></span>
<span class="badge filter badge-warning" data-color="orange"></span>
<span class="badge filter badge-danger" data-color="danger"></span>
</div>
<div class="clearfix"></div>
</a>
</li>
<li class="header-title">Images</li>
<li>
<a class="img-holder switch-trigger" href="javascript:void(0)">
<img src="../assets/img/sidebar-1.jpg" alt>
</a>
</li>
<li class="active">
<a class="img-holder switch-trigger" href="javascript:void(0)">
<img src="../assets/img/sidebar-2.jpg" alt>
</a>
</li>
<li>
<a class="img-holder switch-trigger" href="javascript:void(0)">
<img src="../assets/img/sidebar-3.jpg" alt>
</a>
</li>
<li>
<a class="img-holder switch-trigger" href="javascript:void(0)">
<img src="../assets/img/sidebar-4.jpg" alt>
</a>
</li>
<li class="button-container">
<a href="https://www.creative-tim.com/product/material-dashboard-dark" target="_blank" class="btn btn-primary btn-block">Free Download</a>
</li>
<li class="header-title">Want more components?</li>
<li class="button-container">
<a href="https://www.creative-tim.com/product/material-dashboard-dark-pro?ref=md-dark-free-upgrade-live" target="_blank" class="btn btn-warning btn-block">
Get the pro version
</a>
</li>
<li class="button-container">
<a href="https://demos.creative-tim.com/material-dashboard-dark/docs/2.0/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block">
View Documentation
</a>
</li>
<li class="button-container github-star">
<a class="github-button" href="https://github.com/creativetimofficial/material-dashboard/tree/dark-edition" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
</li>
<li class="header-title">Thank you for 95 shares!</li>
<li class="button-container text-center">
<button id="twitter" class="btn btn-round btn-twitter"><i class="fa fa-twitter"></i> &middot; 45</button>
<button id="facebook" class="btn btn-round btn-facebook"><i class="fa fa-facebook-f"></i> &middot; 50</button>
<br>
<br>
</li>
</ul>
</div>
</div>

<!-- menjalankan fungsi update secara eksplisit-->

<script>

function fetchData() {
   let id = '{{Session::get('user')}}';

    $.ajax({
        url: '/api/ambildata/'+id,
        method: 'GET',
        success: function(response) {
           
          let htmlContent = '';
          let htmllembap = '';
          let api = '';
          let air = '';
          let getar = '';
          let miring ='';

                    response.forEach(item => {
                        htmlContent += `
                                  <div style="display: flex;
                                    justify-content: center; 
                                    align-items: center; 
                                    height: 10vh;">
                                <h1>${item.suhu} %</h1>
                            </div>
                        `;


                        htmllembap += `
                            <div style="display: flex;
                              justify-content: center; 
                              align-items: center; 
                              height: 10vh;">
                                <h1>${item.kelembaban} %</h1>
                            </div>
                        `;


                        api += `
                            <div style="display: flex;
                              justify-content: center; 
                              align-items: center; 
                              height: 10vh;">
                               ${item.api === 1 ? '<h2>Api Terdeteksi<h2>' : '<h2>Tidak Ada Api</h2>'} 
                            </div>
                        `;

                        air += `
                            <div style="display: flex;
                              justify-content: center; 
                              align-items: center; 
                              height: 10vh;">
                               ${item.air === 1 ? '<h2>Air Terdeteksi<h2>' : '<h2>Tidak Ada Air</h2>'} 
                            </div>
                        `;

                        getar += `
                            <div style="display: flex;
                              justify-content: center; 
                              align-items: center; 
                              height: 10vh;">
                               ${item.getar === 1 ? '<h2>Getar<h2>' : '<h2>Tidak Getar</h2>'} 
                            </div>
                        `;

                        miring += `
                            <div style="display: flex;
                              justify-content: center; 
                              align-items: center; 
                              height: 10vh;">
                               ${item.kemiringan === 1 ? '<h2>Miring<h2>' : '<h2>Tidak miring</h2>'} 
                            </div>
                        `;


                    });

                  


            $('#dashboard-content').html(htmlContent);
            $('#dashboard-content-kelembapan').html(htmllembap);
            $('#dashboard-api').html(api);

            $('#dashboard-content-air').html(air);
            $('#dashboard-content-getaran').html(getar);
            $('#dashboard-miring').html(miring);

        }
    });
}


setInterval(fetchData, 5000);

fetchData();

</script>



<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap-material-design.min.js"></script>
<script src="https://unpkg.com/default-passive-events"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>

<script async defer src="https://buttons.github.io/buttons.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBd3PjUqq81lIOfBPYXrQGWwK5T4ystZjA"></script>

<script src="../assets/js/plugins/chartist.min.js"></script>

<script src="../assets/js/plugins/bootstrap-notify.js"></script>

<script src="../assets/js/material-dashboard.min.js?v=2.1.0"></script>

<script src="../assets/demo/demo.js"></script>
<script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>

<script src="../assets/demo/jquery.sharrre.js"></script>
<script>
    $(document).ready(function() {

      $('#facebook').sharrre({
        share: {
          facebook: true
        },
        enableHover: false,
        enableTracking: false,
        enableCounter: false,
        click: function(api, options) {
          api.simulateClick();
          api.openPopup('facebook');
        },
        template: '<i class="fab fa-facebook-f"></i> Facebook',
        url: 'https://demos.creative-tim.com/material-dashboard-dark/examples/dashboard.html'
      });

      $('#google').sharrre({
        share: {
          googlePlus: true
        },
        enableCounter: false,
        enableHover: false,
        enableTracking: true,
        click: function(api, options) {
          api.simulateClick();
          api.openPopup('googlePlus');
        },
        template: '<i class="fab fa-google-plus"></i> Google',
        url: 'https://demos.creative-tim.com/material-dashboard-dark/examples/dashboard.html'
      });

      $('#twitter').sharrre({
        share: {
          twitter: true
        },
        enableHover: false,
        enableTracking: false,
        enableCounter: false,
        buttons: {
          twitter: {
            via: 'CreativeTim'
          }
        },
        click: function(api, options) {
          api.simulateClick();
          api.openPopup('twitter');
        },
        template: '<i class="fab fa-twitter"></i> Twitter',
        url: 'https://demos.creative-tim.com/material-dashboard-dark/examples/dashboard.html'
      });



      // Facebook Pixel Code Don't Delete
      ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
          n.callMethod ?
            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
      }(window,
        document, 'script', '//connect.facebook.net/en_US/fbevents.js');

      try {
        fbq('init', '111649226022273');
        fbq('track', "PageView");

      } catch (err) {
        console.log('Facebook Track Error:', err);
      }

    });
  </script>
<noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1" />
  </noscript>
<script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vef91dfe02fce4ee0ad053f6de4f175db1715022073587" integrity="sha512-sDIX0kl85v1Cl5tu4WGLZCpH/dV9OHbA4YlKCuCiMmOQIk4buzoYDZSFj+TvC71mOBLh8CDC/REgE0GX0xcbjA==" data-cf-beacon='{"rayId":"8896f7f5af889fa4","version":"2024.4.1","token":"1b7cbb72744b40c580f8633c6b62637e"}' crossorigin="anonymous"></script>
</body>
</html>
