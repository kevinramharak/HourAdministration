USE teun;
CREATE TABLE Employees
(
  ID int PRIMARY KEY AUTO_INCREMENT,
  firstname VARCHAR(20),
  prefix VARCHAR(20),
  lastname VARCHAR(20),
  birthdate DATE,
  sex ENUM('m', 'f'),
  EmployeeID int UNIQUE,
  PartTimeFactor DECIMAL(4,3),
  CHECK (PartTimeFactor < 1)
);

CREATE TABLE Users
(
  ID INT PRIMARY KEY AUTO_INCREMENT,
  EmployeeID INT,
  Password VARCHAR(70),
  Permission ENUM('0','1','2'),
  FOREIGN KEY (EmployeeID) REFERENCES Employees(EmployeeID)
);

CREATE TABLE Projects
(
  ID INT PRIMARY KEY AUTO_INCREMENT,
  Name VARCHAR(35),
  SpecialCode CHAR(8)
);

CREATE TABLE Registration_Illness
(
  ID INT PRIMARY KEY AUTO_INCREMENT,
  EmployeeID INT,
  StartDate DATETIME,
  EndDate DATETIME,
  FOREIGN KEY (EmployeeID) REFERENCES Employees(EmployeeID)
);

CREATE TABLE Registration_Hours
(
  ID INT PRIMARY KEY AUTO_INCREMENT,
  EmployeeID INT,
  Date DATE,
  Hours INT,
  ProjectID INT,
  FOREIGN KEY (EmployeeID) REFERENCES Employees(EmployeeID),
  FOREIGN KEY (ProjectID) REFERENCES Projects(ID),
  CHECK (Hours < 25)
);

CREATE TABLE Registration_Overtime
(
  ID INT PRIMARY KEY AUTO_INCREMENT,
  EmployeeID INT,
  Date DATE,
  Hours INT,
  ProjectID INT,
  FOREIGN KEY (EmployeeID) REFERENCES Employees(EmployeeID),
  FOREIGN KEY (ProjectID) REFERENCES Projects(ID)
);

CREATE TABLE Registration_Holidays
(
  ID INT PRIMARY KEY AUTO_INCREMENT,
  EmployeeID INT,
  StartDate DATETIME,
  EndDate DATETIME,
  Status ENUM('pending','approved','denied'),
  Reason VARCHAR(500),
  FOREIGN KEY (EmployeeID) REFERENCES Employees(EmployeeID)
);

CREATE TABLE TotalHolidayDays
(
  ID INT PRIMARY KEY AUTO_INCREMENT,
  EmployeeID INT,
  TotalDays INT,
  FOREIGN KEY (EmployeeID) REFERENCES Employees(EmployeeID)
);

CREATE TABLE NextPartTimeFactor
(
  ID INT PRIMARY KEY AUTO_INCREMENT,
  EmployeeID INT,
  Factor DECIMAL(4,3),
  FOREIGN KEY (EmployeeID) REFERENCES Employees(EmployeeID)
);

CREATE TABLE MinOccupationPerFunction
(
  ID INT PRIMARY KEY AUTO_INCREMENT,
  Function VARCHAR(20),
  MinOccupation INT
);

CREATE TABLE Holidays
(
  ID INT PRIMARY KEY AUTO_INCREMENT,
  Date DATE,
  Name VARCHAR(20)
);