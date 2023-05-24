<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\rrhh\Modelo;

class ModelosTableSeeder extends Seeder
{
    public function run()
    {
        $modelos = [
            [
                'nombre_modelo' => 'Sedán',
                'descripcion' => 'Automóvil con carrocería de cuatro puertas y techo fijo, ideal para viajes familiares y uso diario.',
                "year" => "2011"
            ],
            [
                'nombre_modelo' => 'SUV',
                'descripcion' => 'Vehículo utilitario deportivo con espacio amplio y versátil, perfecto para aventuras al aire libre.',
                "year" => "2012"
            ],
            [
                'nombre_modelo' => 'Coupe',
                'descripcion' => 'Automóvil elegante y deportivo con dos puertas y un diseño aerodinámico que destaca en la carretera.',
                "year" => "2013"
            ],
            [
                'nombre_modelo' => 'Hatchback',
                'descripcion' => 'Automóvil compacto y ágil con diseño moderno, ideal para la ciudad y estacionamiento fácil.',
                "year" => "2014"
            ],
            [
                'nombre_modelo' => 'Camioneta',
                'descripcion' => 'Vehículo robusto y resistente diseñado para trabajos pesados y aventuras todoterreno.',
                "year" => "2015"
            ],
            [
                'nombre_modelo' => 'Convertible',
                'descripcion' => 'Automóvil descapotable con estilo y glamour, perfecto para disfrutar del viento en el cabello.',
                "year" => "2016"
            ],
            [
                'nombre_modelo' => 'Minivan',
                'descripcion' => 'Vehículo espacioso y versátil con múltiples asientos y amplio espacio de carga, ideal para familias.',
                "year" => "2017"
            ],
            [
                'nombre_modelo' => 'Pickup',
                'descripcion' => 'Vehículo de carga con una plataforma trasera para transportar mercancías y equipos.',
                "year" => "2018"
            ],
            [
                'nombre_modelo' => 'Deportivo',
                'descripcion' => 'Automóvil de alto rendimiento diseñado para brindar emociones fuertes y una conducción dinámica.',
                "year" => "2019"
            ],
            [
                'nombre_modelo' => 'Todoterreno',
                'descripcion' => 'Vehículo resistente y capaz de enfrentar cualquier terreno, ideal para aventuras todoterreno.',
                "year" => "2020"
            ],
            [
                'nombre_modelo' => 'Spark',
                'descripcion' => 'Automóvil compacto y económico.',
                'year' => '2021',
            ],
            [
                'nombre_modelo' => 'Cruze',
                'descripcion' => 'Sedán elegante y espacioso.',
                'year' => '2022',
            ],
            [
                'nombre_modelo' => 'Equinox',
                'descripcion' => 'SUV versátil y de alto rendimiento.',
                'year' => '2023',
            ],
            [
                'nombre_modelo' => 'Camaro',
                'descripcion' => 'Deportivo icónico y potente.',
                'year' => '2024',
            ],
            [
                'nombre_modelo' => 'Traverse',
                'descripcion' => 'SUV familiar con amplio espacio interior.',
                'year' => '2025',
            ],
            [
                'nombre_modelo' => 'Malibu',
                'descripcion' => 'Sedán sofisticado y confortable.',
                'year' => '2026',
            ],
            [
                'nombre_modelo' => 'Silverado',
                'descripcion' => 'Pickup robusta y resistente.',
                'year' => '2027',
            ],
            [
                'nombre_modelo' => 'Corvette',
                'descripcion' => 'Deportivo de lujo con altas prestaciones.',
                'year' => '2028',
            ],
            [
                'nombre_modelo' => 'Trax',
                'descripcion' => 'SUV compacto y ágil.',
                'year' => '2029',
            ],
            [
                'nombre_modelo' => 'Tahoe',
                'descripcion' => 'SUV grande y espacioso.',
                'year' => '2030',
            ],
            [
                'nombre_modelo' => 'A3',
                'descripcion' => 'Automóvil compacto de lujo.',
                'year' => '2021',
            ],
            [
                'nombre_modelo' => 'A4',
                'descripcion' => 'Sedán elegante y sofisticado.',
                'year' => '2022',
            ],
            [
                'nombre_modelo' => 'Q5',
                'descripcion' => 'SUV de alta gama con estilo y rendimiento.',
                'year' => '2023',
            ],
            [
                'nombre_modelo' => 'A7',
                'descripcion' => 'Coupé deportivo con diseño vanguardista.',
                'year' => '2024',
            ],
            [
                'nombre_modelo' => 'Q7',
                'descripcion' => 'SUV espacioso y versátil.',
                'year' => '2025',
            ],
            [
                'nombre_modelo' => 'TT',
                'descripcion' => 'Deportivo compacto y ágil.',
                'year' => '2026',
            ],
            [
                'nombre_modelo' => 'A8',
                'descripcion' => 'Sedán de lujo con tecnología de vanguardia.',
                'year' => '2027',
            ],
            [
                'nombre_modelo' => 'RS5',
                'descripcion' => 'Deportivo de alto rendimiento.',
                'year' => '2028',
            ],
            [
                'nombre_modelo' => 'Q3',
                'descripcion' => 'SUV compacto y versátil.',
                'year' => '2029',
            ],
            [
                'nombre_modelo' => 'R8',
                'descripcion' => 'Superdeportivo con motor potente.',
                'year' => '2030',
            ],
        ];

        foreach ($modelos as $modelo) {
            Modelo::create($modelo);
        }
    }
}
