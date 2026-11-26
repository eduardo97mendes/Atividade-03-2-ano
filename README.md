# 🐾 Atividade 03 · 2º ano · EducaCão: HTML, CSS, PHP e banco de dados

> 📅 **Prazo de entrega: de 30/11 a 04/12.** Trabalhos entregues depois de 04/12 não serão aceitos.

Você é o(a) desenvolvedor(a) contratado(a) pela **EducaCão**: monte a landing page **igual ao `modelo.pdf`** e depois ligue o formulário de **Contato** ao banco de dados com **PHP**.

## 📘 Siga os PDFs da pasta `explicacao/`, na ordem

**O passo a passo está nos PDFs**, com prints marcando onde clicar e o que preencher:

| Ordem | Arquivo | O que você faz |
| --- | --- | --- |
| 1 | **`explicacao/1_HTML_e_CSS.pdf`** | Preencher os textos do `index.html` e as alternativas do `css/style.css`. O PDF explica cada regra do CSS, na ordem do código. |
| 2 | **`explicacao/2_PHP_e_Banco_de_Dados.pdf`** | Instalar o PHP, criar o banco no Beekeeper (`banco/banco.sql`), criar o `config.php` e completar `conexao.php` e `salvar.php`. |

> No fim do PDF 2 há uma página **"Se der erro"**. Os PDFs mostram as respostas, mas o objetivo é **entender**: tente primeiro e use quando travar.

## 🚀 Para começar

1. Clique no botão verde **Code** → **Download ZIP**.
2. Extraia o ZIP (botão direito → **Extrair tudo**).
3. No **VS Code**: **File → Open Folder** e escolha a pasta extraída (a que tem `index.html`, `css`, `img` e `modelo.pdf`).
4. Instale a extensão **Live Server**, abra o `index.html` e clique com o botão direito em **Open with Live Server**. Deixe o navegador ao lado do VS Code: a cada **Ctrl + S** a página muda.

**Como completar:**
- **`index.html`:** troque cada `___` pelo texto do `modelo.pdf` (inclusive os `alt` das imagens).
- **`css/style.css`:** de cima para baixo, leia as opções **A, B e C** de cada propriedade e digite o **valor** (ex.: `display: flex;`, não `display: B;`). Comece pelo `:root`.
- **`css/base.css`:** **não mexer**.
- **PHP e SQL** (depois da página pronta, seguindo o **PDF 2**): a linha **DICA** logo acima de cada `___` diz onde achar a resposta.

> ⚠️ A senha do banco fica só no `config.php`, que **nunca vai para o GitHub**. Não apague o arquivo `.gitignore`.

## 🎨 Personalização (opcional, depois de ficar igual ao modelo)

Você pode trocar **cores** (no `:root`), **imagens** e **textos**. **Não mude a estrutura**: tags, classes, IDs, a ordem das seções, os blocos `@media`, os `name` do formulário e os `value` do `<select>` (o PHP e o banco usam esses nomes). O resultado tem que continuar parecido com o `modelo.pdf`.

## ✅ Entrega · de 30/11 a 04/12

Publique no **seu repositório do GitHub**:

- [ ] `index.html`, `css/style.css`, `banco/banco.sql`, `conexao.php` e `salvar.php` sem nenhum `___`;
- [ ] a página parecida com o `modelo.pdf` e funcionando no celular;
- [ ] `testar_conexao.php` mostrando **Conexão OK!** e o formulário de Contato gravando no banco;
- [ ] prints da página pronta e do Beekeeper com `SELECT * FROM contatos`;
- [ ] **sem** o `config.php` (só o `config.exemplo.php`).

### 📤 Como postar e me avisar

1. No GitHub, clique em **+** → **New repository**, nome `atividade-03-educacao-SEU-NOME`, **Public** → **Create repository**.
2. Clique em **uploading an existing file**, arraste **tudo o que está dentro da pasta do projeto** e clique em **Commit changes**.
3. Abra **https://github.com/eduardo97mendes/Atividade-03-2-ano/issues/new** e preencha:
   - **Título:** `Entrega Atividade 03 - Seu Nome Completo - 2º ano`
   - **Texto:** o **link do seu repositório** e **@eduardo97mendes** (assim eu recebo a notificação).
4. Clique em **Submit new issue**.

> Não conseguiu abrir a Issue? Me envie o **link do seu repositório pelo WhatsApp**.

## 🏠 Faltou à aula ou é aluno do RAD?

- **Termine em casa** seguindo os PDFs, publique no seu GitHub e envie o **link do repositório** pela **Issue** e/ou pelo **WhatsApp**.
- Se o projeto **não foi mostrado funcionando no laboratório**, grave um **vídeo da tela** (2 a 5 minutos):
  - no começo, diga **seu nome completo, a disciplina e a turma**;
  - mostre **o que você fez** nos arquivos e **o site funcionando**, do topo ao rodapé.
  - Para gravar: **Windows + Alt + R**, ou **Windows + Shift + S** e o ícone de vídeo. O gravador de tela do celular também serve.
  - Envie o vídeo pelo **WhatsApp** ou coloque o link (Google Drive ou YouTube não listado) na Issue.
