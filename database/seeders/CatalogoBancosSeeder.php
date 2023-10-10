<?php

namespace Database\Seeders;

use App\Models\CatalogoBancos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CatalogoBancosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ejemplo de inserción de datos en la tabla catalogo_bancos
        CatalogoBancos::create([
            'Clave' => '002',
            'Nombre_corto' => 'BANAMEX',
            'Nombre_o_razon_social' => 'Banco Nacional de México, S.A., Institución de Banca Múltiple, Grupo Financiero Banamex'
        ]);
        CatalogoBancos::create([
            'Clave' => '006',
            'Nombre_corto' => 'BANCOMEXT',
            'Nombre_o_razon_social' => 'Banco Nacional de Comercio Exterior, Sociedad Nacional de Crédito, Institución de Banca de Desarrollo'
        ]);
        CatalogoBancos::create([
            'Clave' => '009', 'Nombre_corto' => 'BANOBRAS', 'Nombre_o_razon_social' => 'Banco Nacional de Obras y Servicios Públicos, Sociedad Nacional de Crédito, Institución de Banca de Desarrollo'
        ]);
        CatalogoBancos::create([
            'Clave' => '012', 'Nombre_corto' => 'BBVA BANCOMER', 'Nombre_o_razon_social' => 'BBVA Bancomer, S.A., Institución de Banca Múltiple, Grupo Financiero BBVA Bancomer'
        ]);
        CatalogoBancos::create([
            'Clave' => '014', 'Nombre_corto' => 'SANTANDER', 'Nombre_o_razon_social' => 'Banco Santander (México), S.A., Institución de Banca Múltiple, Grupo Financiero Santander'
        ]);
        CatalogoBancos::create([
            'Clave' => '019', 'Nombre_corto' => 'BANJERCITO', 'Nombre_o_razon_social' => 'Banco Nacional del Ejército, Fuerza Aérea y Armada, Sociedad Nacional de Crédito, Institución de Banca de Desarrollo'
        ]);
        CatalogoBancos::create([
            'Clave' => '021', 'Nombre_corto' => 'HSBC', 'Nombre_o_razon_social' => 'HSBC México, S.A., institución De Banca Múltiple, Grupo Financiero HSBC'
        ]);
        CatalogoBancos::create([
            'Clave' => '030', 'Nombre_corto' => 'BAJIO', 'Nombre_o_razon_social' => 'Banco del Bajío, S.A., Institución de Banca Múltiple'
        ]);
        CatalogoBancos::create([
            'Clave' => '032', 'Nombre_corto' => 'IXE', 'Nombre_o_razon_social' => 'IXE Banco, S.A., Institución de Banca Múltiple, IXE Grupo Financiero'
        ]);
        CatalogoBancos::create([
            'Clave' => '036', 'Nombre_corto' => 'INBURSA', 'Nombre_o_razon_social' => 'Banco Inbursa, S.A., Institución de Banca Múltiple, Grupo Financiero Inbursa'
        ]);
        CatalogoBancos::create([
            'Clave' => '037', 'Nombre_corto' => 'INTERACCIONES', 'Nombre_o_razon_social' => 'Banco Interacciones, S.A., Institución de Banca Múltiple'
        ]);
        CatalogoBancos::create([
            'Clave' => '042', 'Nombre_corto' => 'MIFEL', 'Nombre_o_razon_social' => 'Banca Mifel, S.A., Institución de Banca Múltiple, Grupo Financiero Mifel'
        ]);
        CatalogoBancos::create([
            'Clave' => '044', 'Nombre_corto' => 'SCOTIABANK', 'Nombre_o_razon_social' => 'Scotiabank Inverlat, S.A.'
        ]);
        CatalogoBancos::create([
            'Clave' => '058', 'Nombre_corto' => 'BANREGIO', 'Nombre_o_razon_social' => 'Banco Regional de Monterrey, S.A., Institución de Banca Múltiple, Banregio Grupo Financiero'
        ]);
        CatalogoBancos::create([
            'Clave' => '059', 'Nombre_corto' => 'INVEX', 'Nombre_o_razon_social' => 'Banco Invex, S.A., Institución de Banca Múltiple, Invex Grupo Financiero'
        ]);
        CatalogoBancos::create([
            'Clave' => '060', 'Nombre_corto' => 'BANSI', 'Nombre_o_razon_social' => 'Bansi, S.A., Institución de Banca Múltiple'
        ]);
        CatalogoBancos::create([
            'Clave' => '062', 'Nombre_corto' => 'AFIRME', 'Nombre_o_razon_social' => 'Banca Afirme, S.A., Institución de Banca Múltiple'
        ]);

        CatalogoBancos::create(['Clave' => '072', 'Nombre_corto' => 'BANORTE', 'Nombre_o_razon_social' => 'Banco Mercantil del Norte, S.A., Institución de Banca Múltiple, Grupo Financiero Banorte']);

        CatalogoBancos::create(['Clave' => '102', 'Nombre_corto' => 'THE ROYAL BANK', 'Nombre_o_razon_social' => 'The Royal Bank of Scotland México, S.A., Institución de Banca Múltiple']);
        CatalogoBancos::create(['Clave' => '103', 'Nombre_corto' => 'AMERICAN EXPRESS', 'Nombre_o_razon_social' => 'American Express Bank (México), S.A., Institución de Banca Múltiple']);
        CatalogoBancos::create(['Clave' => '106', 'Nombre_corto' => 'BAMSA', 'Nombre_o_razon_social' => 'Bank of America México, S.A., Institución de Banca Múltiple, Grupo Financiero Bank of America']);
        CatalogoBancos::create(['Clave' => '108', 'Nombre_corto' => 'TOKYO', 'Nombre_o_razon_social' => 'Bank of Tokyo-Mitsubishi UFJ (México), S.A.']);
        CatalogoBancos::create(['Clave' => '110', 'Nombre_corto' => 'JP MORGAN', 'Nombre_o_razon_social' => 'Banco J.P. Morgan, S.A., Institución de Banca Múltiple, J.P. Morgan Grupo Financiero']);
        CatalogoBancos::create(['Clave' => '112', 'Nombre_corto' => 'BMONEX', 'Nombre_o_razon_social' => 'Banco Monex, S.A., Institución de Banca Múltiple']);
        CatalogoBancos::create(['Clave' => '113', 'Nombre_corto' => 'VE POR MAS', 'Nombre_o_razon_social' => 'Banco Ve Por Mas, S.A. Institución de Banca Múltiple']);
        CatalogoBancos::create(['Clave' => '116', 'Nombre_corto' => 'ING', 'Nombre_o_razon_social' => 'ING Bank (México), S.A., Institución de Banca Múltiple, ING Grupo Financiero']);
        CatalogoBancos::create(['Clave' => '126', 'Nombre_corto' => 'CREDIT SUISSE', 'Nombre_o_razon_social' => 'Banco Credit Suisse (México), S.A. Institución de Banca Múltiple, Grupo Financiero Credit Suisse (México)']);
        CatalogoBancos::create(['Clave' => '124', 'Nombre_corto' => 'DEUTSCHE', 'Nombre_o_razon_social' => 'Deutsche Bank México, S.A., Institución de Banca Múltiple']);
        CatalogoBancos::create(['Clave' => '127', 'Nombre_corto' => 'AZTECA', 'Nombre_o_razon_social' => 'Banco Azteca, S.A. Institución de Banca Múltiple']);
        CatalogoBancos::create(['Clave' => '128', 'Nombre_corto' => 'AUTOFIN', 'Nombre_o_razon_social' => 'Banco Autofin México, S.A. Institución de Banca Múltiple']);
        CatalogoBancos::create(['Clave' => '129', 'Nombre_corto' => 'BARCLAYS', 'Nombre_o_razon_social' => 'Barclays Bank México, S.A., Institución de Banca Múltiple, Grupo Financiero Barclays México']);
        CatalogoBancos::create(['Clave' => '130', 'Nombre_corto' => 'COMPARTAMOS', 'Nombre_o_razon_social' => 'Banco Compartamos, S.A., Institución de Banca Múltiple']);
        CatalogoBancos::create(['Clave' => '131', 'Nombre_corto' => 'BANCO FAMSA', 'Nombre_o_razon_social' => 'Banco Ahorro Famsa, S.A., Institución de Banca Múltiple']);
        CatalogoBancos::create(['Clave' => '132', 'Nombre_corto' => 'BMULTIVA', 'Nombre_o_razon_social' => 'Banco Multiva, S.A., Institución de Banca Múltiple, Multivalores Grupo Financiero']);
        CatalogoBancos::create(['Clave' => '133', 'Nombre_corto' => 'ACTINVER', 'Nombre_o_razon_social' => 'Banco Actinver, S.A. Institución de Banca Múltiple, Grupo Financiero Actinver']);
        CatalogoBancos::create(['Clave' => '134', 'Nombre_corto' => 'WAL-MART', 'Nombre_o_razon_social' => 'Banco Wal-Mart de México Adelante, S.A., Institución de Banca Múltiple']);
        CatalogoBancos::create(['Clave' => '135', 'Nombre_corto' => 'NAFIN', 'Nombre_o_razon_social' => 'Nacional Financiera, Sociedad Nacional de Crédito, Institución de Banca de Desarrollo']);
        CatalogoBancos::create(['Clave' => '136', 'Nombre_corto' => 'INTERBANCO', 'Nombre_o_razon_social' => 'Inter Banco, S.A. Institución de Banca Múltiple']);
        CatalogoBancos::create(['Clave' => '137', 'Nombre_corto' => 'BANCOPPEL', 'Nombre_o_razon_social' => 'BanCoppel, S.A., Institución de Banca Múltiple']);
        CatalogoBancos::create(['Clave' => '138', 'Nombre_corto' => 'ABC CAPITAL', 'Nombre_o_razon_social' => 'ABC Capital, S.A., Institución de Banca Múltiple']);
        CatalogoBancos::create(['Clave' => '139', 'Nombre_corto' => 'UBS BANK', 'Nombre_o_razon_social' => 'UBS Bank México, S.A., Institución de Banca Múltiple, UBS Grupo Financiero']);
        CatalogoBancos::create(['Clave' => '140', 'Nombre_corto' => 'CONSUBANCO', 'Nombre_o_razon_social' => 'Consubanco, S.A. Institución de Banca Múltiple']);
        CatalogoBancos::create(['Clave' => '141', 'Nombre_corto' => 'VOLKSWAGEN', 'Nombre_o_razon_social' => 'Volkswagen Bank, S.A., Institución de Banca Múltiple']);
        CatalogoBancos::create(['Clave' => '143', 'Nombre_corto' => 'CIBANCO', 'Nombre_o_razon_social' => 'CIBanco, S.A.']);
        CatalogoBancos::create(['Clave' => '145', 'Nombre_corto' => 'BBASE', 'Nombre_o_razon_social' => 'Banco Base, S.A., Institución de Banca Múltiple']);
        CatalogoBancos::create(['Clave' => '166', 'Nombre_corto' => 'BANSEFI', 'Nombre_o_razon_social' => 'Banco del Ahorro Nacional y Servicios Financieros, Sociedad Nacional de Crédito, Institución de Banca de Desarrollo']);
        CatalogoBancos::create(['Clave' => '168', 'Nombre_corto' => 'HIPOTECARIA FEDERAL', 'Nombre_o_razon_social' => 'Sociedad Hipotecaria Federal, Sociedad Nacional de Crédito, Institución de Banca de Desarrollo']);
        CatalogoBancos::create(['Clave' => '600', 'Nombre_corto' => 'MONEXCB', 'Nombre_o_razon_social' => 'Monex Casa de Bolsa, S.A. de C.V. Monex Grupo Financiero']);
        CatalogoBancos::create(['Clave' => '601', 'Nombre_corto' => 'GBM', 'Nombre_o_razon_social' => 'GBM Grupo Bursátil Mexicano, S.A. de C.V. Casa de Bolsa']);
        CatalogoBancos::create(['Clave' => '602', 'Nombre_corto' => 'MASARI', 'Nombre_o_razon_social' => 'Masari Casa de Bolsa, S.A.']);
        CatalogoBancos::create(['Clave' => '605', 'Nombre_corto' => 'VALUE', 'Nombre_o_razon_social' => 'Value, S.A. de C.V. Casa de Bolsa']);
        CatalogoBancos::create(['Clave' => '606', 'Nombre_corto' => 'ESTRUCTURADORES', 'Nombre_o_razon_social' => 'Estructuradores del Mercado de Valores Casa de Bolsa, S.A. de C.V.']);
        CatalogoBancos::create(['Clave' => '607', 'Nombre_corto' => 'TIBER', 'Nombre_o_razon_social' => 'Casa de Cambio Tiber, S.A. de C.V.']);
        CatalogoBancos::create(['Clave' => '608', 'Nombre_corto' => 'VECTOR', 'Nombre_o_razon_social' => 'Vector Casa de Bolsa, S.A. de C.V.']);
        CatalogoBancos::create(['Clave' => '610', 'Nombre_corto' => 'B&B', 'Nombre_o_razon_social' => 'B y B, Casa de Cambio, S.A. de C.V.']);
        CatalogoBancos::create(['Clave' => '614', 'Nombre_corto' => 'ACCIVAL', 'Nombre_o_razon_social' => 'Acciones y Valores Banamex, S.A. de C.V., Casa de Bolsa']);
        CatalogoBancos::create(['Clave' => '615', 'Nombre_corto' => 'MERRILL LYNCH', 'Nombre_o_razon_social' => 'Merrill Lynch México, S.A. de C.V. Casa de Bolsa']);
        CatalogoBancos::create(['Clave' => '616', 'Nombre_corto' => 'FINAMEX', 'Nombre_o_razon_social' => 'Casa de Bolsa Finamex, S.A. de C.V.']);
        CatalogoBancos::create(['Clave' => '617', 'Nombre_corto' => 'VALMEX', 'Nombre_o_razon_social' => 'Valores Mexicanos Casa de Bolsa, S.A. de C.V.']);
        CatalogoBancos::create(['Clave' => '618', 'Nombre_corto' => 'UNICA', 'Nombre_o_razon_social' => 'Unica Casa de Cambio, S.A. de C.V.']);
        CatalogoBancos::create(['Clave' => '619', 'Nombre_corto' => 'MAPFRE', 'Nombre_o_razon_social' => 'MAPFRE Tepeyac, S.A.']);
        CatalogoBancos::create(['Clave' => '620', 'Nombre_corto' => 'PROFUTURO', 'Nombre_o_razon_social' => 'Profuturo G.N.P., S.A. de C.V., Afore']);
        CatalogoBancos::create(['Clave' => '621', 'Nombre_corto' => 'CB ACTINVER', 'Nombre_o_razon_social' => 'Actinver Casa de Bolsa, S.A. de C.V.']);
        CatalogoBancos::create(['Clave' => '622', 'Nombre_corto' => 'OACTIN', 'Nombre_o_razon_social' => 'OPERADORA ACTINVER, S.A. DE C.V.']);
        CatalogoBancos::create(['Clave' => '623', 'Nombre_corto' => 'SKANDIA', 'Nombre_o_razon_social' => 'Skandia Vida, S.A. de C.V.']);
        CatalogoBancos::create(['Clave' => '626', 'Nombre_corto' => 'CBDEUTSCHE', 'Nombre_o_razon_social' => 'Deutsche Securities, S.A. de C.V. CASA DE BOLSA']);
        CatalogoBancos::create(['Clave' => '627', 'Nombre_corto' => 'ZURICH', 'Nombre_o_razon_social' => 'Zurich Compañía de Seguros, S.A.']);
        CatalogoBancos::create(['Clave' => '628', 'Nombre_corto' => 'ZURICHVI', 'Nombre_o_razon_social' => 'Zurich Vida, Compañía de Seguros, S.A.']);
        CatalogoBancos::create(['Clave' => '629', 'Nombre_corto' => 'SU CASITA', 'Nombre_o_razon_social' => 'Hipotecaria Su Casita, S.A. de C.V. SOFOM ENR']);
        CatalogoBancos::create(['Clave' => '630', 'Nombre_corto' => 'CB INTERCAM', 'Nombre_o_razon_social' => 'Intercam Casa de Bolsa, S.A. de C.V.']);
        CatalogoBancos::create(['Clave' => '631', 'Nombre_corto' => 'CI BOLSA', 'Nombre_o_razon_social' => 'CI Casa de Bolsa, S.A. de C.V.']);
        CatalogoBancos::create(['Clave' => '632', 'Nombre_corto' => 'BULLTICK CB', 'Nombre_o_razon_social' => 'Bulltick Casa de Bolsa, S.A., de C.V.']);
        CatalogoBancos::create(['Clave' => '633', 'Nombre_corto' => 'STERLING', 'Nombre_o_razon_social' => 'Sterling Casa de Cambio, S.A. de C.V.']);
        CatalogoBancos::create(['Clave' => '634', 'Nombre_corto' => 'FINCOMUN', 'Nombre_o_razon_social' => 'Fincomún, Servicios Financieros Comunitarios, S.A. de C.V.']);
        CatalogoBancos::create(['Clave' => '636', 'Nombre_corto' => 'HDI SEGUROS', 'Nombre_o_razon_social' => 'HDI Seguros, S.A. de C.V.']);
        CatalogoBancos::create(['Clave' => '637', 'Nombre_corto' => 'ORDER', 'Nombre_o_razon_social' => 'Order Express Casa de Cambio, S.A. de C.V']);
        CatalogoBancos::create(['Clave' => '638', 'Nombre_corto' => 'AKALA', 'Nombre_o_razon_social' => 'Akala, S.A. de C.V., Sociedad Financiera Popular']);
        CatalogoBancos::create(['Clave' => '640', 'Nombre_corto' => 'CB JPMORGAN', 'Nombre_o_razon_social' => 'J.P. Morgan Casa de Bolsa, S.A. de C.V. J.P. Morgan Grupo Financiero']);
        CatalogoBancos::create(['Clave' => '642', 'Nombre_corto' => 'REFORMA', 'Nombre_o_razon_social' => 'Operadora de Recursos Reforma, S.A. de C.V., S.F.P.']);
        CatalogoBancos::create(['Clave' => '646', 'Nombre_corto' => 'STP', 'Nombre_o_razon_social' => 'Sistema de Transferencias y Pagos STP, S.A. de C.V.SOFOM ENR']);
        CatalogoBancos::create(['Clave' => '647', 'Nombre_corto' => 'TELECOMM', 'Nombre_o_razon_social' => 'Telecomunicaciones de México']);
        CatalogoBancos::create(['Clave' => '648', 'Nombre_corto' => 'EVERCORE', 'Nombre_o_razon_social' => 'Evercore Casa de Bolsa, S.A. de C.V.']);
        CatalogoBancos::create(['Clave' => '649', 'Nombre_corto' => 'SKANDIA', 'Nombre_o_razon_social' => 'Skandia Operadora de Fondos, S.A. de C.V.']);
        CatalogoBancos::create(['Clave' => '651', 'Nombre_corto' => 'SEGMTY', 'Nombre_o_razon_social' => 'Seguros Monterrey New York Life, S.A de C.V']);
        CatalogoBancos::create(['Clave' => '652', 'Nombre_corto' => 'ASEA', 'Nombre_o_razon_social' => 'Solución Asea, S.A. de C.V., Sociedad Financiera Popular']);
        CatalogoBancos::create(['Clave' => '653', 'Nombre_corto' => 'KUSPIT', 'Nombre_o_razon_social' => 'Kuspit Casa de Bolsa, S.A. de C.V.']);
        CatalogoBancos::create(['Clave' => '655', 'Nombre_corto' => 'SOFIEXPRESS', 'Nombre_o_razon_social' => 'J.P. SOFIEXPRESS, S.A. de C.V., S.F.P.']);
        CatalogoBancos::create(['Clave' => '656', 'Nombre_corto' => 'UNAGRA', 'Nombre_o_razon_social' => 'UNAGRA, S.A. de C.V., S.F.P.']);
        CatalogoBancos::create(['Clave' => '659', 'Nombre_corto' => 'OPCIONES EMPRESARIALES DEL NOROESTE', 'Nombre_o_razon_social' => 'OPCIONES EMPRESARIALES DEL NORESTE, S.A. DE C.V., S.F.P.']);
        CatalogoBancos::create(['Clave' => '901', 'Nombre_corto' => 'CLS', 'Nombre_o_razon_social' => 'Cls Bank International']);
        CatalogoBancos::create(['Clave' => '902', 'Nombre_corto' => 'INDEVAL SD.', 'Nombre_o_razon_social' => 'Indeval, S.A. de C.V.']);
        CatalogoBancos::create(['Clave' => '670', 'Nombre_corto' => 'LIBERTAD', 'Nombre_o_razon_social' => 'Libertad Servicios Financieros, S.A. De C.V.']);
    }
}