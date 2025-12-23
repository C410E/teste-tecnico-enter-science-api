<?php

namespace App\DTO;

class ArtistDTO
{
    public function __construct(
        public string $customer_name,
        public string $artist_name,
        public ?string $fee = null,
        public string $event_date,
        public ?string $address = null,
        public ?int $id = null
    ) {}
    public function toArray(): array
    {
        return [
            'customer_name' => $this->customer_name,
            'artist_name' => $this->artist_name,
            'fee' => $this->fee,
            'event_date' => $this->event_date,
            'address' => $this->address,
        ];
    }
}