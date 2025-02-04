<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains full information about a user (except the full list of profile photos).
 */
class UserFullInfo extends TdObject
{
    public const TYPE_NAME = 'userFullInfo';

    /**
     * True, if the user is blacklisted by the current user.
     *
     * @var bool
     */
    protected bool $isBlocked;

    /**
     * True, if the user can be called.
     *
     * @var bool
     */
    protected bool $canBeCalled;

    /**
     * True, if the user can't be called due to their privacy settings.
     *
     * @var bool
     */
    protected bool $hasPrivateCalls;

    /**
     * True, if the current user needs to explicitly allow to share their phone number with the user when the method addContact is used.
     *
     * @var bool
     */
    protected bool $needPhoneNumberPrivacyException;

    /**
     * A short user bio.
     *
     * @var string|array|null
     */
    protected string|array|null $bio;

    /**
     * For bots, the text that is included with the link when users share the bot.
     *
     * @var string|null
     */
    protected string|null $shareText;

    /**
     * Number of group chats where both the other user and the current user are a member; 0 for the current user.
     *
     * @var int
     */
    protected int $groupInCommonCount;

    /**
     * If the user is a bot, information about the bot; may be null.
     *
     * @var BotInfo|null
     */
    protected ?BotInfo $botInfo;

    public function __construct(
        bool $isBlocked,
        bool $canBeCalled,
        bool $hasPrivateCalls,
        bool $needPhoneNumberPrivacyException,
        string|array|null $bio,
        string|null $shareText,
        int $groupInCommonCount,
        ?BotInfo $botInfo
    ) {
        $this->isBlocked                       = $isBlocked;
        $this->canBeCalled                     = $canBeCalled;
        $this->hasPrivateCalls                 = $hasPrivateCalls;
        $this->needPhoneNumberPrivacyException = $needPhoneNumberPrivacyException;
        $this->bio                             = $bio;
        $this->shareText                       = $shareText;
        $this->groupInCommonCount              = $groupInCommonCount;
        $this->botInfo                         = $botInfo;
    }

    public static function fromArray(array $array): UserFullInfo
    {
        return new static(
            $array['is_blocked'],
            $array['can_be_called'],
            $array['has_private_calls'],
            $array['need_phone_number_privacy_exception'],
            $array['bio'],
            $array['share_text'],
            $array['group_in_common_count'],
            (isset($array['bot_info']) ? TdSchemaRegistry::fromArray($array['bot_info']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                               => static::TYPE_NAME,
            'is_blocked'                          => $this->isBlocked,
            'can_be_called'                       => $this->canBeCalled,
            'has_private_calls'                   => $this->hasPrivateCalls,
            'need_phone_number_privacy_exception' => $this->needPhoneNumberPrivacyException,
            'bio'                                 => $this->bio,
            'share_text'                          => $this->shareText,
            'group_in_common_count'               => $this->groupInCommonCount,
            'bot_info'                            => (isset($this->botInfo) ? $this->botInfo : null),
        ];
    }

    public function getIsBlocked(): bool
    {
        return $this->isBlocked;
    }

    public function getCanBeCalled(): bool
    {
        return $this->canBeCalled;
    }

    public function getHasPrivateCalls(): bool
    {
        return $this->hasPrivateCalls;
    }

    public function getNeedPhoneNumberPrivacyException(): bool
    {
        return $this->needPhoneNumberPrivacyException;
    }

    public function getBio(): string
    {
        return $this->bio;
    }

    public function getShareText(): string
    {
        return $this->shareText;
    }

    public function getGroupInCommonCount(): int
    {
        return $this->groupInCommonCount;
    }

    public function getBotInfo(): ?BotInfo
    {
        return $this->botInfo;
    }
}
