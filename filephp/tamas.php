
<html>
	<head>
<meta charset="utf-8">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
 
  <link type="text/css" rel="stylesheet" href="tarahi.css">
<title>Untitled Document</title>
		    <style>
        .error {color: #FF0000;}
    </style>

</head>
	
<body>
<?php  
$nameErr=$emailErr = "";
$name=$email = $comment = "";


   
if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['comment']) )
{
	   if (empty($_POST["name"])) {
        $nameErr = "Name is required";
        } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

 

    if (empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
    }
}
	function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if(array_key_exists('stu_file',$_FILES)){
    $file=$_FILES['stu_file'];
    //print_r($file);
    $name=$file['name'];
    if($file['size'] > 1000)
	   echo "Sorry, your file is too large.";
		
    $type=$file['type'];
    $tmp_name=$file['tmp_name'];

//echo $tmp_name;
if(file_exists("uploads/".$name)) echo "already exist";
else move_uploaded_file($tmp_name,"uploads/".$name);
	}

 
?>
	<div class="header">
                 <h1> آکادمی آنلاین درسمن </h1>
         </div>
		<nav>
		
		 <ul class="a">
		 
            <li class="active">
			    <a class="a1" href="index.html"><i class="fa fa-home" aria-hidden="true"></i></a>
			</li>
			<li> 
				<div class="dropdown">
			    <a class="a1" href="#">برنامه نویسی وب </a>
				     <div class="dropdown-content">
						 <a class="menu" href="php.html">PHP</a>
                       <a class="menu" href="asp.html">ASP.NET MVC</a>
				 
			     	</div>
			    </div>
            </li>
			 <li> 
				<div class="dropdown">
			    <a class="a1" href="#">برنامه نویسی اندروید </a>
				     <div class="dropdown-content">
						  <a class="menu" href="android.html">ANDRIOD</a>
					</div>
				 </div>
			 </li>
			 <li>
				 <div class="dropdown">
			    <a class="a1" href="#">آموزش طراحی سایت </a>
				     <div class="dropdown-content">
						  <a  class="menu" href="css-html.html">HTML-CSS</a>
						  <a class="menu" href="bootstrap.html">BOOTSTRAP</a>
						  <a class="menu" href="javascript.html">JAVASCRIPT</a>
					 </div>
				 </div>
				  
			 </li>
			 
			  <li>
				 <div class="dropdown">
			    <a class="a1" href="#">بانک های اطلاعاتی </a>
				     <div class="dropdown-content">
						   <a class="menu" href="sql.html">SQL SERVER</a>
						   
					 </div>
				 </div>
				  
			 </li>
			 
			 <li>
				 <div class="dropdown">
			    <a class="a1" href="#">برنامه نویسی پایه </a>
				     <div class="dropdown-content">
						 	   <a class="menu" href="java.html">JAVA</a>
				               <a class="menu" href="python.html">PYTHON</a>
					     	   <a class="menu" href="algoritm.html"> ALGORITM fLOCHAART</a>
			    			    <a class="menu" href="csharp.html">CSHARP</a>
						  
					 </div>
				 </div>
				  
			 </li>
			 
			
            <li >
				<div class="dropdown">
                <a class="a1" href=" ">  مقالات</a>
					<div class="dropdown-content">
					  <a class="menu" href="maqalatHtml.html">html</a>
                      <a  class="menu" href="maqalatC.html">c#</a>
                      
			     	</div>
				</div>
            </li>
            <li  >
                <a class="a1" href="tamas.html">ارتباط با ما </a>
            </li>
            <li  >
                <a class="a1" href="vorud.html"> ورود کاربران </a>
            </li>
        </ul>
		 </nav>
	
	 
	<div class="row">
		 
		 <div class="leftlcolumnindex">
			 <div class="left">
        <form class="form1" method="post" action="tamas.php" enctype="multipart/form-data">
          <h1 class="topic"><b>فرم تماس با ما</b></h1> 
			<br>
	<label for="name" class="text1"><b> نام  </b></label>
    <input  id="name"  type="text" name="name"  class="text2" >
    <span class="error">* <?php echo $nameErr;?></span>
	<br><br>
			
	<label for="email" class="text1"><b>  پست الکترونیک  </b></label>
	<input id="email"  type="text" class="text2" name="email"  >
	<span class="error">* <?php echo $emailErr;?></span>
    <br><br>
			
    
    <label  class="text1"><b>توضیحات</b></label>
    <br><br>
    <textarea style="width: 250px;height: 100px" name="comment">
        </textarea>
    <br><br>
			<input type="submit" value="ارسال" class="button">
	<br><br>
			<input type="file" name="stu_file" class="text2">
	<br>
            <input type="submit" value="بارگذاری" class="button">
			   
 
		   </form> 
		</div>
	</div> 
					
      <div class="rightcolumnindex">
		   <div >
        <h2 class="mtn"><b>اطلاعات تماس</b></h2>
        <b style="color:darkcyan">شماره تماس</b>
        <br><br>
        <span style="color: darkcyan">098887766</span>
        <br><br>
        <b style="color:darkcyan">ایمیل</b>
        <br><br>
        <span style="color:darkcyan">darsman.com@gmail.com</span>
        <br><br>
	 </div>
		  
		  
		</div>	  
		   
      
		</div>  
	<div class="footer">
			<table>
                 <tr>
                       <th> آکادمی آنلاین درسمن</th>
                        <th>دوره های رایگان</th>
                         <th>جدید ترین دوره ها</th>
                  </tr>
                   <tr>
                        <td> آدرس :تهران خیابان ولیعصر</td>
                         <td><a href="csharp.html">آموزش سی شارپ</a></td>
                          <td><a href="algoritm.html">آموزش ویژوال استادیو کد</a></td>
                    </tr>
                     <tr>
                          <td>تماس :021-669944</td>
                          <td><a href="java.html"> آموزش جاوا</a> </td>
						   <td><a href="php.html">آموزش php</a></td>
                     </tr>
                       <tr>
                               <td>ایمیل: darsman78@gmail.com</td>
                         	  <td><a href="python.html">آموزش پایتون</a></td>
						   <td><a href="sql.html">آموزش sql server</a></td>
                              </tr>
     
                  </table>
   
                   </div>
		
		
  
		</body>
</html>
