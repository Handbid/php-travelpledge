<?php

namespace travelpledge\models;

use travelpledge\Exception;

/**
 * @project php-travelpledge
 * @class travelpledge\models\VacationCertificate
 *
 * @author Woody Whitman <woody@handbid.com>
 * 
 * @property integer $Id
 * @property string $VideoLink
 * @property string $NumberOfNights
 * @property string $ImageUrl
 * @property string $NumberOfBedrooms
 * @property string $MaximumOccupancy
 * @property string $ValidityDetails
 * @property string $RetailValue
 * @property string $Status
 * @property string $ClaimedDate
 * @property string $PurchasedDate
 * @property string $MinimumBid
 * @property string $CertificateNumberText
 * @property string $Description
 * @property string $RedemptionInstructions
 * @property string $Restrictions
 * @property string $MarketingHeadline
 * @property string $Provider
 * @property string $City
 * @property boolean $StateOrProvince
 * @property string $Country
 */
class VacationCertificate extends Certificate {

    public $attributes = [
        "VideoLink",
        "NumberOfNights",
        "ImageUrl",
        "NumberOfBedrooms",
        "MaximumOccupancy",
        "Id",
        "ValidityDetails",
        "RetailValue",
        "Status",
        "ClaimedDate",
        "PurchasedDate",
        "MinimumBid",
        "CertificateNumberText",
        "Description",
        "RedemptionInstructions",
        "Restrictions",
        "MarketingHeadline",
        "Provider",
        "City",
        "StateOrProvince",
        "Country"
    ];
    
    public function getName() {
        return $this->MarketingHeadline;
    }
    
    public function getDetails() {
        return $this->ValidityDetails;
    }

    
    public function getImage() {
        return $this->ImageUrl;
    }
}
