# Envio de E-mail com Laravel

Este projeto Laravel é uma demonstração do envio de e-mails e da utilização de filas para um processamento eficiente de trabalhos em segundo plano. Ele inclui os seguintes recursos:

- **Envio de E-mail:** Demonstra como enviar e-mails usando a funcionalidade de e-mail integrada do Laravel.
- **Gerenciamento de filas:** Utiliza o sistema de filas da Laravel para lidar com tarefas demoradas, garantindo uma experiência de usuário mais suave.
- **Processamento de trabalhos:** Ilustra o processo de envio de trabalhos para filas e processamento em segundo plano.
  
## 🚀 Começando

Para iniciar este projeto, execute estas etapas:

1. Clone o repositório.
2. Instale dependências usando o Composer: `composer install`.
3. Configure suas variáveis de ambiente, incluindo configuração de email e configurações de conexão de fila.
4. Migre o banco de dados: `php artisan migrate`.
5. Inicie a fila: `php artisan queue:work`.
6. Você está pronto para enviar e-mails e processar trabalhos em segundo plano!

## 🛠️ Construído com

* [Laravel](https://laravel.com) - O framework web usado
* [Composer](https://getcomposer.org/) - Gerente de Dependência
* [PHP 8.2](https://www.php.net/releases/8.2/en.php) - Linguagem de Programação e sua versão

---
⌨️ por [Samuel Feijó](https://github.com/SamuelFeijo19)
