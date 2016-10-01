create table erp_user(
	user_id varchar(11) primary key,
    user_name varchar(10) not null,
    user_password varchar(16) not null,
    user_level tinyint unsigned default 0
)