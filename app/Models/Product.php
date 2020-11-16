<?php

namespace App\Models;

use App\RelationshipsTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use RelationshipsTrait;
    protected $primaryKey = 'urun_id';
    /**
     * urun_durum_id ?
     */
    protected $table = 'urun';
    use HasFactory;

    public function product_type()
    {
        return $this->belongsTo(ProductType::class, 'cinsi_id', 'cinsi_id');
    }


    public function product_type_content()
    {
        return $this->belongsTo(ProductTypeContent::class, 'tip_id', 'tip_id');
    }


    public function category()
    {
        return $this->belongsTo(Category::class, 'kategori_id', 'kategori_id');
    }


    public function currency()
    {
        return $this->belongsTo(Currency::class, 'para_birimi_id', 'para_birimi_id');
    }


    public function floor_count()
    {
        return $this->belongsTo(FloorCount::class, 'bina_kat_sayisi_id', 'katsayisi_id');
    }

    public function bath_count()
    {
        return $this->belongsTo(BathCount::class, 'banyo_sayisi_id', 'banyosayisi_id');
    }


    public function room_count()
    {
        return $this->belongsTo(RoomCount::class, 'oda_sayisi_id', 'odasayisi_id');
    }


    public function section_count()
    {
        return $this->belongsTo(SectionCount::class, 'isyeri_bolum_sayisi_id', 'bolumsayisi_id');
    }

    public function product_usage_status()
    {
        return $this->belongsTo(ProductUsageStatus::class, 'kullanım_durumu_id', 'kullanım_durumu_id');
    }

    public function product_structure_status()
    {
        return $this->belongsTo(ProductStructureStatus::class, 'yapi_durumu_id', 'yapi_durumu_id');
    }

    public function build_year()
    {
        return $this->belongsTo(BuildYear::class, 'binanin_yasi_id', 'binanin_yasi_id');
    }

    public function heating_type()
    {
        return $this->belongsTo(HeatingType::class, 'isitma_id', 'isitma_id');
    }

    public function fuel_type()
    {
        return $this->belongsTo(FuelType::class, 'yakit_tipi_id', 'yakitipi_id');
    }

    public function deed_status()
    {
        return $this->belongsTo(DeedStatus::class, 'tapu_durumu_id', 'tapudurumu_id');
    }

    public function current_floor()
    {
        return $this->belongsTo(CurrentFloor::class, 'bulundugu_kat_id', 'bulundukat_id');
    }

    public function product_class()
    {
        return $this->belongsTo(ProductClass::class, 'sinif_id', 'sinif_id');
    }

    public function balcony_count()
    {
        return $this->belongsTo(BalconyCount::class, 'balkon_sayisi_id', 'balkonsayisi_id');
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'ulke_id', 'country_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'il_id', 'city_id');
    }

    public function town()
    {
        return $this->belongsTo(Town::class, 'ilce_id', 'town_id');
    }

    public function deed_type()
    {
        return $this->belongsTo(ProductDeedType::class, 'arsa_tapu_id', 'arsatapu_id');
    }

    public function clearance()
    {
        return $this->belongsTo(ProductClearance::class, 'gabari_id', 'gabari_id');
    }

    public function kaks()
    {
        return $this->belongsTo(Kaks::class, 'kaks_id', 'kaks_id');
    }

    public function agent()
    {
        return $this->belongsTo(Agent::class, 'user_id', 'user_id');
    }

    public function agency()
    {
        return $this->belongsTo(Agency::class, 'sirket_id', 'sirket_id');
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class, 'urun_id', 'urun_id');
    }

    public function product_fields()
    {
        return $this->hasOne(ProductField::class, 'kayit_id', 'urun_id');
    }


}
