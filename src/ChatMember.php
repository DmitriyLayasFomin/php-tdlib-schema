<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A user with information about joining/leaving a chat.
 */
class ChatMember extends TdObject
{
    public const TYPE_NAME = 'chatMember';

    /**
     * User identifier of the chat member.
     *
     * @var int
     */
    protected int $userId;

    /**
     * Identifier of a user that invited/promoted/banned this member in the chat; 0 if unknown.
     *
     * @var int
     */
    protected int $inviterUserId;

    /**
     * Point in time (Unix timestamp) when the user joined a chat.
     *
     * @var int
     */
    protected int $joinedChatDate;

    /**
     * Status of the member in the chat.
     *
     * @var ChatMemberStatus
     */
    protected ChatMemberStatus $status;


    public function __construct(int $userId, int $inviterUserId, int $joinedChatDate, ChatMemberStatus $status)
    {
        $this->userId         = $userId;
        $this->inviterUserId  = $inviterUserId;
        $this->joinedChatDate = $joinedChatDate;
        $this->status         = $status;

    }

    public static function fromArray(array $array): ChatMember
    {
        return new static(
            $array['member_id']['user_id'],
            $array['inviter_user_id'],
            $array['joined_chat_date'],
            TdSchemaRegistry::fromArray($array['status']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'member_id'          => $this->userId,
            'inviter_user_id'  => $this->inviterUserId,
            'joined_chat_date' => $this->joinedChatDate,
            'status'           => $this->status->typeSerialize(),
        ];
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getInviterUserId(): int
    {
        return $this->inviterUserId;
    }

    public function getJoinedChatDate(): int
    {
        return $this->joinedChatDate;
    }

    public function getStatus(): ChatMemberStatus
    {
        return $this->status;
    }
}
