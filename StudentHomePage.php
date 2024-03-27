<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="studentstyle"> -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <title>Student Home</title>
</head>
<body>
    <style>
        :root {
    --primaryColor: #4c50d3;
    --secondaryColor: #ffce00;
    --fontColor: #1e1e1e;
    --whiteColor:#fff;
    --greyColor:#e7e7e7;
    --darkGreyColor: #5f5f5f;
    --sofPurple: #e7e8ff;
    --softBlue: #c3e1ff;
    --softYellow: #fff5cc;
    --softRed: #ffcbc8;
    }
    
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    font-family: 'Lato', sans-serif;
    }
    
    body {
    width: 100%;
    height: 100vh;
    display: flex;
    }
    
    .sidebar {
    width: 20%;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: space-between;
    padding: 2rem;
    background-color: var(--primaryColor);
    color: var(--whiteColor);
    position: fixed;
    left: 0;
    }
    
    .logo  {
    letter-spacing: 2;
    }
    
    .menus{
    display: flex;
    flex-direction: column;
    gap: 2rem;
    }
    
    .menus a{
    display: flex;
    align-items: center;
    color: var(--whiteColor);
    text-decoration: none;
     }
    
    .menus ion-icon{
    margin-right: 0.5rem;
    }
    
    .menus a:hover  {
    color: var(--secondaryColor);
    }
    
    .profile {
    display: flex;
    flex-direction: row;
    align-items: center;
    gap: 0.5rem;
    padding: 1rem;
    background-color: var(--whiteColor);
    color: var(--fontColor);
    border: none;
    border-radius: 10px;
    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    cursor: pointer;
    }
    
    .profile-img {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        }
    .profile:hover{
    background-color: var(--secondaryColor);
    }

    .profile-name p {
    font-size: 12px;
    }

    .main {
        width: calc(100% - 20% - 25%);
        min-height: 100%;
        min-width: 300px;
        height: max-content;
        display: flex;
        flex-direction: column;
        padding: 2rem 2%;
        margin-left: 20%;
        background-color: var(--sofPurple);
        z-index: 1
    }

    .main-header {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .menu-bar
    {
        background-color: var(--whiteColor);
        padding: 0.5rem;
        border-radius: 20px;
        display:none;
    }

    .search {
        width: 100%;
        display: flex;
        justify-content: space-betwwen;

    }

    .search {
        width: 100%;
        display: flex;
        justify-content: space-between;
        border: none;
        background-color: none;
        border-radius: 20px;
        padding: 0.5rem 1rem;
        position: relative;
        background-color: var(--whiteColor);
    }

    .search input {
        width: 90%;
        border: none;
    }

    .btn-search {
        position: absolute;
        right: 0;
        top: 0;
        height: 100%;
        padding: 0 5%;
        border: none;
        background-color: var(--primaryColor);
        color: var(--whiteColor);
        font-size: 18px;
        border-radius: 20px;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
        cursor: pointer;
    }

    .btn-search:hover {
        background-color: var(--secondaryColor);
        color: var(--fontColor);
        }

        .filter-wrapper {
        margin: 1rem 0;
        font-size: 14px;
        }

        .filter {
        display: flex;
        gap: 1rem;
        overflow-x: auto;
        margin: 0.5rem 0;
         }
        
        
        .btn-filter{
        min-width: 110px;
        padding: 0.5rem;
        border-radius: 20px;
        border: none ;
        background-color: var(--whiteColor);
        cursor: pointer;
        }

        .btn-filter:hover{
            background-color: var(--primaryColor);
            color: var(--whiteColor);
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }

            .sort {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 0.5rem;
            }
            
            .sort p {
            font-size: 14px;
            }
            
            .sort-list select{
            height: 1.5rem;
            border-radius: 20px;
            border: none;
            margin-top: 0 0.5rem;
            }

            .wrapper {
                width: 100%;
                display: flex;
                flex-direction: column;
                padding: 1rem 0;
                gap: 1rem;
                overflow-y: auto;
                }
                
                .card{
                display: flex;
                flex-wrap: wrap;
                flex-direction: row;
                align-items: flex-start;
                padding: 3%;
                margin: 0 1%;
                background-color: var(--whiteColor);
                line-height: 1.5;
                gap: 1.5rem;
                box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
                border-radius: 10px;
                cursor:pointer;
                }


                .card:hover{
                    box-shadow: rgba(0 ,0 ,0 , 0.24) 0px 3px 8px;
                }

                .card-left {
                    width: 10%;
                    min-width: 50px;
                    display: flex;
                    justify-content: center;
                    border-radius: 20%;
                    }
                    
                    .card-left img{
                    width: 100%;
                    height: auto;
                    min-height: 60px;
                    padding: 1rem;
                    }

                    .card-center {
                        width: 50%;
                    }
                    
                    .card-loc, .card-sub {
                    font-size: 13px;
                    color: var(--darkGreyColor);
                    }
                    
                    .card-sub{
                    display: flex;
                    flex-wrap: wrap;
                    }

                    .card-sub p{
                        display: flex;
                        padding: 00.5rem 0 0;
                        align-items: center;
                    } 

                    .card-right {
                        width: 15%;
                        }
                        
                        .card-tag a {
                        color: var(--fontColor);
                        font-size: 13px;
                        }
                        
                        .card-salary {
                        padding: 0.5rem 0;
                        color: var(--primaryColor);
                        }
                        
                        .card-salary span {
                        color: var(--fontColor);
                        }

                        .blue-bg{
                            background-color: var(--softBlue);
                        }

                        .yellow-bg{
                            background-color: var(--softYellow);
                        }

                        .red-bg{
                            background-color: var(--softRed);
                        }

                        .purple-bg{
                            background-color: var(--sofPurple);
                        }
                        
                        .detail {
                            width: 25%;
                            min-width: 250px;
                            height: 100%;
                            padding: 2rem;
                            position: fixed;
                            right: 0;
                            background-color: var(--whiteColor);
                            overflow: auto;
                            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
                            }

                            .close-detail{
                                display: none;
                            }

                            .detail-header{
                                display: flex;
                                flex-direction: column;
                                align-items: center;
                            }

                            .detail-header img {
                                width: 50px;
                                height: 50px;
                            }

                            .divider{
                                width: 100%;
                                height: 1px;
                                background-color: var(--greyColor);
                                border: none;   
                                margin: 1rem 0;
                            }

                            .detail-desc{
                                line-height: 1.5;
                            }

                            .about a {
                                margin: 0.5rem 0 0 0 ;
                                color: var(--primaryColor);
                                font-size: 14px;
                                text-decoration: none;
                                font-weight: 600;
                                cursor: pointer;
                            }

                            .detail-btn {
                                display: flex;
                                gap: 1rem;
                                margin: 1rem 0;
                            }

                                .btn-apply{
                                background-color: var(--primaryColor);
                                color: var(--whiteColor);
                                border: none;
                                padding: 10px 20px;
                                border-radius: 20px;
                                cursor:pointer; 
                                }

                                .btn-save{
                                    background-color: var(--secondaryColor);
                                    border: none;
                                    padding: 10px 20px;
                                    border-radius: 20px;
                                    cursor: pointer;
                                }

                                .btn-apply:hover{
                                    border: 1px solid var(--primaryColor);
                                    background-color: transparent;
                                    color: var(--primaryColor);
                                }

                                .btn-save:hover{
                                    background-color: 1px solid var(--secondaryColor);
                                    background-color: transparent;
                                }

                                .sidebar.active {
                                    display: flex;
                                    width: 220px;
                                    z-index: 100;
                                }

                                @media screen and (max-width:880px) {
                                    .menu-bar {
                                    display: block;
                                    }

                                    .sidebar {                                    
                                    display: none;
                                    }
                                
                                    .main {    
                                    width: calc(100% - 40%);
                                    margin-left: 0;
                                    }
                                    
                                    .detail {
                                    width: 40%;
                                    }
                                }

                                    @media screen and (max-width: 700px){
                                        .main{
                                            width:100%;
                                        }

                                        .detail{
                                            display: none;
                                        }

                                        .detail.active{
                                            display: block;
                                            width: 100%;
                                            z-index: 100;
                                        }

                                        .detail.active .close-detail {
                                            display: block;
                                            cursor: pointer;
                                        }

                                    @media screen and(max-width:480px) {
                                        .card-loc,.cars-sub,.card-tag{
                                            display: none;
                                        }
                                    }
                                }
                                

    </style>
   <div class="sidebar">
        <h1 class="logo">JobsPlace</h1>
        <div class="menus">
            <a href="#"><ion-icon name="home-outline"></ion-icon>Home</a>
            <a href="#"><ion-icon name="newspaper-outline"></ion-icon>Find Jobs</a>
            <a href="#"><ion-icon name="stats-chart-outline"></ion-icon>Resource</a>
            <a href="#"><ion-icon name="bookmarks-outline"></ion-icon>Bookmarks</a>
            <a href="#"><ion-icon name="mail-unread-outline"></ion-icon>Message</a>
            <a href="#"><ion-icon name= "settings-outline"></ion-icon>Setting</a>
        </div>
        <div class="profile">
            <img class="profile-img" src="images/profile.jpeg">
            <div class="profile-name">
                <h4>Albert Einstein</h4>
                <p>Data Science</p>
            </div>
        </div>
    </div>
 <div class="main">
    <div class="main-header">
        <ion-icon class="menu-bar" name="menu-outline"></ion-icon>
        <div class="search">
            <input type="text" placeholder="Search your best jobs here...">
            <button class="btn-search"><ion-icon name="search-outline"></ion-icon></button>
        </div>
    </div>
    <div class="filter-wrapper">
        <p>Recommendation</p>
        <div class="filter">
        <button class="btn-filter">Data Science</button>
        <button class="btn-filter">Data Engineer</button>
        <button class="btn-filter">Data Analyst</button>
        <button class="btn-filter">Data Visualization</button>
        <button class="btn-filter">CRM Analyst</button>
    </div>
 </div>
<div class="sort">
    <p>Sort</p>
    <div class="sort-list">
        <select>
            <option value="0">All</option>
            <option value="1">Newest Post</option>
            <option value="2">Oldest Post</option>
            <option value="3">Most Relevant</option>
            <option value="4">Highest Paid</option>
        </select>
    </div>
</div>
<div class="wrapper">
      <div class="card">
        <div class="card-left blue-bg">
            <img src="images/google.svg">
        </div>
        <div class="card-center">
            <h3>Google</h3>
            <p class="card-detail">Data Science, Data Engineer</p>
            <p class="card-loc"><ion-icon name="location-outline"></ion-icon> Abcd street</p>
            <div class="card-sub">
            <p><ion-icon name="today-outline"></ion-icon> 1 mins ago</p>
            <p><ion-icon name="hourglass-outline"></ion-icon> Full-time</p>
            <p><ion-icon name="people-outline"></ion-icon> 200 Applicants</p>
            </div>
            </div>
    <div class="card-right">
        <div class="card-tag">
        <h5>Division</h5>
        <a href="#">Data Engineer</a>
        </div>
        <div class="card-salary">
        <p><b>$350k</b> <span>/ year</span></p>
        </div>
        </div>
        </div>


        <div class="card">
            <div class="card-left yellow-bg">
                <img src="images/Tik Tok.jpeg">
            </div>
            <div class="card-center">
                <h3>Tik Tok</h3>
                <p class="card-detail">Data Analyst,Product Analyst</p>
                <p class="card-loc"><ion-icon name="location-outline"></ion-icon> Abcd street</p>
                <div class="card-sub">
                <p><ion-icon name="today-outline"></ion-icon> 10 mins ago</p>
                <p><ion-icon name="hourglass-outline"></ion-icon> Full-time</p>
                <p><ion-icon name="people-outline"></ion-icon> 130 Applicants</p>
                </div>
                </div>
        <div class="card-right">
            <div class="card-tag">
            <h5>Division</h5>
            <a href="#">Data Science</a>
            </div>
            <div class="card-salary">
            <p><b>$200k</b> <span>/ year</span></p>
            </div>
            </div>
            </div>


            <div class="card">
                <div class="card-left red-bg">
                    <img src="Images/youtubelogo.png">
                </div>
                <div class="card-center">
                    <h3>You Tube</h3>
                    <p class="card-detail">Data Analyst,Product Analyst</p>
                    <p class="card-loc"><ion-icon name="location-outline"></ion-icon> Abcd street</p>
                    <div class="card-sub">
                    <p><ion-icon name="today-outline"></ion-icon> 1 hour ago</p>
                    <p><ion-icon name="hourglass-outline"></ion-icon> Full-time</p>
                    <p><ion-icon name="people-outline"></ion-icon> 240 Applicants</p>
                    </div>
                    </div>
            <div class="card-right">
                <div class="card-tag">
                <h5>Division</h5>
                <a href="#">Engineer, Product</a>
                </div>
                <div class="card-salary">
                <p><b>$250k</b> <span>/ year</span></p>
                </div>
                </div>
                </div>


                <div class="card">
                    <div class="card-left purple-bg">
                        <img src="images/Apple_logo_grey.svg.png">
                    </div>
                    <div class="card-center">
                        <h3>You Tube</h3>
                        <p class="card-detail">UI Ux Designer</p>
                        <p class="card-loc"><ion-icon name="location-outline"></ion-icon> Abcd street</p>
                        <div class="card-sub">
                        <p><ion-icon name="today-outline"></ion-icon> 1 hour ago</p>
                        <p><ion-icon name="hourglass-outline"></ion-icon> Full-time</p>
                        <p><ion-icon name="people-outline"></ion-icon> 175 Applicants</p>
                        </div>
                        </div>
                <div class="card-right">
                    <div class="card-tag">
                    <h5>Division</h5>
                    <a href="#">Designer App</a>
                    </div>
                    <div class="card-salary">
                    <p><b>$230k</b> <span>/ year</span></p>
                    </div>
                    </div>
                    </div>

                    <div class="card">
                        <div class="card-left blue-bg">
                            <img src="images/amazon.jpeg">
                        </div>
                        <div class="card-center">
                            <h3>You Tube</h3>
                            <p class="card-detail">UI Ux Designer</p>
                            <p class="card-loc"><ion-icon name="location-outline"></ion-icon> Abcd street</p>
                            <div class="card-sub">
                            <p><ion-icon name="today-outline"></ion-icon> 1 hour ago</p>
                            <p><ion-icon name="hourglass-outline"></ion-icon> Full-time</p>
                            <p><ion-icon name="people-outline"></ion-icon> 175 Applicants</p>
                            </div>
                            </div>
                    <div class="card-right">
                        <div class="card-tag">
                        <h5>Division</h5>
                        <a href="#">Designer App</a>
                        </div>
                        <div class="card-salary">
                        <p><b>$230k</b> <span>/ year</span></p>
                        </div>
                        </div>
                        </div>
                
        </div>
</div>

<div class="detail">
   <ion-icon class="close-detail" name="close-outline"></ion-icon> 
   <div class="detail-header">
    <img src="images/google.svg">
    <h2>Google</h2>
    <p>Data Science</p>
   </div>
   <hr class="divider">
   <div class="detail-desc">
    <div class="about">
        <h4>About Company</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci voluptates accusamus iusto optio provident? Quam praesentium, itaque tempore beatae sit, ipsum, voluptate incidunt
             sed officia qui doloremque expedita ipsam nobis.</p>
        <a href="#">Read more</a>
    </div>
</div>

<hr class="divider">
<div class="qualification">
<h4>Qualification</h4>
<ul>
<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
<li>Nobis sint voluptas ducimus, reprehenderit tempore eveniet repudiandae accusan</li>
<li>Ipsum expedita commodi quod iusto maxime rerum dolores sint voluptas ducimus </li>
</ul>
</div>
<hr class="divider">
<div class="detail-btn">
    <button class="btn-apply">Apply Now</button>
    <button class="btn-save">Save Jobs</button>
</div>
</div>





</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>  
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="app.js"></script>  
</html>