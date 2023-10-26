<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    // - **uuid**: Identificação aberta e única do profissional (tem que criar um observer para gerar o UUID).
    // - **avatar**: Foto do profissional (opcional)
    // - **name**: Nome completo do profissional.
    // - **password**: Senha do profissional.
    // - **email**: Endereço de e-mail do profissional (unique).
    // - **zip_code**: Cep do profissional
    // - **address**: Endereço do profissional
    // - **number**: Número do endereço do profissional
    // - **neighborhood**: Bairro do profissional
    // - **complement**: Complemento do endereço (opcional)
    // - **city**: Cidade onde o profissional está localizado.
    // - **state**: Estado ou região onde o profissional está localizado.
    // - **id_area_of_specialization**: ID relacionado a tabela especialização do profissional (por exemplo, costureiro, estilista, modelista, etc.).
    // - **experience**: Descrição da experiência e habilidades do profissional.
    // - **portfolio**: Link para o portfólio online do profissional (opcional).
    // - **curriculum**: Link para o currículo do profissional (opcional).
    // - **time_experience**: Tempo de experiencia do profissional (opcional)
    // - **prefer_to_work_where**: Prefere trabalhar onde (dentro da empresa/diarista/horista/mensal/faccionista)
    // - **hiring_regime**: Regime de contratação preferido (PJ, CLT, Qualquer um)
    // - **form_of_remuneration**: Forma de remuneração do profissional, hora/diaria/mês (opcional)
    // - **remuneration_value**: Valor da remuneração esperada pelo profissional (opcional)
    // - **is_active**: Ativa ou desativa um registro.
    // - **created_at**: Data de criação (automático no laravel).
    // - **updated_at**: Data de atualização (automático no laravel).
    // - **deleted_at**: Data que foi apagado (automático no laravel com Softdelets).

    public function up(): void
    {
        Schema::create('fashion_professionals', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('avatar')->nullable();
            $table->string('name');
            $table->string('password');
            $table->string('email')->unique();
            $table->integer('zip_code', 8);
            $table->string('address');
            $table->string('number');
            $table->string('neighborhood');
            $table->string('complement')->nullable();
            $table->string('city');
            $table->string('name_state');
            $table->string('acronym_state', 2);
            $table->text('experience');
            $table->string('portifolio_url');
            $table->string('curriculum_url');
            $table->integer('time_experience')->default(0);
            $table->string('prefer_to_work_where')->default('companies');
            $table->string('hiring_regime')->default('CLT');
            $table->string('form_of_remuneration')->default('month');
            $table->integer('remuneration_value');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fashion_professionals');
    }
};
