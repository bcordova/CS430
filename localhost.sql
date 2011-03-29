DROP DATABASE IF EXISTS mwcpscor_trinkleDB;

CREATE DATABASE IF NOT EXISTS mwcpscor_trinkleDB;
GRANT ALL PRIVILEGES ON mwcpscor_trinkleDB.* TO 'researchUser'@'localhost' identified by 'research';
--
-- 
--
USE mwcpscor_trinkleDB;



-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `faculty_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `is_approved` char(1) NOT NULL DEFAULT 'N',
  `is_admin` char(1) NOT NULL DEFAULT 'N',
  PRIMARY KEY (`faculty_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `faculty`
--
INSERT INTO `student` (`faculty_id`, `user_id`, `is_approved`, `is_admin`) VALUES
(1, 2, 'Y', 'Y')
;
-- --------------------------------------------------------

--
-- Table structure for table `picture_file`
--

CREATE TABLE IF NOT EXISTS `picture_file` (
  `picture_id` int(11) NOT NULL AUTO_INCREMENT,
  `actual_picture` varchar(30) NOT NULL,
  PRIMARY KEY (`picture_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `picture_file`
--


-- --------------------------------------------------------

--
-- Table structure for table `picture_file_group`
--

CREATE TABLE IF NOT EXISTS `picture_file_group` (
  `picture_file_group_id` int(11) NOT NULL AUTO_INCREMENT,
  `picture_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  PRIMARY KEY (`picture_file_group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `picture_file_group`
--


-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `project_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(120) NOT NULL,
  `course` varchar(40) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `summary` blob NOT NULL,
  PRIMARY KEY (`project_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `title`, `course`, `semester`, `summary`) VALUES
(1, 'Test Project Title Here', 'CPSC 391', 'Spring 2011', 'This project is all about something....blah blah blah....more summary here')
;

-- --------------------------------------------------------

--
-- Table structure for table `project_group`
--

CREATE TABLE IF NOT EXISTS `project_group` (
  `project_group_id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  PRIMARY KEY (`project_group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `project_group`
--
INSERT INTO `project_group` (`project_group_id`, `project_id`, `student_id`, `faculty_id`) VALUES
(1, 1, 1,1);


-- --------------------------------------------------------

--
-- Table structure for table `proposal`
--

CREATE TABLE IF NOT EXISTS `proposal` (
  `proposal_id` int(11) NOT NULL AUTO_INCREMENT,
  `course` varchar(10) NOT NULL,
  `credits` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `student_phone_number` int(11) NOT NULL,
  `student_major_advisor` varchar(20) NOT NULL,
  `student_major_gpa` decimal(10,0) NOT NULL,
  `student_overall_gpa` decimal(10,0) NOT NULL,
  `student_concentration` enum('Traditional Computer Science, Computer Information Systems') NOT NULL,
  `student_minor1` varchar(20) DEFAULT NULL,
  `student_minor2` varchar(20) DEFAULT NULL,
  `student_class` int(11) NOT NULL,
  `date_of_application` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `semester` varchar(10) NOT NULL,
  `topic_of_study` varchar(50) NOT NULL,
  `course_title` varchar(30) NOT NULL,
  `supervisor` varchar(20) NOT NULL,
  `project_type` enum('preliminary, honors, not honors') NOT NULL,
  `description` blob NOT NULL,
  `calendar` blob NOT NULL,
  `evaluation` blob NOT NULL,
  `preference` blob NOT NULL,
  `needs` blob NOT NULL,
  `is_approved` char(1) NOT NULL DEFAULT 'N',
  PRIMARY KEY (`proposal_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `proposal`
--


-- --------------------------------------------------------

--
-- Table structure for table `proposalApproval`
--

CREATE TABLE IF NOT EXISTS `proposalApproval` (
  `proposalApproval_id` int(11) NOT NULL AUTO_INCREMENT,
  `proposal_id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  PRIMARY KEY (`proposalApproval_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `proposalApproval`
--


-- --------------------------------------------------------

--
-- Table structure for table `source_file`
--

CREATE TABLE IF NOT EXISTS `source_file` (
  `source_id` int(11) NOT NULL AUTO_INCREMENT,
  `actual_file` varchar(30) NOT NULL,
  PRIMARY KEY (`source_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `source_file`
--


-- --------------------------------------------------------

--
-- Table structure for table `source_file_group`
--

CREATE TABLE IF NOT EXISTS `source_file_group` (
  `source_file_group_id` int(11) NOT NULL AUTO_INCREMENT,
  `source_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  PRIMARY KEY (`source_file_group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `source_file_group`
--


-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `user_id`) VALUES
(1, 1)
;


-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE IF NOT EXISTS `tag` (
  `tag_id` int(11) NOT NULL AUTO_INCREMENT,
  `actual_tag` varchar(20) NOT NULL,
  PRIMARY KEY (`tag_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`tag_id`, `actual_tag`) VALUES
(1, 'test')
;

-- --------------------------------------------------------

--
-- Table structure for table `tag_team`
--

CREATE TABLE IF NOT EXISTS `tag_team` (
  `tag_team_id` int(11) NOT NULL AUTO_INCREMENT,
  `tag_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  PRIMARY KEY (`tag_team_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tag_team`
--

INSERT INTO `tag_team` (`tag_team_id`, `tag_id`, `project_id`) VALUES
(1, 1, 1)
;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `email_token` varchar(10) NOT NULL,
  `email_authenticated` char(1) NOT NULL DEFAULT 'N',
  `is_active` char(1) NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `user`
--
INSERT INTO `user` (`username`, `password`, `first_name`, `last_name`,  `email`, `email_token`, `email_authenticated`, `is_active`) VALUES
('asams', SHA('pwd'), 'Amy', 'Sams', 'asams@mail.umw.edu', 'asdfghjkl;', 'Y', 'Y'),
('faculty', SHA('pwd'), 'FacultyFirst', 'FacultyLast', 'faculty@umw.edu', 'asdfghjkl;', 'Y', 'Y')

;



