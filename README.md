# Projeto (SaaS) Costura Talentos

O projeto tem como objetivo conectar, costureiras, faccionistas, modelistas, alfaiates, etc, a empresas que diariamente necessitam destes profissionais, seja dentro da empresa ou como freelance. [www.costuratalentos.com.br](http://www.costuratalentos.com.br)

- **Requisitos de sistema**
    - Backend Laravel
        - Docker
            - Banco de Dados: MySql
                - `users`- Para Administradores (do Laravel)
                - `fashion_professionals`(dados dos profissionais)
                - `fashion_companies`(dados das empresas)
                - `fashion_phones` (telefones dos profissionais e das empresas)
                - `fashion_social_media` (redes sociais dos profissionais e das empresas)
                - `fashion_segments` (segmentos da moda das empresas)
                - `fashion_company_segments` (segmentos em que uma empresa esta inserido)
                - `fashion_professional_specialization` (lista de especializações)
                - `fashion_industrial_machines` (lista de maquinas industriais)
                - `fashion_vacancies` (vagas adicionadas pelas empresas)
                - `fashion_machines_vacancies` (maquinas exigidas nas vagas)
        - Testes
    - FrontEnd Blade Laravel
        - Tailwindcss
        - Javascritp ECMA

- **Hierarquia do Sistema**
    - **Área de Busca**
        - *Busca por profissional*
            - Filtros
                - Cidade
                - Bairro
                - Estado
                - Tipo de profissional (alfaite, costureira(o), modelista, faccionista, designer, etc )
                - Especialidades do profissional
                - Tempo de experiencia
                - Valor de pagamento (hora ou mês)
                - Faixa de Expectativa de ganho
        - *Busca por oportunidades (profissional)*
            - Filtros
                - Cidade
                - Bairro
                - Estado
                - Tempo de experiencia
                - Valor de pagamento (hora ou mês)
                - Faixa de Expectativa de ganho
    - Home
    - Sobre
    - Contato
    - Apoie o Projeto (avaliar)
    - **Área de profissionais**
        - Avatar/Foto
        - Nome
        - Endereço (Cep, Rua, Bairro, Cidade, Estado)
        - Que tipo de profissional (criaremos uma tabela para armazenar os profissionais )
            - Se for costureira(o), prefere trabalhar como?
                - Na empresa (CLT/PJ)
                - Diarista (PJ)
                - Facção (PJ)
                    - Que maquinas a facção possui (criaremos uma tabela para armazenar as principais máquinas)
                    - Endereço da facção
        - Diárias
        - Quanto tempo trabalha na área
        - Sua experiencia (fale um de você)
        - Valor Hora ou Valor Mês
    - **Área de empresas**
        - Logo
        - Nome
        - Endereço (Cep, Rua, Bairro, Cidade, Estado)
        - Que regime de contratação
            - CLT ou PJ
                - Para trabalhar na empresa?
                - Diarista
                - Faccionista
            - Forma de remuneração?
                - Hora
                    - Valor
                - Mensal
                    - Valor mensal
            - Que tipo de profissional que contratar (alfaite, costureira(o), modelista, faccionista, designer, etc )
            - Quanto tempo de experiencia

#
# Estrutura de Banco Dados para o Site Costura Talentos (SaaS)


### Tabela: `fashion_professionals`

- **id**: Identificação única do profissional.
- **uuid**: Identificação aberta e única do profissional (tem que criar um observer para gerar o UUID).
- **avatar**: Foto do profissional (opcional)
- **name**: Nome completo do profissional.
- **password**: Senha do profissional.
- **email**: Endereço de e-mail do profissional (unique).
- **zip_code**: Cep do profissional
- **address**: Endereço do profissional
- **number**: Número do endereço do profissional
- **neighborhood**: Bairro do profissional
- **complement**: Complemento do endereço (opcional)
- **city**: Cidade onde o profissional está localizado.
- **state**: Estado ou região onde o profissional está localizado.
- **id_area_of_specialization**: ID relacionado a tabela especialização do profissional (por exemplo, costureiro, estilista, modelista, etc.).
- **experience**: Descrição da experiência e habilidades do profissional.
- **portfolio**: Link para o portfólio online do profissional (opcional).
- **curriculum**: Link para o currículo do profissional (opcional).
- **time_experience**: Tempo de experiencia do profissional (opcional)
- **prefer_to_work_where**: Prefere trabalhar onde (dentro da empresa/diarista/horista/mensal/faccionista)
- **hiring_regime**: Regime de contratação preferido (PJ, CLT, Qualquer um)
- **form_of_remuneration**: Forma de remuneração do profissional, hora/diaria/mês (opcional)
- **remuneration_value**: Valor da remuneração esperada pelo profissional (opcional)
- **is_active**: Ativa ou desativa um registro.
- **created_at**: Data de criação (automático no laravel).
- **updated_at**: Data de atualização (automático no laravel).
- **deleted_at**: Data que foi apagado (automático no laravel com Softdelets).


### Tabela: `fashion_companies`

- **id**: Identificação única da empresa.
- **uuid**: Identificação aberta e única da empresa.
- **logo**: Logo da empresa (opcional).
- **corporate_reason**: Nome da empresa.
- **email**: E-mail de contato da empresa.
- **password**: Senha da empresa.
- **zip_code**: Cep do profissional
- **address**: Endereço do profissional
- **number**: Número do endereço do profissional
- **complement**: Complemento do endereço (opcional)
- **city**: Cidade onde o profissional está localizado.
- **state**: Estado ou região onde o profissional está localizado.
- **fashion_segment**: Setor da moda em que a empresa atua (por exemplo, moda feminina, moda masculina, moda infantil, etc.).
- **company_size:** Porte da empresa (Grande, Média, Pequena)
- **description**: Descrição da empresa, sua história e atividades.
- **website**: Website da empresa.
- **is_active**: Ativa ou desativa um registro.
- **created_at**: Data de criação (automático no laravel).
- **updated_at**: Data de atualização (automático no laravel).
- **deleted_at**: Data que foi apagado (automático no laravel com Softdelets).

##
# Tabelas Relacionadas

### Tabela: `fashion_phones`

- **id**: Id de identificação único.
- **uuid**: Identificação aberta e única da do telefone.
- **id_relationship**: Id que relaciona com o ID do profissional ou ID da empresa.
- **type_relationship**: Id que identifica se é um telefone de profissional ou de empresa.
- **type_phone**: Se é celular, fixo, WhatsApp.
- **phone**: Número do telefone sem formatação.
- **is_main**: É o telefone principal.
- **is_active**: Ativa ou desativa um registro.
- **created_at**: Data de criação (automático no laravel).
- **updated_at**: Data de atualização (automático no laravel).
- **deleted_at**: Data que foi apagado (automático no laravel com Softdelets).

### Tabela: `fashion_social_media`

- **id**: Id de identificação único.
- **uuid**: Identificação aberta e única da do rede social.
- **id_relationship**: Id que relaciona com o ID do profissional ou ID da empresa.
- **name_social_media**: Nome da rede social
- **link_social_media**: Rede social da empresa ou profissional
- **is_active**: Ativa ou desativa um registro.
- **created_at**: Data de criação (automático no laravel).
- **updated_at**: Data de atualização (automático no laravel).
- **deleted_at**: Data que foi apagado (automático no laravel com Softdelets).

### Tabela: `fashion_vacancies`

- **id**: Id de identificação único.
- **uuid**: Identificação aberta e única da para vaga.
- **id_relationship**: Id que relaciona com o ID da empresa que disponibilizou a vaga.
- **id_area_of_specialization**: ID da área de especialização que é a vaga
- **time_experience**: Requer experiencia (tempo mínimo, se vazio não requer)
- **work_where**: Para trabalhar (Mensalista/Diarista/Horista)
- **remuneration_value**: Valor da remuneração (opcional, se vazio não mostrar)
- **hiring_regime**: Regime de contratação preferido (PJ, CLT, Qualquer um)
- **activities_and_responsibilities**: Atividades e Responsabilidades da vaga
- **requirements**: Requesrimentos para a vaga
- **is_active**: Ativa ou desativa um registro.
- **created_at**: Data de criação (automático no laravel).
- **updated_at**: Data de atualização (automático no laravel).
- **deleted_at**: Data que foi apagado (automático no laravel com Softdelets).

### Tabela: `fashion_machines_vacancies`

- **id**: Id de identificação único.
- **id_vacancies**: Id que relaciona com o ID da vaga.
- **id_industrial_machines**: ID da da máquina exigida para a vaga
- **is_active**: Ativa ou desativa um registro.
- **created_at**: Data de criação (automático no laravel).
- **updated_at**: Data de atualização (automático no laravel).
- **deleted_at**: Data que foi apagado (automático no laravel com Softdelets).

### Tabela: `fashion_companies_segments`

- **id**: Id de identificação único.
- **fashion_company_od**: Id que relaciona com o ID da empresa.
- **fashion_segment_id**: ID do segmento relacionado
- **is_active**: Ativa ou desativa um registro.
- **created_at**: Data de criação (automático no laravel).
- **updated_at**: Data de atualização (automático no laravel).
- **deleted_at**: Data que foi apagado (automático no laravel com Softdelets).

### Tabela: `fashion_professional_applied`
- **id**: Id de identificação.
- **professional_id**: Id do profissional que se candidatou a vaga.
- **company_id**: ID da empresa que criou a vaga.
- **is_active**: Define se esta ou não ativo.
- **created_at**: Data de criação (automático no laravel).
- **updated_at**: Data de atualização (automático no laravel).
- **deleted_at**: Data que foi apagado (automático no laravel com Softdelets).

##
# Tabelas Auxiliares

### Tabela: `fashion_professional_specialization`

***Referencia:*** [Profissões na área da moda | Indeed.com Brasil](https://br.indeed.com/conselho-de-carreira/encontrando-emprego/profissoes-area-moda#:~:text=A%20%C3%A1rea%20da%20moda%20pode,estampas%2C%20etiquetas%20e%20aviamentos)

- **id**: Id de identificação único.
- **uuid**: Identificação aberta e única da do especialização.
- **specialization**: Nome da especialização.
- **description**: Descrição da especialização.
- **is_active**: Ativa ou desativa um registro.
- **created_at**: Data de criação (automático no laravel).
- **updated_at**: Data de atualização (automático no laravel).
- **deleted_at**: Data que foi apagado (automático no laravel com Softdelets).

### Tabela: `fashion_industrial_machines`

***Referencias:*** [Tipos de máquinas industriais utilizadas nas confecções - (audaces.com)](https://audaces.com/pt-br/blog/tipos-de-maquinas-industriais-utilizadas-nas-confeccoes)[10 tipos de máquinas de costura mais utilizados | Artigos | Cursos a Distância CPT](https://www.cpt.com.br/artigos/10-tipos-de-maquinas-de-costura-mais-utilizados)

- **id**: Id de identificação único.
- **machines**: Nome da maquina.
- **description**: Descrição da maquina.
- **image**: Foto da maquina.
- **is_active**: Ativa ou desativa um registro.
- **created_at**: Data de criação (automático no laravel).
- **updated_at**: Data de atualização (automático no laravel).
- **deleted_at**: Data que foi apagado (automático no laravel com Softdelets).

### Tabela: `fashion_segments`

- **id**: Id de identificação único.
- **segment**: Nome do segmento.
- **description**: Descrição do segmento.
- **is_active**: Ativa ou desativa um registro.
- **created_at**: Data de criação (automático no laravel).
- **updated_at**: Data de atualização (automático no laravel).
- **deleted_at**: Data que foi apagado (automático no laravel com Softdelets).

##
# Trait para Filtros

### Filtros de Busca para Profissionais

- **Cidade**: Opção para filtrar por cidade.
- **Estado**: Opção para filtrar por estado.
- **Bairro**: Opção para filtrar por bairro.
- **Área de Especialização**: Opção para filtrar por especialização.
- **Experiência**: Opção para filtrar por níveis de experiência.
- **Tipo Valor Pagamento**: Opção para filtrar por tipo de valor (hora/mês/diária).
- **Remuneração esperada**: Opção para filtrar por faixa de valor que o profissional espera ganhar.

### Filtros de Busca para Empresas

- **Cidade**: Opção para filtrar por cidade.
- **Estado**: Opção para filtrar por estado.
- **Bairro**: Opção para filtrar por bairro.
- **Segmento da Moda**: Opção para filtrar por setor da moda.
- **Experiência**: Opção para filtrar por níveis de experiência.
- **Tipo Valor Pagamento**: Opção para filtrar por tipo de valor (hora/mês/diária).
- **Remuneração oferecida**: Opção para filtrar por faixa de valor que o profissional espera ganhar.
