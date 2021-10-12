<?php

if(isset($_POST["submit"])){
  if($emailcount==0){
    header('Location:vote.php');
     }
 else{
   echo("oops!");
 }
}
?>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <style>
       
      .boxxx{
        min-height: 100%;
      width: 60%;
      
      }
      div, form, input, select, textarea, label, p { 
      padding: 0;
      margin: 0;
      outline: none;
     
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 40px;
      color: #fff;
      z-index: 2;
      line-height: 83px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 8px  #669999; 
      }
      .banner {
      position: relative;
      height: 300px;
      background-image: url("/uploads/media/default/0001/02/c1504011491c4e04e5158b63a27a4ea654b03ed1.jpeg");  
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.2); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color:  #669999;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0  #669999;
      color: #669999;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: red;
      }
      .week {
      display:flex;
      justfiy-content:space-between;
      }
      .colums {
      display:flex;
      justify-content:space-between;
      flex-direction:row;
      flex-wrap:wrap;
      }
      .colums div {
      width:48%;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color:  #a3c2c2;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      .question-answer label {
      display: block;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid  #669999;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid  #669999;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .flax {
      display:flex;
      justify-content:space-around;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
     button {
      width: 350px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background:  #669999;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background:  #a3c2c2;
      transform: scale3d(1.1,1.1,1.4);
      transition-duration: 1.5s;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
      }
      #lname:hover{
        background:  white;
        transform: scale3d(1.1,1.1,1.1);
        transition-duration: 1.5s;
  
      }
      #fname:hover{
        background:  white;
        transform: scale3d(1.1,1.1,1.1);
        transition-duration: 1.5s;
  
      }
 </style>
    
</head>
<body>



<?php

$server = "sql311.epizy.com";
$user = "epiz_30041031";
$password = "dVaE8jDD1U2H";
$db="epiz_30041031_signup";
$con = mysqli_connect($server,$user,$password,$db);


if(isset($_POST['submit'])){
$username = ($_POST['username']);
$email = ($_POST['email']);
$mobile = ($_POST['mobile']);
$password = ($_POST['password']);
$cpassword = ($_POST['cpassword']);
$pass= password_hash($password, PASSWORD_BCRYPT);
$cpass= password_hash($password, PASSWORD_BCRYPT);
$adhar= password_hash($password, PASSWORD_BCRYPT);



$emailquery = "SELECT email FROM registration WHERE email='$email'";
$query = mysqli_query($con,$emailquery);
$emailcount = mysqli_num_rows($query);
if($emailcount!=0){
  echo "Aadhar user already exists";
   }
else{
    if($password === $cpassword){
        $insertquery = "insert into registration(username, email, mobile, password, cpassword) values('$username','$adhar','$mobile','$pass','$cpass')";

        $iquery = mysqli_query($con,$insertquery);
if($iquery){

  
  header("Location:index.php"); //PLEASE VOLUNTEER PAGE LINK KARDE IDHAR 


}
else{
    ?>
    <script>
    alert("could not enter data, try again later!");
    </script>
    <?php
}
    }
    else{
        echo "passwords are not matching";
    }

}}



?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    
  </head>
  <body>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">RSvotes</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutparties.html">About parties</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registration.php">Vote now!</a>
                    </li>
              
                    
                </ul>
   
                <p style="color:white">assistance: +17205055032</p>
            </div>
        </div>
    </nav>


<div class="testbox">
    <div class="boxxx">
     
<form action="" method="POST">
<div class="colums">

<div class="item"><a href="#">
  <label for="fname" style="text-decoration=none">Name:</label><br>
  <input type="text"  id="fname" name="username" placeholder="Sheela" onclick=record1() required ><br></a>
 
</div>
  <div class="item"><a href="#">
  <label for="lname" >Aadhar number:</label><br>
  <input type="password" id="aadhar" name="email" placeholder="*****" required><br><br></a>

</div>
<div class="item"><a href="#">
  <label for="lname" >Address:</label><br>
  <input type="text" id="address" class="speechToText"name="address" placeholder="your address" onclick=record() required><br><br></a>
</div>
<div class="item"><a href="#">
  <label for="lname" >Phone number:</label><br>
  <input type="text" id="number" name="mobile"  placeholder="1234567890" onclick=record2() required><br><br></a>
</div>
<div class="item"><a href="#">
  <label for="lname" >Password: (avoid using !,@,#,$,%,^,&,*,(,))</label><br>
  <input type="password" id="password" name="password" onblur="excuse()" placeholder="your password" onclick=record4() required><br><br></a>
</div>
<div class="item"><a href="#">
  <label for="lname" >Re-enter Password:</label><br>
  <input type="password" id="cpassword" name="cpassword" onblur="myfunction()" placeholder="re-enter your password" onclick=record5() required><br><br></a>
</div>
<div class="btn-block">

      <button>  
      <script src="https://code.responsivevoice.org/responsivevoice.js?key=4ewHTtLY"></script>
  <input type="submit" name="submit" value="SUBMIT" ></button></div> 
</form> </div>
<script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
<df-messenger
  intent="WELCOME"
  chat-title="chatbotrsvotes"
  agent-id="91b70d7a-2d4c-4f07-b687-29f908704667"
  language-code="en"
  allow="microphone;"
></df-messenger>
<script>


  

function myfunction(){
  var pwd1=document.getElementById("password").value;
  var pwd2=document.getElementById("cpassword").value;
  if(pwd1==pwd2){
    document.getElementById("password").style="background-color:#99EDC3";
    document.getElementById("cpassword").style="background-color:#99EDC3";
  }
  else if(pwd1!=pwd2){
    document.getElementById("password").style="background-color:red";
    document.getElementById("cpassword").style="background-color:red";
    alert("Passwords dont match")
  }
 
}
function excuse(){
  var el1=document.getElementById("password").value;
  var el2=document.getElementById("cpassword").value;
  var conditionam = el1.includes("@") || el1.includes("!") || el1.includes("#")  || el1.includes("$")  || el1.includes("%")  || el1.includes("^")  || el1.includes("&") || el1.includes("*") 
  if(conditionam==true){
    document.getElementById("password").style="background-color:red";
   
    alert("please avoid using special characters")
  }
}



var today = new Date();

var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate()+','+today.getHours()+':'+today.getMinutes()+':'+today.getSeconds();
function record(){
      // new speech recognition object
var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
var recognition = new SpeechRecognition();
recognition.lang = "en-IN";
//This runs when the speech recognition service starts
recognition.onstart = function() {
    console.log("We are listening. Try speaking into the microphone.");
};

recognition.onspeechend = function() {
    // when user is done speaking
    recognition.stop();
    instructions.text('You were quiet for a while so voice recognition turned itself off.');
}
              
// This runs when the speech recognition service returns result
recognition.onresult = function(event) {
    var transcript = event.results[0][0].transcript;
    var confidence = event.results[0][0].confidence;
    console.log(event)
    
    document.getElementById('address').value = event.results[0][0].transcript;
    
    
    
};
              
// start recognition
recognition.start();


}


function record1(){
      // new speech recognition object
var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
var recognition = new SpeechRecognition();
recognition.lang = "en-IN";
//This runs when the speech recognition service starts
recognition.onstart = function() {
    console.log("We are listening. Try speaking into the microphone.");
};

recognition.onspeechend = function() {
    // when user is done speaking
    recognition.stop();
}
              
// This runs when the speech recognition service returns result
recognition.onresult = function(event) {
    var transcript = event.results[0][0].transcript;
    var confidence = event.results[0][0].confidence;
    console.log(event)
    
    document.getElementById('fname').value = event.results[0][0].transcript;
    
    
    
};
              
// start recognition
recognition.start();


}

function record2(){
      // new speech recognition object
var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
var recognition = new SpeechRecognition();
recognition.lang = "en-IN";
//This runs when the speech recognition service starts
recognition.onstart = function() {
    console.log("We are listening. Try speaking into the microphone.");
};

recognition.onspeechend = function() {
    // when user is done speaking
    recognition.stop();
}
              
// This runs when the speech recognition service returns result
recognition.onresult = function(event) {
    var transcript = event.results[0][0].transcript;
    var confidence = event.results[0][0].confidence;
    console.log(event)
    
    document.getElementById('number').value = event.results[0][0].transcript;
    
    
    
};
              
// start recognition
recognition.start();


}


function record4(){
      // new speech recognition object
var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
var recognition = new SpeechRecognition();
recognition.lang = "en-IN";
//This runs when the speech recognition service starts
recognition.onstart = function() {
    console.log("We are listening. Try speaking into the microphone.");
};

recognition.onspeechend = function() {
    // when user is done speaking
    recognition.stop();
}
              
// This runs when the speech recognition service returns result
recognition.onresult = function(event) {
    var transcript = event.results[0][0].transcript;
    var confidence = event.results[0][0].confidence;
    console.log(event)
    
    document.getElementById('password').value = event.results[0][0].transcript;
    
    
    
};
              
// start recognition
recognition.start();



}

function record5(){
      // new speech recognition object
var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
var recognition = new SpeechRecognition();
recognition.lang = "en-IN";
//This runs when the speech recognition service starts
recognition.onstart = function() {
    console.log("We are listening. Try speaking into the microphone.");
};

recognition.onspeechend = function() {
    // when user is done speaking
    recognition.stop();
}
              
// This runs when the speech recognition service returns result
recognition.onresult = function(event) {
    var transcript = event.results[0][0].transcript;
    var confidence = event.results[0][0].confidence;
    console.log(event)
    
    document.getElementById('cpassword').value = event.results[0][0].transcript;
    
    
    
};
              
// start recognition
recognition.start();


}
  </script>
</body>
</html>