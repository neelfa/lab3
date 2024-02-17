<!DOCTYPE html>
<html lang="en">
 
<head>
  <link rel="icon" href="favicon.png" type="image/png">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elfabulous</title>
  <style>
    body {
      margin: 0;
      overflow-x: hidden;
    }
 
    .header-container {
      position: sticky;
      top: 0;
      z-index: 2;
    }
 
    header {
      background-color: white;
      padding: 1%;
      text-align: center;
      font-size: 25px;
      color: #FD5396;
      font-family: 'Bebas Neue', sans-serif;
      transition: padding 0.3s;
    }
 
    .header-text {
      text-decoration: none;
      color: #FD5396;
      cursor: pointer;
    }
 
    .second-header {
      background-color: #B5D5FF;
      padding: 1%;
      text-align: right;
      font-size: 17px;
      font-family: 'Inter', sans-serif;
      display: flex;
      justify-content: right;
      align-items: right;
      transition: padding 0.3s;
    }
 
    .second-header a {
      color: white;
      text-decoration: none;
      margin: 0 10px;
      font-family: 'Bebas Neue', sans-serif;
      transition: color 0.3s;
      cursor: pointer;
    }
 
    .second-header a:hover {
      color: #FD5396;
    }
 
    .second-header a:last-child {
      margin-right: 0.5in;
    }
 
    .third-header,
    .fourth-header,
    .fifth-header,
    .contact-header {
      text-align: center;
      font-family: 'Inter', sans-serif;
      padding: 2%;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }
 
    .third-header {
      background-color: #FFFAE3;
      color: black;
    }
 
    .third-header-content {
      padding: 10%;
    }
 
    .profile-image {
      max-width: 85%;
      height: auto;
    }
 
    .fourth-header {
      background-image: url('keisha.png');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
    }
 
    .image-container {
      display: flex;
      justify-content: space-between;
      width: 100%;
      margin-top: 15px;
    }
 
    .bordered-image {
      width: 25%;
      height: auto;
      border: 10px solid #EFEB9F;
      margin: 3%;
      transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }
 
    .bordered-image:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
    }
 
    .bordered-image:nth-child(2) {
      border-color: #FD5396;
    }
 
    .button {
      margin-top: 15px;
      padding: 10px 20px;
      font-size: 16px;
      background-color: #FD5396;
      color: white;
      border: none;
      cursor: pointer;
      border-radius: 3%;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
      transition: background-color 0.3s, box-shadow 0.3s;
    }
 
    .button:hover {
      background-color: #E8337A;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.7);
    }
 
    .fifth-header {
      background-color: #FFFAE3;
      background-image: url('journal wallpaper.png');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      display: flex;
      justify-content: flex-end;
      align-items: center;
      height: 88vh;
      padding: 4%;
      position: relative;
    }
 
    .text-container {
      position: absolute;
      left: 15px;
      top: 50%;
      transform: translateY(-50%);
      width: 40%;
      font-family: 'Lilita One', cursive;
    }
 
    .text-container p {
      font-size: 22px;
      color: #fd5396;
    }
 
    .fifth-header img {
      max-width: 45%;
      height: auto;
      margin-left: auto;
    }
 
    .additional-button {
      margin-top: 15px;
      padding: 10px 20px;
      font-size: 16px;
      background-color: #B5D5FF;
      color: white;
      border: none;
      cursor: pointer;
      border-radius: 3%;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
      transition: background-color 0.3s, box-shadow 0.3s;
    }
 
    .additional-button:hover {
      background-color: #7895c8;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.7);
    }
 
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgb(0, 0, 0);
      background-color: rgba(0, 0, 0, 0.7);
      padding-top: 60px;
    }
 
    .modal-content {
      margin: 5% auto;
      padding: 20px;
      max-width: 80%;
      height: 70%;
      overflow-y: auto;
      background-color: #fefefe;
      border-radius: 5px;
    }
 
    .close {
      color: #FD5396;
      float: right;
      font-size: 28px;
      font-weight: bold;
      cursor: pointer;
    }
 
    .close:hover,
    .close:focus {
      color: #E8337A;
    }
 
    /* New Contact Me Section Styles */
    .contact-header {
      background-color: #FFFAE3;
    }
 
    .contact-content {
      text-align: center;
    }
 
  </style>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap">
</head>
 
<body>
 
  <!-- Main Page -->
  <div class="header-container">
    <header>
      <a href="#" class="header-text">E l f a b u l o u s</a>
    </header>
 
    <header class="second-header">
      <a href="#home" class="header-text" onclick="scrollToTop()">H o m e</a>
      <a href="#about" id="about-link" class="header-text" onclick="scrollToAbout()">A b o u t &nbsp; M e</a>
      <a href="#contact" class="contact-link" onclick="scrollToContact()">C o n t a c t</a>
    </header>
  </div>
 
  <!-- Page 1 -->
  <header class="third-header">
    <div class="third-header-content">
      <img src="website.png" alt="Website Image" class="profile-image">
    </div>
  </header>
 
  <!-- Page 2 -->
  <header class="fourth-header" id="about">
    <div class="image-container">
      <img src="a.png" alt="Image 1" class="bordered-image">
      <img src="life.jpg" alt="Image 2" class="bordered-image">
      <img src="me.JPEG" alt="Image 3" class="bordered-image">
    </div>
    <button class="button">Who am I?</button>
  </header>
 
  <!-- Page 3 -->
  <header class="fifth-header" id="page3">
    <div class="text-container">
      <p style="margin-left: 30px;" id="introAndAgeParagraph"></p>
      <button class="additional-button" onclick="openModal()">Know more!</button>
    </div>
  </header>
 
  <!-- Contact Me -->
  <header class="contact-header" id="contact">
    <div class="contact-content">
      <h2>Contact Me</h2>
      <p>Feel free to reach out to me through the following channels:</p>
      <!-- Add your contact information or form here -->
    </div>
  </header>
 
  <!-- Modal for "Know more!" button -->
  <div id="knowMoreModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal()">&times;</span>
      <p id="studyInfoParagraph"></p>
      <p>I love watching documentary series and sleeping; it is actually my way to unwind.</p>
      <p>In terms of goals in life, I want to continuously learn and grow as an individual, aiming to apply my knowledge and practical skills to make a positive impact in my future profession while enjoying the journey and creating lasting memories during my college life.</p>
      <p>... hehe not done yet :)) </p>
    </div>
  </div>
 
  <!-- Lesson 1: Objects -->
  <script>
    const person = {
      name: "Nekeisha Ashlyn Elfa",
      age: 19,
      birthYear: 2004,
      college: "Asia Pacific College",
      program: "Bachelor of Science in Information Technology",
      specialization: "Mobile and Internet Technology",
      hobbies: ["Watching documentaries", "Sleeping"]
    };
 
    console.log(person.name);
    console.log(person.age);
    console.log(person);
  </script>
 
  <!-- Lesson 2: Functions -->
  <script>
    function displayIntroduction(name, age) {
      console.log(`Hi! I'm ${name}, and I'm ${age} years old.`);
    }
 
    displayIntroduction("Nekeisha Ashlyn Elfa", 19);
 
    function calculateBirthYear(age) {
      return new Date().getFullYear() - age;
    }
 
    console.log(`Birth Year: ${calculateBirthYear(19)}`);
  </script>
 
  <!-- Lesson 3: Modules -->
  <script type="module" src="./myModule.js"></script>
 
  <!-- Lesson 4: Classes -->
  <script>
    class Person {
      constructor(name, age) {
        this.name = name;
        this.age = age;
      }
 
      displayIntroduction() {
        console.log(`Hi! I'm ${this.name}, and I'm ${this.age} years old.`);
      }
    }
 
    const keisha = new Person("Nekeisha Ashlyn Elfa", 19);
 
    keisha.displayIntroduction();
  </script>
 
  <!-- Lesson 5: Async -->
  <script>
    async function fetchData() {
      try {
        const response = await fetch('https://api.example.com/data');
        const data = await response.json();
        console.log(data);
      } catch (error) {
        console.error('Error fetching data:', error);
      }
    }
 
    fetchData();
  </script>
 
  <script>
    const myAge = 19;
    let isModalOpen = false;
    const birthYear = 2004;
    const collegeStartYear = new Date().getFullYear() - myAge;
 
    document.querySelector('.button').addEventListener('click', function () {
      document.querySelector('#page3').scrollIntoView({
        behavior: 'smooth'
      });
    });
 
    document.querySelector('.additional-button').addEventListener('click', function () {
      openModal();
    });
 
    document.querySelector('.header-text').addEventListener('click', function (event) {
      event.preventDefault();
      scrollToTop();
    });
 
    document.getElementById('about-link').addEventListener('click', function (event) {
      event.preventDefault();
      scrollToAbout();
    });
 
    document.querySelector('.contact-link').addEventListener('click', function (event) {
      event.preventDefault();
      scrollToContact();
    });
 
    function openModal() {
      isModalOpen = true;
      document.getElementById('knowMoreModal').style.display = 'block';
    }
 
    function closeModal() {
      isModalOpen = false;
      document.getElementById('knowMoreModal').style.display = 'none';
    }
 
    document.addEventListener('DOMContentLoaded', function () {
      const introAndAgeParagraph = document.getElementById('introAndAgeParagraph');
      const introAndAgeText = "Hi !! I'm Nekeisha Ashlyn Elfa, but you can call me Keisha for short. " +
        `I'm ${myAge} years old and was born on July 16, 2004.` +
        " I'm Currently studying at Asia Pacific College pursuing a Bachelor of Science in Information Technology with specialization in Mobile and Internet Technology.";
      typeText(introAndAgeParagraph, introAndAgeText, 75);
 
    });
 
    function typeText(element, text, speed) {
      let i = 0;
      const typingInterval = setInterval(function () {
        element.innerHTML += text.charAt(i);
        i++;
        if (i > text.length) {
          clearInterval(typingInterval);
        }
      }, speed);
    }
 
    function scrollToTop() {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    }
 
    function scrollToAbout() {
      const aboutSection = document.getElementById('about');
      aboutSection.scrollIntoView({
        behavior: 'smooth',
        block: 'start',
        inline: 'nearest',
      });
    }
 
    function scrollToContact() {
      const contactSection = document.getElementById('contact');
      contactSection.scrollIntoView({
        behavior: 'smooth',
        block: 'start',
        inline: 'nearest',
      });
    }
  </script>
 
  <!-- Footer -->
  <footer style="background-color: #FFFAE3; padding: 30px; text-align: center; font-family: 'Inter', sans-serif;">
    <p style="margin: 0; color: #fd5396;">&copy; 2024 Elfabulous. All rights reserved.</p>
    <div style="margin-top: 10px;">
      <a href="https://github.com/neelfa/lab-2" style="color: white; text-decoration: none; margin-right: 10px;">
        <img src="git.png" alt="GitHub" style="width: 20px; height: 20px; vertical-align: middle;">
      </a>
      <a href="https://www.instagram.com/ashlynkeii/" style="color: white; text-decoration: none;">
        <img src="ig.png" alt="Instagram" style="width: 20px; height: 20px; vertical-align: middle;">
      </a>
    </div>
  </footer>
 
</body>
 
</html>