<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AgentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'ID'=>$this->ID,
            'USER_ID'=>$this->USER_ID,
            'SIRKET_ID'=>$this->SIRKET_ID,
            'ADI'=>$this->ADI,
            'SOYADI'=>$this->SOYADI,
            'EMAIL'=>$this->EMAIL,
            'AKTIF_MI'=>$this->AKTIF_MI,
            'USER_BOLUM_ID'=>$this->USER_BOLUM_ID,
            'CINSIYET_ID'=>$this->CINSIYET_ID,
            'GSM'=>$this->GSM,
            'TELEFON'=>$this->TELEFON,
            'FAX'=>$this->FAX,
            'RESIM'=>$this->RESIM,
            'TR_ACIKLAMA'=>$this->TR_ACIKLAMA,
            'EN_ACIKLAMA'=>$this->EN_ACIKLAMA,
        ];
    }
}
