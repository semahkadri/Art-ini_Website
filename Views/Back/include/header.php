<header class="header">
        <nav class="navbar navbar-expand-lg">
            <div class="search-panel">
                <div class="search-inner d-flex align-items-center justify-content-center">
                    <div class="close-btn">Fermer <i class="fa fa-close"></i></div>
                    <form id="searchForm" action="#">
                        <div class="form-group">
                            <input type="search" name="search" placeholder="Que cherchez-vous?..">
                            <button type="submit" class="submit">Chercher</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="container-fluid d-flex align-items-center justify-content-between">
                <div class="navbar-header">
                    <!-- Navbar Header-->
                    <a href="index.php" class="navbar-brand">
                        <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">ART-</strong><strong>INI</strong></div>
                        <div class="brand-text brand-sm"><strong class="text-primary">D</strong><strong>A</strong></div>
                    </a>
                    <!-- Sidebar Toggle Btn-->
                    <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
                </div>


                
                <div class="right-menu list-inline no-margin-bottom">
                    <div class="list-inline-item"><a href="#" class="search-open nav-link"><i class="icon-magnifying-glass-browser"></i></a></div>
                        <!-- notif -->
               
                        <?php 
                        include_once "../../config.php";
                        $sql="SELECT * FROM message WHERE status=0";
                        $sql_get= mysqli_query($conn,$sql);
                        $count = mysqli_num_rows($sql_get);
                    ?>
                    <div class="list-inline-item dropdown"><a id="navbarDropdownMenuLink1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link messages-toggle"><i class="icon-email"></i><span class="badge dashbg-1"><?php echo $count ;?></span></a>
                        <div  class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php 
                                $sql1="SELECT * FROM message WHERE status=0";
                                $sql_get1= mysqli_query($conn,$sql1);
                                if(mysqli_num_rows($sql_get) >0)
                                {
                                    while($resu = mysqli_fetch_assoc($sql_get1))
                                    {
                                        echo '<a class="dropdown-item text-info" href="read_msg.php?id='.$resu['id'].'">'.$resu['name'].'<span class="d-block">'.$resu['email'].'</span><small class="date d-block">'.$resu['cr_date'].'</small></a>';
                                        
                                    }
                                }else{
                                    echo '<a class="dropdown-item text-danger font-weight-bold" href="#" ><i class="fas fa-frown-open"></i> Pas de nouveaux messages</a>';
                                }
                                
                        
                           
                                ?>
                        </div>
                        
                    </div>



                    <!-- Tasks-->
                    <div class="list-inline-item dropdown"><a id="navbarDropdownMenuLink2" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link tasks-toggle"><i class="icon-new-file"></i><span class="badge dashbg-3">9</span></a>
                        <div aria-labelledby="navbarDropdownMenuLink2" class="dropdown-menu tasks-list">
                            <a href="#" class="dropdown-item">
                                <div class="text d-flex justify-content-between"><strong>Tâche 1</strong><span>40% accomplie</span></div>
                                <div class="progress">
                                    <div role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-1"></div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item">
                                <div class="text d-flex justify-content-between"><strong>Tâche 2</strong><span>20% accomplie</span></div>
                                <div class="progress">
                                    <div role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-3"></div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item">
                                <div class="text d-flex justify-content-between"><strong>Tâche 3</strong><span>70% accomplie</span></div>
                                <div class="progress">
                                    <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-2"></div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item">
                                <div class="text d-flex justify-content-between"><strong>Tâche 4</strong><span>30% accomplie</span></div>
                                <div class="progress">
                                    <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-4"></div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item">
                                <div class="text d-flex justify-content-between"><strong>Tâche 5</strong><span>65% accomplie</span></div>
                                <div class="progress">
                                    <div role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-1"></div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item text-center"> <strong>Voir toutes les tâches <i class="fa fa-angle-right"></i></strong></a>
                        </div>
                    </div>

                   
            <!-- Megamenu end     -->
                    <!-- Languages dropdown    -->
                    <div class="list-inline-item dropdown">
                        <a id="languages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle"><img src="Assets/img/flags/16/FR.png" alt="Francais"><span class="d-none d-sm-inline-block">Francais</span></a>
                        <div aria-labelledby="languages" class="dropdown-menu">
                            <a rel="nofollow" href="#" class="dropdown-item"> <img src="Assets/img/flags/16/GB.png" alt="English" class="mr-2"><span>Anglais</span></a>
                            <a rel="nofollow" href="#" class="dropdown-item"> <img src="Assets/img/flags/16/DE.png" alt="English" class="mr-2"><span>Allemand  </span></a>
                        </div>
                    </div>
                    <!-- Log out               -->
                    <div class="list-inline-item logout">
                        <a id="logout" href="logout.php" class="nav-link"> <span class="d-none d-sm-inline">Se déconnecter </span><i class="icon-logout"></i></a>
                    </div>
                </div>
            </div>
        </nav>
    </header>