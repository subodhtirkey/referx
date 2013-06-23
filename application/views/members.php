<?php
			$this->load->helper('url');
			
			

?>

<!doctype html>
<html>
  
  <head>
    <title>Refer Me</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <link rel="stylesheet" href="https://app.divshot.com/themes/superhero/bootstrap.css">
    <link rel="stylesheet" href="https://app.divshot.com/css/bootstrap-responsive.css">
    <script src="https://app.divshot.com/js/jquery.min.js"></script>
    <script src="https://app.divshot.com/js/bootstrap.min.js"></script>
  </head>
  
  <body id="">
    <div class="navbar">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="#">refer X</a>
          <div class="navbar-content">
            <ul class="nav"></ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row-fluid">
<!--Left Span-->




					
      <div class="span2">
        <div class="well">

	<div align="center">
          <img src="<?php echo $sessions['photourl']; ?>">
	</div>
	
          <p></p>
	<div class="tabbable">
          <ul class="nav nav-stacked nav-pills">
            <li class="active">
              <a href="#home" data-toggle="tab" >Home</a> 
            </li>
            <li>
              <a href="#myprofile" data-toggle="tab">My Profile </a> 
            </li>
            <li>
              <a href="#networks" data-toggle="tab">Networks</a> 
            </li>
            <li>
              <a href="#referrals" data-toggle="tab" >Referrals</a> 
            </li>
            <li>
              <a href="#postajob" data-toggle="tab" >Post A Job</a> 
            </li>
            <li>
              <a href="#logout" data-toggle="tab">Logout</a> 
            </li>
          </ul>
	</div>
        </div>
      </div>

<!-------------------------------------Right Span---------------------------->
      <div class="span9">
	<div class="tabbable">
	<div class="tab-content">
	<div class="tab-pane active" id="home">
      		<h2>Hi! &nbsp;<?php echo $sessions['firstname'];?></h2>
    	</div>
	<div class="tab-pane well" id="myprofile">
      		<h2>MY PROFILE</h2>
	<div class="row">
		<div class="span6">
<!-- SETTINGS-------------------------------------------->

	<div class="form-horizontal">
		  <div class="control-group">
		    <label class="control-label" for="firstname">First Name</label>
		    <div class="controls">
		      <input type="text" id="firstname" placeholder="firstname" value="<?php echo $profile_database['firstName']; ?>" disabled>
		    </div>
		  </div>
		 
		<div class="control-group">
		    <label class="control-label" for="lastname">Last Name</label>
		    <div class="controls">
		      <input type="text" id="lastname" placeholder="lastname" value="<?php echo $profile_database['lastName']; ?>" disabled>
		    </div>
		  </div>

		<div class="control-group">
		    <label class="control-label" for="email">Email</label>
		    <div class="controls">
		      <input type="text" id="email" placeholder="email" value="<?php echo $profile_database['email']; ?>" disabled>
		    </div>
		  </div>
		
			<div class="control-group">
					<label class="control-label" for="optionRadios">Student/Employee</label>
					 <div class="controls">
			<label class="radio">
  			<input type="radio" name="optionsRadios" id="optionsRadios1" value="0" <?php echo ($profile_database['student_employee'] == 0)?'checked':'' ?> >
  				Student
			</label>
			<label class="radio">
  			<input type="radio" name="optionsRadios" id="optionsRadios2" value="1" <? echo ($profile_database['student_employee'] == 1)?'checked':'' ?> >
  				Employee
			</label>
			</div>
			</div>

			


		<div class="control-group">
		    <label class="control-label" for="college">College</label>
		    <div class="controls">
		      <input type="text" id="college" placeholder="college" value="<?php echo $profile_database['college']; ?>">
		    </div>
		  </div>

		<div class="control-group">
		    <label class="control-label" for="department">Department</label>
		    <div class="controls">
		      <input type="text" id="department" placeholder="department" value="<?php echo $profile_database['department']; ?>" >
		    </div>
		  </div>

		
		<div class="control-group">
		    <label class="control-label" for="company" >Company</label>
		    <div class="controls">
		      <input type="text" id="company" placeholder="company" value="<?php echo $profile_database['company']; ?>">
		    </div>
		  </div>
		
		<div class="control-group">
		    <label class="control-label" for="bio">Bio</label>
		    <div class="controls">
		      <textarea rows="3" id="bio" placeholder="bio" value="<?php echo $profile_database['bio']; ?>"></textarea>
		    </div>
		  </div>
		<div class="control-group">
		    <label class="control-label" for="experience">Experience</label>
		    <div class="controls">
		      <textarea rows="3" id="experience" placeholder="experience" value="<?php echo $profile_database['experience']; ?>"></textarea>
		    </div>
		  </div>
		<div class="control-group">
		    <label class="control-label" for="skills">Skills</label>
		    <div class="controls">
		      <textarea rows="3" id="skills" placeholder="skills" value="<?php echo $profile_database['skills']; ?>" ></textarea>
		    </div>
		  </div>
		
		<div class="control-group">
		    <label class="control-label" for="interests">Interests</label>
		    <div class="controls">
		      <textarea rows="3" id="interests" placeholder="interests" value="<?php echo $profile_database['interests']; ?>" ></textarea>
		    </div>
		  </div>

		  <div class="control-group">
		    <div class="controls">
			 <button type="submit" id ="<?php echo $profile_database['id']; ?>" class="btn btn-primary profiledetail">Change Profile Settings</button>
	    	    </div>
	  	  </div>


        <div class="alert alert-success" id ="mess" style="display:none;">
                
        </div>
        <div class="alert alert-error" id = "mess1" style="display:none;">
       
        </div>
	</div>	
<!--Settings-->
		</div>
		<div class="span6">
	

	</div>
		</div>

    	</div>

    	
	<div class="tab-pane " id="networks">
      		<h2>Networks</h2>

		<div class="row">
			<div class="span2 well"><!--Networks TAB-->

					<div class="tabbable"> <!-- Only required for left/right tabs -->
  						<ul class="nav nav-tabs nav-pills">
    						<li class="active"><a href="#network1" data-toggle="tab"> &nbsp; <?php echo $profile_database['college']; ?></a></li>
    						<li><a href="#network2" data-toggle="tab"> &nbsp; <?php echo $profile_database['company']; ?></a></li>
  						</ul>
 					</div>


			</div>
			<div class="span10 well"><!--Networks-->

						 <div class="tab-content">
    						<div class="tab-pane active" id="network1">
      							<!--Bread Crum-->
      								<ol class="breadcrumb">
           										 <li>
             											 <a href="#">Network</a>
              													<span class="divider">/</span> 
            									</li>
            									<li class="active"><?php echo $profile_database['college']; ?></li>
          							</ol>

          							<div class="well">
            							<h6><?php echo $profile_database['college'];?> Members</h6>

            							<?php 

            								$v = 0;
            							foreach ($network_1 as $key => $value): 

            								if($v == 5)
            									break;
            								?>
            								
            								<a href="#modal" id="<?php echo $value->id; ?>" class="user_detail" data-toggle="modal" title="<?php echo $value->firstName;?> <?php echo $value->lastName;?>" onclick="getdetail(this)"><img src="<?php echo $value->photourl; ?>" width="50"></a>

            								
            							

            							<?php

            								
            								$v++;
            							 endforeach; ?>

            							
            							<p></p>
            							<a href="#">View All</a> 
            							
        							 </div>

        							 <!--JOB OPENINGS-->
        							 <div class="well"></div>

    						</div>
    						<div class="tab-pane" id="network2">
      								<!--Bread Crum-->
                      <ol class="breadcrumb">
                               <li>
                                   <a href="#">Network</a>
                                        <span class="divider">/</span> 
                              </li>
                              <li class="active"><?php echo $profile_database['company']; ?></li>
                        </ol>

                        <div class="well">
                          <h6><?php echo $profile_database['company'];?> Members</h6>

                          <?php 

                            $v = 0;
                          foreach ($network_2 as $key => $value): 

                            if($v == 5)
                              break;
                            ?>
                            
                            <a href="#modal" id="<?php echo $value->id; ?>" class="user_detail" data-toggle="modal" title="<?php echo $value->firstName;?> <?php echo $value->lastName;?>" onclick="getdetail(this)"><img src="<?php echo $value->photourl; ?>" width="50"></a>

                            
                          

                          <?php

                            
                            $v++;
                           endforeach; ?>

                          
                          <p></p>
                          <a href="#">View All</a> 
                          
                       </div>

                       <!--JOB OPENINGS-->
                       <div class="well"></div>

    						</div>
  						</div>


			</div>

		</div>
		

		
	</div><!--NEtworks-->


		
    	
	<div class="tab-pane " id="referrals">
      		<h2>REFERRALS</h2>
      		<div class="well">
      			<h1>Pull Referral</h1>
      		</div>
      		<div class="well">
      			<h1>Push Referral</h1>
      		</div>
    </div>
	<div class="tab-pane well" id="postajob">
      		
          <div class="form-horizontal">
<h1>Post your job</h1>
<br>
<div class="control-group">
<label class="control-label" for="jobtitle">Job Title</label>
<div class="controls">
<input type="text" id="jobtitle" placeholder="title" <="" div=""> 
</div>
<br>
<div class="control-group">
<label class="control-label" for="jobdescription">Job Description :</label>
<div class="controls">
<textarea id ="jobdescription"rows="3"></textarea>
</div>
</div>
<div class="control-group">
<label class="control-label" for="salary">Salary :</label>
<div class="controls">
<input type="text" id="salary" placeholder="" <="" div=""> 
</div>
</div>
<div class="control-group">
<label class="control-label" for="jobexperience">Experience (in years):</label>
<div class="controls">
<input type="text" id="jobexperience" placeholder="" <="" div=""> 
</div>
<br>
<div class="control-group">
<label class="control-label" for="date">Last Date To Apply :</label>
<div class="controls">
<input type="text" id="date" placeholder="" <="" div=""> 
</div>
</div>
<br>
<div class="control-group">
<label class="control-label" for="decription">Network :</label>
<div class="controls">
<label class="checkbox">
<input type="checkbox" value="<?php echo $profile_database['college'];?>" id="jobnetwork1">
<?php echo $profile_database['college'];?>
</label>
<br>
<label class="checkbox">
<input type="checkbox" value="<?php echo $profile_database['company'];?>" id="jobnetwork2">
<?php echo $profile_database['company'];?>
</label>
</div>
</div>
<h1>Company Details</h1>
<br>
<div class="control-group">
<label class="control-label" for="companyname">Name of your company :</label>
<div class="controls">
<input type="text" id="companyname" placeholder="" <="" div=""> 
</div>
</div>
<div class="control-group">
<label class="control-label" for="companydescription">Company Description :</label>
<div class="controls">
<textarea rows="3" id="companydescription"></textarea>
</div>
</div>
<div class="form-actions">
<button type="submit" class="btn btn-primary jobpost" id="<?php echo $profile_database['id']; ?>">Post Job</button>

</div>
</div>
</div>
</div>
      
       <div class="alert alert-success" id ="mes" style="display:none;">
                
        </div>
        <div class="alert alert-error" id = "mes1" style="display:none;">

    	</div>
    </div>
	<div class="tab-pane well" id="logout">
      		<p>Logout</p>
		
		<?php
			// Output the enabled services and change link/button if the user is authenticated.
			
			foreach($providers as $provider => $data) {
				if ($data['connected']) {
					echo "<li>".anchor('hauth/logout/'.$provider,'Logout of '.$provider, array('class' => 'connected'))."</li>";
				} else {
					//echo "<li>".anchor('hauth/login/'.$provider,$provider, array('class' => 'login'))."</li>";
				}
			}
		?>
		
    	</div>
	</div>
	</div>
	
	</div>
    </div>
<!--MODALS-->


          <!--MODAL 1-->

<div id="modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Member</h3>
  </div>
  <div class="modal-body">
    
 <div align="center"> <img id="img1" src=""> </div>
 <p></p>
    <form class="form-horizontal">
      <div class="control-group">
        <label class="control-label" for="firstname1">First Name</label>
        <div class="controls">
          <input type="text" id="firstname1" placeholder="firstname" value="" disabled>
        </div>
      </div>
     
    <div class="control-group">
        <label class="control-label" for="lastname1">Last Name</label>
        <div class="controls">
          <input type="text" id="lastname1" placeholder="lastname" value="" disabled>
        </div>
      </div>

    <div class="control-group">
        <label class="control-label" for="email1">Email</label>
        <div class="controls">
          <input type="text" id="email1" placeholder="email" value="" disabled>
        </div>
      </div>
    


    <div class="control-group">
        <label class="control-label" for="college1">College</label>
        <div class="controls">
          <input type="text" id="college1" placeholder="college" value="" disabled>
        </div>
      </div>

    <div class="control-group">
        <label class="control-label" for="department1">Department</label>
        <div class="controls">
          <input type="text" id="department1" placeholder="department" value="" disabled>
        </div>
      </div>

    
    <div class="control-group">
        <label class="control-label" for="company1" >Company</label>
        <div class="controls">
          <input type="text" id="company1" placeholder="company" value="" disabled>
        </div>
      </div>
    
    <div class="control-group">
        <label class="control-label" for="bio1">Bio</label>
        <div class="controls">
          <textarea rows="3" id="bio1" placeholder="bio" value="" disabled></textarea>
        </div>
      </div>
    <div class="control-group">
        <label class="control-label" for="experience1">Experience</label>
        <div class="controls">
          <textarea rows="3" id="experience1" placeholder="experience" value="" disabled></textarea>
        </div>
      </div>
    <div class="control-group">
        <label class="control-label" for="skills1">Skills</label>
        <div class="controls">
          <textarea rows="3" id="skills1" placeholder="skills" value="" disabled ></textarea>
        </div>
      </div>
    
    <div class="control-group">
        <label class="control-label" for="interests1">Interests</label>
        <div class="controls">
          <textarea rows="3" id="interests1" placeholder="interests" value="" disabled ></textarea>
        </div>
      </div>

      <div class="control-group">
        <div class="controls">
       <button type="submit" class="btn btn-primary">Change Profile Settings</button>
            </div>
        </div>
  </form> 


  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary">Save changes</button>
  </div>
</div>


<script type="text/javascript">





function getdetail(el) { 
    var id = el.id;
   console.log(id);
	
	$.ajax({
            url: '<?php echo site_url('hauth/users_data');?>',
            type:'POST',
	          data: {"id" : id},
            success: function(output){
                    var obj = jQuery.parseJSON(output);
                    console.log(obj);
                    $("#img1").attr("src",obj['photourl']);
			            // $("#img1").src(obj['photourl']);
                    $("#firstname1").val(obj['firstName']);
                      $("#lastname1").val(obj['lastName']);
                       $("#email1").val(obj['email']);
                        $("#college1").val(obj['college']);
                        $("#department1").val(obj['department']);
                         $("#company1").val(obj['company']);
                          $("#bio1").val(obj['bio']);
                           $("#experience1").val(obj['experience']);
                            $("#skills1").val(obj['skills']);
                             $("#interests1").val(obj['interests']);
                              



                } 
            });  	
	
 
    return false; 
}







$('.profiledetail').click(function() { 
        var id = $(this).attr('id');
       // console.log(id);

        var college = document.getElementById("college").value;
        var department = document.getElementById("department").value;
        var company = document.getElementById("company").value;
        var bio =document.getElementById("bio").value;
        var experience = document.getElementById("experience").value;
        var skills = document.getElementById("skills").value;
        var interests = document.getElementById("interests").value;
        var r = '';


        var radios = document.getElementsByName("optionsRadios");

         for (var i = 0; i < radios.length; i++) {       
               if (radios[i].checked) {
                      r = radios[i].value;
                     break;
                }
    }

    console.log(r);

        var sdata = {"id": id , "college" :college ,"department" :department , "company" :company , "bio" :bio , "experience" :experience, "skills" :skills ,"interests" :interests};
       // console.log(send_data);

          $.ajax({
            url: '<?php echo site_url('hauth/userprofile_data');?>',
            type:'POST',
            data:  sdata,
            success: function(output){
                  var obj = output;
                    console.log(obj);

                    if(obj == 1)
                    {
                      $('#mess').html("Data is inserted").show().fadeOut(6000);
                    }
                    else
                    {
                      $('#mess1').html("Data is not inserted").show().fadeOut(6000);
                    }
                              



                } 
            });   
        return false; 
    }); 




$('.jobpost').click(function() { 
        var postpersonid = $(this).attr('id');
       // console.log(id);

      var jobtitle = document.getElementById("jobtitle").value;
      var jobdescription = document.getElementById("jobdescription").value;
      var salary = document.getElementById("salary").value;
      var jobexperience =document.getElementById("jobexperience").value;
      var date = document.getElementById("date").value;

      var jn1 = document.getElementById("jobnetwork1");
      var jn2 = document.getElementById("jobnetwork2");

      var jobnetwork1 = '';
      var jobnetwork2 = '';
      
      if (jn1.checked){
       var jobnetwork1 = document.getElementById("jobnetwork1").value;
        }

      if(jn2.checked){
        var jobnetwork2 = document.getElementById("jobnetwork2").value;
      }
        

      var companyname = document.getElementById("companyname").value;
      var companydescription = document.getElementById("companydescription").value;


      var jdata = {"postpersonid" : postpersonid,"jobtitle" : jobtitle,"jobdescription" : jobdescription,"salary" : salary,"jobexperience" : jobexperience,"date" : date,"jobnetwork1" :jobnetwork1,"jobnetwork2" : jobnetwork2,"companyname" : companyname,"companydescription" : companydescription};
      
       $.ajax({
            url: '<?php echo site_url('hauth/jobpost');?>',
            type:'POST',
            data:  jdata,
            success: function(output){
                  var obj = output;
                    console.log(obj);

                   if(obj == 1)
                    {
                      //console.log("job posted");
                      $('#mes').html("Job is posted and your credit has been increamented").show().fadeOut(6000);
                    }
                    else
                    {
                      $('#mes1').html("Job is not posted").show().fadeOut(6000);
                      //console.log("job not posted");
                    }
                  

                } 
            });   

      

       

         
        return false; 
    }); 



function test()
{
  var refreshId = setInterval(function() {

      var userid = <?php echo $profile_database['id']; ?>;
      //console.log(userid);

      var data = {"userid" : userid};
       $.ajax({
            url: '<?php echo site_url('hauth/getjobdetails');?>',
            type:'POST',
            data:  data,
            success: function(output){
               var obj = output;
                 // var obj = jQuery.parseJSON(output);
                  console.log(obj);

                  
                  

                } 
            });   


  }, 5000);

  return false;
}

$(document).ready(function(){
    test();
});


</script>



  </body>

</html>
