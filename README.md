# Aerial Photography
Aerial Photography Aerial Photography is a website that presents a collection of aerial images showcasing Ireland's picturesque vistas. It is dedicated to providing aerial photography services tailored to a variety of sectors, including real estate and tourism, as well as for personal projects.

Visitors to the site are greeted with a captivating image of Ireland that beautifully captures the essence of the Emerald Isle. The website offers information about Aerial Photography and provides insights into the business and services offered. Additionally, users can explore Aerial Photography's social media profiles for more stunning visuals and get in touch with the team for specific inquiries or service requests.

This site is designed for anyone with a passion for Ireland and aerial photography. It is particularly beneficial for businesses in Ireland seeking to enhance their marketing and promotional content with unique and eye-catching imagery or videos. The primary goal of the website is to showcase the beauty of the Irish landscape from an elevated perspective, including hidden gems and offering viewers a fresh look at familiar scenes.

![Responsive Mockup](media/aerial-photography-responsive-mockup.png)

## Features

- __Navigation Bar__

  - Fully responsive and prominently positioned at the top of all site pages, the navigation bar is an essential feature of the site. It neatly presents the Aerial Photography logo on the left, with links to the three main site pages - Home, Projects, and Contact - aligned on the right.
  
  - The navigation bar maintains a consistent design across all pages, facilitating effortless navigation for users throughout the site. The logo, representing Aerial Photography, features a drone image above its abbreviation, divided by a horizontal line that evokes the horizon. This design effectively hints at the site's focus on aerial photography.
  
  - The navigation bar is distinguished by its orange background which was inspired by the Irish flag color palette, to reflect the Irish theme of the site. The black text of the logo and menu icon on mobile as well as links on desktop create a striking contrast against the orange backdrop, making the navigation bar visually prominent. This design choice enhances the aesthetic appeal and clearly separates the navigation bar from the rest of the content on the site pages.

  - The navigation bar enables visitors to easily move through the site without the need to use the back button in their browser. Its intuitive layout and eye-catching design ensure that users can navigate the site with ease and efficiency.


    ##### Mobile
    - On mobile devices, a hamburger icon serves as the menu representation. When clicked, the menu items expand below the header, highlighting the current page in bold and underlined ensuring easy navigation. The menu items are displayed against an orange background, matching with the header's color and extend across the width of the screen forming cohesive block with the header.

    - Once a page is selected, the menu items retract, allowing full access to the page content. The menu items can be accessed again at any time through the menu hamburger icon. This design optimizes the limited space available on mobile devices while preserving a clear and intuitive user experience.

    ![Navigation Bar on mobile](media/navigation-bar-mobile.png)
    
    ##### Larger screens
    - Vertical dividers between the menu items on tablets and larger screens enhance visual presentation and distinctly separate each page link.
    - The current page is alway in bold and underlined to cleate clear impression of page the site visotor is currently on.
    - On laptops and desktops, underlining appears on menu items on hover to visually deomstrate the page a site visitor is about to click on.
  
    ![Navigation Bar on desktop](media/navigation-bar.png)

- __Home Page image__

    ##### Mobile

    - On mobile devices, the homepage's image is vertically oriented, featuring a stunning view of the rocky shores of Sheep's Head Peninsula from above, presented in hight quality and resolution.
  
    - This arrangement ensures a captivating impression on mobile visitors, taking into consideration the vertical size of the screens and the importance of showcasing stunning imagery Aerial Photography is able to offer.
  
    - The overlaid text is positioned at the top of the image, displayed in black with a white shadow and a semi-transparent background to create excellent contrast with the blue sky, ensuring optimal readability and aesthetic appeal.

    - The site name is presented in the "Architects Daughter" font, characterised by its handcrafted and distinctive style, reflecting creativity and freedom. In contrast, the tagline is set in "Antic Slab," a font with a structured and robust appearance, effectively conveying a powerful and engaging message.

    ![Home Page image on mobile](media/home-page-image-mobile.png)

    ##### Larger screens
    
    - On larger screens, a breathtaking view of the rugged shores of Sheep's Head Peninsula in Ireland is presented from a different perspective in a panoramic format. It serves as the homepage's above-the-fold image with the purpose of immediately capturing the attention of site visitors. This high-quality, high-resolution image, optimized for larger screens, provides visitors with an introduction to the quality of imagery offered, showcasing the unique perspective that Aerial Photography delivers.

    - The overlay text is displayed in white, strategically positioned in the bottom left corner to ensure a striking contrast with the deep blue waters and thoughtfully placed so as not to obstruct the view of the rocky shoreline.

    ![Home Page imageon desktop](media/home-page-image.png)

   

- __Business Info__

- __Footer__

- __Projects Page__

- __Contact Page__

- __Thank you Page__

### Features Left to Implement

## Testing

### Validator Testing

- HTML

    In an attempt to adhere to web standards and accessibility, each page of the site was passed through [W3C validation testing](<https://validator.w3.org/nu/?showsource=yes&doc=https%3A%2F%2Fkatepaulauskas.github.io%2Faerial-photography%2F>). Below is a summary of the issues identified and corresponding corrections made:

    - __Home Page__
  
      - __Issue 1:__ Trailing slash on void elements has no effect and interacts badly with unquoted attribute values.
            ```
                        <input type="checkbox" id="menu-toggle" />
            ```
      - Correction: Trailing slash and extra space were removed:
                ```
                    <input type="checkbox" id="menu-toggle">
                ```

      - __Issue 2:__ Error: Stray end tag 'iconify-icon'.
                ```
                            <h3>(...)</iconify-icon></iconify-icon></h3>
                ```

      - Correction: extra closing tag for the icon at the end of Welcome heading was removed:
                ```
                    <h3>(...)</iconify-icon></h3>
                ```

      - __Issue 3:__ Duplicate ID 'services'.
  
        ```
                <div id="services">(...)
                    <ul id="services">(...)</ul>
                </div>
        ```

      - Correction: ID for unordered list was changed from
            ```
                <ul id="services">
            ```
                                            
        to 
            ```
                <ul id="services-list">
            ```
            . CSS file was changed accordingly.
                    
      - __Issue 4:__ The first occurrence of ID 'services' was here.
                ```
                    <div id="services">
                ```

      - Correction: Since in the Issue 3 the 
                    ```
                        <ul id="services ">
                    ```
            was changed to 
                    ```
                        <ul id="services-list">
                    ```
            the Issue 4 got resolved.

      - __Issue 5:__ Duplicate ID 'why-choose-us'.
  
        ```
                    <div id="why-choose-us">(...)
                        <ul id="why-choose-us">(...)</ul>
                    </div>
        ```

      - Correction: ID for unordered list was changed from 
                    ```
                        <ul id="why-choose-us">
                    ```
            to 
                    ```
                        <ul id="why-choose-us -list">
                    ```
            . CSS was changed accordingly.
            
      - __Issue 6:__ The first occurrence of ID 'why-choose-us' was here.
                    ```
                        <div id="why-choose-us">
                    ```
      - Correction: Since in the Issue 5 the
                    ```
                        <ul id="why-choose-us">
                    ```
            was changed to
                    ```
                        <ul id="why-choose-us-list">
                    ```
            the Issue 6 got resolved.
            
      - __Issue 7__ Possible misuse of 'aria-label'.
                    ```
                        <div id="kinsale-image-section" aria-label="An aerial view of Kinsale">
                    ```
                    
      - Correction: Replace the 'div' element with 'section' to ensure proper use of aria-label for accessability purpose.
                    ```
                        <section id="kinsale-image-section" aria-label="An aerial view of Kinsale">
                    ```
    
      - Post-corrections, the code for the Home page succesfully passed W3C validation.
        
        

    - __Projects Page__
  
        When passign the Projects page HTML code through W3C validator, no errors were returned.
        

    - __Contact Page__

        - __Issue:__ Section lacks heading. Consider using 'h2-h6' elements to add identifying headings to all sections, or else use a 'div' element instead for any cases where no heading is needed.
                    ```
                        <section id="get-in-touch-img" aria-label="Aerial view of Barley Cove in Ireland">
                    ```

          - Correction: Hidden heading was added to the image section:
  
            ```
                        <section id="get-in-touch-img" aria-label="Aerial view of Barley Cove in Ireland">
                        <h2 class="hidden-heading">Aerial view of Barley Cove in Ireland</h2>
            ```

      - The code for the Contact page succesfully passed W3C validation after the introduced correction.
        
                    
    - __Thank You page__
        - __Issue 1:__ The 'frameborder' attribute on the 'iframe' element is obsolete. Use CSS instead.

             ```
                        <iframe src=https://www.youtube-nocookie.com/embed/lySMfmgim5M?si=l4s54nbUCoQdlkJ5&autoplay=1&mute=1&loop=1&playlist=lySMfmgim5M&vq=hd1080&rel=0
                        (…) frameborder="0" >
                        (…)
                        </iframe>
            ```

        - Correction: The 'frameborder' attribute was removed from HTML and added in CSS
                    ```
                        #video iframe {
                        (…)
                            border: 0;
                        }
                    ```

        - __Issue 2:__ Section lacks heading. Consider using 'h2-h6' elements to add identifying headings to all sections, or else use a 'div' element instead for any cases where no heading is needed.
                    ```
                        <section id="video">
                    ```

        - Correction: Hidden heading was added to the video section:
            ```
            <section id="video">
            <h2 id=”hidden-heading”>Aerial view of Charles Fort </h2>
            (…)
            </section>
            ```

      - Post-corrections, the code for the Thank You page succesfully passed W3C validation.


- __CSS__
  
    To align with web standards and ensure accessability compliance CSS code of the site was passed through [(Jigsaw) validator](https://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fkatepaulauskas.github.io%2Faerial-photography%2F&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en). Below is a summary of the issues identified and corresponding corrections made:

  - __Issue 1:__ 64 - header - 'top' is not a 'align-items' value : 'top'
    - Correction: 'top' was replaced with 'flex-start' value to 'align-items' to the top

  - __Issue 2:__ 227 - #services-list, #why-choose-us-list - Value Error : font-family 100% is not a font-family value : 100%
    - Correction: 'font-family' was replaced with 'font-size'

  - __Issue 3:__ 438 - #hero-section - left is not a align-items value : left
    - Correction: To align items to the left 'align-items' property was replaced with 'justify content' property and 'flex-start' value was used to keep items to the left"

  - __Issue 4:__ Warning - Imported style sheets are not checked in direct input and file upload modes:
  
    ```
        @import url('https://fonts.googleapis.com/css2?family=Antic+Slab&family=Architects+Daughter&family=Duru+Sans&display=swap') ;
    ```

    - Comment: This is an external stylesheet provided by Google fonts and it is beyond our control to check it



- __Accessability__
  
### Solved Bugs

### Shortcomings
To maintain a consistent look and style for the site and ensure an exceptional user experience, the decision was made to avoid redirecting form submissions to the [external link of the Code Institute](https://formdump.codeinstitute.net). Instead, site visitors were supposed to be directed to a hidden page within the site, keeping them engaged on-site and preventing redirection to an external link. Initially, the strategy was to display form submissions by following instructions from  [W3Schools](<https://www.w3schools.com/php/php_forms.asp>), leading to the creation of two files: process-form.php and display-results.php, with the appropriate code implemented. However, it was later discovered that backend support is not available for this project. Consequently, these files were removed and replaced with a 'Thank You' page, which displays a message of gratitude, however  does not show the results of the submissions.

- process-form.php
```
<?php
session_start();

// Collect form data
$_SESSION['name'] = $_POST['name'];
$_SESSION['email'] = $_POST['email-address'];
$_SESSION['message'] = $_POST['add-your-message'];

</body>
</html>
// Redirect to the results page
header('Location: display-results.php');
exit();
?>
```

- display-results.php
```
<?php
session_start();

// Check if the session variables are set
if (isset($_SESSION['name']) && isset($_SESSION['email']) && isset($_SESSION['message'])) {
    // Display the results
    echo "<h1>Form Submission Results</h1>";
    echo "<p>Name: " . htmlspecialchars($_SESSION['name']) . "</p>";
    echo "<p>Email: " . htmlspecialchars($_SESSION['email']) . "</p>";
    echo "<p>Message: " . htmlspecialchars($_SESSION['message']) . "</p>";

    // Clear the session data
    session_unset();
    session_destroy();
} else {
    echo "<p>No form data received.</p>";
}
?>
```
## Deployment

The live link to the site can be found at the following URL: [Aerial Photography]

## Credits

### Content

### Media


