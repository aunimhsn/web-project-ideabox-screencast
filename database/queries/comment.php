<?php

function getCommentsByIdea(PDO $pdo, int $ideaId): array {
    $sql = 'select * from comments where ideas_id = :ideaId';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['ideaId' => $ideaId]);
    $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $comments;
}

function addComment(PDO $pdo, string $content, int $ideaId, int $userId): void {
    $sql = 'insert into comments (content, ideas_id, users_id) values (:content, :ideaId, :userId)';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['content' => $content, 'ideaId' => $ideaId, 'userId' => $userId]);
}

function deleteCommentById(PDO $pdo, int $commentId): void {
    $sql = 'delete from comments where id = :commentId';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['commentId' => $commentId]);
}