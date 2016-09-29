create table erp_order(
	order_id varchar(11) primary key, #oid
	order_customerName varchar(10) not null,#oCname
	order_contractNr varchar(10) not null,#oCnr
	order_deliveryDate date not null,#oCdate
	order_orderDate date not null,#oOdate
	order_content varchar(128) not null,#oContent
	order_state tinyint unsigned default 0,#oState
	order_other varchar(128)#oOther
)