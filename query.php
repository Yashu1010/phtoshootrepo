<?php

  DEFINE("COUNT_RESERVED", "SELECT COUNT(*) as count FROM reserve WHERE date = '%s' AND isConfirmed=0");
  DEFINE("USER_CHECK", "SELECT COUNT(*) as count FROM admin WHERE user='%s'");
  DEFINE("USER_PASS_CHECK", "SELECT COUNT(*) as count FROM admin WHERE user='%s' AND pass='%s'");
  DEFINE("USER_INSERT", "INSERT INTO admin(user, pass) VALUES('%s', '%s')");
  DEFINE("PHOTOGRAPHER_TABLE","SELECT id,CONCAT(name,' ',last) as name FROM photographer ");
  DEFINE("RESERVE_INSERT","INSERT INTO reserve(date,name,email,number,event,address,isConfirmed,photographer_id,album_id,video_id) VALUES('%s','%s','%s','%s','%s','%s',1,'%s','%s','%s')");
  DEFINE("RESERVE_MAX_ID","SELECT max(id) AS id FROM reserve");
  DEFINE("RESERVATION", "SELECT reserve.id, reserve.name, reserve.date, CONCAT(reserve.email,'/', reserve.number) as contact, reserve.event, reserve.address, CONCAT(photographer.name,' ',photographer.last) as pname
                        FROM reserve INNER JOIN photographer ON photographer.id = reserve.photographer_id WHERE isConfirmed = 1");
  DEFINE("UN_RESERVE", "UPDATE reserve SET isConfirmed = 1 WHERE id = %s");
  DEFINE("RESERVATION1", "SELECT reserve.id, reserve.name, reserve.date, CONCAT(reserve.email,'/', reserve.number) as contact, reserve.event, reserve.address, CONCAT(photographer.name,' ',photographer.last) as pname
                          FROM reserve INNER JOIN photographer ON photographer.id = reserve.photographer_id WHERE isConfirmed = 0");
  DEFINE("UPDATE_RESERVE", "UPDATE reserve SET isConfirmed = 0 WHERE id = %s");
  DEFINE("DELETE_RESERVE", "DELETE FROM reserve WHERE id = %s");
  DEFINE("ALBUM_TABLE","SELECT id,CONCAT(name,' ',size) as name FROM album ");
  DEFINE("VIDEO_TABLE","SELECT id,CONCAT(name) as name FROM video ");



?>
