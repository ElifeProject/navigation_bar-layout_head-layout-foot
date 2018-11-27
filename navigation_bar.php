<!-- Menu -->
                
                    <nav class="classy-navbar justify-content-between" id="alazeaNav">

                        <!-- Nav Brand -->
                        <a href="index.php" class="nav-brand"><img src="img/logo.png" style="width: 100px;"></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Navbar Start -->
                            <div class="classynav font-cursive">
                                <ul>
                                    <!--prob-->
                                    <li <?php echo $page_title=="Index"? "class='active'" : "";?>>
                                        <a href="<?php echo $home_url; ?>"></a>Home</li>
                                    <!--<li><a href="index.php">Home</a></li>-->
                                    <li><a href="#">Catalogue</a>
                                        <ul class="dropdown">
                                            <li><a href="E-Life_Computer_Accessories.php">Computer Peripherals</a></li>   
                                            <li><a href="Project_Accessories.php">Project Accessories</a></li>
                                            <li><a href="E-Life_Book_Store.php">Book Store</a></li>
                                            <li><a href="Stationary_Store.php">Stationary Store</a></li>
                                            <li><a href="E-Life_Grocery_Store.php">Grocery Store</a></li>           
                                            <li><a href="Men's_Fashion.php">Men's Fashion</a></li>
                                            <li><a href="Women's_Fashion.php">Women's Fashion</a></li> 
                                            <li><a href="E-Life_Special.php">E-Life Special</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <!--check customer was logged in or not-->
                                <?php
                                if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true &&  $_SESSION['access_level']=='Customer'){
                                     ?>   
                                    <ul class="nav navbar-nav navbar-right">
                                        <li <?php echo $page_title=="Edit Profile"? "class='active'" : "";?>>
                                            <a href="#" class="dropdown-toggle"
                                            data-toggle="dropdown" role="button" aria-expanded="false">
                                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                                &nbsp;&nbsp;<?php echo $_SESSION['firsrtname']; ?>
                                                &nbsp;&nbsp;<span class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="<?php echo $home_url; ?>logout.php">Logout</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <?php
                                }
                                // login and register option 
                                else{
                                    ?>
                                    <ul class="nav navbar-nav navbar-right">
                                        <li <?php echo $page_title=="Login" ? "class='active'" : "";?>>
                                            <a href="<?php echo $home_url; ?>Login">
                                                <span class="glyphicon glyphicon-check"></span>SignUp
                                            </a>   
                                        </li>
                                    </ul>
                                }
                                     <!--<li><a href="SignUp.php">Sign Up</a></li>
                                    <li><a href="login.php">Log In</a></li>
                                    <li><a href="">Cart</a></li>-->
                                <!--</ul>-->
                            </div>
                            <!-- Navbar End -->
                        </div>
                    </nav>
