# Desafio Amigo Secreto

Este projeto é um sistema de cadastro de pessoas com funcionalidade de sorteio para um evento de amigo secreto. Ele foi desenvolvido em **PHP** utilizando **PDO** para conexão com MySQL, seguindo o padrão **MVC** (Model-View-Controller).

## Funcionalidades
- **Cadastro de pessoas** com verificação de duplicidade (nome e email).
- **Edição** e **deleção** de pessoas cadastradas.
- **Sorteio aleatório** de uma pessoa cadastrada.
- Exibição de **mensagens de erro** (caso haja duplicidade) e **sucesso** via pop-ups.

---

## Pré-requisitos

Antes de rodar o projeto, você deve instalar as seguintes ferramentas:

### 1. **Instalar o Laragon**
- **Laragon** é uma plataforma para desenvolvimento local, incluindo Apache, MySQL, PHP e várias outras ferramentas. Ele é leve e fácil de usar.

  - Baixe e instale o **Laragon** através deste link: [Laragon Download](https://laragon.org/download/).

### 2. **Instalar o Docker**
- O **Docker** permitirá rodar o banco de dados MySQL em um contêiner, sem a necessidade de instalar o MySQL diretamente.

  - Baixe e instale o **Docker** através deste link: [Docker Download](https://www.docker.com/products/docker-desktop).

  - Para rodar o MySQL com Docker, execute os seguintes comandos no terminal:

### 1. **Instalar o Git**
- Para clonar o repositório do GitHub, você precisará do **Git** instalado na máquina.

  - Baixe e instale o **Git** através deste link:: [Git Download](https://git-scm.com/).

```bash
docker pull mysql:latest
docker run --name mysql-container -e MYSQL_ROOT_PASSWORD=root -e MYSQL_DATABASE=amigo_secreto -p 3306:3306 -d mysql:latest
```
## Passos para rodar o projeto

### 1. Clone o repositório
- Abra o terminal ou Git Bash e clone este repositório para sua máquina local:
```bash
git clone https://github.com/DiogoDBLago/Desafio_Amigo_Secreto.git
```

### 2. Configuração do Docker
- Certifique-se que o Docker está em execução.
- Use o comando abaixo para verificar os contêineres em execução
```bash
docker ps
```
- Caso o contêiner não esteja em execução, inicie-o com o seguinte comando:
```bash
docker start mysql-container
```
- Se o contêiner já estiver rodando, você pode acessar o banco de dados usando o seguinte comando no terminal:
```bash
docker exec -it mysql-container mysql -u root -p
```
- Isso permitirá o acesso ao MySQL dentro do contêiner.

## 3. Configuração do projeto
Após clonar o repositório e configurar o Docker, use o Laragon para iniciar o servidor local.

- Abra o Laragon e inicie o servidor Apache.
- No Laragon, verifique se o MySQL e o PHP estão funcionando corretamente.
- Acesse http://localhost/Desafio no navegador para abrir o projeto.

### 4. Importação do banco de dados
Se você já tem dados que deseja incluir no banco de dados, siga estas etapas para importá-los:

#### 1. **Crie um Dump do Banco de Dados**:
   - Se você possui um banco de dados existente, faça um dump dos dados com o seguinte comando:

   ```bash
   mysqldump -u root -p amigo_secreto > amigo_secreto_dump.sql
   ```
#### 2. **Importe o Dump no Novo Banco de Dados**:
   - Após criar o dump, você pode importar os dados no contêiner do MySQL em execução. Primeiro, acesse o MySQL dentro do contêiner com o seguinte comando:

   ```bash
   docker exec -it mysql-container mysql -u root -p amigo_secreto < amigo_secreto_dump.sql
   ```
#### 3. **Verifique as Tabelas**:
   - Após a importação, você pode verificar se a tabela `pessoas` foi criada corretamente e se os dados foram importados. Acesse o MySQL dentro do contêiner e use os comandos:

   ```sql
   SHOW TABLES;
   SELECT * FROM pessoas;
   ```
### 5. Rodar o projeto
- Com o servidor Apache rodando no Laragon e o banco de dados configurado, você pode acessar o projeto pelo navegador em:
  	```bash
    http://localhost/Desafio_Amigo_Secreto/index.php
    ```

