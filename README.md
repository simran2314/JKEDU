<a name="readme-top"></a>


<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://github.com/simran2314/JKEDU">
    <img src="Images/logo.png" alt="Logo" width="80" height="80">
  </a>
  <h3 align="center">JKEDU</h3>
  <p align="center">
    Personalized suggestions to students for higher education institutions in a particular region
    <br />
    <br />
    <br />
    <a href="https://github.com/simran2314/JKEDU"><strong>View Demo » </strong></a>
    ||
    <a href="https://github.com/simran2314/JKEDU"><strong>Explore the docs » </strong></a>
  </p>
</div>



<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#what-it-does">What it does</a></li>
        <li><a href="#what-it's-useful">Why it's useful</a></li>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#roadmap">Roadmap</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#acknowledgments">Acknowledgments</a></li>
  </ol>
</details>


<!-- ABOUT THE PROJECT -->
### About The Project
<div align="center">
  <a href="https://github.com/simran2314/JKEDU">
    <img src="Images/logo.png" alt="Logo" width="150" height="150">
  </a>
</div>
<br /><br />
<P>Recommender Systems are widely deployed and used across OTT platforms such as Netflix, E-Commerce sites such as Amazon, video sharing/streaming applications such as YouTube, social networks such as Facebook, Instagram and practically across all digital applications.</P>

<P> These systems rely on analyzing online user behavior and preferences, ratings provided by their friends and extended social network to provide recommendations for movies, shopping items, video/music streams related to user interests etc. These have helped both consumers and businesses, as consumers get relevant content and businesses are able to achieve targeted marketing resulting in higher sales and consumer retention. </P>

<strong>JKEDU is a recommender system which provides specific recommendations to students pertaining to higher education institutions in a specific region. JKEDU encompasses Robotic Process Automation (RPA) and NLP to retrieve, analyze and compute rating scores for different education institutions in the region of interest.</strong>

<p align="right">(<a href="#readme-top">back to top</a>)</p>

### Built With

The technologies ,tools and the framework used to develop this project are listed below .
<br>
 <h4>Technologies and tools </h4>

* [![HTML][HTML]][HTML-url]
* [![CSS][CSS]][CSS-url]
* [![JavaScript][JavaScript]][JavaScript-url]
* [![PHP][PHP]][PHP-url]
* [![Bootstrap][Bootstrap]][Bootstrap-url]
* [![UI Robot][UI Robot]][UI Robot-url]
* [![IBM Tone Analyzer][IBM Tone Analyzer]][IBM Tone Analyzer-url]
<p align="right">(<a href="#readme-top">back to top</a>)</p>


<!-- GETTING STARTED -->
## Getting Started

<P><STRONG>JKEDU</STRONG> is a recommender system designed to help students make informed decisions about their higher education options. It leverages the power of Robotic Process Automation (RPA) and Natural Language Processing (NLP) to gather, analyze, and score educational institutions within a specific region. Unlike traditional recommender systems that focus on broader interests, JKEDU personalizes recommendations based on individual student profiles and preferences.</P>
<br>


<!-- WHAT IT DOES -->
### What it does
<br>

<ul>
  <li><b>Gathers and analyzes comprehensive data:</b> Utilizing Robotic Process Automation (RPA), JKEDU automatically collects information from various sources, including university websites, student reviews, and alumni outcomes.UiPath studio of Uipath software for  RPA tools, are used to create automation scripts or bots that can navigate through websites or access APIs to retrieve reviews. RPA tools often have features for web scraping and data extraction that can be configured to interact with websites in a way similar to how a human user would.RPA bots navigate through the web pages of different sources, locate review sections, and extract relevant information such as text, ratings, and dates. Web scraping tools within the RPA framework help in efficiently extracting data from HTML pages.RPA bots organize and store the collected review data in a structured format, such as a database or a spreadsheet. This allows for easy retrieval and analysis of the reviews.
</li>
  <br>
  
  <li>
    IBM Tone Analyzer is a tool provided by IBM Watson which is used for natural language processing (NLP) to analyze and identify emotional tones in text.
    First,we need to set up an IBM Cloud account and create an instance of the Tone Analyzer service. we obtain API credentials (API key and endpoint) that is use to interact with the service.Programming language like Python is uesd to send the extracted reviews to the Tone Analyzer API and receive the analysis results.
 Extract sentiment scores and emotional tones from the response received from the Tone Analyzer. The sentiment score indicate the overall sentiment of the review (positive, negative, or neutral), while emotional tones provide insights into specific emotions expressed.
  Aggregating individual ratings to calculate an overall rating for an educational institute from multiple reviews can be done using  methods like sentiment analysis-based weighting.Utilize sentiment analysis scores obtained from NLP tools (e.g., IBM Tone Analyzer) to assign weights to individual ratings. Reviews with more positive sentiment given higher weights.
  </li>
  <br>
  
 <li> <b>Scores institutions based on reviews:</b> Using advanced Natural Language Processing (NLP), JKEDU processes reviews with the use of NLTK (Natural Language Toolkit), an open source collection of libraries, such as sentence parsing, word segmentation, stemming and lemmatization (methods of trimming words down to their roots), and tokenization (for breaking phrases, sentences, paragraphs and passages into tokens that help the computer better understand the text). It also includes libraries for implementing capabilities such as semantic reasoning, the ability to reach logical conclusions based on facts extracted from text.
Then generates personalized scorecards for each institution within your chosen region.</li> 
</ul>
<br>

<!-- WHY IT'S USEFUL -->
### Why it's Useful
<ul><br>
  <li><strong>Save time and effort:</strong> Instead of spending hours researching countless options, JKEDU do the heavy lifting. Get targeted recommendations quickly and efficiently.</li>
  <br>
<li><strong>Make informed decisions:</strong> Gain valuable insights of each institution's strengths and weaknesses, ensuring your choice aligns with your academic aspirations and personal preferences.</li>
  <br>
<li><strong>Increase your chances of success:</strong> Find the best-fit institution for your unique needs, setting you on the path to academic achievement and a fulfilling career.</li>
</ul>
<br>

<!-- PREREQUISITES -->
### Prerequisites
<br>
<ul>
  <li>Hardware</li><br>
  <ul>
    <li>Server: XAMPP server need to be installed to run this project on server. Which is used to run on local host server.</li>
    <li>Processor: Multi-core processor with sufficient processing power to handle data retrieval, analysis, and user requests.</li>
    <li>RAM: Adequate RAM to support the chosen software and database, considering peak usage and data volume.</li>
    <li>Storage: Enough storage space to accommodate the data repository, application files, and user profiles.</li>
  </ul><br>
  <li>Software:</li>
  <br>
  <ul>
    <li><strong>Operating System</strong></li>
     <p>Linux or Windows Server depending on chosen software and infrastructure.</p
     <p>Client Devices: No specific software needed beyond a web browser and an IDE.</p>
    <li><strong>Programming Language</strong></li>
    <p>HTML Hyper Text Markup Language which is used for designing the frontend (user interface) and CSS (Cascading stylesheet) is used for styling the user interface 
    and javaScript , a dynamic programming language is uesd to interact with website dynamicaly.  </p>
    <p>PHP stands for Hypertext Preprocessor, though the original meaning, "Personal Home Page", is no longer commonly used. It's used for server-side scripting. PHP 
    code executes on the web server before the response is sent back to the user. This makes it ideal for creating dynamic and interactive web experiences. </p>
    <li><strong>Libraries and Frameworks</strong></li>
    <p>Robotic Process Automation (RPA) tools like UiPath, Blue Prism, or Automation Anywhere.</p>
    <li><strong>Database</strong></li>
    <p>Relational database (e.g., MySQL ) for structured data like college information, ratings, etc.</p>
  </ul>  
</ul>
<br>
<p align="right">(<a href="#readme-top">back to top</a>)</p>


<!-- INSTALLATION -->
### Installation
1. **Install UiPath Studio for RPA tools.**
   - Download UiPath Studio from the official website.
   - Follow the installation instructions provided on the website.

2. **Install XAMPP control panel to run the software on a local server.**
   - Download XAMPP from the official website.
   - Follow the installation instructions provided on the website.
   - Start the Apache and MySQL modules in the XAMPP control panel.

3. **Set up an IDE that supports HTML, CSS, and PHP.**
   - Choose an IDE such as Visual Studio Code, Sublime Text, or PhpStorm.
   - Download and install the chosen IDE from their respective websites.
   - Configure the IDE according to your preferences.

4. **Create a MySQL database using the provided SQL file in the folder.**
   - Open phpMyAdmin by accessing http://localhost/phpmyadmin in your web browser.
   - Log in with your MySQL credentials (default is usually root with no password).
   - Create a new database with an appropriate name.
   - Import the provided SQL file into the newly created database.

5. **Set up the login and logout functionality in the database.**
   - Modify the database connection details in your PHP files to match your MySQL setup.
   - Implement login and logout functionality using PHP and MySQL.
   - Test the login and logout functionality to ensure it works as expected.

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- USAGE EXAMPLES -->
## Usage
To interact with this project user need to setup their system accourding to the requirements needed by JKEDU.  
1. clone this project to their system.
2. Setup XAMPP control plnel, Apache and MYSql modeul of Apache server must be started.
3. Open any web browser and provide the url to run on local host.
   type:- localhost/foldername.
4. It Will run the home page of our project. Where user need to make registration as a user.
5. After registration the detals of user get saved in the database. With that username and password user is going to login to the website.
6. After login , user can visit the college , universisty and educational institute section on this page.
7. There are list of data which is fetched from various sources, websites by RPA bots and processed by NLP and IBM tone analyzer to get high rated college and universites, for users .
8. User can choose any college and university and can see the rating for them which is based on reviews of students and others.
9. User can logout at the end.   


<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- CONTRIBUTING -->
## Contributing
Contributions are welcome! Fork the repo, create a feature branch, commit changes, and open a pull request. Don't forget to give the project a star!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request
<p align="right">(<a href="#readme-top">back to top</a>)</p>


<!-- LICENSE -->
## License
Distributed under the MIT License. See `LICENSE.txt` for more information.
<p align="right">(<a href="#readme-top">back to top</a>)</p>


<!-- CONTACT -->
## Contact
Your Name - simranshan3008@gmail.com

Project Link: [https://github.com/simran2314/JKEDU](https://github.com/simran2314/JKEDU)
<p align="right">(<a href="#readme-top">back to top</a>)</p>


<!-- ACKNOWLEDGMENTS -->

## Acknowledgments
<p>
The accomplishment of this Major Project report on “JKEDU” benefits of the guidance, moral support and encouragement bestowed on me throughout my work period. For this, I wish to express my sincere gratitude and appreciation to all those who gave me the possibility to complete this report. I would like to acknowledge with much appreciation, the crucial role of the faculty of MCA department of MIET, Jammu, who gave me permission to use all the resources and material required to complete my report. I cannot express enough thanks to Prof. Ankur Gupta for their continued support and encouragement to work on my own and discover new things in this field. Lastly, I must offer my sincere appreciation for the receipt of affectionate care and opportunities to Model Institute of Engineering and Technology (MIET) for providing me with such a wonderful work environment. My accomplishment of this report could not have been possible without the support of my classmates and my family, who provided me with love, support and encouragement when times got rough.
</p>


<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->


[HTML]: https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white
[HTML-url]: https://developer.mozilla.org/en-US/docs/Web/HTML

[CSS]: https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white
[CSS-url]: https://developer.mozilla.org/en-US/docs/Web/CSS

[JavaScript]: https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black
[JavaScript-url]: https://developer.mozilla.org/en-US/docs/Web/JavaScript

[PHP]: https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white
[PHP-url]: https://www.php.net/

[Bootstrap]: https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white
[Bootstrap-url]: https://getbootstrap.com

[UI Robot]: https://img.shields.io/badge/UI%20Robot-00BFFF?style=for-the-badge&logo=robot-framework&logoColor=white
[UI Robot-url]: https://github.com/robotframework/robotframework

[IBM Tone Analyzer]: https://img.shields.io/badge/IBM%20Tone%20Analyzer-438EFF?style=for-the-badge&logo=IBM&logoColor=white
[IBM Tone Analyzer-url]: https://www.ibm.com/cloud/watson-tone-analyzer

[Laravel-url]: https://laravel.com
[Bootstrap.com]: https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white
[Bootstrap-url]: https://getbootstrap.com
[JQuery.com]: https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white
[JQuery-url]: https://jquery.com 
