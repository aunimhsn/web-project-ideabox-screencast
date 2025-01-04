<?php

function getIdeas(PDO $pdo, string $order = 'asc'): array {
    $sql = 'select * from ideas order by created_at ' . $order;
    $stmt = $pdo->query($sql);
    $ideas = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $ideas;
}

function addIdea(PDO $pdo, string $title, string $content, int $userId) {
    $sql = 'insert into ideas (title, content, users_id) values (:title, :content, :userId)';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['title' => $title, 'content' => $content, 'userId' => $userId]);
}

function deleteIdeaById(PDO $pdo, int $ideaId) {
    // Delete linked comments
    $sql = 'delete from comments where ideas_id = :ideaId';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['ideaId' => $ideaId]);

    // Delete idea
    $sql = 'delete from ideas where id = :ideaId';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['ideaId' => $ideaId]);
}