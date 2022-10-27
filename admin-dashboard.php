<?php include('admin-head.php'); ?>
        <div class="app-sidebar-overlay d-none animated fadeIn"></div>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="header-mobile-wrapper">
                        <div class="app-header__logo">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="KeroUI Admin Template" class="logo-src"></a>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-sidebar-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                            <div class="app-header__menu">
                            <span>
                                <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                    <span class="btn-icon-wrapper">
                                        <i class="fa fa-ellipsis-v fa-w-6"></i>
                                    </span>
                                </button>
                            </span>
                            </div>
                        </div>
                    </div>
                    <div class="app-header">
                        <div class="page-title-heading">
                            Ogun State Institute of Technology (OGITECH), Igbesa 
                            <div class="page-title-subheading">
                                This is an example dashboard created using build-in elements and components.
                            </div>
                        </div>
                        <div class="app-header-right">
                            <div class="search-wrapper">
                                <i class="search-icon-wrapper typcn typcn-zoom-outline"></i>
                                <input type="text" placeholder="Search...">
                            </div>
                            <div class="header-btn-lg pr-0">
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="btn-group">
                                                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                                    <img width="42" class="rounded" src="file/<?php echo $img;?>" alt="">
                                                    <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                                </a>
                                                <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                                    <div class="dropdown-menu-header">
                                                        <div class="dropdown-menu-header-inner bg-info">
                                                            <div class="menu-header-image opacity-2" style="background-image: url('assets/images/dropdown-header/city1.jpg');"></div>
                                                            <div class="menu-header-content text-left">
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left mr-3">
                                                                            <img width="42" class="rounded-circle"
                                                                                 src="file/<?php echo $img;?>"
                                                                                 alt="">
                                                                        </div>
                                                                        <div class="widget-content-left">
                                                                            <div class="widget-heading"><?php echo $ufullname;?>
                                                                            </div>
                                                                            <div class="widget-subheading opacity-8 text-warning"><?php $uemail;?>
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-content-right mr-2">
                                                                            <a href="logout" class="btn-pill btn-shadow btn-shine btn btn-focus">Logout
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item-divider mb-0 nav-item"></li>
                                                    </ul>
                                                    <div class="grid-menu grid-menu-2col">
                                                        <div class="no-gutters row">
                                                            <div class="col-sm-6">
                                                                <button class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-warning">
                                                                    <i class="pe-7s-chat icon-gradient bg-amy-crisp btn-icon-wrapper mb-2"></i>
                                                                    <?php echo $udept;?>
                                                                </button>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <button class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-danger">
                                                                    <i class="pe-7s-ticket icon-gradient bg-love-kiss btn-icon-wrapper mb-2"></i>
                                                                    <b> <?php echo $umob;?> </b>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item-divider nav-item">
                                                        </li>
                                                        <li class="nav-item-btn text-center nav-item">
                                                            <button class="btn-wide btn btn-primary btn-sm">
                                                               <?php echo $umode;?>
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>    </div>
                        <div class="app-header-overlay d-none animated fadeIn"></div>
                    </div>
                    <div class="app-inner-layout app-inner-layout-page">
                        <div class="app-inner-bar">
                            <div class="inner-bar-left">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link show-menu-btn">
                                            <i class="fa fa-align-left mr-2"></i>
                                            <span class="hide-text-md">Show page menu</span>
                                        </a>
                                        <a href="#" class="nav-link close-menu-btn">
                                            <i class="fa fa-align-right mr-2"></i>
                                            <span class="hide-text-md">Close page menu</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>                        <div class="inner-bar-center">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a role="tab" data-toggle="tab" class="nav-link active" href="#tab-content-0">
                                            <span>Overview</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a role="tab" data-toggle="tab" class="nav-link" href="#tab-content-1">
                                            <span>Admission</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a role="tab" data-toggle="tab" class="nav-link" href="#tab-content-2">
                                            <span>Staff</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            </div>
                        <div class="app-inner-layout__wrapper">
                           
                            <div class="app-inner-layout__content">
                                <div class="tab-content">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-6 col-xl-4">
                                                <div class="card mb-3 widget-content bg-night-fade">
                                                    <div class="widget-content-wrapper text-white">
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">Total Student</div>
                                                            <div class="widget-subheading">No of student at Ogitech</div>
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <div class="widget-numbers text-white"><span><?php echo $tcand;?></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-4">
                                                <div class="card mb-3 widget-content bg-arielle-smile">
                                                    <div class="widget-content-wrapper text-white">
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">Admission</div>
                                                            <div class="widget-subheading">Total Student Admission for the year</div>
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <div class="widget-numbers text-white"><span><?php echo $taff;?></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-4">
                                                <div class="card mb-3 widget-content bg-happy-green">
                                                    <div class="widget-content-wrapper text-white">
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">Staff</div>
                                                            <div class="widget-subheading">Ogitech Staff (Academic and Non-Academic)</div>
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <div class="widget-numbers text-white"><span>
                                                                <?php echo $tcand;?></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
                                                <div class="card mb-3 widget-content bg-premium-dark">
                                                    <div class="widget-content-wrapper text-white">
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">Products Sold</div>
                                                            <div class="widget-subheading">Revenue streams</div>
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <div class="widget-numbers text-warning"><span>$14M</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-lg-6 col-xl-5">
                                                <div class="mb-3 card">
                                                    <div class="card-header-tab card-header-tab-animation card-header">
                                                        <div class="card-header-title">
                                                            <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                                                            Resources
                                                        </div>
                                                        <ul class="nav">
                                                            <li class="nav-item"><a data-toggle="tab" href="#tabs-eg-77"
                                                                                    class="active nav-link">Deans</a></li>
                                                            <li class="nav-item"><a data-toggle="tab" href="#tabs-eg-88"
                                                                                    class="nav-link second-tab-toggle">Hods</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="tab-content">
                                                            <div class="tab-pane fade show active" id="tabs-eg-77">
                                                                <div class="card mb-3 widget-chart widget-chart2 text-left w-100">
                                                                    <div class="widget-chat-wrapper-outer">
                                                                        <div class="widget-chart-content pt-3 pr-3 pl-3">
                                                                            <div class="widget-chart-flex">
                                                                                <div class="widget-numbers">
                                                                                    <div class="widget-chart-flex">
                                                                                        <div>
                                                                                            <small class="opacity-5">
                                                                                            </small>
                                                                                            <span><?php echo $tacan;?></span></div>
                                                                                        <div class="widget-title ml-2 opacity-5 font-size-lg text-muted">
                                                                                            Total Halls
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                                                            <div id="dashboard-sparkline-carousel-3"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h6 class="text-muted text-uppercase font-size-md opacity-5 font-weight-normal">
                                                                    Our Deans</h6>
                                                                <div class="scroll-area-sm">
                                                                    <div class="scrollbar-container">
                                                                        <ul class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">
                                <?php 
                                $dn = dbConnect()->prepare("SELECT h.user_id, h.id, h.start_year, h.end_year,h.status,h.created, u.firstname, u.lastname, u.qualification, u.email, u.school, u.id, u.department, u.image FROM deans as h INNER jOIN user as u ON h.user_id=u.id ORDER BY h.id DESC LIMIT 5");
                                $dn->execute();
                                if($dn->rowcount()<1){echo 'Not found';}else{
                                    $i=0;
                                    while($dean = $dn->fetch()){$i++; ?>
                                        <li class="list-group-item">
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left mr-3">
                                                        <img width="42"
                                                             class="rounded-circle"
                                                             src="file/<?php echo $dean['image'];?>"
                                                             alt="">
                                                    </div>
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">
                                                            <?php echo $dean['firstname'].' '. $dean['lastname'];?>
                                                        </div>
                                                        <div class="widget-subheading">
                                                            <?php echo $dean['email'];?>
                                                        </div>
                                                    </div>
                                                    <div class="widget-content-right">
                                                        <div class="font-size-xlg text-muted">
                                                            <span><?php echo $dean['qualification'];?></span>
                                                            <small class="text-danger pl-2">
                                                                <i class="fa fa-angle-down"></i>
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                                        <?php }}?>
                                                                            
                                                                            
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="tabs-eg-88">
                                                                <div class="card mb-3 widget-chart widget-chart2 text-left w-100">
                                                                    <div class="widget-chat-wrapper-outer">
                                                                        <div class="widget-chart-content p-3">
                                                                            <div class="widget-chart-flex">
                                                                                <div class="widget-numbers">
                                                                                    <div class="widget-chart-flex">
                                                                                        <div>
                                                                                            <span><?php echo $acomm ;?></span></div>
                                                                                        <div class="widget-title ml-2 opacity-5 font-size-lg text-muted">
                                                                                            Head of Dept
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                                                            <div id="dashboard-sparklines-333"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h6 class="text-muted text-uppercase font-size-md opacity-5 font-weight-normal">
                                                                    Our Present Hods</h6>
                                                                <div class="scroll-area-sm">
                                                                    <div class="scrollbar-container">
                                                                        <ul class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">
                <?php 
                                $rn = dbConnect()->prepare("SELECT h.user_id, h.id, h.start_year, h.end_year,h.status,h.created, u.firstname, u.lastname, u.qualification, u.email, u.school, u.id, u.department, u.image FROM hods as h INNER jOIN user as u ON h.user_id=u.id ORDER BY h.id DESC LIMIT 5");
                                $rn->execute();
                                if($rn->rowcount()<1){echo 'Not found';}else{
                                    $i=0;
                                    while($hod = $rn->fetch()){$i++; ?>
                                            <li class="list-group-item">
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left mr-3">
                                                        <img width="42"
                                                             class="rounded-circle"
                                                             src="file/<?php echo $hod['image'];?>"
                                                             alt="">
                                                    </div>
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">
                                                            <?php echo $hod['firstname'].' '. $hod['lastname'];?>
                                                        </div>
                                                        <div class="widget-subheading">
                                                            <?php echo $hod['email'];?>
                                                        </div>
                                                    </div>
                                                    <div class="widget-content-right">
                                                        <div class="font-size-xlg text-muted">
                                                            <span><?php echo $hod['qualification'];?></span>
                                                            <small class="text-danger pl-2">
                                                                <i class="fa fa-angle-down"></i>
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                                        <?php }}?>
                                                                           
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-6 col-xl-7">
                                                <div class="mb-3 card">
                                                    <div class="card-header-tab card-header">
                                                        <div class="card-header-title">
                                                            <i class="header-icon lnr-rocket icon-gradient bg-tempting-azure"> </i>
                                                            Bandwidth Reports
                                                        </div>
                                                        <div class="btn-actions-pane-right">
                                                            <div class="nav">
                                                                <a href="#tab-eg-55" data-toggle="tab"
                                                                   class="border-0 btn-pill btn-wide btn-transition active btn btn-outline-alternate">Tab
                                                                    1</a>
                                                                <a href="#tab-eg-66" data-toggle="tab"
                                                                   class="ml-1 btn-pill btn-wide border-0 btn-transition  btn btn-outline-alternate second-tab-toggle-alt">Tab
                                                                    2</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-content">
                                                        <div class="tab-pane fade active show" id="tab-eg-55">
                                                            <div class="widget-chart p-0">
                                                                <div id="bar-vertical-candle-lg"></div>
                                                                <div class="widget-chart-content">
                                                                    <div class="widget-description mt-0 text-warning">
                                                                        <i class="fa fa-arrow-left"></i>
                                                                        <span class="pl-1">175.5%</span>
                                                                        <span class="text-muted opacity-8 pl-1">increased server resources</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="pt-2 card-body">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="widget-content">
                                                                            <div class="widget-content-outer">
                                                                                <div class="widget-content-wrapper">
                                                                                    <div class="widget-content-left">
                                                                                        <div class="widget-numbers fsize-3 text-muted">
                                                                                            63%
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="widget-content-right">
                                                                                        <div class="text-muted opacity-6">
                                                                                            Generated Leads
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="widget-progress-wrapper mt-1">
                                                                                    <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                                                        <div class="progress-bar bg-danger"
                                                                                             role="progressbar"
                                                                                             aria-valuenow="63"
                                                                                             aria-valuemin="0"
                                                                                             aria-valuemax="100"
                                                                                             style="width: 63%;"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="widget-content">
                                                                            <div class="widget-content-outer">
                                                                                <div class="widget-content-wrapper">
                                                                                    <div class="widget-content-left">
                                                                                        <div class="widget-numbers fsize-3 text-muted">
                                                                                            32%
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="widget-content-right">
                                                                                        <div class="text-muted opacity-6">
                                                                                            Submitted Tickers
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="widget-progress-wrapper mt-1">
                                                                                    <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                                                        <div class="progress-bar bg-success"
                                                                                             role="progressbar"
                                                                                             aria-valuenow="32"
                                                                                             aria-valuemin="0"
                                                                                             aria-valuemax="100"
                                                                                             style="width: 32%;"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="widget-content">
                                                                            <div class="widget-content-outer">
                                                                                <div class="widget-content-wrapper">
                                                                                    <div class="widget-content-left">
                                                                                        <div class="widget-numbers fsize-3 text-muted">
                                                                                            71%
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="widget-content-right">
                                                                                        <div class="text-muted opacity-6">
                                                                                            Server
                                                                                            Allocation
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="widget-progress-wrapper mt-1">
                                                                                    <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                                                        <div class="progress-bar bg-primary"
                                                                                             role="progressbar"
                                                                                             aria-valuenow="71"
                                                                                             aria-valuemin="0"
                                                                                             aria-valuemax="100"
                                                                                             style="width: 71%;"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="widget-content">
                                                                            <div class="widget-content-outer">
                                                                                <div class="widget-content-wrapper">
                                                                                    <div class="widget-content-left">
                                                                                        <div class="widget-numbers fsize-3 text-muted">
                                                                                            41%
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="widget-content-right">
                                                                                        <div class="text-muted opacity-6">
                                                                                            Generated Leads
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="widget-progress-wrapper mt-1">
                                                                                    <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                                                        <div class="progress-bar bg-warning"
                                                                                             role="progressbar"
                                                                                             aria-valuenow="41"
                                                                                             aria-valuemin="0"
                                                                                             aria-valuemax="100"
                                                                                             style="width: 41%;"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="tab-eg-66">
                                                            <div class="widget-chart p-0">
                                                                <div id="dashboard-sparkline-37"></div>
                                                                <div class="widget-chart-content">
                                                                    <div class="widget-description mt-0 text-success">
                                                                        <i class="fa fa-arrow-up"></i>
                                                                        <span class="pr-1">37.2%</span>
                                                                        <span class="text-muted opacity-8">performance increase</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="pt-2 card-body">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="widget-content">
                                                                            <div class="widget-content-outer">
                                                                                <div class="widget-content-wrapper">
                                                                                    <div class="widget-content-left">
                                                                                        <div class="widget-numbers fsize-3 text-muted">
                                                                                            23%
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="widget-content-right">
                                                                                        <div class="text-muted opacity-6">
                                                                                            Deploys
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="widget-progress-wrapper mt-1">
                                                                                    <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                                                        <div class="progress-bar bg-warning"
                                                                                             role="progressbar"
                                                                                             aria-valuenow="23"
                                                                                             aria-valuemin="0"
                                                                                             aria-valuemax="100"
                                                                                             style="width: 23%;"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="widget-content">
                                                                            <div class="widget-content-outer">
                                                                                <div class="widget-content-wrapper">
                                                                                    <div class="widget-content-left">
                                                                                        <div class="widget-numbers fsize-3 text-muted">
                                                                                            76%
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="widget-content-right">
                                                                                        <div class="text-muted opacity-6">
                                                                                            Traffic
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="widget-progress-wrapper mt-1">
                                                                                    <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                                                        <div class="progress-bar bg-info"
                                                                                             role="progressbar"
                                                                                             aria-valuenow="76"
                                                                                             aria-valuemin="0"
                                                                                             aria-valuemax="100"
                                                                                             style="width: 76%;"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="widget-content">
                                                                            <div class="widget-content-outer">
                                                                                <div class="widget-content-wrapper">
                                                                                    <div class="widget-content-left">
                                                                                        <div class="widget-numbers fsize-3 text-muted">
                                                                                            83%
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="widget-content-right">
                                                                                        <div class="text-muted opacity-6">
                                                                                            Servers Load
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="widget-progress-wrapper mt-1">
                                                                                    <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                                                        <div class="progress-bar bg-danger"
                                                                                             role="progressbar"
                                                                                             aria-valuenow="83"
                                                                                             aria-valuemin="0"
                                                                                             aria-valuemax="100"
                                                                                             style="width: 83%;"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="widget-content">
                                                                            <div class="widget-content-outer">
                                                                                <div class="widget-content-wrapper">
                                                                                    <div class="widget-content-left">
                                                                                        <div class="widget-numbers fsize-3 text-muted">
                                                                                            48%
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="widget-content-right">
                                                                                        <div class="text-muted opacity-6">
                                                                                            Reportd Bugs
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="widget-progress-wrapper mt-1">
                                                                                    <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                                                        <div class="progress-bar bg-alternate"
                                                                                             role="progressbar"
                                                                                             aria-valuenow="48"
                                                                                             aria-valuemin="0"
                                                                                             aria-valuemax="100"
                                                                                             style="width: 48%;"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-lg-4 col-xl-4">
                                                <div class="card-hover-shadow-2x mb-3 card">
                                                    <div class="rm-border responsive-center text-left card-header">
                                                        <div><h5 class="menu-header-title text-capitalize text-success">
                                                            Total Laboratories
                                                            </h5></div>
                                                    </div>
                                                    <div class="widget-chart widget-chart2 text-left pt-0">
                                                        <div class="widget-chat-wrapper-outer">
                                                            <div class="widget-chart-content">
                                                                <div class="widget-chart-flex">
                                                                    <div class="widget-numbers">
                                                                        <div class="widget-chart-flex">
                                                                            <div class="text-success"><span><?php echo $laboratorySn;?></span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="widget-chart-wrapper widget-chart-wrapper-lg he-auto opacity-10 m-0">
                                                                <div id="dashboard-sparkline-3"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4 col-xl-4">
                                                <div class="card-hover-shadow-2x mb-3 card">
                                                    <div class="rm-border responsive-center text-left card-header">
                                                        <div><h5 class="menu-header-title text-capitalize text-danger">Departments</h5></div>
                                                    </div>
                                                    <div class="widget-chart widget-chart2 text-left pt-0">
                                                        <div class="widget-chat-wrapper-outer">
                                                            <div class="widget-chart-content">
                                                                <div class="widget-chart-flex">
                                                                    <div class="widget-numbers">
                                                                        <div class="widget-chart-flex">
                                                                            <div class="text-danger"><span><?php echo $departmentSn;?></span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="widget-chart-wrapper widget-chart-wrapper-lg he-auto opacity-10 m-0">
                                                                <div id="dashboard-sparkline-1"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-4 col-xl-4">
                                                <div class="card-hover-shadow-2x mb-3 card bg-dark">
                                                    <div class="rm-border bg-dark responsive-center text-left card-header">
                                                        <div><h5 class="menu-header-title text-capitalize text-warning">Faculty/School</h5></div>
                                                    </div>
                                                    <div class="widget-chart widget-chart2 text-left pt-0">
                                                        <div class="widget-chat-wrapper-outer">
                                                            <div class="widget-chart-content">
                                                                <div class="widget-chart-flex">
                                                                    <div class="widget-numbers">
                                                                        <div class="widget-chart-flex">
                                                                            <div class="text-warning"><span><?php echo $committeeSn;?></span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="widget-chart-wrapper widget-chart-wrapper-lg he-auto opacity-10 m-0">
                                                                <div id="dashboard-sparkline-4"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="main-card mb-3 card">
                                                    <div class="card-header">Ogitech Staff
                                                        <div class="btn-actions-pane-right">
                                                            <div role="group" class="btn-group-sm btn-group">
                                                                <button class="active btn btn-focus">Last Week</button>
                                                                <button class="btn btn-focus">All Month</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive">
                                                        

                                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                                            <thead>
                                                            <tr>
                                                                <th class="text-center">#</th>
                                                                <th>Name</th>
                                                                <th class="text-center">Mobile</th>
                                                                <th class="text-center">State</th>
                                                                <th class="text-center">Department</th>
                                                                <th class="text-center">Qualification</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php 
                                                                  $ls = dbConnect()->prepare("SELECT * FROM user WHERE email !=? ORDER BY id DESC LIMIT 4");
                                                                    $ls->execute([$uemail]);
                                                                    $i = 0;
                                                                    if($ls->rowcount() < 1){
                                                                        echo "No record found ... ";
                                                                    }else{ while($staff = $ls->fetch()){
                                                                        $i++;
                                                                        empty($staff['salary'])? $salary='NIN' : $salary = number_format($staff['salary'], 2);
                                                                  ?>
                                                            <tr>
                                                                <td class="text-center text-muted"><?php echo $i; ?></td>
                                                                <td>
                                                                    <div class="widget-content p-0">
                                                                        <div class="widget-content-wrapper">
                                                                            <div class="widget-content-left mr-3">
                                                                                <div class="widget-content-left">
                                                                                    <img width="40" class="rounded-circle"
                                                                                         src="file/<?php echo $staff['image'];?>"
                                                                                         alt="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="widget-content-left flex2">
                                                                                <div class="widget-heading"><?php echo $staff['firstname'].' '. $staff['lastname'];?></div>
                                                                                <div class="widget-subheading opacity-7"><?php echo $staff['email'];?>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-center"><?php echo $staff['mobile'];?></td>
                                                                <td class="text-center">
                                                                    <div class="badge badge-warning"><?php echo $staff['state'];?></div>
                                                                </td>
                                                                <td class="text-center" style="width: 150px;">
                                                                    <?php echo $staff['department'];?>
                                                                </td>
                                                                <td class="text-center">
                                                                    <button type="button" id="PopoverCustomT-1"
                                                                            class="btn btn-primary btn-sm"><?php echo $staff['qualification'];?>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <?php }}?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center mb-3">
                                            <h5 class="menu-header-title text-capitalize mb-3 fsize-3">High Profile (School Authorities) </h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6 col-xl-4">
                                                <div class="card-shadow-primary card-border mb-3 profile-responsive card">
                                                    <div class="dropdown-menu-header">
                                                        <div class="dropdown-menu-header-inner bg-alternate">
                                                            <div class="menu-header-image opacity-2"
                                                                 style="background-image: url('assets/images/dropdown-header/abstract1.jpg');"></div>
                                                            <div class="menu-header-content btn-pane-right">
                                                                <div class="avatar-icon-wrapper mr-3 avatar-icon-xl btn-hover-shine">
                                                                    <div class="avatar-icon rounded"><img
                                                                            src="file/registrar.png"
                                                                            alt="Avatar 5"></div>
                                                                </div>
                                                                <div><h5 class="menu-header-title">Mr Bamidele Babatunde</h5>
                                                                    <h6
                                                                        class="menu-header-subtitle">Ogitech Registrar</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">
                                                            <div class="widget-content pt-2 pl-0 pb-2 pr-0">
                                                                <div class="text-center"><h5
                                                                        class="widget-heading opacity-4 mb-0">Incharge of school admission</h5>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-xl-4">
                                                <div class="card-shadow-primary card-border mb-3 profile-responsive card">
                                                    <div class="dropdown-menu-header">
                                                        <div class="dropdown-menu-header-inner bg-alternate">
                                                            <div class="menu-header-image opacity-4"
                                                                 style="background-image: url('assets/images/dropdown-header/abstract2.jpg');"></div>
                                                            <div class="menu-header-content btn-pane-right">
                                                                <div class="avatar-icon-wrapper mr-3 avatar-icon-xl btn-hover-shine">
                                                                    <div class="avatar-icon rounded"><img
                                                                            src="file/rector.png"
                                                                            alt="Avatar 5"></div>
                                                                </div>
                                                                <div><h5 class="menu-header-title">Eng. Dr. Mrs Akinkurolere</h5><h6
                                                                        class="menu-header-subtitle">Ogitech Rector</h6></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="list-group list-group-flush">
                                                        <li class="p-0 list-group-item">
                                                            <div class="widget-content">
                                                                <div class="text-center"><h5
                                                                        class="widget-heading mb-0 opacity-4">Director and Management of Ogitech</h5>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-xl-4">
                                                <div class="card-shadow-primary card-border mb-3 profile-responsive card">
                                                    <div class="dropdown-menu-header">
                                                        <div class="dropdown-menu-header-inner bg-alternate">
                                                            <div class="menu-header-image opacity-1"
                                                                 style="background-image: url('assets/images/dropdown-header/abstract3.jpg');"></div>
                                                            <div class="menu-header-content btn-pane-right">
                                                                <div class="avatar-icon-wrapper mr-3 avatar-icon-xl btn-hover-shine">
                                                                    <div class="avatar-icon rounded"><img
                                                                            src="fil/librarian.png"
                                                                            alt="Avatar 5"></div>
                                                                </div>
                                                                <div><h5 class="menu-header-title">Mrs. Deborah Udi</h5><h6
                                                                        class="menu-header-subtitle">Ogitech Librarian</h6></div>
                                                                <div class="menu-header-btn-pane">
                                                                    <button type="button"
                                                                            class="btn-wide btn-hover-shine btn-pill btn btn-warning">
                                                                        Reports
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
   
</div>

<div class="app-drawer-overlay d-none animated fadeIn"></div>
<script type="text/javascript" src="./assets/scripts/main.07a59de7b920cd76b874.js"></script></body>
</html>
