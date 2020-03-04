 <!-- Left Panel -->

 <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?php echo base_url();?>dashboard"><?=$title;?></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="<?=(@$breadcrumbs=='Dashboard') ? 'active': '';?>">
                        <a href="<?php echo base_url();?>dashboard"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>

                    <li class="<?=(@$breadcrumbs=='Listings') ? 'active': '';?>">
                        <a href="<?php echo base_url();?>listings"> <i class="menu-icon fa fa-laptop"></i>Approve Listings <span class="badge badge-primary">5</span></a>
                    </li>

                    <li class="<?=(@$breadcrumbs=='Approve Groups') ? 'active': '';?>">
                        <a href="<?php echo base_url();?>listings/approve_groups"> <i class="menu-icon fa fa-group"></i>Approve Groups</a>
                    </li>

                    <li class="<?=(@$breadcrumbs=='Transactions') ? 'active': '';?>">
                        <a href="<?php echo base_url();?>transactions"> <i class="menu-icon fa fa-table"></i>Transaction </a>
                    </li>

                    <li class="<?=(@$breadcrumbs=='Users') ? 'active': '';?>">
                        <a href="<?php echo base_url();?>users"> <i class="menu-icon fa fa-users"></i>Users </a>
                    </li>

                    <li class="<?=(@$breadcrumbs=='Search') ? 'active': '';?>">
                        <a href="<?php echo base_url();?>search"> <i class="menu-icon fa fa-search"></i>Search </a>
                    </li>

                    <!-- <li class="">
                        <a href="<?php echo base_url();?>catetory"> <i class="menu-icon fa fa-table"></i>Category </a>
                    </li>
                     -->
                    <li class="menu-item-has-children dropdown <?=(@$breadcrumbs=='Roles') ? 'active show open': '';?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cloud"></i>Collections</a>
                        <ul class="sub-menu children dropdown-menu <?=(@$breadcrumbs=='Roles') ? 'show': '';?>">
                            <li class="<?=(@$breadcrumbs=='Roles') ? 'active': '';?>"><i class="fa fa-puzzle-piece"></i><a href="<?php echo base_url();?>roles">Home Page Banner</a></li>
                            <li class="<?=(@$breadcrumbs=='Roles') ? 'active': '';?>"><i class="fa fa-puzzle-piece"></i><a href="<?php echo base_url();?>roles">Editors Pick Products</a></li>
                        </ul>
                    </li>


                    <li class="menu-item-has-children dropdown <?=(@$breadcrumbs=='Roles') ? 'active show open': '';?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Settings</a>
                        <ul class="sub-menu children dropdown-menu <?=(@$breadcrumbs=='Roles') ? 'show': '';?>">
                            <li class="<?=(@$breadcrumbs=='Roles') ? 'active': '';?>"><i class="fa fa-puzzle-piece"></i><a href="<?php echo base_url();?>roles">Roles</a></li>
                        </ul>
                    </li>



                    <li class="<?=(@$breadcrumbs=='Commissions') ? 'active': '';?>">
                        <a href="<?php echo base_url();?>settings/commissions"> <i class="menu-icon fa fa-money"></i>Commissions </a>
                    </li>

                    <li class="<?=(@$breadcrumbs=='Extensions') ? 'active': '';?>">
                        <a href="<?php echo base_url();?>settings/extensions"> <i class="menu-icon fa fa-anchor"></i>Extensions </a>
                    </li>

                    <li class="<?=(@$breadcrumbs=='Setup guide') ? 'active': '';?>">
                        <a href="<?php echo base_url();?>settings/setup_guide"> <i class="menu-icon fa fa-users"></i>Setup Guide </a>
                    </li>

                    <li class="<?=(@$breadcrumbs=='Business Info') ? 'active': '';?>">
                        <a href="<?php echo base_url();?>settings/business_info"> <i class="menu-icon fa fa-info-circle"></i>Business Info </a>
                    </li>

                    <li class="<?=(@$breadcrumbs=='Api') ? 'active': '';?>">
                        <a href="<?php echo base_url();?>settings/api"> <i class="menu-icon fa fa-cog"></i>Api </a>
                    </li>

                    <!-- <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="tables-basic.html">Basic Table</a></li>
                            <li><i class="fa fa-table"></i><a href="tables-data.html">Data Table</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Forms</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="forms-basic.html">Basic Form</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="forms-advanced.html">Advanced Form</a></li>
                        </ul>
                    </li> -->                   
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->