create database ecom

create table users
( kd_user varchar(5) not null Primary Key,
  email varchar(25),
  password varchar(255),
  nama varchar(25),
  level varchar(25) )

create table produk
( kd_produk varchar(5) not null Primary Key,
  nm_produk varchar(50),
  stok int,
  harga int )

create table store
( kd_store varchar(5) not null Primary Key,
  nm_store varchar(50),
  alamat text,
  email varchar(50) )

create table contact
( id int not null Primary Key,
  nama varchar(50),
  alamat text,
  telp varchar(20),
  email varchar(50),
  website varchar(50),
  owner varchar(100),
  deskripsi text )

create table penjualan_detail
( kd_penjualan varchar(5),
  kd_produk varchar(50),
  qty varchar(10) )

create table penjualan_header
( kd_penjualan varchar(5) not null Primary Key,
  kd_store varchar(50),
  total_harga bigint,
  tanggal_penjualan date,
  kd_user varchar(5),
  buyer varchar(100),
  alamat_buyer text )


--masukan data

insert into users values
('K-001','kae@venus.com','21232f297a57a5a743894a0e4a801fc3','Lucy','KAE')

insert into contact values
('1','Venus Multimedia Store','Jakarta','123','admin@venus-multimedia.com','venus-multimedia.com','Mark','Be Smart, Be Carrefully')