<div class="wrapper">
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>RestBar</h3>
            <strong>RB</strong>
            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                <a id="toggle-btn" href="#" class="menu-btn active">
                <span></span>
            </button>
        </div>
       

        <ul class="list-unstyled components">
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                    <i class="glyphicon glyphicon-home"></i>
                    Home
                </a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li><a href="#">Home 1</a></li>
                    <li><a href="#">Home 2</a></li>
                    <li><a href="#">Home 3</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="glyphicon glyphicon-briefcase"></i>
                    About
                </a>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                    <i class="glyphicon glyphicon-duplicate"></i>
                    Pages
                </a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li><a href="#">Page 1</a></li>
                    <li><a href="#">Page 2</a></li>
                    <li><a href="#">Page 3</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="glyphicon glyphicon-link"></i>
                    Portfolio
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="glyphicon glyphicon-paperclip"></i>
                    FAQ
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="glyphicon glyphicon-send"></i>
                    Contact
                </a>
            </li>
        </ul>

        <ul class="list-unstyled CTAs">
            <li><a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a></li>
            <li><a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a></li>
        </ul>
    </nav>

    <!-- Page Content Holder -->
    <div id="content">

        <nav class="navbar navbar-default">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                        <i class="glyphicon glyphicon-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Page</a></li>
                        <li><a href="#">Page</a></li>
                        <li><a href="#">Page</a></li>
                        <li><a href="#">Page</a></li>
                    </ul>
                </div>
            </div>
        </nav>

