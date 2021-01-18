CREATE TABLE IF NOT EXISTS `cart_table` (  
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(20) NOT NULL,
  `restaurant_name` varchar(20) NOT NULL,
 
  `price` int(11) NOT NULL, 
  PRIMARY KEY (`id`)  
 ) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ; 