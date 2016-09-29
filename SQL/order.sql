create table erp_order(
	order_id varchar(11) primary key, #oid
	order_customer_name varchar(10) not null,#oCusName
	order_contract_nr varchar(10) not null,#oCnr
	order_delivery_date date not null,#oDelDate
	order_order_date date not null,#oOrdDate
	order_content varchar(128) not null,#oContent
	order_state tinyint unsigned default 0,#oState
	order_other varchar(128)#oOther
)