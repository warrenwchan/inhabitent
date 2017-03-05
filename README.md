# INHABITENT 
README

Inhabitent was a wordpress theme based site we created using php, sass and a bit of Javascript. In this project we got to touch over the language of php and the syntax required to operate this language. Creating the wordpress theme required us to use php. Since wordpress uses a template hierarchy we must use specific template php files to represent the page we want. We are able to organize and sort our file structure since php allows us to make our code modular. Php lets us get files, meaning we can grab specific parts we created and plug them into each other. Yay to DRY. 
---
### FRONT PAGE front-page.php
![inhabitent-min](https://cloud.githubusercontent.com/assets/24995518/23585400/125a698a-0133-11e7-94de-b6f95e1ebd62.png)

---

### HEADER

In the header.php we marked up a navbar that included a search bar. I then created another version of this header to later toggle the inverted navbar on the scroll height. Using a bit of javascript we were able to toggle an animation that show and hides the search bar. 
![screen shot 2017-03-01 at 6 45 25 pm-min](https://cloud.githubusercontent.com/assets/24995518/23585586/32b574d2-0137-11e7-9305-9d40663a4fc0.png)


### SHOP STUFF

Shop stuff sa pretty simple to markup and style. In php we can make variable similar to js. We created an argment variable of an array of taxonomy that we want to get. Then we made a variable to get those terms we asked for. 
```
 <?php  //shop stuff on front page
    $arg = array( 'taxonomy' => 'product_type', 'hide_empty' => true);
    $terms = get_terms( $arg );
 ?>
 ```
 
This is how we dynimacly populated each shop stuff category boxes.
 
![screen shot 2017-03-04 at 11 32 19 pm-min](https://cloud.githubusercontent.com/assets/24995518/23585603/92c6105c-0137-11e7-85d9-72c82fc43347.png)
