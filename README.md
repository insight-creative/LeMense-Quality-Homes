# LeMense Quality Homes
WordPress website for LeMense Quality Homes

# :warning: Make sure to read this carefully before updating any plugins or editing the site

# :metal: Getting started

1. [Pages](#page_with_curl-pages)
2. [Styles](#dancer-styles)
3. [Navigation](#rocket-navigation)
4. [Footer](#shoe-footer)
5. [Advanced Custom Fields](#speech_balloon-advanced-custom-fields)
6. [Homepage](#house-homepage)
7. [Floor Plans](#construction_floor-plans)
8. [Portfolio](#house_with_garden-portfolio)
9. [Gallery](#framed_picture-Gallery)
# :open_file_folder: Basic File Structure

## :page_with_curl: Pages

Each individual page is titled page - page title ex. about = page-about.php

## :dancer: Styles

Do not make style changes in the css directory. The styles for the website are all in the \_scss directory. Each individual page has had its own style sheet setup for styles unique to that page, and then there are stylesheets setup for general styling like the footer or typography. The \_variables.scss sheet has site wide variables that can be used in your scss stylesheets.

# :eyes: Usage

## :rocket: Navigation

This theme has one registered menu.

1. main-menu for the sites primary navigation

To edit the main navigation use the header.php file

## :shoe: Footer

Edit the sites footer find footer.php

## :speech_balloon: Advanced Custom Fields

To allow easy editing of content for the client while maintaining a custom theme, I used advanced custom fields to gather input to display on page. Find all those and their settings in the Custom Fields menu

## :house: Homepage

The homepage uses the front-page.php file

A number of sections of the homepage are reused elsewhere on the site. Find those files in the inc folder for editing.

### Editing the sliders

This site uses <a href="https://swiperjs.com/" target="\_blank">Swiper</a> for all sliders.

This slider can be found in the folder inc > sliders. The floor plan sliders use images that are added when creating your new floor plan.

### Editing the Contact section

Find this file in the folder inc > contact.php
This is used across the homepage, about page, and the contact page

### Animations

For some subtle animations this site uses <a href="https://michalsnik.github.io/aos/" target="\_blank">AOS Animate on Scroll Library</a>

### Lightbox style popup

For the lightbox style popup we used this lightweight lightbox <a href="https://sorgalla.com/lity/" target="\_blank">Lity</a>. This is used on the floor plan pages slider and was added after the slider was already built. This worked as an easy integration into the existing Swiper slider without needing to rebuild the entire thing.

## :construction: Floor Plans

This site uses a custom post type for floor plans. To edit these post types navigate to inc > custom-post-type.php.

To add a new floorplan:
1. Click Add New Floor Plan
2. Enter in your Floor Plan title
3. Select the categories that you need for this plan, these will correspond with the filters on the floor plan page  
4. Set the Featured Image
5. Navigate to the Floor Plan Details section, these will be the custom fields used for additional floor plan data  
6. Floor Plan Images are the images that will get added to the slider of each floor plan
7. Enter in your square footage, the number of bedrooms, bathrooms etc ... 
8. When ready to publish your new floor plan click Publish

Floor plans use the singe-floorplans.php template file. Make edits here if you need to alter the display of the floor plans.

The floor plans archive page uses the archive-floorplans.php template file. If you need to make changes to the Floor Plans page make your edits here.  

## :house_with_garden: Portfolio

This site uses another custom post type for portfolio posts. To edit these post types navigate to inc > custom-post-type.php.

To add a new portfolio item:
1. Click Add New Project  
2. Enter in your project title  
3. Set our Featured Image  
4. Find the Featured Projects fields, here you can create your flexible layout. To keep a consistent grid you can choose from one, two, or three column layouts and then add your content within these.
5. To set related posts, click in the Related Post select field, wait for the list of posts to populate and select any projects that you want to link to. If you do not choose any it will default to the three most recently added posts.

Single portfolio pages use the singe-portfolio.php template file. Make edits here if you need to alter the display of the portfolio pages.

The portfolio archive page uses the archive-portfolio.php template file. If you need to make changes to the Portfolio page make your edits here.  

## :framed_picture: Gallery

To edit the gallery:
1. Navigate to your page in your WordPress dashboard
2. Click on the Home Galleries accordion to open up your flexible column options
3. Choose from the one, two, or three column layouts and then add your content to each column as needed
4. Click Publish when ready to take those changes live to the site  
