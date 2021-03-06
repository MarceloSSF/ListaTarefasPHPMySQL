CREATE DATABASE listaTarefas

CREATE TABLE Usuario (
	codigoIdentificador INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    loginUsuario VARCHAR(20) NOT NULL,
    senha longText NOT NULL
)

CREATE TABLE Tarefa(
	codigoIdentificador INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(30) NOT NULL,
    descricao VARCHAR(255) NOT NULL,
    dataHoraInicio DATETIME,
    dataHoraTermino DATETIME,
    codigoIdUsuario INT NOT NULL,
    CONSTRAINT fk_IdUser FOREIGN KEY(codigoIdUsuario) REFERENCES Usuario(codigoIdentificador),
	statusTarefa VARCHAR(10)
)

USE listaTarefas

SELECT * FROM listaTarefas.Usuario

INSERT INTO Usuario (login, senha)
VALUES ('TesteLogin', 'TesteSenha')

INSERT INTO Tarefa (titulo, descricao, codigoIdUsuario, statusTarefa)
VALUES ('Teste Título', 'Teste Descrição', 1, 'TesteStatus'),
	('Teste Título 2', 'Teste Descrição 2', 2, 'TesteStatus 2'),
    ('Teste Título 3', 'Teste Descrição 3', 2, 'TesteStatus 3')
 