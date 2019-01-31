CREATE TABLE `appstat_day_prototype_201305` (
`day_key` date NOT NULL DEFAULT '1900-01-01',
`appkey` varchar(20)NOT NULL DEFAULT '',
`user_total` bigint(20) NOT NULL DEFAULT '0',
`user_activity` bigint(20) NOT NULL DEFAULT '0',
`times_total` bigint(20) NOT NULL DEFAULT '0',
`times_activity` bigint(20) NOT NULL DEFAULT '0',
`incr_login_daily` bigint(20) NOT NULL DEFAULT '0',
`unbind_total` bigint(20) NOT NULL DEFAULT '0',
`unbind_activitys`bigint(20) NOT NULL DEFAULT '0',
PRIMARY KEY (`appkey`,`day_key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
explain SELECT * from appstat_day_prototype_201305 where appkey = 10 and day_key between '2013-05-23' and '2013-05-30';
explain SELECT * from appstat_day_prototype_201305 where appkey = 'xxxxx' and day_key between'2013-05-23' and '2013-05-30';
CREATE TABLE ff(
price FLOAT
);