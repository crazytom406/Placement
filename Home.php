<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"  />
    <title>Document</title>
</head>
<body>
    <style>
       @import url('https://fonts.googleapis.com/css2?family=Poppins&family=Protest+Strike&display=swap');
       *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
       }
       html{
         scroll-behavior: smooth;
       }
       body{
            font-family: 'Poppins', sans-serif;
       }

       h1{
        font-size: 2.5rem;
        font-weight: 700;
        color: rgb(35, 35, 85);
       }
       span{
        font-size: .9rem;
        color: #757373;

       }
       h6{
        font-size: 1.1rem;
        color: rgb(24, 24, 49);
       }
        nav{
            position: fixed;
            width: 100%;
            background-color: white;
            padding: 1vw 8vw;
            display: flex;
            flex-direction: row;
            text-align: center;
            justify-content: space-between;
            box-shadow: 2px 2px 10px rgb(0, 0, 0.15);
            
        }
        nav img{
            width: 250px;
            cursor: pointer;
            margin-right: 20px;
        }
        nav .navigation ul{
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }
        nav .navigation ul li{
            list-style: none;
            margin-left: 30px;
        }
        nav .navigation ul li a{
            text-decoration: none;
            color: rgb(21, 21, 100);
            font-weight: 500;
            font-size: 16px;
            transition: 0.3s ease;
        }
        nav .navigation ul li a.home,
        nav .navigation ul li a:hover{
            color: #FDC93B;
        }

        .dropdown {
            float: left;
            overflow: hidden;
            
        }
        .dropdown .dropbtn {
            font-size: 16px;  
            border: none;
            outline: none;
            color: black;
            cursor: pointer;
            padding: 14px 10px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }
        .dropdown :hover{
            color: #FDC93B;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: whitesmoke;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* home style */
        .section{
            background-image: linear-gradient(rgba(9,5,54,0.3),rgba(5,4,46,0.7)),url(Images/collage2.jpg);
            width: 100%;
            height: 100vh;
            background-size: cover;
            background-position: center;
            display: flex;
            padding-top: 40px;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding-top: 20px;
        }
        .section h2{
            color: #fff;
            font-size: 2.2rem;
            letter-spacing: 1px;
        }
        .section p{
            color: #fff;
            width: 50%;
            font-size: 0.9rem;
            line-height: 25px;
            letter-spacing: 1px;
        }
        .section a{
            text-decoration: none;
            font-size: 0.9rem;
            padding: 13px 35px;
            background-color: #fff;
            font-weight: 600;
            border-radius: 5px;
        }
        .section .btn{
            margin-top: 25px;
           

        }
        .section a.blue{
            color: #fff;
            background-color: rgb(21, 21, 100);
            transition: 0.3s ease;

        }
        .section a.blue:hover{
            color:rgb(21, 21, 100);
            background-color: #fff;

        }
        .section a.yellow{
            color: #fff;
            background-color: #FDC93B;
            transition: 0.3s ease;

        }
        .section a.yellow:hover{
            color:rgb(21, 21, 100);
            background-color: #fff;

        }

        /* features */
        .features{
            padding: 5vw 8vw 0 8vw;
            text-align: center;
        }
        .features h2{
            font-family: 'Poppins', sans-serif;
            text-align: center;
            font-weight: 600;
            letter-spacing: 2px;
            color: rgb(21, 21, 100);
        }
        .features .fea-base{
           display: grid;
           margin-top: 40px;
           grid-template-columns: repeat(auto-fit,minmax(220px,1fr));
           grid-gap: 1.5rem;
        }
        
        .features .fea-box{
            background: #F9F9FF;
            text-align: start;
        }
       
        .features .fea-box h3{
            font-size:1.2rem;
            font-weight: 600;
            color: rgb(46, 46, 59);
            padding: 13px 0 7px 0 ; 

        }
        .features .fea-box p{
            font-size:1rem;
            font-weight: 400;
            color: rgb(70,70,87);
            
        }

        /* profile */
        .features{
            padding: 8vw 8vw 0 8vw;
            text-align: center;
            
        }
        .features .expert-box{
            display: grid;
            grid-template-columns: repeat(auto-fit,minmax(250px,1fr));
            grid-gap: 1rem;
            margin-top: 50px;
        }
        .features .expert-box .profile{
            background-color: #fafaf1;
            padding: 30px 10px;

        }
        .pro-links{
            margin-top: 10px;
        }
        .pro-links i {
            padding: 10px 13px;
            border: 1px solid rgb(21, 21, 100);
            cursor: pointer;
            transition: 0.3s ease;
        }
        .pro-links i:hover {
            background-color: rgb(21, 21, 100);
            color: #fff;
            border:1px solid rgb(21, 21, 100);
        }



        /* companies */
        /* .companies-cont{
            padding: 8vw;
            display: flex;
            justify-content: space-between;
            align-items: center;
            text-align: center;
            flex-wrap: wrap;
         }
         .companies-cont h2{
           text-align: center;
           margin: 10px 0;
           margin-left: 45%;
           font-family: 'Poppins', sans-serif;
           justify-content: center;
           font-weight: 600;
           color: rgb(21, 21, 100);
         }
        .img-container {
            margin: 10px 40px;
            float: left;
            margin-top: 10px;
        }
         */

        /* footer */
        footer{
            padding: 7vw;
            margin: 0;
            margin-top: 40px;
            background-color: #101c32;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap;

        }
        footer .footer-col{
            padding-bottom: 40px;
        }

        footer h3{
            color:#FDC93B;
            font-weight: 600;
            padding-bottom: 20px;

        }
        footer li{
            list-style: none;
            color: #7b838a;
            padding: 10px 0;
            font-size: 15px;
            cursor: pointer;
            transition: 0.3s ease;
        }
        footer li:hover{
            color: rgb(241, 240, 245);
        }
        footer h4{
            color:white;
            font-weight: bold;
            margin: 5px 0;
        }
        footer p{
            color: whitesmoke;
        }
        footer .queries{
            margin-top: 20px;
        }
        footer #query-box{
            padding: 15px 12px;
            background: #334f6c;
            border: none;
            font-size: 12px;
            outline: none;
            color: #fff;
        }
        footer .queries a{
            text-decoration: none;
            font-size: 0.9rem;
            padding: 13px 15px;
            background-color: #fff;
            font-weight: 600;
            border-radius: 5px;
        }
        footer .queries a.yellow{
            color: #fff;
            background:#FDC93B;
            transition: 0.3s ease;

        }
        footer .queries a.yellow:hover{
            color: rgb(21,21,100);
            background: #fff;
        }
    </style>
    <nav>
        <img src="Images/homepage_logo.png" alt="">
        <div class="navigation">
            <ul>
                <li><a class="home" href="#home">Home</a></li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn">Login
                          <i class="dropdown_i"></i>
                        </button>
                        <div class="dropdown-content">
                          <a class="items" href="LoginPage.php">Student</a>
                          <a class="items" href="AdminLoginpage.php">Admin</a>
                          <a class="items" href="CompanyLogin.php">Company</a>
                        </div>
                    </div>
                </li>
                <li><a  href="Aboutus.php">About</a></li>
                <li><a href="#section1">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- home -->
   <section id="home" class="section">
        <!-- <video autoplay muted loop src="bgvideo.mp4"></video> -->
        
        <h2>One Paper Cannot Decide Future</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, sequi alias eius accusantium iusto hic laborum sunt voluptatibus porro, culpa dolor officia rerum dolores sint excepturi fugiat mollitia corrupti? Minus incidunt atque ipsa vitae nostrum quae repudiandae in autem magni?</p>
        <div class="btn">
            <a class="blue" href="#">Learn More</a>
            <a class="yellow" href="https://www.sju.edu.in/placements">Visit placement cell</a>
        </div>
   </section>

   <!-- Features -->
   <section class="features">
        <h1>Features Of Placement Cell of SJU</h1>
        <p>Start you carrer with our SJU</p>
        <div class="fea-base">
            <div class="fea-box">
                <img src="Images/book.png" height="40px" width="40px" >
                <h3>Skill Enhance Course</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, tenetur sed. Minima architecto odio aut corporis iure qui voluptatem corrupti?</p>
            </div>
            <div class="fea-box">
                <img src="Images/learning.png" height="40px" width="40px">
                <h3>Course</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, tenetur sed. Minima architecto odio aut corporis iure qui voluptatem corrupti?</p>
            </div>
            <div class="fea-box">
                <img src="Images/lesson.png" height="40px" width="40px">
                <h3>Training</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, tenetur sed. Minima architecto odio aut corporis iure qui voluptatem corrupti?</p>
            </div>
            <div class="fea-box">
                <img src="Images/internship.png" height="40px" width="40px">
                <h3>Internship</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, tenetur sed. Minima architecto odio aut corporis iure qui voluptatem corrupti?</p>
            </div>
        </div>

   </section>
   <section class="features">
        <h1>Our Placement Team</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam ipsa doloribus maiores ipsam omnis adipisci.</p>
        <h2>Introduction</h2>
        <p style="justify-content: center; text-align: center;">St. Joseph’s College is a legacy; it’s an institution that has stood of the test of time. Since 1882 this college has been making and men and women for other. This college stands on three pillars, academic excellence, Character formation and Social Concern. Out students are embodied with these values and they resonate the same as they pass out of college and take up careers in various walks of life. Alumni/Alumnus of this college is from all over the world in various positions, Governmental, Non-Governmental, International and National organizations, and Corporate etc. Hiring and working with a Josephite for sure will be a great experience. The College believes that establishing links between education and labor market is an important motivator for undergraduate and postgraduate students pursuing their education. The Office of Student Placement and Skill Development works primarily towards providing an opportunity for our students to the world of employment/entrepreneurship and to discover new career options for the enhancement of the larger good of self and the world. As a College of Excellence (UGC), St. Joseph’s College is a place where innovation blends with our time-tested tradition.</p>
        <div class="expert-box">
            <div class="profile">
                <img src="Images/cir4-removebg-preview.png" height="150px" width="150px"   alt="cr7">
                <h6>Cristiano Ronaldo</h6>
                <p>Football Expert</p>
                <div class="pro-links">
                    <i class="fa-regular fa-envelope"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-linkedin-in"></i>
                </div>
            </div>
            <div class="profile">
                <img src="Images/cir1-removebg-preview (1).png" height="150px" width="150px" alt="cr7">
                <h6>Cristiano Ronaldo</h6>
                <p>Football Expert</p>
                <div class="pro-links">
                    <i class="fa-regular fa-envelope"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-linkedin-in"></i>
                </div>
            </div>
            <div class="profile">
                <img src="Images/cir2-removebg-preview.png" height="150px" width="150px"  alt="cr7">
                <h6>Cristiano Ronaldo</h6>
                <p>Football Expert</p>
                <div class="pro-links">
                    <i class="fa-regular fa-envelope"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-linkedin-in"></i>
                </div>
            </div>
            <div class="profile">
                <img src="Images/cir3-removebg-preview.png" height="150px" width="150px" alt="cr7">
                <h6>Cristiano Ronaldo</h6>
                <p>Football Expert</p>
                <div class="pro-links">
                    <i class="fa-regular fa-envelope"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-linkedin-in"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- companies -->
<!-- <section class="companies-cont">
    <h2 class="comph2">COMPANIES</h2><br>
 <div class="clearfix">
  <div class="img-container">
  <img src="Images/Infosys.png" alt="tata" width="150px" height="150px">
  </div>
  <div class="img-container">
  <img src="Images/Mahendra.png" alt="amazon" width="150px" height="150px">
  </div>
  <div class="img-container">
  <img src="Images/TCS.png" alt="google" width="150px" height="150px">
  </div>
  <div class="img-container">
    <img src="Images/TCS.png" alt="google" width="150px" height="150px">
  </div>
  <div class="img-container">
    <img src="Images/TCS.png" alt="google" width="150px" height="150px">
    </div>
</section> -->
    
    <!-- footer -->
    <footer id="section1">
        <div class="footer-col">
            <h3>Contact</h3>
            <h4>Address :</h4>
            <p>St Joseph's University,<br>
               36 Lalbagh Road,<br> 
               Bengaluru-560027, Karnataka, India</p>
            <h4>Phone :</h4>
            <p>Reception: 08022274079</p>
            <h4>Email :</h4>
            <p>desk@sju.edu.in</p>
            <p>placement@sju.edu.in</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.1476003092102!2d77.59386127484123!3d12.962405487352159!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae15d9fddb0f15%3A0xdec852132523ceae!2sSt%20Joseph&#39;s%20University!5e0!3m2!1sen!2sin!4v1707668196513!5m2!1sen!2sin" width="400" height="200" style="border:0; margin-top: 30px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="footer-col">
            <h3>Quick Access</h3>
            <li>Student Login</li>
            <li>Company Login</li>
            <li>Admin Login</li>
            <li>Libary</li>
        </div>
        <div class="footer-col">
            <h3>The University</h3>
            <li>About the University</li>
            <li>Vision and Mission</li>
        </div>
        <div class="footer-col">
            <h3>Queries</h3>
            <p>Questions regarding placement cell and other queries</p>
            <div class="queries">
                <textarea id="query-box" name="query" rows="10"  cols="50"></textarea><br><br>
                <a href="#" class="yellow">Submit</a>
            </div>
        </div>
        </div>
    </footer>
    </body>
</html>