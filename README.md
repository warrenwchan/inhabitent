# INHABITENT 
README 
Inhabitent was a wordpress theme based site we created using php, sass and a bit of Javascript. In this project we got to touch over the language of php and the syntax required to operate this language. Creating the wordpress theme required us to use php. Since wordpress uses a template hierarchy we must use specific template php files to represent the page we want. We are able to organize and sort our file structure since php allows us to make our code modular. Php lets us get files, meaning we can grab specific parts we created and plug them into each other. Yay to DRY. 

### FRONT PAGE front-page.php
---

### HEADER
![screen shot 2017-03-01 at 6 45 25 pm-min](https://cloud.githubusercontent.com/assets/24995518/23585586/32b574d2-0137-11e7-9305-9d40663a4fc0.png)

In the header.php we marked up a navbar that included a search bar. I then created another version of this header to later toggle the inverted navbar on the scroll height. Using a bit of javascript we were able to toggle an animation that show and hides the search bar. 

### SHOP STUFF

In php we can madw variable similar to js. We created an argment variable of an array of taxonomy that we want to get. Then we made a variable to get those terms we asked for. 
```
 <?php  //shop stuff on front page
    $arg = array( 'taxonomy' => 'product_type', 'hide_empty' => true);
    $terms = get_terms( $arg );
 ?>
 ```
 
This is how we dynimacly populated each shop stuff category boxes aswell as most of the dynamically generated informations. 
 
![screen shot 2017-03-04 at 11 32 19 pm-min](https://cloud.githubusercontent.com/assets/24995518/23585603/92c6105c-0137-11e7-85d9-72c82fc43347.png)

### FOOTER
![screen shot 2017-03-04 at 11 32 46 pm-min](https://cloud.githubusercontent.com/assets/24995518/23592238/94deb60c-01b2-11e7-8b25-551a87b4d600.png)

The footer appreats in multiple pages in this project. Rather than writing this code for each page we can take advantage of the modular footer php file and simply use <?php get_footer(); ?>

### JOURNAL archive.php
<img width="1920" alt="screen shot 2017-03-05 at 2 48 20 pm" src="https://cloud.githubusercontent.com/assets/24995518/23592412/49020876-01b5-11e7-8088-1935d359b904.png">

when moving on to the journal page one of the confusions i had was which template i was suppose to use. Because this page has multipage entries of stories we need to contain these post and display them. home.php was used for the purpose of blog post index. this is where wordpress stores all its posts.
For the post we wrote a have post statment saying if there is a post we require the content template part that we created and styled. Wordpress handles the rest for us and retrives these things for us. 

In each journal entry, we only want to display a spesific word count so we can apply a function to it snipping the exerpt to a spesific work count. In our case we used 50. in the same function we gave the post a link that redirects us to the single.php which contains the indivisual blog post. the single.php is just a template for the post that is selected. No matter what the content is the template will still be structuered to be the same. This is us dynimically placing content into our tempates. 


