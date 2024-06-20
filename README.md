<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).








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
