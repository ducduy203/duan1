<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>WowFood</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    
    font-family: 'Montserrat', sans-serif;
}

section{
    padding: 20px;
    overflow: hidden;
}

section .header{
    text-align: center;
    padding-bottom: 60px;
}

.header h2{
    font-size: 32px;
    font-weight: 600;
    margin-bottom: 20px;
    padding-bottom: 20px;
    position: relative;
}

.header h2::after{
    content: "";
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    display: block;
    width: 50px;
    height: 3px;
    background: #008072;
    margin: auto;
}

.header p{
    margin-bottom: 0;
    color: #6f6f6f;
}


.container{
    max-width: 1300px;
    box-shadow: 0px 2px 25px rgb(0 0 0 / 10%);
    border-radius: 10px;
    margin: auto;
    display: flex;
    transition: 0.4s all ease-in-out;
}

.info_container{
    padding: 20px;
    max-width: 35%;
    width: 100%;
    background: #008072;
    border-radius: 10px 0 0 10px;
    color: #fff;
}

.info_container .info_item{
    padding: 20px;
    background: #009282;
    border-radius: 10px;
    margin-bottom: 20px;
}

.info_container .info_item:last-child{
    margin: 0;
}

.info_item .icon{
    float: left;
    clear: left;
    margin-right: 15px;
    height: 75px;
}

.icon i{
    font-size: 20px;
    color: #fff;
    width: 44px;
    height: 44px;
    background-color: rgba(255, 255, 255, 0.2);
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    transition: all 0.3s ease-in-out;
}

.info_item:hover i{
    background: #fff;
    color: #009282;
}

.information h4{
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 5px;
}

.information p{
    font-size: 15px;
    line-height: 1.7;
}

.input_container{
    max-width: 65%;
    width: 100%;
    padding: 30px;
}

form .row{
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 30px;
}

form .form_control{
    border: 1px solid #ced4da;
    outline: none;
    font-size: 14px;
    padding: 12px 15px;
    color: #212529;
    width: 100%;
    margin-bottom: 25px;
    transition: 0.3s;
    line-height: 1.5;
}

.form_control:focus{
    border-color: #009282;
}

textarea{
    resize: none;
    font-family: sans-serif;
}

.btn{
    width: 100%;
    text-align: center;
}

.btn button{
    background: #008072;
    border: 0;
    padding: 16px 45px;
    color: #fff;
    border-radius: 50px;
    cursor: pointer;
    font-size: 17px;
    font-weight: 400;
    transition: 0.4s;
}

.btn button:hover{
    background: #019e8b;
}

@media screen and (max-width: 1400px) {
    
    .container{
        max-width: 1100px;
    }

    .information p{
        font-size: 13px;
    }
}

@media screen and (max-width: 1200px){
    .container{
        max-width: 900px;
    }
}

@media screen and (max-width: 991px){
    .container{
        max-width: 768px;
        flex-direction: column;
    }

    .info_container, .input_container{
        max-width: 100%;
    }

    .info_container{
        border-radius: 10px 10px 0 0;
    }

    .input_container{
        padding-top: 50px;
    }
}

@media screen and (max-width: 768px){
    section{
        padding: 50px 5px;
    }
    .container{
        max-width: 550px;
    }
    form .row{
        flex-direction: column;
        gap: 0;
    }
}
    </style>
</head>
<body>
    <section class="contact">
        <div class="header">
          <h2>Contact</h2>
          <!-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate maxime quas atque blanditiis nihil a fugit dolorum sapiente?</p> -->
        </div>
      
        <div class="container">
          <div class="info_container">
      
            <div class="location info_item">
              <div class="icon">
                <i class="fa-solid fa-location-dot"></i>
              </div>
              <div class="information">
                <h4>Location:</h4>
                <p>Nam Từ Liên - Hà Nội</p>
              </div>
            </div>
      
            <div class="email info_item">
              <div class="icon">
                <i class="fa-solid fa-envelope"></i>
              </div>
              <div class="information">
                <h4>Email:</h4>
                <p>nhom3@fpt.edu.vn</p>
              </div>
            </div>
      
            <div class="call info_item">
              <div class="icon">
                <i class="fa-solid fa-phone"></i>
              </div>
              <div class="information">
                <h4>Call:</h4>
                <p>0999999999</p>
              </div>
            </div>
      
            <div class="open_hours info_item">
              <div class="icon">
                <i class="fa-solid fa-clock"></i>
              </div>
              <div class="information">
                <h4>Open Hours:</h4>
                <p>Mon-Sat: 24/24h</p>
              </div>
            </div>
      
          </div>
      
          <div class="input_container">
            <form action="#">
              <div class="row">
                <input type="text" name="" id="" class="form_control" placeholder="Your Name" required>
                <input type="email" name="" id="" class="form_control" placeholder="Email Address" required>
              </div>
      
              <input type="text" name="" id="" placeholder="Subject" class="form_control" required>
              <textarea name="" id="" cols="30" rows="7" class="form_control" placeholder="Message" required></textarea>
      
              <div class="btn"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>
      </section>
</body>
</html>