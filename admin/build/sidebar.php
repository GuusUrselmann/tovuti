<style>.content_wrapper{width: calc(100% - 200px)!important; background-color: #efefef!important;}</style>
<div class="sidebar">
    <div class="sidebar_nav">
        <ul class="menu_vertical sidebar_nav_mnu">
            <li class="menuitem">
                <a href="">
                    <div class="sidebar_item">
                        <div class="navitem_left">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="navitem_right">
                            Profiel
                        </div>
                    </div>
                </a>
                <div class="sidebar_subnav">
                    <div class="sidebar_subnav-arrow"></div>
                    <ul class="menu_vertical sidebar_nav_submnu">
                        <li class="menuitem">
                            <a href="">
                                <div class="sidebar_subitem">
                                    Bekijk profiel
                                </div>
                            </a>
                        </li>
                        <li class="menuitem">
                            <a href="">
                                <div class="sidebar_subitem">
                                    Wijzig profiel
                                </div>
                            </a>
                        </li>
                        <li class="menuitem">
                            <a>
                                <div class="sidebar_subitem">
                                    <form method="post" action="login">
                                        <input class="btn-tvt-2" type="submit" name="logout_submit" value="uitloggen">
                                    </form>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="menuitem">
                <a href="">
                    <div class="sidebar_item">
                        <div class="navitem_left">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <div class="navitem_right">
                            Settings
                        </div>
                    </div>
                </a>
            </li>
            <li class="menuitem">
                <a href="">
                    <div class="sidebar_item">
                        <div class="navitem_left">
                            <i class="fas fa-clipboard-list"></i>
                        </div>
                        <div class="navitem_right">
                            Portfolio
                        </div>
                    </div>
                </a>
            </li>
            <?php if($wfweb->user_level(100, 'more')) {?>
            <li class="menuitem">
                <a href="">
                    <div class="sidebar_item">
                        <div class="navitem_left">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="navitem_right">
                            Gebruikers
                        </div>
                    </div>
                </a>
                <div class="sidebar_subnav">
                    <div class="sidebar_subnav-arrow"></div>
                    <ul class="menu_vertical sidebar_nav_submnu">
                        <li class="menuitem">
                            <a href="createuser">
                                <div class="sidebar_subitem">
                                    Gebruiker toevoegen
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <?php } ?>
        </ul>
    </div>
</div>
