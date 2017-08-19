<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForestFactorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //forest_meteorological_factors__real_time_value: 森林气象要素表1
        Schema::create('forest_meteorological_factors_real_time_values', function (Blueprint $table) {
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
            $table->string('remarks')->nullable();
        });

        //forest_meteorological_factors_max_min_avg: 森林气象要素表最大、最小、平均、日照、合计
        Schema::create('forest_meteorological_factors_other_values', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->string('meteorological_type')->nullable();
            $table->string('meteorological_index')->nullable();
            $table->string('meteorological_index_value_type')->nullable();
            $table->dateTime('datetime')->nullable();
            $table->float('meteorological_index_value')->nullable();

        });

        //forest_meteorological_frozen_soil_table：冻土数据表
        Schema::create('forest_meteorological_frozen_soils', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->float('one_frozen_soil_upper')->nullable();
            $table->float('one_frozen_soil_lower')->nullable();
            $table->float('two_frozen_soil_upper')->nullable();
            $table->float('two_frozen_soil_lower')->nullable();
            $table->string('remarks')->nullable();

        });

        //forest_soil_litter_table：森林枯落物数据表
        Schema::create('forest_soil_litters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->float('all_thickness')->nullable();
            $table->float('half_decomposed')->nullable();
            $table->float('undecomposed')->nullable();
            $table->float('litter_water_ratio')->nullable();
            $table->string('remarks')->nullable();

        });

        //forest_soil_physical_properties:土壤物理性质数据表
        Schema::create('forest_soil_physical_properties', function (Blueprint $table) {
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
            $table->string('sample_coding')->nullable();
            $table->float('grit2_005')->nullable();
            $table->float('silt005_0002')->nullable();
            $table->float('cosmid0002')->nullable();
            $table->string('soil_name')->nullable();
            $table->float('soil_contain')->nullable();
            $table->float('capillary_tube')->nullable();
            $table->float('no_capillary_tube')->nullable();
            $table->string('remarks')->nullable();

        });

        //forest_soil_chemical_properties:土壤化学性质数据表
        Schema::create('forest_soil_chemical_properties', function (Blueprint $table) {
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
            $table->string('sample_coding')->nullable();
            $table->float('ph_value')->nullable();
            $table->float('soil_organic_matter')->nullable();
            $table->float('TN')->nullable();
            $table->float('hydrolyze_nitrogen')->nullable();
            $table->float('NOZ')->nullable();
            $table->float('TP')->nullable();
            $table->float('AP')->nullable();
            $table->float('TK')->nullable();
            $table->float('AK')->nullable();
            $table->float('SLK')->nullable();
            $table->string('remarks')->nullable();

        });

        //forest_health_protecting_species:国家或地方保护动植物的种类、数量数据表
        Schema::create('forest_health_protecting_species', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('sample_area_id');
            $table->string('sample_area_name')->nullable();
            $table->dateTime('datetime')->nullable();
            $table->string('place_type')->nullable();
            $table->string('species_type')->nullable();
            $table->integer('species_number')->nullable();
            $table->string('remarks')->nullable();
        });

        //forest_health_special_species：地方特有物种种类、数量数据表
        Schema::create('forest_health_special_species', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('sample_area_id');
            $table->string('sample_area_name')->nullable();
            $table->dateTime('datetime')->nullable();
            $table->string('place_type')->nullable();
            $table->string('species_type')->nullable();
            $table->integer('species_number')->nullable();
            $table->string('remarks')->nullable();
        });

        //forest_health_species_type_number：动物、植物编目、数量数据表
        Schema::create('forest_health_species_type_numbers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('sample_area_id');
            $table->string('sample_area_name')->nullable();
            $table->dateTime('datetime')->nullable();
            $table->string('observation_type')->nullable();
            $table->string('observation_description')->nullable();
            $table->string('observation_point_description')->nullable();
            $table->string('investigation_area')->nullable();
            $table->string('species_type')->nullable();
            $table->string('species_name')->nullable();
            $table->string('species_latin_name')->nullable();
            $table->integer('species_number')->nullable();
            $table->string('remarks')->nullable();
        });

        //11.	forest_hydrology_rainfalls：林内降水量数据表1(mm)
        Schema::create('forest_hydrology_rainfalls', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
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
            $table->float('sum')->nullable();
            $table->string('remarks')->nullable();
        });

        //12.	forest_hydrology_trunk_catchment ：树干径流量数据表(mm)
        Schema::create('forest_hydrology_trunk_catchments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('sample_area_id');
            $table->string('sample_area_name')->nullable();
            $table->dateTime('datetime')->nullable();
            $table->string('observation_area_coding')->nullable();
            $table->string('observation_point_id')->nullable();
            $table->string('observation_point_description')->nullable();
            $table->string('vegetation_name')->nullable();
            $table->float('trunk_flow')->nullable();
            $table->string('remarks')->nullable();
        });

        //13.	forest_hydrology_slope_catchment 坡面径流量数据表(mm)
        Schema::create('forest_hydrology_slope_catchments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('slope_id');
            $table->dateTime('datetime')->nullable();
            $table->string('slope_name')->nullable();
            $table->string('observation_slope_description')->nullable();
            $table->string('vegetation_name')->nullable();
            $table->float('surface_stem')->nullable();
            $table->string('remarks')->nullable();
        });

        //14.	forest_hydrology_basin_catchment 流域径流量数据表(mm)
        Schema::create('forest_hydrology_basin_catchments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->string('place');
            $table->string('name')->nullable();
            $table->float('basin_area')->nullable();
            $table->float('basin_stem')->nullable();
            $table->string('remarks')->nullable();
        });

        //15.	forest_hydrology_groundwater_catchment 地下水位数据表
        Schema::create('forest_hydrology_groundwater_catchments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->string('sample_latitude_longitude');
            $table->string('sample_description')->nullable();
            $table->string('forest_type')->nullable();
            $table->float('auto_groundwater_depth')->nullable();
            $table->float('manual_groundwater_depth')->nullable();
            $table->float('ground_height')->nullable();
            $table->float('rainfall')->nullable();
            $table->string('remarks')->nullable();
        });

        //16.	forest_hydrology_water_quality 水质数据表(mg/dm3或μg/ dm3)
        Schema::create('forest_hydrology_water_qualities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id');
            $table->string('sample_area_name')->nullable();
            $table->string('sample_coding')->nullable();
            $table->float('hydrolyze_nitrogen')->nullable();
            $table->float('NOZ')->nullable();
            $table->float('HP')->nullable();
            $table->float('AP')->nullable();
            $table->float('Cod')->nullable();
            $table->float('Bod')->nullable();
            $table->float('ph_value')->nullable();
            $table->float('sediment_concentration')->nullable();
            $table->string('remarks')->nullable();
        });

        //17.	forest_biocoenosis_structure：森林群落结构数据表
        Schema::create('forest_biocoenosis_structures', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id')->nullable();
            $table->string('sample_area_name')->nullable();
            $table->string('latitude_longitude')->nullable();
            $table->string('sample_area_description')->nullable();
            $table->float('age')->nullable();
            $table->string('source')->nullable();
            $table->float('tree_height_avg')->nullable();
            $table->float('trunk_diameter_avg')->nullable();
            $table->float('density')->nullable();
            $table->string('composition')->nullable();
            $table->float('canopy_density')->nullable();
            $table->float('over_story_leaf_area')->nullable();
            $table->string('animal_kind')->nullable();
            $table->float('animal_number')->nullable();
            $table->string('plant_kind')->nullable();
            $table->float('plant_number')->nullable();
            $table->dateTime('investigation_time')->nullable();
            $table->string('investigator')->nullable();
            $table->string('remarks')->nullable();
        });

        //18.	forest_biocoenosis_arbor：乔木层特征数据表
        Schema::create('forest_biocoenosis_arbors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id')->nullable();
            $table->string('sample_area_name')->nullable();
            $table->string('sample_type')->nullable();
            $table->float('sample_area')->nullable();
            $table->string('source')->nullable();
            $table->string('composition')->nullable();
            $table->string('tree_composition')->nullable();
            $table->string('canopy_density')->nullable();
            $table->float('density')->nullable();
            $table->float('tree_height_avg')->nullable();
            $table->float('trunk_diameter_avg')->nullable();
            $table->string('leaf_area')->nullable();
            $table->dateTime('investigation_time')->nullable();
            $table->string('investigator')->nullable();
            $table->string('remarks')->nullable();
        });

        //19.	forest_biocoenosis_shrub：灌木层特征数据表
        Schema::create('forest_biocoenosis_shrubs', function (Blueprint $table) {
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
            $table->dateTime('investigation_time')->nullable();
            $table->string('investigator')->nullable();
            $table->string('remarks')->nullable();
        });

        //20.	forest_biocoenosis_herbal ：草本层特征数据表
        Schema::create('forest_biocoenosis_herbals', function (Blueprint $table) {
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
            $table->dateTime('investigation_time')->nullable();
            $table->string('investigator')->nullable();
            $table->string('remarks')->nullable();
        });

        //21.	forest_biocoenosis_arbor_biology ：乔木层生物量数据表
        Schema::create('forest_biocoenosis_arbor_biologies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id')->nullable();
            $table->string('sample_area_name')->nullable();
            $table->string('sample_area_type')->nullable();
            $table->string('plant_name')->nullable();
            $table->string('species_Latin_name')->nullable();
            $table->float('forest_age')->nullable();
            $table->float('trunk_diameter')->nullable();
            $table->float('tree_height')->nullable();
            $table->float('tree_trunk')->nullable();
            $table->float('tree_bark')->nullable();
            $table->float('bough')->nullable();
            $table->float('branch_let')->nullable();
            $table->float('old_leaf')->nullable();
            $table->float('new_leaves')->nullable();
            $table->float('flower')->nullable();
            $table->float('fruits')->nullable();
            $table->float('thick_root')->nullable();
            $table->float('middle_root')->nullable();
            $table->float('root_let')->nullable();
            $table->float('aerial_root')->nullable();
            $table->dateTime('investigation_time')->nullable();
            $table->string('investigator')->nullable();
            $table->string('remarks')->nullable();
        });

        //22.	forest_biocoenosis_shrub_biology：灌木层生物量数据表(t/hm2)
        Schema::create('forest_biocoenosis_shrub_biologies', function (Blueprint $table) {
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

        //23.	forest_biocoenosis_herbal_biology ：草本层生物量数据表(t/hm2)
        Schema::create('forest_biocoenosis_herbal_biologies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id')->nullable();
            $table->string('sample_area_name')->nullable();
            $table->string('sample_area_type')->nullable();
            $table->string('plant_name')->nullable();
            $table->string('species_Latin_name')->nullable();
            $table->float('aboveground')->nullable();
            $table->float('underground')->nullable();
            $table->dateTime('investigation_time')->nullable();
            $table->string('investigator')->nullable();
            $table->string('remarks')->nullable();
        });

        //24.	forest_biocoenosis_litter_nutrient:森林群落凋落物量、养分数据表
        Schema::create('forest_biocoenosis_litter_nutrients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id')->nullable();
            $table->string('sample_area_name')->nullable();
            $table->string('latitude_longitude')->nullable();
            $table->string('sample_description')->nullable();
            $table->float('forest_litter')->nullable();
            $table->float('C_element')->nullable();
            $table->float('N_element')->nullable();
            $table->float('P_element')->nullable();
            $table->float('K_element')->nullable();
            $table->string('remarks')->nullable();
        });

        //25.	forest_biocoenosis_update 群落更新数据表
        Schema::create('forest_biocoenosis_updates', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id')->nullable();
            $table->string('sample_area_name')->nullable();
            $table->string('sample_area_type')->nullable();
            $table->string('quadrat_coding')->nullable();
            $table->float('quadrat_area')->nullable();
            $table->string('spice_name')->nullable();
            $table->string('species_Latin_name')->nullable();
            $table->float('seeding_number')->nullable();
            $table->float('sprouted_seedling_number')->nullable();
            $table->float('the_average_basal_diameter')->nullable();
            $table->float('the_average_height')->nullable();
            $table->dateTime('investigation_time')->nullable();
            $table->string('investigator')->nullable();
            $table->string('remarks')->nullable();
        });

        //26.	forest_biocoenosis_shrub_characters 乔灌木物候特征数据表(月/日/年)
        Schema::create('forest_biocoenosis_shrub_characters', function (Blueprint $table) {
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
            $table->string('leaf_coloration')->nullable();
            $table->string('defoliation')->nullable();
            $table->dateTime('investigation_time')->nullable();
            $table->string('investigator')->nullable();
            $table->string('remarks')->nullable();
        });

        //27.	forest_biocoenosis_herbal_characters 草本物候特征数据表(月/日/年)
        Schema::create('forest_biocoenosis_herbal_characters', function (Blueprint $table) {
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

        //28.	Forest_meteorological_weahter_factors 天气现象数据表
        Schema::create('Forest_meteorological_weahter_factors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->string('cloudiness')->nullable();
            $table->string('wind')->nullable();
            $table->string('rain')->nullable();
            $table->string('snow')->nullable();
            $table->string('lighting')->nullable();
            $table->string('sand')->nullable();
            $table->string('remarks')->nullable();
        });

        //29.	forest_soil_exchange 土壤交换量数据表(cmol/kg)
        Schema::create('forest_soil_exchanges', function (Blueprint $table) {
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
            $table->float('cationexchange_capacity')->nullable();
            $table->float('Ca_cationexchange')->nullable();
            $table->float('Mg_ions_cationexchange')->nullable();
            $table->float('K_ions_cationexchange')->nullable();
            $table->float('Na_ions_cationexchange')->nullable();
            $table->float('aCid_cationexchange')->nullable();
            $table->float('BS')->nullable();
            $table->float('carbonates')->nullable();
            $table->string('remarks')->nullable();

        });

        //30.	forest_soil_soluble_fraction :土壤水溶性盐分数据表(%，mg/kg)
        Schema::create('forest_soil_soluble_fractions', function (Blueprint $table) {
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
            $table->float('CO2_ions')->nullable();
            $table->float('HCO_ions')->nullable();
            $table->float('SO2_ions')->nullable();
            $table->float('CL_ions')->nullable();
            $table->float('Ca_ions')->nullable();
            $table->float('Mg_ions')->nullable();
            $table->float('K_ions')->nullable();
            $table->float('Na_ions')->nullable();
            $table->string('remarks')->nullable();

        });


        //31.	forest_soil_chemical_choose_properties:土壤化学性质数据表3(%，mg/kg)
        Schema::create('forest_soil_chemical_choose_properties', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id')->nullable();
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
            $table->float('EZn')->nullable();
            $table->float('AZn')->nullable();
            $table->float('EMn')->nullable();
            $table->float('AMn')->nullable();
            $table->float('EMo')->nullable();
            $table->float('AMo')->nullable();
            $table->float('ECu')->nullable();
            $table->float('ACu')->nullable();
            $table->string('remarks')->nullable();

        });

        //32.	forest_health_diseases_pests_damage 病虫害的发生与危害数据表
        Schema::create('forest_health_diseases_pests_damages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->string('pests_kind')->nullable();
            $table->string('natural_enemy_kind')->nullable();
            $table->float('pest_damage_percent')->nullable();
            $table->float('insect_density')->nullable();
            $table->float('forest_damage_area')->nullable();
            $table->string('fungus_kind')->nullable();
            $table->float('fungus_damage_percent')->nullable();
            $table->float('fungus_damage_area')->nullable();
            $table->string('remarks')->nullable();
        });

        //33.	forest_health_soil_water_resource 水土资源保持数据表
        Schema::create('forest_health_soil_water_resources', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id')->nullable();
            $table->string('sample_area_name')->nullable();
            $table->string('erosion_intensity')->nullable();
            $table->float('erosion_modulus')->nullable();
            $table->string('remarks')->nullable();
        });

        //34.	forest_health_other_damage :其它危害数据表(%)
        Schema::create('forest_health_other_damages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id');
            $table->string('sample_area_name')->nullable();
            $table->string('dry_wet_deposition')->nullable();
            $table->float('dry_wet_concentration ')->nullable();
            $table->float('atmospheric_ph_rainfall ')->nullable();
            $table->string('pollution_degree ')->nullable();
            $table->integer('flood_number ')->nullable();
            $table->string('flood_damage_pollution ')->nullable();
            $table->integer('mudslide_number ')->nullable();
            $table->string('mudslide_damage_degree ')->nullable();
            $table->string('fire_damage_degree ')->nullable();
            $table->string('frozen_damage_degree ')->nullable();
            $table->string('dry_damage_degree ')->nullable();
            $table->string('remarks')->nullable();
        });

        //35.	forest_hydrology_evapotranspiration_rate 森林蒸散量数据表(mm)
        Schema::create('forest_hydrology_evapotranspiration_rate', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->string('observation_point_name')->nullable();
            $table->string('vegetation_name')->nullable();
            $table->float('daytime_evapotranspiration ')->nullable();
            $table->float('night_evapotranspiration ')->nullable();
            $table->float('day_evapotranspiration ')->nullable();
            $table->string('remarks')->nullable();
        });

        //36.	forest_hydrology_trace_element_heavy_metals 微量元素和重金属元素数据表(mg/m3)
        Schema::create('forest_hydrology_trace_element_heavy_metals', function (Blueprint $table) {
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
            $table->float('Hg')->nullable();
            $table->float('remarks')->nullable();
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
