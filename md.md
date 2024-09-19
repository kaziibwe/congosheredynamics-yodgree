



# API DOCUMENTATION FOR  COGNOSHERE DYNAMICS

## ACCOUNTS
# User accounts

# API TO CREATE ACCOUNT ADMIN 

# endpoint
http://127.0.0.1:8000/api/auth/Adminregister

# payload

{
    
    "name":" Kansiime Alfred",
    "email":"alfredkaziibwehj19@gmail.com",
    "location":"Nakawa",
    "role":"Nakawa",
    "phone":"0785557587",
    "password":"123456"
}


# output
{
  "Admin": {
    "name": "Kansiime Alfred",
    "email": "alfredkaziibwehj19@gmail.com",
    "location": "Nakawa",
    "phone": "0785557587",
    "role": "Nakawa",
    "id": 5
  },
  "status": true
}


# API TO LOGIN ADMIN

# Endpoint
http://127.0.0.1:8000/api/auth/adminlogin

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



#  API TO GET ALL USERS

# Endpoint
http://127.0.0.1:8000/api/auth/getAllUser


# Output

{
  "users": [
    {
      "id": 1,
      "name": "Kaziibwe alfred",
      "username": null,
      "email": "alfredkaziibwe19@gmail.com",
      "phone": "0784567858",
      "phone1": "0764567858",
      "age": "45",
      "gender": "male",
      "velification_code": "595184",
      "login_status": null,
      "twogere_customer_id": null,
      "yodegree_customer_id": null,
      "org_customer_id": null,
      "institution": "Uict Nakawa",
      "level_of_education": null,
      "semester": null,
      "year": null,
      "organisation_id": null,
      "created_at": null,
      "updated_at": null
    },
    {
      "id": 2,
      "name": "Kaziibwe alfred",
      "username": null,
      "email": "alfredkaziibwe195@gmail.com",
      "phone": "0784567858",
      "phone1": "0764567858",
      "age": "45",
      "gender": "male",
      "velification_code": "964750",
      "login_status": null,
      "twogere_customer_id": null,
      "yodegree_customer_id": null,
      "org_customer_id": null,
      "institution": "Uict Nakawa",
      "level_of_education": null,
      "semester": null,
      "year": null,
      "organisation_id": null,
      "created_at": null,
      "updated_at": null
    },
    {
      "id": 3,
      "name": "Drillox",
      "username": null,
      "email": "andruajoshua096@gmail.com",
      "phone": "+2356770415425",
      "phone1": null,
      "age": null,
      "gender": "male",
      "velification_code": "307257",
      "login_status": null,
      "twogere_customer_id": null,
      "yodegree_customer_id": null,
      "org_customer_id": null,
      "institution": null,
      "level_of_education": null,
      "semester": null,
      "year": null,
      "organisation_id": null,
      "created_at": null,
      "updated_at": null
    },
    {
      "id": 4,
      "name": "Onenew User",
      "username": "thismustbenewme",
      "email": "newuser@gmail.com",
      "phone": "0779080123",
      "phone1": null,
      "age": null,
      "gender": null,
      "velification_code": "149688",
      "login_status": null,
      "twogere_customer_id": null,
      "yodegree_customer_id": null,
      "org_customer_id": null,
      "institution": null,
      "level_of_education": null,
      "semester": null,
      "year": null,
      "organisation_id": null,
      "created_at": null,
      "updated_at": null
    },
    {
      "id": 5,
      "name": "Bongomin Erick Juma",
      "username": "Bongomin",
      "email": "ericbongomin@gmail.com",
      "phone": "0786146150",
      "phone1": null,
      "age": null,
      "gender": null,
      "velification_code": "266670",
      "login_status": null,
      "twogere_customer_id": null,
      "yodegree_customer_id": null,
      "org_customer_id": null,
      "institution": null,
      "level_of_education": null,
      "semester": null,
      "year": null,
      "organisation_id": null,
      "created_at": null,
      "updated_at": null
    },
    {
      "id": 6,
      "name": "Francis Ssessaazi",
      "username": "phrunsys@caefoijdfoajfs.com",
      "email": "phrunsys@cognospheredynamics.com",
      "phone": "0788074869",
      "phone1": null,
      "age": null,
      "gender": null,
      "velification_code": "048738",
      "login_status": null,
      "twogere_customer_id": null,
      "yodegree_customer_id": null,
      "org_customer_id": null,
      "institution": null,
      "level_of_education": null,
      "semester": null,
      "year": null,
      "organisation_id": null,
      "created_at": null,
      "updated_at": null
    },
    {
      "id": 7,
      "name": "Francis Ssessaazi",
      "username": "phrunsys@caefoijdfoajfs.com",
      "email": "ceo@cognospheredynamics.com",
      "phone": "0788074869",
      "phone1": null,
      "age": null,
      "gender": null,
      "velification_code": "271511",
      "login_status": null,
      "twogere_customer_id": null,
      "yodegree_customer_id": null,
      "org_customer_id": null,
      "institution": null,
      "level_of_education": null,
      "semester": null,
      "year": null,
      "organisation_id": null,
      "created_at": null,
      "updated_at": null
    },
    {
      "id": 8,
      "name": "Bongomin Erick Juma",
      "username": "anyusername",
      "email": "ericbongohidimin@gmail.com",
      "phone": "0786146150",
      "phone1": null,
      "age": null,
      "gender": null,
      "velification_code": "011034",
      "login_status": null,
      "twogere_customer_id": null,
      "yodegree_customer_id": null,
      "org_customer_id": null,
      "institution": null,
      "level_of_education": null,
      "semester": null,
      "year": null,
      "organisation_id": null,
      "created_at": null,
      "updated_at": null
    },
    {
      "id": 9,
      "name": "Bongomin Erick Jouma",
      "username": "ericbongominisakod@gmail.com",
      "email": "ericbongomiiisllein@gmail.com",
      "phone": "0786146150",
      "phone1": null,
      "age": null,
      "gender": null,
      "velification_code": "782249",
      "login_status": null,
      "twogere_customer_id": null,
      "yodegree_customer_id": null,
      "org_customer_id": null,
      "institution": null,
      "level_of_education": null,
      "semester": null,
      "year": null,
      "organisation_id": null,
      "created_at": null,
      "updated_at": null
    },
    {
      "id": 10,
      "name": "Bongomin Erick Juma",
      "username": "ericbongomsdkedlein@gmail.com",
      "email": "ericbongommkiwioin@gmail.com",
      "phone": "0786146150",
      "phone1": null,
      "age": null,
      "gender": null,
      "velification_code": "855180",
      "login_status": null,
      "twogere_customer_id": null,
      "yodegree_customer_id": null,
      "org_customer_id": null,
      "institution": null,
      "level_of_education": null,
      "semester": null,
      "year": null,
      "organisation_id": null,
      "created_at": null,
      "updated_at": null
    },
    {
      "id": 11,
      "name": "Bongomin Erick Juma",
      "username": "1234",
      "email": "ericbongomwwin@gmail.com",
      "phone": "0786146150",
      "phone1": null,
      "age": null,
      "gender": null,
      "velification_code": "922195",
      "login_status": null,
      "twogere_customer_id": null,
      "yodegree_customer_id": null,
      "org_customer_id": null,
      "institution": null,
      "level_of_education": null,
      "semester": null,
      "year": null,
      "organisation_id": null,
      "created_at": null,
      "updated_at": null
    },
    {
      "id": 12,
      "name": "Kilama Simon",
      "username": "Simone",
      "email": "kilamasimon@gmail.com",
      "phone": "0786146150",
      "phone1": null,
      "age": null,
      "gender": null,
      "velification_code": "465774",
      "login_status": null,
      "twogere_customer_id": null,
      "yodegree_customer_id": null,
      "org_customer_id": null,
      "institution": null,
      "level_of_education": null,
      "semester": null,
      "year": null,
      "organisation_id": null,
      "created_at": null,
      "updated_at": null
    },
    {
      "id": 13,
      "name": "Francis Ssessaazi",
      "username": null,
      "email": "phrunsys.scpel.256.ug@gmail.com",
      "phone": "0788074869",
      "phone1": null,
      "age": null,
      "gender": "Male",
      "velification_code": "897083",
      "login_status": null,
      "twogere_customer_id": null,
      "yodegree_customer_id": null,
      "org_customer_id": null,
      "institution": null,
      "level_of_education": null,
      "semester": null,
      "year": null,
      "organisation_id": null,
      "created_at": null,
      "updated_at": null
    },
    {
      "id": 14,
      "name": "Bongomin Erick Juma",
      "username": "username",
      "email": "qjqwqwkljko@gmail.com",
      "phone": "0786146150",
      "phone1": null,
      "age": null,
      "gender": null,
      "velification_code": "425737",
      "login_status": null,
      "twogere_customer_id": null,
      "yodegree_customer_id": null,
      "org_customer_id": null,
      "institution": null,
      "level_of_education": null,
      "semester": null,
      "year": null,
      "organisation_id": null,
      "created_at": null,
      "updated_at": null
    },
    {
      "id": 15,
      "name": "Kaziibwe alfred",
      "username": null,
      "email": "alfredkaziibwe19@gmail.com",
      "phone": "0784567858",
      "phone1": "0764567858",
      "age": "45",
      "gender": "male",
      "velification_code": "938001",
      "login_status": null,
      "twogere_customer_id": null,
      "yodegree_customer_id": null,
      "org_customer_id": null,
      "institution": "Uict Nakawa",
      "level_of_education": null,
      "semester": null,
      "year": null,
      "organisation_id": null,
      "created_at": null,
      "updated_at": null
    },
    {
      "id": 16,
      "name": "Kaziibwe alfred",
      "username": null,
      "email": "alfredkaziibwe19@gmail.com",
      "phone": "0784567858",
      "phone1": "0764567858",
      "age": "45",
      "gender": "male",
      "velification_code": "171676",
      "login_status": null,
      "twogere_customer_id": null,
      "yodegree_customer_id": null,
      "org_customer_id": null,
      "institution": "Uict Nakawa",
      "level_of_education": null,
      "semester": null,
      "year": null,
      "organisation_id": null,
      "created_at": null,
      "updated_at": null
    },
    {
      "id": 17,
      "name": "Kaziibwe alfred",
      "username": null,
      "email": "alfredkaziibwe19@gmail.com",
      "phone": "0784567858",
      "phone1": "0764567858",
      "age": "45",
      "gender": "male",
      "velification_code": "631154",
      "login_status": null,
      "twogere_customer_id": null,
      "yodegree_customer_id": null,
      "org_customer_id": null,
      "institution": "Uict Nakawa",
      "level_of_education": null,
      "semester": null,
      "year": null,
      "organisation_id": null,
      "created_at": null,
      "updated_at": null
    },
    {
      "id": 18,
      "name": "Kaziibwe alfred",
      "username": null,
      "email": "alfredkaziibwej19@gmail.com",
      "phone": "0784567858",
      "phone1": "0764567858",
      "age": "45",
      "gender": "male",
      "velification_code": "031102",
      "login_status": null,
      "twogere_customer_id": null,
      "yodegree_customer_id": null,
      "org_customer_id": null,
      "institution": "Uict Nakawa",
      "level_of_education": null,
      "semester": null,
      "year": null,
      "organisation_id": null,
      "created_at": null,
      "updated_at": null
    },
    {
      "id": 19,
      "name": "Kaziibwe alfred",
      "username": null,
      "email": "alfredkanziibwej19@gmail.com",
      "phone": "0784567858",
      "phone1": "0764567858",
      "age": "45",
      "gender": "male",
      "velification_code": "107846",
      "login_status": null,
      "twogere_customer_id": null,
      "yodegree_customer_id": null,
      "org_customer_id": null,
      "institution": "Uict Nakawa",
      "level_of_education": null,
      "semester": null,
      "year": null,
      "organisation_id": 1,
      "created_at": null,
      "updated_at": null
    },
    {
      "id": 20,
      "name": "Kaziibwe alfred",
      "username": null,
      "email": "alfredkanziibwej1j9@gmail.com",
      "phone": "0784567858",
      "phone1": "0764567858",
      "age": "45",
      "gender": "male",
      "velification_code": "657308",
      "login_status": null,
      "twogere_customer_id": null,
      "yodegree_customer_id": null,
      "org_customer_id": null,
      "institution": "Uict Nakawa",
      "level_of_education": null,
      "semester": null,
      "year": null,
      "organisation_id": null,
      "created_at": null,
      "updated_at": null
    },
    {
      "id": 21,
      "name": "Okello James",
      "username": "bigsize",
      "email": "jamesokello256@gmail.com",
      "phone": "0786146150",
      "phone1": null,
      "age": null,
      "gender": null,
      "velification_code": "939640",
      "login_status": null,
      "twogere_customer_id": null,
      "yodegree_customer_id": null,
      "org_customer_id": null,
      "institution": null,
      "level_of_education": null,
      "semester": null,
      "year": null,
      "organisation_id": null,
      "created_at": null,
      "updated_at": null
    },
    {
      "id": 22,
      "name": "Apuke Cosmas",
      "username": "Cosmos",
      "email": "cosmasapuke@gmail.com",
      "phone": "0786146150",
      "phone1": null,
      "age": null,
      "gender": null,
      "velification_code": "485457",
      "login_status": null,
      "twogere_customer_id": null,
      "yodegree_customer_id": null,
      "org_customer_id": null,
      "institution": null,
      "level_of_education": null,
      "semester": null,
      "year": null,
      "organisation_id": null,
      "created_at": null,
      "updated_at": null
    },
    {
      "id": 23,
      "name": "drillox",
      "username": null,
      "email": "drillox@gmail.com",
      "phone": "77834957948",
      "phone1": null,
      "age": null,
      "gender": "male",
      "velification_code": "364632",
      "login_status": null,
      "twogere_customer_id": null,
      "yodegree_customer_id": null,
      "org_customer_id": null,
      "institution": null,
      "level_of_education": null,
      "semester": null,
      "year": null,
      "organisation_id": null,
      "created_at": null,
      "updated_at": null
    },
    {
      "id": 24,
      "name": "unknown",
      "username": null,
      "email": "andruajoshua@gmail.com",
      "phone": "257770415426",
      "phone1": null,
      "age": null,
      "gender": "male",
      "velification_code": "492710",
      "login_status": null,
      "twogere_customer_id": null,
      "yodegree_customer_id": null,
      "org_customer_id": null,
      "institution": null,
      "level_of_education": null,
      "semester": null,
      "year": null,
      "organisation_id": null,
      "created_at": null,
      "updated_at": null
    },
    {
      "id": 25,
      "name": "Toxic",
      "username": null,
      "email": "toxicobitron256@gamil.com",
      "phone": "0777827752",
      "phone1": null,
      "age": null,
      "gender": "male",
      "velification_code": "965806",
      "login_status": null,
      "twogere_customer_id": null,
      "yodegree_customer_id": null,
      "org_customer_id": null,
      "institution": null,
      "level_of_education": null,
      "semester": null,
      "year": null,
      "organisation_id": null,
      "created_at": null,
      "updated_at": null
    },
    {
      "id": 26,
      "name": "hdhd",
      "username": null,
      "email": "hdhddhhdhdhhdhdh@gmail.com",
      "phone": "hehehrhd",
      "phone1": null,
      "age": null,
      "gender": "ndndjd",
      "velification_code": "095096",
      "login_status": null,
      "twogere_customer_id": null,
      "yodegree_customer_id": null,
      "org_customer_id": null,
      "institution": null,
      "level_of_education": null,
      "semester": null,
      "year": null,
      "organisation_id": null,
      "created_at": null,
      "updated_at": null
    },
    {
      "id": 27,
      "name": "hdhd",
      "username": null,
      "email": "hdhddhhdhdyhhdhdh@gmail.com",
      "phone": "hehehrhd",
      "phone1": null,
      "age": null,
      "gender": "ndndjd",
      "velification_code": "223530",
      "login_status": null,
      "twogere_customer_id": null,
      "yodegree_customer_id": null,
      "org_customer_id": null,
      "institution": null,
      "level_of_education": null,
      "semester": null,
      "year": null,
      "organisation_id": null,
      "created_at": null,
      "updated_at": null
    }
  ]
}


# API TO  SINGLE USER
# Endpoint
http://127.0.0.1:8000/api/auth/getSingleUser/4

#Output
 
{
  "user": {
    "id": 4,
    "name": "Onenew User",
    "username": "thismustbenewme",
    "email": "newuser@gmail.com",
    "phone": "0779080123",
    "phone1": null,
    "age": null,
    "gender": null,
    "velification_code": "149688",
    "login_status": null,
    "twogere_customer_id": null,
    "yodegree_customer_id": null,
    "org_customer_id": null,
    "institution": null,
    "level_of_education": null,
    "semester": null,
    "year": null,
    "organisation_id": null,
    "created_at": null,
    "updated_at": null
  }
}



# API TO READ THE  ADMIN PROFILE

# Endpoint
http://127.0.0.1:8000/api/auth/profileAdmin

# Payload with the token 

eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL2F1dGgvYWRtaW5sb2dpbiIsImlhdCI6MTcxODg3NjM2MiwiZXhwIjoxNzE4ODc5OTYyLCJuYmYiOjE3MTg4NzYzNjIsImp0aSI6IlhLMHM1cGF6QklFdmxEeW0iLCJzdWIiOiIxIiwicHJ2IjoiZGY4ODNkYjk3YmQwNWVmOGZmODUwODJkNjg2YzQ1ZTgzMmU1OTNhOSJ9.OKRbkNCe_qzs7dmJwAGxrYQ2AX1w9gP7Ek0i1HW4cZ8

# Output
{
  "id": 1,
  "name": "kaziibwe alfred",
  "email": "alfredkaziibwe19@gmail.com",
  "phone": null,
  "location": "",
  "role": "",
  "image": null
}






# API TO LOGOUT ADMIN

# Endpoint
http://127.0.0.1:8000/api/auth/logoutAdmin

# Payload

eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL2F1dGgvYWRtaW5sb2dpbiIsImlhdCI6MTcxODg3NjM2MiwiZXhwIjoxNzE4ODc5OTYyLCJuYmYiOjE3MTg4NzYzNjIsImp0aSI6IlhLMHM1cGF6QklFdmxEeW0iLCJzdWIiOiIxIiwicHJ2IjoiZGY4ODNkYjk3YmQwNWVmOGZmODUwODJkNjg2YzQ1ZTgzMmU1OTNhOSJ9.OKRbkNCe_qzs7dmJwAGxrYQ2AX1w9gP7Ek0i1HW4cZ8


# Output

{
  "message": "Successfully logged out"
}

# USER LOGOUT API

# Endpoint
http://127.0.0.1:8000/api/auth/logoutUser

# User accounts
### Create a new user account

# Admin accounts




## A BOUT CHATS

# API TO CREATE NEW CHAT

# Endpoint
http://127.0.0.1:8000/api/auth/createChat

# Payload
{
  "user_id":"2"
}

# output

{
  "message": "Chat created successfully",
  "newChat": {
    "user_id": "2",
    "chat_id": "68341774685587512190",
    "time": "2024-06-19 08:10:46",
    "updated_at": "2024-06-19T08:10:46.000000Z",
    "created_at": "2024-06-19T08:10:46.000000Z",
    "id": 14
  }
}



# API TO UPDATE CHAT

# Endpoint
http://127.0.0.1:8000/api/auth/createChat

#  Payload

{
  "chat":"The day of future past",
  "chat_id":"33583045676212370414"
  
}

# output


200


#  API TO READ ALL CHATS

# Endpoint

http://127.0.0.1:8000/api/auth/readChat/1

# Output

{
  "chats": [
    {
      "id": 2,
      "chat": "what is you name?",
      "chat_id": "0",
      "time": "2024-06-08 11:08:17",
      "user_id": 1,
      "created_at": null,
      "updated_at": null
    },
    {
      "id": 3,
      "chat": "how are you doing?",
      "chat_id": "0",
      "time": "2024-06-08 14:21:31",
      "user_id": 1,
      "created_at": null,
      "updated_at": null
    },
    {
      "id": 4,
      "chat": null,
      "chat_id": "49730262124271153254",
      "time": "2024-06-08 16:07:15",
      "user_id": 1,
      "created_at": null,
      "updated_at": null
    },
    {
      "id": 5,
      "chat": "we the best",
      "chat_id": "28973681079515015937",
      "time": "2024-06-09 14:56:20",
      "user_id": 1,
      "created_at": null,
      "updated_at": "2024-06-09T14:42:32.000000Z"
    },
    {
      "id": 6,
      "chat": null,
      "chat_id": "06713508475472340438",
      "time": "2024-06-09 18:32:42",
      "user_id": 1,
      "created_at": null,
      "updated_at": null
    }
  ]
}




# API TO READ MESSAGES IN THE CHATS

# Endpoint
http://127.0.0.1:8000/api/auth/readMessages/2/chats

# Output

{
  "chat": {
    "id": 2,
    "chat": "what is you name?",
    "chat_id": "0",
    "time": "2024-06-08 11:08:17",
    "user_id": 1,
    "created_at": null,
    "updated_at": null
  },
  "messages": [
    {
      "id": 7,
      "message": "How the best football 2023-2024 ?",
      "image": null,
      "time": "2024-06-08 09:33:39",
      "from": "user",
      "chat_id": 2,
      "created_at": null,
      "updated_at": null
    },
    {
      "id": 8,
      "message": "Drilox is the best football but only in virtual reality",
      "image": null,
      "time": "2024-06-08 11:08:17",
      "from": "earthena",
      "chat_id": 2,
      "created_at": null,
      "updated_at": null
    },
    {
      "id": 9,
      "message": "how are you doing?",
      "image": null,
      "time": "2024-06-08 14:21:31",
      "from": "user",
      "chat_id": 2,
      "created_at": null,
      "updated_at": null
    },
    {
      "id": 10,
      "message": "How pretty well how can i help you",
      "image": null,
      "time": "2024-06-08 16:07:15",
      "from": "earthena",
      "chat_id": 2,
      "created_at": null,
      "updated_at": null
    },
    {
      "id": 11,
      "message": "we the best",
      "image": null,
      "time": "2024-06-09 14:56:20",
      "from": "user",
      "chat_id": 2,
      "created_at": null,
      "updated_at": "2024-06-09T14:42:32.000000Z"
    },
    {
      "id": 12,
      "message": "I dont think we are the best only that we keep trying",
      "image": null,
      "time": "2024-06-09 18:32:42",
      "from": "earthena",
      "chat_id": 2,
      "created_at": null,
      "updated_at": null
    }
  ]
}

# API TO DELETE  CHATS AND THERE RELATED MESSAGES

# Endpoint
http://127.0.0.1:8000/api/auth/deleteChat/6

# Output

{
  "message": "Chat deleted successfully"
}


# API TO REQUEST THE AI AND GET RESPONSE

# Endpoint
http://127.0.0.1:8000/api/auth/aiApi

# Payload

{
  "string":"How is the real champion ?"
}


# output
;------








# recap



# API TO CREATE  USER  

# Endpoint
http://127.0.0.1:8000/api/auth/sendMailForVerification

# payload to  organisation with organisation with twogegere
{
  
  "organisation_phone":"0800245677",
  "organisation_address":"Kampala",
  "nature_of_business":"Ucc",
  "number_of_users":"77",
  "organisation_value":"organisation",
  "organisation_email":"kbs@gmail.com",
  "organisation_website":"http://kbs.a.ug",
  "organisation_name":"kbs ug",
  "country":"uganda",
  "state":"kampalara",
  "zip":"45678",


  "name":" silse",
  "email":"silse@gmail.com",
  "password":"123456",
  "phone":"0784567858",
  "product":"twogere",
  "role":"admin"

}
#  payload for  twogere  individual
{
  "name":" alfred",
  "email":"alfredkazkijoibwe19@gmail.com",
  "password":"123456",
  "phone":"0784567858",
  "product":"twogere",
  "gender":"male"
}



#  payload for   yodegree organisation web
{
  "organisation_phone":"0800378767",
  "organisation_address":"nakase",
  "nature_of_business":"school",
  "number_of_users":"60",
  "organisation_value":"organisation",
  "organisation_email":"peposchool@gmail.com",
  "organisation_website":"http:peposchool/",
  "organisation_name":"peposchool",
  "country":"uganda",
  "state":"kampalara",
  "role":"user",

  "name":" lele",
  "email":"lele@gmail.com",
  "password":"123456",
  "phone":"0784567858",
  "product":"yodegree",
  "gender":"kampala"

}
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



# Output is sussess message






# API TO GET  ALL YODEGREE ORGANISATION WITH THERE  CONTACT PERSONS

# Endpoint
http://127.0.0.1:8000/api/auth/getAllOrganisationYodegree

# Output


{
  "organisations": [
    {
      "id": 1,
      "organisation_name": "ssososo",
      "organisation_website": "http:ssososo/",
      "organisation_email": "ssososo@gmail.com",
      "country": "uganda",
      "state": "kampalara",
      "zip": "45654",
      "created_at": null,
      "updated_at": null,
      "product": "yodegree",
      "organisation_phone": "0800278767",
      "organisation_address": "nakase",
      "nature_of_business": "school",
      "number_of_users": "60",
      "image": "",
      "name": "alfred",
      "username": null,
      "email": "alfsrejd1@gmail.com",
      "phone": "0784567858",
      "phone1": null,
      "age": null,
      "gender": "kampala",
      "velification_code": "803630",
      "login_status": null,
      "twogere_customer_id": null,
      "yodegree_customer_id": null,
      "org_customer_id": null,
      "institution": null,
      "level_of_education": null,
      "semester": null,
      "year": null,
      "course": null,
      "role": "admin",
      "organisation_id": 5
    },
    {
      "id": 2,
      "organisation_name": "lessoso school",
      "organisation_website": "http:lessoso/",
      "organisation_email": "lessoso@gmail.com",
      "country": "uganda",
      "state": "kampalara",
      "zip": "35654",
      "created_at": null,
      "updated_at": null,
      "product": "yodegree",
      "organisation_phone": "0800378767",
      "organisation_address": "nakase",
      "nature_of_business": "school",
      "number_of_users": "60",
      "image": null,
      "name": "alfred",
      "username": null,
      "email": "alfredleso@gmail.com",
      "phone": "0784567858",
      "phone1": null,
      "age": null,
      "gender": "kampala",
      "velification_code": "607886",
      "login_status": null,
      "twogere_customer_id": null,
      "yodegree_customer_id": null,
      "org_customer_id": null,
      "institution": null,
      "level_of_education": null,
      "semester": null,
      "year": null,
      "course": null,
      "role": "admin",
      "organisation_id": 6
    },
    {
      "id": 3,
      "organisation_name": "peposchool",
      "organisation_website": "http:peposchool/",
      "organisation_email": "peposchool@gmail.com",
      "country": "uganda",
      "state": "kampalara",
      "zip": "98654",
      "created_at": null,
      "updated_at": null,
      "product": "yodegree",
      "organisation_phone": "0800378767",
      "organisation_address": "nakase",
      "nature_of_business": "school",
      "number_of_users": "60",
      "image": null,
      "name": "lele",
      "username": null,
      "email": "lele@gmail.com",
      "phone": "0784567858",
      "phone1": null,
      "age": null,
      "gender": "kampala",
      "velification_code": "068672",
      "login_status": null,
      "twogere_customer_id": null,
      "yodegree_customer_id": null,
      "org_customer_id": null,
      "institution": null,
      "level_of_education": null,
      "semester": null,
      "year": null,
      "course": null,
      "role": "admin",
      "organisation_id": 7
    }
  ]
}



{
  "organisations": [
    {
      "id": 8,
      "organisation_name": "ubc ug",
      "organisation_website": "http://ubc.a.ug",
      "organisation_email": "ubc@gmail.com",
      "country": "uganda",
      "state": "kampalara",
      "zip": "45650",
      "created_at": null,
      "updated_at": null,
      "product": "twogere",
      "organisation_phone": "0800845677",
      "organisation_address": "Kampala",
      "nature_of_business": "Broadcast",
      "number_of_users": "57",
      "image": null,
      "name": "kyekye",
      "username": null,
      "email": "kyekye@gmail.com",
      "phone": "0784567858",
      "phone1": null,
      "age": null,
      "gender": null,
      "velification_code": "726348",
      "login_status": null,
      "twogere_customer_id": null,
      "yodegree_customer_id": null,
      "org_customer_id": null,
      "institution": null,
      "level_of_education": null,
      "semester": null,
      "year": null,
      "course": null,
      "role": "admin",
      "organisation_id": 8
    },
    {
      "id": 9,
      "organisation_name": "ucc ug",
      "organisation_website": "http://ucc.a.ug",
      "organisation_email": "ucc@gmail.com",
      "country": "uganda",
      "state": "kampalara",
      "zip": "45365",
      "created_at": null,
      "updated_at": null,
      "product": "twogere",
      "organisation_phone": "0800645677",
      "organisation_address": "Kampala",
      "nature_of_business": "Ucc",
      "number_of_users": "57",
      "image": null,
      "name": "tario",
      "username": null,
      "email": "tario@gmail.com",
      "phone": "0784567858",
      "phone1": null,
      "age": null,
      "gender": null,
      "velification_code": "562253",
      "login_status": null,
      "twogere_customer_id": null,
      "yodegree_customer_id": null,
      "org_customer_id": null,
      "institution": null,
      "level_of_education": null,
      "semester": null,
      "year": null,
      "course": null,
      "role": "admin",
      "organisation_id": 9
    },
    {
      "id": 10,
      "organisation_name": "kbs ug",
      "organisation_website": "http://kbs.a.ug",
      "organisation_email": "kbs@gmail.com",
      "country": "uganda",
      "state": "kampalara",
      "zip": "45678",
      "created_at": null,
      "updated_at": null,
      "product": "twogere",
      "organisation_phone": "0800245677",
      "organisation_address": "Kampala",
      "nature_of_business": "Ucc",
      "number_of_users": "77",
      "image": null,
      "name": "silse",
      "username": null,
      "email": "silse@gmail.com",
      "phone": "0784567858",
      "phone1": null,
      "age": null,
      "gender": null,
      "velification_code": "800123",
      "login_status": null,
      "twogere_customer_id": null,
      "yodegree_customer_id": null,
      "org_customer_id": null,
      "institution": null,
      "level_of_education": null,
      "semester": null,
      "year": null,
      "course": null,
      "role": "admin",
      "organisation_id": 10
    }
  ]
}



# API TO GET ALL YODGREE MEMBERS

# Endpoint
http://127.0.0.1:8000/api/auth/getAllYodegreeUsers

# Output
{
  "organisations": [
    {
      "id": 4,
      "name": "Fefe",
      "username": null,
      "email": "fefe@gmail.com",
      "phone": "0784567858",
      "phone1": null,
      "image": null,
      "age": "45",
      "gender": "male",
      "velification_code": "339709",
      "login_status": null,
      "twogere_customer_id": null,
      "yodegree_customer_id": null,
      "org_customer_id": null,
      "institution": "uict",
      "level_of_education": "Diploma",
      "semester": "1",
      "year": "1",
      "course": "Management",
      "product": "yodegree",
      "role": null,
      "organisation_id": null,
      "created_at": null,
      "updated_at": null
    },
    {
      "id": 5,
      "name": "karere",
      "username": null,
      "email": "karere@gmail.com",
      "phone": "0784567858",
      "phone1": null,
      "image": null,
      "age": "45",
      "gender": "male",
      "velification_code": "140930",
      "login_status": null,
      "twogere_customer_id": null,
      "yodegree_customer_id": null,
      "org_customer_id": null,
      "institution": "Muku",
      "level_of_education": "Phd",
      "semester": "2",
      "year": "2",
      "course": "Medicine",
      "product": "yodegree",
      "role": null,
      "organisation_id": null,
      "created_at": null,
      "updated_at": null
    },
    {
      "id": 6,
      "name": "kichi",
      "username": null,
      "email": "kichi@gmail.com",
      "phone": "0784567858",
      "phone1": null,
      "image": null,
      "age": "45",
      "gender": "male",
      "velification_code": "243593",
      "login_status": null,
      "twogere_customer_id": null,
      "yodegree_customer_id": null,
      "org_customer_id": null,
      "institution": "Mubs",
      "level_of_education": "Phd",
      "semester": "2",
      "year": "3",
      "course": "DDA",
      "product": "yodegree",
      "role": null,
      "organisation_id": null,
      "created_at": null,
      "updated_at": null
    },
    {
      "id": 7,
      "name": "fred",
      "username": null,
      "email": "fred@gmail.com",
      "phone": "0784567858",
      "phone1": null,
      "image": null,
      "age": "45",
      "gender": "male",
      "velification_code": "004948",
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
  ]
}


{
  "organisations": [
    {
      "id": 11,
      "name": "alfred",
      "username": null,
      "email": "alfredkazkijoibwe19@gmail.com",
      "phone": "0784567858",
      "phone1": null,
      "image": null,
      "age": null,
      "gender": "male",
      "velification_code": "123858",
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
      "role": null,
      "organisation_id": null,
      "created_at": null,
      "updated_at": null
    },
    {
      "id": 12,
      "name": "tito",
      "username": null,
      "email": "tito@gmail.com",
      "phone": "0784567858",
      "phone1": null,
      "image": null,
      "age": null,
      "gender": "male",
      "velification_code": "585165",
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
      "role": null,
      "organisation_id": null,
      "created_at": null,
      "updated_at": null
    },
    {
      "id": 13,
      "name": "tali",
      "username": null,
      "email": "tali@gmail.com",
      "phone": "0784567858",
      "phone1": null,
      "image": null,
      "age": null,
      "gender": "male",
      "velification_code": "514959",
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
      "role": null,
      "organisation_id": null,
      "created_at": null,
      "updated_at": null
    }
  ]
}




# API TO GET ORGANISATION BY ID 

# Endpoint
http://127.0.0.1:8000/api/auth/getAllOrganisationUsers/5



{
  "users": [
    {
      "id": 1,
      "name": "alfred",
      "username": null,
      "email": "alfsrejd1@gmail.com",
      "phone": "0784567858",
      "phone1": null,
      "image": "",
      "age": null,
      "gender": "kampala",
      "velification_code": "803630",
      "login_status": null,
      "twogere_customer_id": null,
      "yodegree_customer_id": null,
      "org_customer_id": null,
      "institution": null,
      "level_of_education": null,
      "semester": null,
      "year": null,
      "course": null,
      "product": "yodegree",
      "role": "admin",
      "organisation_id": 5,
      "created_at": null,
      "updated_at": null
    },
    {
      "id": 18,
      "name": "relore",
      "username": null,
      "email": "relore@gmail.com",
      "phone": "0784567858",
      "phone1": null,
      "image": null,
      "age": "45",
      "gender": "male",
      "velification_code": "773367",
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
      "organisation_id": 5,
      "created_at": null,
      "updated_at": null
    }
  ]
}

