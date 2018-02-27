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
                <?php include(ABSPATH.$router->direct()); ?>
            </div>
            <div class="clearb"></div>
        </main>
        <footer>
        </footer>
    </body>
</html>
