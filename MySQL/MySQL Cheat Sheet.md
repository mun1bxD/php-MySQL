# MySQL Cheat Sheet

## Table of Contents
- [Creating a Database](#for-creating-database)
- [Creating a Table](#creating-a-table)
- [Using a Specific Database](#using-a-specific-database)
- [Inserting Values into a Table](#inserting-values-into-a-table)
- [Constraints in MySQL](#constraints-in-mysql)
- [Inserting in Table with Constraints](#inserting-in-table-with-constraints)
- [Showing Columns](#showing-columns)
- [Showing All Tables](#showing-all-tables)
- [Showing Column Name with Different Heading](#showing-column-name-with-different-heading)
- [WHERE Clause with SELECT](#where-clause-with-select)
- [MySQL WHERE Comparison Operators](#mysql-where-comparison-operators)
- [Operators](#operators)
- [IN Operators](#in-operators)
- [BETWEEN Operator](#between-operator)
- [NOT BETWEEN Operator](#not-between-operator)
- [LIKE Operator](#like-operator)
- [Multiple Pattern](#multiple-pattern)
- [Wildcard Pattern](#wildcard-pattern)
- [Regular Expression](#regular-expression)
- [ORDER BY](#order-by)
- [DISTINCT](#distinct)
- [NULL and NOT NULL](#null-and-not-null)
- [LIMIT and OFFSET](#limit-and-offset)
- [Aggregate Functions](#aggregate-functions)
- [UPDATE](#update)
- [COMMIT & ROLLBACK](#commit--rollback)
- [PRIMARY KEY and FOREIGN KEY Constraints](#primary-key-and-foreign-key-constraints)
- [JOIN](#join)
- [GROUP BY & HAVING](#group-by--having)
- [UNION & UNION ALL](#union--union-all)
- [IF & CASE](#if--case)
- [ALTER Command](#alter-command)
- [DROP and TRUNCATE](#drop-and-truncate)
- [VIEW](#view)
- [INDEX](#index)


### For creating database

`CREATE DATABASE database_name;`

### Creating table

```
CREATE TBALE table_name(

Column1 datatype,

Column2 datatype,

Column3 datatype,

);
```

**Example:**
```
create table student(
    Name varchar(40),
    Roll_No int,
    Department varchar(100),
    Admission_Date date
    );
```

### Using a specific database

`use database_name;`

### Showing all table:

`Show tables;`

### Inserting value into table

`INSERT INTO table_name (column1,column2,column3) VALUES(VALUE1, VALUE2,VALUE3);`

**Example**
```
INSERT INTO student(Name,Roll_No,Department,Admission_Date) VALUES("Steve",2363,"Cyber Security","2024-06-10");
```

### Inserting Multiple value in a table

```
INSERT INTO table_name (column1,column2,column3)

VALUES(VALUE1, VALUE2,VALUE3),

   (VALUE1, VALUE2,VALUE3),

   (VALUE1, VALUE2,VALUE3);
```

**Example**
```
INSERT INTO student(Name,Roll_No,Department,Admission_Date)

VALUES("Steve",2363,"Cyber Security","2024-06-10"),

   ("jerry",6478,"Computer Science","2023-02-20"),

              ("broad",1896,"Software eng","2022-05-15");
```

### Constraints in MySQL

Restriction on columns

- NOT NULL

- UNIQUE

- DEFAULT

- CHECK

- FOREIGN KEY

- PRIMARY KEY

**Example**
```
CREATE table STUDENT_PERSSONAL_INFO(
city varchar(100) NOT NULL,
    gender VARCHAR(20) NOT NULL,
    age INT NOT NULL CHECK(AGE>=18),
    ph_number INT NOT NULL UNIQUE,
    father_name VARCHAR(100) DEFAULT 'Not Entered'
);
```

### Inserting in table having contraints

```
insert INTO student_perssonal_info(city,gender,age,ph_number,father_name)

value("sydney","M",19,114320132,"steve");
```

For default condition

```
insert INTO student_perssonal_info(city,gender,age,ph_number)

value("sydney","M",19,112320132);
```

If ph_number is not entered it will add a default value of not entered.

### Showing column in sql

`SELECT column1,column2,column3, FROM TABLE_NAME;`

**Example:**

`SELECT Name, Roll_No FROM student;`

### Show all table

`SELECT * FROM TABLE_NAME;`

**Example:**

`SELECT * FROM student;`

### Showing column name with different heading

`SELECT column1 AS COLUMN1, column2 as COLUMN2 FROM student;`

**Example**

`SELECT Name AS Student_Name, Roll_No AS ID FROM student;`

Or

`SELECT Name AS "Student Name", "Roll No" AS ID FROM student;`

### WHERE clause With SELECT

`SELECT Column1,Column2,Column3 FROM table_name WHERE condition;`

### MySQL Where Comparison Operators

`=,>,<,<=,>=,!= or <>,BETWEEN,LIKE,IN`

**Example:**

`SELECT Name , Roll_No FROM student WHERE Roll_NO=2363;`

To show all column for a specific condition

`SELECT * FROM student WHERE Roll_NO !=2363;`

### Operators

`AND ,OR, NOT`

**Example:**

`SELECT Name , Roll_No FROM student WHERE age>20 AND age<22;`

`SELECT Name , Roll_No FROM student WHERE age>20 OR age<22;`

### IN Operators

Search value if match with enter value in IN

**Example:**

`SELECT Name,Department FROM student WHERE Roll_No IN(2363);`

Print name and department where roll number is 2363;

`SELECT Name,Department FROM student WHERE Admission_Date IN('2024-06-10','2023-02-20');`

Print name and department where roll number is 2024-06-10 or 2023-02-20

`SELECT * FROM student WHERE Admission_Date IN('2024-06-10','2023-02-20');`

### BETWEEN Operator

**Example:**

`AGE BETWEEN 18 AND 20`

### BETWEEN WITH SELECT

`SELCECT column1,column2 FROM table_name WHERE column value1 AND value2;`

Examples:

`SELECT * FROM student WHERE Admission_Date BETWEEN "2022-01-15" AND "2024-05-10";

`SELECT Name FROM student WHERE Admission_Date BETWEEN "2022-01-15" AND "2024-05-10";`

`SELECT * FROM student WHERE Name BETWEEN "a" AND "q";`

All name that have starting Alphabet between a and q

Or we use

`SELECT * FROM student WHERE Name BETWEEN "aston" AND "qais";`

### NOT BETWEEN operator

Same syntax as between just we use NOT with BETWEEN

**Example:**

`SELECT Name FROM student WHERE Admission_Date NOT BETWEEN "2022-01-15" AND "2024-05-10";`

### LIKE operator

`Where department LIKE "d%"`

It show all department that start with d

### use LIKE & NOT LIKE with SELECT
**LIKE**
`SELECT column1,column2,column3 FROM table_name WHERE  column_name LIKE pattern;`

**Example:**

`SELECT city,age FROM student_perssonal_info WHERE ph_number LIKE '132%';`

`SELECT Name FROM student WHERE Name LIKE '%e%';`

**NOT LIKE**

**Example:**

`SELECT Name FROM student WHERE Name NOT LIKE '%e%';`

`SELECT Name FROM student WHERE Admission_Date NOT LIKE '2024%';`

### Multiple pattern

**Example:**

`SELECT Name FROM student WHERE Admission_Date NOT LIKE '2024%' AND Admission_Date LIKE '2023%';`

`SELECT Name FROM student WHERE Admission_Date NOT LIKE '2024%' OR Admission_Date LIKE '2023%';`

### Wildcard pattern

`%`=Represent zero, one, or multiple character

`_`=Represent a single character

**Example of wildcard pattern**

- LIKE `'d%'`  =start with "d"

- LIKE `'%a'`=End with "a"

- LIKE `'%ad%`= string having "ad" at any position

- LIKE `'a%d'`=start with a and end with d

- LIKE `'_a%'`=second character is a

- LIKE `'__a%'`=third character is a

- LIKE `'_ar'=a` in second and r in third position

### REGULAR EXPRESSION

`WHERE name REGEXP "khan$|poor"`

**Common Expression**

- `^`  => `'^ra'` =if string start with ra

- `$` => 'he$'` = if string end with he

- `[…] `=>`'[ew]'` =if a string contain e or w

- `^[…]` =>`'^'[fdw]'`= if a string start with f, d or w

- `[a-t]` => `'[a-h]s'`= a character between a and g with second word s

- `P1|p2|p3` => `hello | new | people` =match any of the pattern


`SELECT column1,column2 FROM table WHERE column REGEXP pattern;`

**Example**

- `SELECT Roll_No,Department FROM student WHERE name REGEXP '^st';`

- `SELECT Roll_No,Department FROM student WHERE name REGEXP '[tve]';`

- `SELECT Roll_No,Department FROM student WHERE name REGEXP '[tve]';`

- `SELECT Roll_No,Department FROM student WHERE name REGEXP 'jerry|^St|[oa]';`

### ORDER BY

Use for ordering is ascending and descending order

`SELECT column1,column2 FROM table_name ORDER BY column1,column2 ASC| DESC;`

**Example:**

- `SELECT * FROM student ORDER BY Name ASC;`

- `SELECT * FROM student ORDER BY Name DESC;`

- `SELECT * FROM student ORDER BY Admission_Date ASC;`

- `SELECT * FROM student WHERE Name='steve' ORDER BY Admission_Date ASC;`

### DISTINCT

To show all different record with in a column. It remove duplicate.

`SELECT DISTINCT column1,column2 FROM table_name;`

**Example:**

- `SELECT DISTINCT Name FROM student;`

- `SELECT DISTINCT Name,Department FROM student;`

### NULL and NOT NULL

To search for value if entry is null

`WHERE name IS NULL`

`SELECT  column1,column2  FROM table WHERE name IS NULL;`

**Example:**

- `SELECT * FROM student WHERE Roll_No IS NULL;`

- `SELECT * FROM student WHERE Roll_No IS NOT NULL;`

### LIMIT and OFFSET

It use to print  limited number of record

`SELECT column1,column2 FROM table_name WHERE condition LIMIT number;`

Offset is use as a starting number if we want to print record between two point

`SELECT column1,column2 FROM table_name WHERE condition LIMIT offset, number;`

### LIMIT

**Example:**

`SELECT * FROM student LIMIT 3;`

`SELECT * FROM student WHERE Admission_Date > '2021-01-10' LIMIT 3;`

### LIMIT with OFFSET

`SELECT * FROM student WHERE Department = 'Cyber Security' LIMIT 2,3;`

This query skip first two line.

`SELECT * FROM student WHERE Admission_Date > '2021-01-10' LIMIT 0,3;`

Check first three

### Aggregate function

- COUNT:number f entries in a column

- MIN:smallestvalue in column

- MAX:maximum value in a colunm

- SUM:to calculate sum

- AVG:for calculating average

`SELECT COUNT  column_name FROM table_name WHERE condition;`

**Example:**

Total records

`SELECT COUNT(marks) FROM student_marks;`

Or

`SELECT COUNT(*) FROM student_marks;`

To show distinct name

`SELECT COUNT(DISTINCT Name) FROM student_marks;`

To show change column name

- `SELECT COUNT(marks) AS result FROM student_marks;`

- `SELECT SUM(marks) FROM student_marks;`

- `SELECT AVG(marks) FROM student_marks;`

- `SELECT MAX(marks) FROM student_marks;`

- `SELECT MIN(marks) FROM student_marks;`

### UPDATE

`UPDATE table_name SET column1_name=value1,column2_name=value2..WHERE condition`

**Example**

`UPDATE student_marks SET marks=100 WHERE Name='Ben';`

If this give error

Then type `SET SQL_SAFE_UPDATES = 0;` to disable safe mode then run `SET SQL_SAFE_UPDATES = 1;` after query execution to enable safe mode

`UPDATE student SET Roll_No=6478,Department='Data science'  WHERE Admission_Date='2023-02-20';`

`UPDATE student SET Roll_No=5278 WHERE Admission_Date IN ('2022-06-10','2023-04-11');`

### COMMIT & ROLLBACK

Roll back basically revert all changes. If I use 3 comand and then apply roll back it will revert change.

COMMIT is barrier to stop ROLL BACK to a limit.

 Roll BACK only work on three command INSERT ,UPDATE ,DELETE

`COMMIT;`

`INSERT INTO student(Name,Roll_No) VALUES("Root",2643);`

`INSERT INTO student(Name,Roll_No) VALUES("Anderson",2643);`

`ROLLBACK;`

Save previous state add two new query and then rollback

`DELETE FROM table_name WHERE condition;`

`DELETE FROM table_name;`

**Example:**

`DELETE FROM student WHERE Name='Root' OR Name='Anderson' OR Name='Henry';`

`DELETE FROM student_personal_info;`

### PRIMARY KEY and FOREIGN KEY Constraints

Primar]y key always has a unique data.

Primary cannot be have a null value

A table can contain only one primary key contrainsts

Primary is not like unique because it cannot contain null value

**PRIMARY KEY**

**Example:**
```
CREATE TABLE BankAccount(

Account_No INT NOT NULL,

    Balance INT,

    Name VARCHAR(40) NOT NULL,

    PRIMARY KEY(Account_No)

);
```

If table already exist

`ALTER TABLE table_name ADD PRIMARY KEY(Column);`

**Example**

`ALTER TABLE bankaccount ADD PRIMARY KEY (Account_No);`

**To delete a primary key**

`ALTER TABLE table_name ADD PRIMARY KEY(Column);`

**Example**

ALTER TABLE BankAccount DROP PRIMARY KEY;

### FOREIGN KEY

It is used to link to table together

A primary key in one table is pointed by foreign key in another table

`FOREIGN KEY (COLUMN) REFRENCES SECOND_TABLE_NAME(COLUMN)`

**Table 1**
```
CREATE TABLE Customers (
    CustomerID INT PRIMARY KEY,
    Name VARCHAR(100),
    Email VARCHAR(100)
);
```

**Table 2**
```
CREATE TABLE Orders (
    OrderID INT PRIMARY KEY,
    OrderDate DATE,
    Amount DECIMAL(10, 2),
    CustomerID INT,
    FOREIGN KEY (CustomerID) REFERENCES Customers(CustomerID)
);
```

**Table1 insertion**

- `INSERT INTO Customers (CustomerID, Name, Email) VALUES (1, 'John Doe', 'john@example.com');`

- `INSERT INTO Customers (CustomerID, Name, Email) VALUES (2, 'Jane Smith', 'jane@example.com');`

**Table2 insertion**

- `INSERT INTO Orders (OrderID, OrderDate, Amount, CustomerID) VALUES (1, '2023-01-01', 100.00, 1);`

- `INSERT INTO Orders (OrderID, OrderDate, Amount, CustomerID) VALUES (2, '2023-01-02', 150.00, 2);`

- `INSERT INTO Orders (OrderID, OrderDate, Amount, CustomerID) VALUES (3, '2023-01-03', 200.00, 1);`

**If table already exist**

`ALTER TABLE child_table_name ADD FOREIGN KEY (child_column_name)`

`REFERENCES parent_table_name(parent_column_name);`

### JOIN

**INNER JOIN**

An inner join is a type of join that returns rows from multiple tables where the join condition is met. The inner join selects records that have matching values in both tables. If no matching values are found, the row is not returned.

```
SELECT columns
FROM table1
INNER JOIN table2
ON table1.common_column = table2.common_column;
```

**Example**

- `SELECT * FROM student INNER JOIN student_marks ON student.Name=student_marks.Name;`

- `SELECT student.Name FROM student INNER JOIN student_marks ON student.Name=student_marks.Name;`

- `SELECT S.Name FROM student S INNER JOIN student_marks SM ON S.Name=SM.Name;`

**LEFT JOIN**

It print all data from left table and matching data from right table

```
SELECT columns
FROM table1
LEFT JOIN table2
ON table1.common_column = table2.common_column;
Where table 1 is left
```

**Example**

`SELECT * FROM bankaccount LEFT JOIN student ON bankaccount.Name=student.Name;`

`SELECT Department FROM student LEFT JOIN bankaccount ON bankaccount.Name=student.Name;`

**RIGHT JOIN**

It print all data from left table and matching data from right table

```
SELECT columns
FROM table1
RIGHT JOIN table2
ON table1.common_column = table2.common_column;
Where table 1 is RIGHT
```

**Example**

`SELECT * FROM bankaccount RIGHT JOIN student ON bankaccount.Name=student.Name;`

`SELECT Department FROM student RIGHT JOIN bankaccount ON bankaccount.Name=student.Name;`

**CROSS JOIN**

In cross join all row of table1 make combination of all row of table2

If we have 3 rows in table 1 and 5 rows in table2 then number of combination will be 3x5=15
```
SELECT *
FROM table1
CROSS JOIN table2;
```


```
SELECT * FROM table1 CROSS JOIN table2;
JOIN
SELECT
    column1, column2, ...
FROM
    table1
INNER JOIN table2 ON table1.common_column = table2.common_column
INNER JOIN table3 ON table2.common_column = table3.common_column
WHERE
    condition;
```


### GROUP BY & HAVING:

The GROUP BY clause in MySQL is used to group rows that have the same values in specified columns into summary rows. It's often used with aggregate functions like COUNT(), SUM(), AVG(), MAX(), and MIN() to perform operations on each group of data.

| order_id | customer_id | product_id | quantity | price |
|----------|-------------|------------|----------|-------|
| 1        | 101         | 201        | 5        | 10.00 |
| 2        | 102         | 202        | 3        | 20.00 |
| 3        | 101         | 201        | 2        | 10.00 |
| 4        | 103         | 203        | 4        | 30.00 |
| 5        | 102         | 201        | 1        | 10.00 |

```
SELECT customer_id, SUM(quantity) AS total_quantity
FROM orders
GROUP BY customer_id;
```

Output

| customer_id | total_quantity |
|-------------|----------------|
| 101         | 7              |
| 102         | 4              |
| 103         | 4              |

The HAVING clause in MySQL is used to filter groups of rows after the GROUP BY clause has been applied. It is similar to the WHERE clause but is used specifically for aggregate functions.

```
SELECT product_id, SUM(quantity * price) AS total_sales
FROM orders
GROUP BY product_id
HAVING total_sales > 50;
```

| product_id | total_sales |
|------------|-------------|
| 201        | 80.00       |
| 203        | 120.00      |

### UNION & UNION ALL

UNION print only unique entries

UNION ALL print all entries includinf duplicate

```
SELECT column1,column2 FROM tabal1

UNION/UNION ALL

SELELCT column1,column2 FROM table2;
```

**Example:**
```
SELECT Account_No FROM bankaccount
UNION ALL
SELECT order_id FROM orders;
```

### IF & CASE

The IF function is used to return one value if a condition is true and another value if it is false.
```
IF(condition, true_value, false_value) AS alias_name
FROM table_name;
```

The CASE statement is more versatile than IF and allows for multiple conditions.
```
CASE expression
    WHEN value1 THEN result1
    WHEN value2 THEN result2
    ...
    ELSE resultN
END AS alias_name
FROM table_name;
```

**IF example:**

`SELECT *, IF(marks>40, "Pass","Fail") AS result FROM student_marks;`

**CASE example:**

```
SELECT Name,marks, CASE
WHEN marks>40 && marks<60 THEN "c"
        WHEN marks>=60 && marks<80 THEN "B"
        WHEN marks>80 THEN "A"
        ELSE "F"
        END AS result
FROM student_marks;
```

### ALTER COMMAND

The ALTER command in MySQL is used to modify the structure of an existing table.

**Add new column**

`ALTER TABLE table_name ADD column_name column_type;`

`ALTER TABLE student ADD marks int;`

**DROP column**

`ALTER TABLE student DROP COLUMN marks;`

**Modify column**

`ALTER TABLE table_name MODIFY column_name new_column_type;`

`ALTER TABLE student MODIFY COLUMN marks varchar(100);`

**Change a Column Name**

`ALTER TABLE table_name CHANGE old_column_name new_column_name column_type;`

`ALTER TABLE student CHANGE COLUMN marks student_marks varchar(100);`

**Rename a Table**

`ALTER TABLE old_table_name RENAME new_table_name;`

`ALTER table student_marks RENAME marks_detail;`

**Add a Primary Key**

`ALTER TABLE table_name ADD PRIMARY KEY (column_name);`

**Drop a Primary Key**

`ALTER TABLE table_name DROP PRIMARY KEY;`

### DROP and TRUNCATE

`DROP TABLE table_name;`

Completely removes the table and all its data from the database.

`DROP TABLE orders;`

`TRUNCATE  TABLE table_name;`

Removes all rows from the table but retains the table structure for future use.

`TRUNCATE TABLE student_perssonal_info;`

### VIEW 

It is used to save large query which is used multiple time in a database. We can access it with a key view name
```
CREATE VIEW view_name AS

query here
```

**Example**
```
CREATE VIEW print_table AS
SELECT student.Name
FROM student
INNER JOIN bankaccount
ON student.Name = bankaccount.Name;
To execute same query now we use
SELECT * FROM print_table;
DELETE VIEW
`DROP VIEW view_name;`
DROP VIEW print_table;
```

**Modifying a View**

To modify an existing view, you use the CREATE OR REPLACE VIEW statement.
```
CREATE OR REPLACE VIEW view_name AS
SELECT column1, column2, ...
FROM table_name
WHERE new_condition;
INDEX
```

### INDEX

It is used for fat search but using if for table having 50 to 200 or 300 entries ha no such effect.

`CREATE INDEX  index_name ON TABLE(column1,column2);`

**DELETE INDEX**

`DROP INDEX index_name ON table_name;`

**Example**

`CREATE INDEX  student_name ON student(Name);`
