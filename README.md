# 🔍 Sistema Buscador de CEPs

Um sistema simples em **PHP** que consome a **API ViaCEP** para buscar informações de endereços brasileiros a partir do CEP informado pelo usuário.  
Este projeto foi desenvolvido como parte de estudos em PHP e integração com APIs, com foco em boas práticas para portfólio.

---

## 🚀 Funcionalidades
- Busca de endereço pelo CEP usando a API pública [ViaCEP](https://viacep.com.br/).  
- Exibição de informações como logradouro, bairro, cidade, estado, DDD e mais.  
- Validação do campo de CEP no front-end (usando jQuery Validate).  
- Máscara de CEP no formato `00000-000`.  
- Mensagem de erro para CEP inválido ou inexistente.  
- Layout simples e responsivo com **Bootstrap 5**.  

---

## 🛠️ Tecnologias Utilizadas
- **PHP** (cURL para consumo da API)  
- **HTML5 & CSS3**  
- **Bootstrap 5** (layout responsivo)  
- **JavaScript (jQuery)**  
  - jQuery Validate (validação de formulário)  
  - jQuery Mask (máscara de CEP)  
- **API ViaCEP**

---

## 📂 Estrutura de Pastas
```text
📦 buscador-ceps
 ┣ 📂 api
 ┃ ┗ 📜 viacep.php
 ┣ 📂 js
 ┃ ┗ 📜 index.js
 ┣ 📜 index.php
 ┣ 📜 README.md

## 📜 Licença
Este projeto está licenciado sob a [MIT License](LICENSE).  
Isso significa que você pode **usar, modificar e distribuir** o código livremente, desde que mantenha os créditos ao autor.

---
👨‍💻 Desenvolvido por [Francisco Alecrim Tamberi](https://github.com/franciscoalecrim77)
