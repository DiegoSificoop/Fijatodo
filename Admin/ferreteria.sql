DROP DATABASE IF EXISTS ferreteria;
CREATE DATABASE iF NOT EXISTS ferreteria; 

USE ferreteria; 

CREATE TABLE iF NOT EXISTS administrador(
id_ad INT(8) NOT NULL, 
nombre_ad VARCHAR(18),
ap_ad VARCHAR(15),
am_ad VARCHAR(15),
puesto VARCHAR(25),
contrad VARCHAR(34),
PRIMARY KEY(id_ad)
);

CREATE TABLE iF NOT EXISTS categoria(
id_categoria INT AUTO_INCREMENT NOT NULL,
descripcion_categoria VARCHAR(20),
imagen_categoria VARCHAR(50),
PRIMARY KEY(id_categoria)
);

CREATE TABLE iF NOT EXISTS subcategoria(
id_subcategoria INT AUTO_INCREMENT NOT NULL,
id_categoria INT, 
descripcion_sub VARCHAR(20),
imagen_sub VARCHAR(50),
PRIMARY KEY(id_subcategoria),
FOREIGN KEY(id_categoria) REFERENCES categoria(id_categoria)
);

CREATE TABLE iF NOT EXISTS tipo_articulo(
id_tipoarticulo INT AUTO_INCREMENT NOT NULL,
id_subcategoria INT,
descripcion_tipo VARCHAR(20),
imagen_tipo VARCHAR(50),
PRIMARY KEY(id_tipoarticulo),
FOREIGN KEY(id_subcategoria) REFERENCES subcategoria(id_subcategoria)
);

CREATE TABLE iF NOT EXISTS sub_tipo_articulo(
id_subtipoarticulo INT AUTO_INCREMENT NOT NULL, 
id_tipoarticulo INT,
descripcion_subtipo VARCHAR(20),
imagen_subtipo VARCHAR(50),
PRIMARY KEY(id_subtipoarticulo),
FOREIGN KEY(id_tipoarticulo) REFERENCES tipo_articulo(id_tipoarticulo)
);

CREATE TABLE iF NOT EXISTS articulo(
id_articulo INT AUTO_INCREMENT NOT NULL,
id_subtipoarticulo INT,
descripcion_articulo VARCHAR(20),
PRIMARY KEY(id_articulo),
FOREIGN KEY(id_subtipoarticulo) REFERENCES sub_tipo_articulo(id_subtipoarticulo)
);

CREATE TABLE iF NOT EXISTS sub_articulo(
id_subarticulo INT AUTO_INCREMENT NOT NULL,
id_articulo INT,
descripcion_subarticulo VARCHAR(20),
imagen_subarticulo VARCHAR(50),
PRIMARY KEY(id_subarticulo),
FOREIGN KEY(id_articulo) REFERENCES articulo(id_articulo)
);

CREATE TABLE iF NOT EXISTS info_sub_articulo(
id_info INT AUTO_INCREMENT NOT NULL,
id_subarticulo INT, 
descripcion_info VARCHAR(60),
PRIMARY KEY(id_info),
FOREIGN KEY(id_subarticulo) REFERENCES sub_articulo(id_subarticulo)
);

CREATE TABLE iF NOT EXISTS detalle_info(
id_detalle INT AUTO_INCREMENT NOT NULL,
id_info INT, 
codigo VARCHAR(25),
medida VARCHAR(15),
granel VARCHAR(10),
empaque VARCHAR(10),
PRIMARY KEY(id_detalle),
FOREIGN KEY(id_info) REFERENCES info_sub_articulo(id_info)
);