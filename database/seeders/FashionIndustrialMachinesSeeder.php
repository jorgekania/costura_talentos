<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\FashionIndustrialMachines;
use Illuminate\Database\Seeder;

class FashionIndustrialMachinesSeeder extends Seeder
{
    public function run(): void
    {
        $machines = [
            [
                'machines'    => 'Bordadeira',
                'description' => 'A bordadeira computadorizada conta com programas para bordados em alto e baixo relevo. Conforme o tipo de bordado, são utilizadas cores e linhas variadas. Como é um equipamento grande, deve permanecer em local fixo.',
                'image'       => 'mmachines/bordadeira.jpg',
            ],
            [
                'machines'    => 'Portátil',
                'description' => 'Embora a máquina de costura portátil seja um modelo compacto, ela apresenta diversas funções, como acabamentos e costura em ziguezague. Sem falar dos acessórios, como calcadores para zíper invisível e franzido. Além disso, o equipamento apresenta o braço livre para acabamentos em barras de calça e punhos',
                'image'       => 'machines/portatil.jpg',
            ],
            [
                'machines'    => 'Caseadeira',
                'description' => 'A caseadeira industrial é própria para fazer caseados com vários tamanhos e espessuras, o que facilita o trabalho da costureira.',
                'image'       => 'machines/caseadeira.png',
            ],
            [
                'machines'    => 'Fechadeira',
                'description' => 'A fechadeira é uma máquina de costura própria para fechar cós e laterais de roupas, inclusive, em jeans, o que descarta a necessidade da máquina overloque.',
                'image'       => 'machines/fechadeira.jpg',
            ],
            [
                'machines'    => 'Galoneira',
                'description' => 'A galoneira utiliza entre uma e três agulhas, além de duas linhas e um fio. Sua função é realizar acabamentos em tecidos de malha e lingeries. O equipamento não apenas coloca viés como também rebate elásticos.',
                'image'       => 'machines/galoneira.jpg',
            ],
            [
                'machines'    => 'Interloque',
                'description' => 'Usada na confecção de camisas e malhas, a interloque possui três agulhas, que fazem costuras retas, inclusive em tecidos elásticos. Seu tamanho é compacto, o que facilita o transporte de um local a outro.',
                'image'       => 'machines/interloque.jpg',
            ],
            [
                'machines'    => 'Overloque',
                'description' => 'A overloque é própria para acabamentos em lingeries, biquínis, maiôs e sungas. Além disso, o equipamento pode ser usado na confecção de jeans, toalhas, tapetes. A overloque industrial deve se manter em local fixo devido ao seu tamanho avantajado. Já a overloque caseira é menor e de fácil transporte.',
                'image'       => 'machines/overloque.png',
            ],
            [
                'machines'    => 'Pespontadeira',
                'description' => 'A pespontadeira conta com duas a três agulhas para pesponto em jeans e tecidos pesados. Normalmente, ela é utilizada para otimizar os processos na linha de produção de jeans. O equipamento também é utilizado para pesponto em bancos de carros na indústria automobilística.',
                'image'       => 'machines/pespontadeira.jpeg',
            ],
            [
                'machines'    => 'Reta',
                'description' => 'Própria para confecção de grande volume de peças, a máquina de costura reta industrial apresenta tamanho grande e, por isso, deve se manter em local fixo. O equipamento é projetado para trabalhar em materiais pesados, como jeans, lona e couro. Ele conta com acessórios, como calcadores e colocadores de elástico, mas costura apenas em ponto reto.',
                'image'       => 'machines/reta.jpg',
            ],
            [
                'machines'    => 'Travete',
                'description' => 'A travete é uma máquina de costura robusta, perfeita para fazer travas em bolsos de calças jeans e passantes de cinto, onde há maior tensão. O equipamento também tem a função de aplicar zíperes com grande eficiência.',
                'image'       => 'machines/travete.jpg',
            ],
            [
                'machines'    => 'Botoneira',
                'description' => 'É ideal para aplicar botões de 02 e 04 furos, com muita produtividade.',
                'image'       => 'machines/botoneira.jpg',
            ],
            [
                'machines'    => 'Máquina de braço',
                'description' => 'Une embutindo às bordas do tecido e pesponta ao mesmo tempo. Por possuir um braço cilíndrico, faz o fechamento de partes tubulares como as entrepernas de calças jeans e mangas de camisas. A formação do ponto é corrente e pode trabalhar com até 03 agulhas.',
                'image'       => 'machines/maquina-de-braco.jpg',
            ],
            [
                'machines'    => 'Máquina de 2 agulhas',
                'description' => 'A máquina de duas agulhas é utilizada para fazer costuras paralelas, podendo executar pespontos e pregar bolsos. O ponto é o fixo, ou seja, trabalha com duas bobinas. Existe também a máquina de duas agulhas alternadas, que é utilizada para fazer costuras paralelas e pespontos em cantos e ângulos, sem que haja cruzamento das duas carreiras de pespontos.',
                'image'       => 'machines/maquina-2-agulhas.jpg',
            ],
        ];

        foreach ($machines as $machine) {
            FashionIndustrialMachines::updateOrCreate($machine);
        }
    }
}
