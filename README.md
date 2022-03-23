Logistika

## API Reference

### Authentication for Admin

 Logout an admin

```http
guard:admin POST /api/admin/logout  
```


 Refresh admin's token

```http
guard:admin POST /api/admin/refresh
```

 Get information about authenticated admin 

```http
guard:admin GET /api/admin/admin-profile
```
### Admin routes for users
Get all users
```http
guard:none GET /api/users
```
Get one user
```http
guard:admin  GET /api/users/{id}
```
Delete a user
```http
guard:admin DELETE /api/users/{id}
```
Update a user (can change everythin except password field)
```http
guard:admin  PUT /api/users/{id}
```
| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `name` | `string` | **Required** |
| `email` | `string` | **Required** |
| `phone` | `string` | **Required** |
| `country` | `string` | **Required** |
| `address` | `string` | **Required** |
| `passport_no` | `string` | **Required** |
| `avatar` | `string` | **Optional** |

### Admin routes for companies
Get all companies
```http
guard:none  GET /api/companies
```
Get one company
```http
guard:none  GET /api/companies/{id}
```
Get accept or decline a company (viseversa)
```http
 guard:admin GET /api/companies/company-accept/{id}
```
Update a company
```http
guard:admin  PUT /api/companies/{id}
```

Delete one company
```http
guard:admin  DELETE /api/companies/{id}
```

### State
Get all states
```http
guard:none  GET /api/state
```
Get one state
```http
guard:admin  GET /api/state/{id}
```
Create a state
```http
guard:admin  POST /api/state
```
| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `title` | `string` | **Required** |
| `country` | `string` | **Required** |

Delete one state
```http
guard:admin DELETE /api/state/{id}
```



### Country
Get all countries
```http
guard:none  GET /api/countries
```
Get one country
```http
guard:admin  GET /api/countries/{id}
```
Create a country
```http
guard:admin  POST /api/countries
```
| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `title` | `string` | **Required** |

Delete one country
```http
guard:admin DELETE /api/countries/{id}
```



### Technique Type
Get all technique types
```http
guard:none  GET /api/technique-types
```
Get one techniques by technique type
```http
guard:none  GET /api/techniques-by-type/{id}
```
Get one technique type
```http
guard:admin  GET /api/technique-types/{id}
```
Create a technique type
```http
 guard:admin POST /api/technique-types
```
| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `title` | `string` | **Required** |

Delete one technique type
```http
guard:admin  DELETE /api/technique-types/{id}
```



### Technique (For now only company update, delete)
Get all technique
```http
guard:none  GET /api/techniques/all
```
Get company's techniques
```http
guard:companies  GET /api/techniques
```
Get one technique
```http
guard:none  GET /api/techniques/{id}
```
Create a technique 
```http
guard:companies  POST /api/techniques
```
| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `technique_type_id` | `foreing_id` | **Required**|
| `state` | `string` | **Required** |
| `price` | `string` | **Required** |
| `description` | `string` | **Required** |

Update a technique 
```http
guard:companies  POST /api/techniques/{id}
```

Delete one technique
```http
guard:companies  DELETE /api/techniques/{id}
```


### Routes (For now only company update, delete)
Get all routes
```http
guard:none  GET /api/routes/all
```
Get authenticated company's routes
```http
guard:companies  GET /api/routes
```
Get one of routes
```http
guard:none  GET /api/routes/{id}
```
Create a route for authenticated company 
```http
guard:companies  POST /api/route
```
| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `date1` | `datetime` | **Required** |
| `date2` | `datetime` | **Required** |
| `source` | `string` | **Required**|
| `destination` | `string` | **Required** |
| `car_body` | `string` | **Required** |
| `note` | `string` | **Required** |

Update a route 
```http
guard:companies  PUT /api/routes/{id}
```

Delete one route
```http
guard:companies  DELETE /api/routes/{id}
```


### Image routes
Get all images of authenticated user
```http
guard:users  GET api/user/images
```
Get all images of authenticated company
```http
guard:companies  GET api/company/images
```
Get all images of technique of authenticated company
```http
guard:companies  GET api/techniques/{id}/images
```
**{id}** - id of technique

Create an image 
```http
guard:none  POST /api/images
```
| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `type` | `string` | **Required**. **user** or **company** or **technique** |
| `owner_id` | `integer` | **Required**. **id** of user(company/technique) |
| `image` | `file` | **Required** |

Update an image 
```http
guard:none  PUT /api/images/{id}
```
| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `type` | `string` | **Required**. **user** or **company** or **technique** |
| `owner_id` | `integer` | **Required**. **id** of user(company/technique) |
| `image` | `file` | **Required** |

**id** of image

Delete an image 
```http
guard:none  DELETE /api/images/
```
| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `type` | `string` | **Required**. **user** or **company** or **technique** |
| `owner_id` | `integer` | **Required**. **id** of user(company/technique) |
| `id` | `integer` | **Required** **id** of image|



### Requests routes
Get all requests
```http
guard:none  GET api/requests/all
```
Get all requests of authenticated user or company
```http
guard:users,companies  GET api/requests
```
Get one requests
```http
guard:none  GET api/requests/{id}
```
Create a request of authenticated user 
```http
guard:users  POST /api/requests
```
| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `date1` | `datetime` | **Required** |
| `date2` | `datetime` | **Required** |
| `weight_min` | `string` | **Required** |
| `weight_max` | `string` | **Required** |
| `cubm_min` | `string` | **Required** |
| `cubm_max` | `string` | **Required** |
| `budget_min` | `string` | **Required** |
| `budget_max` | `string` | **Required** |
| `cargo_type` | `string` | **Required** |
| `car_body` | `string` | **Required** |
| `note` | `string` | **Required** |
| `source` | `foreing_id` | **Required**|
| `destination` | `foreing_id` | **Required** |
| `company_id` | `foreing_id` | **Optional** if not provided, it means access to all companies |

Update a request of authenticated user 
```http
guard:users  PUT /api/requests/{id}
```
Delete one request of authenticated user
```http
guard:users  DELETE api/requests/{id}
```

### Login a user or company or admin

```http
guard:none  POST /api/login
```
| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `email` | `string` | **Required**. Email |
| `password` | `string` | **Required**. Min 6 characters |

### Authentication for Company

 Register a company
```http
guard:none  POST /api/company/register
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `email` | `string` | **Required**. Name |
| `name` | `string` | **Required**. Email |
| `password` | `string` | **Required**. Min 6 characters |
| `phone` | `string` | **Required**.  |
| `country` | `string` | **Required**.  |

 Update a company
```http
guard:companies  POST /api/company/update
```
Logout a company

```http
guard:companies POST /api/company/logout
```

 Refresh company's token

```http
guard:companies  POST /api/company/refresh
```

Get information about authenticated company 

```http
guard:companies  POST /api/company/company-profile
```

### Authentication for User 

Register a user

```http
guard:none  POST /api/user/register
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `email` | `string` | **Required**. Name |
| `name` | `string` | **Required**. Email |
| `password` | `string` | **Required**. Min 6 characters |
| `phone` | `string` | **Required**.  |
| `country` | `string` | **Required**.  |

Register a user

```http
guard:users  POST /api/user/update
```

 Logout a user

```http
guard:users  POST /api/user/logout
```

 Refresh user's token

```http
guard:users  POST /api/user/refresh
```

 Get information about authenticated user 

```http
guard:users  POST /api/user/user-profile
```


### Request Answers routes
Get all offers
```http
guard:none  GET api/request-answers/all
```

Get all offers of authenticated company
```http
guard:companies  GET api/request-answers
```

Get one of offers
```http
guard:none  GET api/request-answers/{id}
```

create one company offer
```http
guard:companies  POST /api/request-answers/
```
| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `request_id` | `foreign_id` | **Required**. |
| `price` | `string` | **Required**.  |
| `note` | `string` | **Required**.  |

Delete company offer
```http
guard:companies  DELETE /api/request-answers/{id}
```

Update company offer 
```http
guard:companies  PUT /api/request-answers/{id}
```
| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `request_id` | `foreign_id` | **Optional**. |
| `price` | `string` | **Optional**.  |
| `note` | `string` | **Optional**.  |
| `status` | `integer` | **Optional**.  |
| `status_note` | `string` | **Optional**.  |



### Sliders routes
Get all sliders
```http
guard:none  GET api/sliders
```

Get one slider
```http
guard:none  GET api/sliders/{id}
```

create one slider
```http
guard:admins  POST /api/sliders/
```
| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `title` | `string` | **Required**. |
| `description` | `string` | **Required**.  |
| `url` | `string` | **Required**.  |

Delete slider
```http
guard:admins  DELETE /api/sliders/{id}
```

Update slider
```http
guard:admins  PUT /api/sliders/update/{id}
```


### Status filter
Get all waiting requests
```http
guard:none  GET api/requests/status/0
```
Get all answered requests
```http
guard:none  GET api/requests/status/1
```


### Status routes for authenticated user
accept company's answer 
```http
guard:users  GET  api/request-answers/{id}/accept
```

cancel company's answer 
```http
guard:users  GET  api/request-answers/{id}/cancel
```

cancel all answers for specific request
```http
guard:users  GET  api/requests/{id}/answersCancel
```

### Database part of .env file should be like this

```
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=database_name
DB_USERNAME=username
DB_PASSWORD=password
```


Commands to run at root directory
```docker compose build app```
```docker compose up -d```

#### *Optional to see running containers

```docker compose ps```

```docker compose exec app php artisan migrate```
```docker compose exec app php artisan storage:link```

