<?php

# TODO: Créer une classe QueryBuilder en utilisant le design pattern Builder

namespace App;

interface QueryBuilderInterface
{
    public function select(array $fields): QueryBuilderInterface;
    public function from(string $table): QueryBuilderInterface;
    public function where(string $field, string $value, string $operator = '='): QueryBuilderInterface;
    public function orderBy(string $field, string $order = 'ASC'): QueryBuilderInterface;
    public function getQuery(): string;
}