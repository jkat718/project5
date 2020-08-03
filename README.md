# Project 4
## Team New York
- Jaafar Al Hadab (Information Architect)
- Joseph Madejski (Visual Designer)
- Jack Mandell (Technician)


## Information Architect Notes:
### Website Structure (Ontology):
- Website
	- Index Z-layout welcome page
		- link to f-layout page in the strong follow
		- link to the form page in the weak follow
	- List f-layout showcase (do the other stuff) page
		- student listings
			- student name
			- blurb (~50 words)
			- image
			- link to previous project
		- link to form page
		- single link back to homepage (in case the user wants to go back)
	- Input form page
		- input for name
		- input for blurb
		- input for image
		- input for previous project
		- submit and cancel buttons
### Choreography:
The goal of the webste is to get the user to input their information into the database. There are two ways that the website can achieve this:
- By directing the user to the form page directly from the index page. This is meant for fellow csc 174 students that are familiar with the project, and wish to get to the form quickly
- By going through and scrolling all the way down in the f-layout list page. This is meant for individuals that aren't familiar with the project, and may need to see examples of what a typical student card showcase card looks like before creating one for themselves.

### Final IA Notes:
- Since we're not implementing a login system this time, the login button on the homepage merely directs to new.php
- The user is expected to go through the website in a linear manner (see choreography), therefore, a nav bar is not implemented. Though we did implement two links to the homepage in the list page in case the user wanted to go back to the homepage.
- To add an extra step to delete and edit functions, used a dropdown menu to get to to those links

## Visual Designer Notes:
-Index page: Each row of the Z-pattern approximately follows the golden ratio for visual appeal, with some slight tweaking to better fit content. 
-List page: Every new addition from the database will appear in the same format, making it easier to scan through all the options.
-Renderform page:The font, colors, and design mimic the rest of the website, making the page feel like a natural part of it.
### CRAP
-Contrast: Buttons with different functions have different theme colors. Buttons relating to information (Add info/view personal page) are dark blue, while internal navigation is lighter blue-green. To help distinguish each student, a different border color pattern is applied to each submission. The cancel button on the renderform page is a color that doesn't fit with the theme, making it distinct.
-Repetition: Each entry's content is formatted the same way for easy scanning. Button's doing the same function are formatted similarly. The header remains constant among the three pages, except for on the home page where it doesn't link back to home (an unnecessary function).
-Alignment: The content between students is aligned vertically.
-Proximity: The "submit" and "cancel" buttons on the rederform page are close because they both navigate the player from the page (they're distinguished by color an content). The names and photos of the students on the list page are close together for easy identification. There is separation between each entry by empty space and a dotted line to separate unrelated content.

## Technician Notes:
- Image submissions are uploaded to the bluehost directory, and are referened with links in the student pages

## TODO:
- [X] included a new data entry form page in the website
- [X] link to data entry form is explained
- [X] Choreography, ontology, and taxonomy
- [X] implemented a css framework
- [X] customized css framework with an override css file
- [X] design of form page follows CRAP and visual design principles
- [X] f-pattern page still looks like it did previously in project 3
- [X] html form successfully implemented and integrated with database
- [X] f-pattern webpage successfully displays data from course server
- [] html and css code vildated for all pages
- [] uploaded only website files to bluehost
