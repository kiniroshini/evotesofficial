<!DOCTYPE html>
<html lang="en">
<!doctype html>
<html lang="en">

<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
    <style>
        .styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}



.ml12 {
  font-weight: 200;
  font-size: 1.8em;
  text-transform: uppercase;
  letter-spacing: 0.5em;
}

.ml12 .letter {
  display: inline-block;
  line-height: 1em;
}
.question{
    font-family: 'Dosis', sans-serif;
    font-weight: bold;
    padding-right:7%;
    padding-left:7%;
}
.answer{
    font-family: 'Dosis', sans-serif;
    font-weight: lighter;
    padding-right:7%;
    padding-left:7%;

}
footer{
    background-color:#333333;
    color:#E4E6EB;
}


        </style>
<script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
<df-messenger
  intent="WELCOME"
  chat-title="chatbotrsvotes"
  agent-id="91b70d7a-2d4c-4f07-b687-29f908704667"
  language-code="en"
  allow="microphone;"
></df-messenger>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>RSvotes news</title>
</head>

<body>

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
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutparties.html">About parties</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registration.php">Vote now!</a>
                    </li>
              
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" id="searchbar" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit" onclick=search()>Search</button>
                </form>
                <p style="color:white">assistance: +17205055032</p>
            </div>
        </div>
    </nav>
    <div class="container my-3">
        <h3>Voters with Disabilities
        <span class="badge bg-secondary">FAQs</span></h3>
        <hr>
       
     
    </div>
    <div class="boxx">
   <p> <div class="question"> Electors / Voters with disabilities, reduced mobility & reduced functions:</div></p>
   <p> <div class="answer">Electors / Voters having one among the 21 disabilities as mentioned by the Rights of Persons with
         Disabilities Act 2016 are termed as voters with disabilities. In addition,if a person who has reduced mobility and/ormotor 
         functionand/or physical coordination due to age, temporary ailment, pregnancy and other disease, and needs to be facilitated 
         to get registered and to vote are termed as electors / voters with reduced mobility and physical functions.  </p></div>
         <p> <div class="question"> Registration of a voter with disability / reduced mobility/functions
</div></p>
   <p> <div class="answer">Every Indian citizen with disability or reduced mobility / functions who has attained the age of 
       18 years on the qualifying date i.e. first day of January of the year of revision of electoral roll, unless otherwise 
       disqualified of crime or unsound mind as declared by a competent court,is eligible to be registered as a voter in theroll 
       of the part/polling area of theconstituency of which he/she is a resident.

</p></div>
<p> <div class="question"> Process & facilitations forpersonswith disabilities to get registered in electoral roll:

</div></p>
   <p> <div class="answer">An eligible person withdisability or reduced mobility / physical functions can get enrolled in electoral roll by filling Form 6 inclusive of information about one’s disability online at www.nvsp.in and uploading the necessary documents. 
One can alsoenrol at voter enrolment centres or the offices of Electoral Registration Officers / Assistant Electoral Registration Officers, which will be accessible for persons with disabilities and reduced mobility / physical functions, by filling Form 6 in two copies which are available free of cost atsuchcentres / offices and annexingcopies of the relevant documents. In case of any assistance / facilitation of communication required in filling the form, the same would be provided at both offices. The forms can also be sent by post to Electoral Registration Officer / Assistant Electoral Registration Officer. 
Copies ofForm 6 will also be available with Booth Level Officers who can come to the residence of a person withdisability and register him/her on request for the same.
Apart from the above, civil societyorganisations can post a request to ERO/AERO to conduct accessible registration camps for persons with disabilities associated with them in their campus. 

</p>
</div>

<p> <div class="question"> Documents to be enclosed with Form 6.

</div></p>
   <p> <div class="answer">One recent passport sizecoloured photograph, duly affixed in the box given for the purpose in Form 6 and photo-copies of documentary proof of age if
        between 18 and 21 years of age and proof of residence are required to be enclosed with Form 6.  The list of documentary proof of age and residence which can be enclosed with 
        Form 6 can be referred in the guidelines enclosed with Form 6.  

</p>
</div>

</div></p>
  


<p> <div class="question"> Prior booking of facilities for voters with disabilities</div></p>
   <p> <div class="answer">Online /sms booking of wheel chairs and volunteer can be done prior to poll day so that the facilities 
       are assured to voters with disabilities / reduced mobility at polling booths. In some polling booths prior booking of parking 
       facility is also available. Similarly, voters with disabilities can also avail exclusive transport facility in some constituencies.

</p></div>


<p> <div class="question"> Assured Minimum Facilities (AMF) at Polling Station:</div></p>
   <p> <div class="answer">Assured Minimum Facilities that will be made available at polling booths are Signage, Help Desk, polling booth 
       at ground floor,obstacle free wide levelled pathway from entrance to voting compartment,Ramp as per GOI standards, Accessible Toilets,
        Drinking Water, SeparateEntry and Exit, Lighting, accessible furniture, braille ballot guide, adjustable braille embossed EVMs, wheel chairs, 
        booth volunteers and display of accessible posters on information pertaining to voting.

</p></div>
<p> <div class="question"> Other facilitations available for voters with disabilities during elections:</div></p>
   <p> <div class="answer">Free transport facility will also be made available to all persons with disabilities inlocal public transport system.
Dedicated parking system for vehicles of voters with disabilities.
Priority entry is provided to voters with disabilities and those with reduced mobility / physical functions, without having to wait inqueue at polling booths.
Voters with disabilities can bring their companion to assist them tillvoting compartment, if they wish to. In case of assistance by the companion is required in voting as 
well, form 49A should be filled by the companion. The companion can vote immediately after the person with disability votes. Alternatively, a voter with disability may take the 
assistance of booth volunteer / presiding officer as well, if he or she desires so.

</p></div>

<p> <div class="question"> Authorities to approach regarding assistance for a voter withdisability at polling station:</div></p>
   <p> <div class="answer">A voter withdisability or his companion can approach the help desk or booth level officer or
        presiding officer for any specific requirements with regard to voting.
</p></div>

<p> <div class="question"> 21 disabilities enlisted in the Rights of Persons with Disabilities Act 2016: </div></p>
   <p> <div class="answer">Blindness, low vision, Deaf, hard of hearing, physical disabilities, mental illness (psycho social disabilities),
        leprosy cured, intellectual disabilities, cerebral palsy, dwarfism, muscular dystrophy, acid attack victims, speech and language disability, specific 
        learning disabilities, autism spectrum disorders, chronic neurological disorders including multiple sclerosis and Parkinson's disease, 
       blood disorders including haemophilia, thalassemia, and sickle cell anaemia, and multiple disabilities.
</p></div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
    <script src="index.js"></script>
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=4ewHTtLY"></script>
  
</body>
<?php

$db = mysqli_connect("localhost","root","","signup");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>

<h1 class="ml12">Votes count until now!</h1>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

<table border="2" class="styled-table" width="100%">
  <tr>
  <th>sr. no.</th>
    <th>Voting Outcomes</th>
    <th>Vote count</th>
 
   
  </tr>

<?php



$records = mysqli_query($db,"SELECT S.id, S.flexRadioDefault, C.cnt
FROM demo  S
     INNER JOIN (SELECT flexRadioDefault, count(flexRadioDefault) as cnt
                   FROM demo 
                  GROUP BY flexRadioDefault) C ON S.flexRadioDefault = C.flexRadioDefault ORDER BY id DESC LIMIT 10"); // fetch data from database




while($data = mysqli_fetch_array($records,))
    

{
?>
  <tr>
  <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['flexRadioDefault']; ?></td>
    <td><?php echo $data['cnt']; ?></td>
 
    
  </tr>	
  
<?php
}

?>
</table>

<?php mysqli_close($db); // Close connection ?>
<script>
    // Wrap every letter in a span
var textWrapper = document.querySelector('.ml12');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml12 .letter',
    translateX: [40,0],
    translateZ: 0,
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 1200,
    delay: (el, i) => 500 + 30 * i
  }).add({
    targets: '.ml12 .letter',
    translateX: [0,-30],
    opacity: [1,0],
    easing: "easeInExpo",
    duration: 1100,
    delay: (el, i) => 100 + 30 * i
  });
    </script>
    <footer>
  <p>Contact us at:
  <a href="mailto:evotes21@gmail.com">Evotes21@gmail.com</a><br>
  Please fillout this <a href="https://forms.gle/GUQcZWvzCMhF47QT6" style="color=#ffffff">feedback form</a></p>
</footer>
</html>