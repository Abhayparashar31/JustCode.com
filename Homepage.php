<?php
require "database/connection.php";

$n=$_GET['name'];
$id=$_GET['id'];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Barriecito|Sniglet&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
 
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title >JustCode.com</title>
  </head>
  <body class="bg bg-dark">
    <!---Logo and navbar-->
    <nav class="navbar navbar-expand-sm navbar-dark  pl-5 fixed-top" id="nav">
        <h3 class="navbar-brand text-white font-weight-bolder colorchange">JustCode.com</h3>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-left" id="myMenu">
          <ul class="navbar-nav pl-5 a custom-nav ml-auto ">
            <li class="nav-item"><a href="#" class="nav-link text-white color mr-2 ">Home</a></li>
            <li class="nav-item"><a href="#fact" class="nav-link text-white color mr-2">Fact</a></li>
            <li class="nav-item"><a href="#courses" class="nav-link text-white color mr-2">Courses</a></li>
            <li class="nav-item"><a href="#gallery" class="nav-link text-white color mr-2">Gallery</a></li>
            <li class="nav-item"><a href="#Team" class="nav-link text-white color mr-2">Team</a></li>
            <li class="nav-item"><a href="#Find" class="nav-link text-white color mr-2">Find Us</a></li>
            <li class="nav-item"><a href="#contact" class="nav-link text-white color mr-1">Contact</a></li>
            <li class="nav-item"><a href="logout.php?id=<?php echo $id ?>" class="nav-link text-white  color  mr-1">Logout</a></li>
            <li class="nav-item"><a href="#contact" class="nav-link text-white color mr-1">Code with us</a></li>
          </ul>
        </div>
      </nav>
      <div class="bg-img" >  
        <!---image text-->
        <div class="container text-center text-white  header" >
          <h3>Welcome To Our <span id="changecolor">Website!</span></h3>
          <h1 >IT'S NICE TO SEE YOU</h1>
          <?php
        
      if(isset($_GET['name'])){?>
         <h2 class="text-light text-bolder name" style="font-size:60px;" ><?php echo $n;?></h2> <?php }
          else{?>
 <a href="index1.php" class="btn btn-warning text-white btn-lg rounded" role="button">Join Us</a>
        <?php  } ?>  
        </div>
  </div>
  <!---fact-->
    <div class="container-fluid border bg-danger" id="fact" >
    <div class="container pt-4 heading text-center ">
       <div class="row r1">
         <div class="col-lg-12 col-md-12 col-sm-6 col-auto">
      <h1  class="text-dark  font-weight-bolder" style="font-family: 'Sniglet', cursive; text-decoration-line: underline;">Welcome<span class="text-light font-weight-bold ml-2">to JustCode</span></h1></div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12  text-white " >
           <p id="p1">  Computer code or program code is the set of instructions forming a computer program which is executed by a computer.
                It is one of two components of the software which runs on computer hardware, the other being the data.
                Computers can only directly execute the machine code instructions which are part of their instruction set. Because these instructions are difficult for humans to read, and writing good programs in machine code or other low-level programming languages is a time-consuming task, most programmers write in the source code of a high-level programming language.
                This source code is translated into machine code by a compiler or interpreter so that the computer can execute it to perform its tasks.
                A compiler produces object code which is usually in machine language but may also be in an intermediate language which is at a lower level than the source.
                A runtime system is often used to execute object code by linking it with commonly used libraries.
                Bytecode is a lower level of source which is designed for more efficient interpretation by interpreters</p> 
        </div>
    </div></div></div> 
    <!---courses--> 
<div class="container-fluid border2 " id="courses" >
<div class="container" id="content" >
    
    <div class="row" > <div class="col-lg-12 col-md-12 col-sm-6 col-auto"><h2 class="h2"><center><strong class="heading text-white" style="font-family: 'Sniglet', cursive; text-decoration-line: underline;">Our<span class="text-danger ml-2">Courses</span></strong></center></h2>
    </div></div>
    <div class="row text-white mt-3">
        <div class="col-md-4 mouse ">
            <div class="text-justify mt-2 mb-2 "><img src="https://s3-ap-southeast-1.amazonaws.com/blog.internshala.com/wp-content/uploads/2018/09/What-is-HTML-and-how-to-learn-it-The-complete-guide-on-HTML-basics-558x372.jpg" class="img-responsive" alt="html5" width="350px"height="200px"></div>
            <div class="text-justify"><p class="text-white">From 1991 to 1999, HTML developed from version 1 to version 4. In year 2000, the World Wide Web Consortium (W3C) recommended XHTML 1.0. The XHTML syntax was strict, and the developers were forced to write valid and "well-formed" code.
                    In 2004, W3C's decided to close down the development of HTML, in favor of XHTML.
                    In 2008, the first HTML5 public draft was released.
                    In 2012, WHATWG and W3C decided .</p></div>
            <a type="button" class="btn rounded btn-primary mb-2" href="content/html/html.php">Learn HTML</a>
        </div>
        <div class="col-md-4 mouse ">
            <div class="text-justify  mt-2 mb-2 "><img src="http://www.problab.com/wp-content/uploads/2015/12/css3-training-in-chandigarh.jpg" class="img-responsive" alt="css" width="350px"height="200px" ></div>
            <div class="text-justify"><p class="text-white">
                    Cascading Style Sheets, fondly referred to as CSS, is a simple design language intended to simplify the process of making web pages presentable.
                    CSS handles the look and feel part of a web page. Using CSS, you can control the color of the text, the style of fonts, the spacing between paragraphs, how columns are sized and laid out, what background images or colors are used.
                   
                    </p>
                <a type="button" class="btn rounded btn-primary mt-4 mb-2" href="content/css.php">Learn CSS</a>
        </div>
        </div>
        <div class="col-md-4 mouse ">
            <div class="text-justify  mt-2 mb-2 "><img src="https://community-cdn-digitalocean-com.global.ssl.fastly.net/assets/tutorials/images/large/javascript.png?1512678119" class="img-responsive" alt="js" width="350px"height="200px"></div>
            <div class="text-justify"><p>JavaScript (JS) is a lightweight, interpreted, or just-in-time compiled programming language with first-class functions. While it is most well-known as the scripting language for Web pages, many non-browser environments also use it, such as Node.js, Apache CouchDB and Adobe Acrobat. JavaScript is a prototype-based, multi-paradigm, dynamic language.
                javascript is also useful in form validation.
        </p></div>
        <a type="button" class="btn rounded btn-primary mt-2 mb-2" href="content/javascript.php">Learn JavaScript</a>
    </div>
                                   
    </div>    
</div>
<div class="container" id="content-2">
    <br>
        <div class="row text-white mt-3">
            <div class="col-md-4 mouse mx-auto">
                <div class="text-justify mt-2 mb-2 "><img src="https://i0.wp.com/jacklyons.me/wp-content/uploads/2017/07/Jquery-Logo.png?resize=1280%2C700&ssl=1" class="img-responsive" alt="jquery" width="350px"height="200px"></div>
                <div class="text-justify"><p class="text-white">jQuery is a fast, small, and feature-rich JavaScript library. It makes things like HTML document traversal and manipulation, event handling, animation, and Ajax much simpler with an easy-to-use API that works across a multitude of browsers. With a combination of versatility and extensibility, jQuery has changed the way that millions of people write JavaScript.</p></div>
                <a type="button" class="btn rounded btn-primary  mb-2" href="content/jquery.php">Learn Jquery</a>
            </div>
            <div class="col-md-4 mouse ">
                <div class="text-justify  mt-2 mb-2 "><img src="https://blog.creative-tim.com/wp-content/uploads/2017/05/Twitter-Bootstrap-1.png" class="img-responsive" alt="bootstrap" width="350px"height="200px" ></div>
                <div class="text-justify"><p class="text-white">
                        Build responsive, mobile-first projects on the web with the world’s most popular front-end component library.

                        Bootstrap is an open source toolkit for developing with HTML, CSS, and JS. Quickly prototype your ideas or build your entire app with our Sass variables and mixins, responsive grid system.
                        </p>
                    <a type="button" class="btn rounded btn-primary mt-4 mb-2" href="content/bootstrap.php">Learn Bootstrap</a>
            </div>
            </div>
            <div class="col-md-4 mouse ">
                <div class="text-justify  mt-2 mb-2 "><img src="http://arrayoutofbound.com/wp-content/uploads/2019/03/php1.jpg" class="img-responsive" alt="Php" width="350px"height="200px"></div>
                <div class="text-justify"><p>PHP (recursive acronym for PHP: Hypertext Preprocessor) is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML.What distinguishes PHP from something like client-side JavaScript is that the code is executed on the server.
            </p></div>
            <a type="button" class="btn rounded btn-primary mt-4 mb-2" href="content/php.php">Learn PHP</a>
        </div>
                                       
        </div>    
    </div> </div>
    <!---Picture gallary-->
<div class="container mt-2" id="gallery">
    <header class="h2 text-center text-danger font-weight-bolder" style="font-family: 'Sniglet', cursive;">Picture gallery</header>
</div>
<div class="container-fluid c my-2" id="gallery-content">
  <div class="row ro">
    <div class="column co">
    <img src="images/img-3.jpg " id="img1" class="border2 mouse" onmouseover="zoomin()"onmouseout="zoomout()">
    <img src="images/img-4.jpeg " id="img2" class="border2 mouse">
    <img src="images/img-6.jpg"  id="img3" class="border2 mouse">
    <img  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQrVYdBg5CoGftz8BidBXwKCie-dN-NNIt_QMq86PCgi-Kn7ZfAfg"  id="img4" class="border2 mouse">
    
  </div>
  <div class="column co">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9aGr-PHM3rCef4rkK78K4WMj5Bluqk1YY2xWKtw-kMmw_kOiI"  id="img11" class="border2 mouse">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQGeW9ePkolm2Mgqs-JIyHzTel0ZZdyGxt7ire6gPLDCeaMkKG6"  id="img22" class="border2 mouse">
          <img src="images/img-9.jpg"  id="img33" class="border2 mouse">
         <img height="150px;"src="images/img-5.jpg"  id="img44" class="border2 mouse">
         
</div>
<div class="column co" id="gallery-content">
    <img src="images/img1.png"  id="img5" class="border2 mouse">
    <img src="images/img-2.jpg"  id="img6" class="border2 mouse">
    <img src="images/img-8.jpg"  id="img7" class="border2 mouse">
    <img src="https://i.udemycdn.com/course/750x422/1161676_03a4_2.jpg"  id="img8" class="border2 mouse">
</div>
<div class="column co" id="gallery-content">
    <img src="https://i.udemycdn.com/course/750x422/1161676_03a4_2.jpg"  id="img55" class="border2 mouse">
    <img src="images/img-7.jpg" id="img66" class="border2 mouse">
    <img src="https://www.ite.edu.sg/wps/wcm/connect/ea08eb004f6ea156a718b7322353bd4f/Games+Programming+%26+Development.jpg?MOD=AJPERES&CACHEID=ea08eb004f6ea156a718b7322353bd4f"  id="img66" class="border2 mouse">
    <img src="https://qph.fs.quoracdn.net/main-qimg-f5119f96e28514954b7d8f3c56ede20f.webp"  id="img77" class="border2 mouse">
</div>
</div></div>
    <!---Our Team-->
  <div class="jumbotron bg-danger border" id="Team">  
    <div class="container-fluid">    
      <h2 class="text-center text-dark font-weight-bolder text2 heading" style="font-family: 'Sniglet', cursive; text-decoration-line: underline;">Our<span class="text-white"> Team</span></h2>    <!-- Team Heading-->
      <div class="row mt-5">   
        <div class="col-lg-3 col-sm-6 ">    
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center  mouse">
              <img src="http://4.bp.blogspot.com/-EtgZqoZX2dE/Uwjk3qbwbBI/AAAAAAAACH4/8vJw4USybms/s1600/Guido+van+Rossum.jpg" class="img-fluid" style="height: 250px;border-radius: 100px;">
              <h4 class="card-title">van rossom</h4>
              <p class="card-text">Front end designer</p>
            </div>
          </div>
        </div>    

        <div class="col-lg-3 col-sm-6">    
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center mouse">
              <img src="https://i2.wp.com/generalassemb.ly/blog/wp-content/uploads/2015/08/jimmy-fallon.jpg?ssl=1" class="img-fluid" style="border-radius: 100px; height: 250px;">
              <h4 class="card-title">Jimmy fallon</h4>
              <p class="card-text">Database handler</p>
            </div>
          </div>
        </div>      

        <div class="col-lg-3 col-sm-6">       
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center mouse">
              <img src="images/avtar3.jpg" class="img-fluid" style="height: 250px;border-radius: 100px;">
              <h4 class="card-title h3">Abhay Parashar</h4>
              <p class="card-text h5">Main Designer</p>
            </div>
          </div>
        </div>       

        <div class="col-lg-3 col-sm-6">        
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center mouse">
              <img src="https://www.superprof.co.uk/blog/wp-content/uploads/2018/01/Isis_Anchalee_at_TechCrunch_Disrupt_2015_21666524961-700x466.jpg" class="img-fluid" style=" height: 250px;border-radius: 100px;">
              <h4 class="card-title">Jyoti Sinha</h4>
              <p class="card-text">back end designer</p>
            </div>
          </div>
        </div>     
      </div>    
    </div>  
  
</div>
<!----Find us-->
<div class="container-fluid" id="Find">
        <div class="row "><div class="col-lg-12 col-md-12 col-sm-6 col-auto" > <h1 class="h1" ><strong class="heading text-white" style="font-family: 'Sniglet', cursive; text-decoration-line: underline;">Find<span class="text-danger ml-2">Us</span></strong></h1>
        </div></div>
</div>


 <div class="container-fluid border" >
            <iframe class="mouse" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29059.731746591788!2d85.5140052740404!3d24.434596342402468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f37497f9fdfef1%3A0x995e83c0bc7a9456!2sJhumri+Telaiya%2C+Jharkhand+825409!5e0!3m2!1sen!2sin!4v1562040073548!5m2!1sen!2sin" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <!----footer-->
<section class="footer bg-danger py-2 border" id="contact">

<footer class="page-footer font-small mdb-color lighten-3 pt-4 mouse">
        <div class="container text-center text-md-left">
          <div class="row"> 
              <div class="col-md-6 col-lg-4 mr-auto my-md-4 my-0 mt-4 mb-1 ">
                  <h3 class="text-center text-white">Contact Us</h3>
                    <form  action="contact_info.php" method="post">
                            <input class="form-control" id="name" class="name" name="name" placeholder="Name" autocomplete="off"/><span id="s1" style="color:white;font: weight 3;"></span><br />
                            <input class="form-control" id="email" class="email" name="email" placeholder="E-mail" autocomplete="off" /><span id="s2" style="color:white;font: weight 3;"></span><br />
                            <textarea class="form-control" id="msg" class="msg" name="text" placeholder="How can we help you?" autocomplete="off" style="height:60px;"></textarea><span id="s3" style="color:white;font: weight 3;"></span><br/>
                            <input class="btn btn-primary" type="submit" class="send" value="Send" id="btn" /><br /><br />
                    </form>
                </div>
      
      
            <hr class="clearfix w-100 d-md-none">
      
                     <hr class="clearfix w-100 d-md-none">
              <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1 ">
              <h5 class="font-weight-bold text-white text-uppercase mb-4">Address</h5>
      
              <ul class="list-unstyled">
                <li>
                  <p class="text-white"  >
                    <i class="fas fa-home mr-3 "></i>jh-41 jhumri Telaiya, Jharkhand</p>
                </li>
                <li>
                  <p class="text-white">
                    <i class="fas fa-envelope mr-3 "></i>Parasharabhay13@gmail.com</p>
                </li>
                <li>
                  <p class="text-white">
                    <i class="fas fa-phone mr-3  text-white"></i>+91-8503847160</p>
                </li>
                <li>
                  <p class="text-white">
                    <i class="fas fa-print mr-3  text-white"></i>+91-8503847160</p>
                </li>
              </ul>
              <br>
              <br>
              <div class="font-weight-bold  ">
              <a href="#" class="text-white h3 text-lg mx-1">F&Q</a>
              <a href="#" class="text-white  h3 text-lg mx-1">Disclaimer</a>
              <a href="#" class="text-white  text-lg mx-1">Privacy Policy</a>
              <a href="#" class="text-white  text-lg mx-1">Data Updates</a>
              <a href="#" class="text-white   text-lg ml-5 ">Accessibility</a>
            </div></div>
            <hr class="clearfix w-100 d-md-none">
             <div class="col-md-2 col-lg-2 text-center mx-auto my-4 ">
              <h5 class="font-weight-bold text-uppercase mb-4 text-white">Follow Us</h5>
                <ul>
                    <li><a href="#" class="text-white font-weight-bolder h3 ">Facebook</a></li>
                    <li><a href="#" class="text-white font-weight-bolder h3 ">Twitter</a></li>
                    <li><a href="#" class="text-white font-weight-bolder h3 ">Instagram</a></li>
                    <li><a href="#" class="text-white font-weight-bolder h3 ">Google+</a></li>
                </ul>
                    <br><br>
                    <div class="row">
                      
        <div class="col-md-12 text-left"> 
            <small class="text-white"> Designed by <a href="#" class="text-white" target="_blank">JustCode(Abhay Parashar)</a> &copy; 2019. </small>
          </div>
            </div>
                </div>
            </div>
        </div>
    </section>
</div>



       <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="javascript/contactus.js" type="text/javascript"></script>
    <script src="javascript/gallary.js" type="text/javascript"></script>
    <script src="javascript/scroll.js" type="text/javascript"></script>
  </body>
</html>