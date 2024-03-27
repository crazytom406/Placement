<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profiles</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
            margin: 0;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 36px; /* Increase font size */
            text-transform: uppercase; /* Convert to uppercase */
            letter-spacing: 2px; /* Add letter spacing */
            border-bottom: 2px solid #333; /* Add underline */
            padding-bottom: 10px; /* Add space below the title */
        }
        .menu-bar {
            background-color: #333;
            overflow: hidden;
        }
        .menu-bar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        .menu-bar a:hover {
            background-color: #ddd;
            color: black;
        }
        .students {
            margin: 0 auto;
            list-style: none;
            padding: 0;
        }
        .student {
            margin-bottom: 20px;
            box-sizing: border-box;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .student:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        .student img {
            width: 200px; /* Adjust width as needed */
            height: 200px; /* Make image square */
            object-fit: cover; /* Ensure the image covers the entire space */
            border-radius: 5px; /* Optional: add some border-radius */
            margin-bottom: 20px;
        }
        .description {
            text-align: left;
        }
        .subtitle {
            font-style: italic;
            color: #666;
            margin-bottom: 5px;
        }
        .description p {
            line-height: 1.6;
            margin-bottom: 20px;
        }
        .read-more,
        .shortlist,
        .contact {
            background-color: #28a745; /* Green color */
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            margin-right: 10px; /* Add space between buttons */
            transition: background-color 0.3s;
        }
        .read-more:hover,
        .shortlist:hover,
        .contact:hover {
            background-color: #218838; /* Darker green on hover */
        }
        .read-more::after,
        .shortlist::after,
        .contact::after {
            content: '';
            display: block;
            position: absolute;
            width: 0;
            height: 2px;
            background-color: #fff;
            transition: width 0.3s;
        }
        .read-more:hover::after,
        .shortlist:hover::after,
        .contact:hover::after {
            width: 100%;
        }
        .read-more:hover,
        .shortlist:hover,
        .contact:hover {
            background-color: #1e7e34; /* Darker green on hover */
        }

        /* Search Bar Styles */
        .search-container {
            text-align: center;
            margin-bottom: 20px;
        }

        #searchInput {
            width: 50%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <div class="menu-bar">
        <a href="#edit">Edit</a>
        <a href="#settings">Settings</a>
        <a href="#logout">Logout</a>
    </div>

    <h1>Student Profiles</h1>

    <!-- Search Bar -->
    <div class="search-container">
        <input type="text" id="searchInput" onkeyup="searchStudents()" placeholder="Search for students...">
    </div>

    <ul class="students">
        <li class="student">
            <img src="Images/com_icon1.jpg" alt="Student 1">
            <div class="description">
                <h2>John Doe </h2>
                <div class="subtitle">CGPA: 3.8</div>
                <div class="subtitle">Skills: HTML, CSS, JavaScript</div>
                <p>🌟 Passionate Web Developer Seeking to Elevate User Experiences 🌟 

                [HTML, CSS, JavaScript, React.js], and thrive on bringing designs to life with pixel-perfect precision. Whether it's building responsive layouts, optimizing site performance, or implementing interactive features, I approach each project with meticulous attention to detail and a commitment to exceeding expectations.</p>
                <a href="https://drive.google.com/file/d/1wjES-dd5gYjOFXVGjZlyVLjAdZHXW4yU/view?usp=drive_link" class="read-more">View Resume</a>
                <button onclick="showMessage('John Doe has been selected.')" class="read-more">Selected</button>
                <button onclick="showMessage('John Doe has been rejected.')" class="read-more">Rejected</button>
            </div>
        </li>
        <li class="student">
            <img src="Images/com_icon2.jpg" alt="Student 2">
            <div class="description">
                <h2>Jane Smith</h2>
                <div class="subtitle">CGPA: 3.5</div>
                <div class="subtitle">Skills: Python, Java, SQL</div>
                <p>🌟 Passionate Front-End Developer Seeking Exciting Opportunities! 🌟

                What sets me apart? It's not just about writing code; it's about understanding user needs and translating them into seamless interactions. I have a keen eye for design aesthetics and a relentless pursuit of innovation, always staying updated with the latest industry trends and best practices.My skill set includes proficiency in HTML, CSS, and JavaScript, coupled with a deep understanding of modern frameworks like React.js and Vue.js.</p>
                <a href="https://drive.google.com/file/d/1wjES-dd5gYjOFXVGjZlyVLjAdZHXW4yU/view?usp=drive_link" class="read-more">View Resume</a>
                <button onclick="showMessage('Jane Smith has been selected.')" class="read-more">Selected</button>
                <button onclick="showMessage('Jane Smith has been rejected.')" class="read-more">Rejected</button>
            </div>
        </li>
        <li class="student">
            <img src="Images//com_icon3.jpg" alt="Student 3">
            <div class="description">
                <h2>Elizibeth Smarth</h2>
                <div class="subtitle">CGPA: 3.9</div>
                <div class="subtitle">Skills: C++, Ruby, PHP</div>
                <p>Passionate Back End Developer with a strong foundation in programming and a proven track record of delivering robust and scalable solutions. Proficient in languages such as Python, Java, and SQL, with extensive experience in building and optimizing databases and APIs. Detail-oriented and collaborative, I thrive in fast-paced environments, working closely with cross-functional teams to analyze requirements and implement efficient back-end architectures. </p>
                <a href="https://drive.google.com/file/d/1wjES-dd5gYjOFXVGjZlyVLjAdZHXW4yU/view?usp=drive_link" class="read-more">View Resume</a>
                <button onclick="showMessage('Elizibeth Smarth has been selected.')" class="read-more">Selected</button>
                <button onclick="showMessage('Elizibeth Smarth has been rejected.')" class="read-more">Rejected</button>
            </div>
        </li>
    </ul>

    <script>
        function showMessage(message) {
            alert(message);
        }

        function searchStudents() {
            var input, filter, ul, li, h2, i, txtValue;
            input = document.getElementById('searchInput');
            filter = input.value.toUpperCase();
            ul = document.querySelector('.students');
            li = ul.getElementsByTagName('li');

            for (i = 0; i < li.length; i++) {
                h2 = li[i].getElementsByTagName("h2")[0];
                txtValue = h2.textContent || h2.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }
    </script>
</body>
</html>

