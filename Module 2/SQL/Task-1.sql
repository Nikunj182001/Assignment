CREATE DATABASE assignment;

use assignment;

create table Employee(
EM_ID int primary key,
FIRST_NAME VARCHAR(50) not null,
LAST_NAME VARCHAR(50) not null,
SALARY bigint not null,
JOINING_DATE date,
DEPARTMENT text not null);

INSERT INTO Employee VALUES 
(1,"JOHN","ABRAHAM",1000000,20130101,"BANKING"),
(2,"MICHAEL","CLERK",800000,20130101,"INSURANCE"),
(3,"ROY","THOMAS",700000,20130201,"BANKING"),
(4,"TOM","JOSE",600000,20130201,"INSURANCE"),
(5,"JERRY","PINTO",650000,20130101,"INSURANCE"),
(6,"PHILIP","MATHEW",750000,20130101,"SERVICES"),
(7,"TESTNAME1","123",650000,20130101,"SERVICES"),
(8,"TESTNAME2","LANME%",600000,20130201,"SERVICES");

SELECT * FROM Employee;
create table Incentives(
insentive_id int primary key,
EMPLOYEE_REF_ID int not null,
INCENTIVE_DATE DATE,
INCENTIVE_AMT bigint not null);

INSERT INTO Incentives values
(1,1,20130201,5000),
(2,2,20130201,3000),
(3,3,20130201,4000),
(4,1,20130101,4500),
(5,2,20130101,3500);

SELECT * FROM Incentives;
-- a)
SELECT FIRST_NAME as "Employee Name" from Employee;

-- b)
SELECT FIRST_NAME,
year(joining_date)JoinYear,
month(joining_date),
day(joining_date)
FROM Employee;

-- c)
SELECT * FROM Employee
order by FIRST_NAME asc,
salary desc;

-- d)
SELECT * FROM Employee
where FIRST_NAME like ('%o%');

-- e)
SELECT * FROM Employee
where month(JOINING_DATE)=1;

-- f)
SELECT DEPARTMENT,sum(salary) from Employee
group by DEPARTMENT
ORDER BY SUM(salary) desc;

-- g)
SELECT DEPARTMENT,max(salary) from Employee
group by DEPARTMENT
order by max(salary) asc;

-- h)
SELECT FIRST_NAME,INCENTIVE_AMT FROM Employee as e right join Incentives as i on e.EM_ID = i.insentive_id
where INCENTIVE_AMT > 3000;

-- i)
SELECT SALARY FROM Employee
order by SALARY
DESC LIMIT 1,1;

-- j)
SELECT FIRST_NAME,INCENTIVE_AMT FROM Employee as e left join Incentives as i on e.EM_ID = i.insentive_id
where INCENTIVE_AMT is not null;

-- k)
create view emp_details as
select FIRST_NAME as 'first name',
LAST_NAME as 'last name',
SALARY as 'salary'
from Employee;

select * from emp_details;

-- l)
delimiter %%
create procedure high_salary()
begin
SELECT DEPARTMENT,max(salary) from Employee
group by DEPARTMENT;
end %%

call high_salary;

-- m)
create table Emp4(
EM_ID int primary key,
FIRST_NAME VARCHAR(50) not null,
LAST_NAME VARCHAR(50) not null,
SALARY bigint not null,
JOINING_DATE date,
DEPARTMENT text not null);

create view emp4_view as
select * from Emp4;

create trigger copy_data
after insert on Employee
for each row
insert into Emp4 values(new.EM_ID,new.FIRST_NAME,new.LAST_NAME,new.SALARY,new.JOINING_DATE,new.DEPARTMENT)

insert into Employee values (9,"NIKUNJ","GAGLIYA",500000,20230101,"IT");

select * from emp4_view;

