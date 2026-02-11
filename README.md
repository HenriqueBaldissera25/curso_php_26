# Tutorial
- Abrir vscode ver se ta logado no ubuntu ( canto inferior esquerdo) file open folder: file open folder: selecione tudo e apaga

- /var/www/html e da um ok. Após, terminal novo terminal. 
git clone LINK_GITHUB da um enter. novamente file open folder: seleciona tudo e apaga

- /var/www/html/curso_php_26 e da um ok. Após, terminal novo terminal verifica se esta em: /var/www/html/curso_php_26.

# Tutorial
- Abrir vscode ver se ta logado no ubuntu ( canto inferior esquerdo) file open folder: file open folder: selecione tudo e apaga

- /var/www/html e da um ok. Após, terminal novo terminal. 
git clone LINK_GITHUB da um enter. novamente file open folder: seleciona tudo e apaga

- /var/www/html/curso_php_26 e da um ok. Após, terminal novo terminal verifica se esta em: /var/www/html/curso_php_26.

# MariaDB

CREATE DATABASE curso_php_26;

CREATE USER 'aluno'@localhost IDENTIFIED BY '1234';

GRANT ALL PRIVILEGES ON *.* TO 'aluno'@localhost IDENTIFIED BY '1234';

https://phoenixnap.com/kb/how-to-create-mariadb-user-grant-privileges#:~:text=To%20create%20a%20new%20MariaDB,to%20a%20local%20MySQL%20server.

select u.* from usuario as u 
inner join pessoa fisica as pf ON u.id = pf.usuario_alteracao

select u.* from usuario as u 
left join pessoa fisica as pf ON u.id = pf.usuario_alteracao

select u.* from usuario as u 
right join pessoa_fisica as pf ON u.id = pf .usuario_alteracao

set session sql_mode = 'No_engine_substitution';


----------------------------------------------------------------------------------------------------------------------------------

-- C create (criar 1 usuario)
INSERT INTO usuario (nome, email, status, cadastro_preenchido)
VALUES ("fulano de tal","fulano@ciclano.com.br", false, false);

-- C create (criar 1 usuario)
INSERT INTO usuario (nome, email, status, cadastro_preenchido)
VALUES (
    "fulano de tal","fulano@ciclano.com.br", false, false
    "Beltrano de tal", "beltrano
    );


-- R read (todos usuarios)
SELECT * from usuario;

-- R read Only (1 usuario)
SELECT * from usuario WHERE id = 3;

-- D Delete (Excluir 1 usuario)
Delete From usuario WHERE id = 3;

-- D Delete (Excluir mais usuarios)
Delete From usuario WHERE id IN (3, 7);

-- U Update Only (1 usuario)
Update usuario SET email="ariel@infoserv.com" Where id = 1;

-- U Update Only (1 usuario)
Update usuario SET status=True Where id IN = (1, 2);

-- ALTER TABLE
ALTER TABLE usuario add column cadastro_preenchido bool default false;

ALTER TABLE usuario MODIFY add column cadastro_preenchido bool NOT NULL default false; 

ALTER TABLE usuario DROP add column cadastro_preenchido;

DATAS AUTOMATICAS
ALTER TABLE usuario DROP COLUMN criado_em;

ALTER TABLE usuario ADD COLUMN criado_em TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP;

ALTER TABLE usuario DROP COLUMN atualizado_em;

ALTER TABLE usuaio ADD COLUMN atualizado DATETIME DEFAULT NULL ON UPDTADE CURRENT_TIMESTAMP;
