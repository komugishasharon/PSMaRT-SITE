<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <link rel="stylesheet" href="css/dashboard.css">
        <link rel="icon" href="/psmart/logo.png" type="image/png">
        <title>Dasboard</title>

    </head>
    <body>
        <input type="checkbox" id="nav-toggle">
        <div class="sidebar">
            <div class="sidebar-brand">

                <h1><span class="lab la-psmart"><img src="/psmart/psmartlogo.png" width="70px" /></span></h1>
            </div>
            <div class="sidebar-menu">
                <ul>
                    <li>
                        <a href="dashboard"><span class="las la-igloo"></span>
                            <span>Dashboard</span></a>
                    </li>
                    <li>
                        <a href="student" ><span class="las la-user"></span>
                            <span>Student</span></a>
                    </li>
                    <li>
                        <a href=""><span class="las la-user"></span>
                            <span>Teacher</span></a>
                    </li>
                    <li>
                        <a href="{{ route('class') }}" class="active"><span class="las la-users"></span>
                            <span>Class</span></a>
                    </li>
                    <li>
                        <a href="attendance"><span class="las la-clipboard-list"></span>
                            <span>Attendance</span></a>
                    </li>
                    <li>
                        <a href="report"><span class="las la-file-alt"></span>
                            <span>Report</span></a>
                    </li>
                    <li>
                        <a href="library"><span class="las la-school"></span>
                            <span>Library</span></a>
                    </li>

                </ul>
            </div>

        </div>
        <div class="main-content">
            <header>
                <h2>
                    <label for="nav-toggle">
                        <span class="las la-bars"></span>
                    </label>
                    Class
                </h2>
                <div class="search-wrapper">
                    <span class="las la-search"></span>
                    <input type="search" placeholder="Search here"/>
                </div>
                <div class="user-wrapper">
                    <img src="" width="100%" height="100%">

                </div>
                <div class="dropdown">
                    <span class="las la-chevron-down"></span>
                    <div class="dropdown-content">
                      <a href="{{ route('logout') }}">Logout</a>
                    </div>
                  </div>
            </header>
            <main>

            </main>

        </div>

    </body>
</html>
