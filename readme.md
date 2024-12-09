# To-do List

Here's a simple to-do list. To add items to your list, you can click the button in the top right and fill in the form.
To edit or delete an item, you can press the edit-button once it already exists.
You can also change the status of the item in that screen.

To set it up, just copy the import.sql to create a database for the application and configure the database settings in connect.php if necessary. After that, it can be locally hosted through xampp and other similar programs.


# What happened to using TallStack?
Long story short, I couldn't get everything to work out.
I tried dividing it up into smaller steps, installing Laravel and setting it up, trying to follow the Bootcamp as that was the first tutorial I saw, but installing Breeze wasn't quite a breeze.

I ended up finding a different tutorial that configured it in the default setup of Laravel, which worked better than using the commands from the Bootcamp. After making sure Node.JS was installed, I tried installing Vite (to follow the tutorial), but it didn't want to work. After some research I ended up fixing it by changing the ExecutionPolicies setting in windows, which prevented me from running scripts.

One of the tutorials I tried ended up being a dead end that was released in parts, with the full series not being out yet.
Another taught me basics of routing and controllers, but when I tried to follow along with the registration form that they were making, despite seemingly having the exact same code, it did not want to work the same way. Neither did it give an error to inform me of where I was wrong. 

In total I ended up trying 4 different tutorials, none of which seemed to work out for me.
All ran into some technicality at some point that prevented me from either setting things up in the right configuration or progressing to the next steps.

I would've loved to puzzle around with some more detailed stuff if I could, but it simply didn't want to work out.
In the end, I used up most of my time trying to troubleshoot, restart and redo tutorials that made me run into various errors.

# Used methods
Eventually, I realized that it was easier to make the application using known methods and processes than it would be to figure out the rest of the stack from scratch. The end result is what you're looking at now. 
I do understand why a more complex stack like TallStack is beneficial for large-scale applications, but it might be a bit too much for a simple to-do list.

# Goals
All that being said, there's a few things I would've added.
I should probably allow the user to toggle whether a task is done or not without going to the edit page.
Besides that, there's some styling things, but I also shouldn't overcomplicate something so simple.

Having seen what's possible with Laravel and its dependencies did open my eyes to what's possible when it comes to managing
accounts, validation and users. That's probably just the tip of the iceberg, but it's something that I'd likely use 
Laravel for in future projects.