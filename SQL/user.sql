create table erp_user(
	user_id varchar(11) primary key, #uId
    user_name varchar(10) not null, #uName
    user_password varchar(16) not null, #uPasswd
    user_group tinyint unsigned default 0, #gId
    user_Login tinyint unsigned default 0, #uLoginTimes
    foreign key(user_group) references erp_group(group_id)
)