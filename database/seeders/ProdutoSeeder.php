<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lanches = [
            [
                'nome' => '𝐵𝓇𝑜𝓌𝓃𝒾𝑒',
                'preco' => 17,
                'ingredientes' => 'Harbúrguer de carne, bacon, queijo, presunto, pão, molho',
                'imagem' => 'images/hamburgao.jpeg'
            ],
            [
                'nome' => '𝐵𝒶𝓈𝑒 𝒷𝒶𝓃𝑜𝒻𝒻𝑒𝑒',
                'preco' => 17.99,
                'ingredientes' => 'Harbúrguer de carne, bacon, queijo, presunto, pão, molho',
                'imagem' => 'images/hamburgao.jpeg'
            ],
            [
                'nome' => '𝒯𝑜𝓂𝒶𝒽𝒶𝓌𝓀',
                'preco' => 17,
                'ingredientes' => 'Harbúrguer de carne, bacon, queijo, presunto, pão, molho',
                'imagem' => 'images/hamburgao.jpeg'
            ],
            [
                'nome' => '𝒯𝓊𝓉𝒶𝓃𝑜',
                'preco' => 17,
                'ingredientes' => 'Harbúrguer de carne, bacon, queijo, presunto, pão, molho',
                'imagem' => 'images/hamburgao.jpeg'
            ],
            [
                'nome' => '𝒫𝒾𝒸𝒶𝓃𝒽𝒶',
                'preco' => 17,
                'ingredientes' => 'Harbúrguer de carne, bacon, queijo, presunto, pão, molho',
                'imagem' => 'images/hamburgao.jpeg'
            ],
            [
                'nome' => '𝒜𝓃𝒸𝒽𝑜',
                'preco' => 17,
                'ingredientes' => 'Harbúrguer de carne, bacon, queijo, presunto, pão, molho',
                'imagem' => 'images/hamburgao.jpeg'
            ],
            [
                'nome' => '𝐵𝑜𝓂𝒷𝑜𝓂 𝒹𝑒 𝒶𝓁𝒸𝒶𝓉𝓇𝒶',
                'preco' => 17,
                'ingredientes' => 'Harbúrguer de carne, bacon, queijo, presunto, pão, molho',
                'imagem' => 'images/hamburgao.jpeg'
            ],
            [
                'nome' => '𝐹𝒾𝓁𝑒𝓉 𝓂𝒾𝑔𝓃𝑜𝓃',
                'preco' => 17,
                'ingredientes' => 'Harbúrguer de carne, bacon, queijo, presunto, pão, molho',
                'imagem' => 'images/hamburgao.jpeg'
            ],
            [
                'nome' => '𝐹𝒾𝓁𝑒 𝒹𝑒 𝒻𝓇𝒶𝓃𝑔𝑜',
                'preco' => 17,
                'ingredientes' => 'Harbúrguer de carne, bacon, queijo, presunto, pão, molho',
                'imagem' => 'images/hamburgao.jpeg'
            ],
            [
                'nome' => '𝐹𝓇𝒶𝓁𝒹𝒾𝓃𝒽𝒶',
                'preco' => 17,
                'ingredientes' => 'Harbúrguer de carne, bacon, queijo, presunto, pão, molho',
                'imagem' => 'images/hamburgao.jpeg'
            ],
            [
                'nome' => '𝐹𝓁𝒶𝓉 𝐼𝓇𝑜𝓃',
                'preco' => 17,
                'ingredientes' => 'Harbúrguer de carne, bacon, queijo, presunto, pão, molho',
                'imagem' => 'images/hamburgao.jpeg'
            ],
            [
                'nome' => '𝒫𝒾𝒸𝒶𝓃𝒽𝒶 𝒹𝑒 𝒞𝑜𝓇𝒹𝑒𝒾𝓇𝑜',
                'preco' => 17,
                'ingredientes' => 'Harbúrguer de carne, bacon, queijo, presunto, pão, molho',
                'imagem' => 'images/hamburgao.jpeg'
            ],
            [
                'nome' => '𝒞𝑜𝓈𝓉𝑒𝓁𝒶 𝒷𝑜𝓋𝒾𝓃𝒶',
                'preco' => 17,
                'ingredientes' => 'Harbúrguer de carne, bacon, queijo, presunto, pão, molho',
                'imagem' => 'images/hamburgao.jpeg'
            ],
            [
                'nome' => '𝒮𝒶𝓁𝓂𝒶𝑜',
                'preco' => 17,
                'ingredientes' => 'Harbúrguer de carne, bacon, queijo, presunto, pão, molho',
                'imagem' => 'images/hamburgao.jpeg'
            ],
            [
                'nome' => '𝒲𝒶𝓉𝑒𝓇𝓁𝑜𝑜',
                'preco' => 17,
                'ingredientes' => 'Harbúrguer de carne, bacon, queijo, presunto, pão, molho',
                'imagem' => 'images/hamburgao.jpeg'
            ]

        ];
        foreach($lanches as $lanche) {
            DB::table('produtos')->insert([
                'nome' => $lanche['nome'],
                'preco' => $lanche['preco'],
                'ingredientes' => $lanche['ingredientes'],
                'imagem' => $lanche['imagem'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
