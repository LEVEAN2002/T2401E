create database exam

use exam

-- create table
CREATE TABLE Teachers( 
TeacherID int IDENTITY (1,1) PRIMARY KEY NOT NULL, 
 FirstName varchar(255) NOT NULL,
 LastName varchar(255) NOT NULL,
 Subjects varchar(255) NOT NULL,);

 go 
CREATE TABLE Classes (
   ClassID int  IDENTITY (1,1) PRIMARY KEY NOT NULL,
   ClassName varchar(255) NOT NULL,
   TeacherID int NOT NULL,
   CONSTRAINT TeacherID_DK FOREIGN KEY (TeacherID) REFERENCES Teachers(TeacherID),
);
go
CREATE TABLE Students (
   StudentID int  IDENTITY (1,1) PRIMARY KEY NOT NULL,
   FirstName varchar(255) NOT NULL,
   LastName varchar(255) NOT NULL,
   ClassID int NOT NULL,
   BirthDate date NOT NULL,
   CONSTRAINT ClassID_DK FOREIGN KEY (ClassID) REFERENCES Classes(ClassID)); 

 --  insert data
 insert into Teachers (FirstName, LastName, Subjects) values 
('Nguyen Van ', 'Tuan','HTML'),
('Nguyen thi ', 'Hoa','CSS'),
('Tran Van ', 'Luong','CRWD'),
('Tran Thi ', 'Huong','JAVAS CRIPTS');

 insert into Classes (ClassName, TeacherID) values 
('T2401E', 3),
('T2403M ',2 ),
('T2309M',4 ),
('T2210A',2),
('T2301A ',1 );

 insert into Students (FirstName, LastName, ClassID,BirthDate) values 
('Le Van ', 'Dai',1,'2002-12-20'),
('Hoang Tuan ', 'Vu',4,'1996-9-10'),
('Tran Van ', 'Thien',3,'1999-6-9'),
('Nguyen van', 'An',2,'2003-4-4'),
('Le Quang ', 'Chien',1,'2002-7-23'),
('Nguyen Bao  ', 'Anh',3,'2000-8-12'),
('Nguyen Tat', 'Anh',2,'2003-6-19'),
('Hoang van ', 'Tu',5,'1999-7-25'),
('Mai Thi', 'Tuyet',4,'1998-9-3'),
('Tran Danh', 'Phuc',3,'2001-5-14');


--Write a SQL query to display a list of all students with class name and teacher in charge.

select s.StudentID ,s.FirstName,s.LastName ,c.ClassName as class, t.LastName as Teacher  from Students s
join Classes c on s.ClassID = c.ClassID
join Teachers t on c.TeacherID=t.TeacherID;

-- Write a SQL query to display students with birth dates from 2000 onwards.

select * from Students where YEAR(BirthDate)>=2000;




-- Write an SQL query to display all students with class name and teacher in charge, sorted by student name.
select s.StudentID ,s.FirstName,s.LastName ,c.ClassName as class, t.LastName as Teacher  from Students s
join Classes c on s.ClassID = c.ClassID
join Teachers t on c.TeacherID=t.TeacherID 
order by s.LastName 

-- Update the name of the student whose StudentID is 3 to "John Doe".

update  Students
set FirstName ='John' , LastName = 'Doe'
where StudentID=3;

-- Delete students whose StudentID is 7.

DELETE FROM Students
WHERE StudentID = 7;

-- Create a stored procedure named GetStudentsByClassAndSubject that takes ClassID and  Subject, and returns a list of students belonging to that class and subject.;


CREATE PROCEDURE GetStudentsByClassAndSubject 
    @ClassID INT,
    @Subject VARCHAR(50)
AS

    SELECT s.FirstName, s.LastName ,c.ClassName,t.Subjects
    FROM Students s
    INNER JOIN Classes c ON s.ClassID = c.ClassID
	INNER JOIN Teachers t ON c.TeacherID = t.TeacherID
    WHERE s.ClassID = @ClassID
    AND t.Subjects = @Subject;

exec GetStudentsByClassAndSubject 5 ,'HTML';


CREATE VIEW StudentsWithClassAndTeacher AS
SELECT s.StudentID, s.FirstName, s.LastName, c.ClassName as class, t.LastName as teacher
FROM Students s
JOIN Classes c ON s.ClassID = c.ClassID
JOIN Teachers t ON c.TeacherID = t.TeacherID;



		