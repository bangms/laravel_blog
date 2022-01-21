<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BoardResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // json 데이터를 
        // api로 보내주는 데이터를 한번 가공해서 보내줄 수 있음
        // Todo에 대한 Model을 반환할 때 TodoResource 활용해서 반환한다고 보면 됨

        return [
            'writer' => "작성자 : " . $this->writer,
            'subject' => "제목 : " . $this->subject,
            'content' => "내용 : " . $this->content,
            'created_at' => "작성자 : " . $this->created_at->diffForHumans(), 
            //diffForHumans 사람이 읽을 수 있는 형태로 변환
        ];


        //return parent::toArray($request);
    }
}
