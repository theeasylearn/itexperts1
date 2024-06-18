CREATE TABLE course (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    fees DECIMAL(10, 2) NOT NULL,
    duration VARCHAR(50),
    description TEXT
);

CREATE TABLE batch (
    id INT AUTO_INCREMENT PRIMARY KEY,
    courseid INT NOT NULL,
    startdate DATE NOT NULL,
    enddate DATE NOT NULL,
    classtime varchar(32)
);

CREATE TABLE subject (
    id INT AUTO_INCREMENT PRIMARY KEY,
    courseid INT NOT NULL,
    title VARCHAR(255) NOT NULL,
    rate DECIMAL(10, 2) NOT NULL
);

CREATE TABLE teacher (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    mobile VARCHAR(20),
    email VARCHAR(255),
    gender bool,
    qualification VARCHAR(255),
    experience INT,
    photo varchar(255)
);

CREATE TABLE lecture (
    id INT AUTO_INCREMENT PRIMARY KEY,
    teacherid INT NOT NULL,
    subjectid INT NOT NULL,
    batchid INT NOT NULL,
    duration INT NOT NULL,
    amount DECIMAL(10, 2) NOT NULL,
    lecturedate DATE NOT NULL,
    payoutid INT
);

CREATE TABLE payout (
    id INT AUTO_INCREMENT PRIMARY KEY,
    teacherid INT NOT NULL,
    orderdate DATE NOT NULL,
    remarks TEXT,
    startdate DATE NOT NULL,
    enddate DATE NOT NULL
    );
