CREATE TABLE users (
  id int(11) not null PRIMARY KEY AUTO_INCREMENT,
  user_first varchar(256) not null,
  user_last varchar(256) not null,
  user_email varchar(256) not null,
  user_uid varchar(256) not null,
  user_password varchar(256) not null
);

CREATE TABLE profileimg (
  id int(11) not null PRIMARY KEY AUTO_INCREMENT,
  userid int(11) not null,
  status int(11) not null,
);
