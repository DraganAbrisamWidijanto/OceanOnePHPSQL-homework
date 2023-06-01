
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
        <title>Save our ocean</title>
        <link href="style.css" rel="stylesheet"/>
        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    </head>
<body>
    <div class="sectionone min-vh-100 d-flex flex-column">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
      
          <div class="navbar-brand">
            <img class="imglogo" src="./gambar/saveocean.png" width="85px" height="85px">
          </div>
      
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ms-auto">
      
              <li class="nav-item me-md-5">
                <a class="nav-link" style="font-family: Poppins; font-weight: 400;" href="#lembar2">Actions</a>
              </li>
      
              <li class="nav-item me-md-5">
                <a class="nav-link hov" href="#lembar3" style="font-family: Poppins; font-weight: 400;">Resources</a>
              </li>
      
              <li class="nav-item me-md-5">
                <a class="nav-link hov" href="#lembar4" style="font-family: Poppins; font-weight: 400;">Projects</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="#lembar5" style="font-family: Poppins; font-weight: 400;">Explore</a>
              </li>
      
            </ul>
          </div>
        </div>
      </nav>
      <div class="home d-flex align-items-center flex-fill">
      <div class="container">
        <div class="justify-content-center align-items-center ">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "oceanonehomework";

            $conn = mysqli_connect($servername, $username, $password, $database);

            if(!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $query = "SELECT * FROM sectionsatu_data";
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<h3 class='text-center text-black bg-opacity-75 mt-3' style='font-size: 64px;'>".$row['title']."</h3>";
                echo "<p class='text-center text-white' style='font-size: 20px;'>".$row['description']."</p>";
                echo "<div class='container mt-1'>";
                echo "<div class='row'>";
                echo "<div class='col text-center'>";
                echo "<div class='d-flex align-items-center justify-content-center'>";
                echo "<button class='btn pe-5 ps-5 pt-2 pb-2' style='background-color: #06BEE1; font-family: Lato; font-weight: 900; color: white;' onclick='alert(\"I\'m taking action\")'>".$row['button_text']."</button>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }

            mysqli_close($conn);
            ?>
        </div>
    </div>
          </div>
</div>
  
        <!-- <div class="d-flex align-items-center flex-fill" >
          <div class="container">
            <div class="justify-content-center">
              <h1 class="text-center text-black bg-opacity-75 mb-3">Together We Save the Ocean from Plastic Waste</h1>
              <div class="bg-dark bg-opacity-50 mb-5">
                <p class="text-light  text-center" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: 500; margin: 0 auto;">
                  Plastic waste can cause damage to marine ecosystems, threaten the survival of marine species, and disrupt the overall environmental balance.
                </p>
              </div>
              
              <div class="container mt-1">
                <div class="row">
                  <div class="col text-center">
                    <div class="d-flex align-items-center justify-content-center" >
                      <button class="btn pe-5 ps-5 pt-2 pb-2" onclick="sayHello()" style="background-color: #00c3ff; font-family: Poppins; font-weight: 900; color: white; " >Take Action</button>
                    </div>
                  </div>
                </div>
           </div>
          </div> -->
        </div>
        </div>
      </div>
    </div>
    <div class="sectiontwo min-vh-100" id="lembar2">
      <div class="section container mb-5">
        <h1 class="mt-5">What happens when</h1>
        <h1 >the sea is polluted by garbage?</h1>
        <div class="row mt-5">
          <div class="col-sm-4 d-flex flex-column mt-5 EditableArea" id="editableTextArea">
            <h2>Impact on human health</h2>
            <p id="ALIGN_MESSAGE">If we consume fish or marine animals contaminated with plastic waste, it can cause health problems in humans, such as poisoning or other diseases.
              <sup><a href='##' onclick="TextEditALIGN()">[Click To Edit]</a></sup>
            </p>
            <button class="btn mt-auto align-self-md-start" style="background-color: #06BEE1; font-family: Poppins; font-weight: 500; color: white;">LEARN MORE</button>
          </div>
          <div class="col-sm-4 d-flex flex-column mt-5">
            <h2>Disturbance to marine ecosystems</h2>
            <p>Plastic waste can disrupt the balance of marine ecosystems because many marine animals are trapped in plastic waste or eat it as food, which can cause death or disrupt their life cycle.</p>
            <button class="btn mt-auto align-self-md-start" style="background-color: #06BEE1; font-family: Poppins; font-weight: 500; color: white;">PREVENT NOW</button>
          </div>
          <div class="col-sm-4 d-flex flex-column mt-5">
            <h2>Economic damage</h2>
            <p>If the tourism industry, fishing or other sectors that depend on marine ecosystems are affected by plastic waste pollution, it can cause significant financial losses.</p>
            <button class="btn mt-auto align-self-md-start" style="background-color: #06BEE1; font-family: Poppins; font-weight: 500; color: white;">SEE HOW</button>
          </div>
        </div>
    </div>
    <div class="sectionthree section pb-5" id="lembar3">
      <div class="container">
        <p> <br></p>
      <h1 class="text-center" style="color: white; margin-top: 1cm;"> Make Your Impact</h1>
      <div class="row mt-5">
        <div class="col-sm-4 d-flex flex-column">
            
          <img src="gambar/reduce.png"  class="rounded-circle mx-auto" style="width: 150px; height: 150px;" alt="Cinque Terre">
          <h5 class="text-center m-4" style="color: white;">
            COMMIT TO REMOVING A SPECIFIC AMOUNT
          </h5>

        </div>

        <div class="col-sm-4 d-flex flex-column ">
            
          <img src="gambar/pilah.png"  class="rounded-circle mx-auto" style="width: 150px; height: 150px;" alt="Cinque Terre">
          <h5 class="text-center m-4" style="color: white;">TIE REMOVAL TO PRODUCT SALES</h5>

        </div>

        <div class="col-sm-4 d-flex flex-column">
            
          <img src="gambar/educate.png"   class="rounded-circle mx-auto" style="width: 150px; height: 150px;" alt="Cinque Terre">
          <h5 class="text-center m-4" style="color: white;">INCENTIVIZE COMMUNITY ACTION</h5>

        </div>
      </div>
      </div>
    </div>
    
    <div class="sectionfour" id="lembar4">
      <div class=" section">
        <div class="container">
          <h5 class="mt-5"> Project 1 :</h5>
          <h1 >OCEANBOUND CLEAN UP</h1>
        </div>

        <div class="container mt-5">
        

        <div class="row" >
          <div class="col-xs-12 col-sm-6 col-md-6 bg-black sectionfour__img sectionfour__bg1" style="height: 400px;">
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 e d-flex " style="height: 400px; background: transparent;">
            <div class="my-auto col-lg-12 col-12 ">
            <h4 style="color: black;">Problems</h4>
              <p style="color: black;">Discarded fishing gear like nets and ropes is a major threat to sea life when left in the ocean. Without proper incentives for recovery, this gear is often dumped in landfills or cut away at sea, contributing to the high amount of plastic pollution in the ocean.</p>
            </div>
          </div>
        </div>


        <div class="row" >
          <div class="col-xs-12 col-sm-6 col-md-6 bg-black sectionfour__img  order-lg-2 order-md-2 order-sm-2 sectionfour__bg2" style="height: 400px;">
            
          </div>

          <div class="col-xs-12 col-sm-6 col-md-6 e d-flex order-lg-1 order-md-1 order-sm-1" style="height: 400px; background: transparent;">
            <div class="my-auto col-lg-12 col-12">
              
            <h4 style="color: black;">Solution</h4>
              <p style="color: black;">Our program aims to provide the necessary funds to encourage fishermen to collect and recycle their end-of-life fishing gear. By doing so, we create a viable pathway for the reclamation of these materials, which would otherwise end up polluting our oceans and contributing to the global plastic crisis.</p>
            </div>
          </div>
        </div>
      </div>
      </div>


      <div class=" section">
        <div class="container">
          <h5 class="mt-5">Project 2 :</h5>
          <h1 >FISHING NET RECOVERY</h1>
        </div>

        <div class="container mt-5">

        <div class="row" >
          <div class="col-xs-12 col-sm-6 col-md-6 bg-black sectionfour__img sectionfour__bg3" style="height: 400px;">
            
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 e d-flex " style="height: 400px; background: transparent;">
            <div class="my-auto col-lg-12 col-12">
              
            <h4 style="color: black;">Problems</h4>
              <p style="color: black;">Fishing gear - nets and ropes - pose a significant risk to sea life if cut away in the ocean. Unfortunately, incentives do not exist to recover this gear so at the end of its life, most gets landfilled or simply cut away at sea. It's a huge reason for why fishing nets are the largest ocean plastic polluter.</p>
            </div>
          </div>
        </div>

        <div class="row" >

          <div class="col-xs-12 col-sm-6 col-md-6 bg-black sectionfour__img  order-lg-2 order-md-2 order-sm-2 sectionfour__bg4" style="height: 400px;">
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 e d-flex order-lg-1 order-md-1 order-sm-1" style="height: 400px; background: transparent;">
            <div class="my-auto col-lg-12 col-12">
              
            <h4 style="color: black;">Solution</h4>
              <p style="color: black;">We provides the funds needed to incentivize collection and recycling of this gear. This program creates a pathway for the reclamation of end of life fishing gear.</p>
            </div>
          </div>


        </div>
      
        </div>
      </div>
    </div>
<div class="sectionfive" id="lembar5">
  <div class=" section container">

    <h1 class="text-center">GET IN TOUCH</h1>

    <div class="row mt-5" >
      <div class="col-xs-12 col-sm-6 col-md-6" style="height: 400px;" id="googlemap">
        <iframe src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=sekolah vokasi UGM&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" style="height: 100%; width: 100%;"  allowfullscreen></iframe>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 e d-flex " style="height: 400px;">
        <div class="my-auto col-lg-12 col-12">
          <form  style="width: 100%;">
            <div class="form-group ">
              <input type="text" class="form-control w-50"  id="NameInput" placeholder="Enter your name">
            </div>
            <div class="form-group mt-4">
              
              <input type="email" class="form-control w-50"  id="EmailInput" placeholder="Enter your email">
            </div>
            <div class="form-group mt-4">
             
              <textarea class="form-control w-80 "  id="MessageInput" rows="5" placeholder="Enter your message"></textarea>
            </div>
            <button type="submit " class="btn  mt-4" style="background: #00c3ff; color: white;" onclick="submitForm(event)">Submit</button>
          </form>
        </div>
      </div>
    </div>
    <div class="result" id="resultForm"></div>
  </div>

  <footer>
    <div class="container" style="color: white; font-weight: 600;">
      <div class="row">
        <div class="col-md-4 footer-column">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link " href="#">Newsletter</a>
            </li>
          </ul>
        </div>
        <div class="col-md-4 footer-column">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="#">Privacy Policy</a>
            </li>
          </ul>
        </div>
        <div class="col-md-4 footer-column">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="#">FAQS</a>
            </li>
          </ul>
        </div>
      </div>
  
      <div class="text-center"><i class="fas fa-ellipsis-h"></i></div>
      
      <div class="row text-center">
        <div class="justify-content-center">
          <img class="imglogo" src="./gambar/saveocean.png" width="85px" height="85px">
          <span class="copyright quick-links">Copyright &copy; Save The Oceans <script>document.write(new Date().getFullYear())</script>
          </span>
        </div>
      </div>
    </div>
  </footer>

</div>
</body>
<script>
  function sayHello(){
    alert("Hello!");
}

function TextEditALIGN(){
    var originalTextALIGN = document.getElementById("ALIGN_MESSAGE").innerText;
    var textALIGN = originalTextALIGN.replace("[Click to Edit]", "").trim();

    document.getElementById("editableTextArea").innerHTML = '\
    <form> \
        <textarea name="textEdit" id="textEdit" cols="30" rows="10" style="border-radius: 10px; padding: 10px;">' +
            textALIGN +
        '</textarea>\
        <br>\
        <input type="submit" value="Save" onclick="TextUpdateALIGN()">\
    </form>';
}

function TextUpdateALIGN(){
        var text = document.getElementById("textEdit").value;
        document.getElementById("editableTextArea").innerHTML = '<p>'+ text + '\
        <sup><a href="##" onclick="TextEditALIGN()">[Click To Edit]</a></sup></p>';
    }
    
function submitForm(event) {
        event.preventDefault();
    
        var name = document.getElementById("NameInput").value;
        var email = document.getElementById("EmailInput").value;
        var message = document.getElementById("MessageInput").value;
    
        var resultHTML = "<h2>Your Form is Submitted.</h2>" +
            "<p>Hi " + name + "!</p>" +
            "<p>Thank you for participating. Check your " + email + " to see the follow up</p>" +
            "<p>Message : <br>" + message + "</p>";
    
        var resultForm = document.getElementById("resultForm");
        resultForm.innerHTML = resultHTML;
    }
</script>
<link href="custom.js" rel="stylesheet"/>
</html>