<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //1.	desert_meteorological_real_time_value: 荒漠天气现象
        Schema::create('desert_meteorological_real_time_value', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->string('meteorological_type')->nullable();
            $table->string('meteorological_index')->nullable();
            $table->dateTime('datetime')->nullable();
            $table->float('time_1')->nullable();
            $table->float('time_2')->nullable();
            $table->float('time_3')->nullable();
            $table->float('time_4')->nullable();
            $table->float('time_5')->nullable();
            $table->float('time_6')->nullable();
            $table->float('time_7')->nullable();
            $table->float('time_8')->nullable();
            $table->float('time_9')->nullable();
            $table->float('time_10')->nullable();
            $table->float('time_11')->nullable();
            $table->float('time_12')->nullable();
            $table->float('time_13')->nullable();
            $table->float('time_14')->nullable();
            $table->float('time_15')->nullable();
            $table->float('time_16')->nullable();
            $table->float('time_17')->nullable();
            $table->float('time_18')->nullable();
            $table->float('time_19')->nullable();
            $table->float('time_20')->nullable();
            $table->float('time_21')->nullable();
            $table->float('time_22')->nullable();
            $table->float('time_23')->nullable();
            $table->float('time_24')->nullable();
        });

        //2、   desert_meteorological_factors_max_min_avg:荒漠气象要素表最大、最小、平均、日照、合计
        Schema::create('desert_meteorological_factors_other_values', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->string('meteorological_type')->nullable();
            $table->string('meteorological_index')->nullable();
            $table->string('meteorological_index_value_type')->nullable();
            $table->dateTime('datetime')->nullable();
            $table->float('meteorological_index_value')->nullable();

        });

        //3.	desert_meteorological_frozen_soil：荒漠冻土数据表
        Schema::create('desert_meteorological_frozen_soil', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->float('one_frozen_soil_upper')->nullable();
            $table->float('one_frozen_soil_lower')->nullable();
            $table->float('two_frozen_soil_upper')->nullable();
            $table->float('two_frozen_soil_lower')->nullable();
            $table->string('remarks')->default('每日8时观测');
        });

        //5.	desert_meteorological_sands：荒漠风沙数据表
        Schema::create('desert_meteorological_sands', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->string('last_measuring_time')->nullable();
            $table->float('vertical_measuring_height')->nullable();
            $table->float('the_vertical_dust')->nullable();
            $table->float('horizontal_measure_height')->nullable();
            $table->float('horizontal_dust')->nullable();
            $table->float('dust_creep')->nullable();
            $table->string('remarks')->nullable();
        });

        //6.	desert_soil_erosion_deposition: 风蚀、风积数据表
        Schema::create('desert_soil_erosion_deposition', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('surface_characteristic_observation')->nullable();
            $table->float('sand_storage')->nullable();
            $table->float('wind_erosion_depth')->nullable();
            $table->float('wind_erosion_amount')->nullable();
            $table->float('dune_direction')->nullable();
            $table->float('dune_distance')->nullable();
            $table->string('remarks')->nullable();

        });

        //7.	desert_soil_crust: 土壤结皮数据表
        Schema::create('desert_soil_crust', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->string('surface_characteristic_observation');
            $table->string('crust_type')->nullable();
            $table->float('crust_thickness')->nullable();
            $table->float('crust_coverage_degree')->nullable();
            $table->string('remarks')->nullable();

        });

        //8.	desert_soil_physical_properties:土壤物理性质数据表
        Schema::create('desert_soil_physical_properties', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('sample_area_id');
            $table->string('sample_area_name')->nullable();
            $table->dateTime('datetime')->nullable();
            $table->string('soil_type')->nullable();
            $table->string('soil_parent_materials')->nullable();
            $table->string('vegetation_type')->nullable();
            $table->float('sample_depth')->nullable();
            $table->string('Sample_coding')->nullable();
            $table->float('more_than_2')->nullable();
            $table->float('grit_2_005')->nullable();
            $table->float('silt_005_0002')->nullable();
            $table->float('cosmid_0002')->nullable();
            $table->string('soil_name')->nullable();
            $table->float('soil_contain')->nullable();
            $table->float('capillary_tube')->nullable();
            $table->float('no_capillary_tube')->nullable();
            $table->string('remarks')->nullable();

        });

        //9.	desert_soil_chemical_properties:土壤化学性质数据表
        Schema::create('desert_soil_chemical_properties', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id');
            $table->string('sample_area_name')->nullable();
            $table->string('soil_type')->nullable();
            $table->string('soil_parent_materials')->nullable();
            $table->string('vegetation_type')->nullable();
            $table->float('sample_depth')->nullable();
            $table->string('sample_coding')->nullable();
            $table->float('ph_value')->nullable();
            $table->float('soil_organic_matter')->nullable();
            $table->float('TN')->nullable();
            $table->float('Hydrolyze_nitrogen')->nullable();
            $table->float('NOZ')->nullable();
            $table->float('Carbon_loading')->nullable();
            $table->float('TP')->nullable();
            $table->float('AP')->nullable();
            $table->float('TK')->nullable();
            $table->float('AK')->nullable();
            $table->string('remarks')->nullable();
        });

        //10.	desert_soil_depth_water_content：土壤不同深度含水量数据表(%)
        Schema::create('desert_soil_depth_water_contents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('sample_area_id');
            $table->string('sample_area_name')->nullable();
            $table->dateTime('datetime')->nullable();
            $table->float('water_content_10cm')->nullable();
            $table->float('water_content_20cm')->nullable();
            $table->float('water_content_50cm')->nullable();
            $table->float('water_content_100cm')->nullable();
            $table->float('water_content_150cm')->nullable();
            $table->float('water_content_200cm')->nullable();
            $table->string('remarks')->nullable();
        });

        //11    desert_soil_water_content：土壤水分数据表
        Schema::create('desert_soil_water_content', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id');
            $table->string('sample_area_name')->nullable();
            $table->string('soil_type')->nullable();
            $table->string('soil_parent_materials')->nullable();
            $table->string('vegetation_type')->nullable();
            $table->float('sample_depth')->nullable();
            $table->string('sample_coding')->nullable();
            $table->float('water_content')->nullable();
            $table->float('total_porosity')->nullable();
            $table->float('leakage')->nullable();
            $table->float('evaporation')->nullable();
            $table->string('remarks')->nullable();
        });

        //12.	desert_hydrology_trunk_catchment ：样地或流域径流量数据表
        Schema::create('desert_hydrology_trunk_catchment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->string('observation_point_description')->nullable();
            $table->string('observation_point_type')->nullable();
            $table->float('basin_area')->nullable();
            $table->float('basin_stem')->nullable();
            $table->float('sand_content')->nullable();
            $table->string('remarks')->nullable();
        });

        //13.	desert_hydrology_groundwater_catchment 地下水位数据表
        Schema::create('desert_hydrology_groundwater_catchment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->string('sample_latitude_longitude');
            $table->string('sample_description')->nullable();
            $table->string('determination_type')->nullable();
            $table->float('auto_groundwater_depth')->nullable();
            $table->float('manual_groundwater_depth')->nullable();
            $table->float('ground_height')->nullable();
            $table->float('rainfall')->nullable();
            $table->string('remarks')->nullable();
        });

        //14.	desert_biocoenosis_protecting_species 国家或地方保护动植物的种类、数量数据表
        Schema::create('desert_biocoenosis_protecting_species', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('sample_area_id');
            $table->string('sample_area_name')->nullable();
            $table->dateTime('datetime')->nullable();
            $table->string('place_type')->nullable();
            $table->string('species_type')->nullable();
            $table->float('species_number')->nullable();
            $table->string('remarks')->nullable();
        });

        //15.	desert_biocoenosis_special_species：地方特有物种种类、数量数据表
        Schema::create('desert_biocoenosis_special_species', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id');
            $table->string('sample_area_name')->nullable();
            $table->string('species_type')->nullable();
            $table->float('species_number')->nullable();
            $table->string('remarks')->nullable();
        });

        //16.	desert_biocoenosis_species_type_number：动物、植物编目、数量数据表
        Schema::create('desert_biocoenosis_species_type_number', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id');
            $table->string('sample_area_name')->nullable();
            $table->string('observation_type')->nullable();
            $table->string('observation_description')->nullable();
            $table->string('observation_point_description')->nullable();
            $table->float('investigation_area')->nullable();
            $table->string('type')->nullable();
            $table->float('species_type')->nullable();
            $table->float('species_name')->nullable();
            $table->string('species_latin_name')->nullable();
            $table->float('species_number')->nullable();
            $table->string('remarks')->nullable();
        });

        //17.	desert_biocoenosis_shrub_characters 乔灌木物候特征数据表(月/日/年)
        Schema::create('desert_biocoenosis_shrub_characters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id')->nullable();
            $table->string('sample_area_name')->nullable();
            $table->string('sample_area_type')->nullable();
            $table->string('plant_name')->nullable();
            $table->float('species_Latin_name')->nullable();
            $table->string('budding')->nullable();
            $table->string('leafing')->nullable();
            $table->string('blossom')->nullable();
            $table->string('fruit')->nullable();
            $table->string('leaf_coloration')->nullable();
            $table->string('defoliation')->nullable();
            $table->dateTime('investigation_time')->nullable();
            $table->string('investigator')->nullable();
            $table->string('remarks')->nullable();
        });

        //18.	desert_biocoenosis_herbal_characters 草本物候特征数据表(月/日/年)
        Schema::create('desert_biocoenosis_herbal_characters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id')->nullable();
            $table->string('sample_area_name')->nullable();
            $table->string('sample_area_type')->nullable();
            $table->string('plant_name')->nullable();
            $table->float('species_Latin_name')->nullable();
            $table->string('budding')->nullable();
            $table->string('leafing')->nullable();
            $table->string('florescence')->nullable();
            $table->string('fruit')->nullable();
            $table->string('wilting')->nullable();
            $table->dateTime('investigation_time')->nullable();
            $table->string('investigator')->nullable();
            $table->string('remarks')->nullable();
        });

        //19.	desert_biocoenosis_distribution 群落分布特征数据表
        Schema::create('desert_biocoenosis_distribution', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('biocoenosis_coding')->nullable();
            $table->string('sample_area_name')->nullable();
            $table->string('biocoenosis_type')->nullable();
            $table->string('character_description')->nullable();
            $table->float('area')->nullable();
            $table->string('biocoenosis_distribution')->nullable();
            $table->string('remarks')->nullable();
        });

        //20.	desert_biocoenosis_structure：-荒漠群落结构数据表
        Schema::create('desert_biocoenosis_structure', function (Blueprint $table){
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id')->nullable();
            $table->string('sample_area_name')->nullable();
            $table->string('latitude_longitude ')->nullable();
            $table->string('sample_description')->nullable();
            $table->string('dominant_species')->nullable();
            $table->string('common_species ')->nullable();
            $table->string('other_species ')->nullable();
            $table->string('layer_structure')->nullable();
            $table->string('mosaic_structure')->nullable();
            $table->string('remarks')->nullable();
        });

        //21.	desert_biocoenosis_characters：群落特征数据表
        Schema::create('desert_biocoenosis_characters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id')->nullable();
            $table->string('sample_area_name')->nullable();
            $table->string('sample_type')->nullable();
            $table->float('sample_area')->nullable();
            $table->string('species_name')->nullable();
            $table->string('leaves_area')->nullable();
            $table->float('coverage_degree')->nullable();
            $table->float('height_avg')->nullable();
            $table->float('cluster_number')->nullable();
            $table->string('layer_Structure')->nullable();
            $table->string('main_layer_structure')->nullable();
            $table->string('investigation_time')->nullable();
            $table->string('investigator')->nullable();
            $table->string('remarks')->nullable();
        });

        //22.	desert_biocoenosis_shrub_biology：灌木层生物量数据表(t/hm2)
        Schema::create('desert_biocoenosis_shrub_biology', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id')->nullable();
            $table->string('sample_area_name')->nullable();
            $table->string('sample_area_type')->nullable();
            $table->string('plant_name')->nullable();
            $table->string('species_Latin_name')->nullable();
            $table->float('tree_trunk')->nullable();
            $table->float('leaves')->nullable();
            $table->float('flowers')->nullable();
            $table->float('fruits')->nullable();
            $table->float('root')->nullable();
            $table->dateTime('investigation_time')->nullable();
            $table->string('investigator')->nullable();
            $table->string('remarks')->nullable();
        });

        //23.	desert_biocoenosis_herbal_biology：草本层生物量数据表(t/hm2)
        Schema::create('desert_biocoenosis_herbal_biology', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id')->nullable();
            $table->string('sample_area_name')->nullable();
            $table->string('sample_area_type')->nullable();
            $table->string('plant_name')->nullable();
            $table->string('species_latin_name')->nullable();
            $table->float('aboveground')->nullable();
            $table->float('underground')->nullable();
            $table->dateTime('investigation_time')->nullable();
            $table->string('investigator')->nullable();
            $table->string('remarks')->nullable();
        });

        //24.	desert_biocoenosis_litter：凋落物现存量数据表
        Schema::create('desert_biocoenosis_litter', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id')->nullable();
            $table->string('sample_area_name')->nullable();
            $table->string('sample_area_type')->nullable();
            $table->string('sample_area')->nullable();
            $table->float('leaf_area')->nullable();
            $table->string('remarks')->nullable();
        });

        //25.	desert_biocoenosis_update 群落更新数据表
        Schema::create('desert_biocoenosis_update', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id')->nullable();
            $table->string('sample_area_name')->nullable();
            $table->string('sample_area_type')->nullable();
            $table->string('quadrat_coding')->nullable();
            $table->float('quadrat_area')->nullable();
            $table->string('young_tree')->nullable();
            $table->string('species_Latin_name')->nullable();
            $table->float('seeding_number')->nullable();
            $table->float('sprouted_seedling_number')->nullable();
            $table->float('the_average_basal_diameter')->nullable();
            $table->float('the_average_height')->nullable();
            $table->dateTime('investigation_time')->nullable();
            $table->string('investigator')->nullable();
            $table->string('remarks')->nullable();
        });

        //26.	desert_biocoenosis_chemical_characters 化学特征数据表
        Schema::create('desert_biocoenosis_chemical_characters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id')->nullable();
            $table->string('sample_area_name')->nullable();
            $table->string('sample_area_type')->nullable();
            $table->float('leaf_carbon_isotope_13')->nullable();
            $table->float('sample_depth')->nullable();
            $table->float('leaf_C_content')->nullable();
            $table->float('stem_C_content')->nullable();
            $table->float('root_C_content')->nullable();
            $table->float('leaf_N_content')->nullable();
            $table->float('layer_structure_N_content')->nullable();
            $table->float('layer_structure_C_content')->nullable();
            $table->string('remarks')->nullable();
        });

        //27.	desert_soil_total_salt：土壤全盐量数据表(mg/kg)
        Schema::create('desert_soil_total_salt', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id');
            $table->string('sample_area_name')->nullable();
            $table->string('soil_type')->nullable();
            $table->string('soil_parent_materials')->nullable();
            $table->string('vegetation_type')->nullable();
            $table->float('sample_depth')->nullable();
            $table->string('sample_coding')->nullable();
            $table->float('total_salt')->nullable();
            $table->float('Caco3')->nullable();
            $table->float('Ca_ions')->nullable();
            $table->float('Mg_ions')->nullable();
            $table->float('K_ions')->nullable();
            $table->float('Na_ions')->nullable();
            $table->float('CO2_ions')->nullable();
            $table->float('HCO_ions')->nullable();
            $table->float('CL_ions')->nullable();
            $table->float('K2SO3')->nullable();
            $table->string('remarks')->nullable();
        });

        //28.	desert_soil_miner_element：土壤矿质全量数据表(%)
        Schema::create('desert_soil_miner_element', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id');
            $table->string('sample_area_name')->nullable();
            $table->string('quadrat_coding')->nullable();
            $table->string('quadrat_description ')->nullable();
            $table->float('Si')->nullable();
            $table->float('Fe')->nullable();
            $table->float('Al')->nullable();
            $table->float('Ti')->nullable();
            $table->float('Ca')->nullable();
            $table->float('Mg')->nullable();
            $table->float('K')->nullable();
            $table->float('Na')->nullable();
            $table->float('P')->nullable();
            $table->string('remarks')->nullable();
        });


        //29.	desert_soil_trace_element：土壤微量元素数据表(mg/kg)
        Schema::create('desert_soil_trace_element', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id');
            $table->string('sample_area_name')->nullable();
            $table->string('soil_type')->nullable();
            $table->string('soil_parent_materials')->nullable();
            $table->string('vegetation_type')->nullable();
            $table->float('sample_depth')->nullable();
            $table->string('sample_coding')->nullable();
            $table->float('EMg')->nullable();
            $table->float('AMg')->nullable();
            $table->float('ECa')->nullable();
            $table->float('ACa')->nullable();
            $table->float('ES')->nullable();
            $table->float('AS')->nullable();
            $table->float('EB')->nullable();
            $table->float('AB')->nullable();
            $table->float('EMo')->nullable();
            $table->float('AMo')->nullable();
            $table->float('EMn')->nullable();
            $table->float('AMn')->nullable();
            $table->float('EZn')->nullable();
            $table->float('AZn')->nullable();
            $table->float('ECu')->nullable();
            $table->float('ACu')->nullable();
            $table->float('EFe')->nullable();
            $table->float('AFe')->nullable();
            $table->string('remarks')->nullable();
        });

        //30.	desert_soil_heavy_metals 重金属元素数据表(mg/kg)
        Schema::create('desert_soil_heavy_metals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id');
            $table->string('sample_area_name')->nullable();
            $table->string('quadrat_coding')->nullable();
            $table->string('quadrat_description ')->nullable();
            $table->float('Se')->nullable();
            $table->float('Co')->nullable();
            $table->float('Cd')->nullable();
            $table->float('Pb')->nullable();
            $table->float('Cr')->nullable();
            $table->float('Ni')->nullable();
            $table->float('As')->nullable();
            $table->float('Hg')->nullable();
            $table->float('remarks')->nullable();
        });

        //31.	desert_hydrology_water_quality 水质数据表(除pH值外，其它均为mg/L或μg/L)
        Schema::create('desert_hydrology_water_quality', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id');
            $table->string('sample_area_name')->nullable();
            $table->float('Ph_value')->nullable();
            $table->float('CO2_ions')->nullable();
            $table->float('HCO_ions')->nullable();
            $table->float('SO2_ions')->nullable();
            $table->float('CL_ions')->nullable();
            $table->float('PO3_ions')->nullable();
            $table->float('NO3_ions')->nullable();
            $table->float('P_ions')->nullable();
            $table->float('N_ions')->nullable();
            $table->float('Ca_ions')->nullable();
            $table->float('Mg_ions')->nullable();
            $table->float('K_ions')->nullable();
            $table->float('Na_ions')->nullable();
            $table->string('remarks')->nullable();
        });

        //32.	desert_hydrology_trace_element_heavy_metals 微量元素和重金属元素数据表(mg/m3或mg/L)
        Schema::create('desert_hydrology_trace_element_heavy_metals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id');
            $table->string('sample_area_name')->nullable();
            $table->string('quadrat_coding')->nullable();
            $table->string('quadrat_description ')->nullable();
            $table->float('B')->nullable();
            $table->float('Mn')->nullable();
            $table->float('Mo')->nullable();
            $table->float('Zn')->nullable();
            $table->float('Fe')->nullable();
            $table->float('Cu')->nullable();
            $table->float('Cd')->nullable();
            $table->float('Pb')->nullable();
            $table->float('Ni')->nullable();
            $table->float('Cr')->nullable();
            $table->float('Se')->nullable();
            $table->float('As')->nullable();
            $table->float('Ti')->nullable();
            $table->float('remarks')->nullable();
        });

        //33.	desert_biocoenosis_shrub：灌木层特征数据表
        Schema::create('desert_biocoenosis_shrub', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id')->nullable();
            $table->string('sample_area_name')->nullable();
            $table->string('sample_area_type')->nullable();
            $table->float('sample_area')->nullable();
            $table->string('leaf_area')->nullable();
            $table->float('the_average_basal_diameter')->nullable();
            $table->float('coverage_degree')->nullable();
            $table->float('height_avg')->nullable();
            $table->float('shrub_number')->nullable();
            $table->float('species_number')->nullable();
            $table->float('dominant_species_calories')->nullable();
            $table->string('investigator')->nullable();
            $table->string('remarks')->nullable();
        });

        //34.	desert_biocoenosis_herbal：草本层特征数据表
        Schema::create('desert_biocoenosis_herbal', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id')->nullable();
            $table->string('sample_area_name')->nullable();
            $table->string('sample_area_type')->nullable();
            $table->float('sample_area')->nullable();
            $table->float('coverage_degree')->nullable();
            $table->string('leaf_area')->nullable();
            $table->float('height_avg')->nullable();
            $table->float('shrub_number')->nullable();
            $table->float('species_number')->nullable();
            $table->dateTime('dominant_species_calories')->nullable();
            $table->string('investigator')->nullable();
            $table->string('remarks')->nullable();
        });

        //35.	desert_biocoenosis_plant_character 植物种特征
        Schema::create('desert_biocoenosis_plant_character', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id');
            $table->string('sample_area_name')->nullable();
            $table->float('coverage_degree')->nullable();
            $table->float('height')->nullable();
            $table->float('frude')->nullable();
            $table->float('density')->nullable();
            $table->string('frequence')->nullable();
            $table->string('remarks')->nullable();
        });

        //36.	desert_biocoenosis_soil_seed 土壤种子库调查数据表
        Schema::create('desert_biocoenosis_soil_seed', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id');
            $table->float('sample_area_name')->nullable();
            $table->string('plant_species_4cm')->nullable();
            $table->float('plant_num_4cm ')->nullable();
            $table->string('plant_species_8cm')->nullable();
            $table->float('plant_num_8cm ')->nullable();
            $table->string('plant_species_12cm')->nullable();
            $table->float('plant_num_12cm ')->nullable();
            $table->string('plant_species_16cm')->nullable();
            $table->float('plant_num_16cm ')->nullable();
            $table->string('plant_species_20cm')->nullable();
            $table->float('plant_num_20cm ')->nullable();
            $table->string('remarks')->nullable();
        });

        //37.	desert_biocoenosis_animal 动物调查数据表
        Schema::create('desert_biocoenosis_animal', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->string('bird_species')->nullable();
            $table->float('bird_number')->nullable();
            $table->string('huge_animals_kind')->nullable();
            $table->float('huge_animals_number ')->nullable();
            $table->string('small_animals_kind')->nullable();
            $table->float('small_animals_number ')->nullable();
            $table->string('soil_animals_kind')->nullable();
            $table->float('soil_animals_number ')->nullable();
            $table->string('insect_kind')->nullable();
            $table->float('insect_number ')->nullable();
            $table->string('remarks')->nullable();
        });

        //38.	desert_biocoenosis_mircobiology 土壤微生物数据表
        Schema::create('desert_biocoenosis_mircobiology', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id')->nullable();
            $table->string('sample_area_name')->nullable();
            $table->string('observation_description')->nullable();
            $table->string('observation_point_description ')->nullable();
            $table->float('area')->nullable();
            $table->string('kind')->nullable();
            $table->float('number ')->nullable();
            $table->float('soil_respiration_intensity')->nullable();
            $table->string('remarks')->nullable();
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
