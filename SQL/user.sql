create table erp_user(
	user_id varchar(11) primary key, #uId
    user_name varchar(10) not null, #uName
    user_password varchar(16) not null, #uPasswd
    user_group tinyint unsigned default 0, #gId
    user_Login tinyint unsigned default 0, #uLoginTimes
    foreign key(user_group) references erp_group(group_id)
)

create table erp_userInfo(
	user_id varchar(11) primary key, #uId
    user_name varchar(10) not null, #uName
    user_password varchar(16) not null, #uPasswd
    user_group tinyint unsigned default 0, #gId
    user_login tinyint unsigned default 0, #uLoginTimes
    user_position varchar(10),
    user_email varchar(20),
    user_address varchar(30),
    user_phone1 varchar(12),
    user_phone2 varchar(12),
    user_phone3 varchar(12),
    user_space1 varchar(20),
    user_space2 varchar(20),
    user_space3 varchar(20),
    user_space4 varchar(20),
    user_space5 varchar(20),
    foreign key(user_group) references erp_group(group_id)
)