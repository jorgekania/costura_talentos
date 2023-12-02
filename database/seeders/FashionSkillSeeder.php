<?php

namespace Database\Seeders;

use App\Models\FashionSkill;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FashionSkillSeeder extends Seeder
{
    public function run(): void
    {
        $skills = [
            ["skill" => "Pensamento crítico"],
            ["skill" => "Criatividade"],
            ["skill" => "Aprendizado contínuo"],
            ["skill" => "Autonomia"],
            ["skill" => "Comunicação"],
            ["skill" => "Adaptabilidade"],
            ["skill" => "Flexibilidade"],
            ["skill" => "Perfil analítico/visão estratégica"],
            ["skill" => "Senso de dono/visão do negócio"],
            ["skill" => "Resiliência"],
            ["skill" => "Relacionamento interpessoal"],
            ["skill" => "Alinhamento cultural"],
            ["skill" => "Inteligência emocional"],
            ["skill" => "Pensamento criativo"],
            ["skill" => "Autoconfiança"],
            ["skill" => "Proatividade"],
            ["skill" => "Trabalho em equipe"],
            ["skill" => "Conhecimento técnico e aprendizado contínuo"],
            ["skill" => "Liderança"],
            ["skill" => "Foco em resultados"],
            ["skill" => "Pensamento de dono"],
            ["skill" => "Flexibilidade e capacidade de se adaptar a mudanças"],
            ["skill" => "Resiliência profissional"],
            ["skill" => "Capacidade de trabalhar remotamente"],
            ["skill" => "Comprometimento"],
            ["skill" => "Capacidade de inovação"],
            ["skill" => "Autoconfiança e autoconhecimento"],
            ["skill" => "Iniciativa"],
            ["skill" => "Competitividade"],
            ["skill" => "Visão no cliente"],
            ["skill" => "Compreensão interpessoal e empatia"],
            ["skill" => "Capacidade de liderança"],
            ["skill" => "Persuasão"],
            ["skill" => "Trabalho em Equipe"],
            ["skill" => "Visão do negócio"],
            ["skill" => "Flexibilidade e adaptação a mudanças"],
            ["skill" => "Capacidade de trabalho remoto"],
            ["skill" => "Organização"],
            ["skill" => "Colaboração"],
            ["skill" => "Receptividade a feedback"],
            ["skill" => "Negociação"],
            ["skill" => "Pacote Office"],
            ["skill" => "E-mail"],
            ["skill" => "Design"],
            ["skill" => "Redes sociais"],
            ["skill" => "Análise de dados"],
            ["skill" => "Inglês"],
            ["skill" => "Espanhol"],
            ["skill" => "Alemão"],
            ["skill" => "Italiano"],
            ["skill" => "Outros idiomas"],
            ["skill" => "Mandarim"],
            ["skill" => "Pesquisa"],
            ["skill" => "Pesquisa acadêmica"],
            ["skill" => "Resolução de problemas"],
            ["skill" => "Diagnóstico de problemas"],
            ["skill" => "Tomada de decisões"],
            ["skill" => "Brainstorming"],
            ["skill" => "Análise de informação"],
            ["skill" => "Word"],
            ["skill" => "Outlook"],
            ["skill" => "Excel"],
            ["skill" => "Powerpoint"],
            ["skill" => "One Note"],
            ["skill" => "Programação (em uma linguagem específica)"],
            ["skill" => "Photoshop (em um programa específico)"],
            ["skill" => "Gestão de mídias sociais"],
            ["skill" => "Ferramentas de organização e produtividade"],
            ["skill" => "Banco de dados"],
            ["skill" => "Falar em público"],
            ["skill" => "Edição de vídeos"],
        ];

        foreach ($skills as $skill) {
            FashionSkill::updateOrCreate($skill);
        }
    }
}
