create table erp_order(
	id varchar(11) primary key,
    customerName varchar(10) not null,
	contractNr varchar(10) not null,
    deliveryDate date not null,
    orderDate date not null,
    content varchar(128) not null,
    state tinyint unsigned default 0,
    other varchar(128)
)