<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class CompanyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name'=>$request->name,
            'logo_url'=>$request->logo_path ? Storage::disk('public')->url($request->logo_path) : null,
            'my_position'=>$request->my_position,
            'joined_at'=>$request->joined_at,
            'left_at'=>$request->left_at,
        ];
    }
}
