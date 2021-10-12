
<html>
<head>
  <style>
    .form-check-label {

      padding: 2em;

      color: rgb(10, 6, 6);
      border-radius: 0px 20px 20px 20px;
      background-color: #fcfafa;
      border-radius: 2%;
    }

    .form-check-label:hover {
      padding: 2em;
      border-radius: 0px 20px 20px 20px;
      box-shadow: 0 4px 8px 0 rgba(15, 15, 15, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      transition-duration: 1.5s;
      color: white;
      transform: scale3d(1.009, 1.009, 1.009);
      background-color: black;
      font-size:110%;
    }

    input[type='radio']:after {
      width: 30px;
      height: 30px;
      border-radius: 15px;
      top: -2px;
      left: -1px;
      position: relative;
      background-color: #d1d3d1;
      content: '';
      display: inline-block;
      visibility: visible;
      border: 2px solid white;
    }

    input[type='radio']:checked:after {
      width: 30px;
      height: 30px;
      border-radius: 15px;
      top: -2px;
      left: -1px;
      position: relative;
      background-color: #ffa500;
      content: '';
      display: inline-block;
      visibility: visible;
      border: 2px solid white;
    }

    .bodyy {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    .quotes {
      width: 80vw;
      min-height: 400px;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      z-index: 2;
    }

    .quotes .box {
      position: relative;
      width: 25vw;
      height: 50vh;
      min-height: 320px;
      background: #f2f2f2;
      overflow: hidden;
      transition: all 0.5s ease-in;
      z-index: 2;
      box-sizing: border-box;
      padding: 30px;
      box-shadow: -10px 25px 50px rgba(0, 0, 0, 0.3);
    }

    .quotes .box::before {
      content: '\201C';
      position: absolute;
      top: -20px;
      left: 5px;
      width: 100%;
      height: 100%;
      font-size: 120px;
      opacity: 0.2;
      background: transparent;
      pointer-events: none;
    }

    .quotes .box::after {
      content: '\201D';
      position: absolute;
      bottom: -10%;
      right: 5%;
      font-size: 120px;
      opacity: 0.2;
      background: transparent;
      filter: invert(1);
      pointer-events: none;
    }

    .quotes .box p {
      margin: 0;
      padding: 10px;
      font-size: 1.2rem;
    }

    .quotes .box h2 {
      position: absolute;
      margin: 0;
      padding: 0;
      bottom: 10%;
      right: 10%;
      font-size: 1.5rem;
    }

    .quotes .box:hover {
      color: #f2f2f2;
      box-shadow: 20px 50px 100px rgba(0, 0, 0, 0.5);
    }

    .quotes .bg {
      position: absolute;
      top: 0;
      left: 0;
      z-index: 1;
      opacity: 0;
      transition: all 0.5s ease-in;
      pointer-events: none;
      width: 100%;
      height: 200%;
      overflow: hidden;
    }

    .quotes .box.box1:hover,
    .quotes .box.box1:hover~.bg {
      opacity: 1;
      background: #e2a9e5;
      background: -moz-linear-gradient(-45deg, #e2a9e5 15%, #2b94e5 100%);
      background: -webkit-linear-gradient(-45deg, #e2a9e5 15%, #2b94e5 100%);
      background: linear-gradient(135deg, #e2a9e5 15%, #2b94e5 100%);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#e2a9e5', endColorstr='#2b94e5', GradientType=1);
    }

    .quotes .box.box2:hover,
    .quotes .box.box2:hover~.bg {
      opacity: 1;
      background: #632c65;
      background: -moz-linear-gradient(-45deg, #632c65 15%, #56a5e2 100%);
      background: -webkit-linear-gradient(-45deg, #632c65 15%, #56a5e2 100%);
      background: linear-gradient(135deg, #632c65 15%, #56a5e2 100%);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#632c65', endColorstr='#56a5e2', GradientType=1);
    }

    .quotes .box.box3:hover,
    .quotes .box.box3:hover~.bg {
      opacity: 1;
      background: #4b384c;
      background: -moz-linear-gradient(-45deg, #4b384c 15%, #da5de2 100%);
      background: -webkit-linear-gradient(-45deg, #4b384c 15%, #da5de2 100%);
      background: linear-gradient(135deg, #4b384c 15%, #da5de2 100%);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#4b384c', endColorstr='#da5de2', GradientType=1);
    }
    .item {
      width: 350px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background:  #669999;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      align:center;
      }
  </style>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

  <title>RSvotes news</title>
</head>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">RSvotes</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aboutparties.html">About parties</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link active" href="#" role="button"
               aria-expanded="false">
              Vote now!
            </a>
            
           
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  
 <form action="" method="post">
  <div class="bodyy">
   
    <div class="quotes">

      <div class="card">
        <div class="box box1">
          <div class="form-check">
            <img
              src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e8/BJP_election_symbol.png/150px-BJP_election_symbol.png"
              alt="greenery pic" style="height: 50%; width: 50%;">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="BHARATIYA JANATA PARTY">
            <label class="form-check-label">
              BHARATIYA JANATA PARTY
            </label>
          </div>
          <div class="bg"></div>
        </div>
      </div>


      <div class="card">
        <div class="box box2">
          <div class="form-check">
            <img
              src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/All_India_Trinamool_Congress_symbol.svg/150px-All_India_Trinamool_Congress_symbol.svg.png"
              style="height: 50%; width: 50%;">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value=" INDIA TRINAMOOL CONGRESS">
            <label class="form-check-label">
              INDIA TRINAMOOL CONGRESS
            </label>
          </div>
          <div class="bg"></div>
        </div>
      </div>

      <div class="card">
        <div class="box box1">
          <div class="form-check">

            <img
              src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/Indian_Election_Symbol_Elephant.png/225px-Indian_Election_Symbol_Elephant.png"
              style="height: 50%; width: 50%;">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="BAHUJAN SAMAJ PARTY">
            <label class="form-check-label">
              BAHUJAN SAMAJ PARTY
            </label>
          </div>
          <div class="bg"></div>
        </div>
      </div>



      <div class="card">
        <div class="box box3">
          <div class="form-check">
            <img
              src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/de/Indian_Election_Symbol_Ears_of_Corn_and_Sickle.png/225px-Indian_Election_Symbol_Ears_of_Corn_and_Sickle.png"
              style="height: 50%; width: 50%;">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="COMMUNIST PARTY OF INDIA">
            <label class="form-check-label">
              COMMUNIST PARTY OF INDIA
            </label>
          </div>
          <div class="bg"></div>
        </div>
      </div>



      <div class="card">
        <div class="box box2">
          <div class="form-check">
            <img
              src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/Indian_Election_Symbol_Hammer_Sickle_and_Star.png/150px-Indian_Election_Symbol_Hammer_Sickle_and_Star.png"
              style="height: 50%; width: 50%;">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="COMMUNIST PARTY OF INDIA(MAXIST)">
            <label class="form-check-label">
              COMMUNIST PARTY OF INDIA(MAXIST)
            </label>
          </div>
          <div class="bg"></div>
        </div>
      </div>


      <div class="card">
        <div class="box box1">
          <div class="form-check">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d7/Hand_INC.svg/261px-Hand_INC.svg.png"
              style="height: 50%; width: 50%;">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="INDIAN NATIONAL CONGRESS">
            <label class="form-check-label">
              INDIAN NATIONAL CONGRESS
            </label>
          </div>
          <div class="bg"></div>
        </div>
      </div>



      <div class="card">
        <div class="box box2">
          <div class="form-check">
            <img
              src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/Indian_Election_Symbol_Book.svg/150px-Indian_Election_Symbol_Book.svg.png"
              style="height: 50%; width: 50%;">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="NATIONAL PEOPLE'S PARTY">
            <label class="form-check-label">
              NATIONAL PEOPLE'S PARTY
            </label>
          </div>
          <div class="bg"></div>
        </div>
      </div>


      <div class="card">
        <div class="box box2">
          <div class="form-check">
            <img
              src="https://upload.wikimedia.org/wikipedia/commons/2/28/Nationalist_Congress_Party_Election_Symbol.png"
              style="height: 50%; width: 50%;">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="NATIONALIST CONGRESS PARTY">
            <label class="form-check-label">
              NATIONALIST CONGRESS PARTY
            </label>
          </div>
          <div class="bg"></div>
        </div>
      </div>

    </div> 
   
   
  </div>
  <p id="orderr" ></p>
  <p id="time" ></p>
    <link rel="stylesheet" a href="css\style.css">
    <link rel="stylesheet" a href="css\font-awesome.min.css">
  </head>
  <body>


    <div class="container" >
      <div class="item">
        <input type="submit" type="submit" name="submit"  onclick="order()" value="SUBMIT VOTE">
      </div>
  
        
       
   
    </div>
  

 </form>
 <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
<df-messenger
  intent="WELCOME"
  chat-title="chatbotrsvotes"
  agent-id="91b70d7a-2d4c-4f07-b687-29f908704667"
  language-code="en"
  allow="microphone;"
></df-messenger>
<script>
   function order(){

    console.log("hi");
    document.getElementById("orderr").innerHTML = "Thanks for voting!! Order placed on/at: ";
          var today = new Date();

var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate()+','+today.getHours()+':'+today.getMinutes()+':'+today.getSeconds();
//var deliverytime = parseInt(today.getHours())+1;
document.getElementById("time").innerHTML=date;
   
  </script>
</body>
<?php

$con = mysqli_connect("sql311.epizy.com","epiz_30041031","dVaE8jDD1U2H","epiz_30041031_signup");

if(isset($_POST['submit']))
{
    
    $flexRadioDefault  = $_POST['flexRadioDefault'];

    $query = "INSERT INTO demo (flexRadioDefault) VALUES ('$flexRadioDefault')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Inserted Successfully";
        echo '<script>alert("Your vote has been successfully casted!")</script>';
    }
    else{
        $_SESSION['status'] = "Inserted Successfully";
        header("Location: index.php");
    }
}
?>

</html>
