<div class="container">
    <div class="row vertical-center-row">
        <h1 class="text-center login-title">Login to MVC Demo</h1>
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading"> <strong class="">Login</strong></div>
                <!--Error Message-->
                <?php
                if (isset($data['message']))
                {
                    ?>
                    <div class="alert alert-danger"  id="flasherror">
                        <ul>
                            <?php
                            foreach($data['message'] as $message)
                            {?>
                                <li> <?php echo $message; ?> </li>
                            <?php } ?>
                        </ul>
                    </div>
                <?php } ?>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" action="" method="post" autocomplete="off">
                        <div class="form-group">
                            <label for="username" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input class="form-control" id="username" name="username" placeholder="Email" required="" type="email">
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-9">
                                <input class="form-control" id="password" name="password" placeholder="Password" required="" type="password">
                            </div>
                        </div>
                        <div class="form-group last">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" name="submit" class="btn btn-success btn-sm">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">Not Registered? <a href="#" class="">Register here</a>
                </div>
            </div>
        </div>
    </div>
</div>
