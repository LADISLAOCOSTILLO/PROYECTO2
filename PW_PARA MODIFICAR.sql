CREATE DATABASE VENTAS2015;

/* Activando la base de datos Ventas2015 */
USE VENTAS2015;

/*** IMPLEMENTANDO LA TABLA PRODUCTO ***/
/* Validando la existencia de la tabla producto */
DROP TABLE IF EXISTS producto;

/* Creando la tabla producto */
CREATE TABLE producto(
	ID_PRODUCTO		CHAR(5) 	NOT NULL,
	DESCRIPCION 		VARCHAR (50) 	NOT NULL,
	PRECIO			DECIMAL(8,2) 	NOT NULL,
	STOCK 			INT 		NOT NULL,
	FECHA_VENC		DATE
);

/* Agregando la llave primaria */
ALTER TABLE producto ADD PRIMARY KEY (ID_PRODUCTO);

/*** IMPLEMENTANDO LA TABLA DISTRITO ***/
/* Validando la existencia de la tabla distrito */
DROP TABLE IF EXISTS distrito;

/* Creando la tabla distrito */
CREATE TABLE distrito(
	ID_DISTRITO 	CHAR (3) 		NOT NULL,
	DESCRIPCION	VARCHAR(50)		NOT NULL
);

/* Agregando la llave primaria */
ALTER TABLE distrito ADD PRIMARY KEY (ID_DISTRITO);

/*** IMPLEMENTANDO LA TABLA CLIENTE ***/
/* Validando la existencia de la tabla cliente*/
DROP TABLE IF EXISTS cliente;

/* Creando la tabla cliente */
CREATE TABLE cliente(
	ID_CLIENTE 	CHAR (5) 	NOT NULL,
	NOMBRES  	VARCHAR (30) 	NOT NULL,
	PATERNO 	VARCHAR (30) 	NOT NULL,
	MATERNO 	VARCHAR (30) 	NOT NULL,
	DIRECCION 	VARCHAR (40)  NULL,
	FONO 		CHAR (15) 	NULL,
	ID_DISTRITO 	CHAR (3) 	NOT NULL,
	EMAIL 		VARCHAR (50)  NULL
);

/* Agregando la llave primaria */
ALTER TABLE cliente ADD PRIMARY KEY (ID_CLIENTE);

/* Agregando la llave foránea a la tabla cliente */
ALTER TABLE cliente  
     ADD FOREIGN KEY (ID_DISTRITO) 
     REFERENCES distrito (ID_DISTRITO);

/*** IMPLEMENTANDO LA TABLA BOLETA ***/
/* Validando la existencia de la tabla boleta*/
DROP TABLE IF EXISTS boleta;

/* Creando la tabla boleta */
CREATE TABLE boleta(
	NUM_BOLETA 		INT 		AUTO_INCREMENT,
	FECHA	 		DATE 		NOT NULL,
	ID_CLIENTE 		CHAR (5) 	NOT NULL,
	PRIMARY KEY (NUM_BOLETA)
);

/*  Para reinicializar el numero autoincrementado
    ALTER TABLE BOLETA AUTO_INCREMENT 1;
*/

/* Agregando la llave foránea a la tabla cliente */
ALTER TABLE boleta 
   ADD FOREIGN KEY (ID_CLIENTE) 
   REFERENCES cliente (ID_CLIENTE);

/*** IMPLEMENTANDO LA TABLA DETALLEBOLETA ***/
/* Validando la existencia de la tabla DetalleBoleta */
DROP TABLE IF EXISTS detalleBoleta;

/* Creando la tabla DetalleBoleta */
CREATE TABLE detalleBoleta(
	NUM_BOLETA 	INT 		NOT NULL,
	ID_PRODUCTO 	CHAR(5) 	NOT NULL,
	CANTIDAD 	INT 		NOT NULL
);

/* Agregando las llaves primarias */
ALTER TABLE detalleBoleta 
   ADD PRIMARY KEY (NUM_BOLETA,ID_PRODUCTO);

/* Agregando las llaves foraneas de la tabla DetalleBoleta */
ALTER TABLE detalleBoleta 
   ADD FOREIGN KEY (ID_PRODUCTO) REFERENCES producto (ID_PRODUCTO);
ALTER TABLE detalleBoleta 
   ADD FOREIGN KEY (NUM_BOLETA) REFERENCES boleta (NUM_BOLETA);

/** INSERTANDO REGISTROS EN LAS TABLAS **/
/* Insertando registros a la tabla Distrito */ 
INSERT INTO DISTRITO VALUES('L01','CERCADO');
INSERT INTO DISTRITO VALUES('L02','ANCON');
INSERT INTO DISTRITO VALUES('L03','ATE');
INSERT INTO DISTRITO VALUES('L04','BARRANCO');
INSERT INTO DISTRITO VALUES('L05','BREÑA');
INSERT INTO DISTRITO VALUES('L06','CARABAYLLO');
INSERT INTO DISTRITO VALUES('L07','COMAS');
INSERT INTO DISTRITO VALUES('L08','CHACLACAYO');
INSERT INTO DISTRITO VALUES('L09','CHORRILLOS');
INSERT INTO DISTRITO VALUES('L10','EL AGUSTINO');
INSERT INTO DISTRITO VALUES('L11','JESUS MARIA');
INSERT INTO DISTRITO VALUES('L12','LA MOLINA');
INSERT INTO DISTRITO VALUES('L13','LA VICTORIA');
INSERT INTO DISTRITO VALUES('L14','LINCE');
INSERT INTO DISTRITO VALUES('L15','LURIGANCHO');
INSERT INTO DISTRITO VALUES('L16','LURIN');
INSERT INTO DISTRITO VALUES('L17','MAGDALENA');
INSERT INTO DISTRITO VALUES('L18','MIRAFLORES');
INSERT INTO DISTRITO VALUES('L19','PACHACAMAC');
INSERT INTO DISTRITO VALUES('L20','PUCUSANA');

/* Insertando registros a la tabla Productos */
INSERT INTO PRODUCTO VALUES ('P0001','PYE DE MANZANA',20,500,'2015/05/14');
INSERT INTO PRODUCTO VALUES ('P0002','TORTA DE CHOCOLATE',45,100,'2015/07/04');
INSERT INTO PRODUCTO VALUES ('P0003','TORTA TRES LECHES',30,40,'2015/06/24');
INSERT INTO PRODUCTO VALUES ('P0004','MOUSE DE MANZANA',35,70,'2015/09/06');
INSERT INTO PRODUCTO VALUES ('P0005','ARROZ CON LECHE-ENVASE ESPECIAL',13.00,40,'2015/11/04');
INSERT INTO PRODUCTO VALUES ('P0006','MAZAMORRA MORADA',1.50,70,'2015/12/04');
INSERT INTO PRODUCTO VALUES ('P0007','YOGURT ARABE',3,100,'2015/05/04');
INSERT INTO PRODUCTO VALUES ('P0008','PAN CON POLLO',2.00,500,'2015/06/05');
INSERT INTO PRODUCTO VALUES ('P0009','BROWNIE',3,300,'2015/05/04');
INSERT INTO PRODUCTO VALUES ('P0010','BESO DE MOZA',1,400,'2015/06/03');
INSERT INTO PRODUCTO VALUES ('P0011','PYE DE LIMON',1.70,100,'2015/05/02');
INSERT INTO PRODUCTO VALUES ('P0012','TORTA DE NARANJA',16,10,'2015/04/07');
INSERT INTO PRODUCTO VALUES ('P0013','TORTA DE FRESA',41,100,'2015/05/07');
INSERT INTO PRODUCTO VALUES ('P0014','ALFAJORES',0.30,400,'2015/04/06');
INSERT INTO PRODUCTO VALUES ('P0015','CHOCOTEJAS',2,100,'2015/04/14');
INSERT INTO PRODUCTO VALUES ('P0016','SUSPIRO A LA LIMEÑA',3.50,100,'2015/06/12');

/* Insertando registros a la tabla Cliente */
INSERT INTO CLIENTE VALUES ('C0001','CARLOS','LOPEZ', 'HURTADO',
                                       'Calle El Pino 346','4677352','L01','clopez@hotmail.com');
INSERT INTO CLIENTE VALUES ('C0002','FRIDA','QUIROZ','DUARTE',
                                       'Jr. Los Reyes 475 ','6734732','L06','fquiroz@peru.com');
INSERT INTO CLIENTE VALUES ('C0003','ALEJANDRO','TRAUCO', 'MANRIQUE',
                                       'Jr.Huascar 956','4676732','L04','atruco@gmail.com');
INSERT INTO CLIENTE VALUES ('C0004','CARLA','BLANCO', 'RUIZ',
                                       'Av. Arequipa 451','4867438','L03','cblanco@hotmail.com');
INSERT INTO CLIENTE VALUES ('C0005','CORINA','MENDOZA','PEREZ',
                                 'Av. Ingenierios 111','2548965','L09','cmendoza@hotmail.com');
INSERT INTO CLIENTE VALUES ('C0006','JORGE','RODAS', 'DIONICIO',
                                 'Jr. Las Liras 456','4789658','L03','jrodas@gmail.com');
INSERT INTO CLIENTE VALUES ('C0007','ORLANDO','CUEVAS', 'CABANILLAS',
                                 'Calle La Encantada 425','5698532','L11','ocuevas@peru.com');
INSERT INTO CLIENTE VALUES ('C0008','ANTUANE','RODRIGUEZ','ALARCON',
                                 'Av. Dorado 347','4589732','L05','arodriguez@hotmail.com');
INSERT INTO CLIENTE VALUES ('C0009','MANUEL','SUAREZ', 'FERNANDEZ',
                                 'Jr. Los Robles 854','4576738','L19','msuarez@gmail.com');
INSERT INTO CLIENTE VALUES ('C0010','JUAN','GUTIERREZ', 'DIAZ',
                                 'Calle Girasoles 456','4897421','L14','jgutierrez@hotmail.com');
INSERT INTO CLIENTE VALUES ('C0011','CARLOS','COLAN','BARDALES',
                                 'Av. Los Héroes 895','3698574','L19','ccolan@peru.com');
INSERT INTO CLIENTE VALUES ('C0012','MARTIN','CARRILLO', 'SALAS',
                                 'Calle Los Huertos 844','8965952','L08','mcarrillo@gmail.com');
INSERT INTO CLIENTE VALUES ('C0013','JOSE','LAZARTE', 'LUJAN',
                                 'Jr. Agapito 452','1258965','L17','jlazarte@gmail.com');
INSERT INTO CLIENTE VALUES ('C0014','VIDAL','ZORRILLA','RODRIGUEZ',
                          'Av. Héroes del cenepa 635','1547894','L20','vzorrilla@hotmail.com');
INSERT INTO CLIENTE VALUES ('C0015','GUILLERMO','RAMOS', 'FLORES',
                                 'Jr. Las Almendras 211','4587964','L03','gramos@gmail.com');

/* Insertando registros a la tabla Boleta */
INSERT INTO BOLETA(fecha,id_cliente) VALUES ('2015/01/10','C0011');
INSERT INTO BOLETA(fecha,id_cliente) VALUES ('2015/01/20','C0002');
INSERT INTO BOLETA(fecha,id_cliente) VALUES ('2015/01/20','C0001');
INSERT INTO BOLETA(fecha,id_cliente) VALUES ('2015/01/23','C0005');
INSERT INTO BOLETA(fecha,id_cliente) VALUES ('2015/02/10','C0001');
INSERT INTO BOLETA(fecha,id_cliente) VALUES ('2015/02/20','C0002');
INSERT INTO BOLETA(fecha,id_cliente) VALUES ('2015/03/05','C0006');
INSERT INTO BOLETA(fecha,id_cliente) VALUES ('2015/03/24','C0006');
INSERT INTO BOLETA(fecha,id_cliente) VALUES ('2015/04/20','C0005');
INSERT INTO BOLETA(fecha,id_cliente) VALUES ('2015/04/20','C0011');
INSERT INTO BOLETA(fecha,id_cliente) VALUES ('2015/05/10','C0006');
INSERT INTO BOLETA(fecha,id_cliente) VALUES ('2015/06/20','C0006');
INSERT INTO BOLETA(fecha,id_cliente) VALUES ('2015/07/20','C0001');
INSERT INTO BOLETA(fecha,id_cliente) VALUES ('2015/07/26','C0006');
INSERT INTO BOLETA(fecha,id_cliente) VALUES ('2015/07/20','C0006');
INSERT INTO BOLETA(fecha,id_cliente) VALUES ('2015/07/20','C0005');
INSERT INTO BOLETA(fecha,id_cliente) VALUES ('2015/08/10','C0002');
INSERT INTO BOLETA(fecha,id_cliente) VALUES ('2015/09/05','C0012');
INSERT INTO BOLETA(fecha,id_cliente) VALUES ('2015/10/20','C0006');
INSERT INTO BOLETA(fecha,id_cliente) VALUES ('2015/11/27','C0014');
INSERT INTO BOLETA(fecha,id_cliente) VALUES ('2015/11/05','C0002');
INSERT INTO BOLETA(fecha,id_cliente) VALUES ('2015/11/20','C0001');

/* Insertando registros a la tabla detalleBoleta*/
INSERT INTO DETALLEBOLETA VALUES (1,'P0005',10);
INSERT INTO DETALLEBOLETA VALUES (1,'P0001',20);
INSERT INTO DETALLEBOLETA VALUES (2,'P0002',20);
INSERT INTO DETALLEBOLETA VALUES (2,'P0005',10);
INSERT INTO DETALLEBOLETA VALUES (2,'P0003',15);
INSERT INTO DETALLEBOLETA VALUES (3,'P0005',19);
INSERT INTO DETALLEBOLETA VALUES (4,'P0001',19);
INSERT INTO DETALLEBOLETA VALUES (4,'P0005',15);
INSERT INTO DETALLEBOLETA VALUES (4,'P0003',11);
INSERT INTO DETALLEBOLETA VALUES (5,'P0002',15);
INSERT INTO DETALLEBOLETA VALUES (5,'P0005',10);
INSERT INTO DETALLEBOLETA VALUES (6,'P0003',19);
INSERT INTO DETALLEBOLETA VALUES (7,'P0002',11);
INSERT INTO DETALLEBOLETA VALUES (8,'P0001',10);
INSERT INTO DETALLEBOLETA VALUES (9,'P0005',11);
INSERT INTO DETALLEBOLETA VALUES (10,'P0015',12);
INSERT INTO DETALLEBOLETA VALUES (11,'P0002',11);
INSERT INTO DETALLEBOLETA VALUES (11,'P0005',15);
INSERT INTO DETALLEBOLETA VALUES (12,'P0003',19);
INSERT INTO DETALLEBOLETA VALUES (12,'P0015',15);
INSERT INTO DETALLEBOLETA VALUES (13,'P0005',11);
INSERT INTO DETALLEBOLETA VALUES (13,'P0002',12);
INSERT INTO DETALLEBOLETA VALUES (14,'P0005',19);
INSERT INTO DETALLEBOLETA VALUES (15,'P0003',12);
INSERT INTO DETALLEBOLETA VALUES (16,'P0015',15);
INSERT INTO DETALLEBOLETA VALUES (17,'P0001',21);
INSERT INTO DETALLEBOLETA VALUES (18,'P0005',21);
INSERT INTO DETALLEBOLETA VALUES (18,'P0004',12);
INSERT INTO DETALLEBOLETA VALUES (19,'P0004',15);
INSERT INTO DETALLEBOLETA VALUES (20,'P0015',30);
INSERT INTO DETALLEBOLETA VALUES (21,'P0005',30);
INSERT INTO DETALLEBOLETA VALUES (22,'P0001',30);


/* Listando todos los registros */
SELECT * FROM CLIENTE;
SELECT * FROM DISTRITO;
SELECT * FROM PRODUCTO;
SELECT * FROM DETALLEBOLETA;
SELECT * FROM BOLETA;