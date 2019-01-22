crm-scibrix
===========
This is built from scratch CRM system based on Symfony 3.4.20  
Can be tested live [Here](http://u185019611.hostingerapp.com/crm/)  

It is meant to be deployed under www.domainname.com/crm. 

There is no public part. Visitors are asked to log in or registry.  
   
This basic CRM is divided into Companies, Customers, Suppliers and Products. The features of those have   
different relations as listed below.   
Users are editors and admins:
   -  Editors can create and update all assets and
update their profile.   
   - Admins can further delete all assets. They see all a list of all users and can edit their profiles.


#### Features:  
* ##### Company Details:
    -   Name
    -   Segment
    -   Address
    -   Country	
    -    Phone	
    -    Company Email (emailType)	
    -    already contacted (checkbox) 
    -    Interested In	
    -    Amount	 (integer)
    -    Price	(MoneyType)
    -    has bought (checkbox)
    -    Description (text)

* ##### Customer Details:
    -   Name
    -   Surname
    -   Email (emailType)	
    -   Country	
    -    Phone (business)
    -    Phone (private)
    -    Company (ManyToOne relation to Company Name)
    -    Department 	
    -    Address
    -    Interested in
    -    Note
    
* ##### Supplier 
    - Id	
    - Name	
    - Segment	
    - Email	(emailType)	
    - Phone	
    - Address	
    - Description	
    - Company (ManyToOne relation to Company Name)
    
    
* ##### Product
    - Id	
    - Segment	
    - Name	
    - Production Price	
    - Sell Price (MoneyType)
    - Sold to	
    - Count	
    - Note	
    
* ##### User Profile (editor or admin)
	
    - Username
    - Email (emailType)	
    - First Name
    - Family Name
    - Phone Business
    - Phone Private
    - Address
    - Note 