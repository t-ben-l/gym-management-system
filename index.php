<!DOCTYPE>


<html>

    <head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">



        <style>


            body {

                width: 700px;
                height: 600px;
                background-color: grey;

            }

            #image
            {
                position: absolute;
                width: 40%;
                height: 80%;
                top: 10%;
                left: 10%;
                background-color: white;
                border: 3px solid  #00001a;
                box-shadow: 10px 10px 10px black;


            }
           #logo
            {
                position: absolute;
                width: 50%;
                height: 40%;
                left: 25%;
                top: 35%;

            }

            #txt1
            {
                  position: absolute;
                width: 80%;
                height: 30%;
                left: 10%;
                top: 2%;

                font-size: 25px;
                font-family: serif;
                text-align: center;
                color: #00004d;

            }
            #logo img
            {
                width: 100%;;
                height: 100%;

            }

            #text
            {
                position: absolute;
                width: 100%;
                left: 0%;
                text-align: center;
                height: 10%;
                top: 80%;
                color: orange;
                font-size: 23px;

             -webkit-animation-name: example; /* Safari 4.0 - 8.0 */
  -webkit-animation-duration:1s; /* Safari 4.0 - 8.0 */
  animation-name: example;
  animation-duration: 5s;
                animation-iteration-count: infinite;
}

/* Safari 4.0 - 8.0 */
@-webkit-keyframes example {
  0%   {background-color: red;}
  25%  {background-color: yellow;}
  50%  {background-color: blue;}
  100% {background-color: green;}
}

/* Standard syntax */
@keyframes example {
  0%   {color: #ffeb99;}
  20%  {color: #ffdb4d;}
      40%  {color:#e6b800;}
    50% {color: orange;}
    60% {color: #e6b800}
  80%  {color: #ffdb4d;}
  100% {color:  #ffeb99;}
}

            #left
            {
                 position: absolute;
                width: 30%;
                height: 80%;
                top: 10%;
                left: 53%;
                background-color: white;
                border: 3px solid  #00001a;
                box-shadow: 10px 10px 10px black;



            }

            #form
            {
                position: absolute;
                width: 90%;
                height: 60%;
                top: 2%;
                left: 5%;
                background-color:;



            }


            .label
            {
                position: absolute;
                width: 23%;
                height: 10%;
                font-size: 20px;
                font-family: serif;
                text-align: left;
                background-color: white;


            }

            #l1
            {
                top: 2%;
                text-align: center;
                left: 35%;
                font-size: 25px;

            }
              #ll
            {
                top: 18%;
                text-align: center;
                left: 0%;
                width: 100%;
                color: red;
                background-color: ;
                font-size: 18px;

            }

            #l2
            {
                top: 30%;


            }
            #l3{
                top: 60%;

            }
             #l4{
                top: 88%;
                 width: 50%;

            }
            .input
            {
                position: absolute;
                width: 100%;
                height: 12%;

                box-shadow: 5px 5px 5px #00004d;
               border: 1px solid #00004d;

            }

            #user
            {
                top: 40%;

            }

            #pass{
                top: 70%;
            }

            #btn
            {
                top: 100%;

                background-color: #00004d;
                color: white;
                font-family: serif;
                text-align: center;
                padding: 5px;
                font-size: 25px;
                left: -2%;
            }
        </style>
    </head>




    <body>

        <div id  = "image" >

            <div id = "txt1">
            Welcome to the<br>

European University of Lefke<br>
                gym scheduler<br>
            </div>
            <div id = "logo">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
            </div>


            <div id  = "text">

            "The right choice to be a step ahead"
            </div>


        </div>

    <div id = "left">


        <div id  = "form" >

        <div class = "label" id = "l1"> login </div>






        <div class = "label" id = "l2"> user name </div>

        <div class = "label" id = "l3"> password </div>

            <form action="log.php" method="post" >

        <div class = "label" id = "l4"> <input type="checkbox" name="remember" value=1 >remember me  </div>


            <input  type ="text" name="username" class = "input" id = "user" >
            <input  type ="password" name="password" class = "input" id = "pass" >
            <button type="submit" name="login" class = "input" id = "btn"  > log in </button>


            </form>

        </div>




        </div>
!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    </body>

</html>
