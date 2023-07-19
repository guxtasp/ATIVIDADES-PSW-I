CREATE DATABASE SIS_ALUNO;
USE SIS_ALUNO ;

CREATE TABLE Aluno (
  idAluno INT AUTO_INCREMENT,
  nomeAluno VARCHAR(100),
  telefoneAluno VARCHAR(20),
  enderecoAluno VARCHAR(100),
  statusAluno CHAR(2),
  matriculaAluno CHAR(10),
  emailAluno VARCHAR(100),
  senhaAluno VARCHAR(45),
  dtaNascimentoAluno date,
  PRIMARY KEY (idAluno)
  );
  
  INSERT INTO Aluno (nomeAluno, telefoneAluno, enderecoAluno, statusAluno, matriculaAluno, emailAluno, senhaAluno)
VALUES
  ('Lucas Silva', '+55 11 1111-1111', 'Rua dos Lírios, 123', 'AT', '20230001', 'lucas.silva@email.com', 'aluno123'),
  ('Camila Santos', '+55 21 2222-2222', 'Avenida das Rosas, 456', 'AT', '20230002', 'camila.santos@email.com', 'aluno456'),
  ('Pedro Almeida', '+55 31 3333-3333', 'Rua das Flores, 789', 'DV', '20230003', 'pedro.almeida@email.com', 'aluno789'),
  ('Mariana Costa', '+55 61 4444-4444', 'Avenida dos Sonhos, 10', 'AT', '20230004', 'mariana.costa@email.com', 'aluno101'),
  ('João Oliveira', '+55 85 5555-5555', 'Estrada do Sertão, 50', 'AT', '20230005', 'joao.oliveira@email.com', 'aluno202'),
  ('Isabella Souza', '+55 91 6666-6666', 'Avenida Beira Rio, 78', 'DV', '20230006', 'isabella.souza@email.com', 'aluno303'),
  ('Laura Rodrigues', '+55 21 7777-7777', 'Praça Central, 15', 'AT', '20230007', 'laura.rodrigues@email.com', 'aluno404'),
  ('Gabriel Fernandes', '+55 31 8888-8888', 'Avenida do Sol, 20', 'AT', '20230008', 'gabriel.fernandes@email.com', 'aluno505'),
  ('Ana Lima', '+55 41 9999-9999', 'Rua da Paz, 50', 'DV', '20230009', 'ana.lima@email.com', 'aluno606'),
  ('Rafaela Oliveira', '+55 51 1212-1212', 'Avenida do Mar, 78', 'AT', '20230010', 'rafaela.oliveira@email.com', 'aluno707'),
  ('Bruno Santos', '+55 11 1313-1313', 'Rua das Estrelas, 90', 'DV', '20230011', 'bruno.santos@email.com', 'aluno808'),
  ('Beatriz Silva', '+55 21 1414-1414', 'Avenida da Lua, 12', 'AT', '20230012', 'beatriz.silva@email.com', 'aluno909'),
  ('Gustavo Almeida', '+55 31 1515-1515', 'Rua das Nuvens, 45', 'AT', '20230013', 'gustavo.almeida@email.com', 'aluno010'),
  ('Juliana Souza', '+55 61 1616-1616', 'Praça da Alegria, 25', 'DV', '20230014', 'juliana.souza@email.com', 'aluno111'),
  ('Mateus Oliveira', '+55 85 1717-1717', 'Estrada das Águas, 30', 'AT', '20230015', 'mateus.oliveira@email.com', 'aluno212'),
  ('Larissa Santos', '+55 91 1818-1818', 'Avenida do Vento, 70', 'DV', '20230016', 'larissa.santos@email.com', 'aluno313'),
  ('Felipe Rodrigues', '+55 21 1919-1919', 'Praça das Pedras, 15', 'AT', '20230017', 'felipe.rodrigues@email.com', 'aluno414'),
  ('Vitória Lima', '+55 31 2020-2020', 'Rua do Mar, 85', 'AT', '20230018', 'vitoria.lima@email.com', 'aluno515'),
  ('Thiago Fernandes', '+55 41 2121-2121', 'Avenida da Montanha, 95', 'DV', '20230019', 'thiago.fernandes@email.com', 'aluno616'),
  ('Amanda Souza', '+55 51 2323-2323', 'Rua da Cidade, 65', 'DV', '20230020', 'amanda.souza@email.com', 'aluno717');


CREATE TABLE Professor (
  idProfessor INT AUTO_INCREMENT,
  nomeProfessor VARCHAR(100) ,
  telefoneProfessor VARCHAR(20),
  enderecoProfessor VARCHAR(100),
  emailProfessor VARCHAR(100),
  dtaNascimentoProfessor date,
  statusProfessor bool,
  senhaProfessor VARCHAR(45),
  acessoProfessor CHAR(10),
  PRIMARY KEY (idProfessor)
  );
  INSERT INTO Professor (nomeProfessor, telefoneProfessor, enderecoProfessor, emailProfessor, senhaProfessor, acessoProfessor) VALUES ('João Silva', '+55 11 1234-5678', 'Rua das Flores, 123', 'joao.silva@email.com', 'senha123', '12345');
  INSERT INTO Professor (nomeProfessor, telefoneProfessor, enderecoProfessor, emailProfessor, senhaProfessor, acessoProfessor) VALUES ('Maria Souza', '+55 21 9876-5432', 'Avenida dos Sonhos, 456', 'maria.souza@email.com', 'minhasenha', '56789');
  INSERT INTO Professor (nomeProfessor, telefoneProfessor, enderecoProfessor, emailProfessor, senhaProfessor, acessoProfessor) VALUES ('Pedro Almeida', '+55 31 2468-1357', 'Rua das Pedras, 789', 'pedro.almeida@email.com', 'senha456', '98765');
  INSERT INTO Professor (nomeProfessor, telefoneProfessor, enderecoProfessor, emailProfessor, senhaProfessor, acessoProfessor) VALUES ('Ana Oliveira', '+55 61 3699-8888', 'Praça Central, 10', 'ana.oliveira@email.com', 'minha123senha', '54321');
  INSERT INTO Professor (nomeProfessor, telefoneProfessor, enderecoProfessor, emailProfessor, senhaProfessor, acessoProfessor) VALUES ('Luiz Gonzaga', '+55 85 7777-9999', 'Estrada do Sertão, 50', 'luiz.gonzaga@email.com', 'gonzagaluiz', '13579');
INSERT INTO Professor (nomeProfessor, telefoneProfessor, enderecoProfessor, emailProfessor, senhaProfessor, acessoProfessor) VALUES ('Mariana Costa', '+55 91 5555-1111', 'Avenida Beira Rio, 78', 'mariana.costa@email.com', 'maricoti23', '02468');
INSERT INTO Professor (nomeProfessor, telefoneProfessor, enderecoProfessor, emailProfessor, senhaProfessor, acessoProfessor) VALUES ('Carlos Santos', '+55 81 2222-3333', 'Avenida das Palmeiras, 789', 'carlos.santos@email.com', 'carlos123', '24680');
INSERT INTO Professor (nomeProfessor, telefoneProfessor, enderecoProfessor, emailProfessor, senhaProfessor, acessoProfessor) VALUES ('Patrícia Mendes', '+55 41 4444-5555', 'Rua das Montanhas, 15', 'patricia.mendes@email.com', 'senha321', '13579');
INSERT INTO Professor (nomeProfessor, telefoneProfessor, enderecoProfessor, emailProfessor, senhaProfessor, acessoProfessor) VALUES ('Ricardo Lima', '+55 31 6666-7777', 'Praça da Liberdade, 32', 'ricardo.lima@email.com', 'lima123', '86420');
INSERT INTO Professor (nomeProfessor, telefoneProfessor, enderecoProfessor, emailProfessor, senhaProfessor, acessoProfessor) VALUES ('Laura Rodrigues', '+55 21 8888-9999', 'Avenida Central, 789', 'laura.rodrigues@email.com', 'senha789', '97531');
INSERT INTO Professor (nomeProfessor, telefoneProfessor, enderecoProfessor, emailProfessor, senhaProfessor, acessoProfessor) VALUES ('Marcos Ferreira', '+55 51 1010-2020', 'Rua dos Pinheiros, 10', 'marcos.ferreira@email.com', 'ferreira456', '25846');
INSERT INTO Professor (nomeProfessor, telefoneProfessor, enderecoProfessor, emailProfessor, senhaProfessor, acessoProfessor) VALUES ('Marcos Ferreira', '+55 51 1010-2020', 'Rua dos Pinheiros, 10', 'marcos.ferreira@email.com', 'ferreira456', '25846');

CREATE TABLE Disciplina (
  codDisciplina INT AUTO_INCREMENT,
  nomeDisciplina VARCHAR(45),
  Professor_idProfessor INT,
  PRIMARY KEY (codDisciplina),
  FOREIGN KEY (Professor_idProfessor) REFERENCES Professor(idProfessor)
  );
  
INSERT INTO Disciplina (nomeDisciplina, Professor_idProfessor)
VALUES
  ('Matemática', 1),
  ('Português', 2),
  ('Ciências', 3),
  ('História', 4),
  ('Geografia', 5),
  ('Física', 6),
  ('Química', 7),
  ('Biologia', 8),
  ('Inglês', 9),
  ('Artes', 10),
  ('Educação Física', 11),
  ('Informática', 12),
  ('Filosofia', 1),
  ('Sociologia', 2),
  ('Literatura', 3),
  ('Economia', 4),
  ('Psicologia', 5),
  ('Gastronomia', 6),
  ('Música', 7),
  ('Administração', 8),
  ('Educação Infantil', 9),
  ('Matemática Avançada', 10),
  ('Química Orgânica', 11),
  ('História do Brasil', 12);

CREATE TABLE Cursa(
  Aluno_idAluno INT,
  Disciplina_codDisciplina INT,
  nota VARCHAR(4),
  ano CHAR(1),
  PRIMARY KEY (Aluno_idAluno, Disciplina_codDisciplina),
  FOREIGN KEY (Aluno_idAluno) REFERENCES Aluno (idAluno),
  FOREIGN KEY (Disciplina_codDisciplina) REFERENCES Disciplina (codDisciplina)
);
delete  from Professor where idProfessor = 14;
select * from Professor;

