		drop database biblioteca;
		create database biblioteca;
		use biblioteca

			
		create table livros(  
			id INT AUTO_INCREMENT PRIMARY KEY,
			 titulo VARCHAR(255),  qtd int (33),inicial int(33),
			 autor varchar(100), enderecamento varchar(200), 
			 editora varchar(22),ano int(4), 
			 edição varchar(999),
			  EAN int,
			  ISBN varchar(222),img varchar(200),
			  devolucoes int,tipo varchar(999));	


	insert into	  	livros  		 values	(	"7"	,"	Auto da barca do inferno	",2,2,"Gil vicent","1A","azul",2020,"limitada",9999999999,9855444,"auto.jpg","","livros");
		
	insert into	  	livros  		 values	(	"8"	,"	Mentirosos	",5,5,"E.Lockhort","1b","azul",2020,"limitada",9999999999,9855444,"mentirosos.jpg","","livros");
				
	insert into	  	livros  		 values	(	"9"	,"	Alice no Pais das maravilhas	",6,6,"Gil vicent","1A","azul",2020,"limitada",9999999999,9855444,"alice.png","","livros");
		
	insert into	  	livros  		 values	(	"10"	,"	Sherlock Homes	",1,1,"Will","1b","azul",2020,"limitada",9999999999,9855444,"sher.jpg","","livros");
		
	insert into	  	livros  		 values	(	"11"	,"	Onze Contos do Machado de Assis	",1,1,"Machado de Assis","1A","azul",2020,"limitada",9999999999,9855444,"onze.jpg","","livros");
		
	insert into	  	livros  		 values	(	"12"	,"	O Brasil que passa fome	",1,2,"Isto é","1c","	Isto é",2020,"limitada",99965789,98555674,"fome.png","","revista");
		
	insert into	  	livros  		 values	(	"13"	,"	Pequeno manual anti-racista	",5,5,"Djamila Ribeiro","1b","Companhia das letras",2020,"limitada",9999999999,9855444,"manual.jpg","","manual");
				
		
			select * from livros;

		Create table usuarios (
			login Varchar(300) not null PRIMARY KEY,
		nome_usuario varchar(111),curso Varchar(15),
		periodo varchar (15), assuntos Varchar(555),
		 confirmacao VARCHAR(40) NOT NULL,
		senha Varchar(400)
		);

		select * from usuarios;
		create table carrinho(id INT AUTO_INCREMENT PRIMARY KEY, 
			nome VARCHAR(255),id_livro VARCHAR(23),
		qtd int (33),data date, vence varchar(7),renovacoes int, login Varchar(300),
		 FOREIGN KEY (login) REFERENCES usuarios(login));
		select * from carrinho;
		create table historico(id INT AUTO_INCREMENT PRIMARY KEY, 
			nome VARCHAR(255),
		qtd int (33),data date,vence varchar(7),renovacoes int,   devolucoes int,
		login Varchar(300),  FOREIGN KEY (login) REFERENCES usuarios(login));


	insert into	  	livros  		 values	(	"17"	,"	De volta para o futuro	",2,2,"Rogerio Lambor ","2b","Trivela",2010,"Esporte",998529,10235444,"de volta para o futuro.jpg","","revista");
		
	insert into	  	livros  		 values	(	"18"	,"	Manual de primeiros socorros para educação fisica	",5,5,"Jefferson da Silva Novaes","3b","Sprint",2019,"Saúde",999905898,87741364,"ef.jpg","","manual");
				
	insert into	  	livros  		 values	(	"19"	,"	Governança em TI	",6,6,"Alberto","4e","TI(ne)",2019,"TI",54866999,2543354,"ti.jpg","","revista");
		
	insert into	  	livros  		 values	(	"20"	,"	Tecnologia em informação",1,1,"Mundo logistica","1b","MAG",2020,"Tecnologia",54230159,8147699,"logistica.jpg","","revista");
		
	insert into	  	livros  		 values	(	"21"	,"Manual do TCC",1,1,"Fernando Augusto de Vita Borges de Sales","5A","Rumo legal",2010,"TCC",8521456985,2698742,"manual do tcc.png","","manual");

	insert into	  	livros  		 values	(	"22"	,"Manual do TCCs ",1,1,"FAEPI","5A","tcc",2019,"TCC",83614525,32160089,"tcc n.jpg","","TCC");
	
	insert into	  	livros  		 values	(	"23"	,"	Trabalho de conclusão de estágio	",2,2,"Alan Veciloki ","2f","Autoria propria",2005,"TCC",997898529,1046326444,"tcc.jpg","","TCC");



				
	insert into	  	livros  		 values	(	"24"	,"	Manual de expansão de PCs  ",6,6,"Laério Vasconcelos","5e","2",2019,"TI",456789098765,0987656,"expansao.jpg","","TCC");
		
	insert into	  	livros  		 values	(	"25"	,"	TCC manual",1,1,"Aderlan Messias de Oliveira","4b","",2020,"",025836595,147699,"tcc manual.jpg","","tcc");
		
	insert into	  	livros  		 values	(	"26"	,"Manual de Hardware",1,1,"Veracruz Sebo Virtual","6A","Configuração e expansão",2019,"Manual",852852985,2698785242,"hadware.jpg","","manual");

	insert into	  	livros  		 values	(	"27"	,"TCC de Programação",1,1,"Cleria Maria de Sousa Marques ","6A","tcc",2019,"TCC",8565414525,34320089,"Programação.jpg","","TCC");
	
	insert into	  	livros  		 values	(	"28"	,"	Trabalho de conclusão de estágio	",2,2,"Alan Veciloki ","2f","Autoria propria",2005,"TCC",997898529,1046326444,"tcc.jpg","","TCC");

		
				
	insert into	  	livros  		 values	(	"29"	,"	Cebolinha  ",6,6,"Mauricio de Souza","5e","Mauricio de Souza",2019,"Cebolinha ",456785265,753556,"cebolinha.jpg","","outros");
		
	insert into	  	livros  		 values	(	"30"	,"	Monica folhas de outono",1,1,"Mauricio de Souza","5c","Mauricio de Souza",2020,"monica estações",74836595,652147699,"monica folhas de outono.jpg","","outros");
		
	insert into	  	livros  		 values	(	"31"	,"Mônica ",1,1,"Mauricio de Souza","6E","Mauricio de Souza",2019,"monica festa junina",74152985,29632852,"monica.jpg","","outros");

