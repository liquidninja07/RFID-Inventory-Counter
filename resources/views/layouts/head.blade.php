<style>
body {
  overflow-x: hidden;
}

@font-face { font-family: 'Glyphicons Halflings'; src: url("../fonts/bootstrap/glyphicons-halflings-regular.eot"); src: url("../fonts/bootstrap/glyphicons-halflings-regular.eot?#iefix") format("embedded-opentype"), url("../fonts/bootstrap/glyphicons-halflings-regular.woff2") format("woff2"), url("../fonts/bootstrap/glyphicons-halflings-regular.woff") format("woff"), url("../fonts/bootstrap/glyphicons-halflings-regular.ttf") format("truetype"), url("../fonts/bootstrap/glyphicons-halflings-regular.svg#glyphicons_halflingsregular") format("svg"); }

#wrapper {
  padding-left: 0;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

#wrapper.toggled {
  padding-left: 250px;
}

#sidebar-wrapper {
  z-index: 1000;
  position: fixed;
  left: 250px;
  width: 0;
  height: 100%;
  margin-left: -250px;
  overflow-y: auto;
  background: #000;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

#wrapper.toggled #sidebar-wrapper {
  width: 250px;
}

#page-content-wrapper {
  width: 100%;
  position: absolute;
  padding: 15px;
}

#wrapper.toggled #page-content-wrapper {
  position: absolute;
  margin-right: -250px;
}


/* Sidebar Styles */

.sidebar-nav {
  position: absolute;
  top: 0;
  width: 250px;
  margin: 0;
  padding: 0;
  list-style: none;
}

.sidebar-nav li {
  text-indent: 20px;
  line-height: 40px;
}

.sidebar-nav li a {
  display: block;
  text-decoration: none;
  color: #999999;
}

.sidebar-nav li a:hover {
  text-decoration: none;
  color: #fff;
  background: rgba(255, 255, 255, 0.2);
}

.sidebar-nav li a:active, .sidebar-nav li a:focus {
  text-decoration: none;
}

.sidebar-nav>.sidebar-brand {
  height: 65px;
  font-size: 18px;
  line-height: 60px;
}

.sidebar-nav>.sidebar-brand a {
  color: #999999;
}

.sidebar-nav>.sidebar-brand a:hover {
  color: #fff;
  background: none;
}

@media(min-width:768px) {
  #wrapper {
    padding-left: 0;
  }
  #wrapper.toggled {
    padding-left: 250px;
  }
  #sidebar-wrapper {
    width: 0;
  }
  #wrapper.toggled #sidebar-wrapper {
    width: 250px;
  }
  #page-content-wrapper {
    padding: 20px;
    position: relative;
  }
  #wrapper.toggled #page-content-wrapper {
    position: relative;
    margin-right: 0;
  }
}

</style>
<div id="wrapper" class="toggled">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Start Bootstrap
                    </a>
                </li>
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Shortcuts</a>
                </li>
                <li>
                    <a href="#">Overview</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <h1>Simple Main Page</h1>
                <p>This is a simple page to display dummy date from the mysql database. The rest of the words will be jibberish to fill in the space and take up more room on the screen. More data will be on its way soon!</p>
                <p>We will now being displaying data from mysql and showing what it would look like with the rfid program running at the same time.</p>
                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Toggle Menu</a>

              </br>
              </br>

                <div class="container">
                  <div class="container">
                  <div class="row">
                    <div class="table table-responsive">
                      <table class="table table-bordered" id="table">
                        <tr>
                          <th>ID</th>
                          <th>UID</th>
                          <th>Make</th>
                          <th>Model</th>
                          <th class="text-center" width="150px">
                            <a href="#" class="create-model btn btn-success btn-sm">
                              <i class="glyphicon glyphicon-plus"></i>
                            </a>
                          </th>
                        </tr>

                        @foreach($data as $value)
                          <tr>
                            <td> {{$value->ID}} </td>
                            <td> {{$value->uid}} </td>
                            <td> {{$value->Make}} </td>
                            <td> {{$value->Model}} </td>
                            <td class="text-center"> <a href="#" class="create-model btn btn-success btn-sm">
                              <i class="glyphicon glyphicon-plus"></i>
                            </a> </td>
                          </tr>
                        @endforeach
                      </table>
                    </div>
                  </div>
                </div>
              </div>

            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
