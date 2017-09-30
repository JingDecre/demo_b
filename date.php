<?php
/**
 * Created by PhpStorm.
 * User: decre
 * Date: 2017/9/30
 * Time: 15:21
 */

echo date("Y/m/d") . "<br>";
echo date("Y.m.d") . "<br>";
echo date("Y-m-d") . "<br>";

echo date("D") . "<br>";
echo date("j") . "<br>";
var_dump(date("j"));
echo "<br>";

echo date("U") . "<br>";

//检查一些日期是否是有效的格利高里日期
var_dump(checkdate(12,31,-400));
echo "<br>";
var_dump(checkdate(12,12,2014));
echo "<br>";

//添加日、月、年、时、分和秒到一个日期。
$date = date_create("2013-03-15");
date_add($date, date_interval_create_from_date_string("40 days"));
echo date_format($date, "Y-m-d");
echo "<br>";

//返回一个根据指定格式进行格式化的新的 DateTime 对象
$date = date_create_from_format("j -M-Y", "16-May-2015");
echo date_format($date,"Y/m/d");
echo "<br>";

//返回一个新的 DateTime 对象，然后格式化日期：
$date=date_create("2013-03-15");
echo date_format($date,"Y/m/d");
echo "<br>";

//设置一个新的日期，然后格式化日期
$date = date_create();
date_date_set($date, 2017, 10,01);
echo date_format($date, "Y-m-d");
echo "<br>";

//返回默认时区
echo date_default_timezone_get();
echo "<br>";
//设置默认时区
date_default_timezone_set("Asia/Bangkok");
echo date_default_timezone_get();
echo "<br>";

//计算两个日期间的差值
$date1 = date_create("2015-03-18");
$date2 = date_create("2016-05-20");
$diff = date_diff($date1,$date2);
echo $diff->format("%R%a days");
echo "<br>";

//获取某年第几周第几天的ISO日期
$date = date_create();
date_isodate_set($date, 2014, 5);
echo date_format($date, "Y-m-d");
echo "<br>";

date_isodate_set($date, 2017,2,2);
echo date_format($date, "Y-m-d");
echo "<br>";


//修改时间戳
$date = date_create("2017-03-15");
date_modify($date,"+15 days");
echo date_format($date, "Y-m-d");
echo "<br>";


//返回奥斯陆（在欧洲挪威）冬天和夏天相对于 UTC 的以秒计的时区偏移量
$winter = date_create("2015-12-31", timezone_open("Europe/Oslo"));
$summer = date_create("2015-06-30", timezone_open("Europe/Oslo"));
echo date_offset_get($winter) . " seconds.<br>";
echo date_offset_get($summer) . " seconds.<br>";
