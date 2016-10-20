create table erp_group(
    group_id tinyint unsigned default 0 primary key,#gId
    group_name varchar(10) not null,#gName
    group_order char(4) default '0000',#gOrder
    group_materials char(8) default '00000000',#gMaterials
    group_work char(9) default '000000000',#gWork
    group_quality_cost char(10) default '0000000000',#gQualityCost
    group_information char(8) default '00000000'#gInfo
)