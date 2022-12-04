<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class KYCResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'names' => $this->user->last_name . ' ' . $this->user->first_name,
            'email' => $this->user->email,
            'type' => $this->type,
            'file'  => $this->file, 
            'issue'  => $this->issue, 
            'approved'  => (bool) $this->approved, 
            'admin_username'  => $this->admin_username,
            'date' => Carbon::createFromTimeStamp(strtotime($this->created_at))->isoFormat('MMM Do YY, h:mm a'),
			'created_at' => empty($this->created_at) ? null : $this->created_at->format('Y-m-d H:i:s'),
			'updated_at' => $this->updated_at->format('Y-m-d H:i:s'),
        ];
    }
}
