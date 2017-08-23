<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWetLandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //1.	wet_land_factors1: 湿地概况指标1
        Schema::create('wet_land_factors1', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->string('station_name')->nullable();
            $table->float('east_coordinate')->nullable();
            $table->float('west_coordinate')->nullable();
            $table->float('sourth_coordinate')->nullable();
            $table->float('north_coordinate')->nullable();
            $table->float('elevation_avg')->nullable();
            $table->string('geomorphological_types')->nullable();
            $table->string('wet_land_type')->nullable();
            $table->string('wet_land_water_type')->nullable();
            $table->string('wet_land_soil_type')->nullable();
            $table->dateTime('investigation_date')->nullable();
            $table->string('remarks')->nullable();
        });

        //2.	wet_land_factors2: 湿地概况指标2
        Schema::create('wet_land_factors2', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->string('station_name')->nullable();
            $table->float('wet_land_area')->nullable();
            $table->float('retain_water')->nullable();
            $table->float('mud_type')->nullable();
            $table->float('human_disturbance')->nullable();
            $table->dateTime('investigation_date')->nullable();
            $table->string('remarks')->nullable();
        });

        //3.	wet_land_meteorology_real_time_value：湿地气象观测指标1
        Schema::create('wet_land_meteorology_real_time_value', function (Blueprint $table) {
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

        //4、   wet_land_meteorological_factors_max_min_avg: 森林气象要素表最大、最小、平均、日照、合计
        Schema::create('wet_land_meteorological_factors_max_min_avg', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->string('meteorological_type')->nullable();
            $table->string('meteorological_index')->nullable();
            $table->string('meteorological_index_value_type')->nullable();
            $table->dateTime('datetime')->nullable();
            $table->float('meteorological_index_value')->nullable();

        });

        //5.	wet_land_soil_table1：湿地土壤观测指标1
        Schema::create('wet_land_soil_real_time_value', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('sample_area_id')->nullable();
            $table->string('sample_area_name')->nullable();
            $table->string('wet_land_soil_index')->nullable();
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

        //6.	wet_land_meteorological_factors_max_min_avg：湿地土壤观测指标2
        Schema::create('wet_land_soil_factors_max_min_avg', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->string('wet_land_soil_type')->nullable();
            $table->string('wet_land_soil_index')->nullable();
            $table->string('wet_land_soil_index_value_type')->nullable();
            $table->dateTime('datetime')->nullable();
            $table->float('wet_land_soil_index_value')->nullable();
        });

        //7.	wet_land_soil_physical_properties1:土壤物理性质数据表1
        Schema::create('wet_land_soil_physical_properties1', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('sample_area_id')->nullable();
            $table->string('sample_area_name')->nullable();
            $table->dateTime('datetime')->nullable();
            $table->float('soil_contain')->nullable();
            $table->float('saturated_hydraulic_conductivity')->nullable();
            $table->string('remarks')->nullable();

        });

        //8.	Wet_land_soil_exchange土壤交换量数据表(cmol/kg)
        Schema::create('Wet_land_soil_exchange', function (Blueprint $table) {
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
            $table->float('cationexchange_capacity')->nullable();
            $table->float('Ca_cationexchange')->nullable();
            $table->float('Mg_cationexchange')->nullable();
            $table->float('K_cationexchange')->nullable();
            $table->float('Na_cationexchange')->nullable();
            $table->float('aCid_cationexchange')->nullable();
            $table->float('BS')->nullable();
            $table->float('Soil_carbonates')->nullable();
            $table->string('remarks')->nullable();

        });

        //9.	Wet_land_soil_ph_values:土壤pH值数据表
        Schema::create('wet_land_soil_ph_values', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('sample_area_id');
            $table->string('sample_area_name')->nullable();
            $table->dateTime('datetime')->nullable();
            $table->string('sample_partitions_coding')->nullable();
            $table->string('sample_partitions_description')->nullable();
            $table->string('soil_type')->nullable();
            $table->string('soil_parent_materials')->nullable();
            $table->string('vegetation_type')->nullable();
            $table->float('sample_depth')->nullable();
            $table->string('Sample_coding')->nullable();
            $table->float('ph_value')->nullable();
            $table->string('remarks')->nullable();

        });

        //10.	Wet_land_soil_ORP_values:土壤pH值数据表
        Schema::create('wet_land_soil_ORP_values', function (Blueprint $table) {
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
            $table->float('ORP_value')->nullable();
            $table->string('remarks')->nullable();
        });

        //10.	Wet_land_soil_total_salt:土壤全盐量数据表(mg/kg)
        Schema::create('wet_land_soil_total_salts', function (Blueprint $table) {
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
            $table->float('HCO_ions')->nullable();
            $table->float('CO_ions')->nullable();
            $table->float('CL_ions')->nullable();
            $table->float('SO2_ions')->nullable();
            $table->float('Ca_ions')->nullable();
            $table->float('Mg_ions')->nullable();
            $table->float('K_ions')->nullable();
            $table->float('Na_ions')->nullable();
            $table->string('remarks')->nullable();
        });

        //11.	Wet_land_soil_chemical_properties1 土壤化学性质数据表1(%，mg/kg)
        Schema::create('wet_land_soil_chemical_properties1', function (Blueprint $table) {
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
            $table->float('soil_organic_matter')->nullable();
            $table->float('TN')->nullable();
            $table->float('NOZ')->nullable();
            $table->float('TP')->nullable();
            $table->float('AP')->nullable();
            $table->float('TK')->nullable();
            $table->float('AK')->nullable();
            $table->string('remarks')->nullable();
        });

        //12.	Wet_land_soil_chemical_properties2 土壤化学性质数据表2(%，mg/kg)
        Schema::create('wet_land_soil_chemical_properties2', function (Blueprint $table) {
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
            $table->float('AMo')->nullable();
            $table->float('EMo')->nullable();
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

        //13.	wet_land_Soil_storage_c 土壤碳储量数据表
        Schema::create('wet_land_Soil_storage_c', function (Blueprint $table) {
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
            $table->float('soil_storage_c')->nullable();
            $table->float('soil_organic_c')->nullable();
            $table->string('remarks')->nullable();
        });

        //14.	wet_land_soil_co2_flux 土壤二氧化碳通量数据表(g/m2/h)
        Schema::create('wet_land_soil_co2_flux', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('sample_area_id');
            $table->string('sample_area_name')->nullable();
            $table->string('soil_type')->nullable();
            $table->string('soil_parent_materials')->nullable();
            $table->string('vegetation_type')->nullable();
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

        //15.	wet_land_soil_peat_layer 泥炭层数据表
        Schema::create('wet_land_soil_peat_layer', function (Blueprint $table) {
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
            $table->float('thickness')->nullable();
            $table->float('layering')->nullable();
            $table->float('distribution_area')->nullable();
            $table->string('remarks')->nullable();
        });

        //16.	wet_land_soil_frozen_soil 冻土层数据表
        Schema::create('wet_land_soil_frozen_soil', function (Blueprint $table) {
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
            $table->float('thickness')->nullable();
            $table->float('frozen_time')->nullable();
            $table->float('melt_time')->nullable();
            $table->float('distribution_area')->nullable();
            $table->string('remarks')->nullable();
        });

        //17.	wet_land_hydrology_coastal_tides 滨海湿地潮汐类型数据表
        Schema::create('wet_land_hydrology_coastal_tides', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->string('tides_type')->nullable();
            $table->float('surface_stem')->nullable();
            $table->string('remarks')->nullable();
        });

        //18.	wet_land_hydrology_water_factors1 滨海湿地潮位|河流湿地流量/流速|沼泽湿地淹水深度/地下水位数据表1
        Schema::create('wet_land_hydrology_water_factors1', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->string('observation_point')->nullable();
            $table->string('index_type')->nullable();
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

        //19.	wet_land_hydrology_water_factors2 滨海湿地潮位|河流湿地流量/流速|沼泽湿地淹水深度/地下水位数据表2
        Schema::create('wet_land_hydrology_water_factors2', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->string('index_type')->nullable();
            $table->string('index_value_type')->nullable();
            $table->float('index_value')->nullable();
            $table->string('remarks')->nullable();
        });

        //20.	wet_land_hydrology_river_hydrology 河流湿地水文数据表
        Schema::create('wet_land_hydrology_river_hydrology', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('main_stream')->nullable();
            $table->integer('branch_stream')->nullable();
            $table->string('observation_point_description')->nullable();
            $table->string('index_type')->nullable();
            $table->float('index_value')->nullable();
            $table->string('remarks')->nullable();
        });

        //21.	wet_land_hydrology_lake_hydrology 湖泊湿地水文数据表
        Schema::create('wet_land_hydrology_lake_hydrology', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->float('length')->nullable();
            $table->float('updating')->nullable();
            $table->string('remarks')->nullable();
        });

        //22.	wet_land_hydrology_swamp_hydrology 沼泽湿地水文数据表
        Schema::create('wet_land_hydrology_swamp_hydrology', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->float('time_interval')->nullable();
            $table->float('area')->nullable();
            $table->float('under_ground')->nullable();
            $table->string('remarks')->nullable();
        });

        //23.	Wet_land_water_quality_physical_properties 湿地水质指标-物理性质数据表
        Schema::create('wet_land_water_quality_physical_properties', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id')->nullable();
            $table->string('sample_area_name')->nullable();
            $table->string('index_type')->nullable();
            $table->float('index_value')->nullable();
            $table->string('remarks')->nullable();
        });

        //24.	Wet_land_water_quality_chemical_properties 湿地水质指标-化学性质数据表(mg/dm3)
        Schema::create('wet_land_water_quality_chemical_properties', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id');
            $table->string('sample_area_name')->nullable();
            $table->string('quadrat_coding')->nullable();
            $table->string('quadrat_description ')->nullable();
            $table->float('Ph_value')->nullable();
            $table->float('Mineralization_degree')->nullable();
            $table->float('total_alkalinity')->nullable();
            $table->float('TSS')->nullable();
            $table->float('K_ions')->nullable();
            $table->float('Na_ions')->nullable();
            $table->float('Fe_ions')->nullable();
            $table->float('Al_ions')->nullable();
            $table->float('CO3_ions')->nullable();
            $table->float('HCO3_ions')->nullable();
            $table->float('Cl_ions')->nullable();
            $table->float('SO4_ions')->nullable();
            $table->float('NO3_1_ions')->nullable();
            $table->float('N')->nullable();
            $table->float('NO3_2')->nullable();
            $table->float('NO2')->nullable();
            $table->float('NH3N')->nullable();
            $table->float('P')->nullable();
            $table->float('PO4')->nullable();
            $table->float('remarks')->nullable();
        });

        //25.	Wet_land_water_quality_chemical_COD 需氧量数据表(mg/dm3)
        Schema::create('wet_land_water_quality_chemical_COD', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id');
            $table->string('sample_area_name')->nullable();
            $table->string('quadrat_coding')->nullable();
            $table->string('quadrat_description ')->nullable();
            $table->float('COD ')->nullable();
            $table->float('BOD ')->nullable();
            $table->string('remarks')->nullable();
        });

        //26.	Wet_land_water_quality_trace_element_heavy_metals 微量元素和重金属元素数据表(mg/m3)
        Schema::create('wet_land_water_quality_trace_element_heavy_metals', function (Blueprint $table) {
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
            $table->string('remarks')->nullable();
        });

        //28.	Wet_land_water_quality_soluble_specific_gase 溶解性气体（包括部分温室气体）数据表
        Schema::create('wet_land_water_quality_soluble_specific_gase', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->string('observation_point')->nullable();
            $table->string('index_type')->nullable();
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

        //29.	Wet_land_biocoenosis_Vegetation_characteristic 湿地植被特征数据表
        Schema::create('wet_land_biocoenosis_Vegetation_characteristic', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id')->nullable();
            $table->string('sample_area_name')->nullable();
            $table->string('type')->nullable();
            $table->float('sample_area')->nullable();
            $table->float('coverage_rate')->nullable();
            $table->string('investigator')->nullable();
            $table->string('remarks')->nullable();
        });

        //30.	Wet_land_biocoenosis_plant_community 湿地植物群落特征数据表
        Schema::create('wet_land_biocoenosis_plant_community', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id')->nullable();
            $table->string('sample_area_name')->nullable();
            $table->string('dominant_species')->nullable();
            $table->string('composition')->nullable();
            $table->string('life_form')->nullable();
            $table->string('abundance')->nullable();
            $table->float('density')->nullable();
            $table->string('coverage_degree')->nullable();
            $table->float('height')->nullable();
            $table->float('dominant_species_height_avg')->nullable();
            $table->float('dominant_species_diameter_avg')->nullable();
            $table->string('leaves_area')->nullable();
            $table->string('investigator')->nullable();
            $table->string('remarks')->nullable();
        });

        //31.	Wet_land_biocoenosis_arbor_biology 乔木生物量数据表(kg/m2，t/hm2)
        Schema::create('wet_land_biocoenosis_arbor_biology', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id')->nullable();
            $table->string('sample_area_name')->nullable();
            $table->string('sample_area_type')->nullable();
            $table->string('plant_name')->nullable();
            $table->string('species_latin_name')->nullable();
            $table->float('forest_age')->nullable();
            $table->float('trunk_diameter')->nullable();
            $table->float('tree_height')->nullable();
            $table->float('aboveground')->nullable();
            $table->float('underground')->nullable();
            $table->string('investigator')->nullable();
            $table->string('remarks')->nullable();
        });

        //32.	Wet_land_biocoenosis_shrub_biology 灌木生物量数据表(kg/m2，t/hm2)
        Schema::create('wet_land_biocoenosis_shrub_biology', function (Blueprint $table){
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
            $table->string('investigator')->nullable();
            $table->string('remarks')->nullable();
        });

        //33.	Wet_land_biocoenosis_herb_biology 草本生物量数据表(kg/m2，g/m3)
        Schema::create('wet_land_biocoenosis_herb_biology', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id')->nullable();
            $table->string('sample_area_name')->nullable();
            $table->string('sample_area_type')->nullable();
            $table->string('plant_name')->nullable();
            $table->float('species_Latin_name')->nullable();
            $table->float('aboveground')->nullable();
            $table->float('underground')->nullable();
            $table->string('investigator')->nullable();
            $table->string('remarks')->nullable();
        });

        //34.	wet_land_biocoenosis_animals 湿地野生动物/土壤动物/湿地浮游动物/湿地底栖动物/湿地濒危动物数据表
        Schema::create('wet_land_biocoenosis_animals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id')->nullable();
            $table->string('sample_area_name')->nullable();
            $table->string('observation_description')->nullable();
            $table->string('observation_point_description')->nullable();
            $table->string('index_type')->nullable();
            $table->float('sample_area')->nullable();
            $table->string('kind')->nullable();
            $table->float('density')->nullable();
            $table->float('biomass')->nullable();
            $table->string('species_latin_name')->nullable();
            $table->float('species_number')->nullable();
            $table->float('remarks')->nullable();
        });

        //35.	Wet_land_biocoenosis_phytoplankton 湿地浮游植物数据表
        Schema::create('wet_land_biocoenosis_phytoplankton', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id')->nullable();
            $table->string('sample_area_name')->nullable();
            $table->string('observation_description')->nullable();
            $table->string('observation_point_description')->nullable();
            $table->float('investigation_area')->nullable();
            $table->string('kind')->nullable();
            $table->float('biomass')->nullable();
            $table->float('chlorophll')->nullable();
            $table->float('number')->nullable();
            $table->float('remarks')->nullable();
        });

        //36.	wet_land_disaster_Harmful_invasive_species 有害入侵物种数据表
        Schema::create('wet_land_disaster_harmful_invasive_species', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id');
            $table->string('sample_area_name')->nullable();
            $table->string('kind')->nullable();
            $table->float('area')->nullable();
            $table->string('remarks')->nullable();

        });

        //37.	wet_land_disaster_pests_occurrence_damage_diseases 病虫害的发生与危害数据表
        Schema::create('wet_land_disaster_pests_occurrence_damage_diseases', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->string('pest_kind')->nullable();
            $table->string('natural_enemy_kind')->nullable();
            $table->float('insect_density')->nullable();
            $table->float('pest_damage_percent')->nullable();
            $table->string('fungus_kind')->nullable();
            $table->float('fungus_damage_percent')->nullable();
            $table->float('fungus_damage_area')->nullable();
            $table->string('remarks')->nullable();

        });

        //38.	wet_land_disaster_red_tide 水华/赤潮数据表
        Schema::create('wet_land_disaster_red_tide', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('sample_area_id')->nullable();
            $table->string('sample_area_name')->nullable();
            $table->dateTime('datetime')->nullable();
            $table->float('frequence')->nullable();
            $table->float('area')->nullable();
            $table->string('last_time')->nullable();
            $table->string('damage_degree')->nullable();
            $table->string('remarks')->nullable();
        });

        //39.	wet_land_soil_physical_properties2: 土壤物理性质数据表2
        Schema::create('wet_land_soil_physical_properties2', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id')->nullable();
            $table->string('sample_area_name')->nullable();
            $table->float('grain_size')->nullable();
            $table->float('deposit_thickness')->nullable();
            $table->float('soil_permeability_coefficient')->nullable();
            $table->string('remarks')->nullable();
        });

        //40.	wet_land_soil_porosity 土壤孔隙度数据表
        Schema::create('wet_land_soil_porosity', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id');
            $table->string('sample_area_name')->nullable();
            $table->float('total_porosity')->nullable();
            $table->float('capillary_tube ')->nullable();
            $table->float('no_capillary_tube ')->nullable();
            $table->float('capillary_moisture_capacity ')->nullable();
            $table->float('no_capillary_moisture_capacity ')->nullable();
            $table->string('remarks')->nullable();
        });

        //41.	wet_land_water_chemical_properties 土壤化学性质数据表3 (mg/dm3)
        Schema::create('wet_land_water_chemical_properties', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id');
            $table->string('sample_area_name')->nullable();
            $table->string('quadrat_coding')->nullable();
            $table->string('quadrat_description ')->nullable();
            $table->float('hardness')->nullable();
            $table->float('Sulfide')->nullable();
            $table->float('POC ')->nullable();
            $table->string('remarks')->nullable();
        });

        //42.	wet_land_water_extract_class 分解类数据表(mg/m3)
        Schema::create('wet_land_water_extract_class', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id');
            $table->string('sample_area_name')->nullable();
            $table->string('quadrat_coding')->nullable();
            $table->string('quadrat_description ')->nullable();
            $table->float('S_P')->nullable();
            $table->float('parathion')->nullable();
            $table->float('malathion')->nullable();
            $table->float('dimethoate')->nullable();
            $table->float('DDVP')->nullable();
            $table->float('trichlorfon')->nullable();
            $table->float('chlorinated pesticide')->nullable();
            $table->float('PCB')->nullable();
            $table->string('remarks')->nullable();
        });

        //43.	wet_land_biology_litter:凋落物数据表
        Schema::create('wet_land_biology_litter', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id');
            $table->string('sample_area_name')->nullable();
            $table->string('sample_area_type')->nullable();
            $table->float('litter_thickness ')->nullable();
            $table->float('litter_weight')->nullable();
            $table->string('remarks')->nullable();
        });

        //44.	wet_land_biology_micorbiology 湿地微生物数据表
        Schema::create('wet_land_biology_micorbiology', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id');
            $table->string('sample_area_name')->nullable();
            $table->string('observation_description')->nullable();
            $table->string('observation_point_description')->nullable();
            $table->float('sample_area ')->nullable();
            $table->string('kind')->nullable();
            $table->float('colony_count')->nullable();
            $table->float('total_colibacillus')->nullable();
            $table->string('remarks')->nullable();
        });

        //45.	wet_land_disaster_epidemic 疫源疫病数据表
        Schema::create('wet_land_disaster_epidemic', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id');
            $table->string('sample_area_name')->nullable();
            $table->string('sample_partitions_coding')->nullable();
            $table->string('sample_partitions_description')->nullable();
            $table->string('epidemic_kind ')->nullable();
            $table->string('epidemic_type')->nullable();
            $table->string('area')->nullable();
            $table->float('rate')->nullable();
            $table->string('remarks')->nullable();
        });

        //46.	wet_land_disaster_wet_infestation 湿地兽害数据表
        Schema::create('wet_land_disaster_wet_infestation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id');
            $table->string('sample_area_name')->nullable();
            $table->string('sample_partitions_coding')->nullable();
            $table->string('sample_partitions_description')->nullable();
            $table->string('kind ')->nullable();
            $table->string('area')->nullable();
            $table->float('strength')->nullable();
            $table->string('remarks')->nullable();
        });

        //47.	wet_land_disaster_fire 湿地火灾数据表
        Schema::create('wet_land_disaster_fire', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id');
            $table->string('sample_area_name')->nullable();
            $table->string('fire_area')->nullable();
            $table->string('last_time')->nullable();
            $table->float('number ')->nullable();
            $table->string('type')->nullable();
            $table->float('strength')->nullable();
            $table->string('remarks')->nullable();
        });

        //48.	wet_land_disaster_meteorological_disaster 气象灾害数据表
        Schema::create('wet_land_disaster_meteorological_disaster', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('station_id')->references('id')->on('stations')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('datetime')->nullable();
            $table->integer('sample_area_id');
            $table->string('sample_area_name')->nullable();
            $table->string('type')->nullable();
            $table->float('strength')->nullable();
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
