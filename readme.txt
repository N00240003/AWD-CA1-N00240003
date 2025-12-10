//Ciara Conroy
//N00240003
//AWD – CA2: Expanding my Artpiece-Essay-App-2025

//Intro
In CA2 I have expanded my original Laravel project that only had one model (Artpieces) by adding two more: Artists and Essays. Guided by the CA lessons, I learned how to build both one-to-many and many-to-many relationships and implemented full CRUD functionality across all three models..

//My relationships
--My One-to-Many: Artpieces and Essays
I implemented a one-to-many relationship between Artpieces and Essays. This means that one Artpiece can have many Essays and each Essay can only belong to one Artpiece.
I updated the models using hasMany() and belongsTo(), created the Essay controller, and added views that display all Essays and a section within the Artpiece view to show the essays associated with it. I also built a form that allows users to submit new Essays, including validation and proper routing.
This section reinforced the importance of model relationships in Laravel and prepared me for more complex relationship structures.

--Editing and Deleting Essays
After getting Essays to display correctly, I moved on to implementing the ability to edit and delete them. These added two more pieces of the CRUD cycle to the Essay model.
I created:
-	An edit form pre-filled with the Essay’s existing data
-	Logic in the controller to update the Essay
-	A delete button and the corresponding destroy route
I also learned to handle foreign key constraint errors, particularly when trying to remove data that is referenced elsewhere. Ensuring that Essays delete cleanly while maintaining database integrity turned out to be a valuable part of the lesson.

--My Many-to-Many: Artpieces and Artists
Moving on from a simple one-to-many, I implemented a more challenging many-to-many structure between Artpieces and Artists.
This type of relationship means that an Artpiece can be created by multiple Artists and an Artist can contribute to many Artpieces.
To support this, I created a pivot table, added belongsToMany() relationships in both models, and updated controllers to sync the pivot data. I also updated the interface so that when users view an Artpiece, they can clearly see the Artists involved—and vice versa.
I also learned to think through data implications when deleting Artpieces. Specifically, removing an Artpiece removes its pivot relationships but should not delete the Artists themselves.

--CRUD Features for Artists
The final lesson centered around building full CRUD (Create, Read, Update, Delete) functionality for the Artist model. This process included:
-	Setting up the necessary routes in web.php
-	Creating an ArtistController with all CRUD actions
-	Building index, create, edit, and detail views
-	Integrating Artists with the many-to-many relationship established earlier
By this point, the patterns from earlier lessons made the process much easier to apply. The most important part was ensuring that data updates in the Artist model properly sync with Artpieces through the pivot table.

//Features 
//Ones I managed to add
I managed to use the user roles I implemented in CA1 to have the buttons visibility change whether a user is an admin or not. So, the CRUD for all my models (except Essays) would only be accessible to admin. With Essays I made it so that the author user of an essay is able to edit/delete theirs but not the essays of another user.  
I also implemented my previous search function onto my Artists and Essays models.
Lastly I made a filter that function that, with Artists, looks at their “movement” attribute and ,with Artpieces, looks at their “type” attribute.

//Ones I wish I had the time to add
A few features I had thought of adding but didn’t get the chance were:
-	A disappearing log in message when the user logs in.
-	An artwork of the day section that randomly picks an artpiece that the user may not have encountered yet.
-	A bookmarked/liked  function and a section on the dashboard that would display the user’s bookmarked/liked Artpieces/Artists/Essays.

//Debugging attempts
As I worked through the project and ran into a few issues, our teacher’s assistant and a course-mate showed me how to use the Dump and Die function (dd()). This function lets you inspect what’s inside a variable at the exact moment your program reaches it, then stops the execution. It helped me a lot in confirming whether my objects were actually being passed through correctly.

//Shortcomings
I unfortunately had a few hiccups along the way that I was not able to remedy, namely:
-	Near the end of my project I realised that my “Update Essay” functionality had stopped working. 
-	When Updating an Artist, the new image does not load. I’m sure there is probably an easy fix to this but I had forgotten about the bug and decided on focusing to complete my CRUD functionalities.
-	Not really a bug but more so a design flaw. With my design I made it possible that an admin can delete an Artpiece within the Artist’s detail page. I realised this may be confusing for an admin user (i.e they may perhaps wanted to simply remove the connection of the piece to the artist, not delete the piece entirely)

As I was tight on time and already late submission wise I was unable to fix these errors.

//Conclusion
Completing this assignment helped deepen my understanding of Laravel’s model relationships, routing, and view rendering. Working through user roles, the one-to-many relationship between Artpieces and Essays, and the many-to-many relationship between Artpieces and Artists gave me a clearer picture of how data flows through a Laravel application. Building out nearly full CRUD functionality set for all models reinforced those concepts and showed me how the same patterns can be reused in more complex scenarios.
Although I ran into a few challenges, the process taught me how to troubleshoot more effectively and how to think ahead about data structure, validation, and user permissions. Overall, this project has made me a bit more confident in navigating Laravel’s architecture and applying its best practices. I’m looking forward to improving on this foundation in future coursework and personal projects.





