<button class="menu-toggle d-flex d-sm-flex d-md-flex d-lg-none" aria-expanded="false" data-toggle="nav">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
        <g fill="currentColor">
            <path d="M15,3H1A1,1,0,0,1,1,1H15a1,1,0,0,1,0,2Z"></path>
            <path d="M15,9H1A1,1,0,0,1,1,7H15a1,1,0,0,1,0,2Z"></path>
            <path d="M15,15H1a1,1,0,0,1,0-2H15a1,1,0,0,1,0,2Z"></path>
        </g>
    </svg><span class="d-inline-block ms-2">Menu</span>
</button>

<nav class="nav-menu" aria-label="Main menu" id="nav">
    <?php

    $navBar = array(
        'menu_class' => 'menu_list',
        'container' => false,
        'menu' => 'main',
        'walker' => new WalkerMainMenu(),
        'show_carets' => true,
        'depth' => 2

    );



    echo wp_nav_menu($navBar);
    ?>
</nav>

<button class="search-toggle global-btn" data-toggle="search-box" aria-expanded="false">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
        <path fill="currentColor" d="M15.71,14.29,10.89,9.47a6,6,0,1,0-1.42,1.42l4.82,4.82a1,1,0,0,0,1.42,0A1,1,0,0,0,15.71,14.29ZM6,10a4,4,0,1,1,4-4A4,4,0,0,1,6,10Z"></path>
    </svg>
</button>
<div id="search-box" class="search-box d-lg-block" aria-hidden="true">
    <form role="search" data-url="/search">
        <div class="input-group">
            <input type="text" class="form-control" id="search-navigation" placeholder="Search">
            <button class="button-primary button-search" id="search-navigation-button">Search</button>
        </div>
    </form>
</div>