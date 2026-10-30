<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'company_id' => $request->company_id,
            'name' => $request->name,
            'description' => $request->description,
            'my_role'=>$request->my_role,
            'status' => $request->status,
            'repo_url' => $request->repo_url,
            'started_at' => $request->started_at,
            'finished_at' => $request->finished_at,
        ];
    }
}
