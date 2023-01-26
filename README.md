# Blood-Bank-Donation-System
  
#### INFO 3305 WEB APPLICATION DEVELOPMENT
#### SECTION 1
#### SEMESTER 1, SESSION 2022/2023<br></br>

 
## Members
Ahmad NorSafwan Bin Norasidin (2010279)

Qoys Al Hanif Bin Jaafar (2016863)

Muhammad Hazim bin Ibrahim (2014309)
  
Zakarya Ahmed Babatat (1817749)<br></br>
	
	
## Table of Contents
- [Introduction](#introduction)

- [Objective](#objective)

- [Features & Functionalities](#features--functionalities)
	
- [Sitemap](#sitemap)
	
- [Entity-Relationship Diagram](#entity-relationship-diagram)
	
- [Sequence Diagram](#sequence-diagram)<br></br>

  
## Introduction

This blood bank management system application was created based on the needs of a blood bank management team. The system aims to provide information on all the process that goes into a blood donation. The system will also provide the functionality of registering online to new donors and making an appointment to avoid wasting time.<br/><br/>
Already registered donors can also see all their past donations in one view making it easy if they ever want to look through and check.<br/><br/>
On the admin/staff side, they can view the details of all the donations made and the details of all the donors in 2 separate views. They can handle the data needed to manage blood donations and donor's information. There will also be a view of all the available blood bags in the bank.<br></br>
	

## Objective

The general objectives of this web application are to develop a reliable, convenient and is easy to use for everyone who wishes to donate blood. Our goals are as stated below.

- Provide information for donors who want to inform themselves of all the process that goes into a blood donation.
  
- For donors who would prefer to register and make an appointment ahead of time to avoid wasting time.

- Provide an application that is functional for donors to track all their blood donations.
  
- Provide an application for medical staffs to view all the details of the donors and donations.
  
- To make blood donations easily accessible from one website.<br></br>

	
## Features & Functionalities

#### Homepage
- Introduction – A short brief on the blood bank’s website & also information regarding the blood donation process.
	
- Make an Appointment Button - A button in the make an appointment section that redirects to the make an appointment page.
	
- Contact Us – Blood Bank’s Information.<br/><br/>
	  
	
#### Register page
- Page for new donors to register for new accounts in the system.<br/><br/>
	
    
#### Login page
- Page for staffs and donors to log into their account.<br/><br/>


 #### Make An Appointment Page
  
- New & old donors can make an appointment to avoid registration during walk-in & waiting in line to donate their blood.<br></br>


#### Profile Pages
	
<ins>Admin</ins>
  
- Profile Icon - Dropdown (account details, donations’ table, donors’ table, blood bags’ table) 
- Donors Page - List of all the details of the donors. (ID, Name, Age, Gender, Blood Type, Number of Donations)
- Donations Page - List of all the details of the donations. (ID, Name, Age, Gender, Blood Type, Date of Donation)
- Available Blood Bags Page - List of all the stored blood bags in the blood bank. (Blood Type, Amount)<br/><br/>

<ins>Donor</ins>

- Profile Icon - Dropdown (account details, past donations) 
- Make An Appointment<br/><br/>

	

## Sitemap

The sitemap below contains information regarding the website's pages and the relationships between them.

Click [here](https://github.com/dumpacson/Blood-Bank-Donation-System/issues/6#issue-1557779422) to view the sitemap.<br/><br/>
	
	
## Entity-Relationship Diagram

An [ER Diagram](https://github.com/dumpacson/Blood-Bank-Donation-System/issues/5#issue-1557775914) is a graphical representation that depicts relationships among the entity sets stored in a database.

In our ER Diagram, we have 5 total entity sets which are, Donor, Admin, Donation, Blood Bags, and Appointment.<br></br>


Donor: represents a person who donates blood or blood products.

Admin: represents a medical professional who is involved in the blood donation process, such as by ordering or receiving blood products.

Donation: represents the donations made by a donor. Each donation may include one or more blood bags.

Blood Bags: represents the physical bags that contain blood or blood products. Each blood bag may be associated with a particular donation.

Appointment: represents the details of the appointments made by the donors.<br></br>


Entity relationships between these tables:

- One donor may make many donations.
- Each donation is made by one donor.
- Each donation includes only one blood bag.
- Each blood bag is associated with one donation.
- One donor can make one or more appointments.
- Each appointment can only be made by one donor.<br></br>


Click [here](https://github.com/dumpacson/Blood-Bank-Donation-System/issues/5#issue-1557775914) to view the Entity-Relationship Diagram.<br/><br/>
	

## Sequence Diagram

The [Sequence Diagram](https://github.com/dumpacson/Blood-Bank-Management-System/issues/4#issue-1512850541) below depicts how users interact with the Blood Donation Website. Starting with the general part of the website, The user opens the web browser and types in the URL of the website. The web browser sends a request to the server to access the website. The server receives the request and retrieves the necessary content from the database. The server sends the content back to the web browser. The web browser displays the content to the user.

For the registration and login process, the user opens the web browser and navigates to the website's register page. The web browser sends a request to the server to access the register page. The server retrieves the register page content from the database and sends it back to the web browser. The web browser displays the register page to the user. The user fills out the registration form and submits it. The web browser sends the form data to the server. The server processes the form data and stores the user's account information in the database. The server sends a confirmation message to the web browser. The web browser displays the confirmation message to the user. The user navigates to the login page. The web browser sends a request to the server to access the login page. The server retrieves the login page content from the database and sends it back to the web browser. The web browser displays the login page to the user. The user enters their login credentials and submits the form. The web browser sends the login credentials to the server. The server checks the credentials against the information stored in the database. If the credentials are valid, the server grants the user access to the website and sends a confirmation message to the web browser. The web browser displays the confirmation message to the user and allows them to access the website's content.

Next, this is how the user appointments are being processed. The user opens the web browser and navigates to the website's make an appointment page. The web browser sends a request to the server to access the make an appointment page. The server retrieves the make an appointment page content from the database and sends it back to the web browser. The web browser displays the make an appointment page to the user. The user selects the service they want to schedule and enters their contact information. The web browser sends the form data to the server. The server processes the form data and checks the availability of the selected service. If the service is available, the server stores the appointment information in the database and sends a confirmation message to the web browser. The web browser displays the confirmation message to the user. If the service is not available, the server sends an error message to the web browser. The web browser displays the error message to the user.

Lastly, the simple logout process for the user to sign out from their account. The user clicks the logout button on the website. The web browser sends a request to the server to log out of the website. The server receives the request and removes the user's session information. The server sends a confirmation message to the web browser. The web browser displays the confirmation message to the user and redirects them to the login page.<br></br>


Click [here](https://github.com/dumpacson/Blood-Bank-Management-System/issues/4#issue-1512850541) to view the Sequence Diagram.<br/><br/>



## Screens

<ins>Admin's view</ins>

- [Home](https://github.com/dumpacson/Blood-Bank-Donation-System/issues/6#issue-1557779422).
- [List of Donors](https://github.com/dumpacson/Blood-Bank-Donation-System/issues/6#issue-1557779422)
- [List of Donations](https://github.com/dumpacson/Blood-Bank-Donation-System/issues/6#issue-1557779422)
- [List of Available Blood](https://github.com/dumpacson/Blood-Bank-Donation-System/issues/6#issue-1557779422)
- <br/><br/>


<ins>Donor's view</ins>

- [Home](https://github.com/dumpacson/Blood-Bank-Donation-System/issues/6#issue-1557779422)
- [Make an Appointment](https://github.com/dumpacson/Blood-Bank-Donation-System/issues/6#issue-1557779422)
- [Account Details](https://github.com/dumpacson/Blood-Bank-Donation-System/issues/6#issue-1557779422)<br/><br/>
- 

## Challenges & Opportunities

- Figuring out how to make the different roles for the donors & staffs sides which have different views and functions.<br/><br/>



## References
	
[American Red Cross Blood Services](https://www.redcrossblood.org/)

Garett, R., Chiu, J., Zhang, L., & Young, S. D. (2016). A literature review: website design and user engagement. Online journal of communication and media technologies, 6(3), 1.
	
Anif, M., Dentha, A., & Sindung, H. W. S. (2017, October). Designing internship monitoring system web based with Laravel framework. In 2017 IEEE International Conference on Communication, Networks and Satellite (Comnetsat) (pp. 112-117). IEEE.
	
Burbeck, S. (1992). Applications programming in smalltalk-80 (tm): How to use model-view-controller (mvc). Smalltalk-80 v2, 5, 1-11.
	
Radack, S. (2009). The system development life cycle (sdlc) (No. ITL Bulletin April 2009 (Withdrawn)). National Institute of Standards and Technology.<br></br>
