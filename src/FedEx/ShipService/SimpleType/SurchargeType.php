<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * The type of the surcharge.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class SurchargeType
    extends AbstractSimpleType
{
    const _ADDITIONAL_HANDLING = 'ADDITIONAL_HANDLING';
    const _ANCILLARY_FEE = 'ANCILLARY_FEE';
    const _APPOINTMENT_DELIVERY = 'APPOINTMENT_DELIVERY';
    const _BROKER_SELECT_OPTION = 'BROKER_SELECT_OPTION';
    const _CANADIAN_DESTINATION = 'CANADIAN_DESTINATION';
    const _CLEARANCE_ENTRY_FEE = 'CLEARANCE_ENTRY_FEE';
    const _COD = 'COD';
    const _CUT_FLOWERS = 'CUT_FLOWERS';
    const _DANGEROUS_GOODS = 'DANGEROUS_GOODS';
    const _DELIVERY_AREA = 'DELIVERY_AREA';
    const _DELIVERY_CONFIRMATION = 'DELIVERY_CONFIRMATION';
    const _DOCUMENTATION_FEE = 'DOCUMENTATION_FEE';
    const _DRY_ICE = 'DRY_ICE';
    const _EMAIL_LABEL = 'EMAIL_LABEL';
    const _EUROPE_FIRST = 'EUROPE_FIRST';
    const _EXCESS_VALUE = 'EXCESS_VALUE';
    const _EXHIBITION = 'EXHIBITION';
    const _EXPORT = 'EXPORT';
    const _EXTREME_LENGTH = 'EXTREME_LENGTH';
    const _FEDEX_TAG = 'FEDEX_TAG';
    const _FICE = 'FICE';
    const _FLATBED = 'FLATBED';
    const _FREIGHT_GUARANTEE = 'FREIGHT_GUARANTEE';
    const _FREIGHT_ON_VALUE = 'FREIGHT_ON_VALUE';
    const _FUEL = 'FUEL';
    const _HOLD_AT_LOCATION = 'HOLD_AT_LOCATION';
    const _HOME_DELIVERY_APPOINTMENT = 'HOME_DELIVERY_APPOINTMENT';
    const _HOME_DELIVERY_DATE_CERTAIN = 'HOME_DELIVERY_DATE_CERTAIN';
    const _HOME_DELIVERY_EVENING = 'HOME_DELIVERY_EVENING';
    const _INSIDE_DELIVERY = 'INSIDE_DELIVERY';
    const _INSIDE_PICKUP = 'INSIDE_PICKUP';
    const _INSURED_VALUE = 'INSURED_VALUE';
    const _INTERHAWAII = 'INTERHAWAII';
    const _LIFTGATE_DELIVERY = 'LIFTGATE_DELIVERY';
    const _LIFTGATE_PICKUP = 'LIFTGATE_PICKUP';
    const _LIMITED_ACCESS_DELIVERY = 'LIMITED_ACCESS_DELIVERY';
    const _LIMITED_ACCESS_PICKUP = 'LIMITED_ACCESS_PICKUP';
    const _METRO_DELIVERY = 'METRO_DELIVERY';
    const _METRO_PICKUP = 'METRO_PICKUP';
    const _NON_MACHINABLE = 'NON_MACHINABLE';
    const _OFFSHORE = 'OFFSHORE';
    const _ON_CALL_PICKUP = 'ON_CALL_PICKUP';
    const _OTHER = 'OTHER';
    const _OUT_OF_DELIVERY_AREA = 'OUT_OF_DELIVERY_AREA';
    const _OUT_OF_PICKUP_AREA = 'OUT_OF_PICKUP_AREA';
    const _OVERSIZE = 'OVERSIZE';
    const _OVER_DIMENSION = 'OVER_DIMENSION';
    const _PIECE_COUNT_VERIFICATION = 'PIECE_COUNT_VERIFICATION';
    const _PRE_DELIVERY_NOTIFICATION = 'PRE_DELIVERY_NOTIFICATION';
    const _PRIORITY_ALERT = 'PRIORITY_ALERT';
    const _PROTECTION_FROM_FREEZING = 'PROTECTION_FROM_FREEZING';
    const _REGIONAL_MALL_DELIVERY = 'REGIONAL_MALL_DELIVERY';
    const _REGIONAL_MALL_PICKUP = 'REGIONAL_MALL_PICKUP';
    const _RESIDENTIAL_DELIVERY = 'RESIDENTIAL_DELIVERY';
    const _RESIDENTIAL_PICKUP = 'RESIDENTIAL_PICKUP';
    const _RETURN_LABEL = 'RETURN_LABEL';
    const _SATURDAY_DELIVERY = 'SATURDAY_DELIVERY';
    const _SATURDAY_PICKUP = 'SATURDAY_PICKUP';
    const _SIGNATURE_OPTION = 'SIGNATURE_OPTION';
    const _TARP = 'TARP';
    const _THIRD_PARTY_CONSIGNEE = 'THIRD_PARTY_CONSIGNEE';
    const _TRANSMART_SERVICE_FEE = 'TRANSMART_SERVICE_FEE';
}