<?php

namespace App\Models;

use App\Core\Model;

class News extends Model
{
    private int $itemsPerPage = 4;
    public function getAll(): array
    {
        $result = $this->db->query(
            "SELECT * FROM news"
        );

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getById(int $id): ?array
    {
        $stmt = $this->db->prepare(
            "SELECT * FROM news WHERE id = ?"
        );

        $stmt->bind_param("i", $id);
        $stmt->execute();

        $result = $stmt->get_result();

        return $result->fetch_assoc() ?: null;
    }

    public function getPagesCount(): int
    {
        $result = $this->db->query("SELECT COUNT(*) AS cnt FROM news")
            ->fetch_assoc()['cnt'];
        return ceil($result / $this->itemsPerPage); // Округляем в бОльшую сторону
    }

    public function getPage(int $pageNumber): array
    {
        $stmt = $this->db->prepare("SELECT * FROM news ORDER BY date DESC LIMIT ? OFFSET ?");
        $offset = ($pageNumber - 1) * $this->itemsPerPage;
        $stmt->bind_param("ii", $this->itemsPerPage, $offset);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getLastNews(): array
    {
        return $this->db->query("SELECT * FROM news ORDER BY id DESC LIMIT 1")
            ->fetch_assoc();
    }
}