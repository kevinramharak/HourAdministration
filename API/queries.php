<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 23-3-2016
 * Time: 20:04
 */

/*
  Vakantie aanvragen

  $SQL = "INSERT INTO registration_holiday VALUES (null, :employeeid, :startdate, :enddate, :status, null)";

  :employeeid = INT
  :startdate  = DATE        example: '2015-05-23'
  :enddate    = DATE        example: '2015-06-30'
  :status     = ENUM ('0', '1', '2')
 */

/*
  Nieuwe medewerker toevoegen (2 queries !!!!)
1.
  $SQL = "INSERT INTO employees VALUES (null, :firstname, :prefix, :lastname, :birthdate, :sex, :employeeid, :parttimefactor)";

  :firstname  = VARCHAR(20)
  :prefix     = VARCHAR(20)
  :lastname   = VARCHAR(20)
  :birthdate  = DATE            example: '1995-09-11'
  :sex        = ENUM ('m', 'f') example: 0 = 'm' / 1 = 'f'
  :employeeid = INT
  :parttimefactor = DECIMAL(4,3) example: 0.300

2.
  $SQL = "INSERT INTO users VALUES (null, :employeeid, :password, :permission)"

  :employeeid = INT
  :password   = VARCHAR(70)           # is hashed
  :permission = ENUM ('0', '1', '2')
 */