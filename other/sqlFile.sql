

INSERT INTO registration (refNo,  name, gender, dob, faculty  ,level ,mobile, email, status,approval, blackList)
VALUES ('sc-9800', 'U.C.Jeewani', 'female', '1995-06-16', 'science', 'level 3' , 0710719706, 'ucjdmmk@gmail.com', 0, 0,0);

INSERT INTO registration (refNo,  name, gender, dob, faculty  ,level ,mobile, email, status,approval, blackList)
VALUES ('sc-9801', 'A.B.Perere', 'male', '1995-02-01', 'science', 'level 3' , 0700001111, 'ABPerere@gmail.com', 0 ,0,0);

INSERT INTO registration (refNo,  name, gender, dob, faculty  ,level ,mobile, email, status,approval, blackList)
VALUES ('sc-9802', 'D.C.Atapattu', 'female', '1995-05-01', 'science', 'level 3' , 0700002222, 'DCAtapattu@gmail.com', 0, 0,0);

INSERT INTO registration (refNo,  name, gender, dob, faculty  ,level ,mobile, email, status,approval, blackList)
VALUES ('sc-9803', 'P.C.Karunarathna', 'male', '1995-11-26', 'science', 'level 3' , 0700003333, 'PCKarunarathna@gmail.com', 0, 0,0);

INSERT INTO registration (refNo,  name, gender, dob, faculty  ,level ,mobile, email, status,approval, blackList)
VALUES ('sc-9804', 'M.C.Silva', 'male', '1995-10-16', 'science', 'level 3' , 0700004444, 'MCSilva@gmail.com', 0 ,0,0);

INSERT INTO registration (refNo,  name, gender, dob, faculty  ,level ,mobile, email, status,approval, blackList)
VALUES ('sc-9805', 'M.N.Rodrigo', 'female', '1995-06-16', 'science', 'level 3' , 0700005555, 'MNRodrigo@gmail.com', 0 ,0,0);

INSERT INTO registration (refNo,  name, gender, dob, faculty  ,level ,mobile, email, status,approval, blackList)
VALUES ('sc-9818', 'G.R.T.Fonseka', 'female', '1995-07-07', 'science', 'level 3' , 0710181608, '95thakshilafonseka@gmail.com', 0, 0,0);





INSERT INTO coach (refNo,  name, gender, dob, mobile, email, status, blackList)
VALUES ('emp-1003', 'N.M.Karunarathna', 'female', '1995-01-07' , 0710181608, 'nadeeKarunarathna@gmail.com', 0, 0);

INSERT INTO coach (refNo,  name, gender, dob, mobile, email, status, blackList)
VALUES ('emp-1004', 'M.P.C.M.Silva', 'female', '1995-07-14' , 0710181608, 'chaliniSilva@gmail.com', 0, 0);







INSERT INTO user (refNo,  name, password, type)
VALUES ('emp-1001', 'S.A.Mendis', '12345', 'admin');

INSERT INTO user (refNo,  name, password, type)
VALUES ('emp-1002', 'G.N.D.Fonseka', '12345', 'admin');

INSERT INTO user (refNo,  name, password, type)
VALUES ('emp-1003', 'N.M.Karunarathna', '12345', 'coach');

INSERT INTO user (refNo,  name, password, type)
VALUES ('emp-1004', 'M.P.C.M.Silva', '12345', 'coach');





INSERT INTO faculty (refNo,  name)
VALUES ('fc-01', 'science');

INSERT INTO faculty (refNo,  name)
VALUES ('fc-02', 'engineering');

INSERT INTO faculty (refNo,  name)
VALUES ('fc-03', 'agriculture');

INSERT INTO faculty (refNo,  name)
VALUES ('fc-04', 'medicine');

INSERT INTO faculty (refNo,  name)
VALUES ('fc-05', 'management & finance');

INSERT INTO faculty (refNo,  name)
VALUES ('fc-06', 'fisheries and marine sciences');

INSERT INTO faculty (refNo,  name)
VALUES ('fc-07', ' humanities and social sciences ');

INSERT INTO faculty (refNo,  name)
VALUES ('fc-09', 'technology ');




insert into sport (refNo,name) VALUES ('sp-000001','badminton');
insert into sport (refNo,name) VALUES ('sp-000002','carrom');
insert into sport (refNo,name) VALUES ('sp-000003','teniss');
insert into sport (refNo,name) VALUES ('sp-000004','cricket');



INSERT INTO sport_allocation (refNo,  venderRefNo, sportRefNo, sport)
VALUES ('SA-000001', 'emp-1003', 'sp-000001', 'badminton');

INSERT INTO sport_allocation (refNo,  venderRefNo, sportRefNo, sport)
VALUES ('SA-000002', 'emp-1003', 'sp-000002', 'carrom');

INSERT INTO sport_allocation (refNo,  venderRefNo, sportRefNo, sport)
VALUES ('SA-000003', 'emp-1003', 'sp-000003', 'cricket');

INSERT INTO sport_allocation (refNo,  venderRefNo, sportRefNo, sport)
VALUES ('SA-000004', 'emp-1004', 'sp-000001', 'badminton');

INSERT INTO sport_allocation (refNo,  venderRefNo, sportRefNo, sport)
VALUES ('SA-000005', 'emp-1004', 'sp-000002', 'carrom');




















