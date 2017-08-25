# Laravel - Migrations e Seeders para estados e cidades Brasileiras

Neste repositório encontram-se as migrations e seeders necessárias para criação de tabelas de estado e cidades Brasileiras.

## Informações

A tabela `states` contém:

- Título, abreviação e slug
- Código ISO
- Informação populacional

A tabela `cities` contém:

- Título e slug
- DDD das cidades
- Código ISO
- Informação populacional
- Latitude e longitude
- Renda per-capita

## Como instalar

- `php artisan migrate`
- `php artisan db:seed`

