# Players-Scouting-Management
This project has been initiated to increase the efficiency of scouting in Bangladesh's domestic football league which would further enhance the quality of future players in Bangladesh's national team as well as in world football  


# Works done

- user interface ready → bootstrapped, jsdelivr, jquery, owl carousel, popper js
- custom sidebar and navbar added in test [done]
- each user role has own dashboard [done]
- scout can create report [done]
- custom sidebar and navbar has been implemented on dashboards [done]
- players can be accessed through players page [all user can access them] [done]
- single player profiles and club profiles have been created and accessible through pages. [done]
- only clubs can create accounts [done]
- scouts will have fixed credentials created by the admin [done]
- home page + news page + about page


# Assets:
- empty, since no photos or external graphics contents used

# Controller:
- login.php → login data is posted in here and authenticated by using database information
- logout.php → All session data is removed
- scoutReportGenerator.php → after scouts submit report, in here it is posted, it is stored in the database
- signup.php → signs up user [only clubs!]
- test.php → to test if the POST and GET data's are recieved correctly

# Database:
- Has the required database

# Verifier:
- has SMTP authenticated email sender. Composer required.

# Model:
- Has the database configuration

# Modules:
- Complied CSS and JS are stored [Bootstrap styling files are here]

# Test:
- kept to create experimental frontend feautures

# Utils:
- a python massive sql generator in kept

# View:
- All pages are here

## Components
- Sidebars, Navbars, Head tags are stored here

## Styles
- all style scripts are here



# Active functionalities:

- Fully secure server side session generation has been used
- only loading times are for cdn links. [In the head tags]
- Site can provide for 10,000 users at a time, but can provide for more if load distributors are used [Apache, Nginx]

- Only clubs can signup
- Scouts can generate report
- Clubs, Coaches, Scouts can check players
- Clubs, Coaches, Scouts can check club details
- Seperate club profiles
- Seperate player profiles

- MVC pattern has been used throughly




