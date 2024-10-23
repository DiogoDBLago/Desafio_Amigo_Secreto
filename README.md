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

### 3. **Instalar o Git**
- Para clonar o repositório do GitHub, você precisará do **Git** instalado na máquina.

  - Baixe e instale o **Git** através deste link: [Git Download](https://git-scm.com/).

---

## Passos para rodar o projeto

### 1. **Clone o repositório**
Abra o terminal ou Git Bash e clone este repositório para a sua máquina local:

```bash
git clone https://github.com/DiogoDBLago/Desafio_Amigo_Secreto.git

