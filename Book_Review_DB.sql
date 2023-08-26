create database Book_Review;
use Book_Review;

-- Bảng lưu tài khoản
CREATE TABLE Accounts (
    AccountID INT AUTO_INCREMENT NOT NULL,
    Email VARCHAR(50) NULL,
    Password VARCHAR(50) NULL,
    CustomerID INT NULL,
    EmployeeID INT NULL,
    Role INT NULL,
    PRIMARY KEY (AccountID)
);

-- Bảng lưu người dùng
CREATE TABLE Customers (
    CustomerID INT AUTO_INCREMENT NOT NULL,
    LastName NVARCHAR(40) NOT NULL,
    FirstName NVARCHAR(30) NULL,
    Phone NVARCHAR(11) NULL,
    BirthDate DATETIME NULL,
    Address NVARCHAR(60) NULL,
    Status BIT NULL,
    PRIMARY KEY (CustomerID)
);

-- Bảng lưu admin
CREATE TABLE Employees (
    EmployeeID INT AUTO_INCREMENT NOT NULL,
    LastName NVARCHAR(50) NOT NULL,
    FirstName NVARCHAR(10) NOT NULL,
    Phone NVARCHAR(11) NULL,
    BirthDate DATETIME NULL,
    Address NVARCHAR(60) NULL,
    PRIMARY KEY (EmployeeID)
);

-- Bảng lưu comment
CREATE TABLE Comment (
    CommentId INT AUTO_INCREMENT NOT NULL,
    Content TEXT NOT NULL,
    ProductId INT NOT NULL,
    CustomerId INT NOT NULL,
    Rating INT NULL,
    EmployeeID INT NULL,
    PRIMARY KEY (CommentId)
);

-- Bảng lưu sách
CREATE TABLE Products (
    ProductID INT AUTO_INCREMENT NOT NULL,
    ProductName TEXT NOT NULL,
    ProductDescription TEXT NOT NULL,
    CategoryID INT NULL,
    image TEXT NULL,
    EmployeeId INT NOT NULL,
    Views INT NULL,
    PRIMARY KEY (ProductID)
);

-- Bảng phân loại sách
CREATE TABLE Categories (
    CategoryID INT AUTO_INCREMENT NOT NULL,
    CategoryName NVARCHAR(50) NOT NULL,
    PRIMARY KEY (CategoryID)
);

-- Nối bảng product với bảng category
ALTER TABLE Products
ADD CONSTRAINT FK_Products_Categories
FOREIGN KEY (CategoryID)
REFERENCES Categories (CategoryID);

-- Nối bảng accounts với bảng customers
ALTER TABLE Accounts
ADD CONSTRAINT FK_Accounts_Customers
FOREIGN KEY (CustomerID)
REFERENCES Customers (CustomerID);

-- Nối bảng accounts với bảng Employees
ALTER TABLE Accounts
ADD CONSTRAINT FK_Accounts_Employees
FOREIGN KEY (EmployeeID)
REFERENCES Employees (EmployeeID);

-- Nối bảng comment với bảng customer
ALTER TABLE Comment
ADD CONSTRAINT FK_Comment_Customers
FOREIGN KEY (CustomerId)
REFERENCES Customers (CustomerID);

-- Nối bảng comment với bảng Employees
ALTER TABLE Comment
ADD CONSTRAINT FK_Comment_Employees
FOREIGN KEY (EmployeeID)
REFERENCES Employees (EmployeeID);

-- Nối bảng products với bảng employees
ALTER TABLE Products
ADD CONSTRAINT FK_Products_Employees
FOREIGN KEY (EmployeeId)
REFERENCES Employees (EmployeeID);

-- Thêm dữ liệu vào bảng Employees
INSERT INTO Employees (LastName, FirstName, Phone, BirthDate, Address)
VALUES ('Nguyen', 'Trung Hieu', '0365551401', '2002-01-14', 'Nam Dinh');

-- Thêm dữ liệu vào bảng Customers
INSERT INTO Customers (LastName, FirstName, Phone, BirthDate, Address, Status)
VALUES 	('Smith', 'John', '1234567890', '1990-01-01', '123 Main Street', 1),
		('Major', 'Lazer', '0123456789', '1990-02-01', '1234 Main Street', 1),
		('White', 'Tim', '1267890498', '1990-03-01', '12345 Main Street', 1);

-- Thêm dữ liệu vào bảng Accounts
INSERT INTO Accounts (Email, Password, CustomerID, EmployeeID, Role)
VALUES 	('Keto1412002@gmail.com', '141', NULL, 1, 2),
		('john@gmail.com', '123', 1, NULL, 1),
		('Lazer@gmail.com', '123', 2, NULL, 1),
		('a@gmail.com', '123', 3, NULL, 1);

-- Thêm dữ liệu vào bảng Categories
INSERT INTO Categories (CategoryName)
VALUES ('Fiction'),
       ('Children'),
       ('Science'),
       ('History'),
       ('Dystopian');

-- Thêm dữ liệu vào bảng Products
INSERT INTO Products (ProductName, ProductDescription, CategoryID, image, EmployeeId, Views)
VALUES	('Book Review "Georges Key to the Universe"', 'Georges Key to the Universe is a science book that genius physicist Stephen Hawking and his first daughter wrote for children. The book integrates the most basic knowledge about the universe around us into the everyday life story of a boy passionate about science George. One day by chance, he meets mysterious and interesting neighbors who work at the US Space Agency - NASA and the magical Cosmos computer that can take him to space. From here, Georges life completely changed about the new knowledge he came to know. Stephen Hawking is considered the greatest physicist alive. He is the author of two popular books on the universe A Brief History of Time and The Universe in a Chestnut Shell. Hawking suffered from a motor neuron disease from a young age that caused his body to shrink and become paralyzed, even losing the ability to speak. Lucy Hawking is the daughter of Stephen Hawking and his first wife Jane. She is a famous writer and journalist who has written for leading magazines such as Daily Mail, The Telegraph, The Guardian... Georges Keys to the Universe is the first volume in a series of childrens space books by father and son Hawking. Subsequent volumes that have been published are Alien Masked, George and the Big Bang, George and the Unbreakable Code and George and the Blue Moon. The book includes many NASA space photos and simple, easy-to-understand illustrations by artist Christophe Galfard.', 3, 'image1.jpg', 1, 100),
		('"Sapiens - A Brief History of Humankind": The Book of Decoding Human History', 'This book begins by presenting history as the next stage in the continuum from physics to chemistry, and then biological Sapiens are subjected to physical influences, chemical reactions, and natural selection. the same nature that governs all living things. But at the dawn of the 21st century, this is no longer the case: Homo Sapiens is pushing these limits. Now they are starting to break the laws of natural selection, replacing them with clever designs.', 4, 'image2.jpg', 1, 50),
		('Book Review: Harry Potter and the Sorcerers Stone', 'This book is full of fantasies and imagination like at one point, Harry Potter is asked to catch a flying golden ball while flying on his broomstick. Eventually Harry Potter stands on his broomstick and tries to reach for the ball, but he falls off the broomstick in a very tense moment. He unexpectedly throws up the golden ball winning the game for his team. Harry Potter and a sorcerer stone is a good book to spark joy and imagination for anyone, regardless of age. But I would say it is most enjoyable for elementary school students, who can very well relate to the fantasy world. So I would say that it is a must read for younger audiences, but it’s a good read in general.', 1, 'image3.jpg', 1, 175),
		('Book Review: The Great Gatsby', 'This book is a classic piece of literature that takes place in the 1920s. It explores themes of wealth, love, and the American Dream. The protagonist, Jay Gatsby, throws extravagant parties in hopes of winning back the love of his life.', 2, 'image4.jpg', 1, 19),
		('Book Review: To Kill a Mockingbird', 'Set in the 1930s, this book addresses issues of racial inequality and injustice. It follows the story of Scout Finch, a young girl growing up in a small Southern town, as she learns about compassion, empathy, and the importance of standing up for what is right.', 3, 'image5.jpg', 1, 150),
		('Book Review: Pride and Prejudice', 'A classic romance novel written by Jane Austen. It tells the story of Elizabeth Bennet and her complicated relationship with the wealthy Mr. Darcy. Filled with witty dialogue and social commentary, this book has stood the test of time.', 1, 'image6.jpg', 1, 169),
		('Book Review: The Catcher in the Rye', 'A coming-of-age novel written by J.D. Salinger. It follows the story of Holden Caulfield, a disillusioned teenager navigating his way through the complexities of life, identity, and adulthood.', 4, 'image7.jpg', 1, 149),
		('Book Review: 1984', 'A dystopian novel written by George Orwell. It portrays a totalitarian society where individuality and independent thinking are suppressed. The protagonist, Winston Smith, rebels against the oppressive regime in a fight for freedom and truth.', 5, 'image8.jpg', 1, 199),
		('Book Review: The Lord of the Rings', 'An epic fantasy trilogy written by J.R.R. Tolkien. It takes readers on a journey through Middle-earth, following the quest to destroy the powerful One Ring. Filled with rich world-building, memorable characters, and epic battles.', 3, 'image9.jpg', 1, 299),
		('Book Review: The Hobbit', 'A fantasy novel written by J.R.R. Tolkien. It serves as a prequel to The Lord of the Rings and follows the adventure of Bilbo Baggins as he embarks on a quest with a group of dwarves to reclaim their homeland from a fearsome dragon.', 1, 'image10.jpg', 1, 152),
        ('Book Review: Rot and Ruin', 'In the zombie-infested, post-apocalyptic America where Benny Imura lives, every teenager must find a job by the time they turn fifteen or get their rations cut in half. Benny doesnt want to apprentice as a zombie hunter with his boring older brother Tom, but he has no choice. He expects a tedious job whacking zoms for cash, but what he gets is a vocation that will teach him what it means to be human.',1, 'image11.jpg',1,457),
		('Book Review: Feed', 'The year was 2014. We had cured cancer. We had beaten the common cold. But in doing so we created something new, something terrible that no one could stop. The infection spread, virus blocks taking over bodies and minds with one, unstoppable command: FEED. Now, twenty years after the Rising, bloggers Georgia and Shaun Mason are on the trail of the biggest story of their lives—the dark conspiracy behind the infected. The truth will get out, even if it kills them.',1, 'image12.jpg',1,249),
		('Book Review: Water for Elephants', 'When Jacob Jankowski, recently orphaned and suddenly adrift, jumps onto a passing train, he enters a world of freaks, drifters, and misfits, a second-rate circus struggling to survive during the Great Depression, making one-night stands in town after endless town. A veterinary student who almost earned his degree, Jacob is put in charge of caring for the circus menagerie. It is there that he meets Marlena, the beautiful young star of the equestrian act, who is married to August, the charismatic but twisted animal trainer. He also meets Rosie, an elephant who seems untrainable until he discovers a way to reach her.',3, 'image13.jpg',1,249),
		('Book Review: The First Days', 'Katie is driving to work one beautiful day when a dead man jumps into her car and tries to eat her. That same morning, Jenni opens a bedroom door to find her husband devouring their toddler son. Fate puts Jenni and Katie—total strangers—together in a pickup, fleeing the suddenly zombie-filled streets of the Texas city in which they live. Before the sun has set, they have become more than just friends and allies—they are bonded as tightly as any two people who have been to war together. ',3, 'image14.jpg',1,749),
		('Book Review: Married with Zombies', 'Once upon a time they met and fell in love. But now theyre on the verge of divorce and going to couples counseling. On a routine trip to their counselor, they notice a few odd things -- the lack of cars on the highway, the missing security guard, and the fact that their counselor, Dr. Kelly, is ripping out her previous clients throat.',3, 'image15.jpg',1,69);

-- Thêm dữ liệu vào bảng Comment
INSERT INTO Comment (Content, ProductId, CustomerId, Rating, EmployeeID)
VALUES ('This book is great!', 1, 1, 5, NULL),
    ('This book is great!', 3, 2, 5, NULL),
    ('I love this product!', 3, 2, 4, NULL),
    ('Highly recommended!', 3, 3, 5, NULL),
    ('Another comment', 4, 1, 3, NULL),
    ('Great value for money', 4, 1, 4, NULL),
    ('Excellent customer service', 5, 1, 5, NULL),
    ('Not satisfied with the quality', 16, 1, 2, NULL),
    ('Average product', 17, 2, 3, NULL),
    ('Quick delivery', 17, 3, 4, NULL),
    ('Impressive features', 11, 1, 5, NULL),
    ('This book is amazing!', 11, 1, 5, NULL),
    ('Great product for the price', 11, 1, 4, NULL),
    ('Impressed by the quality', 12, 2, 4, NULL),
    ('Not what I expected', 12, 2, 2, NULL),
    ('Fast and reliable shipping', 13, 3, 5, NULL),
    ('Good value for the money', 13, 3, 4, NULL),
    ('Highly disappointed with the service', 14, 1, 1, NULL),
    ('Average performance', 14, 1, 3, NULL),
    ('Excellent product!', 15, 2, 5, NULL),
    ('Could be better', 15, 2, 3, NULL);
