<?php
if (is_array($category)){
    extract($category);
}
?>
<style>
    @import url(https://fonts.googleapis.com/css?family=Sniglet|Raleway:900);


body, html{
	height: 100%;
	padding: 0;
	margin: 0;
	font-family: Arial, Helvetica, sans-serif;
}
h1{
	font-weight: normal;
	font-size: 4em;
	margin: 0 auto;
	margin-top: 30px;
	width: 500px;
	color: #F90;
	text-align: center;

}

/* Animation webkit */
@-webkit-keyframes myfirst
{
	0% {margin-left: -235px}
	90% {margin-left: 100%;}
	100% {margin-left: 100%;}
}

/* Animation */
@keyframes myfirst
{
	0% {margin-left: -235px}
	70% {margin-left: 100%;}
	100% {margin-left: 100%;}
}

header{
	height: 160px;
}

#form{
	height: 100%;	
	overflow: hidden;
	position: relative;
	
}
form{
	margin: 0 auto;
	width: 500px;
	padding-top: 40px;
	color: black;
	position: relative;
	
	
}

.namecategory{
    display: flex;
    justify-content: space-between;
    align-items:center;
}
label, input, textarea{
	display: block;	
}
input, textarea{
	width: 350px;	
	border: none;
	border-radius: 20px;
	outline: none;
	padding: 10px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 1em;
	color: #676767;
	transition: border 0.5s;
	-webkit-transition: border 0.5s;
	-moz-transition: border 0.5s;
	-o-transition: border 0.5s;
	border: solid 3px black;	
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	box-sizing:border-box;
	
}
input:focus, textarea:focus{
	border: solid 3px #77bde0;	
}

textarea{
	height: 100px;	
	resize: none; 
	overflow: auto;
}
.input{
    width: 200px;
    gap: 10px;
    display: flex;
    justify-content: space-between;
    align-items:center;
}
.error{
    width: 140px;
}
input[type="button"]{
    width: 200px;
    text-decoration: none;
}
/* input[type="submit"]{
    background-color: #F90;
} */
input[type="submit"],
    [type="reset"],
    [type="button"]{
	color: black;
	height: 50px;
	cursor: pointer;
	margin-top: 30px;
	font-size: 1.29em;
	font-family: Arial, Helvetica, sans-serif;
	-webkit-transition: background-color 0.5s;
	-moz-transition: background-color 0.5s;
	-o-transition: background-color 0.5s;
	transition: background-color 0.5s;
}
input[type="submit"]:hover{
	background-color: #e58f0e;
	
}
label{
	font-size: 1.5em;
	margin-top: 20px;
	padding-left: 20px;
}
</style>
<div class="main-content">
    <div class="wrapper">
        <h1>Update Category</h1>

            <div class="">
                <form action="index.php?act=updatecate" id="waterform" method="post"  enctype="multipart/form-data">
  
                    <div class="formgroup" id="name-form">
                        <label for="name">Category Code</label>
                        <input type="text" id="name" name="categorycode" disabled/>
                    </div>
                    
                    <div class="formgroup" id="email-form">
                        <label for="email">Category Name</label>
                        <input type="text" name="categoryname" value="<?php if(isset($categoryname)&&($categoryname!="")) echo $categoryname; ?>">
                    </div>
					<div class="formgroup" id="">
                        <label for="image">Category Image</label>
                        <input type="file" name="hinh">
                    </div>
                    <h4>
                    <?php
                    if(isset($thongbao)&&($thongbao!=""))
                    echo $thongbao;

                    ?>
                    </h4>
                        <div class="input">
                        <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>">
                        <input type="submit" name="update" value="Update">
                        <input type="reset" valuelistcategory="Reset">
                        
                        </div>
                        <br>
                        <a href="index.php?act=listcategory"><input type="button" value="Category List"></a>
                    
                </form>
                
            </div>

            
        </div>
    </div>