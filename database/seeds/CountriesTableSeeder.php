<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            'numeric_code'            => '004',
            'name'                    => 'Afghanistan',
            'alpha_2_code'            => 'AF',
            'alpha_3_code'            => 'AFG',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'Southern Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '034',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '248',
            'name'                    => 'Åland Islands',
            'alpha_2_code'            => 'AX',
            'alpha_3_code'            => 'ALA',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Northern Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '154',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '008',
            'name'                    => 'Albania',
            'alpha_2_code'            => 'AL',
            'alpha_3_code'            => 'ALB',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Southern Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '039',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '012',
            'name'                    => 'Algeria',
            'alpha_2_code'            => 'DZ',
            'alpha_3_code'            => 'DZA',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Northern Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '015',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '016',
            'name'                    => 'American Samoa',
            'alpha_2_code'            => 'AS',
            'alpha_3_code'            => 'ASM',
            'region_name'             => 'Oceania',
            'sub_region_name'         => 'Polynesia',
            'region_numeric_code'     => '009',
            'sub_region_numeric_code' => '061',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '020',
            'name'                    => 'Andorra',
            'alpha_2_code'            => 'AD',
            'alpha_3_code'            => 'AND',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Southern Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '039',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '024',
            'name'                    => 'Angola',
            'alpha_2_code'            => 'AO',
            'alpha_3_code'            => 'AGO',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Middle Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '017',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '660',
            'name'                    => 'Anguilla',
            'alpha_2_code'            => 'AI',
            'alpha_3_code'            => 'AIA',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'Latin America and the Caribbean',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '419',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '010',
            'name'                    => 'Antarctica',
            'alpha_2_code'            => 'AQ',
            'alpha_3_code'            => 'ATA',
            'region_name'             => '',
            'sub_region_name'         => '',
            'region_numeric_code'     => '000',
            'sub_region_numeric_code' => '000',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '028',
            'name'                    => 'Antigua and Barbuda',
            'alpha_2_code'            => 'AG',
            'alpha_3_code'            => 'ATG',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'Latin America and the Caribbean',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '419',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '032',
            'name'                    => 'Argentina',
            'alpha_2_code'            => 'AR',
            'alpha_3_code'            => 'ARG',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'South America',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '005',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '051',
            'name'                    => 'Armenia',
            'alpha_2_code'            => 'AM',
            'alpha_3_code'            => 'ARM',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'Western Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '145',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '533',
            'name'                    => 'Aruba',
            'alpha_2_code'            => 'AW',
            'alpha_3_code'            => 'ABW',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'Latin America and the Caribbean',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '419',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '036',
            'name'                    => 'Australia',
            'alpha_2_code'            => 'AU',
            'alpha_3_code'            => 'AUS',
            'region_name'             => 'Oceania',
            'sub_region_name'         => 'Australia and New Zealand',
            'region_numeric_code'     => '009',
            'sub_region_numeric_code' => '053',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '040',
            'name'                    => 'Austria',
            'alpha_2_code'            => 'AT',
            'alpha_3_code'            => 'AUT',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Western Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '155',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '031',
            'name'                    => 'Azerbaijan',
            'alpha_2_code'            => 'AZ',
            'alpha_3_code'            => 'AZE',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'Western Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '145',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '044',
            'name'                    => 'Bahamas',
            'alpha_2_code'            => 'BS',
            'alpha_3_code'            => 'BHS',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'Latin America and the Caribbean',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '419',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '048',
            'name'                    => 'Bahrain',
            'alpha_2_code'            => 'BH',
            'alpha_3_code'            => 'BHR',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'Western Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '145',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '050',
            'name'                    => 'Bangladesh',
            'alpha_2_code'            => 'BD',
            'alpha_3_code'            => 'BGD',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'Southern Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '034',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '052',
            'name'                    => 'Barbados',
            'alpha_2_code'            => 'BB',
            'alpha_3_code'            => 'BRB',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'Latin America and the Caribbean',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '419',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '112',
            'name'                    => 'Belarus',
            'alpha_2_code'            => 'BY',
            'alpha_3_code'            => 'BLR',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Eastern Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '151',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '056',
            'name'                    => 'Belgium',
            'alpha_2_code'            => 'BE',
            'alpha_3_code'            => 'BEL',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Western Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '155',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '084',
            'name'                    => 'Belize',
            'alpha_2_code'            => 'BZ',
            'alpha_3_code'            => 'BLZ',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'Central America',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '013',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '204',
            'name'                    => 'Benin',
            'alpha_2_code'            => 'BJ',
            'alpha_3_code'            => 'BEN',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Western Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '011',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '060',
            'name'                    => 'Bermuda',
            'alpha_2_code'            => 'BM',
            'alpha_3_code'            => 'BMU',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'Northern America',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '021',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '064',
            'name'                    => 'Bhutan',
            'alpha_2_code'            => 'BT',
            'alpha_3_code'            => 'BTN',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'Southern Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '034',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '068',
            'name'                    => 'Bolivia, Plurinational State of',
            'alpha_2_code'            => 'BO',
            'alpha_3_code'            => 'BOL',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'South America',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '005',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '535',
            'name'                    => 'Bonaire, Sint Eustatius and Saba',
            'alpha_2_code'            => 'BQ',
            'alpha_3_code'            => 'BES',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'Latin America and the Caribbean',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '419',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '070',
            'name'                    => 'Bosnia and Herzegovina',
            'alpha_2_code'            => 'BA',
            'alpha_3_code'            => 'BIH',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Southern Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '039',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '072',
            'name'                    => 'Botswana',
            'alpha_2_code'            => 'BW',
            'alpha_3_code'            => 'BWA',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Southern Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '018',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '074',
            'name'                    => 'Bouvet Island',
            'alpha_2_code'            => 'BV',
            'alpha_3_code'            => 'BVT',
            'region_name'             => '',
            'sub_region_name'         => '',
            'region_numeric_code'     => '000',
            'sub_region_numeric_code' => '000',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '076',
            'name'                    => 'Brazil',
            'alpha_2_code'            => 'BR',
            'alpha_3_code'            => 'BRA',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'South America',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '005',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '086',
            'name'                    => 'British Indian Ocean Territory',
            'alpha_2_code'            => 'IO',
            'alpha_3_code'            => 'IOT',
            'region_name'             => '',
            'sub_region_name'         => '',
            'region_numeric_code'     => '000',
            'sub_region_numeric_code' => '000',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '096',
            'name'                    => 'Brunei Darussalam',
            'alpha_2_code'            => 'BN',
            'alpha_3_code'            => 'BRN',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'South-Eastern Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '035',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '100',
            'name'                    => 'Bulgaria',
            'alpha_2_code'            => 'BG',
            'alpha_3_code'            => 'BGR',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Eastern Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '151',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '854',
            'name'                    => 'Burkina Faso',
            'alpha_2_code'            => 'BF',
            'alpha_3_code'            => 'BFA',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Western Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '011',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '108',
            'name'                    => 'Burundi',
            'alpha_2_code'            => 'BI',
            'alpha_3_code'            => 'BDI',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Eastern Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '014',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '116',
            'name'                    => 'Cambodia',
            'alpha_2_code'            => 'KH',
            'alpha_3_code'            => 'KHM',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'South-Eastern Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '035',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '120',
            'name'                    => 'Cameroon',
            'alpha_2_code'            => 'CM',
            'alpha_3_code'            => 'CMR',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Middle Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '017',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '124',
            'name'                    => 'Canada',
            'alpha_2_code'            => 'CA',
            'alpha_3_code'            => 'CAN',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'Northern America',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '021',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '132',
            'name'                    => 'Cape Verde',
            'alpha_2_code'            => 'CV',
            'alpha_3_code'            => 'CPV',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Western Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '011',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '136',
            'name'                    => 'Cayman Islands',
            'alpha_2_code'            => 'KY',
            'alpha_3_code'            => 'CYM',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'Latin America and the Caribbean',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '419',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '140',
            'name'                    => 'Central African Republic',
            'alpha_2_code'            => 'CF',
            'alpha_3_code'            => 'CAF',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Middle Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '017',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '148',
            'name'                    => 'Chad',
            'alpha_2_code'            => 'TD',
            'alpha_3_code'            => 'TCD',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Middle Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '017',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '152',
            'name'                    => 'Chile',
            'alpha_2_code'            => 'CL',
            'alpha_3_code'            => 'CHL',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'South America',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '005',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '156',
            'name'                    => 'China',
            'alpha_2_code'            => 'CN',
            'alpha_3_code'            => 'CHN',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'Eastern Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '030',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '162',
            'name'                    => 'Christmas Island',
            'alpha_2_code'            => 'CX',
            'alpha_3_code'            => 'CXR',
            'region_name'             => '',
            'sub_region_name'         => '',
            'region_numeric_code'     => '000',
            'sub_region_numeric_code' => '000',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '166',
            'name'                    => 'Cocos (Keeling) Islands',
            'alpha_2_code'            => 'CC',
            'alpha_3_code'            => 'CCK',
            'region_name'             => '',
            'sub_region_name'         => '',
            'region_numeric_code'     => '000',
            'sub_region_numeric_code' => '000',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '170',
            'name'                    => 'Colombia',
            'alpha_2_code'            => 'CO',
            'alpha_3_code'            => 'COL',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'South America',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '005',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '174',
            'name'                    => 'Comoros',
            'alpha_2_code'            => 'KM',
            'alpha_3_code'            => 'COM',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Eastern Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '014',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '178',
            'name'                    => 'Congo',
            'alpha_2_code'            => 'CG',
            'alpha_3_code'            => 'COG',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Middle Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '017',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '180',
            'name'                    => 'Congo, the Democratic Republic of the',
            'alpha_2_code'            => 'CD',
            'alpha_3_code'            => 'COD',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Middle Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '017',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '184',
            'name'                    => 'Cook Islands',
            'alpha_2_code'            => 'CK',
            'alpha_3_code'            => 'COK',
            'region_name'             => 'Oceania',
            'sub_region_name'         => 'Polynesia',
            'region_numeric_code'     => '009',
            'sub_region_numeric_code' => '061',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '188',
            'name'                    => 'Costa Rica',
            'alpha_2_code'            => 'CR',
            'alpha_3_code'            => 'CRI',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'Central America',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '013',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '384',
            'name'                    => 'Côte d\' Ivoire',
            'alpha_2_code'            => 'CI',
            'alpha_3_code'            => 'CIV',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Western Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '011',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '191',
            'name'                    => 'Croatia',
            'alpha_2_code'            => 'HR',
            'alpha_3_code'            => 'HRV',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Southern Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '039',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '192',
            'name'                    => 'Cuba',
            'alpha_2_code'            => 'CU',
            'alpha_3_code'            => 'CUB',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'Latin America and the Caribbean',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '419',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '531',
            'name'                    => 'Curaçao',
            'alpha_2_code'            => 'CW',
            'alpha_3_code'            => 'CUW',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'Latin America and the Caribbean',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '419',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '196',
            'name'                    => 'Cyprus',
            'alpha_2_code'            => 'CY',
            'alpha_3_code'            => 'CYP',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'Western Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '145',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '203',
            'name'                    => 'Czech Republic',
            'alpha_2_code'            => 'CZ',
            'alpha_3_code'            => 'CZE',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Eastern Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '151',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '208',
            'name'                    => 'Denmark',
            'alpha_2_code'            => 'DK',
            'alpha_3_code'            => 'DNK',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Northern Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '154',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '262',
            'name'                    => 'Djibouti',
            'alpha_2_code'            => 'DJ',
            'alpha_3_code'            => 'DJI',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Eastern Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '014',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '212',
            'name'                    => 'Dominica',
            'alpha_2_code'            => 'DM',
            'alpha_3_code'            => 'DMA',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'Latin America and the Caribbean',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '419',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '214',
            'name'                    => 'Dominican Republic',
            'alpha_2_code'            => 'DO',
            'alpha_3_code'            => 'DOM',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'Latin America and the Caribbean',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '419',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '218',
            'name'                    => 'Ecuador',
            'alpha_2_code'            => 'EC',
            'alpha_3_code'            => 'ECU',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'South America',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '005',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '818',
            'name'                    => 'Egypt',
            'alpha_2_code'            => 'EG',
            'alpha_3_code'            => 'EGY',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Northern Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '015',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '222',
            'name'                    => 'El Salvador',
            'alpha_2_code'            => 'SV',
            'alpha_3_code'            => 'SLV',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'Central America',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '013',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '226',
            'name'                    => 'Equatorial Guinea',
            'alpha_2_code'            => 'GQ',
            'alpha_3_code'            => 'GNQ',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Middle Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '017',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '232',
            'name'                    => 'Eritrea',
            'alpha_2_code'            => 'ER',
            'alpha_3_code'            => 'ERI',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Eastern Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '014',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '233',
            'name'                    => 'Estonia',
            'alpha_2_code'            => 'EE',
            'alpha_3_code'            => 'EST',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Northern Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '154',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '231',
            'name'                    => 'Ethiopia',
            'alpha_2_code'            => 'ET',
            'alpha_3_code'            => 'ETH',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Eastern Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '014',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '238',
            'name'                    => 'Falkland Islands (Malvinas)',
            'alpha_2_code'            => 'FK',
            'alpha_3_code'            => 'FLK',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'South America',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '005',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '234',
            'name'                    => 'Faroe Islands',
            'alpha_2_code'            => 'FO',
            'alpha_3_code'            => 'FRO',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Northern Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '154',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '242',
            'name'                    => 'Fiji',
            'alpha_2_code'            => 'FJ',
            'alpha_3_code'            => 'FJI',
            'region_name'             => 'Oceania',
            'sub_region_name'         => 'Melanesia',
            'region_numeric_code'     => '009',
            'sub_region_numeric_code' => '054',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '246',
            'name'                    => 'Finland',
            'alpha_2_code'            => 'FI',
            'alpha_3_code'            => 'FIN',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Northern Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '154',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '250',
            'name'                    => 'France',
            'alpha_2_code'            => 'FR',
            'alpha_3_code'            => 'FRA',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Western Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '155',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '254',
            'name'                    => 'French Guiana',
            'alpha_2_code'            => 'GF',
            'alpha_3_code'            => 'GUF',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'South America',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '005',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '258',
            'name'                    => 'French Polynesia',
            'alpha_2_code'            => 'PF',
            'alpha_3_code'            => 'PYF',
            'region_name'             => 'Oceania',
            'sub_region_name'         => 'Polynesia',
            'region_numeric_code'     => '009',
            'sub_region_numeric_code' => '061',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '260',
            'name'                    => 'French Southern Territories',
            'alpha_2_code'            => 'TF',
            'alpha_3_code'            => 'ATF',
            'region_name'             => '',
            'sub_region_name'         => '',
            'region_numeric_code'     => '000',
            'sub_region_numeric_code' => '000',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '266',
            'name'                    => 'Gabon',
            'alpha_2_code'            => 'GA',
            'alpha_3_code'            => 'GAB',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Middle Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '017',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '270',
            'name'                    => 'Gambia',
            'alpha_2_code'            => 'GM',
            'alpha_3_code'            => 'GMB',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Western Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '011',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '268',
            'name'                    => 'Georgia',
            'alpha_2_code'            => 'GE',
            'alpha_3_code'            => 'GEO',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'Western Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '145',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '276',
            'name'                    => 'Germany',
            'alpha_2_code'            => 'DE',
            'alpha_3_code'            => 'DEU',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Western Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '155',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '288',
            'name'                    => 'Ghana',
            'alpha_2_code'            => 'GH',
            'alpha_3_code'            => 'GHA',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Western Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '011',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '292',
            'name'                    => 'Gibraltar',
            'alpha_2_code'            => 'GI',
            'alpha_3_code'            => 'GIB',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Southern Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '039',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '300',
            'name'                    => 'Greece',
            'alpha_2_code'            => 'GR',
            'alpha_3_code'            => 'GRC',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Southern Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '039',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '304',
            'name'                    => 'Greenland',
            'alpha_2_code'            => 'GL',
            'alpha_3_code'            => 'GRL',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'Northern America',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '021',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '308',
            'name'                    => 'Grenada',
            'alpha_2_code'            => 'GD',
            'alpha_3_code'            => 'GRD',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'Latin America and the Caribbean',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '419',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '312',
            'name'                    => 'Guadeloupe',
            'alpha_2_code'            => 'GP',
            'alpha_3_code'            => 'GLP',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'Latin America and the Caribbean',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '419',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '316',
            'name'                    => 'Guam',
            'alpha_2_code'            => 'GU',
            'alpha_3_code'            => 'GUM',
            'region_name'             => 'Oceania',
            'sub_region_name'         => 'Micronesia',
            'region_numeric_code'     => '009',
            'sub_region_numeric_code' => '057',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '320',
            'name'                    => 'Guatemala',
            'alpha_2_code'            => 'GT',
            'alpha_3_code'            => 'GTM',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'Central America',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '013',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '831',
            'name'                    => 'Guernsey',
            'alpha_2_code'            => 'GG',
            'alpha_3_code'            => 'GGY',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Northern Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '154',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '324',
            'name'                    => 'Guinea',
            'alpha_2_code'            => 'GN',
            'alpha_3_code'            => 'GIN',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Western Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '011',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '624',
            'name'                    => 'Guinea-Bissau',
            'alpha_2_code'            => 'GW',
            'alpha_3_code'            => 'GNB',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Western Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '011',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '328',
            'name'                    => 'Guyana',
            'alpha_2_code'            => 'GY',
            'alpha_3_code'            => 'GUY',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'South America',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '005',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '332',
            'name'                    => 'Haiti',
            'alpha_2_code'            => 'HT',
            'alpha_3_code'            => 'HTI',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'Latin America and the Caribbean',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '419',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '334',
            'name'                    => 'Heard Island and McDonald Islands',
            'alpha_2_code'            => 'HM',
            'alpha_3_code'            => 'HMD',
            'region_name'             => '',
            'sub_region_name'         => '',
            'region_numeric_code'     => '000',
            'sub_region_numeric_code' => '000',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '336',
            'name'                    => 'Holy See (Vatican City State)',
            'alpha_2_code'            => 'VA',
            'alpha_3_code'            => 'VAT',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Southern Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '039',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '340',
            'name'                    => 'Honduras',
            'alpha_2_code'            => 'HN',
            'alpha_3_code'            => 'HND',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'Central America',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '013',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '344',
            'name'                    => 'Hong Kong',
            'alpha_2_code'            => 'HK',
            'alpha_3_code'            => 'HKG',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'Eastern Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '030',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '348',
            'name'                    => 'Hungary',
            'alpha_2_code'            => 'HU',
            'alpha_3_code'            => 'HUN',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Eastern Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '151',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '352',
            'name'                    => 'Iceland',
            'alpha_2_code'            => 'IS',
            'alpha_3_code'            => 'ISL',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Northern Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '154',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '356',
            'name'                    => 'India',
            'alpha_2_code'            => 'IN',
            'alpha_3_code'            => 'IND',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'Southern Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '034',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '360',
            'name'                    => 'Indonesia',
            'alpha_2_code'            => 'ID',
            'alpha_3_code'            => 'IDN',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'South-Eastern Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '035',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '364',
            'name'                    => 'Iran, Islamic Republic of',
            'alpha_2_code'            => 'IR',
            'alpha_3_code'            => 'IRN',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'Southern Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '034',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '368',
            'name'                    => 'Iraq',
            'alpha_2_code'            => 'IQ',
            'alpha_3_code'            => 'IRQ',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'Western Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '145',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '372',
            'name'                    => 'Ireland',
            'alpha_2_code'            => 'IE',
            'alpha_3_code'            => 'IRL',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Northern Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '154',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '833',
            'name'                    => 'Isle of Man',
            'alpha_2_code'            => 'IM',
            'alpha_3_code'            => 'IMN',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Northern Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '154',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '376',
            'name'                    => 'Israel',
            'alpha_2_code'            => 'IL',
            'alpha_3_code'            => 'ISR',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'Western Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '145',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '380',
            'name'                    => 'Italy',
            'alpha_2_code'            => 'IT',
            'alpha_3_code'            => 'ITA',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Southern Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '039',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '388',
            'name'                    => 'Jamaica',
            'alpha_2_code'            => 'JM',
            'alpha_3_code'            => 'JAM',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'Latin America and the Caribbean',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '419',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '392',
            'name'                    => 'Japan',
            'alpha_2_code'            => 'JP',
            'alpha_3_code'            => 'JPN',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'Eastern Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '030',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '832',
            'name'                    => 'Jersey',
            'alpha_2_code'            => 'JE',
            'alpha_3_code'            => 'JEY',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Northern Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '154',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '400',
            'name'                    => 'Jordan',
            'alpha_2_code'            => 'JO',
            'alpha_3_code'            => 'JOR',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'Western Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '145',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '398',
            'name'                    => 'Kazakhstan',
            'alpha_2_code'            => 'KZ',
            'alpha_3_code'            => 'KAZ',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'Central Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '143',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '404',
            'name'                    => 'Kenya',
            'alpha_2_code'            => 'KE',
            'alpha_3_code'            => 'KEN',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Eastern Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '014',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '296',
            'name'                    => 'Kiribati',
            'alpha_2_code'            => 'KI',
            'alpha_3_code'            => 'KIR',
            'region_name'             => 'Oceania',
            'sub_region_name'         => 'Micronesia',
            'region_numeric_code'     => '009',
            'sub_region_numeric_code' => '057',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '408',
            'name'                    => 'Korea, Democratic People\'s Republic of',
            'alpha_2_code'            => 'KP',
            'alpha_3_code'            => 'PRK',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'Eastern Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '030',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '410',
            'name'                    => 'Korea, Republic of',
            'alpha_2_code'            => 'KR',
            'alpha_3_code'            => 'KOR',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'Eastern Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '030',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '414',
            'name'                    => 'Kuwait',
            'alpha_2_code'            => 'KW',
            'alpha_3_code'            => 'KWT',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'Western Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '145',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '417',
            'name'                    => 'Kyrgyzstan',
            'alpha_2_code'            => 'KG',
            'alpha_3_code'            => 'KGZ',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'Central Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '143',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '418',
            'name'                    => 'Lao People\'s Democratic Republic',
            'alpha_2_code'            => 'LA',
            'alpha_3_code'            => 'LAO',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'South-Eastern Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '035',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '428',
            'name'                    => 'Latvia',
            'alpha_2_code'            => 'LV',
            'alpha_3_code'            => 'LVA',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Northern Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '154',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '422',
            'name'                    => 'Lebanon',
            'alpha_2_code'            => 'LB',
            'alpha_3_code'            => 'LBN',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'Western Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '145',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '426',
            'name'                    => 'Lesotho',
            'alpha_2_code'            => 'LS',
            'alpha_3_code'            => 'LSO',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Southern Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '018',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '430',
            'name'                    => 'Liberia',
            'alpha_2_code'            => 'LR',
            'alpha_3_code'            => 'LBR',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Western Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '011',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '434',
            'name'                    => 'Libyan Arab Jamahiriya',
            'alpha_2_code'            => 'LY',
            'alpha_3_code'            => 'LBY',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Northern Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '015',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '438',
            'name'                    => 'Liechtenstein',
            'alpha_2_code'            => 'LI',
            'alpha_3_code'            => 'LIE',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Western Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '155',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '440',
            'name'                    => 'Lithuania',
            'alpha_2_code'            => 'LT',
            'alpha_3_code'            => 'LTU',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Northern Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '154',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '442',
            'name'                    => 'Luxembourg',
            'alpha_2_code'            => 'LU',
            'alpha_3_code'            => 'LUX',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Western Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '155',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '446',
            'name'                    => 'Macao',
            'alpha_2_code'            => 'MO',
            'alpha_3_code'            => 'MAC',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'Eastern Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '030',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '807',
            'name'                    => 'Macedonia, the former Yugoslav Republic of',
            'alpha_2_code'            => 'MK',
            'alpha_3_code'            => 'MKD',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Southern Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '039',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '450',
            'name'                    => 'Madagascar',
            'alpha_2_code'            => 'MG',
            'alpha_3_code'            => 'MDG',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Eastern Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '014',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '454',
            'name'                    => 'Malawi',
            'alpha_2_code'            => 'MW',
            'alpha_3_code'            => 'MWI',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Eastern Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '014',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '458',
            'name'                    => 'Malaysia',
            'alpha_2_code'            => 'MY',
            'alpha_3_code'            => 'MYS',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'South-Eastern Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '035',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '462',
            'name'                    => 'Maldives',
            'alpha_2_code'            => 'MV',
            'alpha_3_code'            => 'MDV',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'Southern Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '034',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '466',
            'name'                    => 'Mali',
            'alpha_2_code'            => 'ML',
            'alpha_3_code'            => 'MLI',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Western Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '011',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '470',
            'name'                    => 'Malta',
            'alpha_2_code'            => 'MT',
            'alpha_3_code'            => 'MLT',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Southern Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '039',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '584',
            'name'                    => 'Marshall Islands',
            'alpha_2_code'            => 'MH',
            'alpha_3_code'            => 'MHL',
            'region_name'             => 'Oceania',
            'sub_region_name'         => 'Micronesia',
            'region_numeric_code'     => '009',
            'sub_region_numeric_code' => '057',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '474',
            'name'                    => 'Martinique',
            'alpha_2_code'            => 'MQ',
            'alpha_3_code'            => 'MTQ',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'Latin America and the Caribbean',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '419',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '478',
            'name'                    => 'Mauritania',
            'alpha_2_code'            => 'MR',
            'alpha_3_code'            => 'MRT',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Western Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '011',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '480',
            'name'                    => 'Mauritius',
            'alpha_2_code'            => 'MU',
            'alpha_3_code'            => 'MUS',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Eastern Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '014',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '175',
            'name'                    => 'Mayotte',
            'alpha_2_code'            => 'YT',
            'alpha_3_code'            => 'MYT',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Eastern Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '014',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '484',
            'name'                    => 'Mexico',
            'alpha_2_code'            => 'MX',
            'alpha_3_code'            => 'MEX',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'Central America',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '013',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '583',
            'name'                    => 'Micronesia, Federated States of',
            'alpha_2_code'            => 'FM',
            'alpha_3_code'            => 'FSM',
            'region_name'             => 'Oceania',
            'sub_region_name'         => 'Micronesia',
            'region_numeric_code'     => '009',
            'sub_region_numeric_code' => '057',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '498',
            'name'                    => 'Moldova, Republic of',
            'alpha_2_code'            => 'MD',
            'alpha_3_code'            => 'MDA',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Eastern Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '151',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '492',
            'name'                    => 'Monaco',
            'alpha_2_code'            => 'MC',
            'alpha_3_code'            => 'MCO',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Western Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '155',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '496',
            'name'                    => 'Mongolia',
            'alpha_2_code'            => 'MN',
            'alpha_3_code'            => 'MNG',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'Eastern Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '030',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '499',
            'name'                    => 'Montenegro',
            'alpha_2_code'            => 'ME',
            'alpha_3_code'            => 'MNE',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Southern Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '039',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '500',
            'name'                    => 'Montserrat',
            'alpha_2_code'            => 'MS',
            'alpha_3_code'            => 'MSR',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'Latin America and the Caribbean',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '419',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '504',
            'name'                    => 'Morocco',
            'alpha_2_code'            => 'MA',
            'alpha_3_code'            => 'MAR',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Northern Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '015',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '508',
            'name'                    => 'Mozambique',
            'alpha_2_code'            => 'MZ',
            'alpha_3_code'            => 'MOZ',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Eastern Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '014',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '104',
            'name'                    => 'Myanmar',
            'alpha_2_code'            => 'MM',
            'alpha_3_code'            => 'MMR',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'South-Eastern Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '035',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '516',
            'name'                    => 'Namibia',
            'alpha_2_code'            => 'NA',
            'alpha_3_code'            => 'NAM',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Southern Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '018',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '520',
            'name'                    => 'Nauru',
            'alpha_2_code'            => 'NR',
            'alpha_3_code'            => 'NRU',
            'region_name'             => 'Oceania',
            'sub_region_name'         => 'Micronesia',
            'region_numeric_code'     => '009',
            'sub_region_numeric_code' => '057',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '524',
            'name'                    => 'Nepal',
            'alpha_2_code'            => 'NP',
            'alpha_3_code'            => 'NPL',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'Southern Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '034',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '528',
            'name'                    => 'Netherlands',
            'alpha_2_code'            => 'NL',
            'alpha_3_code'            => 'NLD',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Western Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '155',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '540',
            'name'                    => 'New Caledonia',
            'alpha_2_code'            => 'NC',
            'alpha_3_code'            => 'NCL',
            'region_name'             => 'Oceania',
            'sub_region_name'         => 'Melanesia',
            'region_numeric_code'     => '009',
            'sub_region_numeric_code' => '054',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '554',
            'name'                    => 'New Zealand',
            'alpha_2_code'            => 'NZ',
            'alpha_3_code'            => 'NZL',
            'region_name'             => 'Oceania',
            'sub_region_name'         => 'Australia and New Zealand',
            'region_numeric_code'     => '009',
            'sub_region_numeric_code' => '053',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '558',
            'name'                    => 'Nicaragua',
            'alpha_2_code'            => 'NI',
            'alpha_3_code'            => 'NIC',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'Central America',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '013',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '562',
            'name'                    => 'Niger',
            'alpha_2_code'            => 'NE',
            'alpha_3_code'            => 'NER',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Western Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '011',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '566',
            'name'                    => 'Nigeria',
            'alpha_2_code'            => 'NG',
            'alpha_3_code'            => 'NGA',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Western Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '011',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '570',
            'name'                    => 'Niue',
            'alpha_2_code'            => 'NU',
            'alpha_3_code'            => 'NIU',
            'region_name'             => 'Oceania',
            'sub_region_name'         => 'Polynesia',
            'region_numeric_code'     => '009',
            'sub_region_numeric_code' => '061',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '574',
            'name'                    => 'Norfolk Island',
            'alpha_2_code'            => 'NF',
            'alpha_3_code'            => 'NFK',
            'region_name'             => 'Oceania',
            'sub_region_name'         => 'Australia and New Zealand',
            'region_numeric_code'     => '009',
            'sub_region_numeric_code' => '053',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '580',
            'name'                    => 'Northern Mariana Islands',
            'alpha_2_code'            => 'MP',
            'alpha_3_code'            => 'MNP',
            'region_name'             => 'Oceania',
            'sub_region_name'         => 'Micronesia',
            'region_numeric_code'     => '009',
            'sub_region_numeric_code' => '057',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '578',
            'name'                    => 'Norway',
            'alpha_2_code'            => 'NO',
            'alpha_3_code'            => 'NOR',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Northern Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '154',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '512',
            'name'                    => 'Oman',
            'alpha_2_code'            => 'OM',
            'alpha_3_code'            => 'OMN',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'Western Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '145',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '586',
            'name'                    => 'Pakistan',
            'alpha_2_code'            => 'PK',
            'alpha_3_code'            => 'PAK',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'Southern Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '034',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '585',
            'name'                    => 'Palau',
            'alpha_2_code'            => 'PW',
            'alpha_3_code'            => 'PLW',
            'region_name'             => 'Oceania',
            'sub_region_name'         => 'Micronesia',
            'region_numeric_code'     => '009',
            'sub_region_numeric_code' => '057',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '275',
            'name'                    => 'Palestinian Territory, Occupied',
            'alpha_2_code'            => 'PS',
            'alpha_3_code'            => 'PSE',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'Western Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '145',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '591',
            'name'                    => 'Panama',
            'alpha_2_code'            => 'PA',
            'alpha_3_code'            => 'PAN',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'Central America',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '013',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '598',
            'name'                    => 'Papua New Guinea',
            'alpha_2_code'            => 'PG',
            'alpha_3_code'            => 'PNG',
            'region_name'             => 'Oceania',
            'sub_region_name'         => 'Melanesia',
            'region_numeric_code'     => '009',
            'sub_region_numeric_code' => '054',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '600',
            'name'                    => 'Paraguay',
            'alpha_2_code'            => 'PY',
            'alpha_3_code'            => 'PRY',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'South America',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '005',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '604',
            'name'                    => 'Peru',
            'alpha_2_code'            => 'PE',
            'alpha_3_code'            => 'PER',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'South America',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '005',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '608',
            'name'                    => 'Philippines',
            'alpha_2_code'            => 'PH',
            'alpha_3_code'            => 'PHL',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'South-Eastern Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '035',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '612',
            'name'                    => 'Pitcairn',
            'alpha_2_code'            => 'PN',
            'alpha_3_code'            => 'PCN',
            'region_name'             => 'Oceania',
            'sub_region_name'         => 'Polynesia',
            'region_numeric_code'     => '009',
            'sub_region_numeric_code' => '061',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '616',
            'name'                    => 'Poland',
            'alpha_2_code'            => 'PL',
            'alpha_3_code'            => 'POL',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Eastern Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '151',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '620',
            'name'                    => 'Portugal',
            'alpha_2_code'            => 'PT',
            'alpha_3_code'            => 'PRT',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Southern Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '039',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '630',
            'name'                    => 'Puerto Rico',
            'alpha_2_code'            => 'PR',
            'alpha_3_code'            => 'PRI',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'Latin America and the Caribbean',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '419',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '634',
            'name'                    => 'Qatar',
            'alpha_2_code'            => 'QA',
            'alpha_3_code'            => 'QAT',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'Western Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '145',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '638',
            'name'                    => 'Réunion',
            'alpha_2_code'            => 'RE',
            'alpha_3_code'            => 'REU',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Eastern Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '014',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '642',
            'name'                    => 'Romania',
            'alpha_2_code'            => 'RO',
            'alpha_3_code'            => 'ROU',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Eastern Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '151',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '643',
            'name'                    => 'Russian Federation',
            'alpha_2_code'            => 'RU',
            'alpha_3_code'            => 'RUS',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Eastern Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '151',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '646',
            'name'                    => 'Rwanda',
            'alpha_2_code'            => 'RW',
            'alpha_3_code'            => 'RWA',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Eastern Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '014',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '652',
            'name'                    => 'Saint Barthélemy',
            'alpha_2_code'            => 'BL',
            'alpha_3_code'            => 'BLM',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'Latin America and the Caribbean',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '419',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '654',
            'name'                    => 'Saint Helena, Ascension and Tristan da Cunha',
            'alpha_2_code'            => 'SH',
            'alpha_3_code'            => 'SHN',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Western Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '011',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '659',
            'name'                    => 'Saint Kitts and Nevis',
            'alpha_2_code'            => 'KN',
            'alpha_3_code'            => 'KNA',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'Latin America and the Caribbean',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '419',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '662',
            'name'                    => 'Saint Lucia',
            'alpha_2_code'            => 'LC',
            'alpha_3_code'            => 'LCA',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'Latin America and the Caribbean',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '419',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '663',
            'name'                    => 'Saint Martin (French part)',
            'alpha_2_code'            => 'MF',
            'alpha_3_code'            => 'MAF',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'Latin America and the Caribbean',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '419',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '666',
            'name'                    => 'Saint Pierre and Miquelon',
            'alpha_2_code'            => 'PM',
            'alpha_3_code'            => 'SPM',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'Northern America',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '021',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '670',
            'name'                    => 'Saint Vincent and the Grenadines',
            'alpha_2_code'            => 'VC',
            'alpha_3_code'            => 'VCT',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'Latin America and the Caribbean',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '419',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '882',
            'name'                    => 'Samoa',
            'alpha_2_code'            => 'WS',
            'alpha_3_code'            => 'WSM',
            'region_name'             => 'Oceania',
            'sub_region_name'         => 'Polynesia',
            'region_numeric_code'     => '009',
            'sub_region_numeric_code' => '061',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '674',
            'name'                    => 'San Marino',
            'alpha_2_code'            => 'SM',
            'alpha_3_code'            => 'SMR',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Southern Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '039',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '678',
            'name'                    => 'Sao Tome and Principe',
            'alpha_2_code'            => 'ST',
            'alpha_3_code'            => 'STP',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Middle Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '017',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '682',
            'name'                    => 'Saudi Arabia',
            'alpha_2_code'            => 'SA',
            'alpha_3_code'            => 'SAU',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'Western Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '145',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '686',
            'name'                    => 'Senegal',
            'alpha_2_code'            => 'SN',
            'alpha_3_code'            => 'SEN',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Western Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '011',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '688',
            'name'                    => 'Serbia',
            'alpha_2_code'            => 'RS',
            'alpha_3_code'            => 'SRB',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Southern Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '039',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '690',
            'name'                    => 'Seychelles',
            'alpha_2_code'            => 'SC',
            'alpha_3_code'            => 'SYC',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Eastern Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '014',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '694',
            'name'                    => 'Sierra Leone',
            'alpha_2_code'            => 'SL',
            'alpha_3_code'            => 'SLE',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Western Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '011',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '702',
            'name'                    => 'Singapore',
            'alpha_2_code'            => 'SG',
            'alpha_3_code'            => 'SGP',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'South-Eastern Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '035',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '534',
            'name'                    => 'Sint Maarten (Dutch part)',
            'alpha_2_code'            => 'SX',
            'alpha_3_code'            => 'SXM',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'Latin America and the Caribbean',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '419',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '703',
            'name'                    => 'Slovakia',
            'alpha_2_code'            => 'SK',
            'alpha_3_code'            => 'SVK',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Eastern Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '151',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '705',
            'name'                    => 'Slovenia',
            'alpha_2_code'            => 'SI',
            'alpha_3_code'            => 'SVN',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Southern Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '039',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '090',
            'name'                    => 'Solomon Islands',
            'alpha_2_code'            => 'SB',
            'alpha_3_code'            => 'SLB',
            'region_name'             => 'Oceania',
            'sub_region_name'         => 'Melanesia',
            'region_numeric_code'     => '009',
            'sub_region_numeric_code' => '054',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '706',
            'name'                    => 'Somalia',
            'alpha_2_code'            => 'SO',
            'alpha_3_code'            => 'SOM',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Eastern Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '014',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '710',
            'name'                    => 'South Africa',
            'alpha_2_code'            => 'ZA',
            'alpha_3_code'            => 'ZAF',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Southern Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '018',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '239',
            'name'                    => 'South Georgia and the South Sandwich Islands',
            'alpha_2_code'            => 'GS',
            'alpha_3_code'            => 'SGS',
            'region_name'             => '',
            'sub_region_name'         => '',
            'region_numeric_code'     => '000',
            'sub_region_numeric_code' => '000',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '728',
            'name'                    => 'South Sudan',
            'alpha_2_code'            => 'SS',
            'alpha_3_code'            => 'SSD',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Northern Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '015',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '724',
            'name'                    => 'Spain',
            'alpha_2_code'            => 'ES',
            'alpha_3_code'            => 'ESP',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Southern Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '039',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '144',
            'name'                    => 'Sri Lanka',
            'alpha_2_code'            => 'LK',
            'alpha_3_code'            => 'LKA',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'Southern Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '034',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '729',
            'name'                    => 'Sudan',
            'alpha_2_code'            => 'SD',
            'alpha_3_code'            => 'SDN',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Northern Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '015',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '740',
            'name'                    => 'Suriname',
            'alpha_2_code'            => 'SR',
            'alpha_3_code'            => 'SUR',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'South America',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '005',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '744',
            'name'                    => 'Svalbard and Jan Mayen',
            'alpha_2_code'            => 'SJ',
            'alpha_3_code'            => 'SJM',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Northern Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '154',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '748',
            'name'                    => 'Swaziland',
            'alpha_2_code'            => 'SZ',
            'alpha_3_code'            => 'SWZ',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Southern Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '018',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '752',
            'name'                    => 'Sweden',
            'alpha_2_code'            => 'SE',
            'alpha_3_code'            => 'SWE',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Northern Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '154',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '756',
            'name'                    => 'Switzerland',
            'alpha_2_code'            => 'CH',
            'alpha_3_code'            => 'CHE',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Western Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '155',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '760',
            'name'                    => 'Syrian Arab Republic',
            'alpha_2_code'            => 'SY',
            'alpha_3_code'            => 'SYR',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'Western Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '145',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '158',
            'name'                    => 'Taiwan, Province of China',
            'alpha_2_code'            => 'TW',
            'alpha_3_code'            => 'TWN',
            'region_name'             => '',
            'sub_region_name'         => '',
            'region_numeric_code'     => '000',
            'sub_region_numeric_code' => '000',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '762',
            'name'                    => 'Tajikistan',
            'alpha_2_code'            => 'TJ',
            'alpha_3_code'            => 'TJK',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'Central Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '143',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '834',
            'name'                    => 'Tanzania, United Republic of',
            'alpha_2_code'            => 'TZ',
            'alpha_3_code'            => 'TZA',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Eastern Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '014',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '764',
            'name'                    => 'Thailand',
            'alpha_2_code'            => 'TH',
            'alpha_3_code'            => 'THA',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'South-Eastern Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '035',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '626',
            'name'                    => 'Timor-Leste',
            'alpha_2_code'            => 'TL',
            'alpha_3_code'            => 'TLS',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'South-Eastern Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '035',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '768',
            'name'                    => 'Togo',
            'alpha_2_code'            => 'TG',
            'alpha_3_code'            => 'TGO',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Western Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '011',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '772',
            'name'                    => 'Tokelau',
            'alpha_2_code'            => 'TK',
            'alpha_3_code'            => 'TKL',
            'region_name'             => 'Oceania',
            'sub_region_name'         => 'Polynesia',
            'region_numeric_code'     => '009',
            'sub_region_numeric_code' => '061',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '776',
            'name'                    => 'Tonga',
            'alpha_2_code'            => 'TO',
            'alpha_3_code'            => 'TON',
            'region_name'             => 'Oceania',
            'sub_region_name'         => 'Polynesia',
            'region_numeric_code'     => '009',
            'sub_region_numeric_code' => '061',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '780',
            'name'                    => 'Trinidad and Tobago',
            'alpha_2_code'            => 'TT',
            'alpha_3_code'            => 'TTO',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'Latin America and the Caribbean',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '419',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '788',
            'name'                    => 'Tunisia',
            'alpha_2_code'            => 'TN',
            'alpha_3_code'            => 'TUN',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Northern Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '015',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '792',
            'name'                    => 'Turkey',
            'alpha_2_code'            => 'TR',
            'alpha_3_code'            => 'TUR',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'Western Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '145',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '795',
            'name'                    => 'Turkmenistan',
            'alpha_2_code'            => 'TM',
            'alpha_3_code'            => 'TKM',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'Central Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '143',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '796',
            'name'                    => 'Turks and Caicos Islands',
            'alpha_2_code'            => 'TC',
            'alpha_3_code'            => 'TCA',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'Latin America and the Caribbean',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '419',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '798',
            'name'                    => 'Tuvalu',
            'alpha_2_code'            => 'TV',
            'alpha_3_code'            => 'TUV',
            'region_name'             => 'Oceania',
            'sub_region_name'         => 'Polynesia',
            'region_numeric_code'     => '009',
            'sub_region_numeric_code' => '061',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '800',
            'name'                    => 'Uganda',
            'alpha_2_code'            => 'UG',
            'alpha_3_code'            => 'UGA',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Eastern Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '014',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '804',
            'name'                    => 'Ukraine',
            'alpha_2_code'            => 'UA',
            'alpha_3_code'            => 'UKR',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Eastern Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '151',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '784',
            'name'                    => 'United Arab Emirates',
            'alpha_2_code'            => 'AE',
            'alpha_3_code'            => 'ARE',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'Western Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '145',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '826',
            'name'                    => 'United Kingdom',
            'alpha_2_code'            => 'GB',
            'alpha_3_code'            => 'GBR',
            'region_name'             => 'Europe',
            'sub_region_name'         => 'Northern Europe',
            'region_numeric_code'     => '150',
            'sub_region_numeric_code' => '154',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '840',
            'name'                    => 'United States',
            'alpha_2_code'            => 'US',
            'alpha_3_code'            => 'USA',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'Northern America',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '021',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '581',
            'name'                    => 'United States Minor Outlying Islands',
            'alpha_2_code'            => 'UM',
            'alpha_3_code'            => 'UMI',
            'region_name'             => '',
            'sub_region_name'         => '',
            'region_numeric_code'     => '000',
            'sub_region_numeric_code' => '000',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '858',
            'name'                    => 'Uruguay',
            'alpha_2_code'            => 'UY',
            'alpha_3_code'            => 'URY',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'South America',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '005',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '860',
            'name'                    => 'Uzbekistan',
            'alpha_2_code'            => 'UZ',
            'alpha_3_code'            => 'UZB',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'Central Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '143',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '548',
            'name'                    => 'Vanuatu',
            'alpha_2_code'            => 'VU',
            'alpha_3_code'            => 'VUT',
            'region_name'             => 'Oceania',
            'sub_region_name'         => 'Melanesia',
            'region_numeric_code'     => '009',
            'sub_region_numeric_code' => '054',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '862',
            'name'                    => 'Venezuela, Bolivarian Republic of',
            'alpha_2_code'            => 'VE',
            'alpha_3_code'            => 'VEN',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'South America',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '005',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '704',
            'name'                    => 'Viet Nam',
            'alpha_2_code'            => 'VN',
            'alpha_3_code'            => 'VNM',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'South-Eastern Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '035',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '092',
            'name'                    => 'Virgin Islands, British',
            'alpha_2_code'            => 'VG',
            'alpha_3_code'            => 'VGB',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'Latin America and the Caribbean',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '419',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '850',
            'name'                    => 'Virgin Islands, U.S.',
            'alpha_2_code'            => 'VI',
            'alpha_3_code'            => 'VIR',
            'region_name'             => 'Americas',
            'sub_region_name'         => 'Latin America and the Caribbean',
            'region_numeric_code'     => '019',
            'sub_region_numeric_code' => '419',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '876',
            'name'                    => 'Wallis and Futuna',
            'alpha_2_code'            => 'WF',
            'alpha_3_code'            => 'WLF',
            'region_name'             => 'Oceania',
            'sub_region_name'         => 'Polynesia',
            'region_numeric_code'     => '009',
            'sub_region_numeric_code' => '061',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '732',
            'name'                    => 'Western Sahara',
            'alpha_2_code'            => 'EH',
            'alpha_3_code'            => 'ESH',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Northern Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '015',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '887',
            'name'                    => 'Yemen',
            'alpha_2_code'            => 'YE',
            'alpha_3_code'            => 'YEM',
            'region_name'             => 'Asia',
            'sub_region_name'         => 'Western Asia',
            'region_numeric_code'     => '142',
            'sub_region_numeric_code' => '145',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '894',
            'name'                    => 'Zambia',
            'alpha_2_code'            => 'ZM',
            'alpha_3_code'            => 'ZMB',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Eastern Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '014',
        ]);

        DB::table('countries')->insert([
            'numeric_code'            => '716',
            'name'                    => 'Zimbabwe',
            'alpha_2_code'            => 'ZW',
            'alpha_3_code'            => 'ZWE',
            'region_name'             => 'Africa',
            'sub_region_name'         => 'Eastern Africa',
            'region_numeric_code'     => '002',
            'sub_region_numeric_code' => '014',
        ]);
    }
}
