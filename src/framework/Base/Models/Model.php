<?php

namespace Framework\Models;

use Framework\CDatabase;
use Framework\Validators\Validator;

abstract class Model
{
    protected array $data;
    protected static string $table;
    protected array $fillable = [];
    protected $db;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public static function getById(int $id): array
    {
        $query = "SELECT * FROM " . static::$table . " WHERE id = :id";
        $stmt = CDatabase::getInstanse()->connection->prepare($query);
        $stmt->execute(['id' => $id]);

        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public static function getBy(array $criteria): array
    {
        $query = "SELECT * FROM " . static::$table . " WHERE ";
        $conditions = [];
        $params = [];

        foreach ($criteria as $key => $value) {
            $conditions[] = "{$key} = :{$key}";
            $params[$key] = $value;
        }

        $query .= implode(" AND ", $conditions);
        $stmt = CDatabase::getInstanse()->connection->prepare($query);
        $stmt->execute($params);

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public static function create(array $data): bool
    {

        $fields = array_keys($data);
        $placeholders = array_map(function ($field) {
            return ":{$field}";
        }, $fields);
        $query = "INSERT INTO " . static::$table . " (" . implode(',', $fields) . ") 
        VALUES (" . implode(',', $placeholders) . ")";
        $stmt = CDatabase::getInstanse()->connection->prepare($query);

        return $stmt->execute($data);
    }

    public static function update(int $id, array $data): bool
    {

        $fields = [];

        foreach ($data as $key => $value) {
            $fields[] = "{$key} = :{$key}";
        }

        $query = "UPDATE " . static::$table . " SET " . implode(',', $fields) . " WHERE id = :id";
        $stmt = CDatabase::getInstanse()->connection->prepare($query);

        return $stmt->execute($data);
    }

    public function delete(int $id): bool
    {
        $query = "DELETE FROM " . static::$table . " WHERE id = :id";
        $stmt = CDatabase::getInstanse()->connection->prepare($query);

        return $stmt->execute(['id' => $id]);
    }

    public function __get($name)
    {
        return $this->data[$name] ?? null;
    }

    public function __set(string $name, $value)
    {
        if (in_array($name, $this->fillable)) {
            return;
        }

        $this->data[$name] = $value;
    }

    public function __call(string $name, array $args)
    {
        if (strpos($name, 'get') !== 0) {
            return null;
        }

        $fieldName = strtolower(substr($name, 3));
        return $this->data[$fieldName] ?? null;
    }
}
