<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>portfolio</title>
</head>
<body>

<ul>
    <li><a>MENU</a>
        <ul>
            <li><a href="#profile">Profile</a></li>
            <li><a href="#tools">Tools</a></li>
            <li><a href="#experience">Experience</a></li>
            <li><a href="#responsibilities">Responsibilities</a></li>
            <li><a href="#education">Education</a></li>
            <li><a href="#languages">Languages</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </li>
</ul>



<div>
    <img class="img" src="https://www.socwall.com/images/wallpapers/71674-2048x1206.jpg" alt="beautiful view">
    <div class="name">
        <h1>Shakhriyor Abduvaliev</h1>
        <h3>Student</h3>
    </div>
</div>

<div>
    <h1 class="average" id="profile">Profile</h1>
    <p class="middle">Full stack developer with nearly 3 years of Information technology expirience in product develoment, <br>
        debugging and delivery. Able to handle web based application as well as Mobile app development. Quick learner new <br>
        technologies , team player and self-directed as well.</p>
</div>

<div>
    <h1 class="average" id="tools">Tools</h1>
        <li class="middle">PhpStorm</li>
        <li class="middle">Java</li>
        <li class="middle">PHP</li>
        <li class="middle">Swift</li>
        <li class="middle">HTML</li>
        <li class="middle">CSS</li>
        <li class="middle">JQuery</li>
        <li class="middle">Linex commands</li>
        <li class="middle">Sql</li>
</div>

<div>
    <h1 class="average" id="experience">Experience</h1>
    <p class="middle"><strong>My-IT-EDUCATION</strong> - 07/2019 present</p>
</div>

<div>
    <img class="ai" src="https://www.aithority.com/wp-content/uploads/2019/06/Terminator-Teaches-Us-About-AI-and-the-Need-for-Better-Data-guest-post.jpg">
</div>

<div>
    <h1 class="average" id="responsibilities">Responsibilities</h1>
        <li style="list-style-type: square" class="middle">Successfully developed Business logic, backend API</li>
        <li style="list-style-type: square" class="middle">Took an active part in product discussion meetings</li>
        <li style="list-style-type: square" class="middle">Performed a key role in the development process of the UI part of the system</li>
        <li style="list-style-type: square" class="middle">Worked closely with customer in launching the application after completion</li>
</div>

<div>
    <h1 id="education" class="average">Education</h1>
    <li style="list-style-type: circle" class="middle">Kilmer elementary school, Buffalo grove,IL</li>
    <li style="list-style-type: circle" class="middle">School 5, Tashkent,UZ</li>
    <li style="list-style-type: circle" class="middle">Cooper middle school, Buffalo grove,IL</li>
    <li style="list-style-type: circle" class="middle">Buffalo Grove High School, Buffalo Grove, IL</li>
</div>

<div>
    <h1 class="average" id="languages">Languages</h1>
    <li style="list-style-type: upper-roman " class="middle"><i>Uzbek</i></li>
    <li style="list-style-type: upper-roman " class="middle"><i>Russian</i></li>
    <li style="list-style-type: upper-roman " class="middle"><i>English</i></li>
    <li style="list-style-type: upper-roman " class="middle"><i>Spanish</i></li>
</div>

<div class="contact">
    <h1 style="text-align: center; font-size: 50px; position:relative; left: 340px" id="contact">Contact</h1>
    <h2 style="text-align: center; position:relative; left: 340px">Get in touch</h2>
    <p style="text-align: center"><strong>Email:</strong><u>shakhri707@gmail.com</u></p>
</div>



<style>
    .img {
        width: 100%;
        height: 100%;
        margin-top: 18px;
    }
    .name {
        text-align: center;
        top: 25%;
        left: 42%;
        position: absolute;
    }
    .contact {
        background-color: peachpuff;
        width: 100%;
        height: 200px;
    }
    .middle {
        position: relative;
        left: 100px;
    }
    .average {
        position: relative;
        left: 200px;
    }
    .ai {
        width: 679px;
        height: 572px;
        position: relative;
        float: right;
        bottom: 250px;
        right: 100px;
    }
    ul {
        margin: 0px;
        padding: 0px;
        list-style-type: none;
    }
    ul li {
        float: right;
        width: 90px;
        height: 40px;
        background-color: white;
        opacity: .8;
        line-height: 40px;
        text-align: center;
        font-size: 14px;
    }
    ul li a {
        text-decoration: none;
        color: blue;
        display: block;
    }
    ul li a:hover {
        background-color: green;
    }
    ul li ul li {
        display: none;
    }
    ul li:hover ul li {
        display: block;
    }
</style>


</body>
</html>
