# installation + configuration

- `cp .env.example .env`
- Set up DB connection
- `php artisan key:generate`
- `php artisan migrate`
- `php artisan db:seed`
- `php artisan serve`


# Endpoints
## Customer
`GET /api/customers`
- list of all customers

`GET /api/customers/{customerId}`
- get a customer data

`GET /api/customers/{customerId}?withGroups=1`
- get a customer data with its groups

`PUT /api/customers/{customerId}/groups`
- required parameter: `groupId`
- create relation between customer and group
 ___
## Group
`GET /api/groups`
- list of all groups

`GET /api/groups/{groupId}`
- get a group data
