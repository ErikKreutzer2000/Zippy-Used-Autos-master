# INF653 Back End Web Development I - Midterm Project Requirements

Deployed to: https://zippy-used-autos-master.herokuapp.com/


You will build a PHP Web Application for our client “Zippy Used Autos”.

The design of your PHP Application should follow the MVC design pattern. There will be more than one controller and the design will be discussed further in class and on Blackboard.

## Database:
- [x] Zippy has a small inventory of 10 vehicles on his lot. He has provided the details for the vehicles in the attached Excel spreadsheet.

- [x] You will need to create a database named “zippyusedautos”.

- [x] The database should contain 4 tables: vehicles, makes, types, and classes.

- [x] Provide foreign key relationships to link the tables.

## The Public Homepage:
- [x] Zippy wants it to simply list ALL of his inventory by default when the page loads.

- [x] The list should be ordered by most expensive vehicle first and descend to least expensive.

- [x] Customers should be able to change the sort order to year (also descending) or back to price.

- [x] The sort order input (price or year) may be a drop down menu or radio buttons.

- [x] Customers should be able to choose to display only a specific make, type, or class of vehicle.

- [x] You do not need to provide combinations of the above... Just make OR type OR class queries.

- [x] These make, type, or class selections should be made from drop-down menus.

## Zippy’s Admin Backend:

- [x] Zippy’s admin area should be in a subdirectory named admin. URL ends in: /admin/

- [x] The starting page is a list like customers see, but also allows Zippy to delete any vehicle.

- [x] Zippy needs pages to list makes, types, and classes where he can add more or delete them.

- [x] He also needs a page to add new vehicles to his list.

- [x] Do not link to the admin pages from the public page of Zippy’s app. We will only tell Zippy the address of this page. We have not covered creating a secure login yet, and I will not expect it for this midterm project.

## Extra Credit:
- [x] Provide list results that combine the desired make, type, and class. For example, display a list of only Chevy SUV vehicles in the Economy class. The display of the drop-down menus should reflect the user choices when results show.

- [x] Provide an admin footer menu that adapts to the page that is displaying it. The footer should only link to other admin pages and not the one you are currently using. This can be accomplished with logic and one admin footer file.


## Styling
- [x] Zippy realizes that over 50% of people browsing the web for a new vehicle will be using a mobile device. Please apply Responsive Design to Zippy’s application. While Zippy understands he did not hire a dedicated front-end developer, we should be able to provide a basic design that confirms to mobile phones, tablets, and larger screens. It also helps to design for the smallest device screen first. In Chrome Dev Tools, this is an iPhone 5. Work your way up to larger screens with media queries and test the display in dev tools. Note: Many back end devs use Bootstrap, Semantic UI, or similar frameworks instead of CSS from scratch. Frameworks are not required but may help you with the responsiveness and appearance of your application.

## Deploy
- [x] When complete, deploy Zippy’s web app to Heroku. You will need to export your dev database from myPhpAdmin and import it into Heroku’s JawsDB version of MySQL. Utilize the directions for Heroku deployment in Blackboard to accomplish this.

## Submission
- [x] A link to your GitHub code repository (no code updates after the due date accepted on the Midterm)
- [x] A link to your deployed project on Heroku (for Zippy’s customers)
- [x] A link to Zippy’s “Back End Home Page” (for Zippy to admin his site)
- [x] A one page PDF document discussing what challenges you faced while building your project.
- [x] Share your project and the key parts of your discussion in the final project forum in Blackboard.
