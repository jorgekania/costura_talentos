<?php

namespace Database\Seeders;

use App\Models\FashionSegment;
use Illuminate\Database\Seeder;

class FashionSegmentSeeder extends Seeder
{

    public function run(): void
    {
        $segments = [
            ['segment' => 'ACTIVEWEAR', 'description' => 'Roupas, calçados e acessórios utilizados para a prática esportiva.'],
            ['segment' => 'ADVENTURE WEAR', 'description' => 'Roupas e acessórios para o uso em esportes radicais.'],
            ['segment' => 'BEACHWEAR', 'description' => 'Roupas para praia e piscina.'],
            ['segment' => 'BIKE WEAR', 'description' => 'Roupas e acessórios para ciclistas ou qualquer outras atividades ligadas ao ciclismo.'],
            ['segment' => 'BRIDAL WEAR', 'description' => 'Vestidos de noiva.'],
            ['segment' => 'CAREER WEAR', 'description' => 'Roupas para o trabalho, não são uniformes, mas peças formais que caracterizam a seriedade da profissão.'],
            ['segment' => 'CASUAL WEAR', 'description' => 'Roupas práticas e informais.'],
            ['segment' => 'CITY WEAR', 'description' => 'Roupas no estilo urbano e informal.'],
            ['segment' => 'COMFORTABLE CLASSIC WEAR', 'description' => 'O clássico da alfaiataria renovado.'],
            ['segment' => 'COUTURE WEAR', 'description' => 'Roupas de época.'],
            ['segment' => 'DAILY WEAR', 'description' => 'Roupas de estilo contemporâneo para o dia-a-dia.'],
            ['segment' => 'EASYWEAR', 'description' => 'Roupas práticas e funcionais, tanto nas formas quanto nos materiais.'],
            ['segment' => 'ENGINEERING WEAR', 'description' => 'Roupas com fundamento na engenharia (modelagem).'],
            ['segment' => 'EVENINGDRESS WEAR', 'description' => 'Roupas formais para ocasiões informais (coquetel, lançamentos de exposições de arte, etc.)'],
            ['segment' => 'EVENING GOWN WEAR', 'description' => 'Roupas de festa.'],
            ['segment' => 'EYEWEAR', 'description' => 'Óculos.'],
            ['segment' => 'FETISH WEAR', 'description' => 'Roupas para fetichistas.'],
            ['segment' => 'FITNESS WEAR', 'description' => 'Roupas para ginástica e prática de esportes.'],
            ['segment' => 'FOOTWEAR', 'description' => 'Sapatos, tênis, sandálias, etc.'],
            ['segment' => 'FORMAL WEAR', 'description' => 'O rigor clássico da alfaiataria impecável, estruturado e elegante.'],
            ['segment' => 'FULL EVENING WEAR', 'description' => 'Roupas para eventos especiais, ocasião que requer extremo luxo.'],
            ['segment' => 'HOMEWEAR', 'description' => 'Roupas para ficar em casa.'],
            ['segment' => 'JEANSWEAR/DENIM WEAR', 'description' => 'Roupas feitas com o tecido sarja (denim, sarja de Nîmes) na cor azul índigo de origem vegetal no modelo jeans.'],
            ['segment' => 'KIDS WEAR ou CHILDREN’S WEAR', 'description' => 'Roupas para crianças.'],
            ['segment' => 'KNITWEAR', 'description' => 'Roupas feitas de malha retilínea e circular (cardigans, suéters, etc).'],
            ['segment' => 'LEATHER WEAR', 'description' => 'Roupas feitas de couro.'],
            ['segment' => 'LEISUREWEAR', 'description' => 'Roupas para lazer.'],
            ['segment' => 'MILITARYWEAR', 'description' => 'Roupas com inspiração em trajes militares.'],
            ['segment' => 'NEW CLASSIC WEAR', 'description' => 'Roupas clássicas renovadas.'],
            ['segment' => 'OUTDOORWEAR', 'description' => 'Roupas para a vida ao ar livre, track (escaladas, trilhas, etc)'],
            ['segment' => 'PETITE WEAR', 'description' => 'Roupas para mulheres adultas de estatura baixa (1.40m a 1.60m de altura) com os tamanhos 0 ao 14 para os Estados Unidos e 28 ao 42 para o Brasil.'],
            ['segment' => 'RAINWEAR', 'description' => 'Roupas impermeáveis.'],
            ['segment' => 'READY-TO-WEAR', 'description' => 'prêt-à-porter, pronto para vestir.'],
            ['segment' => 'RECYCLED WEAR', 'description' => 'Roupas antigas de brechó, retrabalhadas ou reproduzidas em pequena série.'],
            ['segment' => 'RIGOUR OF FORMAL EVENINGDRESS', 'description' => 'roupas sociais para ocasiões de luxo, homens', 'description' => 'dinner jacket, tuxedo (fraque) e smoking mulheres', 'description' => 'vestidos e suits longos ou curtos com estilo da alta-costura (haute-couture).'],
            ['segment' => 'SOFT FORMALWEAR', 'description' => 'Novo formal, funcionalidade, desconstruído com aspecto ultra-light, nova alfaiataria.'],
            ['segment' => 'SLEEPWEAR', 'description' => 'Roupas para dormir.'],
            ['segment' => 'STREETWEAR', 'description' => 'Roupas com estilo das tribos urbanas.'],
            ['segment' => 'SWIMWEAR', 'description' => 'Roupas para natação.'],
            ['segment' => 'TAILORWEAR', 'description' => 'Roupas feitas por alfaiates (feito sobre medida).'],
            ['segment' => 'TECNOWEAR', 'description' => 'Roupas feitas com matérias-primas de alta tecnologia.'],
            ['segment' => 'TEENAGER WEAR', 'description' => 'Roupas para adolescentes.'],
            ['segment' => 'UTILITYWEAR', 'description' => 'Roupas utilitárias (uniformes).'],
            ['segment' => 'VINTAGE', 'description' => 'Roupas ou acessórios de um estilo pertencente a uma outra época.'],
        ];

        foreach ($segments as $segment) {
            FashionSegment::updateOrCreate($segment);
        }
    }
}
