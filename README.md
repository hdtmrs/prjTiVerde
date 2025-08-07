
# 🌱 Projeto Laravel - TI Verde com Checkout Stripe

![Banner TI Verde](https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1350&q=80)

[![Build Status](https://img.shields.io/badge/build-passing-brightgreen)](https://github.com/seu-usuario/seu-repo/actions) 
[![PHP Version](https://img.shields.io/badge/php-%3E=8.0-8892BF)](https://www.php.net/)
[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)

Este repositório contém um projeto **exclusivamente em Laravel** voltado para conscientização sobre **TI Verde** e seus benefícios.  
O sistema apresenta uma tela explicativa sobre o que é TI Verde, destacando suas vantagens e incentivando práticas tecnológicas mais sustentáveis.

Além disso, o projeto oferece a opção de **contribuir com a causa** por meio de um botão de doação.  
Ao clicar, o usuário é redirecionado para uma tela de **checkout** utilizando a integração com o **Stripe**.

---

## 🚀 Funcionalidades

- Página explicativa sobre **TI Verde** 📄  
- Botão de contribuição 💚  
- Integração de checkout com **Stripe** 💳  
- Estrutura **100% Laravel**

---

## 📂 Estrutura do Projeto

```
/app
/config
/database
/public
/resources
/routes
```

---

## 🛠️ Tecnologias Utilizadas

- **Laravel** (Framework PHP)  
- **Stripe API** (Checkout de pagamentos)  
- **Blade** (Template engine do Laravel)  
- **Bootstrap** (Estilização básica)

---

## 📦 Como Executar o Projeto

1. Clone este repositório:  
```bash
git clone https://github.com/seu-usuario/seu-repo.git
```

2. Instale as dependências:  
```bash
composer install
```

3. Configure o arquivo `.env`:  
- Configure seu banco de dados  
- Adicione suas credenciais do Stripe:  
```
STRIPE_KEY=your_stripe_key
STRIPE_SECRET=your_stripe_secret
```

4. Gere a chave da aplicação:  
```bash
php artisan key:generate
```

5. Execute as migrações:  
```bash
php artisan migrate
```

6. Inicie o servidor:  
```bash
php artisan serve
```

---

## 🤝 Contribuindo

Sinta-se à vontade para contribuir com melhorias!  
Basta criar um **Pull Request** ou abrir uma **Issue**.

---

## 📜 Licença

Este projeto está sob a licença MIT.  
Consulte o arquivo [LICENSE](LICENSE) para mais detalhes.
