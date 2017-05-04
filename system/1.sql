create table biao(
	id int(5) primary key not null,
	ip varchar(15) not null,
	useragent varchar(200),
	ans1 int(1),
	ans2 int(1),
	ans3 int(1),
	ans4 int(1),
	ans5 int(1),
	ans6 int(1),
	ans7 int(1),
	ans8 int(1),
	ans9 int(1),
	ans10 int(1),
	ans11 int(1),
	ans12 int(1),
	ans13 varchar(2048)
);

create table setting(
	lastid int(5);
)

insert into setting set lastid == 0;
