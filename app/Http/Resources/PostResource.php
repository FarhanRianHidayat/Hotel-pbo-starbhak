<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{   
    public $status;
    public $message;

    public function __construct($status,$message,$resource)
    {
        parent::__construct($resource);
        $this->status = $status;
        $this->message = $message;
    }
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
            'message' => $this->message,
            'status' => $this->status,
            'data' => $this->resource
        ];
    }
}
