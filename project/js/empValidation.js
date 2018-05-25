function validateForm(){  
				var firstName = document.registrationForm.firstname.value;  
				var lastName = document.registrationForm.lastname.value; 
				var userName = document.registrationForm.username.value;
				var password = document.registrationForm.password.value;
				var conPassword = document.registrationForm.conPassword.value;
				var mobile = document.registrationForm.mobile.value;
				var designation = document.registrationForm.designation.value;
				
				//Validation for First Letter can't be a Space in First Name
				if(firstName.match(/^\s/)){
					document.getElementById('errfName').innerHTML="*First Letter can't be a Space";
					document.getElementById('errfName').style.color="#b31919";
					//alert("First Letter can't be a Space");
					return false;
				}
				//Validation for First Name shouldn't Blank 
				if(firstName==null || firstName==""){ 
					document.getElementById('errfName').innerHTML="*First Name can't be Blank";
					document.getElementById('errfName').style.color="#b31919";
					//alert("First Name can't be Blank");  
					return false;  
				}
				//Validation for Special Character can't be accepted in First Name
				if(!firstName.match(/^[a-zA-Z\s]*$/)){
					document.getElementById('errfName').innerHTML="*No, Special Character and Numbers Allow in First Name";
					document.getElementById('errfName').style.color="#b31919";
					//alert("No, Special Character and Numbers Allow in First Name");
					return false;
				}
				//Validation for First Letter can't be a Space in Last Name
				if(lastName.match(/^\s/)){
					document.getElementById('errlName').innerHTML="*First Letter can't be a Space";
					document.getElementById('errlName').style.color="#b31919";
					//alert("First Letter can't be a Space");
					return false;
				}
				//Validation for Last Name shouldn't be Blank
				if(lastName==null || lastName==""){ 
					document.getElementById('errlName').innerHTML="*Last Name can't be Blank";
					document.getElementById('errlName').style.color="#b31919";
					//alert("Last Name can't be Blank");  
					return false;  
				}
				//Validation for Special Character can't be accepted in Last Name
				if(!lastName.match(/^[a-zA-Z\s]*$/)){
					document.getElementById('errlName').innerHTML="*No, Special Character and Numbers Allow in Last Name";
					document.getElementById('errlName').style.color="#b31919";
					//alert("No, Special Character and Numbers Allow in Last Name");
					return false;
				}
				//Validation for First Letter can't be a Space in User Name
				if(userName.match(/^\s/)){
					document.getElementById('errusName').innerHTML="*First Letter can't be a Space";
					document.getElementById('errusName').style.color="#b31919";
					//alert("First Letter can't be a Space");
					return false;
				}
				//Validation for User Name
				if(userName==null || userName==""){  
					document.getElementById('errusName').innerHTML="*User Name can't be Blank";
					document.getElementById('errusName').style.color="#b31919";
					//alert("User Name can't be Blank");  
					return false;  
				}
				//Validation for Email 
				var email = document.registrationForm.email.value;
				var atpos = email.indexOf("@");
				var dotpos = email.lastIndexOf(".");
				if(email==null || email== ""){
					document.getElementById('errEmail').innerHTML="*Email can't be Blank";
					document.getElementById('errEmail').style.color="#b31919";
					//alert("Email can't be Blank");
					return false;
				}else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length) {
					document.getElementById('errEmail').innerHTML="*Not a valid E-mail address";
					document.getElementById('errEmail').style.color="#b31919";
					//alert("Not a valid e-mail address");
					return false;
				}
				//Validation for Password
				if(password==null || password==""){  
					document.getElementById('errPass').innerHTML="*Password can't be Blank";
					document.getElementById('errPass').style.color="#b31919";
					//alert("Password can't be Blank");  
					return false;
				}
				if(password.length < 6){
					document.getElementById('errPass').innerHTML="*Password must be 6 characters";
					document.getElementById('errPass').style.color="#b31919";
					//alert("Password must be 8 characters");
					return false;
				}
				//Validation for confirm password
				if(conPassword==null || conPassword==""){
					document.getElementById('errConpass').innerHTML="*Please Re-enter the Password";
					document.getElementById('errConpass').style.color="#b31919";
					//alert("Please Re-enter the Password");
					return false;
				}
				//match both passwords
				if(password != conPassword){
					document.getElementById('errConpass').innerHTML="*password can't match";
					document.getElementById('errConpass').style.color="#b31919";
					document.getElementById('errInput').style.backgroundColor="#b31919";
					//alert("password can't match");
					return false;
				}
				//Validation for Mobile Number shouldn't Blank 
				if(mobile==null || mobile==""){ 
					document.getElementById('errMobile').innerHTML="*Mobile Number can't be Blank";
					document.getElementById('errMobile').style.color="#b31919";
					//alert("First Name can't be Blank");  
					return false;  
				}
				//Validation for Phone number can be accepted
				if(!mobile.match(/^[0-9\s]*$/)){
					document.getElementById('errMobile').innerHTML="*No, Special Character and Alphabet Allow in Mobile Number";
					document.getElementById('errMobile').style.color="#b31919";
					//alert("No, Special Character and Numbers Allow in Last Name");
					return false;
				}
				if(mobile.length != 10){
					document.getElementById('errMobile').innerHTML="*Mobile Number must be 10 numbers";
					document.getElementById('errMobile').style.color="#b31919";
					//alert("Password must be 8 characters");
					return false;
				}
				//Validation for Select Designation in a Drop Dow List
				if(designation=="select"){
					document.getElementById('errDesignation').innerHTML="*Please Select your Designation";
					document.getElementById('errDesignation').style.color="#b31919";
					//alert("Please Select your country");
					return false;
				}
				//Validation for only GIF or JPEG file should be uploaded
				var uploadFile=document.registrationForm.uploadFile.value;
				var ext=uploadFile.substring(uploadFile.lastIndexOf('.')+1);
				if(uploadFile == null){
					document.getElementById('errImage').innerHTML="*Please upload image file";
					document.getElementById('errImage').style.color="#b31919";
					//alert("Please upload image file");
					return false;
				}else if(ext == "gif" || ext == "GIF" || ext == "jpg" || ext == "JPG" || ext == "jpeg" || ext == "JPEG"){
					return true;
				}
				else{
					document.getElementById('errImage').innerHTML="*Please upload GIF and JPEG files Only.";
					document.getElementById('errImage').style.color="#b31919";
					//alert("Please upload GIF and JPEG files Only.")
					return false;
				}
			}  