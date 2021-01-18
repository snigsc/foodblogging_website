CREATE TABLE IF NOT EXISTS `blog_table` (  
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `likes` int(11) NOT NULL,
  `restaurant_name` varchar(20) NOT NULL,
  `img` blob NOT NULL, 
  `blogger_name` varchar(20) NOT NULL,
  `blog_title` varchar(20) NOT NULL,
  `blog` text(1000) NOT NULL, 
  PRIMARY KEY (`id`)  
 ) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;  