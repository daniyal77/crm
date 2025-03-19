<?php

namespace App\Services\Models;

use Carbon\Carbon;


abstract class ServiceModel extends ServicesModel
{
    function existModel()
    {
        return $this->model;
    }

    public function getId()
    {
        return @$this->model->id;
    }

    function getSiteId()
    {
        return @$this->model->site_id;
    }

    public function getCreatedAt($isJalali = false, $onlyTime = false)
    {
        if ($onlyTime)
            Carbon::parse($this->getCreatedAt())->toTimeString();

        return $isJalali ? verta($this->model->created_at, 'Y/m/d H:i:s') : $this->model->created_at;
    }

    public function getUpdatedAt($isJalali = false, $onlyTime = false)
    {
        if ($onlyTime)
            Carbon::parse($this->getUpdatedAt())->toTimeString();

        return $isJalali ? verta($this->model->updated_at, 'Y/m/d H:i:s') : $this->model->updated_at;
    }

    public function getFullData($fields = ['created_at', 'updated_at'], $dateType = 'Y/m/d H:i:s')
    {

        $date = [];

        foreach ($fields as $filed) {
            if (@$this->model->{$filed}) {
                $jalali = verta($this->model->{$filed})->format($dateType);
                $milady = Carbon::parse($this->model->{$filed})->format($dateType);
                $date[$filed] = [
                    'time' => Carbon::parse($this->model->{$filed})->format('H:i'),
                    'jalali' => $jalali,
                    'milady' => $milady,
                ];
            }
        }

        return $date;
    }

    function attachs($collection = 'attachments')
    {
        if ($this->model->hasMedia($collection)) {
            $medias = [];

            $this->model->getMedia($collection)->each(function ($media) use (&$medias, &$i) {
                $medias [] = [
                    'url' => $media->urlSigned(),
                    'name' => $media->name,
                    'file_name' => $media->file_name,
                    'size' => $media->size,
                    'mime_type' => $media->mime_type,
                ];
            });
            return $medias;
        }

        return [];
    }

}


