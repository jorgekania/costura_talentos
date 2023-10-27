<?php

namespace Database\Seeders;

use App\Models\FashionSegment;
use Illuminate\Database\Seeder;

class FashionSegmentSeeder extends Seeder
{

    public function run(): void
    {
        $segments = [
            ['segment' => 'Moda Feminina', 'description' => 'Design, produção e venda de roupas, calçados e acessórios para mulheres.'],
            ['segment' => 'Moda Masculina', 'description' => 'Design, produção e venda de roupas, calçados e acessórios para homens.'],
            ['segment' => 'Moda Infantil', 'description' => 'Roupas, calçados e acessórios para crianças, incluindo bebês e crianças pequenas.'],
            ['segment' => 'Moda Esportiva', 'description' => 'Roupas projetadas para atividades esportivas e de lazer, incluindo roupas de ginástica, tênis e roupas esportivas.'],
            ['segment' => 'Moda Íntima', 'description' => 'Roupas de baixo, lingerie e roupas de dormir.'],
            ['segment' => 'Moda Praia', 'description' => 'Roupas de banho, maiôs, biquínis e roupas de praia.'],
            ['segment' => 'Moda Plus Size', 'description' => 'Roupas e acessórios para tamanhos maiores.'],
            ['segment' => 'Moda Sustentável', 'description' => 'Roupas produzidas com foco na sustentabilidade ambiental e social, usando materiais e práticas eco-friendly.'],
            ['segment' => 'Moda de Luxo', 'description' => 'Roupas, acessórios e produtos de alta qualidade e preço elevado, muitas vezes de marcas renomadas.'],
            ['segment' => 'Moda de Fast Fashion', 'description' => 'Roupas que seguem rapidamente as tendências atuais a preços acessíveis, frequentemente disponíveis em grandes varejistas.'],
            ['segment' => 'Moda Étnica', 'description' => 'Roupas inspiradas em tradições culturais de diferentes etnias e regiões.'],
            ['segment' => 'Moda de Alta Costura', 'description' => 'Roupas feitas sob medida e de alta qualidade, muitas vezes usadas em eventos de gala e eventos de tapete vermelho.'],
            ['segment' => 'Moda Streetwear', 'description' => 'Roupas inspiradas na cultura urbana e street culture, muitas vezes associadas à cultura hip-hop e skate.'],
            ['segment' => 'Moda Vintage', 'description' => 'Roupas e acessórios de décadas passadas, que são colecionáveis e retrô.'],
            ['segment' => 'Moda de Trabalho', 'description' => 'Roupas adequadas para o ambiente de trabalho, incluindo roupas de escritório e uniformes profissionais.'],
            ['segment' => 'Moda de Festa', 'description' => 'Roupas elegantes para ocasiões especiais, como festas, casamentos e formaturas.'],
            ['segment' => 'Moda de Noiva', 'description' => 'Vestidos e trajes para noivas em casamentos.'],
            ['segment' => 'Moda de Noivo', 'description' => 'Trajes para noivos em casamentos.'],
            ['segment' => 'Moda de Maternidade', 'description' => 'Roupas para gestantes, adaptadas ao crescimento da barriga.'],
            ['segment' => 'Moda de Terceira Idade', 'description' => 'Roupas projetadas para idosos, levando em consideração a comodidade e funcionalidade.'],
            ['segment' => 'Moda de Inverno', 'description' => 'Roupas e acessórios para climas frios, incluindo casacos, botas e cachecóis.'],
            ['segment' => 'Moda de Verão', 'description' => 'Roupas e acessórios leves e arejados para climas quentes.'],
            ['segment' => 'Moda de Meia Estação', 'description' => 'Roupas adequadas para transições entre estações, com peças versáteis.'],
            ['segment' => 'Moda Unissex', 'description' => 'Roupas que podem ser usadas por pessoas de qualquer gênero, muitas vezes com designs neutros em termos de gênero.'],
            ['segment' => 'Moda Workwear', 'description' => 'Roupas projetadas para profissionais que desempenham trabalhos específicos, como uniformes de enfermagem, cozinheiros, mecânicos, etc.'],
            ['segment' => 'Moda Esportiva de Alta Performance', 'description' => 'Roupas e acessórios técnicos para atletas de elite, projetados para melhorar o desempenho esportivo.'],
            ['segment' => 'Moda de Dança', 'description' => 'Roupas específicas para dançarinos e artistas do mundo da dança, incluindo collants, sapatilhas e saias.'],
            ['segment' => 'Moda Militar', 'description' => 'Roupas e acessórios inspirados em uniformes militares, muitas vezes com elementos utilitários.'],
            ['segment' => 'Moda Equestre', 'description' => 'Roupas e equipamentos para a equitação, incluindo selas, capacetes e botas.'],
            ['segment' => 'Moda de Montanhismo', 'description' => 'Roupas e equipamentos para atividades ao ar livre e montanhismo, projetados para enfrentar condições advers'],
        ];

        foreach ($segments as $segment) {
            FashionSegment::updateOrCreate($segment);
        }
    }
}
