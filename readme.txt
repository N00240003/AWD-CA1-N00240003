//Ciara Conroy
//N00240003
//AWD - CA1 : Start of Artpiece-Essay-App-2025


//Intro
The purpose of this CA was to develop a simple web appplication using the Laravel framework. Simply put, Laravel is a PHP based environment with tools and ready-made features to make building web applications easier and keep your code tidy.
It follows a Model-View-Controller(MVC) architecture, which means it breaks the application into the 3 components mentioned in the name.
A Model in this context is what defines the "things" my app uses. The Model works with the database that has all the information of all Artpieces and it also knows how to handle the data (like update/save). This is called the "Business Logic" of the application.
A View is what the user sees on their screens/the web page. It shows the information from the Model in a nice, readable way.
Lastly the Controller is the "middleman" between the Model and View. It listens for the users actions and then tells the Model/View what they should do.

My Artpiece-Essay-App-2025 is at the moment a very basic CRUD appplication with one model so far - "Artpieces".
After setting up Laravel and creating my project (laravel new Artpiece-Essay-App-2025), I ran the following command to create my model: php artisan make:model Artpiece -mcr
The -mcr ensured that the Migration for the table and the Resource Controller for the CRUD actions were created as well. 
I then made views for each "action page" (except delete) with following command: php artisan make:view .\artpieces\index (same for create, show and edit). So, when the user wants to view all artpieces/create or update any pieces they have a readable view to do so.
For the database I ran a migration (php artisan migrate) to set it up and then seeded it (php artisan db:seed) with some sample data.
I added the routes of each action to web.php. This file is called whenever the user clicks something/"takes a specific route" to then tell the app what code should be run (eg a function in the ArtpieceController)

I created an artpiece-card component to display each artpiece starting by executing this command: php artisan make:component ArtpieceCard
This line creates 2 files but I only edited the blade.php one as it is for the view. I made an artpiece-details component for each artpiece too to display their information.

For additional features:
- I impleneted a user check to change the functionality of the app i.e. if the user is not an admin, they are not allowed to edit/create/delete. I changed the register form to include the "role" of the user (which is not good practice security wise but will suffice for the requirements of the project at this time)
- A search bar where in the user can search for a piece by typing in its title.

//Features
The features of my project are the following:
- A view where the use can see images and informaton of the pieces in a more readable way then looking at the database
- Adding/Creating new pieces to the database
- Updating the existing pieces in the database
- Deleting pieces from the database
- Being able to search for a specific piece in the database by entering it's title into the search
- Slight change of view depending on type of user (regular user/admin)

//Debugging attempts
I had an issue with the clickability of my card components. After some debugging and some in-class help I discovered you cannot put an <a> tag within in another <a> tag. It was a simple fix by just adjusting the code within the component and where it was being displayed in thr loop in the HTML.
I also had difficulty implementing the search function. With the assistance from a fellow classmate, I managed to get it working. The issue was the route I had made (the syntax I used from the tutorial was unfamiliar and seemed to be incompatible with what I was trying to achieve) and in the controller I was not passing the information in correctly.

//Conclusion
In conclusion, I believe my application passes the minimum requirements functionality wise. However, I do think there was a bit more data handling I could have added.
The view is also still far from being "visually appealing". But I have become much more familiar wiht the principles of server side web applications and look forward to the next phase of this project.
I currently hope to add a sort funtion (to display eg pieces of a specific type) and bookmark feature to save the essays a user might want to refer back to.