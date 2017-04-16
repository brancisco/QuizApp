CREATE TABLE quiz_items (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    question TEXT,
    option1 NVARCHAR(2000),
    option2 NVARCHAR(2000),
    option3 NVARCHAR(2000),
    option4 NVARCHAR(2000)
);