# 🐾 Atividade 03 · 2º ano · Landing Page EducaCão (HTML5 e CSS3)

> 📅 **Prazo de entrega: de 30/11 a 04/12.** Trabalhos entregues depois de 04/12 não serão aceitos.

## ⚠️ O que você precisa fazer

| Arquivo | Sua tarefa |
| --- | --- |
| `index.html` | **Preencher** todos os `___` com os textos do `modelo.pdf` (inclusive os `alt` das imagens). |
| `css/style.css` | **Responder** cada propriedade: leia as opções A, B e C e digite o valor certo depois dos `:`. |
| `css/base.css` | **Não mexer.** |
| `banco/banco.sql` | **Completar** os `___` e rodar no Beekeeper para criar o banco e a tabela. |
| `conexao.php` e `salvar.php` | **Completar** os `___` para ligar o formulário de Contato ao banco PostgreSQL. |

Os arquivos já estão soltos neste repositório, **não precisa descompactar nada dentro de outra pasta**.

**PASSO 1:** Clique no botão verde **Code** → **Download ZIP**.

**PASSO 2:** Extraia o ZIP baixado (botão direito → **Extrair tudo**) dentro da sua pasta.

**PASSO 3:** No **VS Code**: **Arquivo → Abrir Pasta** e escolha a pasta extraída (a que tem `index.html`, `css`, `img` e `modelo.pdf`).

**PASSO 4:** Abra o `index.html` com o **Live Server** e comece pelo HTML; depois responda o `style.css` de cima para baixo.

**PASSO 5:** Com a página pronta, faça a parte de **PHP e banco de dados** (seção [🐘 Parte 2](#-parte-2--php-e-banco-de-dados) mais abaixo).

---


> **Você é o(a) desenvolvedor(a) contratado(a) pela EducaCão**, uma empresa fictícia de educação canina. O cliente entregou o arquivo **`modelo.pdf`**, que deve ser reproduzido visualmente no projeto final. Sua missão é montar os textos no HTML e reconstruir o visual com as alternativas do CSS.

## 🎯 Objetivo e resultado esperado

A página final deverá apresentar a **mesma organização e a mesma identidade visual do PDF**: marca em verde com destaque laranja, menu horizontal, banner com foto, três cartões de serviços, seção Sobre, faixa verde-clara de diferenciais, três depoimentos fictícios, contato com formulário e rodapé verde-escuro. **Não é uma atividade de criar cores novas**: neste desafio, a fidelidade ao modelo do cliente será avaliada.

Em `css/style.css`, **uma das três opções de cada questão corresponde ao estilo do modelo**. Os valores precisam ser descobertos observando o PDF, testando e comparando. A resposta correta **não está marcada**.

## 📁 Estrutura obrigatória

```text
Atividade-03-Educacao/
├── index.html                ← complete os ___ do HTML
├── modelo.pdf                ← referência visual do cliente
├── README.md                 ← instruções e regras
├── css/
│   ├── base.css              ← base neutra para a visualização (NÃO EDITAR)
│   └── style.css             ← SEU EXERCÍCIO: preencher alternativas
├── banco/
│   └── banco.sql             ← complete os ___ e rode no Beekeeper
├── config.exemplo.php        ← modelo SEM senha (pronto)
├── conexao.php               ← complete os ___ (abre a conexão)
├── salvar.php                ← complete os ___ (recebe e grava o formulário)
├── testar_conexao.php        ← pronto: mostra "Conexão OK!"
├── .gitignore                ← impede o config.php de ir para o GitHub
└── img/
    ├── golden.avif
    ├── adestrador1.avif
    ├── adestrador2.avif
    ├── adestrador 3.avif
    └── sobre.jpg
```

**Atenção às imagens:** as quatro fotos `*.avif` neste pacote são recortes da referência entregue pelo professor e servem ao exercício. A foto `sobre.jpg` é apenas um espaço reservado: substitua-a por uma foto apropriada, se disponibilizada pelo professor. Preserve os nomes exatos ou atualize os `src` no HTML. Não use uma pasta `img` vazia.

## 🚀 Como abrir no VS Code e ver tudo acontecendo

1. No GitHub, clique em **Code → Download ZIP**.
2. Extraia **toda a pasta**. Não abra somente o `index.html` sem as pastas `css` e `img`.
3. No **VS Code**, use **Arquivo → Abrir Pasta** e escolha o diretório completo.
4. Instale a extensão **Live Server**, se ainda não estiver instalada.
5. Abra `index.html` e clique com o botão direito em **Open with Live Server**.
6. Deixe o navegador ao lado do VS Code. Preencha uma propriedade, aperte **Ctrl + S** e observe imediatamente a mudança. Use **Ctrl + F** para encontrar o seletor no CSS.
7. Compare o navegador com a página correspondente do `modelo.pdf`, revise e só então avance.

> **A página já aparece no início com um visual neutro**, graças ao arquivo `base.css`. Isso é proposital: o design final só surgirá à medida que o aluno preencher `style.css`.

## 🧩 Regras obrigatórias da atividade

1. **Não edite o `css/base.css`**. Ele existe apenas para você enxergar a evolução do trabalho.
2. **Preencha o `css/style.css` de cima para baixo**. Comece pelas variáveis em `:root` (cores e tamanhos), depois `body`, cabeçalho, logo, menu, botões, banner, serviços e demais seções.
3. Em cada propriedade do CSS, **leia as opções A, B e C** e digite **o valor completo escolhido** depois dos `:`. Ex.: `display: flex;`. **Não escreva `display: A;`**.
4. **Não remova o ponto e vírgula (`;`), as chaves `{ }`, os seletores, os comentários explicativos e os blocos `@media`.**
5. **Não adicione regras no final do CSS para esconder erros** e não substitua `style.css` por um CSS pronto. A atividade exige experimentar, corrigir e compreender os comandos.
6. No `index.html`, **substitua todos os `___` por textos coerentes com o PDF**, preservando tags, classes, IDs e caminhos das imagens. Não mude o `href` dos links de navegação.
7. Respeite a ordem de importação: no `<head>`, **`base.css` antes de `style.css`**. Não inverta e não apague as duas linhas.
8. **Preserve a paleta de cores e o layout final do PDF**; versões com cores diferentes não reproduzem a solicitação do cliente.
9. **Teste a página no computador e no celular** (F12 → alternar dispositivo). Ajuste as opções dentro dos blocos `@media` para caber corretamente.
10. Os depoimentos são **fictícios**; mantenha essa identificação. O formulário de Contato será ligado ao banco na **Parte 2**. Não mude os `name` dos campos nem os `value` do `<select>`: o PHP e o banco usam esses nomes.

### Exemplo de preenchimento

```css
/* display: controla como o elemento se organiza.
   A) block
   B) flex
   C) grid
*/
display: ;          /* ANTES: ainda sem resposta */
```

Escolhendo `flex`, o aluno deverá deixar exatamente:

```css
display: flex;      /* DEPOIS: um valor CSS, não a letra B */
```

**Observação importante sobre as variáveis:** preencher `background: var(--green);` só mostrará a cor esperada depois que `--green` tiver um valor válido em `:root`. Por isso, comece pela paleta; não significa que a ligação do CSS esteja quebrada.

## 🗺️ Ordem de trabalho recomendada

| Etapa | Seção no HTML / CSS | Observe no navegador |
| --- | --- | --- |
| 1 | `:root`, `body`, `img`, `a`, `ul` | Cores, fonte, margens e imagens |
| 2 | `.site-header`, `.logo`, `.main-nav` | Cabeçalho e menu distribuídos |
| 3 | `.button`, `.button-primary`, `.button-secondary` | Botões laranja e verde |
| 4 | `.hero`, `.hero-content`, `.hero-image` | Banner com texto e foto lado a lado |
| 5 | `.section`, `.services`, `.service-grid`, `.service-card` | Três cartões em linha em tela grande |
| 6 | `.about`, `.benefits`, `.benefit-grid` | História e faixa verde-clara |
| 7 | `.testimonial-grid`, `.contact`, `.contact-form` | Depoimentos e formulário |
| 8 | `.site-footer`, `.social-links` | Rodapé verde-escuro |
| 9 | `@media` de 980px e 700px | Versão responsiva |

## 🔧 Se você preencher e não aparecer

- Confira se **salvou com Ctrl+S** e se o Live Server está aberto.
- Verifique o arquivo certo: edite **`css/style.css`**, não `css/base.css`.
- Confirme se o HTML contém **duas** referências a CSS e se a ordem está correta.
- Ao usar `var(--nome)`, confira se a variável do `:root` já foi preenchida corretamente.
- Confira se a propriedade tem `:` e `;` e se as chaves `}` dos blocos estão equilibradas.
- No navegador, use **F12 → Network** e verifique se CSS e imagens não apresentam erro **404**.
- O comando correto pode produzir uma mudança pequena ou só ser visível ao passar o mouse (`:hover`) ou em tela pequena (`@media`).
- Use **Ctrl + Shift + R** para atualizar sem cache, se necessário.

## 🐘 Parte 2 · PHP e banco de dados

Agora o formulário de Contato vai **gravar de verdade** no PostgreSQL. O caminho dos dados é:

```text
formulário (index.html) → salvar.php → conexao.php (usa o config.php) → PostgreSQL (tabela contatos)
```

No laboratório o **PostgreSQL** e o **Beekeeper Studio** já estão instalados. O **PHP** você instala no passo 1.

> Cada `___` dos arquivos tem uma linha **DICA** logo acima dizendo onde achar a resposta. Quase tudo está no seu `index.html`: use **Ctrl + F** e procure `name="` e `value="`.

### 1. Instalar o PHP (Windows)

1. Baixe o PHP em **windows.php.net/download** → versão **VS17 x64 Non Thread Safe**, arquivo **Zip**.
2. Extraia em uma pasta, por exemplo `C:\php` (ou `Downloads\php`, se não puder usar o `C:\`).
3. Dentro dessa pasta, copie `php.ini-development` e renomeie a cópia para **`php.ini`**.
4. Abra o `php.ini` no VS Code e, com **Ctrl + F**, deixe estas linhas assim (tire o `;` do começo):
   ```ini
   extension_dir = "ext"
   extension=pdo_pgsql
   extension=pgsql
   extension=mbstring
   ```
   Se der erro de extensão não encontrada, troque `"ext"` pelo caminho completo, ex.: `"C:\php\ext"`.
5. Teste no terminal do VS Code: `C:\php\php.exe -v` (use o caminho da sua pasta). Tem que aparecer `PHP 8...`.

> Se o comando `php` sozinho der **"não é reconhecido"**, é porque o PHP não está no PATH do Windows. Sem problema: use sempre o caminho completo, como `& "C:\php\php.exe" -S localhost:8000`.

### 2. Criar o banco no Beekeeper (`banco/banco.sql`)

1. Complete os `___` do `banco/banco.sql`.
2. No Beekeeper, conecte no PostgreSQL (`localhost`, porta `5432`, usuário `postgres` e a senha do laboratório).
3. Rode **uma parte por vez**: selecione o trecho com o mouse e aperte **Ctrl + Enter**.
   - **Parte 1** (conectado no banco `postgres`): cria o banco `educacao`.
   - **Troque para o banco `educacao`** (seletor de banco no topo do Beekeeper) antes da Parte 2.
   - **Parte 2**: cria a tabela `contatos`. **Parte 3**: grava uma linha de teste e mostra com `SELECT`.

### 3. Criar o `config.php` (a senha fica só nele)

1. Copie o `config.exemplo.php` e renomeie a **cópia** para **`config.php`**.
2. No `config.php`, troque `SUA_SENHA_AQUI` pela senha do PostgreSQL.
3. O `.gitignore` já tem a linha `config.php`: **a senha nunca vai para o GitHub**. Não apague o `.gitignore`.

### 4. Completar `conexao.php` e `salvar.php`

| Arquivo | O que faz |
| --- | --- |
| `conexao.php` | Lê o `config.php` e abre a conexão com o banco (`$pdo`). |
| `salvar.php` | **1. Recebe** os campos do formulário · **2. Confere** se estão certos · **3. Grava** na tabela `contatos`. |
| `testar_conexao.php` | Já vem pronto. Serve para testar a conexão antes do formulário. |

O `<form>` do `index.html` já vem pronto apontando para o PHP: `action="salvar.php" method="post"`. Não mude.

### 5. Ligar o servidor do PHP e testar

O **Live Server não executa PHP**. No VS Code abra **Terminal → New Terminal** (na pasta do projeto) e rode:

```powershell
& "C:\php\php.exe" -S localhost:8000
```

Deixe esse terminal aberto e, no navegador:

1. `http://localhost:8000/testar_conexao.php` → tem que aparecer **Conexão OK!** e a tabela `contatos` encontrada.
2. `http://localhost:8000/index.html` → preencha o Contato e clique em **Enviar mensagem**.

Faça estes testes:

| Teste | O endereço volta terminando em | Grava no banco? |
| --- | --- | --- |
| Tudo preenchido certo | `?enviado=1#contato` | sim |
| Tudo vazio | `?erro=nome,email,servico,mensagem#contato` | não |
| F12: mude o `value` de uma `<option>` para outro texto e envie | `?erro=servico#contato` | não |
| Nome: `Robert'); DROP TABLE contatos;--` | `?enviado=1#contato` | grava como texto; a tabela continua lá |
| Abrir `localhost:8000/salvar.php` direto | `index.html#contato` | não |

Confira no Beekeeper (banco `educacao`): `SELECT * FROM contatos ORDER BY id;` Cada envio é uma linha nova.

### 🔧 Se der erro no PHP

| O que aparece | O que fazer |
| --- | --- |
| `'php' não é reconhecido` | Use o caminho completo: `& "C:\php\php.exe" -S localhost:8000`. |
| `could not find driver` | No `php.ini`, tire o `;` de `extension=pdo_pgsql` e `extension=pgsql` e reinicie o `php -S`. |
| `Não foi possível conectar ao banco de dados.` | Confira senha, banco (`educacao`) e porta no `config.php`. O detalhe do erro aparece no terminal do `php -S`. |
| `Failed opening required ... config.php` | Falta criar o `config.php` (copie o `config.exemplo.php`). |
| A página baixa o arquivo `.php` ou mostra o código | Você abriu pelo Live Server. Use `http://localhost:8000/...`. |
| `A tabela contatos não existe` | Rode a Parte 2 do `banco.sql` **no banco `educacao`**. |
| Volta com `?erro=banco` | A tabela recusou os dados: confira se os nomes das colunas e os valores do `CHECK` estão iguais aos do formulário. |

## ✅ Entrega e critérios de avaliação

📅 **Entregar entre 30/11 e 04/12.**

Entregue a pasta ou publique o trabalho no **seu repositório do GitHub** com:

- [ ] `index.html` com todos os textos e atributos `alt` preenchidos;
- [ ] `css/style.css` com as alternativas resolvidas, sem `: ;` nas declarações;
- [ ] `css/base.css` preservado, sem mudanças;
- [ ] imagens da pasta `img/` carregando corretamente;
- [ ] cores, tamanhos e composição coerentes com as duas páginas de `modelo.pdf`;
- [ ] alinhamento correto de menu, três serviços, diferenciais, depoimentos, formulário e rodapé;
- [ ] versão responsiva testada no celular;
- [ ] imagem da página pronta (captura de tela) comparada ao PDF;
- [ ] `banco/banco.sql`, `conexao.php` e `salvar.php` sem nenhum `___`;
- [ ] `testar_conexao.php` mostrando **Conexão OK!**;
- [ ] os 5 testes da tabela da Parte 2 funcionando;
- [ ] captura de tela do Beekeeper com o `SELECT * FROM contatos` mostrando os seus envios;
- [ ] **sem** o `config.php` no GitHub (só o `config.exemplo.php`).

**Sugestão de critérios (100 pontos):** HTML e textos 20; preenchimento correto das propriedades CSS 30; fidelidade visual e cores 25; responsividade 15; organização, arquivos e publicação 10.

Para entregar no GitHub: crie um repositório próprio, envie **toda** a pasta do projeto e mantenha os nomes dos arquivos. Na descrição da atividade, mencione o professor no formato `@eduardo97mendes` (marcação em texto) e adicione uma captura de tela da página pronta.

