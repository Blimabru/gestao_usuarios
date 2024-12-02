# Projeto de Navegação e Autenticação

Este projeto é uma aplicação web utilizando **Laravel** com funcionalidades de navegação, autenticação e visualização de usuários.

## Funcionalidades

- **Dashboard:** Página principal após login, exibindo informações relevantes.
- **Users:** Visualização da lista de usuários cadastrados na aplicação.
- **Autenticação:** Sistema de login e logout para o usuário.
- **Dropdown de Configurações:** Acesso rápido ao perfil do usuário e opção de logout.
- **Responsividade:** A interface se adapta a diferentes tamanhos de tela, incluindo uma versão móvel da barra de navegação.

## Tecnologias Utilizadas

- **Laravel**: Framework PHP utilizado para o backend.
- **Tailwind CSS**: Framework CSS para o design da interface.
- **Alpine.js**: Biblioteca JavaScript para interatividade no frontend.

## Como Baixar e Rodar o Projeto

### 1. Clonar o Repositório

#### Primeiro, clone o repositório em seu ambiente local utilizando o Git:

```bash
git clone https://github.com/username/projeto.git
cd projeto
```

### 2. Instalar as Dependências

#### Se você não tiver o Composer instalado, instale-o primeiro seguindo as instruções em getcomposer.org.

#### Depois, instale as dependências do projeto:

```bash
Copiar código
composer install
```

### 3. Configurar o Ambiente

#### Copie o arquivo .env.example para .env:

```bash
Copiar código
cp .env.example .env
```
#### Abra o arquivo .env e configure as credenciais do banco de dados e outras variáveis de ambiente necessárias, como a chave de sessão e outras configurações específicas.

### 4. Gerar a Chave de Aplicação

#### Execute o comando abaixo para gerar a chave da aplicação, que é usada para criptografar as sessões e outras variáveis:

```bash
Copiar código
php artisan key:generate
```

### 5. Criar o Banco de Dados

#### Crie o banco de dados e execute as migrações para configurar a estrutura do banco de dados:

```bash
Copiar código
php artisan migrate
```

#### Se houver dados iniciais para popular a aplicação, você pode rodar o seeder:

```bash
Copiar código
php artisan db:seed
```

### 6. Executar a Aplicação

#### Agora, você pode rodar o servidor de desenvolvimento do Laravel:

```bash
Copiar código
php artisan serve
```

#### O servidor estará disponível em http://127.0.0.1:8000.

### 7. Acessar a Aplicação

#### Abra o navegador e acesse http://127.0.0.1:8000. Você deverá ser redirecionado para a tela de login, onde pode entrar com suas credenciais e acessar o Dashboard e a lista de Users.

## Estrutura do Projeto

```app/Http/Controllers``` Contém os controladores que gerenciam a lógica da aplicação.

```resources/views``` Contém os arquivos Blade para a interface do usuário.

```routes/web.php``` Define as rotas da aplicação.

```.env``` Arquivo de configuração das variáveis de ambiente.

```composer.json``` Arquivo de configuração do Composer.

## Contribuindo

### Se você deseja contribuir para o projeto, fique à vontade para enviar pull requests. Certifique-se de seguir as boas práticas de desenvolvimento e de escrever testes para suas mudanças.

Faça um fork do repositório.

Crie uma branch para suas alterações (git checkout -b minha-branch).

Faça suas alterações e adicione testes.

Envie suas alterações para o seu fork (git push origin minha-branch).

Abra um pull request para a branch principal.

## Licença

Este projeto é licenciado sob a MIT License.