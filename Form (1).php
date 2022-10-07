<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="regiform.css">
    <title>Registration Form</title>
</head>
<body>
	<style>
		*{
    padding: 0%;
    margin: 0px;
}
body{
    background-color: rgb(255, 231, 196);
    background-image: url(bg1.jpg);
    background-size: cover;
}


h4{
    position: absolute;

height: 102px;
left: 550px;
top: 50px;

font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif ;
font-style: normal;
font-weight: 700;
font-size: 50px;
line-height: 60px;
}
tr{
    padding: 25px;
    width: 100px;
    height: 30px;
    align-items: center;
    font-family: Georgia, 'Times New Roman', Times, serif;
   
   

}
form{
    position: absolute;
width: 500px;
height: 600px;
left: 470px;
top: 150px;


}


form{
    background-color: rgb(0, 38, 82);
    background-blend-mode: multiply;
    align-items:left;
    padding: 40px;
    height: 720px;
    border-radius: 10px;
    box-shadow: 0 10px 10px;
    
}
main{
    padding: -20px;
}
div.nm{
    margin-left: -330px;
    padding: 20px;
    font-size: 25px;
   color: white;

}

div.name input{
    border-radius: 5px;
    width: 400px;
    height: 30px;
}
div.dsn{
    margin-left:-270px;
    padding: 20px;
    color: white;
    font-size: 25px;
}
div.dat input{
    border-radius: 5px;
    width: 400px;
    height: 30px;
}
div.pn{
    margin-left:-280px;
    padding: 20px;
    color: white;
    font-size: 25px;
}
div.pno input{
    border-radius: 5px;
    width: 400px;
    height: 30px;
}
div.ml{
    margin-left:-300px;
    padding: 20px;
    color: white;
    font-size: 25px;
}
div.mli input{
    border-radius: 5px;
    width: 400px;
    height: 30px;
}
div.id{
    margin-left:-270px;
    padding: 20px;
    color: white;
    font-size: 25px;
}
div.did input{
    border-radius: 5px;
    width: 400px;
    height: 30px;
}
div.ps{
    margin-left:-300px;
    padding: 20px;
    color: white;
    font-size: 25px;
}
div.psa input{
    border-radius: 5px;
    width: 400px;
    height: 30px;
}
div.login{
    padding: 20px;
    
}
div.login input{

    background-color: rgb(255, 255, 255);
    width: 120px;
    height: 30px;
    border-radius: 20px;
    font-family: 'Times New Roman', Times, serif;

}
div.login input:hover{
    background-color: rgb(170, 170, 170);
}
.tt{
    
    align-items:right;

}
a.fn{
    color: aliceblue;
}
.fp{
    width: 50%;
    align-items: center;
    height: 30px;
    color: aliceblue;
    left: 500px;
}
div.fp{
    padding: 30px;
    margin-left: 240px;
}
input{
    border-radius: 5px;
    background-color: rgb(243, 243, 243);
    font-family: 'Times New Roman', Times, serif;
    
}

a.fn:hover{
    color: gray;
}
div.em{
    width: 100%;
    height: 200px;
    

}
div.nxt input{
    width: 130px;
    height: 30px;
    border-radius: 10px;
}
div.nxt input:hover{
    background-color: gray;
}
div.rr{
    height: 100px;
}
@media(max-width:800px) and (min-width:390px) {
    form{
        align-items: center;
        left:10%;
        padding-right: 10%;
        background-color: rgb(0, 38, 82);
        background-blend-mode: multiply;
        
        padding: 5%;
        width: 400px;
        height: 100%;
        border-radius: 10px;
        box-shadow: 0 10px 10px;
        
    }
    
    
     body{
        background-color: rgb(255, 73, 73);
        /* background-image: url(bg1.jpg); */
        
            background-image: url('../assets/bg.jpg');
       
        background-repeat: no-repeat;
    }
    h4{
        position: absolute;


left: 25%;
top: 10%;



font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif ;
font-style: normal;
font-weight: 600;
font-size: 35px;
line-height: 35px;
    }
    .fp{
        width: 50%;
        align-items: center;
        height: 30px;
        color: aliceblue;
        left: 500px;
    }
    div.fp{
        padding: 30px;
        margin-left: 200px;
    }

    
}
	</style>
    <center>
        <h4>
            Registration Form
        </h4>
        <form action="Form.php"  method="post">
             <div class="main">
                <div class="nm">
                    Name:
                </div>
                <div class="name">  
                    <input id="name" type="charecters" name="name" placeholder="Enter your Name">
                    <style>
                        input[type="charecters"]::placeholder{
                            text-align: 20px;
                            padding-left: 20px;
                            
                        }
                    </style>
                </div>
                <div class="dsn">
                    Designation:
                </div>
                <div class="dat">  
                    <input id="dat" type="charecters" name="designation" placeholder="Enter your designation">
                    <style>
                        input[type="characters"]::placeholder{
                            text-align: 20px;
                            padding-left: 20px;
                            
                        }
                    </style>
                </div>
                <div class="id">
                    Employee Id:
                </div>
                <div class="did">  
                    <input id="did" type="all" name="emp_id" placeholder="Enter your employee id">
                    <style>
                        input[type="all"]::placeholder{
                            text-align: 20px;
                            padding-left: 20px;
                            
                        }
                    </style>
                </div>
                <div class="pn">
                    Phone No.:
                </div>
                <div class="pno">  
                    <input id="pno" type="numbers" name="phn_no" placeholder="Enter your Phone number">
                    <style>
                        input[type="numbers"]::placeholder{
                            text-align: 20px;
                            padding-left: 20px;
                            
                        }
                    </style>
                </div>
                <div class="ml">
                    E-mail Id:
                </div>
                <div class="mli">  
                    <input id="mli" type="all" name="email" placeholder="Enter your E-mail id">
                    <style>
                        input[type="all"]::placeholder{
                            text-align: 20px;
                            padding-left: 20px;
                            
                        }
                    </style>
                </div>
                <div class="ps">
                    Password:
                </div>
                <div class="psa">  
                    <input id="psa" type="all" name="pwd" placeholder="Enter your Password">
                    <style>
                        input[type="all"]::placeholder{
                            text-align: 20px;
                            padding-left: 20px;
                            
                        }
                    </style>
                </div>
                <div class="fp">
                     
                    <a href="" class="fn">Forgot Password?</a>
                    
                 </div>  
                 <div class="nxt">
                    <input type="submit" class="next" value="next" onclick= >
                 </div>
                 <div class="rr"></div>
        </form>
    </center>
</body>
</html>