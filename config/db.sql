-- Criação da tabela 'editora'
CREATE TABLE editoras (
    id INT PRIMARY KEY,
    nome VARCHAR(100)
);

-- Criação da tabela 'acervo'
CREATE TABLE acervos (
    id INT PRIMARY KEY,
    editora_id INT,
    autor VARCHAR(255), 
    ano INT,
    quantidade INT,
    descricao VARCHAR(255),
    FOREIGN KEY (editora_id) REFERENCES editoras(id)
);
