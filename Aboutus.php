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
            z-index: 2;
            
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
        .about-section{
            background-image: linear-gradient(rgba(9,5,54,0.3),rgba(5,4,46,0.7)),url(Images/background.jpg);
            width: 100%;
            height: 60vh;
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding-top: 40px;
        }
        .about-section h2{
            color: #fff;
            font-size: 1.9rem;
            letter-spacing: 1px;
        }
        /* introduction */
        #about-container{
            display: flex;
            align-items: center;
            padding: 8vw 8vw 2vw 8vw;
        }

        #about-container .about-img img{
            height: 110h;
            width: 110vh;
        }
   
        #about-container .about-text h2{
            color: #29303b;
            padding: 10px ;
            font-size: 23px;
        }
        #about-container .about-text p{
            color: #686f7a;
            padding: 5px;
            font-weight: 300;
        }

        #about-container .about-text .about-fe{
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-top: 30px;
        }

        #about-container .about-text .about-fe img{
            width: 50px;
            background-size: cover;
            background-position: center;
            margin-right: 20px;
        }
        #about-container .about-text .about-fe .fe-text{
            width: 90%;
        }
        #about-container .about-text .about-fe .fe-text h5{
            font-size: 16px;
            color: #29303b;
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
        @keyframes slide {
  from {
    transform: translateX(0);
  }
  to {
    transform: translateX(-100%);
  }
}

.logos {
  overflow: hidden;
  padding: 60px 0;
  background: white;
  white-space: nowrap;
  position: relative;
  margin-top: 30px;
}

.logos:before,
.logos:after {
  position: absolute;
  top: 0;
  width: 250px;
  height: 100%;
  content: "";
  z-index: 2;
}

.logos:before {
  left: 0;
  background: linear-gradient(to left, rgba(255, 255, 255, 0), transparent);
}

.logos:after {
  right: 0;
  background: linear-gradient(to right, rgba(255, 255, 255, 0), transparent);
}

.logos:hover .logos-slide {
  animation-play-state: paused;
}

.logos-slide {
  display: inline-block;
  animation: 35s slide infinite linear;
}

.logos-slide img {
  height: 80px;
  margin: 0 40px;
}
        

        /* footer */
        footer{
            padding: 7vw;
            margin: 0;
            margin-top: 5px;
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
                <li><a  href="Home.php">Home</a></li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn">Login
                          <i class="dropdown_i"></i>
                        </button>
                        <div class="dropdown-content">
                          <a class="items" href="LoginPage.php">Student</a>
                          <a class="items" href="LoginPage.php">Admin</a>
                          <a class="items" href="LoginPage.php">Company</a>
                        </div>
                    </div>
                </li>
                <li><a  class="home" href="#">About</a></li>
                <li><a href="#section1">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- home -->
   <section id="about-home" class="about-section">
       <h2>About Joseph’s /</h2>
    </section>


    <!-- introduction -->
   <section id="about-container">
    <div class="about-img">
        <img src="Images/template1.jpg" alt="">
    </div>
    <div class="about-text">
        <h2>Welcome to St.Joseph's<br>Enhance your career prospects through Joseph's Placement Cell</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto facilis perferendis illo enim labore neque non, optio atque officiis porro.</p>
        <div class="about-fe">
             <!-- icon images -->
             <img src="Images/teacher1.png" alt="">
            <div class="fe-text">
                <h5>50+ Companies</h5>
                <p>We have good opportunity and well trained co-ordinators to give proper guideness </p>
            </div>
        </div>
        <div class="about-fe">
            
           <img src="Images/teacher1.png" alt="">
           <div class="fe-text">
               <h5>50+ Companies</h5>
               <p>We have good opportunity and well trained co-ordinators to give proper guideness </p>
           </div>
       </div>
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
    <div class="logos"> 
        <h2 style="font-weight: 600; color: black; font-size: 24px; text-align: center; margin-bottom: 50px;">OUR TRUSTED PARTNER</h2>
        <div class="logos-slide">
          <img src="Images/TCS.png" />
          <img src="Images/Mahendra.png" />
          <img src="Images/Infosys.png" />
          <img src="Images/facebook.avif" />
          <img src="Images/ibm1.jpeg" />
          <img src="Images/zoho.png" />
          <img src="Images/google.jpg" />
          <img src="Images/amazon.webp" />
        </div>
  
        <div class="logos-slide">
            <!-- <img src="Images/ril.jpg" /> -->
            <img src="Images/BMW.png" />
            <img src="Images/meta.jpeg" />
            <img src="Images/micro.png" />
            <img src="Images/sap.png" />
            <img src="Images/Accenture.jpg" />
            <img src="Images/Wipro.png" />
            <img src="Images/Paytm.wine.png" />
          </div>
      </div>

    
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