use test

CREATE TABLE `student` (
  `id` int(11) NOT NULL auto_increment,
  `rollno` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  

  PRIMARY KEY  (`id`)
);
CREATE TABLE `result` (
  `id` int(11) NOT NULL auto_increment,
  `rollno` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `total_mark` int(11) NOT NULL,
  `mark_obtain` int(11) NOT NULL,
  `result` boolean() NOT NULL,
  `mark` varchar(255) NOT NULL,

  PRIMARY KEY  (`id`)
);