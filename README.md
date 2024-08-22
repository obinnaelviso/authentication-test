As specified in the job description, this projected was developed using:
* Laravel
* Vue.js

## Key concepts used in this project:
### Laravel Breeze Scaffolding
The project was scaffolded using the Laravel Breeze package. This package provides a good starting point for a Laravel project with simple authentication.
### Services
The business logic is encapsulated in services, which are injected into the controllers. This allows for better separation of concerns and easier testing. For example, the PostService is used to handle the creation, updating, and deletion of posts which can be integrated both in the API and the web controllers. 
### DTOs (Data Transfer Objects)
Data Transfer Objects are used to pass data between the controllers and the services. Spatie Data package is used to create the DTOs because it provides a simple way to create and validate data objects. 
### Test Driven Development
The project was developed using TDD. This means that the tests were written before the code. This approach ensures that the code is testable to enable easier maintenance and refactoring. 
### Vue.js with Inertia.js
The frontend is built using Vue.js with Inertia.js. Inertia.js allows for the use of Vue.js components without the need for an API. This makes the development process faster and easier.
