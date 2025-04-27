<?php

declare(strict_types=1);

namespace AzliRynz\MultiVersion\network;

use pocketmine\network\mcpe\protocol\ProtocolInfo;

class ProtocolConstants{

    public const BEDROCK_1_21_0 = 685;
    public const BEDROCK_1_21_2 = 686;
    public const BEDROCK_1_21_20 = 712;
    public const BEDROCK_1_21_30 = 729;
    public const BEDROCK_1_21_40 = 748;
    public const BEDROCK_1_21_50 = 766;
    public const BEDROCK_1_21_60 = 776;
    public const BEDROCK_1_21_70 = 786;

    public const MINECRAFT_VERSION = [
        self::BEDROCK_1_21_0 => "1.21.0",
        self::BEDROCK_1_21_2 => "1.21.2",
        self::BEDROCK_1_21_20 => "1.21.10",
        self::BEDROCK_1_21_30 => "1.21.30",
        self::BEDROCK_1_21_40 => "1.21.40",
        self::BEDROCK_1_21_50 => "1.21.50",
        self::BEDROCK_1_21_60 => "1.21.60",
        self::BEDROCK_1_21_70 => "1.21.70",
        ProtocolInfo::CURRENT_PROTOCOL => ProtocolInfo::MINECRAFT_VERSION_NETWORK
    ];

    public const SUPPORTED_PROTOCOLS = [
        self::BEDROCK_1_21_0,
        self::BEDROCK_1_21_2,
        self::BEDROCK_1_21_20,
        self::BEDROCK_1_21_30,
        self::BEDROCK_1_21_40,
        self::BEDROCK_1_21_50,
        self::BEDROCK_1_21_60,
        self::BEDROCK_1_21_70,
        ProtocolInfo::CURRENT_PROTOCOL
    ];
}