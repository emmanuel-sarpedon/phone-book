<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EntrepriseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $entreprises = [[
            'nom' => 'Appines',
            'rue' => 'Le Bourg',
            'code_postal' => 19200,
            'ville' => 'Saint-Pardoux-Le-Neuf',
            'telephone' => '0805020301',
            'email' => 'contact@appines.fr'
        ], [
            'nom' => 'DNT',
            'rue' => 'Versailles',
            'code_postal' => 78000,
            'ville' => 'Versailles',
            'telephone' => '0139501697',
            'email' => 'contact@dnt.fr'
        ], [
            'nom' => 'Genti',
            'rue' => '15 Rue Saussure',
            'code_postal' => 75017,
            'ville' => 'Versailles',
            'telephone' => '0139501697',
            'email' => 'contact@genti.fr'
        ], [
            'nom' => 'Interdéco',
            'rue' => 'Versailles',
            'code_postal' => 78000,
            'ville' => 'Versailles',
            'telephone' => '0139501697',
            'email' => 'contact@interdeco.fr'
        ], [
            'nom' => 'BAS Rénovation',
            'rue' => 'Versailles',
            'code_postal' => 78000,
            'ville' => 'Versailles',
            'telephone' => '0139501697',
            'email' => 'contact@bas.fr'
        ], [
            'nom' => 'Montoya Rénovation',
            'rue' => 'Versailles',
            'code_postal' => 78000,
            'ville' => 'Versailles',
            'telephone' => '0139501697',
            'email' => 'contact@montoya.fr'
        ], [
            'nom' => 'Martins et Fils',
            'rue' => 'Versailles',
            'code_postal' => 78000,
            'ville' => 'Versailles',
            'telephone' => '0139501697',
            'email' => 'contact@martinsfils.fr'
        ], [
            'nom' => 'Méribat',
            'rue' => 'Versailles',
            'code_postal' => 78000,
            'ville' => 'Versailles',
            'telephone' => '0139501697',
            'email' => 'contact@meribat.fr'
        ], [
            'nom' => 'Albon SARL',
            'rue' => 'Versailles',
            'code_postal' => 78000,
            'ville' => 'Versailles',
            'telephone' => '0139501697',
            'email' => 'contact@albon.fr'
        ], [
            'nom' => 'BVS',
            'rue' => 'Versailles',
            'code_postal' => 78000,
            'ville' => 'Versailles',
            'telephone' => '0139501697',
            'email' => 'contact@bvs.fr'
        ], [
            'nom' => 'Jouvenet',
            'rue' => 'Versailles',
            'code_postal' => 78000,
            'ville' => 'Versailles',
            'telephone' => '0139501697',
            'email' => 'contact@jouvenet.fr'
        ], [
            'nom' => 'Groupe EPF',
            'rue' => 'Versailles',
            'code_postal' => 78000,
            'ville' => 'Versailles',
            'telephone' => '0139501697',
            'email' => 'contact@epf.fr'
        ], [
            'nom' => 'Etablissements Journo-Spinella',
            'rue' => 'Versailles',
            'code_postal' => 78000,
            'ville' => 'Versailles',
            'telephone' => '0139501697',
            'email' => 'contact@journo.fr'
        ], [
            'nom' => 'SNPR',
            'rue' => 'Versailles',
            'code_postal' => 78000,
            'ville' => 'Versailles',
            'telephone' => '0139501697',
            'email' => 'contact@snpr.fr'
        ], [
            'nom' => 'BDR Lequeux',
            'rue' => 'Versailles',
            'code_postal' => 78000,
            'ville' => 'Versailles',
            'telephone' => '0139501697',
            'email' => 'contact@bdrlequeux.fr'
        ], [
            'nom' => 'Avenir réno',
            'rue' => 'Versailles',
            'code_postal' => 78000,
            'ville' => 'Versailles',
            'telephone' => '0139501697',
            'email' => 'contact@avenirreno.fr'
        ], [
            'nom' => 'A9 Rénov',
            'rue' => 'Versailles',
            'code_postal' => 78000,
            'ville' => 'Versailles',
            'telephone' => '0139501697',
            'email' => 'contact@a9renov.fr'
        ], [
            'nom' => 'FTP Plus',
            'rue' => 'Versailles',
            'code_postal' => 78000,
            'ville' => 'Versailles',
            'telephone' => '0139501697',
            'email' => 'contact@ftp.fr'
        ], [
            'nom' => 'PMB Peinture',
            'rue' => 'Versailles',
            'code_postal' => 78000,
            'ville' => 'Versailles',
            'telephone' => '0139501697',
            'email' => 'contact@pmb.fr'
        ], [
            'nom' => 'Ets Roncajoli',
            'rue' => 'Versailles',
            'code_postal' => 78000,
            'ville' => 'Versailles',
            'telephone' => '0139501697',
            'email' => 'contact@roncajolis.fr'
        ]];

        foreach ($entreprises as $entreprise) {
            DB::table('entreprises')->insert($entreprise);
        }
    }
}
