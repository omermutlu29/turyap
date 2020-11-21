<?php

namespace App\Models;

use App\RelationshipsTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use RelationshipsTrait;
    protected $primaryKey = 'URUN_ID';
    /**
     * urun_durum_id ?
     */
    protected $table = 'urun';
    use HasFactory;

    public function product_type()
    {
        return $this->belongsTo(ProductType::class, 'CINSI_ID', 'CINSI_ID');
    }


    public function product_type_content()
    {
        return $this->belongsTo(ProductTypeContent::class, 'TIP_ID', 'TIP_ID');
    }


    public function category()
    {
        return $this->belongsTo(Category::class, 'KATEGORI_ID', 'KATEGORI_ID');
    }


    public function currency()
    {
        return $this->belongsTo(Currency::class, 'PARA_BIRIMI_ID', 'PARA_BIRIMI_ID');
    }


    public function floor_count()
    {
        return $this->belongsTo(FloorCount::class, 'BINA_KAT_SAYISI_ID', 'KATSAYISI_ID');
    }

    public function bath_count()
    {
        return $this->belongsTo(BathCount::class, 'BANYO_SAYISI_ID', 'BANYOSAYISI_ID');
    }


    public function room_count()
    {
        return $this->belongsTo(RoomCount::class, 'ODA_SAYISI_ID', 'ODASAYISI_ID');
    }


    public function section_count()
    {
        return $this->belongsTo(SectionCount::class, 'ISYERI_BOLUM_SAYISI_ID', 'BOLUMSAYISI_ID');
    }

    public function product_usage_status()
    {
        return $this->belongsTo(ProductUsageStatus::class, 'KULLANIM_DURUMU_ID', 'KULLANIM_DURUMU_ID');
    }

    public function product_structure_status()
    {
        return $this->belongsTo(ProductStructureStatus::class, 'YAPI_DURUMU_ID', 'YAPI_DURUMU_ID');
    }

    public function build_year()
    {
        return $this->belongsTo(BuildYear::class, 'BINANIN_YASI_ID', 'BINAYASI_ID');
    }

    public function heating_type()
    {
        return $this->belongsTo(HeatingType::class, 'ISITMA_ID', 'ISITMA_ID');
    }

    public function fuel_type()
    {
        return $this->belongsTo(FuelType::class, 'YAKIT_TIPI_ID', 'YAKITIPI_ID');
    }

    public function deed_status()
    {
        return $this->belongsTo(DeedStatus::class, 'TAPU_DURUMU_ID', 'TAPUDURUMU_ID');
    }

    public function current_floor()
    {
        return $this->belongsTo(CurrentFloor::class, 'BULUNDUGU_KAT_ID', 'BULUNDUKAT_ID');
    }

    public function product_class()
    {
        return $this->belongsTo(ProductClass::class, 'SINIF_ID', 'SINIF_ID');
    }

    public function balcony_count()
    {
        return $this->belongsTo(BalconyCount::class, 'BALKON_SAYISI_ID', 'BALKONSAYISI_ID');
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'ULKE_ID', 'countryID');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'IL_ID', 'cityID');
    }

    public function town()
    {
        return $this->belongsTo(Town::class, 'ILCE_ID', 'townID');
    }

    public function deed_type()
    {
        return $this->belongsTo(ProductDeedType::class, 'ARSA_TAPU_ID', 'ARSATAPU_ID');
    }

    public function clearance()
    {
        return $this->belongsTo(ProductClearance::class, 'GABARI_ID', 'GABARI_ID');
    }

    public function kaks()
    {
        return $this->belongsTo(Kaks::class, 'KAKS_ID', 'KAKS_ID');
    }

    public function agent()
    {
        return $this->belongsTo(Agent::class, 'USER_ID', 'USER_ID');
    }

    public function agency()
    {
        return $this->belongsTo(Agency::class, 'SIRKET_ID', 'SIRKET_ID');
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class, 'URUN_ID', 'URUN_ID');
    }

    public function product_fields()
    {
        return $this->hasOne(ProductField::class, 'KAYIT_ID', 'URUN_ID');
    }


}
