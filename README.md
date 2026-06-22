# gerador-curriculo-php

Este projeto foi desenvolvido como parte da Atividade Prática Orientada (APO) para a disciplina de Fundamentos de Programação para Internet. A aplicação consiste em um gerador de currículos funcional que utiliza tecnologias web modernas para criar um documento profissional de forma dinâmica.
Tecnologias Utilizadas
A solução foi implementada utilizando as seguintes linguagens e frameworks, conforme os requisitos da atividade:
Backend: PHP 8.x para processamento de dados e geração do template.
Frontend: HTML5 e CSS3 com suporte do Bootstrap 5.3 para um design responsivo e moderno.
Interatividade: JavaScript (ES6+) e jQuery para manipulação dinâmica do DOM.
Versionamento: Git.
Funcionalidades Implementadas
Interface Intuitiva: Formulário estruturado com Bootstrap para coleta de dados pessoais.
Cálculo Automático de Idade: Script em JavaScript que calcula a idade do usuário em tempo real assim que a data de nascimento é selecionada.
Experiências e Referências Dinâmicas: Utilização de jQuery para permitir que o usuário adicione ou remova múltiplos campos de experiências profissionais e referências pessoais com apenas um clique.
Processamento Seguro: Backend em PHP que recebe, sanitiza e organiza os dados enviados pelo formulário.
Geração de Documento: Template de currículo formatado visualmente para leitura profissional.
Exportação para PDF: Integração com a função nativa de impressão do navegador (`window.print()`), permitindo o download do currículo em formato PDF com layout otimizado.
Estrutura do Projeto
```text
/
├── assets/
│   ├── css/
│   │   └── style.css      # Estilizações customizadas
│   └── js/
│       └── script.js     # Lógica de idade e campos dinâmicos (jQuery)
├── index.php             # Página inicial com o formulário de entrada
├── generate.php          # Processamento PHP e exibição do currículo final
└── README.md             # Documentação do projeto
```
Como Executar o Projeto Localmente
Clone este repositório.
Mova a pasta do projeto para o diretório de documentos do seu servidor local (ex: `htdocs` no XAMPP).
Certifique-se de que o serviço Apache (PHP) está ativo.
Acesse no navegador: `http://localhost/nome-do-repositorio/index.php`.
