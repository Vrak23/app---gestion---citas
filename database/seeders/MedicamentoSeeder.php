<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicamentoSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('medicamentos')->insert([
            ['id_tratamiento'=>1,'nombre'=>'Atenolol','dosis'=>'50mg','frecuencia'=>'1 vez al día','duracion'=>'3 meses','proveedor'=>'Farmindustria','efectos_secundarios'=>'Fatiga, mareos'],
            ['id_tratamiento'=>2,'nombre'=>'Vacuna DPT','dosis'=>'0.5ml','frecuencia'=>'Única','duracion'=>'1 dosis','proveedor'=>'Minsa','efectos_secundarios'=>'Dolor local leve'],
            ['id_tratamiento'=>3,'nombre'=>'Sumatriptán','dosis'=>'50mg','frecuencia'=>'Al inicio del dolor','duracion'=>'2 meses','proveedor'=>'Roemmers','efectos_secundarios'=>'Somnolencia'],
            ['id_tratamiento'=>4,'nombre'=>'Loratadina','dosis'=>'10mg','frecuencia'=>'1 vez al día','duracion'=>'1 mes','proveedor'=>'MK','efectos_secundarios'=>'Somnolencia leve'],
            ['id_tratamiento'=>5,'nombre'=>'Ibuprofeno','dosis'=>'400mg','frecuencia'=>'Cada 8 horas','duracion'=>'2 semanas','proveedor'=>'Bayer','efectos_secundarios'=>'Irritación gástrica'],
            ['id_tratamiento'=>6,'nombre'=>'Ácido fólico','dosis'=>'5mg','frecuencia'=>'1 vez al día','duracion'=>'3 meses','proveedor'=>'Farmindustria','efectos_secundarios'=>'Ninguno conocido'],
            ['id_tratamiento'=>7,'nombre'=>'Lágrimas artificiales','dosis'=>'1 gota','frecuencia'=>'3 veces al día','duracion'=>'Permanente','proveedor'=>'Alcon','efectos_secundarios'=>'Ninguno'],
            ['id_tratamiento'=>8,'nombre'=>'Levotiroxina','dosis'=>'100mcg','frecuencia'=>'1 vez al día','duracion'=>'Indefinido','proveedor'=>'Merck','efectos_secundarios'=>'Palpitaciones si dosis alta'],
            ['id_tratamiento'=>9,'nombre'=>'Omeprazol','dosis'=>'20mg','frecuencia'=>'2 veces al día','duracion'=>'2 meses','proveedor'=>'Genfar','efectos_secundarios'=>'Dolor de cabeza leve'],
            ['id_tratamiento'=>10,'nombre'=>'Sertralina','dosis'=>'50mg','frecuencia'=>'1 vez al día','duracion'=>'6 meses','proveedor'=>'Pfizer','efectos_secundarios'=>'Náuseas iniciales'],
        ]);
    }
}