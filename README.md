# The Code Strikers

Somos o grupo The Code Strikers do curso de Full Stack da Digital House no ano de 2018, que tem como objetivo fazer um projeto integrador de E-Comerce

---

# Integrantes
- **Liu**
- **Marcelo**
- **Michael**

---

# Sprint 01 - de 04/06 a 18/06

Task: **Home, FAQ, Login e cadastro** 

Linguagem usada: **HTML+CSS**

- **P.O:** Michael
- **Scrum Master:** Liu
- **Dev:** Marcelo

> **Observações :** 

---

# Sprint 02 - de 18/06 a 09/07

Task: 1 - **Login e o cadastro funcionem** 2 - **Incluir a página de produtos com categorias e marcas** 3 - **Incluir Barra de busca**

Linguagem usada: **PHP & HTML+CSS**

- **P.O:** Marcelo
- **Scrum Master:** Michael
- **Dev:** Liu 

> **Observações :** 
---

# Sprint 03 - de 09/07 a 23/07

Task: 1 - **Login e o cadastro funcionem** 2 - **Incluir a página de produtos com categorias e marcas** 3 - **Incluir Barra de busca**

Linguagem usada: **SQL**

- **P.O:** Liu 
- **Scrum Master:**  Marcelo
- **Dev:** Michael

> **Observações :** 
---

# Sprint 04 - de 23/07 a 06/08

Task: **Código de Login e cadastro organizado com classes.**

Linguagem usada: **OOP**

- **P.O:** Michael
- **Scrum Master:** Liu 
- **Dev:** Marcelo

> **Observações :** 
---

# Sprint 05 - de 06/08 a 20/08

Task: **Migrar para Laravel,** ou seja: Migrar **login, cadastro e páginas do respectivo sistema.**

Linguagem usada: **Laravel**

- **P.O:** Marcelo
- **Scrum Master:** Michael
- **Dev:** Liu 

> **Observações :** 
---

# Sprint 06 - de 20/08 a 03/09

Task: 1 - **Aplicar AJAX no formulário de login e cadastro** ou seja: Migrar **login, cadastro e páginas do respectivo sistema.** 2 - **Inserir validação no login e no cadastro**

Linguagem usada: **JavaScript**

- **P.O:** Liu
- **Scrum Master:** Marcelo
- **Dev:** Michael

> **Observações :** 
# Funções da pagina Admin(dashboard)
**Cadastro para admin não disponivel na view**

Admin é gerado de formato padrão com nome: **Admin Master** email: **admin@example.org** senha:secret

Para cadastrar o Admin no banco de dados use o comando **php artisan db:seed** após ter rodado o comando **migrate**

Para cadastrar um novo usuario siga os seguintes passos em ordem 

- **1:** Rodar o php artisan tinker
- **2:** Definir uma variavel para 'new App\Admin', Exemplo: '$admin = new App\Admin'
- **3:** Preencher os campos chamando o a variavel Exemplo: '$admin->first_name = Adm' campos á serem preenchidos 'first_name - last_name - email - password'
- **4:** Para fazer hash password user o seguinte metodo '$admin->password = Hash::make('senha')'
- **5:** Salve os campos com a função save() Exemplo: '$admin->save()'

> **Observações :** senha deve conter no minimo 5 caracteres

---
