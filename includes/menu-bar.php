<div class="header-nav  animate-dropdown" >
    <div class="container">
        <div class="yamm navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="nav-bg-class">
                <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                    <div class="nav-outer">
                        <ul class="nav navbar-nav">
                            <?php
                            $current_page = basename($_SERVER['PHP_SELF']); // Get the current script name
                            $current_category_id = isset($_GET['cid']) ? $_GET['cid'] : null; // Get the current category ID from the URL
                            ?>
                            <li class="dropdown yamm-fw <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">
                                <a href="index.php" data-hover="dropdown" class="dropdown-toggle">Home</a>
                            </li>
                            <?php
                            $sql = mysqli_query($con, "SELECT id, categoryName FROM category LIMIT 6");
                            while ($row = mysqli_fetch_array($sql)) {
                                $is_active = ($current_category_id == $row['id']) ? 'active' : '';
                                ?>
                                <li class="dropdown yamm <?php echo $is_active; ?>">
                                    <a href="category.php?cid=<?php echo $row['id']; ?>"> <?php echo $row['categoryName']; ?></a>
                                </li>
                            <?php } ?>
                        </ul><!-- /.navbar-nav -->
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
