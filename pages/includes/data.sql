CREATE TABLE resume (
	resume_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
	fname varchar(256) not null,
	lname varchar(256) not null,
	phone varchar(256) not null,
	email varchar(256) not null,
	url varchar(256) not null,
	jobtitle varchar(256) not null,
	com_name varchar(256) not null,
	start_job varchar(256) not null,
	end_job varchar(256) not null,
	descrip varchar(256) not null,
	school varchar(256) not null,
	degree varchar(256) not null,
	field varchar(256) not null,
	cgpa varchar(11) not null,
	enddg varchar(256) not null,
	skill1 varchar(256) not null,
	skill2 varchar(256) not null,
	skill3 varchar(256) not null,
	language varchar(256) not null
);

INSERT INTO resume (fname, lname, phone, email, url, jobtitle, com_name, start_job, end_job, descrip, school, degree, field, cgpa, enddg, skill1, skill2, skill3, language)
VALUES ('Ng', 'Shi Ya', '012-34567890', '70723@siswa.unimas.my', 'shiya.blogspot.com', 'Programming Intern', 'Ace Resource Advisory Services', '2022-01-29', '2022-05-16', 'Gathered requirements and developed project plans. Completed reviews of codes, requirements and project plans. Prepared a variety of different written communications, reports and documents to ensure smooth operations.', 'University Malaysia Sarawak', 'Bachelor of Computer Science', 'Information Systems', '3.28', '2020-09-03','Proficient in using Ms Office, Excel and Powerpoint', 'Flexible and Adaptable', 'Excellent work ethic', 'English, Mandarin and Malay'),
	('Wong', 'Sin Wen', '012-34567890', 'sinwen@gmail.com', 'sinwen.blogspot.com', 'Business Intern', 'Business Sdn Bhd', '2021-01-29', '2021-05-16', 'Delivered clerical support by handling range of routine and special requirements. Sorted and organized files, spreadsheets and reports.', 'Singapore Polytechnic', 'Diploma of Business', 'Microeconomics', '3.78', '2020-05-01','Proficient in using Ms Office, Excel and Powerpoint', 'Self-motivated Professional', 'Compassion', 'English, Mandarin and Malay'),
	('Safiratul', 'Farhana', '012-34567890', 'sf@gmail.com', 'blogspot.com', 'Programming Intern', 'Ace Resource Advisory Services', '2022-01-29', '2022-05-16', 'Gathered requirements and developed project plans. Completed reviews of codes, requirements and project plans. Prepared a variety of different written communications, reports and documents to ensure smooth operations.', 'University Malaysia Sarawak', 'Bachelor of Computer Science', 'Information Systems', '3.28', '2020-09-03','Proficient in using Ms Office, Excel and Powerpoint', 'Flexible and Adaptable', 'Excellent work ethic', 'English, Mandarin and Malay'),
	('Lalitha', 'Samiappan', '012-34567890', 'lal@gmail.com', 'blogspot.com', 'Programming Intern', 'Ace Resource Advisory Services', '2022-01-29', '2022-05-16', 'Gathered requirements and developed project plans. Completed reviews of codes, requirements and project plans. Prepared a variety of different written communications, reports and documents to ensure smooth operations.', 'University Malaysia Sarawak', 'Bachelor of Computer Science', 'Information Systems', '3.28', '2020-09-03','Proficient in using Ms Office, Excel and Powerpoint', 'Flexible and Adaptable', 'Excellent work ethic', 'English, Mandarin and Malay'),
	('Leong', 'Hong Yee', '012-34567890', 'hy@gmail.com', 'blogspot.com', 'Programming Intern', 'Ace Resource Advisory Services', '2022-01-29', '2022-05-16', 'Gathered requirements and developed project plans. Completed reviews of codes, requirements and project plans. Prepared a variety of different written communications, reports and documents to ensure smooth operations.', 'University Malaysia Sarawak', 'Bachelor of Computer Science', 'Information Systems', '3.28', '2020-09-03','Proficient in using Ms Office, Excel and Powerpoint', 'Flexible and Adaptable', 'Excellent work ethic', 'English, Mandarin and Malay'),
	('Lim', 'Xuan Yee', '012-34567890', 'xy@gmail.com', 'blogspot.com', 'Programming Intern', 'Ace Resource Advisory Services', '2022-01-29', '2022-05-16', 'Gathered requirements and developed project plans. Completed reviews of codes, requirements and project plans. Prepared a variety of different written communications, reports and documents to ensure smooth operations.', 'University Malaysia Sarawak', 'Bachelor of Computer Science', 'Information Systems', '3.28', '2020-09-03','Proficient in using Ms Office, Excel and Powerpoint', 'Flexible and Adaptable', 'Excellent work ethic', 'English, Mandarin and Malay'),
	('Choo', 'Zi Ying', '012-34567890', 'zy@gmail.com', 'blogspot.com', 'Programming Intern', 'Ace Resource Advisory Services', '2022-01-29', '2022-05-16', 'Gathered requirements and developed project plans. Completed reviews of codes, requirements and project plans. Prepared a variety of different written communications, reports and documents to ensure smooth operations.', 'University Malaysia Sarawak', 'Bachelor of Computer Science', 'Information Systems', '3.28', '2020-09-03','Proficient in using Ms Office, Excel and Powerpoint', 'Flexible and Adaptable', 'Excellent work ethic', 'English, Mandarin and Malay');
