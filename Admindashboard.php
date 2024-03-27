<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <style>
        .dropbtn {
  color: white;
  font-size: 16px;
  border: none;
}
.dropbtn:hover{
    color: #299b63;
}
.dropdown {
  position: relative;
  width: 100px;
    text-decoration: none;
    color: #fff;
    height: 60px;
    display: flex;
    align-items: center;
}
.dropdown:hover{
    color: #299b63;
}

.dropdown i
{
    min-width: 65px;
    font-size: 30px;
    text-align: center;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-height: 150px;
  min-width: 160px;
  margin-left: 30%;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  margin-top: 220px;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;color:black;min-width:160px;}

.dropdown:hover .dropdown-content {display: block;}
    </style>
</head>
<body>
    <div class="container">
        <div class="topbar">
            <div class="logo">
                <img src="Images/homepage_logo.png" alt="">
            </div>
            <div class="search">
                <input type="search" id="searchBar" placeholder="search here">
                <label for="search"><i class="fas fa-search"></i></label>
            </div>
            <i class="fas fa-bell" id="notifi" ></i>
            <div class="user">
                <img src="Images/user.png" alt="">
            </div>
        </div>
        <div class="toggle">
            <ul>
                <li>
                    <a href="#">
                        <i class="fas fa-th-large"></i>
                        <div>DashBoard</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-user-graduate"></i>
                        <div>Student</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <div>Mentors</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-regular fa-building"></i>
                        <div>Companies</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-pen"></i>
                        <div>Post</div>
                    </a>
                </li>
                <li>
                        <div class="dropdown">
                            <i class="fas fa-key"></i>
                            <div class="dropbtn">Login's</div>
                            <div class="dropdown-content">
                              <a href="authorizationadmin.php" style="color:black;">Company</a>
                              <a href="authorizationadmin.php" style="color:black;">Admin</a>
                              <a href="authorizationadmin.php" style="color:black;">Student</a>
                            </div>
                        </div>
                </li>
               
                <li style="margin-top: 168px;">
                    <a href="#">
                        <i class="fas fa-cog"></i>
                        <div>Setting</div>
                    </a>
                </li>
                <li>
                    <a href="AdminLoginpage.php">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <div>Logout</div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main">
            <div class="cards">
                <div class="card">
                    <div class="card-content">
                        <div class="number">1300</div>
                        <div class="card-name">Students</div>
                    </div>
                    <div class="icon-box">
                        <i class="fa-solid fa-user-graduate"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">40</div>
                        <div class="card-name">Teachers</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-person-chalkboard"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">13</div>
                        <div class="card-name">Companies</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-building"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">57</div>
                        <div class="card-name">Post</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-pen"></i>
                    </div>
                </div>
            </div>
            
             <div class="charts">
                <div class="charts"></div>
                <div class="new-student"></div> 
            </div> 
        </div>
        
        </div>
   </div>
 </div>
</body>
</html>