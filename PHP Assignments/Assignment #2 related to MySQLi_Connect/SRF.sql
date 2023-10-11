-- TO CREATE DATABASE
CREATE DATABASE SRF;

-- TO USE DATABASE
USE SRF;

-- TO CREATE TABLE
CREATE TABLE SINFO (
    ID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    First_Name VARCHAR(250) NOT NULL,
    Last_Name VARCHAR(250),
    Date_Of_Birth DATE,
    Email_ID VARCHAR(250) UNIQUE,
    Mobile_Number VARCHAR(250) UNIQUE,
    Gender VARCHAR(250),
    Address VARCHAR(250),
    City VARCHAR(250),
    PIN_CODE VARCHAR(250),
    STATE VARCHAR(250),
    Country VARCHAR(250),
    Hobbies VARCHAR(250),
    Class_X_Board VARCHAR(250),
    Class_X_Percentage VARCHAR(250),
    Class_X_Year VARCHAR(250),
    Class_XII_Board VARCHAR(250),
    Class_XII_Percentage VARCHAR(250),
    Class_XII_Year VARCHAR(250),
    Graduation_Board VARCHAR(250),
    Graduation_Percentage VARCHAR(250),
    Graduation_Year VARCHAR(250),
    Masters_Board VARCHAR(250),
    Masters_Percentage VARCHAR(250),
    Masters_Year VARCHAR(250),
    CoursesAppliedFor VARCHAR(250)
);

-- TO DISPLAY THE TABLE
SELECT 
    *
FROM
    SINFO;

