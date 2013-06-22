<?php  


class Users extends CI_Model {
	
	public function is_member($data){
		echo"is member\n";

		
			$email = NULL;
			$provider = NULL;
			echo"is mer\n";
		if($data['providers']['Facebook']['connected'] == 1)
			{
				$email = $data['providers']['Facebook']['user_profile']->email;
				$provider = 'Facebook';
				echo"is member1\n";

			}
			else
			{
				$email = $data['providers']['LinkedIn']['user_profile']->email;
				$provider = 'LinkedIn';
				echo"is member\n";
			}



		$this->db->where('email',$email);

		$query = $this->db->get('myusers');

		if($query->num_rows()==1){

			return true;
		}
		else
		{
			return false;
		}
		

	}

	public function log_in($data){

		

			$email = NULL;
			$provider = NULL;
			$username = NULL;
			$photoURL = NULL;
			$firstName = NULL;

		if($data['providers']['Facebook']['connected'] == 1)
			{
				$email = $data['providers']['Facebook']['user_profile']->email;
				$provider = 'Facebook';
				$username = $data['providers']['Facebook']['user_profile']->displayName;
				$photoURL = $data['providers']['Facebook']['user_profile']->photoURL;
				$firstName = $data['providers']['Facebook']['user_profile']->firstName;
			}
			else
			{
				$email = $data['providers']['LinkedIn']['user_profile']->email;
				$provider = 'LinkedIn';
				$username = $data['providers']['LinkedIn']['user_profile']->displayName;
				$photoURL = $data['providers']['LinkidIn']['user_profile']->photoURL;
				$firstName = $data['providers']['LinkedIn']['user_profile']->firstName;
			}

		$data1 = array(
			'is_logged_in' => 1 ,
			'email' => $email,
			'name' =>$username,
			'provider' => $provider,
			'photourl' => $photoURL,
			'firstname' => $firstName 
			);

		$this->session->set_userdata($data1);

	echo "login_in";

	}
	public function sign_up($data){
		echo "Sign_up";
		//Data Taken
			$email = NULL;
			$provider = NULL;
			$username = NULL;
			$identifier = NULL;
			$firstname = NULL;
			$lastname = NULL;
			$photoURL = NULL;
			
		if($data['providers']['Facebook']['connected'] == 1)
			{
				$identifier = $data['providers']['Facebook']['user_profile']->identifier; 
				$email = $data['providers']['Facebook']['user_profile']->email;
				$provider = 'Facebook';
				$username = $data['providers']['Facebook']['user_profile']->displayName;
				$firstname = $data['providers']['Facebook']['user_profile']->firstName;
				$lastname = $data['providers']['Facebook']['user_profile']->lastName;
				$photoURL = $data['providers']['Facebook']['user_profile']->photoURL;
			}
			else
			{
				$identifier = $data['providers']['LinkedIn']['user_profile']->identifier; 
				$email = $data['providers']['LinkedIn']['user_profile']->email;
				$provider = 'LinkedIn';
				$username = $data['providers']['LinkedIn']['user_profile']->displayName;
				$firstname = $data['providers']['LinkedIn']['user_profile']->firstName;
				$lastname = $data['providers']['LinkedIn']['user_profile']->lastName;
				$photoURL = $data['providers']['LinkidIn']['user_profile']->photoURL;
			}
		
		
		$data1 = array(
			'identifier' => $identifier,
			'provider' => $provider,
			'firstName' => $firstname,
			'lastName' => $lastname,
			'email' => $email,
			'photourl' => $photoURL
			);

		$this->db->insert('myusers', $data1);

		
		
	}



	public function profile_data($data)
	{
					$id = NULL;
				   	$identifier = NULL;
					$provider = NULL;
      				   	$firstName = NULL;
      				   	$lastName = NULL; 
				   	$email = NULL;
				   	$photourl = '';
 				   	$student_employee = NULL;
				   	$college = NULL;
  					$department = NULL;
					$company = NULL;
					$bio = NULL;
					$experience = NULL;
					$skills = NULL;
					$interests = NULL;
		
		if($data['providers']['Facebook']['connected'] == 1)
			{
				$email = $data['providers']['Facebook']['user_profile']->email;
				$provider = 'Facebook';
				//echo"is member1\n";

			}
			else
			{
				$email = $data['providers']['LinkedIn']['user_profile']->email;
				$provider = 'LinkedIn';
				//echo"is member\n";
			}

			
			$q = "SELECT * FROM myusers WHERE email = '".$email."' AND provider = '".$provider."' ";
			$query = $this->db->query($q);
			if($query)
			{
				//echo "Query is correct";
			}
			else
			{
				echo "Query Is wrong";			
			}

			if ($query->num_rows() > 0)
			{
   				foreach ($query->result() as $row)
   				{
    				   $id = $row->id;
				   $identifier = $row->identifier;
				   $provider = $row->provider;
      				   $firstName =	$row->firstName;
      				   $lastName =	$row->lastName;  
				   $email = $row->email;
				   $photourl = $row->photourl;
 				   $student_employee =	$row->student_employee;
				   $college = $row->college;
  				   $department=	$row->department;
				   $company = $row->company;
				   $bio = $row->bio;
				   $experience = $row->experience;
			 	   $skills = $row->skills;
				   $interests =	$row->interests;
   				}
			}
			else
			{
				echo "NO QUERY";
			}

		$data2 = array(
				'id' =>	$id, 
				'identifier'=> $identifier,
				'provider' => $provider, 
      				'firstName' => $firstName, 
      				'lastName' => $lastName,  
				'email' => $email,
				'photourl' => $photourl,
 				'student_employee' => $student_employee,
				'college' => $college, 
  				'department' =>	$department, 
				'company' => $company, 
				'bio' => $bio, 
				'experience' => $experience, 
				'skills' => $skills, 
				'interests' => $interests 	
			);
		return $data2;
		
	}




public function network1($data)
	{				
					$id1 = NULL;
					$provider1 = NULL;
					$id = NULL;
				   	$identifier = NULL;
					$provider = NULL;
      				$firstName = NULL;
      				$lastName = NULL; 
				   	$email = NULL;
				   	$photourl = '';
 				   	$student_employee = NULL;
				   	$college = NULL;
  					$department = NULL;
					$company = NULL;
					$bio = NULL;
					$experience = NULL;
					$skills = NULL;
					$interests = NULL;
		
		if($data['providers']['Facebook']['connected'] == 1)
			{
				$email = $data['providers']['Facebook']['user_profile']->email;
				$provider = 'Facebook';
				//echo"is member1\n";

			}
			else
			{
				$email = $data['providers']['LinkedIn']['user_profile']->email;
				$provider = 'LinkedIn';
				//echo"is member\n";
			}

			
			$q = "SELECT * FROM myusers WHERE email = '".$email."' AND provider = '".$provider."' ";
			$query = $this->db->query($q);
			if($query)
			{
				//echo "Query is correct";
			}
			else
			{
				echo "Query Is wrong";			
			}

			if ($query->num_rows() > 0)
			{
   				foreach ($query->result() as $row)
   				{
    				   $id = $row->id;
				   $college = $row->college;
   				}
			}
			else
			{
				echo "NO QUERY";
			}


				$data1 = array();
				$query = $this->db->get_where('myusers', array('college' => $college));
				//$query = $this->db->select('*')->from('myusers')->get();
   				 return $data1 = $query->result();
			

		
		
	}




	public function network2($data)
	{				
					$id1 = NULL;
					$provider1 = NULL;
					$id = NULL;
				   	$identifier = NULL;
					$provider = NULL;
      				$firstName = NULL;
      				$lastName = NULL; 
				   	$email = NULL;
				   	$photourl = '';
 				   	$student_employee = NULL;
				   	$college = NULL;
  					$department = NULL;
					$company = NULL;
					$bio = NULL;
					$experience = NULL;
					$skills = NULL;
					$interests = NULL;
		
		if($data['providers']['Facebook']['connected'] == 1)
			{
				$email = $data['providers']['Facebook']['user_profile']->email;
				$provider = 'Facebook';
				//echo"is member1\n";

			}
			else
			{
				$email = $data['providers']['LinkedIn']['user_profile']->email;
				$provider = 'LinkedIn';
				//echo"is member\n";
			}

			
			$q = "SELECT * FROM myusers WHERE email = '".$email."' AND provider = '".$provider."' ";
			$query = $this->db->query($q);
			if($query)
			{
				//echo "Query is correct";
			}
			else
			{
				echo "Query Is wrong";			
			}

			if ($query->num_rows() > 0)
			{
   				foreach ($query->result() as $row)
   				{
    				   $id = $row->id;
				   $company = $row->company;
   				}
			}
			else
			{
				echo "NO QUERY";
			}


				$data1 = array();
				$query = $this->db->get_where('myusers', array('company' => $company));
				//$query = $this->db->select('*')->from('myusers')->get();
   				 return $data1 = $query->result();
			

		
		
	}






	public function users_data($d)
	{
					//$id = NULL;
				   	$identifier = NULL;
					$provider = NULL;
      				$firstName = NULL;
      				$lastName = NULL; 
				   	$email = NULL;
				   	$photourl = '';
 				   	$student_employee = NULL;
				   	$college = NULL;
  					$department = NULL;
					$company = NULL;
					$bio = NULL;
					$experience = NULL;
					$skills = NULL;
					$interests = NULL;
		
					/*echo '<pre>';
						print_r($d);		
					echo '</pre>'; */
			$q = "SELECT * FROM myusers WHERE id = '".$d."' ";
			$query = $this->db->query($q);
			if($query)
			{
				//echo "Query is correct";
			}
			else
			{
				echo "Query Is wrong";			
			}

			if ($query->num_rows() > 0)
			{
   				foreach ($query->result() as $row)
   				{
    				   $id = $row->id;
				   $identifier = $row->identifier;
				   $provider = $row->provider;
      				   $firstName =	$row->firstName;
      				   $lastName =	$row->lastName;  
				   $email = $row->email;
				   $photourl = $row->photourl;
 				   $student_employee =	$row->student_employee;
				   $college = $row->college;
  				   $department=	$row->department;
				   $company = $row->company;
				   $bio = $row->bio;
				   $experience = $row->experience;
			 	   $skills = $row->skills;
				   $interests =	$row->interests;
   				}
			}
			else
			{
				echo "NO QUERY";
			}

		$data2 = array(
				'id' =>	$d, 
				'identifier'=> $identifier,
				'provider' => $provider, 
      				'firstName' => $firstName, 
      				'lastName' => $lastName,  
				'email' => $email,
				'photourl' => $photourl,
 				'student_employee' => $student_employee,
				'college' => $college, 
  				'department' =>	$department, 
				'company' => $company, 
				'bio' => $bio, 
				'experience' => $experience, 
				'skills' => $skills, 
				'interests' => $interests 	
			);
		return $data2;
		
	}


		
}
