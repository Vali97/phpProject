<?php
	session_start();
	
	require("conection/connect.php");
	$tag="";
	if (isset($_GET['tag']))
	$tag=$_GET['tag'];
	
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::. Fakulteti i Ekonomisë, Universiteti i Tiranës .::</title>
<link rel="stylesheet" type="text/css" href="css/everyone_format.css" />
<link rel="stylesheet" type="text/css" href="css/menu.css"/>
<link rel="stylesheet" type="text/css" href="css/home.css"/>

</head>

<body>

<br /><br /> 
<div id="admin">
	
         <div id="lmain">
                <a href="#" title="logo" ><img src="picture/ut.jpg" /></a>
                <div id="leftmanu"> <br /> 
                	<div >
                        <a href="?tag=home" title="HOME (Shift+Ctrl+H)">FAQJA KRYESORE</a><br />
                	</div>                  
                    <div> 
                    	<a href="everyone.php?tag=student_entry" title="Shift+1">  &nbsp;Student i ri </a><br /> <br /> 
                    </div>
                    
                    <div>
                    	<a href="everyone.php?tag=teachers_entry" class="customer" title="Shift+2">&nbsp;Petagog i ri</a>
                    </div>
                    
                     <div>
                    	<a href="everyone.php?tag=faculties_entry" class="customer" title="Shift+3">&nbsp;Programet e studimit</a>
                    </div>
                    
                     <div>
                    	<a href="everyone.php?tag=subject_entry" class="customer" title="Shift+4">&nbsp;Lendet mesimore</a>
                    </div>
                    
                     <div>
                    	<a href="everyone.php?tag=score_entry" class="customer" title="Shift+5">&nbsp;Regjistro vlerësim</a>
                    </div>
					
               
                     
                    
                    
                    
                     <div>
                    	<a href="everyone.php?tag=test_score" class="customer" title="Shift+Ctrl+T">&nbsp;Pikët</a>
                    </div>
                    
                </div><!-- end of leftmanu -->
        </div><!--end of lmaim -->
        
        <div>
        
        
        </div>
    <div id="rmain">
    	<div id="pic_manu">
    	&nbsp;	&nbsp; <a href="#" title="Studnt"><img src="picture/student.png" hspace="10px" /></a> &nbsp; 
            <a href="#" title="Teacher"><img src="picture/teacher.png" hspace="20px" /></a> &nbsp; &nbsp;&nbsp;
            <a href="#" title="Faculties"><img src="picture/faculties.png" hspace="15px" /></a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
            <a href="#" title="Score"><img src="picture/score.png" hspace="20px" /></a>
			<a href="#" title="Subject"><img src="picture/subject.png" hspace="10px" /></a>
            
         
          
        
            
         </div><!--end of pic_manu -->
        
        
        
        
         <div id="menu2">
                
                <div style="width:4px; height:30px; padding:0px; margin:0px; float:left;"></div>
			    <li id="li_submenu"><a href="everyone.php?tag=view_students" class="stocks">Studentët</a></li>
				<li id="li_submenu"><a href="everyone.php?tag=view_teachers" class="stocks">Petagogët</a></li>
				<li id="li_submenu"><a href="everyone.php?tag=view_faculties" class="customer">Programet e studimit</a></li>
				<li id="li_submenu"><a href="everyone.php?tag=view_scores" class="order">Vlerësimet</a></li>
				<li id="li_submenu"><a href="everyone.php?tag=view_subjects" class=" customer">Lëndët</a></li>
			
	

                           
      </div><!--end of menu2--> 
            
            
            <div id="contents">
            
            	<div id="informations">
                	<div id="in_informations">
				<?php
   						if($tag=="home" or $tag=="")
							include("home.php"); 
                        elseif($tag=="student_entry")
                            include("Students_Entry.php");
                        elseif($tag=="teachers_entry")
                            include("Teachers_Entry.php");
                        elseif($tag=="score_entry")
                            include("Score_Entry.php");	
                        elseif($tag=="subject_entry")
                            include("Subject_Entry.php");
                        elseif($tag=="faculties_entry")
                            include("Faculties_Entry.php");
                        elseif($tag=="susers_entry")
                            include("Users_Entry.php");	
                        elseif($tag=="view_students")
                            include("View_Students.php");
						elseif($tag=="view_teachers")
							include("View_Teachers.php");
						elseif($tag=="view_subjects")
							include("View_Subjects.php");
						elseif($tag=="view_scores")
							include("View_Scores.php");
						elseif($tag=="view_users")
							include("View_Users.php");
						elseif($tag=="view_faculties")
							include("View_Faculties.php");
						elseif($tag=="location_entry")
							include("Location_Entry.php");
						elseif($tag=="artical_entry")
							include("Artical_Entry.php");
						elseif($tag=="test_score")
							include("test_Scores .php");
						elseif($tag=="view_location")
							include("View_location.php");
						elseif($tag="view_artical")
							include("View_Articaly.php");
								
                        ?>
                    </div><!--end of in_informations -->
                </div><!--end of informations -->
    		</div><!--end of contens -->   
     </div><!--end of rmain -->
    	
    </div><!--end of admin -->

</body>
</html>