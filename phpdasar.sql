-- db:mysql -D phpdasar
create table mahasiswa (
	id int primary key auto_increment,
	nrp char(9),
	nama varchar(100),
	email varchar(100),
	jurusan varchar(100),
	gambar varchar(100)
);

insert into mahasiswa values (
	'',
	'043040023',
	'Sandhika Galih',
	'sandhikagalih.unpas.ac.id',
	'Teknik Informatika',
	'0.jpg'
);
insert into mahasiswa values (
	'',
	'133040123',
	'Doddy',
	'doddy@yahoo.com',
	'Teknik Mesin',
	'3.jpg'
);
insert into mahasiswa values (
	'',
	'993040123',
	'Melika Liyanty',
	'melika@unpas.ac.id',
	'Teknik Informatika',
	'6.jpg'
);

/* change order column */
alter table mahasiswa change column nama nama varchar(100) after nrp;
/* change value in one or more column */
update mahasiswa set gambar = '15.jpg' where id = 4;

show tables;
select * from mahasiswa;
select nrp from mahasiswa;
select jurusan from mahasiswa;
select nama, nrp from mahasiswa;
select * from mahasiswa where nrp = '153030321';
delete from mahasiswa where id = 3;
drop table mahasiswa;
drop database phpdasar;
describe mahasiswa;
