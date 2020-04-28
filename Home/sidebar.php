<div id="sidebar-nav" class="sidebar">
        <div class="slimScrolldiv">
            <div class="sidebar-scroll">
                <nav>
                    <ul class="nav">
                        <li class="<?php if($page=='dashboard'){echo 'active';} ?>">
                            <a href="dashboard.php" class="mau">
                                <i class="lnr lnr-home"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li  id="page">
                            <a href="" id="apages" >
                                <i class="lnr lnr-file-empty"></i>
                                <span>Pages</span>
                                <i class="lnr lnr-chevron-left" id="chevron-left"></i>


                            </a>
                        </li>
                        <div id="subPages">
                            <ul class="nav1">
                                <li>
                                    <a href="#">Profile</a>
                                </li>
                                <li>
                                    <a href="#">Login</a>
                                </li>
                                <li>
                                    <a href="#">Locksreen</a>
                                </li>
                            </ul>
                        </div>
                        <li class="<?php if($page=='kt'){echo 'active';} ?>">
                            <a href="kt.php" class="mau">
                            <i class="lnr lnr-book"></i>
                                <span>Mask</span>
                            </a>
                        </li>
                        <li class="<?php if($page=='hoadon'){echo 'active';} ?>">
                            <a href="hoadon.php" class="mau">
                            <i class="lnr lnr-calendar-full"></i>
                                <span>Bill</span>
                            </a>
                        </li>
                        <li class="<?php if($page=='thongke'){echo 'active';} ?>">
                            <a href="thongke.php" class="mau">
                            <i class="lnr lnr-calendar-full"></i>
                                <span>Thống Kê</span>
                            </a>
                        </li>
                        <li class="<?php if($page=='ls'){echo 'active';} ?>">
                            <a href="lichsu.php" class="mau">
                            <i class="lnr lnr-calendar-full"></i>
                                <span>Lịch Sử giao dịch</span>
                            </a>
                        </li>
                        
                        <li class="<?php if($page=='use'){echo 'active';} ?>" >
                            <a href="use.php" class="mau"> 
                            <i class="lnr lnr-users"></i>
                                <span>User</span>
                            </a>
                        </li>
                        <li class="<?php if($page=='exemask'){echo 'active';} ?>" >
                            <a href="exemask.php" class="mau"> 
                            <i class="lnr lnr-map"></i>
                                <span>ExecMask</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"></a>
                        </li>
                    </ul>

                </nav>
            </div>
        </div>
    </div>