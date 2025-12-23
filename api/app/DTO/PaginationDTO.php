<?php

namespace App\DTO;


class PaginationDTO
{
    public function __construct(
        public ?int $limit,
        public ?int $page,
        public ?array $filters,
    ) {
        $this->limit ?? $this->limit = 20;
        $this->page ?? $this->page = 1;
        $this->filters ?? $this->filters = [];
    }

    public function toArray(): array
    {
        return [
            'limit' => $this->limit,
            'page' => $this->page,
            'filters' => $this->filters,
        ];
    }
}
