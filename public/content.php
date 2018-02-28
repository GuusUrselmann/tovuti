<!DOCTYPE html>
<html>
    <head>
        <?php $wfweb->pagemeta(); ?>
    </head>
    <body>
        <header>
        </header>
        <main>
            <div class="cleart"></div>
            <div class="main_content">
                <?php if($wfweb->user_logged_in() == true) {$wfweb->sidebar();} ?>
                <div class="content_wrapper">
                    <?php include(ABSPATH.$router->direct()); ?>
                </div>
            </div>
            <div class="clearb"></div>
        </main>
        <footer>
        </footer>
    </body>
</html>
