<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="footer.css">
    <style>
    
    footer{
    position: relative;
    
    bottom: 0%;
    width: 100%;
    background: #111;
    color: #d9d9d9;
    top: 200px;
}

.main-content1{
    display: flex;
}

.main-content1 .box1{
    flex-basis: 50%;
    padding: 10px 20px;
}

.box1 h2{
    font-size: 1.125rem;
    font-weight: 600;
    text-transform: uppercase;
}




.box1 .content1{
    margin: 20px 0 0 0;
}
.box1 .content1 p{
    text-align: justify;
}


#social .fa{
    padding: 20px;
    font-size: 20px;
    border-radius: 50px 50px 50px 50px;
    width: 20px;
    text-align: center;
    text-decoration: none;
    margin: 20px 2px;
  }
  
  #social .fa:hover {
      opacity: 0.4;
  }
  
  .fa-facebook {
    background: #3B5998;
    color: white;
  }
  
  .fa-twitter {
    background: #55ACEE;
    color: white;
  }
  
  .fa-google-plus {
    background: #dd4b39;
    color: white;
  }
  
  .fa-instagram {
    background: #125688;
    color: white;
  }


  .button1 {
    background-color:#ff0040;
    border-radius: 7px;
    color: white;
    padding: 7px 35px;
    text-align: center;
    font-size: 18px;
    margin: 4px 2px;
    cursor: pointer;
  }
  .button1:hover{
      background-color:#00cc00;
      color: black;

  }
    </style>
</head>

<body>
    <footer>

        <div class="main-content1">
            <div class="left1 box1">
                <h2>About Us</h2>
                <div class="content1">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. A id accusamus, architecto rem ullam
                        aspernatur.
                    </p>
                    <div id="social">
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-google-plus"></a>
                        <a href="#" class="fa fa-instagram"></a>
                    </div>
                </div>
            </div>


            <div class="center1 box1">

                <h2>Address</h2>
                <div class="content1">
                    <div class="place1">
                        <span class="fas fa-map-marker-alt"></span>
                        <span class="text1">University Of Engineering And Manegement Jaipur</span>
                    </div>
                    <div class="phone1">
                        <span class="fas fa-phone-alt"></span>
                        <span class="text">09876543221</span>
                    </div>
                    <div class="email1">
                        <span class="fas fa-envelope"></span>
                        <span class="text">team@gmail.com</span>
                    </div>
                </div>
            </div>
            <div class="right1 box1">

                <h2>Contact Us</h2>
                <div class="content1">
                    <form action="#">
                        <div class="email1">
                            <div class="text1">Email *</div>
                            <input type="email" required>
                        </div>
                        <div class="msg1">
                            <div class="text">Message *</div>
                            <textarea cols="25" rows="2" required></textarea>
                        </div>

                        <button class="button1"><span>SEND </span></button>

                    </form>
                </div>
            </div>
        </div>
        &copy; 2020 All Right Reverse || Created by Rohan Raj
    </footer>
</body>

</html>