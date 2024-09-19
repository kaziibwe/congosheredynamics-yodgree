

# API TO PAY WITH MOBILE PHONE
# Endpoint
https://api.cognospheredynamics.com/api/auth/payMobile


# PAYLOAD
{
   "name":"alfred",
    "email":"ssososo@gmail.com",
    "phone":"0785557587",
    "amount":10000,
    "user_id":"1"
}

# OUTPUT
{
  "message": "https://ravemodal-dev.herokuapp.com/captcha/verify/lang-en/130421:8c6e3ab717b6133012cbc584f0c915f4"
}


# API TO VERIFYCODE
# Endpoint
http://127.0.0.1:8000/api/auth/verifyingCode

# Payload
{
        "email":"alfredkaziibwe19@gmail.com",
        "velification_code": "123455"
}








# API TO LOGIN ADMIN

# Endpoint
http://127.0.0.1:8000/api/auth/loginuser

# Payload
{
    "email":"alfredkaziibwe19@gmail.com",
    "password":"123456"
}

#  Output
{
  "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL2F1dGgvYWRtaW5sb2dpbiIsImlhdCI6MTcxODg3NjM2MiwiZXhwIjoxNzE4ODc5OTYyLCJuYmYiOjE3MTg4NzYzNjIsImp0aSI6IlhLMHM1cGF6QklFdmxEeW0iLCJzdWIiOiIxIiwicHJ2IjoiZGY4ODNkYjk3YmQwNWVmOGZmODUwODJkNjg2YzQ1ZTgzMmU1OTNhOSJ9.OKRbkNCe_qzs7dmJwAGxrYQ2AX1w9gP7Ek0i1HW4cZ8",
  "token_type": "bearer",
  "expires_in": 3600,
  "user": {
    "email": "alfredkaziibwe19@gmail.com",
    "role": "",
    "phone": null,
    "name": "kaziibwe alfred",
    "location": "",
    "image": null
  }
}















# API TO CREATE  USER  

# Endpoint
http://127.0.0.1:8000/api/auth/sendMailForVerification


#  payload for  yodegree mobile

{
  "institution":"Mubs",
  "level_of_education":"Phd",
  "year":"3",
  "semester":"2",
   "course":"Electrical",


  "name":"fred",
  "email":"fred@gmail.com",
  "password":"123456",
  "phone":"0784567858",
  "product":"yodegree",
  "gender":"male",
  "age":"45"

}



#API TO GET USER PROFILE
# Endpoint
https://api.cognospheredynamics.com/api/auth/userProfile/22

#OUTPUT
{
  "user": {
    "id": 22,
    "name": "alfred Rozey",
    "username": "alfredkazibwe",
    "email": "alfredkazibwe19@gmail.com",
    "phone": "0789567867",
    "phone1": "0784534567",
    "image": null,
    "age": "12",
    "gender": "male",
    "velification_code": "404650",
    "login_status": null,
    "twogere_customer_id": null,
    "yodegree_customer_id": null,
    "org_customer_id": null,
    "institution": "Mubs",
    "level_of_education": "Phd",
    "semester": "2",
    "year": "3",
    "course": "Electrical",
    "product": "yodegree",
    "role": null,
    "organisation_id": null,
    "created_at": null,
    "updated_at": null
  }
}



# API TO EDIT USER PROFILE
#Endpoint
https://api.cognospheredynamics.com/api/auth/editUser/27

# Payload
{
  "name" : "alfred Rozey tyga",
   "username" : "alfredkaziibwe",
   "email" : "alfredkaziibwe19@gmail.com",
   "phone" : "0789567867",
    "phone1" : "0784534567",
    "gender" : "male",
    "age" : "12"
  
}

#output

{
  "id": 27,
  "name": "alfred Rozey tyga",
  "username": "alfredkaziibwe",
  "email": "alfredkaziibwe19@gmail.com",
  "phone": "0789567867",
  "phone1": "0784534567",
  "image": null,
  "age": "12",
  "gender": "male",
  "velification_code": "612070",
  "login_status": null,
  "twogere_customer_id": null,
  "yodegree_customer_id": null,
  "org_customer_id": null,
  "institution": null,
  "level_of_education": null,
  "semester": null,
  "year": null,
  "course": null,
  "product": "twogere",
  "role": "admin",
  "organisation_id": "25",
  "created_at": null,
  "updated_at": null
}



# API TO CHANGE PASSWORD

# Endpoint
https://api.cognospheredynamics.com/api/auth/editPassword/27

#Payload
{
  "current_pwd":"123456",
  "new_pwd":"1234567",
  "confirm_pwd":"1234567"
}
#Output

{
  "message": "Your password has been changed successfully."
}



