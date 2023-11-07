-- TO CREATE DATABASE
CREATE DATABASE SRF;

-- TO USE DATABASE
USE SRF;

-- TO CREATE TABLE
CREATE TABLE S_INFO (
    ID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    First_Name VARCHAR(250) NOT NULL,
    Last_Name VARCHAR(250),
    Birth_Day VARCHAR(2),
    Birth_Month VARCHAR(3),
    Birth_Year VARCHAR(4),
    Email_ID VARCHAR(250) UNIQUE,
    Mobile_Number VARCHAR(250) UNIQUE,
    Gender VARCHAR(250),
    Address VARCHAR(250),
    City VARCHAR(250),
    PIN_CODE VARCHAR(250),
    STATE VARCHAR(250),
    Country VARCHAR(250),
    Drawing_Hobby VARCHAR(7),
    Singing_Hobby VARCHAR(7),
    Dancing_Hobby VARCHAR(7),
    Cooking_Hobby VARCHAR(7),
    Other_Hobby VARCHAR(250),
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
    BCA VARCHAR(5),
    B_COM VARCHAR(5),
    B_SC VARCHAR(5),
    B_A VARCHAR(5)
);

-- TO DISPLAY THE TABLE
SELECT 
    *
FROM
    S_INFO;
