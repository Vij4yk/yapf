
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('home') }}">MVC Demo</a>
        </div>
        <div class="nav navbar-nav navbar-right">
            <li><a href="<?php echo HOME.'home/index'; ?>">Home</a></li>
            <li><a href="<?php echo HOME.'admin/users'; ?>">Users</a></li>
            <?php
                if(Session::get('loggin') == true){
            ?>
                    <li><a href="<?php echo HOME.'admin/logout'; ?>">Logout</a></li>
            <?php }else { ?>
                    <li><a href="<?php echo HOME.'admin/login'; ?>">Login</a></li>
            <?php } ?>
        </div>
    </div>
</nav>