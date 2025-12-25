<?php

require_once 'php/framework.php';


$siteConfig = $toolbox->getSiteConfig();
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $siteConfig['name']; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">

        <aside class="sidebar">
            <div class="sidebar-header">
                <h1 class="logo"><?php echo $siteConfig['name']; ?></h1>
            </div>
            <nav class="menu">
                <?php echo $toolbox->renderMenu(); ?>
            </nav>
            <div class="sidebar-footer">
                <p class="copyright">© 2025 <?php echo $siteConfig['name']; ?></p>
            </div>
        </aside>


        <main class="main-content">
            <header class="main-header">
                <div class="header-title">
                    <h2>欢迎使用<?php echo $siteConfig['name']; ?></h2>
                    <p><?php echo $siteConfig['description']; ?></p>
                </div>
                <div class="header-search">
                    <input type="text" placeholder="搜索工具..." class="search-input" id="searchInput">
                </div>
            </header>


            <section class="tools-section">
                <div class="tools-grid" id="toolsGrid">
                    <?php
                    
                    $tools = $toolbox->getTools();
                    
                    
                    foreach ($tools as $tool) {
                        echo $toolbox->renderToolCard($tool);
                    }
                    ?>
                </div>
            </section>
        </main>
    </div>

    <script src="js/main.js"></script>
</body>
</html>