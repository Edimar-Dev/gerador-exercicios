# 🧮 Gerador de Exercícios de Matemática

Um projeto desenvolvido em **PHP com Laravel** com o objetivo de praticar lógica de programação e consolidar os conhecimentos adquiridos no framework através da construção de uma aplicação simples, porém com regras de negócio bem definidas.

A aplicação gera automaticamente exercícios de matemática utilizando as quatro operações fundamentais, permitindo ao usuário configurar quais operações serão utilizadas, o intervalo dos números gerados e a quantidade de exercícios desejada.

Este projeto **não utiliza banco de dados**, pois toda a lógica é executada em memória durante a requisição, tornando-o ideal para estudar estruturas de controle, algoritmos, manipulação de dados e recursos do Laravel.

---

# 🎯 Objetivo

Este projeto foi criado exclusivamente para fins de estudo e prática, buscando aprofundar conhecimentos em:

- Lógica de programação;
- Desenvolvimento com Laravel;
- Estrutura MVC;
- Rotas;
- Controllers;
- Blade Templates;
- Validação de formulários;
- Manipulação de Arrays;
- Geração de dados aleatórios;
- Organização de código;
- Boas práticas de desenvolvimento.

A proposta não é construir um sistema complexo, mas utilizar um problema simples para exercitar conceitos fundamentais do desenvolvimento web.

---

# 📖 Sobre a aplicação

O sistema permite configurar uma lista de exercícios matemáticos antes da geração.

O usuário pode selecionar uma ou mais operações matemáticas, definir um intervalo numérico e informar quantos exercícios deseja gerar.

Após clicar em **Gerar Exercícios**, o sistema cria automaticamente uma lista contendo operações aleatórias respeitando todas as configurações informadas.

Cada nova geração produz uma lista diferente.

---

# ✨ Funcionalidades

- Geração automática de exercícios.
- Seleção de uma ou mais operações matemáticas.
- Definição do valor mínimo dos números.
- Definição do valor máximo dos números.
- Definição da quantidade de exercícios.
- Geração aleatória dos valores.
- Interface simples e intuitiva.
- Não utiliza banco de dados.

---

# ➕ Operações disponíveis

O sistema suporta as quatro operações fundamentais da matemática:

- Soma (+)
- Subtração (-)
- Multiplicação (×)
- Divisão (÷)

As operações podem ser utilizadas individualmente ou combinadas.

Exemplos:

- Apenas Soma
- Soma + Subtração
- Multiplicação + Divisão
- Todas as operações

---

# ⚙️ Funcionamento

O fluxo da aplicação é simples:

1. O usuário seleciona as operações desejadas.
2. Informa o valor mínimo.
3. Informa o valor máximo.
4. Define a quantidade de exercícios.
5. O sistema sorteia números aleatórios dentro do intervalo informado.
6. Uma operação é escolhida aleatoriamente entre as selecionadas.
7. O exercício é montado.
8. O processo se repete até atingir a quantidade solicitada.

---

# 💻 Tecnologias utilizadas

- PHP 8+
- Laravel
- Blade
- HTML5
- CSS3
- Bootstrap
- JavaScript

---

# 📂 Estrutura do projeto

```
app/
├── Http/
│   └── Controllers/

resources/
├── views/

routes/

public/

config/

storage/
```

---

# 🚀 Instalação

Clone o repositório.

```bash
git clone https://github.com/Edimar-Dev/gerador-exercicios
```

Entre na pasta do projeto.

```bash
cd gerador-exercicios
```

Instale as dependências.

```bash
composer install
```

Copie o arquivo de ambiente.

```bash
cp .env.example .env
```

Gere a chave da aplicação.

```bash
php artisan key:generate
```

Inicie o servidor.

```bash
php artisan serve
```

Acesse:

```
http://localhost:8000
```

---

# 📋 Exemplo de saída

```
12 + 8 = ______

43 - 17 = ______

9 × 7 = ______

81 ÷ 9 = ______

25 + 16 = ______

72 - 34 = ______
```

---

# 📚 Aprendizados

Durante o desenvolvimento deste projeto foi possível praticar diversos conceitos importantes do Laravel e da programação, como:

- Organização seguindo o padrão MVC;
- Criação de rotas;
- Desenvolvimento de Controllers;
- Renderização de Views com Blade;
- Recebimento e validação de formulários;
- Manipulação de arrays;
- Estruturas condicionais;
- Estruturas de repetição;
- Geração de números aleatórios;
- Separação entre lógica de negócio e apresentação.

---

# 🔮 Possíveis evoluções

Embora este seja um projeto de estudos, algumas melhorias podem ser implementadas futuramente:

- Geração de gabarito;
- Exportação em PDF;
- Impressão da lista de exercícios;
- Controle de dificuldade;
- Evitar exercícios repetidos;
- Divisões sempre com resultado inteiro;
- Suporte a frações;
- Potenciação e radiciação;
- Operações combinadas.

---

# 📄 Licença

Este projeto está disponível sob a licença MIT.

---

# 👨‍💻 Autor

Projeto desenvolvido como parte dos estudos em **Laravel** e **PHP**, com foco no aprimoramento da lógica de programação, aplicação do padrão MVC e consolidação dos conceitos fundamentais do framework.