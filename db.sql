-- Create a database and connect to it
-- Using a DB at heroku

# Create a table for the scriptures
CREATE TABLE Employee(
  employeeId SERIAL PRIMARY KEY NOT NULL,
  name VARCHAR(80) NOT NULL,
  startDate DATE,
  email VARCHAR(80) NOT NULL,
  phone CHAR(10) NOT NULL
);

CREATE TABLE Product(
  productId SERIAL PRIMARY KEY NOT NULL,
  name VARCHAR(80) NOT NULL,
  code VARCHAR(80),
  price DECIMAL(5,2),
  description VARCHAR(80) NOT NULL
);

CREATE TABLE Tran(
  TranId                   SERIAL PRIMARY KEY NOT NULL,
  employeeId                INT NOT NULL REFERENCES Employee(employeeId),
  customerId                INT NOT NULL REFERENCES Customer(employeeId),
);

CREATE TABLE Customer(
  customerId                  SERIAL PRIMARY KEY NOT NULL,
, name                        VARCHAR(80) NOT NULL,
, email                       VARCHAR(80) NOT NULL,
, phone                       CHAR(10) NOT NULL
);

CREATE TABLE tranDetail(
  tranDetailId              SERIAL PRIMARY KEY NOT NULL,
, tranId                     INT NOT NULL REFERENCES Tran(TranId),
, product_id                 INT NOT NULL REFERENCES Product(productId),
, Amount                     DECIMAL(6,2)
);
