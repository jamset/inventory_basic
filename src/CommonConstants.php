<?php
/**
 * Created by PhpStorm.
 * User: ww
 * Date: 01.11.15
 * Time: 1:11
 */
namespace FractalBasic\Inventory;

class CommonConstants
{
    const STAT_CONNECTION = 'stat';
    const MODULE_NAME_LC = 'module_name';

    const ID = 'id';
    const ID_LC = 'id';

    const STATUS = 'status';
    const CLIENT_ID = 'client_id';
    const USER_ID = 'user_id';
    const COLUMNS = 'columns';
    const ORDER_BY = 'order_by';
    const PERIODICITY = 'periodicity';

    const LAST_UPDATE = 'last_update';
    const UPDATED_AT = 'updated_at';
    const UPDATED_AT_LC = 'updated_at';
    const CREATED_AT = 'created_at';

    const PROFILE_ID = 'profile_id';

    const START_DATE = 'start_date';
    const END_DATE = 'end_date';

    const PERIOD_FROM = 'period_from';
    const PERIOD_TO = 'period_to';

    const PERIOD_FROM_PATTERN = 'period_from_pattern';
    const PERIOD_TO_PATTERN = 'period_to_pattern';

    const ACTIVE = 'active';

    const PREPARED = 'PREPARED';
    const IN_WORK = 'IN_WORK';
    const DONE = 'DONE';
    const FAIL = 'FAIL';

    const QUALITATIVE = 'qualitative';
    const QUANTITATIVE = 'quantitative';

    const ASC = 'ASC';
    const DESC = 'DESC';

    const Y_M_D_FORMAT = "Y-m-d";
    const Y_M_D_H_I_S_FORMAT = 'Y-m-d H:i:s';

    const CURRENCY = 'currency';
    const TIMEZONE = 'timezone';
    const TYPE = 'type';
    const TYPE_LC = 'type';
    const WEBSITE_URL = 'website_url';

    const LEVEL = 'level';

    const NAME = 'name';
    const COMPANY_NAME = 'company_name';
    const CURRENCY_CODE = 'currency_code';
    const DATE_TIME_ZONE = 'date_time_zone';

    const ACCOUNT_ID_LC = 'account_id';

    const KEYWORD = 'keyword';

    const LANGUAGE = 'language';
    const FILE_FORMAT = 'file_format';

    const VAR_CHAR_255 = 255;

    const SUM = 'sum';
    const CLICKS = 'clicks';
    const SHOWS = 'shows';
    const COST = 'cost';
    const IMPRESSIONS_LC = 'impressions';

    const CLIENT_NAME = 'client_name';
    const CAMPAIGN_NAME = 'campaign_name';
    const CAMPAIGN_ID_LC = 'campaign_id';
    const CAMPAIGN_ID = 'campaign_id';
    const GROUP_NAME = 'group_name';
    const GROUP_ID = 'group_id';
    const GROUP_ID_LC = 'group_id';

    const PLATFORMS = 'PLATFORMS';

    const STATE = 'state';
    const SIZE = 'size';
    const SPACE = 'space';
    const PERCENTAGE = 'percentage';

    const SYSTEM = 'system';
    const INDEX_POSTFIX = '_index';

    const PAGE_NAME = 'page_name';

    const POSSESSING_LC = 'possessing';
    const COLUMNS_NAMES_LC = 'columns_names';
    const COLUMNS_COLLECTION_LC = 'columns_collection';

    const ORDER_BY_LC = 'order_by';
    const LOCALE_COLUMNS_COLLECTION_LC = 'locale_columns_collection';

    const KEYWORD_ID_LC = 'keyword_id';
    const KEYWORD_NAME_LC = 'keyword_name';

    const DATE_LC = 'date';
    const DATE_UCFIRST = 'Date';

    const SYSTEM_PARAMS = 'SYSTEM_PARAMS';
    const PLATFORM_PARAMS = 'PLATFORM_PARAMS';

    const CLIENT_LC = 'client';
    const CAMPAIGN_LC = 'campaign';
    const GROUP_LC = 'group';
    const KEYWORD_LC = 'keyword';

    const DB_NAME = 'DB_NAME';
    const TABLE_COLLATION = 'TABLE_COLLATION';

    const SYSTEM_CLIENT_ID_LC = 'system_client_id';

    const TABLE_NAME = 'TABLE_NAME';

    const JOIN_TYPE = 'JOIN_TYPE';
    const CONNECTED_TABLE_NAME = 'CONNECTED_TABLE_NAME';
    const JOIN_FIELD_NAME = 'JOIN_FIELD_NAME';

    const LEFT = 'LEFT';
    const INNER = 'INNER';

    const LOGIN_UCFIRST = 'Login';
    const STATISTICS_DATA_ID_LC = 'statistics_data_id';
    const DYNAMIC = 'DYNAMIC';
    const SELF_FIELD_NAME = 'SELF_FIELD_NAME';

    const BANNER_ID_LC = 'banner_id';
    const CRITERIA_ID_LC = 'criteria_id';
    const NAME_LC = 'name';

    const ROWS_NUMBER_LC = 'rows_number';
    const URL_LC = 'url';

    const TABLE_NAME_FOR_COMPETITIVE_SELECTION = 'TABLE_NAME_FOR_COMPETITIVE_SELECTION';
    const DESIGNATIONS_TO_SKIP = 'DESIGNATIONS_TO_SKIP';
    const PHRASE_ID_LC = 'phrase_id';

    const PERIODICITY_TYPE_LC = 'periodicity_type';
    const DAY_OF_WEEK = 'DAY_OF_WEEK';
    const NUMBER = 'NUMBER';

    const PREV_WEEK = 'PREV_WEEK';
    const PREV_MONTH = 'PREV_MONTH';
    const LAST_DAYS = 'LAST_DAYS';
    const LAST_DAYS_LC = 'last_days';

    const CERTAIN_FROM = 'CERTAIN_FROM';
    const CERTAIN_TO = 'CERTAIN_TO';

    const MAIL_INFO_ID_LC = 'mail_info_id';
    const MAX_EXCEL_2003_ROWS = 65536;

    const MAX_FILE_ATTACHMENT_SIZE_KB = 17253611008; //~16-17 Mb
    const PORT_NUMBER_LC = 'port_number';

    const IN_USE = 'IN_USE';
    const FREE = 'FREE';

    const UNIQUE_POSTFIX_LC = "_unique";
    const FULL_COMMAND_LC = 'full_command';
    const COMMAND_TYPE_LC = 'command_type';
    const GEARMAN_CLIENT = 'GEARMAN_CLIENT';
    const COMMAND_SHORT_NAME_LC = 'command_short_name';
    const COMMAND_PARAMS_LC = 'command_params';
    const COMMAND_OPTIONS_LC = 'command_options';

    const PARALLEL = 'PARALLEL';
    const CONSISTENT = 'CONSISTENT';
    const FIXED = 'FIXED';

    const TOKEN_ID_WITH_HYPHEN = 'token-id';
    const DATE_START_WITH_HYPHEN_LC = 'date-start';
    const DATE_END_WITH_HYPHEN_LC = 'date-end';
    const METRICS_LC = 'metrics';
    const DIMENSIONS_LC = 'dimensions';
    const SORT_LC = 'sort';
    const FILTERS_LC = 'filters';
    const SEGMENT_LC = 'segment';
    const MAX_RESULTS_WITH_HYPHEN_LC = 'max-results';
    const START_INDEX_WITH_HYPHEN_LC = 'start-index';

    const TCP_LOCALHOST_PREFIX = 'tcp://127.0.0.1:';



}
