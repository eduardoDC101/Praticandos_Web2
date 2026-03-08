CREATE TABLE Contato(
	id_contato SERIAL,
	nome_contato VARCHAR(50) NOT NULL,
	email_contato VARCHAR(30) NOT NULL,
	mensagem_contato TEXT NOT NULL,
	CONSTRAINT pk_contato PRIMARY KEY(id_contato)
);

SELECT * FROM Contato;