# WeatherApp

## Configuração do Banco de dados

- Executar o seguinte script SQL:

`CREATE DATABASE api_cursos;`

`` CREATE TABLE `api_cursos`.`cursos` ( `id` INT NOT NULL AUTO_INCREMENT , `titulo` VARCHAR(255) NOT NULL , `descricao` VARCHAR(255) NOT NULL, `imagem` VARCHAR(255) NOT NULL , `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , `updated_at` DATETIME on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci; ``

- Informações adicionais:
  - **Hostname**: localhost
  - **Schema**: api_cursos
  - **User**: root
  - **Password**: 12345
