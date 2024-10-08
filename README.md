# PHP-MySQL Repository

Welcome to the **PHP-MySQL** repository! This repository contains essential resources and projects for working with PHP and MySQL, including a comprehensive MySQL cheat sheet and a CRUD application project.

## Table of Contents

1. [Introduction](#introduction)
2. [Repository Structure](#repository-structure)
3. [MySQL Cheat Sheet](#mysql-cheat-sheet)
4. [CRUD Project](#crud-project)
5. [Basic PHP Examples](#basic-php-examples)
6. [Installation and Setup](#installation-and-setup)

## Introduction

This repository is a collection of essential PHP and MySQL resources designed to help you learn and apply CRUD operations, basic PHP constructs, and MySQL commands. Whether you're a beginner or an experienced developer, you'll find useful examples and projects to enhance your understanding of PHP and MySQL.

## Repository Structure

The repository is organized as follows:

```php-MySQL/
│
├── CRUD_Project/                      
│   ├── css/                           
│   │   ├── AddPageStyle.css           
│   │   ├── DeletePageStyle.css       
│   │   ├── Style.css                  
│   │   ├── UpdatePageStyle.css        
│   │
│   ├── AddPage.php                    
│   ├── AddRecord.php                  
│   ├── DeleteData.php                 
│   ├── DeletePage.php                
│   ├── MainPage.php                   
│   ├── UpdateData.php                 
│   ├── UpdatePage.php                
│
├── MySQL/                             
│   ├── DataTypes_and_Functions.md    
│   ├── MySQL_Cheat_Sheet.md          
│
├── NormalPHPFile.php                  
│
└── README.md                          
```

## MySQL Cheat Sheet

The `mysql/` folder contains a detailed cheat sheet covering various MySQL commands, syntax, and examples. It includes:

- **Creating Databases and Tables**
- **Inserting, Updating, and Deleting Records**
- **Querying Data with SELECT**
- **Using Constraints**
- **Joins, Group By, and Aggregate Functions**

You can refer to the `mysql_cheat_sheet.md` file for quick access to MySQL commands and best practices.

## CRUD Project

The `CRUD_Project/` folder includes a full-fledged PHP CRUD (Create, Read, Update, Delete) application. This project demonstrates how to:

- **Create**: Insert new records into the MySQL database.
- **Read**: Retrieve and display records from the database.
- **Update**: Modify existing records.
- **Delete**: Remove records from the database.

### Features

- **User-friendly interface** with basic styling.
- **PHP and MySQL integration** for managing data.
- **Dynamic pages** for adding, updating, and deleting records.

## Basic PHP Examples

In addition to the CRUD project, this repository includes examples of basic PHP constructs such as:

- **If-else statements**
- **Loops**
- **Forms handling**
- **Database connections**

These examples are scattered throughout the CRUD project and the accompanying files.

## Installation and Setup

To run the projects in this repository locally:

1. **Clone the repository**:
   ```bash
   git clone https://github.com/mun1bxD/php-MySQL.git
   ```
2. **Set up the MySQL database**:
   - Import the SQL file provided in the project to create the necessary tables.
   - Update the database credentials in the PHP scripts if needed.

3. **Run the project** on your local server (e.g., XAMPP, WAMP, or LAMP).

4. **Access the application**:
   - Open your web browser and navigate to the `MainPage.php` to start interacting with the CRUD application.
