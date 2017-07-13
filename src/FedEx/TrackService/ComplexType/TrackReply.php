<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data returned from a FedEx package tracking request.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property \FedEx\TrackService\SimpleType\NotificationSeverityType|string $HighestSeverity
 * @property Notification[] $Notifications
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property boolean $DuplicateWaybill
 * @property boolean $MoreData
 * @property string $PagingToken
 * @property TrackDetail[] $TrackDetails

 */
class TrackReply extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackReply';

    /**
     * This contains the severity type of the most severe Notification in the Notifications array.
     *
     * @param \FedEx\TrackService\SimpleType\NotificationSeverityType|string $highestSeverity
     * @return $this
     */
    public function setHighestSeverity($highestSeverity)
    {
        $this->values['HighestSeverity'] = $highestSeverity;
        return $this;
    }

    /**
     * Information about the request/reply such was the transaction successful or not, and any additional information relevant to the request and/or reply. There may be multiple Notifications in a reply.
     *
     * @param Notification[] $notifications
     * @return $this
     */
    public function setNotifications(array $notifications)
    {
        $this->values['Notifications'] = $notifications;
        return $this;
    }

    /**
     * Contains the CustomerTransactionDetail that is echoed back to the caller for matching requests and replies and a Localization element for defining the language/translation used in the reply data.
     *
     * @param TransactionDetail $transactionDetail
     * @return $this
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->values['TransactionDetail'] = $transactionDetail;
        return $this;
    }

    /**
     * Contains the version of the reply being used.
     *
     * @param VersionId $version
     * @return $this
     */
    public function setVersion(VersionId $version)
    {
        $this->values['Version'] = $version;
        return $this;
    }

    /**
     * True if duplicate packages (more than one package with the same tracking number) have been found, and only limited data will be provided for each one.
     *
     * @param boolean $duplicateWaybill
     * @return $this
     */
    public function setDuplicateWaybill($duplicateWaybill)
    {
        $this->values['DuplicateWaybill'] = $duplicateWaybill;
        return $this;
    }

    /**
     * True if additional packages remain to be retrieved.
     *
     * @param boolean $moreData
     * @return $this
     */
    public function setMoreData($moreData)
    {
        $this->values['MoreData'] = $moreData;
        return $this;
    }

    /**
     * Value that must be passed in a TrackNotification request to retrieve the next set of packages (when MoreDataAvailable = true).
     *
     * @param string $pagingToken
     * @return $this
     */
    public function setPagingToken($pagingToken)
    {
        $this->values['PagingToken'] = $pagingToken;
        return $this;
    }

    /**
     * Contains detailed tracking information for the requested packages(s).
     *
     * @param TrackDetail[] $trackDetails
     * @return $this
     */
    public function setTrackDetails(array $trackDetails)
    {
        $this->values['TrackDetails'] = $trackDetails;
        return $this;
    }
}
