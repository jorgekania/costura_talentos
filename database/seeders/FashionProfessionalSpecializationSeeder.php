<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\FashionProfessionalSpecialization;
use Illuminate\Database\Seeder;

class FashionProfessionalSpecializationSeeder extends Seeder
{
    public function run(): void
    {
        $specializations = [
            [
                'specialization' => 'Estilista',
                'description'    => 'esses profissionais basicamente elaboram estilos de roupas por meio de desenhos e projeções com base nas tendências de comportamento, além de participar da elaboração de desfiles.',
            ],

            [
                'specialization' => 'Designer de acessórios',
                'description'    => 'são responsáveis pela criação de acessórios tais como bolsas, sapatos, carteiras, cintos, entre outros itens, e o processo de criação tem como base as necessidades do público-alvo e as tendências da moda.',
            ],

            [
                'specialization' => 'Designer de superfície',
                'description'    => 'profissionais encarregados da projeção e desenvolvimento de texturas bi e tridimensionais em vários tipos de superfícies, a técnica de impressão é chamada de estamparia.',
            ],

            [
                'specialization' => 'Joalheiro e joalheira',
                'description'    => 'a tarefa principal das pessoas que atuam nesse setor é a fabricação e montagem de joias e bijuterias essenciais na composição de looks.',
            ],

            [
                'specialization' => 'Desenvolvimento de produto',
                'description'    => 'função voltada à pesquisa de mercado e busca da compreensão dos comportamentos e estilos dos consumidores. A partir de tais análises, produtos são elaborados com o objetivo de suprir as necessidades e desejos de um público específico ou geral.',
            ],

            [
                'specialization' => 'Ilustrador e ilustradora de moda',
                'description'    => 'a ilustração são desenhos, pinturas, esboços e instruções elaboradas por esses profissionais para execução dos costureiros e costureiras. Essa profissão, assim como as demais do setor de design de moda, requer alta criatividade.',
            ],

            [
                'specialization' => 'Designer gráfico',
                'description'    => 'função relacionada à identidade visual de uma marca ou produto constituída a partir da elaboração de elementos textuais e não textuais como logotipos, panfletos, etc.',
            ],

            [
                'specialization' => 'Designer de jogos',
                'description'    => 'em virtude da expansão dos games no mercado, o mundo fashion também está surfando nessa onda e jogos relacionados a esse universo estão cada vez mais presentes.',
            ],

            [
                'specialization' => 'Desenhista',
                'description'    => 'profissionais que desenvolvem e fazem desenhos, bem como projetos 2D e 3D voltados à moda.',
            ],
            [
                'specialization' => 'Modelista',
                'description'    => 'profissão voltada à confecção de moldes para roupas e calçados e que cada vez mais, seus profissionais fazem uso de ferramentas tecnológicas para o desempenho de suas funções.'],
            [
                'specialization' => 'Desenhista têxtil',
                'description'    => 'as pessoas que ocupam essa atividade profissional fazem projetos de estamparia para roupas e acessórios a partir das pesquisas de tendências ou pedidos guiados de clientes.',
            ],

            [
                'specialization' => 'Costureiro e costureira',
                'description'    => 'profissionais que executam roupas e acessórios por meio da costura.',
            ],

            [
                'specialization' => 'Pilotista',
                'description'    => 'pilotistas participam de todo processo de confecção desde o corte, montagem até o acabamento das roupas.',
            ],

            [
                'specialization' => 'Tecnólogo de vestuário',
                'description'    => 'dentre as várias funções, as pessoas que ocupam essa profissão atuam no desenvolvimento de desenhos, operação de softwares, na montagem de peças piloto, bem como na supervisão e avaliação de design.',
            ],

            [
                'specialization' => 'Gerente de produção',
                'description'    => 'são responsáveis pelo bom funcionamento da produção a partir do controle e organização de todo o processo da matéria-prima, dos recursos e a gestão de sua equipe.',
            ],

            [
                'specialization' => 'Personal stylist',
                'description'    => 'profissionais contratados para prestar orientação sobre estilos e roupas, geralmente de forma individualizada.',
            ],

            [
                'specialization' => 'Consultor de imagem',
                'description'    => 'consultoria voltada à imagem e apresentação das pessoas tendo como base de estudo de biotipo, coloração, estilo e personalidade.',
            ],

            [
                'specialization' => 'Consultor de moda',
                'description'    => 'por meio da análise das tendências de cores, texturas, cortes e cores dos tecidos, pessoas recorrem a esse tipo de consultoria para ter melhores resultados na divulgação de seu produto ou marca.',
            ],

            [
                'specialization' => 'Personal shopper',
                'description'    => 'os personal shoppers são profissionais contratados para fazer compras de roupas e acessórios, mas também para receber dicas e conselhos sobre o assunto.',
            ],

            [
                'specialization' => 'Agente de modelo (booker)',
                'description'    => 'profissionais responsáveis pela representação de modelos e de todo o trâmite de contratação e contratos.',
            ],

            [
                'specialization' => 'Figurinista',
                'description'    => 'são os profissionais que têm a função de elaborar roupas e trajes para os artistas de acordo com as personagens.',
            ],

            [
                'specialization' => 'Conservador têxtil',
                'description'    => 'profissionais que tratam de restaurar, consertar, tratar têxteis e reaproveitar figurinos.',
            ],
            [
                'specialization' => 'Mestre de guarda-roupas',
                'description'    => 'são responsáveis pela limpeza e conservação dos figurinos no guarda-roupa após as apresentações ou espetáculos.',
            ],
            [
                'specialization' => 'Blogueiro e blogueira de moda',
                'description'    => 'profissionais que escrevem sobre diversos assuntos como notícias, informações, dicas, aconselhamento, compartilhamento de opiniões, críticas etc.',
            ],
            [
                'specialization' => 'Colunista de moda',
                'description'    => 'são pessoas encarregadas de escrever artigos em revistas, sites e/ou programas de televisão.',
            ],
            [
                'specialization' => 'Jornalista de moda',
                'description'    => 'trabalham na elaboração de pautas e editoriais além da cobertura de desfiles de moda e entrevistas.',
            ],
            [
                'specialization' => 'Editor de moda',
                'description'    => 'são responsáveis pela supervisão do processo de criação e desenvolvimento de moda para sites, revistas, jornais e programas de televisão.',
            ],
            [
                'specialization' => 'Assessor e assessora de imprensa',
                'description'    => 'tem como uma de suas funções a divulgação e alimentação de notícias nos diversos veículos de imprensa.',
            ],
            [
                'specialization' => 'Engenheiro e engenheira têxtil',
                'description'    => 'cuidam da fabricação e tratamento de fibras, fios e tecidos.',
            ],
            [
                'specialization' => 'Engenheiro e engenheira química',
                'description'    => 'transformam matéria-prima em produtos voltados, nesse caso, ao mercado da moda. Tal ação é feita por meio de pesquisas, testes e projetos.',
            ],
            [
                'specialization' => 'Designer têxtil',
                'description'    => 'tratam da tecelagem dos fios ou fibras na criação do tecido.',
            ],
            [
                'specialization' => 'Historiador de moda',
                'description'    => 'são pessoas cuja função é a realizar pesquisas científicas e análise e comparação da moda do passado com o presente, com base nas tendências e comportamentos.',
            ],
            [
                'specialization' => 'Professor e professora',
                'description'    => 'profissionais que ensinam e auxiliam na formação de novos profissionais para o mercado.',
            ],
            [
                'specialization' => 'Gerente de moda',
                'description'    => 'atuam na gestão geral, desde a produção até a divulgação, visando o lançamento de coleções por meio de estudo do cenário, da concorrência e das tendências.',
            ],
            [
                'specialization' => 'Gerente de produto',
                'description'    => 'buscam a compreensão das necessidades do produto e dos clientes de modo a desenvolvê-los, aprimorá-los ou até mesmo substituí-los.',
            ],
            [
                'specialization' => 'Fashion buyer (varejo)',
                'description'    => 'esses profissionais têm, como tarefa principal, a busca de novas tendências por meio das compras que fazem durante suas viagens e visitas às grandes capitais, lojas e show rooms, sendo pagos para isso.',
            ],
            [
                'specialization' => 'Fotógrafo de moda',
                'description'    => 'esses profissionais trabalham em desfiles de moda e/ou com fotografias editoriais para revistas e sites.',
            ],
            [
                'specialization' => 'Publicidade e propaganda',
                'description'    => 'no caso específico da moda, as pessoas que atuam no setor de Propaganda e Publicidade são responsáveis pela divulgação comercial dos eventos, desfiles e demais temas relacionados a esse mercado.',
            ],
            [
                'specialization' => 'Diretor e diretora de arte',
                'description'    => 'pessoas encarregadas de supervisionar e gerenciar a concepção artística e visual, bem como a parte audiovisual e integração com as funções de publicidade, design editorial, internet, cinema, jogos e propagandas.',
            ],
            [
                'specialization' => 'Vitrinista',
                'description'    => 'profissionais responsáveis pela elaboração, organização e exibição de vitrines com base em técnicas e estratégias específicas.',
            ],
            [
                'specialization' => 'Diretor e diretora de marketing',
                'description'    => 'tratam da gestão de pessoal de Marketing e de todo o processo de divulgação da marca ou produto.',
            ],
        ];

        foreach ($specializations as $specialization) {
            FashionProfessionalSpecialization::updateOrCreate($specialization);
        }
    }
}
