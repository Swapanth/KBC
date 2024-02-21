<!DOCTYPE html>
<html lang="en">

<head>
  
	<style>
		.sidebar-header{
			background-color: rebeccapurple;
		}
		.nano-content{
			background-color: rebeccapurple;
		}
		.sidebar-title{
			background-color: rebeccapurple;
		}
		.nav-link{
			background-color: rebeccapurple;
		}
		.nano{
			background-color: rebeccapurple;
		}
			</style>
</head>

<body>

    <!-- Your existing content goes here -->

    <!-- Start: sidebar -->
    <aside id="sidebar-left" class="sidebar-left">
        <div class="sidebar-header">
            <div class="sidebar-title">
                Navigation
            </div>
            <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
            </div>
        </div>
        <div class="nano">
            <div class="nano-content">
                <nav id="menu" class="nav-main" role="navigation">
                    <ul class="nav nav-main">
                        <li>
                            <a class="nav-link" href="dashboard.php?l=e">
                                <i class="fas fa-edit" aria-hidden="true"></i>
                                <span style="color: black";>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="index.php?logout">
                                <i class="fas fa-power-off" aria-hidden="true"></i>
                                <span style="color: black";>Log Out</span>
                            </a>
                        </li>
                    </ul>
                </nav>

                <hr>

                <div class="sidebar-header" >
                    <div class="sidebar-title">
                        Upcoming Games
                    </div>
                </div>

                <ul class="nav nav-main">
                    <!-- Add your upcoming games links or content here -->
                </ul>

                <hr class="separator">
            </div>

            <script>
                // Maintain Scroll Position
                if (typeof localStorage !== 'undefined') {
                    if (localStorage.getItem('sidebar-left-position') !== null) {
                        var initialPosition = localStorage.getItem('sidebar-left-position'),
                            sidebarLeft = document.querySelector('#sidebar-left .nano-content');

                        sidebarLeft.scrollTop = initialPosition;
                    }
                }
            </script>

        </div>
    </aside>
    <!-- End: sidebar -->

    <!-- Your existing scripts or additional content goes here -->

</body>

</html>
