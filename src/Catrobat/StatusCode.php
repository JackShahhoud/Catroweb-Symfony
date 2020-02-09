<?php

namespace App\Catrobat;

/**
 * Class StatusCode
 * @package Catrobat
 */
class StatusCode
{
  const OK = 200;
  const INTERNAL_SERVER_ERROR = 500;
  const MISSING_POST_DATA = 501;
  const UPLOAD_EXCEEDING_FILESIZE = 502;
  const MISSING_CHECKSUM = 503;
  const INVALID_CHECKSUM = 504;
  const INVALID_FILE = 505;
  const INVALID_PROGRAM = 506;
  const PROJECT_XML_MISSING = 507;
  const INVALID_XML = 508;
  const MISSING_PROGRAM_TITLE = 509;
  const IMAGE_MISSING = 524;
  const UNEXPECTED_FILE = 525;
  const RUDE_WORD_IN_PROGRAM_NAME = 511;
  const RUDE_WORD_IN_DESCRIPTION = 512;
  const RUDE_WORD_IN_CREDITS = 813;
  const UPLOAD_UNSUPPORTED_MIME_TYPE = 516;
  const UPLOAD_UNSUPPORTED_FILE_TYPE = 517;
  const OLD_CATROBAT_LANGUAGE = 518;
  const OLD_APPLICATION_VERSION = 519;
  const INVALID_PARAM = 520;
  const FILE_UPLOAD_FAILED = 521;
  const MEDIA_LIB_CATEGORY_NOT_FOUND = 522;
  const MEDIA_LIB_PACKAGE_NOT_FOUND = 523;
  const PROGRAM_NAME_TOO_LONG = 526;
  const DESCRIPTION_TOO_LONG = 527;
  const INVALID_FILE_UPLOAD = 528;  // upload failed but program still in DB
  const NOT_MY_PROGRAM = 529;
  const NO_ADMIN_RIGHTS = 530;
  const NOT_LOGGED_IN = 531;
  const PASSWORD_INVALID = 532;
  const CREDITS_TO_LONG = 833;

  const ALREADY_STOLE = 510;

  const LOGIN_ERROR = 601;
  const REGISTRATION_ERROR = 602;

  const USER_PASSWORD_MISSING = 751;
  const USER_USERNAME_PASSWORD_EQUAL = 752;
  const USER_PASSWORD_TOO_SHORT = 753;
  const USER_PASSWORD_TOO_LONG = 754;
  const USER_NEW_PASSWORD_BOARD_UPDATE_FAILED = 755;
  const USER_UPDATE_EMAIL_FAILED = 756;
  const USER_ADD_EMAIL_EXISTS = 757;
  const USER_UPDATE_CITY_FAILED = 758;
  const USER_UPDATE_COUNTRY_FAILED = 759;
  const USER_UPDATE_GENDER_FAILED = 760;
  const USER_UPDATE_BIRTHDAY_FAILED = 761;
  const USER_USERNAME_MISSING = 762;
  const USER_USERNAME_INVALID_CHARACTER = 763;
  const USER_USERNAME_INVALID = 764;
  const USER_EMAIL_INVALID = 765;
  const USER_COUNTRY_INVALID = 766;
  const USER_REGISTRATION_FAILED = 767;
  const USER_UPDATE_LANGUAGE_FAILED = 768;
  const USER_POST_DATA_MISSING = 769;
  const USER_RECOVERY_NOT_FOUND = 770;
  const USER_RECOVERY_HASH_CREATION_FAILED = 771;
  const USER_RECOVERY_EXPIRED = 772;
  const USER_AVATER_CREATION_FAILED = 773;
  const USER_PASSWORD_NOT_EQUAL_PASSWORD2 = 774;
  const USER_NAME_IS_EMAIL_ADDRESS = 775;
  const USER_AVATAR_UPLOAD_ERROR = 776;
  const USER_ADD_USERNAME_EXISTS = 777;
  const USER_EMAIL_MISSING = 778;
  const USER_EMAIL_ALREADY_EXISTS = 779;
  const USERNAME_MISSING = 800;
  const USERNAME_ALREADY_EXISTS = 801;
  const USERNAME_INVALID = 802;
  const USERNAME_NOT_FOUND = 803;

  const NO_GAME_JAM = 900;
}
